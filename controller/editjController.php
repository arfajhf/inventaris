<?php
include '../config/config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$ket = $_POST['ket'];

$edit = "UPDATE jenis set nama_jenis='$nama', kode_jenis='$kode', keterangan='$ket' where id_jenis = '$id'";
$sql = mysqli_query($conn, $edit);

if($sql){
    header("Location: ../pages/jenis.php?status=berhasil");
}else{
    header("Location: ../pages/jenis.php?status=ggl");
}