<?php
//require_once __DIR__.'/../classes/DB.php';

class News extends AbstractModel
{
    public $id;
    public $title;
    public $text;

    protected static $table = 'news';
    protected static $class = 'News';

}