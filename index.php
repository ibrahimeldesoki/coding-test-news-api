<?php

use App\BoolmbergNewsApi;
use App\BoolmbergNews\BoolmbergNews;
use Package\FoxNews\FoxNews;
use Package\NYTimes\NewYorkTimes;
use App\NewsAggregator;
use App\FoxNewsApi;
use App\NewYorkTimesApi;

require __DIR__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

$aggregator = new NewsAggregator;
$aggregator->addNewsPaper(new NewYorkTimesApi(new NewYorkTimes()));
$aggregator->addNewsPaper( new FoxNewsApi(new FoxNews()));
$aggregator->addNewsPaper(new BoolmbergNewsApi());
$news = $aggregator->get();

print_r($news);
