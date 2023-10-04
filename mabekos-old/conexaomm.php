<?php

// Host: web01-milanez.hostmundi.com
// Usuário: milanez
// Senha: h6rt4iTpT8Lpanr

//credenciais de acesso ao BD PDO
define('HOST','web01-milanez.hostmundi.com');
define('USER','milanez_adm');
define('PASS','h6rt4iTpT8Lpanr');
// define('DBNAME','glenle78_kgsistema');

$conn = new PDO('mysql:host='. HOST.';', USER, PASS) or print (mysql_error());
print "Conexão Efetuada com sucesso!";
?>