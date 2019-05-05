<div class="news">
<form action="/admin_panel/add_news" method="POST" enctype="multipart/form-data">

    <label for="category">Категория: </label> <br>
    <select size="1" required name="category" >
        <option selected disabled>Выберите категорию</option>
        <option value="Криминал">Криминал</option>
        <option value="Спорт">Спорт</option>
        <option value="Юмор">Юмор</option>
        <option value="В мире">В мире</option>
    </select>
    <br><br>

    <label for="headline"> Заголовок: </label> <br><input type="text" name="headline" maxlength="50" id="headline"  style="border-style:none; border: 1px solid #c3c3c3; background: #F1F1F1; width: 50%; height: 30px;"><br><br>
    <label for="short_news"> Аннотация (max 1000): <br></label> <textarea id="short_news" maxlength="1000" style="width:90%;height: 300px; border-style:none; border: 1px solid #c3c3c3; background: #F1F1F1; " name="short_news" maxlength="1000"></textarea><br><br>
    <label for="full_news"> Полная новость:<br></label>   <textarea  id="full_news" style="width:90%;height: 300px; border-style:none; border: 1px solid #c3c3c3; background: #F1F1F1;" name="full_news"></textarea><br><br>
    <label for="img">Загрузить фото </label><input  type="file"  id="img" name="img"><br><br>

    <input type="submit" value="Добавить">

</form>
</div>
