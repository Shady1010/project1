<?php
/**
 * Created by PhpStorm.
 * User: shady
 * Date: 11.04.2019
 * Time: 0:21
 */

class Controller_admin_panel extends Controller
{
private $view;
private $model;
private $data;
private $pages;

public function __construct()
{
    if($_SESSION['user_login'] != 'Admin'){
        die("Доступ запрещен!!!");
    }else {
            $this->view = new View();
            $this->model = new Model_admin_panel();
            parent::__construct($this->model);
    }
}
//Вывод формы для добовления новостей
    public function action_index()
    {
        $this->view->generate_admin_panel( 'view_add_news.php','template_admin_panel');
    }
//Добавлене новостей
    public  function action_add_news()
    {
        if ( isset($_POST['headline'], $_POST['short_news'], $_POST['full_news'], $_POST['category'])) {
            $this->model->setData($_POST['headline'], $_POST['short_news'], $_POST['full_news'], $_POST['category']);
        }else{
            $this->view->generate_admin_panel( 'view_add_news.php','template_admin_panel');
            die('Данные не заполнены');

        }
    }
//Вывод новостей в админ панель
    public function action_get_news()
    {
        if(isset($_GET['page'])){
            parent::page();
        }else{
            $offset = 0;
            $this->pages = $this->model->count_news;
            $this->data = $this->model->get_news($offset);
            $this->view->generate_admin_panel('view_admin_short_news.php', 'template_admin_panel', $this->data, $this->pages);
        }

    }
//Редактирование новостей из админ панеля
    public function action_edit_news()
    {
        if ($idNews = $_GET['idNews']) {
            $model_get_news = new Model_news();
            $data = $model_get_news->get_full_news($idNews);
            $this->view->generate_admin_panel('view_edit_news.php', 'template_admin_panel', $data);
        }else{
            die('Страница отсутствует!');
        }
    }

    public function action_update_news()
    {
        if ( isset($_POST['headline'], $_POST['short_news'], $_POST['full_news'], $_POST['category'], $_GET['ID'])) {
        $this->model->setEditNews($_POST['headline'], $_POST['short_news'], $_POST['full_news'], $_POST['category'], $_GET['ID']);
        }else{
            die('Данные не заполнены или введены не коректно');
        }
    }

    public function action_delete_img()
    {
        if(isset($_GET['img'], $_GET['ID'])){
            $this->model->deleteImg($_GET['img'], $_GET['ID']);
        }else{
            die('Изображение не существует');
        }

    }
    //----------------------------------

    public function action_settings()
    {
        $this->view->generate_admin_panel('view_admin_settings.php', 'template_admin_panel');
    }

    public function action_save_settings()
    {
        $max_index_news = $_POST['max_index_news'];
        $max_news = $_POST['max_news'];

        $this->model->set_settings($max_index_news, $max_news);
        header('Location: /admin_panel/settings');
    }


}