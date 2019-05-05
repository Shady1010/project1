<?php
/**
 * Created by PhpStorm.
 * User: shady
 * Date: 11.04.2019
 * Time: 1:22
 */

class Model_admin_panel extends Model
{
    public $count_news;
    public function __construct()
    {
        parent::__construct();
        $this->count_news = $this->bdConnect->query("SELECT count(*) FROM news")->fetch(PDO::FETCH_NUM);
    }

    public function get_news($offset)
    {
        $offset*= config['LIMIT_NEWS'];

        $result = $this->bdConnect->query("SELECT * FROM news ORDER BY ID DESC LIMIT ".config['LIMIT_NEWS']." OFFSET {$offset}")->fetchAll(PDO::FETCH_BOTH);
        $this->stopConnection();

        return $result;
    }

    public function setData($headline, $short_news, $full_news, $category)
    {
        $author = $_SESSION['user_login'];
        $date = date('Y/m/d');

        $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
        $target_file = $target_dir . basename($_FILES["img"]["name"]);

        $result = $this->bdConnect->prepare("INSERT INTO news (headline, short_news, full_news, category, author, date, img)  VALUES (?, ?, ?, ?, ?, ?, ?)");
        $result->execute(array($headline, $short_news, $full_news, $category ,$author, $date, basename($_FILES["img"]["name"])));
        $this->stopConnection();

        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    public function setEditNews($headline, $short_news, $full_news, $category, $id)
    {
        $author = $_SESSION['user_login'];
        $date = date('Y/m/d');

        if(isset($_FILES["img"]) && !empty($_FILES['img'] && $_FILES['img']['name'] != ''))
        {
            $result = $this->bdConnect->prepare("UPDATE news SET headline=?, short_news=?, full_news=?, category=?, author=?, date=?, img=? WHERE ID={$id}");
            $result->execute(array($headline, $short_news, $full_news, $category , $author, $date, basename($_FILES["img"]["name"])));
            $this->stopConnection();

            $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
            $target_file = $target_dir . basename($_FILES["img"]["name"]);

            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
            }
        }else{

            $result = $this->bdConnect->prepare("UPDATE news SET headline=?, short_news=?, full_news=?, category=?, author=?, date=? WHERE ID={$id}");
            $result->execute(array($headline, $short_news, $full_news, $category , $author, $date));
            $this->stopConnection();
            echo 'Обновлено';

        }
    }

    public function deleteImg($img, $id)
    {
        $this->bdConnect->query("UPDATE news SET img='' WHERE ID={$id}");
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/'.$img);
        $this->stopConnection();
        die('Файл удален!');
    }

    public function set_settings($max_value_main, $max_value_news)
    {

    }

}