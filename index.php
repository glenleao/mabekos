<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Gln\Page;
use \Gln\PageAdmin;

$app = new Slim();
$app->config('debug', true);
$app->get('/', function(){

	$page = new Page();
	$page->setTpl("index");

});

$app->get('/admin', function(){

	$page = new PageAdmin();
	$page->setTpl("index");

});

$app->get('/contato/', function(){

	$page = new Page();
	$page->setTpl("contato");

});



$app->get('/portfolio', function(){

	$page = new Page();
	$page->setTpl("portfolio");

});


$app->run();
