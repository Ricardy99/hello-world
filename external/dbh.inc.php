<?php

$servername = "localhost";
$username = "php";
$password = "password";
$dbname = "info";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "select title from books;";

?>