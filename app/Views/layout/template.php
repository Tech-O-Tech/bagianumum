<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPERANDIS</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php base_url(); ?>/assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="<?php base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?php base_url(); ?>/assets/images/favicon.svg" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">




            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php base_url(); ?>/home/home.php"><img src="<?php base_url(); ?>/assets/images/logo/logo.png" style="width:100%; height:100%;"></a>
                        </div>

                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">
                            <?php $this->session = session(); ?>
                            <?php echo " " . $this->session->get('nama') . " ";
                            ?>
                        </li>
                        <br>

                        <li class="sidebar-item ">
                            <a href="/home" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="/kendaraan" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#person-check-fill"></use>
                                </svg>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="/kendaraan" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#card-list"></use>
                                </svg>
                                <span>Jenis Kendaraan</span>
                            </a>
                        </li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#share-fill"></use>
                                </svg>
                                <span>Kendaraan Pinjam Pakai</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/pinjampakai/pdam">PDAM</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../program/program.php">KODIM</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../kegiatan/kegiatan.php">MUI</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../rincian_belanja/rincian_belanja.php">KPU</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../kegiatan/kegiatan.php">KONI</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../sub_kegiatan/sub_kegiatan.php">KAJARI</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../rincian_belanja/rincian_belanja.php">POLRES</a>
                                </li>
                            </ul>
                        </li>



                        <li class="sidebar-item ">
                            <a href="/kendaraan" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#card-checklist"></use>
                                </svg>
                                <span>Layanan</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="/auth/logout" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="<?php base_url(); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.svg#arrow-bar-left"></use>
                                </svg>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>



        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Sistem Informasi Penatausahaan Barang Persedian</h3>
            </div>
            <!-- <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Grafik Jumlah BKP</h4>
                                    </div>
                                    <div class="card-body">

                                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div> -->


            <?= $this->renderSection('content') ?>


            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">

                    </div>
                    <div class="float-end">
                        <p>Sekretariat Kabupaten Pringsewu
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php base_url(); ?>/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?php base_url(); ?>/assets/js/pages/dashboard.js"></script>

    <script src="<?php base_url(); ?>/assets/js/main.js"></script>


    <script src="<?php base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    <script src="<?php base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php base_url(); ?>/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="<?php base_url(); ?>/assets/js/main.js"></script>

</body>

</html>