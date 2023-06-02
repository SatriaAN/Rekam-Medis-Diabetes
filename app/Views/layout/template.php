<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rekam Medis Diabetes</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="<?= base_url('js/raphael.min.js'); ?>"></script>
    <script src="<?= base_url('js/justgage.js'); ?>"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="<?php echo base_url('/') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="<?= base_url('assets/img/logoWebDiabetes.png'); ?>" alt="" width="40/100">
                </div>
                <div class="sidebar-brand-text ">Rekam Medis Diabetes</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->

            <?php if(in_groups('Admin')) :?>
            <li class="nav-item <?= $menu == 'users' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('/users'); ?>">
                    <i class="bi bi-people"></i>
                    <span>Users</span></a>
            </li>
            <?php endif;  ?>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->

            <!-- Nav Item - Dashboard -->
            <?php if(has_permission('menu-dashboard')) :?>
            <li class="nav-item <?= $menu == 'dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('/dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php endif;  ?>
            <?php if(has_permission('menu-dashboard')) :?>
            <li class="nav-item <?= $menu == 'pasien' ? 'active' : '' ?>">
                <a class="nav-link" href="<?php echo base_url('/pasien'); ?>">
                    <i class="bi bi-people"></i>
                    <span>Pasien</span></a>
            </li>
            <?php endif;  ?>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username  ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('img/undraw_profile.svg') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('logout') ?>" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Extends Content  -->
                <?= $this->renderSection('content') ?>
                <!-- End of Extends Content -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"></script>
    <script src="<?php echo base_url('js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?php echo base_url('js/demo/chart-pie-demo.js'); ?>"></script>

    <!-- SweetAlert2  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assetes/js/dist/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/myscript.js') ?>"></script>
    <script>
    // menampilkan chart" saat halaman di buka
    $(document).ready(function() {
        getReport();
        getReport2();
        getSistolik();
        getDiastolik();
    });

    //  fungsi chart
    function chartReport(dataset) {

        // Area Chart Example   var thresholdValue = 100;
        var thresholdValue = 100;
        var ctx = document.getElementById("chartReport2");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember"
                ],
                datasets: [{
                    label: "Gula Darah Puasa",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: function(context) {
                        var value = context.dataset.data[context.dataIndex];
                        if (value > thresholdValue) {
                            return "rgba(210, 4, 45, 1)"; // warna merah jika nilai melewati threshold
                        } else {
                            return "rgba(78, 115, 223, 1)"; // warna biru jika nilai tidak melewati threshold
                        }
                    },
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: dataset,
                    spanGaps: true
                }, {
                    label: "Threshold",
                    type: 'line',
                    data: [100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100,
                        100
                    ], // Set nilai threshold untuk setiap bulan
                    borderColor: "rgba(210, 4, 45, 1)", // Set warna garis menjadi merah
                    borderWidth: 2, // Set lebar garis
                    fill: false, // Set menjadi false agar tidak mengisi area di bawah garis
                    pointRadius: 0, // Set radius titik menjadi 0 agar titik tidak terlihat
                }],
            },

            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                if (value === 100) {
                                    return value;
                                } else {
                                    return number_format(value);
                                }
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    }

    function chartReport2(dataset) {

        // Area Chart Example
        var ctx = document.getElementById("chartReport");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember"
                ],
                datasets: [{
                    label: "Gula Darah Sewaktu",
                    lineTension: 0.3,
                    backgroundColor: "rgba(144, 238, 144, 0.05)",
                    borderColor: "rgba(144, 238, 144, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(144, 238, 144, 1)",
                    pointBorderColor: "rgba(144, 238, 144, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(144, 238, 144, 1)",
                    pointHoverBorderColor: "rgba(144, 238, 144, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: dataset,
                }, {
                    label: "Threshold",
                    type: 'line',
                    data: [140, 140, 140, 140, 140, 140, 140, 140, 140, 140, 140,
                        140
                    ], // Set nilai threshold untuk setiap bulan
                    borderColor: "rgba(210, 4, 45, 1)", // Set warna garis menjadi merah
                    borderWidth: 2, // Set lebar garis
                    fill: false, // Set menjadi false agar tidak mengisi area di bawah garis
                    pointRadius: 0, // Set radius titik menjadi 0 agar titik tidak terlihat
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    }

    function chartSistolik(dataset) {

        // Area Chart Example
        var ctx = document.getElementById("chartSistolik");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember"
                ],
                datasets: [{
                    label: "Tekanan Darah Sistolik",
                    lineTension: 0.3,
                    backgroundColor: "rgba(135, 206, 250, 0)",
                    borderColor: "rgba(135, 206, 250, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(135, 206, 250, 1)",
                    pointBorderColor: "rgba(135, 206, 250, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(135, 206, 250, 1)",
                    pointHoverBorderColor: "rgba(135, 206, 250, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: dataset,
                }, {
                    label: "Threshold",
                    type: 'line',
                    data: [120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120,
                        120
                    ], // Set nilai threshold untuk setiap bulan
                    borderColor: "rgba(210, 4, 45, 1)", // Set warna garis menjadi merah
                    borderWidth: 2, // Set lebar garis
                    fill: false, // Set menjadi false agar tidak mengisi area di bawah garis
                    pointRadius: 0, // Set radius titik menjadi 0 agar titik tidak terlihat
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    }

    function chartDiastolik(dataset) {

        // Area Chart Example
        var ctx = document.getElementById("chartDiastolik");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember"
                ],
                datasets: [{
                    label: "Tekanan Darah Diastolik",
                    lineTension: 0.3,
                    backgroundColor: "rgba(144, 238, 144, 0.05)",
                    borderColor: "rgb(255, 193, 7)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgb(255, 193, 7)",
                    pointBorderColor: "rgb(255, 193, 7)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgb(255, 193, 7)",
                    pointHoverBorderColor: "rgb(255, 193, 7)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: dataset,
                }, {
                    label: "Threshold",
                    type: 'line',
                    data: [80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80,
                        80
                    ], // Set nilai threshold untuk setiap bulan
                    borderColor: "rgba(210, 4, 45, 1)", // Set warna garis menjadi merah
                    borderWidth: 2, // Set lebar garis
                    fill: false, // Set menjadi false agar tidak mengisi area di bawah garis
                    pointRadius: 0, // Set radius titik menjadi 0 agar titik tidak terlihat
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    }

    // Fungsi untuk mengakses data report
    function getReport() {
        var tahun = $('#tahun_gulaDarahPuasa').val();
        $.ajax({
            url: "/chart-report",
            method: "post",
            data: {
                tahun: tahun
            },
            success: function(response) {
                var result = JSON.parse(response)
                var dataset = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                $.each(result.data, function(i, item) {
                    dataset[item.bulan - 1] = item.gulaDarahPuasa
                });
                chartReport(dataset);
            }
        });
    }

    function getReport2() {
        var tahun = $('#tahun_gulaDarahSewaktu').val();
        $.ajax({
            url: "/chart-report",
            method: "post",
            data: {
                tahun: tahun
            },
            success: function(response) {
                var result = JSON.parse(response)
                var dataset = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                $.each(result.data, function(i, item) {
                    dataset[item.bulan - 1] = item.gulaDarahSewaktu
                });
                chartReport2(dataset);
            }
        });
    }

    // chart tekanan darah 

    function getSistolik() {
        var tahun = $('#tahun_chartSistolik').val();
        $.ajax({
            url: "/chart-report",
            method: "post",
            data: {
                tahun: tahun
            },
            success: function(response) {
                var result = JSON.parse(response)
                var dataset = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                $.each(result.data, function(i, item) {
                    dataset[item.bulan - 1] = item.dataSistolik
                });
                chartSistolik(dataset);
            }
        });
    }

    function getDiastolik() {
        var tahun = $('#tahun_chartDiastolik').val();
        $.ajax({
            url: "/chart-report",
            method: "post",
            data: {
                tahun: tahun
            },
            success: function(response) {
                var result = JSON.parse(response)
                var dataset = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                $.each(result.data, function(i, item) {
                    dataset[item.bulan - 1] = item.dataDiastolik
                });
                chartDiastolik(dataset);
            }
        });
    }
    </script>

    <?php if (service('request')->uri->getPath() == 'dashboard') : ?>
    <script>
    // Ambil data dari PHP dan konversi menjadi variabel JavaScript
    var dataBaruSistolik = <?php echo json_encode($dataBaruSistolik); ?>;
    var dataBaruDiastolik = <?php echo json_encode($dataBaruDiastolik); ?>;

    // Konfigurasi chart gauge
    var config = {
        id: "chartGaugeSistolik",
        value: dataBaruSistolik,
        min: 0,
        max: 500,
        decimals: 2,
        gaugeWidthScale: 0.6
    };

    // Buat instance chart gauge
    var gauge = new JustGage(config);

    var config = {
        id: "chartGaugeDiastolik",
        value: dataBaruDiastolik,
        min: 0,
        max: 500,
        decimals: 2,
        gaugeWidthScale: 0.6
    };

    // Buat instance chart gauge
    var gauge = new JustGage(config);
    </script>
    <?php endif; ?>

</body>

</html>