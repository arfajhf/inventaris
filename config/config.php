<?php
$server = "localhost";
$user = "root";
$ps = "";
$db = "db_inventaris";

$conn = mysqli_connect($server, $user, $ps, $db);

if(!$conn){
    die ("gagal tersambung" .mysqli_connect_error());
}