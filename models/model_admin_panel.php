<?php
/**
 * Created by PhpStorm.
 * User: shady
 * Date: 11.04.2019
 * Time: 1:22
 */

class Model_admin_panel extends Model
{
    function setData($headline, $short_news, $full_news, $img){
        $author = $_SESSION['user_login'];
        $date = date('l jS \of F Y h:i', time());
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $c = $pdo->prepare("INSERT INTO news (headline, short_news, full_news, author, date)  VALUES (?, ?, ?, ?, ?)");
        $c->execute(array($headline, $short_news, $full_news, $author, $date));
        $pdo = null;


        $target_dir = DIR_CATALOG.'uploads\\';
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}