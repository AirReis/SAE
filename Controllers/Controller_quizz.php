<?php

class Controller_quizz extends Controller {
    
    public function action_default() {
        $this->action_quizz();
    }

    public function action_quizz() { 
        $m = Model::getModel();
        $sujets = $m->getAllQuizSubjects();
        $data = [
            'sujets' => $sujets];
            $this->render("quizz", $data);
    }

    public function action_FaireQuizz() {
        $m = Model::getModel();
        
        $sujetChoisi = isset($_GET['sujet']) ? $_GET['sujet'] : null;
        $score = 0;
        $reponsesUtilisateur = [];
        $reponsesCorrectes = [];
        $reponsesIncorrectes = [];
        
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'q') === 0) {
                $questionID = substr($key, 1);
                $reponseCorrecte = $m->ReponseCorrecte($questionID);
                $reponsesUtilisateur[$questionID] = $value;
                if ($reponseCorrecte && $value == $reponseCorrecte['choixTexte']) {
                    $score++;
                    $reponsesCorrectes[$questionID] = $value;
                } else {
                    $reponsesIncorrectes[$questionID] = $value;
                }
            }
        }
        
        if ($sujetChoisi) {
            $quizData = $m->getQuizIDBySubject($sujetChoisi);

            if ($quizData) {
                $quizID = $quizData['quizID'];
                $m->getQuestionsByQuizID($quizID);
            } else {
                echo "Sujet non trouvé.";
            }

            $choixQuestion = $m->TousLesQuestions($questionID);
            $data = [];
            $data = [
                'choixQuestion' => $choixQuestion,
                'sujetChoisi' => $sujetChoisi
            ];
            $this->render("quizz",$data);
        } else {
            $m->getAllQuizSubjects();
        }
        
        
    }
}
?>
