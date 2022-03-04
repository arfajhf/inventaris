<?php
include '../config/config.php';

$nama = $_POST['p_nama'];
$nip = $_POST['p_nip'];
$alamat = $_POST['p_alamat'];
$username = $_POST['p_username'];
$password = $_POST['p_password'];
$level = 'user';

$ambil = "SELECT id_level as id from level where nama_level = '$level'";
$querya = mysqli_query($conn, $ambil);
$data = mysqli_fetch_array($querya);
$id = $data['id'];

$masukg = "INSERT INTO pegawai (nama_pegawai, nip, alamat) values ('$nama', '$nip', '$alamat')";
$queryg = mysqli_query($conn, $masukg);

$masukp = "INSERT INTO petugas (username, password, nama_petugas,nip, id_level) values ('$username', '$password', '$nama','$nip', '$id')";
$queryp = mysqli_query($conn, $masukp);

if ($queryg && $queryp){
    header("location: ../pages/pegawai.php?status=sukses");
}else{
    header("location: ../pages/pegawai.php?status=gagal");
}