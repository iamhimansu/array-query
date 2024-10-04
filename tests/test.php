<?php
require(__DIR__ . '/../vendor/autoload.php');

use iamhimansu\arrayquery\ArrayLoader;
use iamhimansu\arrayquery\ArrayQuery;

ini_set('xdebug.var_display_max_depth', 6);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 1024);

$loader = ArrayLoader::loadFromJsonFile(__DIR__ . '/../json/data-1.json');

$query = ArrayQuery::find($loader);

$query->select([])
    ->where([
        'id' => 1
    ])
    ->groupBy(['']);
echo '<pre>';
var_dump($loader);
die;