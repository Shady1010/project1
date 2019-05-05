<?php

class Controller
{
    private $view;
    private $model;

    function __construct($model)
    {
        $config = require_once $_SERVER['DOCUMENT_ROOT']."/config/config.php";
        $this->view = new View();
        $this->model = new $model();
    }

    public function action_session_exit(){
        session_destroy();
        header('Location: http://practic/');
    }

    public function page(){

        $pages = $this->model->count_news;

        if($_GET['page']<ceil($pages[0]/config['LIMIT_NEWS'])){
            $offset = $_GET['page'];
            $data = $this->model->get_news($offset);
            $this->view->generate('view_short_news.php', 'template_view', $data, $pages);
        }else{
            $this->view->generate('view_error.php', 'template_view');

        }

    }

}