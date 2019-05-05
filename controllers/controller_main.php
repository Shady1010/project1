<?php

class Controller_Main extends Controller
{
    private $model;
    private $view;
    private $offset;
    private $pages;
    private $data;
   public function __construct()
   {
       $this->model = new Model_main();
       $this->view = new View;
       parent::__construct($this->model);
   }

   public function action_index()
   {
       if(isset($_GET['page'])){
           parent::page();
       }else{
           $this->offset = 0;
           $this->pages = $this->model->count_news;
           $this->data = $this->model->get_news($this->offset);
           $this->view->generate('view_short_news.php', 'template_view', $this->data, $this->pages);
        }

   }
   public function action_category()
   {
       if (isset($_GET['page'])) {
           parent::page();
       } else {
           $this->offset = 0;
           $category = urldecode($_GET['category']);
           $this->pages = $this->model->get_count_category($category);
           $this->data = $this->model->get_news_category($this->offset, $category);
           $this->view->generate('view_short_news.php', 'template_view', $this->data, $this->pages);
       }
   }

}