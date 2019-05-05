<?php

class Controller_News extends Controller
{
    private $model;
    private $view;
    private $idNews;
    private $offset;
    private $pages;
    private $data;
    public function __construct()
    {
        $this->model = new Model_news();
        $this->view = new View;
        parent::__construct($this->model);
    }
//Вывод коротких новостей на главной странице
    function action_index()
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
//Вывод полной новости на сайте
    function action_urlNews()
    {
        if($this->idNews = $_GET['idNews']){
        $data = $this->model->get_full_news($this->idNews);
        $this->view->generate('view_full_news.php', 'template_view', $data);
        }else{
            die('Ой, такая старница отсутствует!');
        }
    }
}