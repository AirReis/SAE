<?php
session_start();

class Controller_connexion extends Controller{

    public function action_default()
    {
        $this->action_seconnecter();
    }

    public function action_seconnecter()
    {   
        $data = ["erreur" => false];
        $this->render("inscription", $data);
    }

    public function action_login() {

        $model = Model::getModel();
        $email = $_POST['email'];
        $motDePasse = $_POST['password'];
        $utilisateur = $model->UtilisateurConnexion($email);

        if ($utilisateur && password_verify($motDePasse, $utilisateur['motDePasse'])) {
            $idUtilisateur = $utilisateur['utilisateurID'];
            $_SESSION['idUtilisateur'] = $idUtilisateur;
            $data = ["erreur" => false];
            $this->render("accueil", $data);
        }
        else {
            $data = ["erreur" => true];
            $this->render("inscription", $data);
            echo "E-mail ou mot de passe incorrect.";
        }
    }
}
?>
