<?php
//Crdenciais de acesso ao BD HOSTGATOR

 // $servidor = "localhost";
 // $usuario = "glenle78_glenkg";
 // $senha = "gln0621";
 // $dbname = "glenle78_kgsistema";


 //Crdenciais de acesso ao BD LOCALHOST mysqli

//  $servidor = "localhost";
//  $usuario = "root";
//  $senha = "";
//  $dbname = "dbsistema";

//  //Criar conexão
//  $conn = new mysqli($servidor, $usuario, $senha, $dbname);
//  if ($conn->connect_error) {

// 	echo "Error: " . $conn->connect_error;
// 	exit;

// }


//credenciais de acesso ao BD PDO
define('HOST','localhost');
define('USER','glenle78_glenkg');
define('PASS','gln0621');
define('DBNAME','glenle78_kgsistema');

$conn = new PDO('mysql:host='. HOST. ';dbname=' .DBNAME. ';', USER, PASS);

 //Checar conexao
// if ($pdo){
// 	die("Falha na conexão: ". mysqli_connect_erro());
// }else{
// 	echo "Conexão realizada com sucesso";
// }

// CONEXAO PDO
 // $host = "mysqli:dbname=glenle78_kgsistema;host=localhost";
 // $user = "glenle78_kg";
 // $pass = "gln0621";

 // try {
 // 	$pdo = new PDO($host, $user, $pass);
 // }catch (PDOExecption $e){
 // 	echo "Falha: ". $e->getMessage();
 // }


//  $stmt = $conn->query("SELECT * FROM kgsistema ORDER BY id;");

// $data = array();

// while ($row = $stmt->fetch_assoc()) {

// 	array_push($data, $row);

// }

// echo json_encode($data);
