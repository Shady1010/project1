<?php

class Controller_News extends Controller
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new Model_news();
        $this->view = new View;
    }

    function action_index(){
        $data = $this->model->get_date();
        $this->view->generate('view_short_news.php', 'template_view', $data);
    }
}