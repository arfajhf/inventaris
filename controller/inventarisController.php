 <?php
 include '../config/config.php';

 date_default_timezone_set('Asia/Jakarta');
 $kode = $_POST['i_kode'];
 $nama = $_POST['i_nama'];
 $jumlah = $_POST['i_jumlah'];
 $jenis = $_POST['i_jenis'];
 $ruang = $_POST['i_ruang'];
 $kondisi = $_POST['i_kondisi'];
 $ket = $_POST['i_ket'];
 $user = $_POST['i_user'];
 $date = Date('Y-m-d');

 $queryj = mysqli_query($conn, "SELECT id_jenis from jenis where nama_jenis = '$jenis'");
 $ambilj = mysqli_fetch_array($queryj);
 $dataj = $ambilj['id_jenis'];

 $queryr = mysqli_query($conn, "SELECT id_ruang from ruang where nama_ruang = '$ruang'");
 $ambilr = mysqli_fetch_array($queryr);
 $datar = $ambilr['id_ruang'];
 
 $queryp = mysqli_query($conn, "SELECT id_petugas from petugas where username = '$user'");
 $ambilp = mysqli_fetch_array($queryp);
 $datap = $ambilp['id_petugas'];

 $query = "INSERT INTO inventaris (nama, kondisi, keterangan, jumlah, id_jenis, tanggal_register, id_ruang, kode_inventaris, id_petugas) values ('$nama', '$kondisi', '$ket', '$jumlah', '$dataj', '$date', '$datar', '$kode', '$datap')";
 $masuk = mysqli_query($conn, $query);

 if($masuk){
     header("Location: ../pages/inventaris.php?status=sukses");
 }else{
     header("Location: ../pages/inventaris.php?status=gagal");
 }

