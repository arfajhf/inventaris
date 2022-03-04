<?php
include '../config/config.php';

$nama = $_POST['r_nama'];
$kode = $_POST['r_kode'];
$ket = $_POST['r_ket'];

$masuk = "INSERT INTO ruang (nama_ruang, kode_ruang, keterangan) values ('$nama', '$kode', '$ket')";
$query = mysqli_query($conn, $masuk);

if($query){
    header("location: ../pages/ruang.php?status=sukses");
}else{
    header("location: ../pages/ruang.php?status=gagal");
}