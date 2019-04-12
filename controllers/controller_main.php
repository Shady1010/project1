<?php

class Controller_Main extends Controller
{
    private $model;
    private $view;

   public function __construct()
   {
       $this->model = new Model_main();
       $this->view = new View;
   }

    function action_index()
    {
        $data = $this->model->get_date();
        $this->view->generate('view_short_news.php', 'template_view', $data);
    }
}