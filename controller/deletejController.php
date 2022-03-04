<?php
include '../config/config.php';

$id = $_GET['id'];

$sql = "DELETE FROM jenis where id_jenis = '$id'";
$query = mysqli_query($conn, $sql);

if ($query){
    header("Location: ../pages/jenis.php?status=sukses");
}else{
    header("Location: ../pages/jenis.php?status=gagal");
}