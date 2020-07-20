<?php
require "vendor/autoload.php";
use \Slim\Slim;

$app = new Slim();
$db = new mysqli('br540.hostgator.com.br','cons0645_admin','admin', 'cons0645_produto');

$app->get("/produtos", function() use($db, $app){
	$query = $db->query("select * from produtos");
	$produtos = array();
	while($fila= $query->fetch_assoc()){
		$produtos[] = $fila;
	}
	echo json_encode($produtos);
});


$app->run();