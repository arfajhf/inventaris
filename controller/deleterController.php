<?php
include '../config/config.php';

$id = $_GET['id'];

$sql = "DELETE FROM ruang where id_ruang = '$id'";
$query = mysqli_query($conn, $sql);

if ($query){
    header("Location: ../pages/ruang.php?status=sukses");
}else{
    header("Location: ../pages/ruang.php?status=gagal");
}