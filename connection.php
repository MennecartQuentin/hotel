<?php 
// Dev connection
//$host = '127.0.0.1';
//$db = 'hotel';
//$user = 'root';
//$pass = '';
//$charset = 'utf8mb4';


//Remote Database Connection
$host = 'z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	';
$db = 'ar662gh4xatv6jij';
$user = 'j8dyeol6835wgt08';
$pass = 'gpef3h97wkwhj5zg';
$charset = 'utf8mb4';

$con=mysqli_connect("host=$host;dbname=$db;charset=$charset")or die('La connexion à la base de données a échoué');

//$con=mysqli_connect("localhost","root","","hotel") or die('La connexion à la base de données a échoué');
?>