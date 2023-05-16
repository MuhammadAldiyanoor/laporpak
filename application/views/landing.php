<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrowMark - Digital Marketing HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url()?>assets/landing/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/landing/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url()?>assets/landing/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url()?>assets/landing/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <h4 class="text-white fw-bold m-0">Sistem Informasi Pengaduan Masyarakat</h4>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Desa Tambang Ulang</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">GrowMark</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">Profil</a>
                        <a href="service.html" class="nav-item nav-link">Berita</a>
                        <a href="project.html" class="nav-item nav-link">Layanan</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="quote.html" class="dropdown-item">Quotation</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="<?php echo base_url('Login') ?>" class="btn btn-primary rounded-pill py-6 px-6">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url()?>assets/landing/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Selamat Datang Di
                                        <strong>Lapor pak</strong>
                                    </p>
                                    <h4 class="display-1 text-white mb-4 animated slideInRight">Aplikasi Sistem Informasi Pengaduan Masyarakat Desa Tambang Ulang</h4>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?= base_url()?>assets/landing/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Selamat Datang Di <strong>Lapor Pak</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Aplikasi Sistem Informasi Pengaduan Masyarakat Desa Tambang Ulang</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?= base_url()?>assets/landing/img/icon/icon-1.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Sejarah</h5>
                        <p class="mb-0">Pada jaman dahulu di Desa Juwiring belum ada yang namanya balai desa.

Masyarakatnya juga belum mempunyai pemimipin atau belum terbentuknya pemerintahan

desa. Ketika mengadakan sebuah pertemuan masyarakat akan berkumpul di salah satu rumah milik warga. Karena Desa Juwiring tidak memiliki lahan milik desa. 

Harta kekayaan  desa berupa sawah yang letaknya jauh dari pemukiman warga. Jadi, apabila dibangun  sebuah balai desa maka warga akan kejauhan untuk menjangkaunya


</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?= base_url()?>assets/landing/img/icon/icon-2.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Visi</h5>
                        <p class="mb-0">“DENGAN SEMANGAT PERSAUDARAAN, GOTONG ROYONG DAN AKHLAK MULIA GUNA MEWUJUDKAN DESA LANGKAP YANG LUAR BIASA”.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?= base_url()?>assets/landing/img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Misi</h5>
                        <p class="mb-0">Melanjutkan program yang telah dilaksanakan dan memelihara program-program yang sudah dilaksanakan oleh pemerintah Desa Langkap periode yang lalu sesuai dengan fungsinya.

Menggali, memberdayakan serta memaksimalkan semua potensi yang ada di masyarakat, meliputi :

Pemberdayaan Sumber Daya Manusia (SDM)
Pemberdayaan Sumber Daya Alam (SDA)
Pemberdayaan Ekonomi Kerakyatan</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="<?= base_url()?>assets/landing/img/icon/icon-4.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-primary">About Us</p>
                        <h1 class="display-6 mb-4">Fasilitas</h1>
                        <p class="mb-4">Ambulans Desa adalah kendaraan ambulans milik pemerintah desa yang dilengkapi dengan peralatan medis untuk mengangkut orang sakit atau korban kecelakaan yang disiapkan atau disiagakan di desa.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="<?= base_url()?>assets/landing/img/icon/icon-5.png" alt="">
                                <h5 class="mb-3">Managed Services</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="<?= base_url()?>assets/landing/img/icon/icon-2.png" alt="">
                                <h5 class="mb-3">Dedicated Experts</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->
    </div>
        </div>
    </div>
    <!-- Project End -->
        </div>
    </div>
    <!-- Quote Start -->
        </div>
    </div>
    <!-- Team End -->
        </div>
    </div>
    <!-- Testimonial End -->
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Sistem Informasi Pengaduan Masyarakat</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Desa Tambang Ulang <a class="fw-medium text-light" href="https://htmlcodex.com">Kecamatan Tambang Ulang</a>
                    Kabupaten Tanah Laut <a class="fw-medium text-light" href="https://themewagon.com"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/landing/lib/wow/wow.min.js"></script>
    <script src="<?= base_url()?>assets/landing/lib/easing/easing.min.js"></script>
    <script src="<?= base_url()?>assets/landing/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url()?>assets/landing/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>assets/landing/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url()?>assets/landing/js/main.js"></script>
</body>

</html>