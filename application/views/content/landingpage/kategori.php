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

<!-- Header (Tinggal Ganti gambar)-->
<header class="header-2" id="dash">
    <div class="col-md-12 mx-auto">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner border-radius-sm">
                <div class="carousel-item active">
                    <div class="page-header min-vh-100 relative" style="background-image: url('<?= base_url() ?>/asset/img/curved-images/anastasia.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 z-index-2 border-radius-xl mx-auto py-3" style="background:rgba(119,136,153, 0.6);">
                                    <div class="col-lg-12 text-center mx-auto">
                                        <h1 class="text-white"><?= $nama->namakategori; ?></h1>
                                        <p class="lead text-white mt-3"><b> Sistem Informasi Koleksi Benda Sejarah Pada Museum Sulawesi Tengah</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute w-100 z-index-1 bottom-0">
                            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(119,136,153,0.40"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(119,136,153,0.25)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(119,136,153,0.15)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1"></use>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="page-header min-vh-100 relative" style="background-image: url('<?= base_url() ?>/asset/img/curved-images/anastasia.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 z-index-2 border-radius-xl mx-auto py-3" style="background:rgba(119,136,153, 0.6);">
                                    <div class="col-lg-12 text-center mx-auto">
                                        <h1 class="text-white"><?= $nama->namakategori; ?></h1>
                                        <p class="lead text-white mt-3"><b> Sistem Informasi Koleksi Benda Sejarah Pada Museum Sulawesi Tengah</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute w-100 z-index-1 bottom-0">
                            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(119,136,153,0.40"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(119,136,153,0.25)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(119,136,153,0.15)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1"></use>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="page-header min-vh-100 relative" style="background-image: url('<?= base_url() ?>/asset/img/curved-images/anastasia.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 z-index-2 border-radius-xl mx-auto py-3" style="background:rgba(119,136,153, 0.6);">
                                    <div class="col-lg-12 text-center mx-auto">
                                        <h1 class="text-white"><?= $nama->namakategori; ?></h1>
                                        <p class="lead text-white mt-3"><b> Sistem Informasi Koleksi Benda Sejarah Pada Museum Sulawesi Tengah</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute w-100 z-index-1 bottom-0">
                            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                </defs>
                                <g class="moving-waves">
                                    <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(119,136,153,0.40"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(119,136,153,0.25)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(119,136,153,0.15)"></use>
                                    <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1"></use>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</header>
<!-- End Header -->

<body class="index-page">

    <!-- Koleksi -->
    <section>
        <div class="container">
            <div class="row">
                <div class="row text-center my-sm-5">
                    <div class="col-lg-6 mx-auto">
                        <h2 class=""></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mt-3">
                        <?php foreach ($koleksi as $kol) { ?>
                            <div class="col-md-4 mt-md-0 mt-5 mb-2">
                                <a href="<?= base_url('home/koleksi/' . $kol->idkoleksi) ?>">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="<?= base_url('asset/gambar/' . $kol->gambar) ?>" alt="<?= $kol->namakoleksi; ?>">
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-align-right mt-4">
                    <a href="<?= base_url('') ?>" type="button" class="btn bg-secondary text-white">Kembali</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Koleksi -->

    <footer class="footer pt-5 mt-5" id="about">
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