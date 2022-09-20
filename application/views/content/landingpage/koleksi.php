<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/asset/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>/asset/gambar/logo.png">

    <title>SIKBES SULTENG</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>/asset/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/asset/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>/asset/css/nucleo-svg.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>/asset/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />

    <style>
        .text-align-right {
            text-align: right;
        }
    </style>
</head>

<body class="index-page">

    <!-- Koleksi -->
    <section>
        <div class="container">
            <div class="row">
                <div class="row text-center my-sm-5">
                    <div class="col-lg-6 mx-auto">
                        <h2 class="">Koleksi <?= $koleksi->namakoleksi; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt-3">
                        <div class="col-md-4 mt-md-0 mt-5">
                            <div class="card">
                                <img class="w-100" src="<?= base_url('asset/gambar/' . $koleksi->gambar) ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 mt-md-0 mt-5">
                            <div class="card">
                                <div class="container">
                                    <div class="row mt-4 mb-2">
                                        <div class="col-md-5">
                                            <h6>Nama Koleksi</h6>
                                        </div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-6">
                                            <h5 class="text-danger"><?= $koleksi->namakoleksi; ?></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>Bahan</h6>
                                        </div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-6">
                                            <h5><?= $koleksi->bahan; ?></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>Nomor Inventaris</h6>
                                        </div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-6">
                                            <h5><?= $koleksi->noinves; ?></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>Kategori</h6>
                                        </div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-6">
                                            <h5><?= $koleksi->namakategori; ?></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>Lembaga</h6>
                                        </div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-6">
                                            <h5><?= $koleksi->lembaga; ?></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <h6>Pameran Tata</h6>
                                        </div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-6">
                                            <h5>Pameran Tata <?= $koleksi->tatap; ?></h5>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4">
                                        <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <strong class="mb-2">Baca Keterangan</strong>
                                                <i class="collapse-close ni ni-bold-down text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="mt-2 accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                            <div class="accordion-body text-sm">
                                                <p style="text-align: justify;"><?= $koleksi->ket; ?>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-align-right mt-4">
                            <a href="<?= $_SERVER['HTTP_REFERER'] ?>" type="button" class="btn bg-secondary text-white">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Koleksi -->

    <footer class="footer pt-5" id="about">
        <hr class="horizontal dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="my-4 text-sm">
                            <!-- Copyright © 2022 by <a href="https://github.com/Agrhi" target="_blank">Creative Agrh</a>. -->
                            Copyright © 2022 by SIKBES SULTENG</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>/asset/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/asset/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/asset/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="<?= base_url() ?>/asset/js/plugins/countup.min.js"></script>
    <script src="<?= base_url() ?>/asset/js/plugins/choices.min.js"></script>
    <script src="<?= base_url() ?>/asset/js/plugins/prism.min.js"></script>
    <script src="<?= base_url() ?>/asset/js/plugins/highlight.min.js"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="<?= base_url() ?>/asset/js/plugins/rellax.min.js"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="<?= base_url() ?>/asset/js/plugins/tilt.min.js"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="<?= base_url() ?>/asset/js/plugins/choices.min.js"></script>

    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="<?= base_url() ?>/asset/js/plugins/parallax.min.js"></script>

    <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="<?= base_url() ?>/asset/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>


    <script type="text/javascript">
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            };
        }
    </script>

</body>

</html>