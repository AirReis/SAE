    <?php

session_start();
    
    class Controller_question extends Controller {
        
        public function action_default() {
            $this->action_question();
        }

        public function action_question() { 
            $m = Model::getModel();

            $publications = $m->TousLesQuestionsPageQuestions();
            $data = [];
            $data = [
            'publications' => $publications
            ];
            $this->render("question", $data);
            
        }

        public function action_PoserUneQuestion() {
            $m = Model::getModel();
            
                    $titreQuestion = $_POST['titreQuestion'];
                    $texteQuestion = $_POST['texteQuestion'];
                    $utilisateurID =  $_SESSION['idUtilisateur']; 
                    $m->InsererQuestion($titreQuestion, $texteQuestion, $utilisateurID);
                    echo "Le message a bien été envoyé";
               
        }
        
        
        

    }

?>