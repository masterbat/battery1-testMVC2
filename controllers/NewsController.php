<?php

include_once ROOT.'/models/News.php';
/**
 * Контроллер CartController
 */
class NewsController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        echo "actionIndex in NewsController - много новостей";
        // во views/news/index.php будет
        // представление этого actionIndex (действия)
        $newsList = array();
        $newsList = News::getNewsList();
        require_once (ROOT.'/views/news/index.php');
        return true;
    }

    public function actionView($id)
    {
        echo "actionIndex in NewsController - одна новость";
        if($id){
            $newsItem = News::getNewsItemById($id);
            require_once (ROOT.'/views/news/view.php');
        }
        return true;
    }
}