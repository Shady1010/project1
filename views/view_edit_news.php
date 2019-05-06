<div class="news">
    <form action="/admin_panel/update_news/?ID=<?php echo $data[0]['ID']?>" method="POST" enctype="multipart/form-data">

        <label for="category" id="category">Категория: </label> <br>
        <select size="1"  name="category">
            <option selected disabled>Выберите категорию</option>
            <option  value="Криминал">Криминал</option>
            <option  value="Спорт">Спорт</option>
            <option value="Юмор">Юмор</option>
            <option value="В мире">В мире</option>
        </select>
        <br><br>

        <label for="headline"> Заголовок: </label> <br><input required maxlength="150"  value="<?php echo $data[0]['headline']?>" type="text" name="headline" id="headline"  style="border-style:none; border: 1px solid #c3c3c3; background: #F1F1F1; width: 50%; height: 30px; padding:5px;"><br><br>
        <label for="short_news"> Аннотация (max 1000):</label><br> <textarea required id="short_news"  style="padding:10px; width:90%;height: 300px;  border: 1px solid #c3c3c3; background: #F1F1F1;" name="short_news" maxlength="1000"><?php echo $data[0]['short_news']?></textarea><br><br>
        <label for="full_news"> Полная новость:</label>  <br>      <textarea required id="full_news" style="padding:10px;width:90%;height: 300px;  border: 1px solid #c3c3c3; background: #F1F1F1;" name="full_news"><?php echo $data[0]['full_news']?></textarea><br><br>
        <hr>
        Загруженная фотография:
        <br>
        <div class="edit_img">
            <img src='/uploads/<?php echo $data[0]['img']?>'>
            <a href="/admin_panel/delete_img/?img=<?php echo $data[0]['img']?>&ID=<?php echo $data[0]['ID']?>" target="_blank"><img  style="margin-top: 70px; border: 1px solid #ddd; width: 20px; height: 20px; margin-left: -8px" src='/style/images/delete.png' alt="Удалить"   title="Удалить изображение"></a>
        </div>
        <br><hr>
        <label for="img">Загрузить фото </label><input  type="file"  id="img" name="img" ><br><br>
        <hr>
        <input type="submit" value="Сохранить">

    </form>
</div>

