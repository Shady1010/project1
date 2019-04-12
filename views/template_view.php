<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\..\style\css\style.css">
    <title>Главная</title>
</head>
<body>

<header>
    <a href="/"> <img src="..\..\style\logo\logo.png" width="140" height="120" style="margin-top: 40px; margin-left: 40px"></a>
    <div class="login">
    <?php if(isset($_SESSION['user_login'])){
        echo $_SESSION['user_login'];
        echo "<a href=\"http://practic/news/session_exit\">Выход</a>";
    }else {
        include DIR_CATALOG . DIR_VIEW . 'view_login.php';
    }
    ?>

    </div>

</header>

<div class="news_block">
    <?php include DIR_CATALOG.DIR_VIEW.$content_view; ?>
</div>

<div class="left_block">
    <h4>Рубрика</h4>
    <ul class="left_menu">
        <li><a href="">Криминал</a></li>
        <li><a href="">Спорт </a></li>
        <li><a href="">Юмор</a></li>
    </ul>
</div>



</body>
</html>