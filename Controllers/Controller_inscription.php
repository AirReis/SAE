<?php
session_start();

class Controller_inscription extends Controller{

    public function action_default()
    {
        $this->action_inscription();
    }

    public function action_inscription()
    {   
        $data = ["erreur" => false];
        $this->render("inscription", $data);
    }

    public function action_sinscrire() {
        
        $model = Model::getModel();
        $nomUtilisateur = $_POST['username'];
        $email = $_POST['email'];
        $motDePasse = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $UtilisateurDejaExistant = $model->UtilisateurDejaExistant($email);
        if($UtilisateurDejaExistant){
            echo "Un compte avec cet e-mail existe déjà.";
        }
        else{
            $insertionUtilisateur = $model->NouveauUtilisateur($email, $nomUtilisateur, $motDePasse);
            
            if($insertionUtilisateur){
                $utilisateur = $model->UtilisateurConnexion($email);
                $idUtilisateur = $utilisateur['utilisateurID'];
                $_SESSION['idUtilisateur'] = $idUtilisateur;
                $data = ["erreur" => false];
                $this->render("accueil", $data);
    
            }
        }


    }}

       
        


        
      
      


          
        
    


?>