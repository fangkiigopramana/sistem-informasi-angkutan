<?php 
    include_once 'database/config.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Angkutan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style-1.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">SIAngkut</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0" style="font-weight: bold;">
                                <a href="#beranda" class="nav-item nav-link">Beranda</a>
                                <a href="#tentang-kami" class="nav-item nav-link">Tentang Kami</a>
                                <a href="#daftar-terminal" class="nav-item nav-link">Daftar Terminal</a>
                                <a href="#daftar-rute" class="nav-item nav-link">Daftar Rute</a>
                                <a href="#daftar-angkutan" class="nav-item nav-link">Daftar Angkutan</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5" id="beranda">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="https://1.bp.blogspot.com/-Bczco2YuSAM/XPO11WHXpoI/AAAAAAAAol8/7gaVch-LxkY9dTD4FfvGHwELU-BwMj4zQCLcBGAs/s1600/maxresdefault.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">SIAngkut</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Sistem Informasi Angkutan</h1>
                                <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3 slideInLeft">Login Admin</a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="https://cdn.jagonews24.com/media/imgAllNew/BG/2019November/lockdownb-20210713121406.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">SIAngkut</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Sistem Informasi Angkutan</h1>
                                <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3 slideInLeft">Login Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Tentang Kami Start -->
        <div class="container-xxl py-5" id="tentang-kami">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Tentang Kami</h6>
                        <h1 class="mb-4">Website <span class="text-primary text-uppercase">SIAngkut</span></h1>
                        <p class="mb-4">SIAngkut adalah website sistem informasi angkutan yang menyediakan informasi lengkap tentang transportasi angkutan, rute transportasi, jadwal keberangkatan, dan berita terbaru. Dengan fitur pencarian rute dan peta interaktif, pengguna dapat dengan mudah menemukan informasi yang mereka butuhkan untuk merencanakan perjalanan dengan transportasi yang tepat dan efisien.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="https://th.bing.com/th/id/OIP.3KuL3TPK_EOBg5wh1LpM5QAAAA?pid=ImgDet&w=248&h=248&rs=1" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="https://media.suara.com/pictures/original/2020/09/19/58953-angkutan-umum.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tentang Kami End -->

        <!-- Daftar Terminal Start -->
        <div class="container-xxl py-5" id="daftar-terminal">
            <div class="container">
                <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                    <h3 class="section-title text-center text-primary text-uppercase">Daftar Terminal</h3>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="#">
                            <h5 class="mb-3">Bekasi - Terminal Bekasi</h5>
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="https://bekasipedia.com/wp-content/uploads/2019/05/terminal-bekasi.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="#">
                            <h5 class="mb-3">Jakarta - Terminal Pulogebang</h5>
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="https://pingpoint.co.id/media/images/DUREN_SAWIT_BISNIS_TERMINAL_PULO_GEBANG_BISA_JA.original.jpg">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="#">
                            <h5 class="mb-3">Tanggerang - Terminal Poris Plawad</h5>
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="https://th.bing.com/th/id/OIP.-Ehd4JTHYTBip1YS65DqeAHaE3?pid=ImgDet&rs=1">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="#">
                            <h5 class="mb-3">Depok - Terminal Jatijajar</h5>
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="https://pingpoint.co.id/media/images/df.width-627.height-374.jpegquality-90.png">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="#">
                            <h5 class="mb-3">Bogor - Terminal Baranangsiang</h5>
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="https://th.bing.com/th/id/OIP.kQ5rkR7lfbrOGRcScJBhPgAAAA?pid=ImgDet&rs=1">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Daftar Terminal End -->


        <!-- Daftar Rute Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" id="daftar-rute">
            <div class="container">
                <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                    <h3 class="section-title text-center text-primary text-uppercase">Daftar Rute</h3>
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="assets/img/route.png" alt="" width="500px" height="500px">
                </div>

                <div class="owl-carousel testimonial-carousel py-5">
                    <?php while($res = mysqli_fetch_array($data_rute)) { ?>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <h6 class="fw-bold mb-1">Rute <?php echo $res["asal"] . " - " . $res["tujuan"] ?> Bandung</h6>
                                <small class="fw-bold">Jarak Tempuh : <?php echo $res["jarak_tempuh"] ?> KM</small>
                            </div>
                        </div>
                        <p>Rute <?php echo $res["asal"] . " - " . $res["tujuan"] ?> adalah jalur transportasi yang menghubungkan <?php echo $res["asal"]?> dengan <?php echo $res["tujuan"] ?>. Perjalanan ini menawarkan pemandangan indah sepanjang jalan, dengan berbagai opsi transportasi seperti kereta api, bus, atau mobil pribadi.</p>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- Daftar Rute End -->


        <!-- Daftar Angkutan Start -->
        <div class="container-xxl py-5" id="daftar-terminal">
            <div class="container">
                <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                    <h3 class="section-title text-center text-primary text-uppercase">Daftar Angkutan</h3>
                </div>
                <div class="row g-4">
                    <?php while($res = mysqli_fetch_array($data_angkutan_rute)) { ?>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" style="border-radius: 30px;" data-wow-delay="0.1s">
                        <a class="service-item rounded text-decoration-none" style="border-radius: 30px; background-color: #6d99e0;" href="#">
                            <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.3s" width="300px" src=<?php echo "assets/img/bus/". rand(1,6) . ".svg" ?>>
                            <h5 class="mb-1 text-decoration-underline"><?php echo $res["nama_angkutan"] ?></h5>
                            <p class="mb-1 fw-bold" style="text-align: left; color: black"><?php echo "Rp " . $res["harga_tiket"] ?></p>
                            <p class="mb-1 fw-bold" style="text-align: left; color: black"><?php echo $res["tanggal_berangkat"] ?><br><?php echo date("H:i", strtotime($res["jam_berangkat"])) . ' - '. date("H:i", strtotime($res["jam_tiba"])) . ' @' . $res["durasi"] . ' Menit' ?></p>
                            <p class="mb-1 fw-bold" style="text-align: left; color: black"><?php echo $res["asal"] . " - " . $res["tujuan"] ?></p>
                        </a>
                    </div>
                        <?php }?>


                </div>
            </div>
        </div>
        <!-- Daftar Angkutan End -->

        <!-- Footer Start -->
        <div style="background-color: black; padding: 20px 0px">
            <footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-white fw-bold">&copy; 2023 Company, Inc</p>

                <ul class="nav col-md-8 justify-content-end">
                    <li class="nav-item"><a href="#beranda" class="nav-link px-2 text-body-secondary">Beranda</a></li>
                    <li class="nav-item"><a href="#tentang-kami" class="nav-link px-2 text-body-secondary">Tentang Kami</a></li>
                    <li class="nav-item"><a href="#daftar-terminal" class="nav-link px-2 text-body-secondary">Daftar Terminal</a></li>
                    <li class="nav-item"><a href="#daftar-rute" class="nav-link px-2 text-body-secondary">Daftar Rute</a></li>
                    <li class="nav-item"><a href="#daftar-angkutan" class="nav-link px-2 text-body-secondary">Daftar Angkutan</a></li>
                </ul>
            </footer>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main-1.js"></script>
</body>

</html>