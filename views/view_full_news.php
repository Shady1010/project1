<?php

//вывод новостей

foreach ($data as $value) {
    if($data !== null){
        echo "<div class='news'>
                <img src='/uploads/{$value['img']}'  width='165' height='210' >
                <h2>{$value['headline']}</h2><br>
                {$value['full_news']} <br><br>
                <div class='news_bottom_bar'>Категория: {$value['category']} | Автор: {$value['author']} | Дата: {$value['date']}</div>     
              </div>";
    }else{
        break;
    }
}
?>

