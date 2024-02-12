<?php

class Model
{

    private $db;

 
     private static $instance = null;


  
    private function __construct()
    {
        $this->db=new PDO('mysql:host=localhost;dbname=airreis', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->query("SET nameS 'utf8'");
    }

    public static function getModel()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }



    public function allUser()
    {
        $all = $this->db->prepare('SELECT nomUtilisateur, utilisateurID FROM utilisateurs');
        $all->execute();
        return $all->fetchAll(PDO::FETCH_ASSOC);
    }

    public function VerifiUtilisateur($MessageDestinataire)
    {
        $all = $this->db->prepare('SELECT * FROM utilisateurs WHERE utilisateurID = :utilisateurID');
        $all->bindParam(':utilisateurID', $MessageDestinataire);
        $all->execute();
        $utilisateur = $all->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur) {
            return "L'utilisateur existe dans la base de données.";
        } else {
            return "L'utilisateur n'existe pas dans la base de données.";
        }
    }

    public function ReponseRecu($idUtilisateurActif)
    {
        $query = $this->db->prepare("SELECT messagesprives.messageID, messagesprives.expediteurID, messagesprives.destinataireID, 
            messagesprives.message, messagesprives.dateEnvoi, expediteur.nomUtilisateur as expediteurNom
            FROM messagesprives
            INNER JOIN utilisateurs as expediteur ON messagesprives.expediteurID = expediteur.utilisateurID
            WHERE messagesprives.destinataireID = :idUtilisateurActif");

        $query->bindParam(':idUtilisateurActif', $idUtilisateurActif);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function InsertionDonnees($idUtilisateurActif, $MessageDestinataire, $MessageContenu)
    {
        
            $requeteInsertion = $this->db->prepare('INSERT INTO messagesprives (expediteurID, destinataireID, message) VALUES (:expediteurID, :destinataireID, :message)');
            $requeteInsertion->bindParam(':expediteurID', $idUtilisateurActif);
            $requeteInsertion->bindParam(':destinataireID', $MessageDestinataire);
            $requeteInsertion->bindParam(':message', $MessageContenu);
            $requeteInsertion->execute();
    

}


  public function UtilisateurConnexion($email){
        $stmt = $this->db->prepare('SELECT * FROM utilisateurs WHERE email = :email');
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
  }




  public function UtilisateurDejaExistant($email){
    $stmt = $this->db->prepare('SELECT * FROM utilisateurs WHERE email = :email');
    $stmt->execute(['email' => $email]);
 
    return $stmt->rowCount() > 0;
 }
 


public function NouveauUtilisateur($email, $nomUtilisateur, $motDePasse){
    $stmt = $this->db->prepare('INSERT INTO utilisateurs (nomUtilisateur, motDePasse, email) VALUES (:nomUtilisateur, :motDePasse, :email)');

   $reussie =  $stmt->execute([
        'nomUtilisateur' => $nomUtilisateur,
        'motDePasse' => $motDePasse,
        'email' => $email
    ]);

    return $reussie;
   
}

public function ChercherNomUtilisateur($idUtilisateurActif){
    $stmt = $this->db->prepare('SELECT nomUtilisateur FROM utilisateurs WHERE utilisateurID = :idUtilisateurActif');
    $stmt->bindParam(':idUtilisateurActif', $idUtilisateurActif);

    if ($stmt->execute()) {
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            return $resultat['nomUtilisateur'];
        } else {
            return "Utilisateur non trouvé";
        }
    } 
}



public function InsertionTraduction($userInputText, $translatedText, $selectedLanguage) {
    try {
        $stmt =  $this->db->prepare("INSERT INTO translations (original_text, translated_text, target_language) VALUES (?, ?, ?)");
        $stmt->execute([$userInputText, $translatedText, $selectedLanguage]);
        return true;
    } catch (PDOException $e) {
        echo "Erreur d'insertion dans la base de données : " . $e->getMessage();
        return false;
    }
}
  
public function TousLesTraductions(){

    $stmt = $this->db->prepare("SELECT * FROM translations ORDER BY id DESC LIMIT 5"); 
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

public function InsertionPublication($utilisateurID, $titre, $description) {
        $stmt =$this->db->prepare('INSERT INTO publications (utilisateurID, titre, description) VALUES (:utilisateurID, :titre, :description)');
        $stmt->bindParam(':utilisateurID', $utilisateurID);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        // $stmt->bindParam(':image', $image);
        $stmt->execute();
}

public function TousLesPublications(){
    
        $stmt = $this->db->prepare('SELECT * FROM publications ORDER BY datePublication DESC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

}


public function ReponseCorrecte($questionID) {
    $stmt =$this->db->prepare('SELECT * FROM choixQuestions WHERE questionID = :questionID AND estCorrect = 1');
    $stmt->bindParam(':questionID', $questionID);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


public function getQuizIDBySubject($sujet) {
    $stmt =$this->db->prepare('SELECT quizID FROM quiz WHERE sujet = :sujet');
    $stmt->bindParam(':sujet', $sujet);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function getQuestionsByQuizID($quizID) {
    $stmt = $this->db->prepare('SELECT * FROM questionsquiz WHERE quizID = :quizID');
    $stmt->bindParam(':quizID', $quizID);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function getAllQuizSubjects() {
    $stmt = $this->db->query('SELECT DISTINCT sujet FROM quiz');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



public function TousLesQuestions($questionID){
        $stmt =$this->db->prepare('SELECT * FROM choixQuestions WHERE questionID = :questionID');
        $stmt->bindParam(':questionID', $questionID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

}

public function InsererQuestion($titreQuestion, $texteQuestion, $utilisateurID) {

        $requeteInsertion = $this->db->prepare('INSERT INTO questions (titre, texte, utilisateurID) VALUES (:titre, :texte, :utilisateurID)');
        $requeteInsertion->bindParam(':titre', $titreQuestion);
        $requeteInsertion->bindParam(':texte', $texteQuestion);
        $requeteInsertion->bindParam(':utilisateurID', $utilisateurID);

        $requeteInsertion->execute();

}


public function TousLesQuestionsPageQuestions(){
    $stmt =$this->db->query('SELECT * FROM questions ORDER BY dateCreation DESC');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function ChercherQuestion($questionID){
    $stmt = $this->db->prepare('SELECT * FROM questions WHERE questionID = :questionID');
    $stmt->bindParam(':questionID', $questionID);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC); // Utiliser fetch() pour obtenir une seule ligne
}

public function ChercherQuestionReponseOrdre($questionID){
    $stmt = $this->db->prepare('SELECT * FROM reponses WHERE questionID = :questionID ORDER BY dateCreation DESC');
    $stmt->bindParam(':questionID', $questionID);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau de réponses
}

public function InsererReponse($texteReponse, $questionID, $utilisateurID){

    $stmt = $this->db->prepare('INSERT INTO reponses (texte, questionID, utilisateurID) VALUES (:texteReponse, :questionID, :utilisateurID)');
    $stmt->bindParam(':texteReponse', $texteReponse);
        $stmt->bindParam(':questionID', $questionID);
        $stmt->bindParam(':utilisateurID', $utilisateurID);
        $stmt->execute();
  
}


}













