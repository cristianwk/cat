<?php
require_once "vendor/autoload.php";
//use \Slim\Slim;

$app = new \Slim\Slim();
$app->get('/breeds/:name', function ($name) {
    echo "Yours breed is: ".$name;
});

//$app->get('')


$app->run();