<?php
include '../config/config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$edit = "UPDATE petugas set nama_petugas='$nama', username='$username', password='$password' where id_petugas = '$id'";
$sql = mysqli_query($conn, $edit);

if($sql){
    header("Location: ../pages/petugas.php?status=berhasil");
}else{
    header("Location: ../pages/petugas.php?status=ggl");
}