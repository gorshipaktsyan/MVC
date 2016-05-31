<?php

//require __DIR__.'/../models/News.php';


class NewsController
{
    public function actionAll()
    {

        $items = News::getAll();
        $view = new View();
        $view->items = $items;
        echo $view->render('news/all.php');


    }

    public function actionOne()
    {

        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->item = $item;
        echo $view->render('news/One.php');
    }





}