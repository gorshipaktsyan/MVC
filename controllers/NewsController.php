<?php

//require __DIR__.'/../models/News.php';


class NewsController
{
    public function actionAll()
    {

        $art = NewsModel::findAll();
        $view = new View();
        $view->items = $art;
        echo $view->render('news/All.php');


    }

    public function actionOne()
    {

        
        $id = 1;
        $item = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $item;
        echo $view->render('news/One.php');
    }

    public function actionInsert()
    {

        $art = new NewsModel();
        $art->title = 'Gor';
        $art->text = 'Gor Shipaktsyan';
        $art->insert();

    }

    public function actionUpdate()
    {

        $art = NewsModel::findOneByPk(1);
        $art->text = 'Gor Shipaktsyan';
        $art->update();

    }




}