<?php
include '../config/config.php';

$id = $_GET['id'];

$sql = "DELETE FROM petugas where id_petugas = '$id'";
$query = mysqli_query($conn, $sql);

if ($query){
    header("Location: ../pages/petugas.php?status=sukses");
}else{
    header("Location: ../pages/petugas.php?status=gagal");
}