<?php
session_start();

class Controller_traduction extends Controller {
    
    public function action_default() {
        $this->action_traduction();
    } 

    public function action_traduction() {
        $m = Model::getModel();
        $data = [];
        $data = [
        'utilisateurs' => $m->        TousLesTraductions(),
        ];
        $this->render("traduction", $data);
    }

    public function action_traduireMessage() {
        $key = 'f2de03e4564048358babf7674e10a157';
        $endpoint = 'https://api.cognitive.microsofttranslator.com';
        $location = 'global';
        
        $userInputText = $_POST['user_input'];
        $selectedLanguage = $_POST['language'];
        $route = "/translate?api-version=3.0&to=$selectedLanguage";
    
        $data = array(
            array('Text' => $userInputText)
        );
    
        $jsonData = json_encode($data);
    
        $options = array(
            'http' => array(
                'header' => "Content-type: application/json\r\n" .
                            "Ocp-Apim-Subscription-Key: $key\r\n" .
                            "Ocp-Apim-Subscription-Region: $location\r\n",
                'method' => 'POST',
                'content' => $jsonData,
            ),
        );
        
        $context = stream_context_create($options);
        $response = file_get_contents($endpoint . $route, false, $context);
        $result = json_decode($response, true);
    
        if (isset($result[0]['translations'][0]['text'])) {
            $translatedText = $result[0]['translations'][0]['text'];
    
            $m = Model::getModel();
            $insertion = $m->InsertionTraduction($userInputText, $translatedText, $selectedLanguage);
            if($insertion){
                $this->action_traduction();
            } else {
                echo "echec lors de l'insertion dans la base de données";
            }
        }
        
    }
}
?>
