<?php
session_start();

class Controller_discussion extends Controller {

    public function action_default()
    {
        $this->action_discussion();
    }

    public function action_discussion()
    {   
        $m = Model::getModel();
        $questionID = $_GET['questionID'];
        $question = $m->ChercherQuestion($questionID);
        $reponses = $m->ChercherQuestionReponseOrdre($questionID);
        $data = [
            'questionID' => $questionID,
            'question' => $question,
            'reponses' => $reponses
        ];
        $this->render("discussion", $data);
    }

    public function action_repondreQuestion(){

        $m = Model::getModel();
        $texteReponse = $_POST['texteReponse'];
        $questionID = $_POST['questionID'];
        $utilisateurID = $_SESSION['idUtilisateur'];
        $m->InsererReponse($texteReponse,$questionID,$utilisateurID);
        echo "La réponse à été envoyé";
    }
}
?>
