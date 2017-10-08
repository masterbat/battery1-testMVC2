<?php

class News
{
    /**
     * возвращает одну новость со своим id
     * @param int $id
     */
    public static function getNewsItemById($id)
    {
        //запрос к БД
        $id = intval($id);
        if($id){

//            $host = 'localhost';
//            $dbname = 'mag';
//            $user = 'root';
//            $password = '';
//            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
//

            $db = Db::getConnection();
            $result = $db->query('SELECT * from catalog WHERE id ='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();
            return $newsItem;
        }

    }

    /**
     * возвращает массив новостей
     */
    public static function getNewsList()
    {
        //запрос к БД
        $db = Db::getConnection();

        $newsList = array();
        $result = $db->query('SELECT * FROM catalog');
        $i = 0;
        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['img'] = $row['img'];
            $newsList[$i]['title'] = $row['title'];
            $i++;
        }
        return $newsList;

    }
}