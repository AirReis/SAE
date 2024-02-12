<?php


class Controller_continent extends Controller {

    
    public function action_default()
    {
        $this->action_afrique();
    }

    public function action_afrique()
    {   
        $data = ["erreur" => false];
        $this->render("afrique", $data);
    }


}