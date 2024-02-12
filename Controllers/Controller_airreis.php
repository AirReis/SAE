<?php


class Controller_airreis extends Controller {

    
    public function action_default()
    {
        $this->action_airreis();
    }

    public function action_airreis()
    {   
        $data = ["erreur" => false];
        $this->render("airreis", $data);
    }


}