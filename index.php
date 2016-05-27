<?php
require __DIR__.'/models/News.php';

$items = News::getAll();

include __DIR__.'/views/index.php';