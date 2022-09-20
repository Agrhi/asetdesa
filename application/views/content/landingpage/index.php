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
</head>

<body class="index-page">

    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ps-lg-4 ms-sm-3" href="<?= base_url() ?>" rel="tooltip" title="Sistem Informasi Museum Sulawesi Tengah" data-placement="bottom">
                            SIKBES SULTENG
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-11 w-100">
                                <li class="nav-item mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="#dash">Dashboard</a>
                                </li>
                                <!-- <li class="nav-item mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">Galeri</a>
                                </li> -->
                                <li class="nav-item mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="#sejarah">Sejarah</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="#koleksi">Koleksi</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="#about">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

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
                        <div class="page-header min-vh-100 relative" style="background-image: url('<?= base_url() ?>/asset/img/3.jpeg')">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 z-index-2 border-radius-xl mx-auto py-3" style="background:rgba(119,136,153, 0.6);">
                                        <div class="col-lg-12 text-center mx-auto">
                                            <h1 class="text-white">SIKBES SULTENG</h1>
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
                        <div class="page-header min-vh-100 relative" style="background-image: url('<?= base_url() ?>/asset/img/1.jpeg')">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 z-index-2 border-radius-xl mx-auto py-3" style="background:rgba(119,136,153, 0.6);">
                                        <div class="col-lg-12 text-center mx-auto">
                                            <h1 class="text-white">SIKBES SULTENG</h1>
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
                        <div class="page-header min-vh-100 relative" style="background-image: url('<?= base_url() ?>/asset/img/2.jpeg')">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 z-index-2 border-radius-xl mx-auto py-3" style="background:rgba(119,136,153, 0.6);">
                                        <div class="col-lg-12 text-center mx-auto">
                                            <h1 class="text-white">SIKBES SULTENG</h1>
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

    <!-- Sejarah -->
    <section class="my-5 py-5" id="sejarah">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center text-center my-sm-5">
                    <div class="col-lg-9">
                        <h2 class="text-dark mb-0">SIKBES SULTENG</h2>
                        <h2>Sistem Informasi Koleksi Benda Sejarah Pada Museum Sulawesi Tengah</h2>
                        <p>Sistem Ini Merupakan Sistem Infromasi yang memudahkan Pengguna Menikmati Peninggalan Bersejarah yang ada di Sulawesi Tengah melalui Teknologi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
                        <h3>Sejarah</h3>
                        <h6 class="text-secondary font-weight-normal pe-3">Terdapat Sejarah, Visi, Misi dan Struktur Organisasi Museum Sulawesi Tengah</h6>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row mt-3">

                        <div class="col-12">
                            <div class="col-12">
                                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-5">
                                    <div class="container border-bottom">
                                        <div class="row justify-space-between py-2">
                                            <div class="col-lg-12 me-auto">
                                                <p class="lead text-dark pt-1 mb-0">Sejarah</p>
                                                <hr class="horizontal dark">
                                                <p style="text-align: justify;">Perintisan pendirian museum di Propinsi Sulawesi Tengah dimulai dengan usaha perlindungan terhadap peninggalan sejarah dan purbakala pada tahun 1960. Sesuai dengan Surat Instruksi Menteri Dalam Negeri/Otonomi Daerah Tanggal 5 Februari 1960. Perihal Pelanggaran- pelanggaran terhadap Monumenten Ordonantie 1938 No. 238. Isi surat memerintahkan kepada Gubernur di Seluruh Indonesia untuk melindungi peninggalan sejarah dan purbakala di wilayahnya masing-masing.</p>
                                                <div class="accordion-item mb-3">
                                                    <h5 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            <strong class="mb-2">Lanjutan ...</strong>
                                                            <i class="collapse-close ni ni-bold-down text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                        </button>
                                                    </h5>
                                                    <div id="collapseOne" class="mt-2 accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                                        <div class="accordion-body text-sm">
                                                            <p style="text-align: justify;">Tim Pra Survey Kebudayaan Propinsi Sulawesi Tengah terbentuk pada tahun 1972 dengan tugas mengobservasi ke lokasi peninggalan sejarah dan purbakala. serta mengumpulkan data-data tentang benda-benda budaya yang akan dikumpulkan untuk menjadi koleksi museum. Wilayah yang pertama menjadi sasaran adalah Kabupaten Poso dan Kabupaten Donggala.
                                                                Pembangunan gedung museum dimulai pada tahun 1977 di areal tanah seluas 18.330 m2, dan selesai dibangun pada tahun 1978. Jumlah koleksi telah bertambah menjadi 138 buah. yang terdiri dari koleksi Etnografika 103 buah. Historika 10 buah, dan Keramologika 25 buah.
                                                                Berdasarkan dari Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor : 0754/0/ 1987, Tanggal 2 Desember 1987 Museum Negeri Propinsi Sulawesi Tengah resmi menjadi Unit Pelaksana Teknis dalam lingkungan Direktorat Jenderal Kebudayaan Departemen Pendidikan dan Kebudayaan.
                                                                Surat Keputusan Gubernur Sulawesi Tengah Nomor 6 Tahun 2001 Tentang. Pembentukan Organisasi dan Tata Kerja Unit Unit Pelaksana Teknis Dinas (UPTD) pada dinas- dinas Propinsi, maka museum beralih status pengelolaan dari Pemerintah Pusat menjadi UPTD di bawah koordinasi Dinas Kebudayaan dan Pariwisata Propinsi Sulawesi Tengah dan bernama UPTD Museum Sulawesi Tengah.
                                                                Peraturan Gubernur Sulawesi Tengah Nomor 27 Tahun 2013 Tanggal 27 Februari 2013 Tentang Uraian Tugas Fungsi Dan Kerja Unit Pelaksana Teknis di Lingkungan Dinas Pendidikan dan Kebudayaan Daerah Provinsi Sulawesi Tengah. pengelolaan museum berada dalam lingkungan kerja Dinas pendidikan Dan Kebudayaan Daerah Provinsi Sulawesi Tengah dengan nama UPT Museum Sulawesi Tengah.
                                                                Arti penting dari pendirian museum di Provinsi Sulawesi Tengah merupakan amanat dan UUD 1945 yang tertera dalam alinea ke - 4 Pembukaan UUD 1945. yaitu “Mencerdaskan kehidupan Bangsa”. Karena peranan museum sebagai lembaga pendidikan non formal yang berbasis kebudayaan merupakan pusat informasi ilmu pengetahuan dan jendela kebudayaan Sulawesi Tengah. Kemudian dalam pasal 32 UUD 1945 ayat 1 Menyatakan “Negara memajukan kebudayaan nasional Indonesia di tengah peradaban dunia dengan menjamin kebebasan masyarakat dalam memelihara dan mengembangkan nilai-nilai budayanya”.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-5">
                                    <div class="container border-bottom">
                                        <div class="row justify-space-between py-2">
                                            <div class="col-lg-12 me-auto">
                                                <p class="lead text-dark pt-1 mb-0">Visi</p>
                                                <hr class="horizontal dark">
                                                <p>Visi Museum Sulawesi Tengah, yakni terwujudnya Museum Sulawesi Tengah sebagai sumber pengetahuan dan objek wisata budaya daerah untuk kemajuan masyarakat dan kelestarian budaya bangsa. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-5">
                                    <div class="container border-bottom">
                                        <div class="row justify-space-between py-2">
                                            <div class="col-lg-12 me-auto">
                                                <p class="lead text-dark pt-1 mb-0">Misi</p>
                                                <hr class="horizontal dark">
                                                <p>
                                                    1. Menanamkan nilai-nilai luhur budaya tentang kehidupan masyarakat melalui koleksi museum.
                                                    <br>2. Menjadikan museum sebagai sumber pendidikan non formal dan sarana rekreasi.
                                                    <br>3. Menumbuhkan kesadaran di bidang ilmu pengetahuan dan teknologi.
                                                    <br>4. Meningkatkan apresiasi dan kreatifitas kepada berbagai stakeholders.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-5">
                                    <div class="container border-bottom">
                                        <div class="row justify-space-between py-2">
                                            <div class="col-lg-12 me-auto">
                                                <p class="lead text-dark pt-1 mb-0">Struktur</p>
                                                <hr class="horizontal dark">
                                                <div class="move-on-hover">
                                                    <img class="w-100" src="<?= base_url() ?>/asset/img/struktur.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Sejarah -->

    <!-- Koleksi -->
    <section class="py-5" id="koleksi">
        <div class="container">
            <div class="row">
                <div class="row text-center my-sm-5 mt-5">
                    <div class="col-lg-6 mx-auto">
                        <h2 class="">Kategori</h2>
                        <p class="lead">Terdapat 10 Macam Kategori Yang Terdapat di <br>Museum Sulawesi Tengah</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="row mt-4">
                        <?php foreach ($koleksi as $kol) { ?>
                            <div class="col-md-6 mt-md-0 mt-6 mb-2">
                                <a href="<?= base_url('home/perkategori/' . $kol->idkategori) ?>">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="<?= base_url('asset/gambar/' . $kol->gambar) ?>" alt="<?= $kol->namakategori; ?>">
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3 mx-auto mt-md-0 mt-5">
                    <div class="position-sticky" style="top:100px !important">
                        <h4 class="">Jenis Kategori</h4>
                        <h6 class="text-secondary">Berikut disamping ini merupakan jenis-jenis Kategori yang terdapat pada Museum Sulawesi Tengah.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Koleksi -->

    <!-- About -->
    <footer class="footer pt-5 mt-5" id="about">
        <hr class="horizontal dark">
        <div class="container">
            <div class="row">
                <div class="row text-center my-sm-5">
                    <div class="col-lg-6 mx-auto">
                        <h2 class="">About</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col">
                            <h4>Museum Negeri Provinsi Sulawesi Tengah - Palu</h4>
                            <h6>Jl. Kemiri No.23, Kamonji, Kec. Palu Barat, Kota Palu, Sulawesi Tengah 94111</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <p class="opacity-8">Media Social</p>
                            <ul class="d-flex flex-row ms-n3 nav">
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.facebook.com/pages/category/Organization/Museum-Sulawesi-Tengah-928855313910008/" target="_blank">
                                        <i class="fab fa-facebook text-lg opacity-8" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.instagram.com/explore/locations/39237425/indonesia/palu/museum-sulawesi-tengah/" target="_blank">
                                        <i class="fab fa-instagram text-lg opacity-8" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-1" href="https://www.youtube.com/hashtag/sulteng" target="_blank">
                                        <i class="fab fa-youtube text-lg opacity-8" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <p class="opacity-8">Contact</p>
                            <p>Telp. : (0451) 422290</p>
                            <p>Faks : (0451) 53214</p>
                        </div>
                        <div class="col-3">
                            <p class="opacity-8">Waktu</p>
                            <p>Buka : Senin - Jumat</p>
                            <p>Pukul : 07.30 - 16.00</p>
                        </div>
                        <div class="col-4">
                            <p class="opacity-8">Tiket Kunjungan Langsung</p>
                            <p>Dewasa : Rp5.000</p>
                            <p>Anak-Anak : Rp3.000</p>
                            <p>Turis Asing : Rp25.000</p>
                        </div>
                    </div>

                </div>
                <div class="col-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3235039430733!2d119.85168481371677!3d-0.9023761355798489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bed95ecd7a6ff%3A0x131767712f28bb94!2sMuseum%20Negeri%20Provinsi%20Sulawesi%20Tengah%20-%20Palu!5e0!3m2!1sid!2sid!4v1658315681083!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-2 col-sm-6 col-6">
                    <div>
                        <h6 class="opacity-8">Media Social</h6>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/pages/category/Organization/Museum-Sulawesi-Tengah-928855313910008/" target="_blank">
                                    <i class="fab fa-facebook text-lg opacity-8" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.instagram.com/explore/locations/39237425/indonesia/palu/museum-sulawesi-tengah/" target="_blank">
                                    <i class="fab fa-instagram text-lg opacity-8" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.youtube.com/hashtag/sulteng" target="_blank">
                                    <i class="fab fa-youtube text-lg opacity-8" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="opacity-8">Contact</h6>
                            <h6>Telp. : (0451) 422290</h6>
                            <h6>Faks : (0451) 53214</h6>
                        </div>
                    </div>
                </div> -->
            <!-- <div class="col-8">
                
                <div class="row">
                    <div class="col-4">
                        <h6 class="opacity-8">Contact</h6>
                        <h6>Telp. : (0451) 422290</h6>
                        <h6>Faks : (0451) 53214</h6>
                    </div>
                    <div class="col-4">
                        <h6 class="opacity-8">Waktu</h6>
                        <h6>Buka : Hari Senin - Jumat</h6>
                        <h6>Pukul : 07.30 - 16.00</h6>
                    </div>
                    <div class="col-4">
                        <h6 class="opacity-8">Tiket Kunjungan Museum</h6>
                        <h6>Buka : Hari Senin - Jumat</h6>
                        <h6>Pukul : 07.30 - 16.00</h6>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-4">
                
            </div> -->
            <hr class="horizontal dark mb-1 mt-4">
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