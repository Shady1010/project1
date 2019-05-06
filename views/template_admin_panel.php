<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="..\..\style\css\style.css">
    <title>Главная</title>

    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


</head>
<body>

<header><a href="/"> <img src="..\..\style\logo\logo.png" width="140" height="120" style="margin-top: 40px; margin-left: 40px"></a></header>
<div class="news_block">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/'.DIR_VIEW.$content_view; ?>
</div>

<div class="left_block">
    <ul class="left_menu">
        <li><a href="/admin_panel/index">Добавить новость</a></li>
        <li><a href="/admin_panel/get_news">Все новости</a></li>
        <li><a href="/admin_panel/settings">Настройки</a></li>
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