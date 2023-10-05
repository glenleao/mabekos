<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Mabeko\Page;

$app = new Slim();
$app->config('debug', true);
$app->get('/', function(){
// echo "Olá Mabekos!";
// $sql = new Mabeko\DB\Sql();
// $results = $sql->select("SELECT * FROM tb_users");	

// echo json_encode($results);

	$page = new Page();
	$page->setTpl("index");

});

$app->run();
