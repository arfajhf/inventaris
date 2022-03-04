<?php
include '../config/config.php';

$nama = $_POST['t_nama'];
$username = $_POST['t_username'];
$password = $_POST['t_password'];
$level = $_POST['t_level'];

$cek = "SELECT id_level as id from level where nama_level = '$level'";
$queryc = mysqli_query($conn, $cek);
$ambil = mysqli_fetch_array($queryc);
$id = $ambil['id'];

$masuk = "INSERT INTO petugas ( username, password, nama_petugas, id_level ) values ( '$username', '$password', '$nama', '$id' )";
$query = mysqli_query($conn, $masuk);
// $data = mysqli_num_rows($query);
// echo $id;
// echo $level;
// echo $id;
if ($query) {
    // echo "<script type='text/javascript'>alert('Peugas berhasil ditambahkan');</script>";
    header('location: ../pages/petugas.php?status=sukses');
} else {
    header("location: ../pages/petugas.php?status=gagal&q='$query'");
}
