<?php
include '../../../../helper/connection.php';
?>

<?php 
session_start();
if(!$_SESSION['username'] && !$_SESSION['password'] && $_SESSION['tipe_user'] != "Admin")
{
    echo "
		<script type='text/javascript'>
		alert('Anda harus login terlebih dahulu!')
		window.location='../../../index.php';
		</script>";
}
else
{
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/libs/css/style.css">
    <link rel="stylesheet" href="../../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../../../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../../../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../../../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link href='../../../../images/logo.png' rel='SHORTCUT ICON' />
    <title>Admin | Eeyore book store</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">Eeyore
                <a class="navbar-brand" href="../../../dashboard.php"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">

                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="../../../assets/images/avatar-1.jpg"
                                    alt="" class="user-avatar-md rounded-circle">&nbsp;&nbsp;&nbsp;Admin <i class="fas fa-angle-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <a class="dropdown-item" href="../../../process/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../../../dashboard.php" aria-expanded="false" data-target="#submenu-1"
                                    aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard
                                    <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="true"
                                    data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                <div id="submenu-5" class="collapse submenu show" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item active">
                                            <a class="nav-link active" href="table_buku.php">Data Buku</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../customer/table_customer.php">Data Customer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../kategori/table_kategori.php">Data Kategori</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../penerbit/table_penerbit.php">Data Penerbit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pengarang/table_pengarang.php">Data Pengarang</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../transaksi/table_transaksi.php">Data Transaksi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../user/table_user.php">Data User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Buku</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Data Buku</h5>
                            <div class="card-body">
                                <a href="form_buku.php" class="btn btn-primary">Tambah Data</a>
                                <?php
                                $message = '';
                                if(isset($_GET["error"]))
                                {
                                    $message = $_GET["error"];
                                    echo "<br><br>
                                    <p style='color:red; font-style:italic'>$message</p>";
                                }
                                ?>
                                <br><br>
                                <table id="tabell" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Buku</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Stok</th>
                                            <th>Berat</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = 
                                            "SELECT b.id_buku,b.judul_buku,pg.nama_pengarang,pn.nama_penerbit,b.stok,b.berat,b.gambar,b.deleted from buku b,pengarang pg,penerbit pn WHERE b.id_pengarang = pg.id_pengarang 
                                            AND
                                            b.id_penerbit = pn.id_penerbit
                                            AND
                                            b.deleted = 0 ORDER BY b.id_buku";
                                            
                                            $result = mysqli_query($con, $query);

                                            if (mysqli_num_rows($result) > 0)
                                            {
                                                $index = 1;

                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    $id_buku = $row['id_buku'];
                                                    echo "
                                                    <tr>
                                                        <td>" . $index++ . "</td>
                                                        <td>" . $row["id_buku"] . "</td>
                                                        <td>" . $row["judul_buku"] . "</td>
                                                        <td>" . $row["nama_pengarang"] . "</td>
                                                        <td>" . $row["nama_penerbit"] . "</td>
                                                        <td>" . $row["stok"] . "</td>
                                                        <td>" . $row["berat"] . " kg</td>
                                                        <td><img src='../../../../images/". $row["gambar"] ."' width='200px'></td>
                                                        <td>
                                                            <a href='form_edit_buku.php?id_buku=$id_buku' class='btn btn-warning'>Update</a>
                                                            <a href='process/delete_buku.php?id_buku=$id_buku' class='btn btn-danger'>Delete</a>
                                                        </td>
                                                    </tr>
                                                    ";
                                                }
                                            }

                                            mysqli_close($con);
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © Eeyore. All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../../../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../../../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../../../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../../../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../../../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../../../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../../../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../../../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../../../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../../../assets/libs/js/dashboard-ecommerce.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tabell').DataTable();
        });
    </script>
</body>

</html>

<?php } ?>