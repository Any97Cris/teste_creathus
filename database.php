<?php

try{

$db = "mysql:dbname=entretenimentos;host=127.0.0.1";
$dbuser = "root";
$dbpassword = "";

$pdo = new PDO($db, $dbuser,$dbpassword);

}catch(Exception $e){
    echo $e->getMessage();
}

?>