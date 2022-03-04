<?php
include '../config/config.php';

$nama = $_POST['j_nama'];
$kode = $_POST['j_kode'];
$ket = $_POST['j_ket'];

$masuk = "INSERT INTO jenis (nama_jenis, kode_jenis, keterangan) values ('$nama', '$kode', '$ket')";
$query = mysqli_query($conn, $masuk);

if($query){
    header("location: ../pages/jenis.php?status=sukses");
}else{
    header("location: ../pages/jenis.php?status=gagal");
}