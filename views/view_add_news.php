<div class="news">
<form action="<?php DIR_CATALOG.DIR_FILE[0].'controller_admin_panel.php'?>" method="POST" >

    <label for="headline"> Заголовок: </label> <br><input type="text" name="headline" id="headline" style="width: 50%; height: 30px"><br><br>
    <label for="short_news"> Короткая новость:</label> <textarea id="short_news"  style="width:90%;height: 300px;" name="short_news" maxlength="1000"></textarea><br><br>
    <label for="full_news"> Полная новость:</label>   <textarea  id="full_news" style="width:90%;height: 300px;" name="full_news"></textarea><br><br>
    <label for="img">Загрузить фото </label><input  type="file"  id="img" name="img"><br><br>
    <input type="submit" value="Добавить">

</form>
</div>