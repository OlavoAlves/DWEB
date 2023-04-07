<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sist_livros";
$port = "3306";

$connect = mysqli_connect($servername, $username, $password, $dbname, $port);
if(!$connect){
    die("algo deu errado...".mysqli_connect_error());
}
?>