<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();
$app->config('debug', true);
$app->get('/', function(){
// echo "Olá Mabekos!";
$sql = new Mabeko\DB\Sql();
$results = $sql->select("SELECT * FROM tb_users");	

echo json_encode($results);

});

$app->run();
