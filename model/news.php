<?php
class News {
    public static function getLast10News() {
        $query = "SELECT * FROM News ORDER BY id DESC LIMIT 3";
        $db = new Database();
        //var_dump($db); die();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllNews() {
        $query = "SELECT * FROM News ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getNewsByCategoryID($id) {
        $query = "SELECT * FROM News WHERE category_id=".(string)$id . " ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
    public static function getNewsByID($id) {
        $query = "SELECT * FROM News WHERE id=".(string)$id;
        $db = new Database();
        $n = $db->getOne($query);
        return $n;
    }
}
?>
