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
        Pegawai - Inventaris Barang
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

                    <h6 class="font-weight-bolder mb-0">Pegawai</h6>
                </nav>
                <style>
                    .cari {
                        display: block;
                        padding-top: 15px;

                    }
                </style>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <form action="pegawai.php" method="post">
                            <div class="input-group">
                                <!-- <span class="input-group-text text-body"></span> -->
                                <input type="text" class="form-control mx-0" name="cari" placeholder="Cari Pegawai...">
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
                            $ambilp = "SELECT * from pegawai";
                            $queryp = mysqli_query($conn, $ambilp);
                            $hitungp = mysqli_num_rows($queryp);
                            ?>
                            <p class="btn btn-info btn-sm mb-3">Pegawai Yang Sudah Terdaftar Ada <?= $hitungp; ?> Orang</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="button" id="btnbtn" class="btn btn-info btn-sm mb-3" data-bs-target="#mymodal" data-bs-toggle="modal">Tambah Pegawai</button>
                        </div>

                        <!-- modal -->
                        <div class="modal" id="mymodal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- modal header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Pegawai</h4>
                                        <button class="close" data-bs-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- body modal -->
                                    <div class="modal-body">
                                        <form action="../controller/pegawaiController.php" method="post">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <input type="text" class="form-control mb-1" name="p_nama" placeholder="Masukan Nama Pegawai">
                                                    <input type="text" class="form-control mb-1" name="p_nip" placeholder="Masukan NIP Pegawai">
                                                    <textarea name="p_alamat" id="" class="form-control mb-1" placeholder="Masukan Alamat Pegawai"></textarea>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control mb-1" name="p_username" placeholder="Masukan Username">
                                                    <input type="password" class="form-control mb-1" name="p_password" placeholder="Masukan Password">
                                                </div>
                                            </div>
                                    </div>

                                    <!-- modal footer -->
                                    <div class="modal-footer">
                                        <a class="btn btn-danger" data-bs-dismiss="modal">Keluar</a>
                                        <button class="btn btn-success" data-bs-dismiss="modal">Tambah Pegawai</button>
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
                                    <h6>Pegawai Table</h6>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <?php
                                                include "../config/config.php";
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
                                                    $query = mysqli_query($conn, "select * from pegawai where nama_pegawai like '%" . $cari . "%'");
                                                } else {
                                                    $query = mysqli_query($conn, "select * from pegawai");
                                                }
                                                ?>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pegawai</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIP</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($coba = mysqli_fetch_array($query)) {
                                                    $nama = $coba['nama_pegawai'];
                                                    $nipp = $coba['nip'];

                                                    $petugas = "SELECT username from petugas where nama_petugas = '$nama'";
                                                    $selec = mysqli_query($conn, $petugas);
                                                    $arrayy = mysqli_fetch_array($selec);

                                                    $nipi = "SELECT password from petugas where nama_petugas = '$nama'";
                                                    $queryy = mysqli_query($conn, $nipi);
                                                    $ambiln = mysqli_fetch_array($queryy);






                                                    echo "<tr>";
                                                    echo "<td>" . $no++ . "</td>";
                                                    echo "<td>" . $coba['nama_pegawai'] . "</td>";
                                                    echo "<td class='text-center'>" . $coba['nip'] . "</td>";
                                                    echo "<td class='text-center'>" . $arrayy['username'] . "</td>";
                                                    echo "<td>";
                                                ?>
                                                    <div class='text-center'>
                                                        <button class="btn btn-info text-center mx-0 viewpegawai" data-id="<?= $coba['id_pegawai']; ?>" data-username="<?= $arrayy['username'] ?>" data-nip="<?= $coba['nip']; ?>" data-alamat="<?= $coba['alamat']; ?>" data-nama="<?= $coba['nama_pegawai']; ?>" data-password="<?= $ambiln["password"];?>" data-level="<?= 'pegawai'?>"
                                                        >
                                                         <i class='far fa-eye'></i>
                                                        </button>
                                                        <button class="btn btn-success text-center mx-0 editpegawai" data-id="<?= $coba['id_pegawai']; ?>" data-username="<?= $arrayy['username'] ?>" data-nip="<?= $coba['nip']; ?>" data-alamat="<?= $coba['alamat']; ?>" data-nama="<?= $coba['nama_pegawai']; ?>"
                                                        >
                                                         <i class='far fa-edit'></i>
                                                        </button>
                                                        <a href=" ../controller/hapuspeController.php?id=<?php echo $coba['id_pegawai']; ?>nama=<?php echo $coba['nama_pegawai']; ?>" class='btn btn-danger mx-1'><i class='fas fa-trash'></i></a>
                                                            <!-- <a href='../controller/editController' class='btn btn-success text-center mx-0 '><i class='far fa-edit'></i></a> -->
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
                    <!-- modal edit -->

                    <div class=" modal" id="myedit">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- modal header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Jenis</h4>
                                    <button class="close" data-bs-dismiss="modal">&times;</button>
                                </div>

                                <!-- body modal -->
                                <div class="modal-body">
                                    <form action="../controller/editpgController.php" method="post">
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="hidden" class="form-control mb-1" name="id">
                                                <input type="text" class="form-control mb-1" name="nama">
                                                <input type="hidden" class="form-control mb-1" name="nip">
                                                <textarea name="alamat" class="form-control mb-1"></textarea>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control mb-1" name="username">
                                                <input type="password" class="form-control mb-1" name="password">
                                            </div>
                                        </div>
                                </div>

                                <!-- modal footer -->
                                <div class="modal-footer">
                                    <a class="btn btn-danger" data-bs-dismiss="modal">Keluar</a>
                                    <button class="btn btn-success" data-bs-dismiss="modal">Edit Jenis</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end modal edit -->

                    <!-- modal view -->
                    <div class="modal" id="myview">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- modal header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Pegawai</h4>
                                        <button class="close" data-bs-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- body modal -->
                                    <div class="modal-body">
                                        <form action="../controller/pegawaiController.php" method="post">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <input type="hidden" class="form-control mb-1" name="pid" placeholder="Masukan Nama Pegawai" disabled>
                                                    <input type="text" class="form-control mb-1" name="pnama" placeholder="Masukan Nama Pegawai" disabled>
                                                    <input type="text" class="form-control mb-1" name="pnip" placeholder="Masukan NIP Pegawai" disabled>
                                                    <input type="text" class="form-control mb-1" name="pusername" placeholder="Masukan Username" disabled>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" class="form-control mb-1" name="plevel" disabled>
                                                    <textarea name="palamat" id="" class="form-control mb-1" placeholder="Masukan Alamat Pegawai" disabled></textarea>
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
                                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">SMK Negeri 1 Padaherang.</a>

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