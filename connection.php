<?php 
// Dev connection
//$host = '127.0.0.1';
//$db = 'hotel';
//$user = 'root';
//$pass = '';
//$charset = 'utf8mb4';


//Remote Database Connection
$host = 'remotemysql.com';
$db = '0Ly3QV748r';
$user = '0Ly3QV748r';
$pass = 'uzHo5IjHkU';
$charset = 'utf8mb4';

$con=mysqli_connect("host=$host;dbname=$db;charset=$charset")or die('La connexion à la base de données a échoué');

//$con=mysqli_connect("localhost","root","","hotel") or die('La connexion à la base de données a échoué');
?>