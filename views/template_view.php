<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\..\style\css\style.css">
    <title>Главная страница</title>

    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

</head>
<body>

<header>
    <a href="/"> <img src="..\..\style\logo\logo.png" width="140" height="120" style="margin-top: 40px; margin-left: 60px"></a>
    <div class="login">
    <?php if(isset($_SESSION['user_login'])){
        echo
        "<span class='login_name'>Добро пожаловать! {$_SESSION['user_login']}</span>
        <a href='/admin_panel/'>Админ панель</a>
        <a href='/news/session_exit'>Выход</a>";
    }else {
        include DIR_CATALOG . DIR_VIEW . 'view_login.php';
    }
    ?>

    </div>

</header>

<div class="news_block">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/'.DIR_VIEW.$content_view; ?>
</div>

<div class="left_block">
    <h4>Рубрика</h4>
    <ul class="left_menu">
        <li><a href="/main/category/?category=Криминал">Криминал</a></li>
        <li><a href="/main/category/?category=Спорт">Спорт </a></li>
        <li><a href="/main/category/?category=Юмор">Юмор</a></li>
        <li><a href="/main/category/?category=В мире">В мире</a></li>
    </ul>
</div>



<div style="clear: both"></div>

<footer class="footer">
    <ul>
        <li><a href="">Реклама</a></li> |
        <li><a href="">О сайте</a></li> |
        <li><a href="">Правообладателям</a></li>
    </ul>
</footer>


</body>
</html>