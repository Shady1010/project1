<div class='news'>
    <form name="" action="/admin_panel/settings">
        <label for="max_index_news">Изменить максимальное количество новостей в ленте на главной странице</label><br>
        <input type="number" id="max_index_news" name="max_index_news" required value="<?php echo  config['LIMIT_NEWS']?>"> <hr>

        <label for="max_news">Изменить количество новостей на одной странице при выводе всех актуальных  новостей</label><br>
        <input type="number" id="max_news" name="max_news" required value="<?php echo  config['LIMIT_NEWS']?>"> <hr>

        <input type="submit" value="Сохранить">
    </form>
</div>