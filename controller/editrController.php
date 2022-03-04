<?php
include '../config/config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$ket = $_POST['ket'];

$edit = "UPDATE ruang set nama_ruang='$nama', kode_ruang='$kode', keterangan='$ket' where id_ruang = '$id'";
$sql = mysqli_query($conn, $edit);

if($sql){
    header("Location: ../pages/ruang.php?status=berhasil");
}else{
    header("Location: ../pages/ruang.php?status=ggl");
}