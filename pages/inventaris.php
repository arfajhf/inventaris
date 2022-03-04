<?php
include '../config/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        Inventaris - Inventaris Barang
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/soft-ui-dashboard.min.css">
</head>

<body class="g-sidenav-show  bg-gray-100">



    <?php require_once "navbarAdmin.php"; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">

                    <h6 class="font-weight-bolder mb-0">Inventaris</h6>
                </nav>
                <style>
                    .cari {
                        display: block;
                        padding-top: 15px;

                    }
                </style>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <form action="jenis.php" method="post">
                            <div class="input-group">
                                <!-- <span class="input-group-text text-body"></span> -->
                                <input type="text" class="form-control mx-0" name="cari" placeholder="Cari Inventaris...">
                                <button class="btn-light" style="border-radius: 0 7px 7px 0;"><i class="fas fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <div class="dropdown mb-1">
                                <a href="" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-address-card"></i> About
                                        </a>
                                        <a class="dropdown-item" href="logout.php">
                                            <i class="fas fa-sign-out-alt"></i> LogOut
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">
                                    <?php
                                    echo $_SESSION['username'];
                                    ?>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class=" align-items-center ">
                            <?php
                            include '../config/config.php';
                            $inven = "SELECT * FROM inventaris";
                            $query = mysqli_query($conn, $inven);
                            $hitung = mysqli_num_rows($query);
                            ?>
                            <p class="btn btn-info btn-sm mb-3">Inventaris Yang Tersedia Ada <?= $hitung; ?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="button" id="btnbtn" class="btn btn-info btn-sm mb-3" data-bs-target="#mymodal" data-bs-toggle="modal">Tambah Inventaris</button>
                        </div>

                        <!-- modal -->
                        <div class="modal" id="mymodal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- modal header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Inventaris</h4>
                                        <button class="close" data-bs-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- body modal -->
                                    <div class="modal-body">
                                        <form action="../controller/inventarisController.php" method="post">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <input type="text" class="form-control mb-1" name="i_kode" placeholder="Masukan Kode Inventaris">
                                                    <input type="text" class="form-control mb-1" name="i_nama" placeholder="Masukan Nama Barang">
                                                    <input type="number" class="form-control mb-1" name="i_jumlah" placeholder="Masukan Jumlah">
                                                    <input type="text" class="form-control mb-1" name="i_jenis" placeholder="Masukan Nama Jenis">
                                                    <input type="text" class="form-control mb-1" name="i_ruang" placeholder="Masukan Nama Ruang">
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control mb-1" name="i_kondisi" placeholder="Masukan Kondisi Baik/Rusak">
                                                    <!-- <select name="kondisi" id="" class='form-control mb-1'>
                                                        <option selected>--Pilih Kondisi--</option>
                                                        <option>Bagus</option>
                                                        <option>Rusak</option>
                                                    </select> -->
                                                    <textarea name="i_ket" class="form-control mb-1" placeholder="Masukan Keterangan"></textarea>
                                                    <input type="text" class="form-control mb-1" name="i_user" placeholder="Masukan Username">
                                                </div>
                                            </div>
                                    </div>

                                    <!-- modal footer -->
                                    <div class="modal-footer">
                                        <a class="btn btn-danger" data-bs-dismiss="modal">Keluar</a>
                                        <button class="btn btn-success" data-bs-dismiss="modal">Tambah Inventaris</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end modal -->
                        <!-- table petugas -->
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <h6>Inventaris Table</h6>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <?php
                                                // $idambil = 'select id_petugas from petugas';
                                                // $sambung = mysqli_query($conn, $idambil);
                                                // $idsambung = mysqli_fetch_array($sambung);
                                                // $id = $idsambung['id_petugas'];
                                                // $petugas = "SELECT petugas.nama_petugas as nama petugas.usename as username level.nama_level as levell FROM petugas, level WHERE petugas.id_level = level.id_level AND petugas.id_petugas = '$id'";
                                                // $petugas = "SELECT * FROM petugas";
                                                // $petugas = "SELECT * FROM petugas where id_level = 2";
                                                // $query = mysqli_query($conn, $petugas);
                                                // $queryy = mysqli_query($conn, $petugass);

                                                $no = 1;

                                                if (isset($_POST['cari'])) {
                                                    $cari = $_POST['cari'];
                                                    $query = mysqli_query($conn, "select * from inventaris where nama like '%" . $cari . "%'");
                                                } else {
                                                    $query = mysqli_query($conn, "select * from inventaris");
                                                }
                                                ?>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ruang</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kondisi</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                while ($coba = mysqli_fetch_array($query)) {
                                                    $idj = $coba['id_jenis'];
                                                    $idr = $coba['id_ruang'];

                                                    $inven = "SELECT nama_jenis as namaj from jenis where id_jenis = $idj ";
                                                    $inventa = "SELECT nama_ruang as namar from ruang where id_ruang = $idr";
                                                    $arraya = mysqli_query($conn, $inven);
                                                    $arrayy = mysqli_query($conn, $inventa);
                                                    $fect = mysqli_fetch_array($arraya);
                                                    $fectt = mysqli_fetch_array($arrayy);

                                                    echo "<tr>";
                                                    echo "<td>" . $no++ . "</td>";
                                                    echo "<td>" . $coba['nama'] . "</td>";
                                                    echo "<td class='text-center'>" . $coba['jumlah'] . "</td>";
                                                    echo "<td class='text-center'>" . $fect['namaj'] . "</td>";
                                                    echo "<td class='text-center'>" . $fectt['namar'] . "</td>";
                                                    echo "<td class='text-center'>" . $coba['kondisi'] . "</td>";
                                                    echo "<td>";
                                                ?>
                                                    <div class='text-center'>
                                                        <!-- <a href='inventaris.php' class='btn btn-info mx-1' data-bs-toggle='model' data-bs-target=''></a> -->
                                                        <button class="btn btn-info text-center mx-0 inven" data-id="<?= $coba['id_inventaris']; ?>" , data-nama="<?= $coba['nama']; ?>" , data-kode="<?= $coba['kode_inventaris']; ?>" , data-kondisi="<?= $coba['kondisi']; ?>" , data-jumlah="<?= $coba['jumlah']; ?>" , data-jenis="<?= $fect['namaj']; ?>" , data-ruang="<?= $fectt['namar']; ?>" , data-kete="<?= $coba['keterangan']; ?>", data-tanggal="<?= $coba['tanggal_register']; ?>">
                                                            <i class='fas fa-eye'></i>
                                                        </button>

                                                        <button class="btn btn-success text-center mx-0 invenEdit" id="invens" data-id="<?= $coba['id_inventaris']; ?>" , data-nama="<?= $coba['nama']; ?>" , data-kode="<?= $coba['kode_inventaris']; ?>" , data-kondisi="<?= $coba['kondisi']; ?>" , data-jumlah="<?= $coba['jumlah']; ?>" , data-jenis="<?= $fect['namaj']; ?>" , data-ruang="<?= $fectt['namar']; ?>" , data-kete="<?= $coba['keterangan']; ?>">
                                                            <i class='far fa-edit'></i>
                                                        </button>
                                                        <a href="../controller/deleteController.php?id=<?php echo $coba['id_inventaris'] ?>" class='btn btn-danger mx-1'><i class='fas fa-trash'></i></a>
                                                    </div>
                                                    </td>


                                                    </tr>
                                                <?php
                                                }


                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end table petugas -->
                    <div class="modal" id="myedit">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- modal header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Inventaris</h4>
                                    <button class="close" data-bs-dismiss="modal">&times;</button>
                                </div>

                                <!-- body modal -->
                                <div class="modal-body">
                                    <form action="../controller/editiController.php" method="post">
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="hidden" class="form-control mb-1" name="id">
                                                <input type="text" class="form-control mb-1" name="kodei" placeholder="Masukan Kode Inventaris">
                                                <input type="text" class="form-control mb-1" name="namai" placeholder="Masukan Nama Barang">
                                                <input type="number" class="form-control mb-1" name="jumlahi" placeholder="Masukan Jumlah Barang">
                                                <input type="text" class="form-control mb-1" name="jenisi" placeholder="Masukan Nama Jenis">
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control mb-1 ruang" name="ruangi" placeholder="Masukan Nama Ruang">
                                                <input type="text" class="form-control mb-1 kondisi" name="kondisii" id="kondisii" placeholder="Kondisi Baik/Rusak">
                                                <textarea name="keterai" class='form-control mb-1' placeholder="Masukan Keterangan Barang"></textarea>
                                            </div>
                                        </div>
                                </div>

                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <a class="btn btn-danger" data-bs-dismiss="modal">Keluar</a>
                                    <button class="btn btn-success" data-bs-dismiss="modal">Edit Inventaris</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end modal edit -->

                    <!-- modal view -->
                    <div class="modal" id="myinven">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- modal header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Inventaris</h4>
                                    <button class="close" data-bs-dismiss="modal">&times;</button>
                                </div>

                                <!-- body modal -->
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <input type="hidden" class='form-control mb-1' name="idv" id="">
                                            <input type="text" class='form-control mb-1' name='kodev' disabled>
                                            <input type="text" class="form-control mb-1" name='namav' disabled>
                                            <input type="text" class="form-control mb-1" name="kondisiv" disabled>
                                            <!-- <input type="text" class="form-control mb-1" name="ketv" disabled> -->
                                            
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control mb-1" name="jumlahv" disabled>
                                            <input type="text" class="form-control mb-1" name="jenisv" disabled>
                                            <input type="text" class="form-control mb-1" name="tanggalv" disabled>
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control mb-1" name="ruangv" disabled>
                                            <textarea name="ketv" class='form-control mb-1' disabled></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <a class="btn btn-danger" data-bs-dismiss="modal">Keluar</a>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end modal view -->
                    <!-- footer -->
                    <footer class="footer pt-3  ">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="copyright text-center text-sm text-muted text-lg-start">
                                        Copyright © <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                        <a href="http://smkn1padaherang.sch.id/" class="font-weight-bold" target="_blank">SMK Negeri 1 Padaherang.</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </footer>
                </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Navbar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Type Navbar</h6>
                    <p class="text-sm">Pilih type navbar yang ada di bawah ini!</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
            </div>
        </div>
    </div>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--   Core JS Files   -->
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>