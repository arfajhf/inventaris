<?php
include '../config/config.php';

$id = $_GET['id'];
$nama = $_GET['nama'];
$sql = "DELETE FROM pegawai where id_pegawai = '$id'";
$query = mysqli_query($conn, $sql);
$sqlpe = "DELETE FROM petugas where nama_petugas = '$nama'";

if ($query){
    header("location: ../pages/pegawai.php?status=sukses");
}else{
    header("location: ../pages/pegawai.php?setatus=gagal");
}
