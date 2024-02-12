<?php
session_start();
class Controller_message extends Controller {
    
    public function action_default() {
        $this->action_message();
    }

    public function action_message() { 
        $m = Model::getModel();
        $idUtilisateurActif = $_SESSION['idUtilisateur'];
        $TousLesReponses = $m->ReponseRecu($idUtilisateurActif);
        $data = [];
        $data = [
        'utilisateurs' => $m->allUser(),
        'idUtilisateurActif'=> $idUtilisateurActif,
        'TousLesReponses' => $TousLesReponses
        ];
        $this->render("message", $data);
        
    }

  
    public function action_envoyerMessage() {

        $model = Model::getModel();
        $idUtilisateurActif = $_SESSION['idUtilisateur'];

        if ($idUtilisateurActif !== null && isset($_POST['send']) && $_POST['send'] == 1) {
            $MessageDestinataire = $_POST['MessageDestinataire'];
            $MessageDestinataire = intval($MessageDestinataire);
            $MessageContenu = $_POST['MessageContenu'];
        
            $testUtilisateur = $model->VerifiUtilisateur($MessageDestinataire);
     
            if ($testUtilisateur) {
                try {
                    $model->InsertionDonnees($idUtilisateurActif, $MessageDestinataire, $MessageContenu);
                    echo "Le message a bien été envoyé";
                    $this->action_default();
                    
                    
                } catch (Exception $e) {
                    echo 'Erreur SQL : ',  $e->getMessage(), "\n";
                }  
            }
        }
    }





}
