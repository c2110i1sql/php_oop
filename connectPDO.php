<?php 
$string ='mysql:host=localhost;dbname=demo_shopping;';

$conn = new PDO($string, 'root','', [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
