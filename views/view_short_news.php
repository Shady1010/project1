 <?php

 //Вывод новостей
 foreach ($data as $key => $value) {
    if($data !== null){
        echo "<div class='news'>
            <img src='/uploads/{$value['img']}' width='165' height='210'  >
            <h2><a href='/news/urlNews/?idNews={$value['ID']}'>{$value['headline']}</a></h2><br>
            {$value['short_news']} <br><br>
            <div class='news_bottom_bar'>Категория: {$value['category']} | Автор: {$value['author']} | Дата: {$value['date']}</div> 
            </div>";
    }else{
         break;
        }
}
echo '<span class="page_navigation">';
for($i = 0, $page=1 ; $i<ceil($pages[0]/config['LIMIT_NEWS']); $i++, $page++){
    echo "<span class='page'><a href='/main/index/?page={$i}'>$page</a> </span>";
}
echo '</span>';
?>

