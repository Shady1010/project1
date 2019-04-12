

    <?php
    foreach ($data as $key => $value) {
        if($data !== null){
            if($key !== 'ID' && $key !== 'full_news') {
                echo '<div class="news">';
                echo $value['headline'].'</p><br><br>'
                    .$value['short_news'].'<br><br>'
                    .$value['author'].'<br><br>'
                    .$value['date'].
                '</div>';
            }else{
                continue;
            }
        }else{
            break;
        }

    }
    ?>