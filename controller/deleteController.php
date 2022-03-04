<?php
include '../config/config.php';

$id = $_GET['id'];

$sql = "DELETE FROM inventaris where id_inventaris = '$id'";
$query = mysqli_query($conn, $sql);

if ($query){
    header("Location: ../pages/inventaris.php?status=sukses");
}else{
    header("Location: ../pages/inventaris.php?status=gagal");
}