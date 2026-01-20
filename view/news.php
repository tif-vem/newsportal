<?php
class ViewNews{
    public static function NewsByCategory($arr) {
        foreach($arr as $value) {
            
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $value['picture'] ).'"
            width=150 /><br>';
            echo "<h2>".$value['title']."</h2>";

            echo "<a href='news?id=".$value['id']."'>Edasi</a><br>";
        }
    }


    public static function AllNews ($arr) {
        foreach($arr as $value) {
            echo "<li>".$value['title'];

            echo "<a href='news?id=".$value['id']."'>Edasi</a></li><br>";
        }
    }

    public static function ReadNews($news) {
        echo "<h2>".$news['title']."</h2>";
       // echo "test";

        echo '<br><img src="data:image/jpeg;base64,'.base64_encode( $news['picture'] ).'"width=150
         /><br>';
        echo "<p>".$news['text']."</p>";
    }
    //добавить методы для других прдставлений новостей
}
?>
