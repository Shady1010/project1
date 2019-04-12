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

public function __construct()
{
    if($_SESSION['user_login'] != 'Admin'){
        echo "Доступ запрещен!!!";
        header('Location: http://practic/');
        exit;
    }else {
        $this->view = new View();

        if ( isset($_POST['headline'], $_POST['short_news'], $_POST['full_news'], $_POST['img'])){
            $this->model = new Model_admin_panel();
            $this->add_news();

        }
    }
}

    public function action_index()
    {

        $this->view->generate_admin_panel( 'view_add_news.php','template_admin_panel');
    }

    private  function add_news()
    {
        $this->model->setData($_POST['headline'], $_POST['short_news'], $_POST['full_news'], $_POST['img']);
    }


}