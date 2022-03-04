<?php
include '../config/config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];

$username = $_POST['username'];
$password = $_POST['password'];

$edit = "UPDATE pegawai set nama_pegawai='$nama', alamat='$alamat' where nip = '$nip'";
$editp = "UPDATE petugas set username='$username', password='$password', nama_petugas='$nama' where nip='$nip'";
$sqlp = mysqli_query($conn, $editp);
$sql = mysqli_query($conn, $edit);

if($sql && $sqlp){
    header("Location: ../pages/pegawai.php?status=berhasil");
}else{
    header("Location: ../pages/pegawai.php?status=ggl");
}