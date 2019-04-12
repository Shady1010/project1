<?php

class Controller
{
    private $view;

    function __construct()
    {
        $this->view = new View();
    }

    public function action_session_exit(){
        session_destroy();
        header('Location: http://practic/');
    }


}