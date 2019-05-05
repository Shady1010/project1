<?php

//Вывод новостей

foreach ($data as $key => $value) {
    if($data !== null){
        echo "<div class='news'>
                <img src='/uploads/{$value['img']}' width='165' height='210' >
                <h2><a href='/news/urlNews/?idNews={$value['ID']}'>{$value['headline']}</a></h2><br>
                {$value['short_news']} <br><br>
                <div class='news_bottom_bar'>Категория: {$value['category']} | Автор: {$value['author']} | Дата: {$value['date']} | <a href='/admin_panel/edit_news/?idNews={$value['ID']}' style='color:coral'>Редактировать новость</a></div>
                    
                </div>";
    }else{
        break;
    }
}

echo '<span class="page_navigation">';
for($i = 0, $page=1 ; $i<ceil($pages[0]/config['LIMIT_NEWS']); $i++, $page++){
    echo "<span class='page'><a href='/admin_panel/get_news/?page={$i}'>$page</a> </span>";
}
echo '</span>';
?>

