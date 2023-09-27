@extends('layout.mainlayout')
@section('title', 'Home')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Brigawan</span></h2>
                <p class="animate__animated animate__fadeInUp">Selamat datang di Brigawan, platform crowdfunding
                    yang
                    didedikasikan untuk mendukung proyek-proyek yang berkontribusi dalam mencapai Tujuan Pembangunan
                    Berkelanjutan
                    (Sustainable Development Goals - SDGs). Kami percaya bahwa dengan kolaborasi dan dukungan dari
                    banyak orang,
                    kita dapat membawa perubahan positif yang signifikan di seluruh dunia.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Lebih Lanjut</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Bergabunglah Bersama Kami Hari Ini!</h2>
                <p class="animate__animated animate__fadeInUp">Mari beraksi bersama Brigawan untuk mencapai SDGs dan
                    membuat dunia ini menjadi tempat yang lebih baik. Bersama kita bisa!.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Ayo Berdonasi</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Buat Proyek Anda Sendiri</h2>
                <p class="animate__animated animate__fadeInUp">Apakah Anda memiliki ide yang ingin Anda wujudkan
                    untuk SDGs? Anda dapat membuat proyek Anda sendiri di Brigawan dan mengajak komunitas kami untuk
                    mendukungnya.</p>
                <a href="/login" class="btn-get-started animate__animated animate__fadeInUp">Login</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Project 1</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Project 2</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Project 3</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Project 4</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                        data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                    <div class="section-title">
                        <h3>Bagaimana Anda Dapat Terlibat Lebih Aktif?</h3>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Buat Proyek Anda Sendiri</a></h4>
                        <p class="description">Apakah Anda memiliki ide yang ingin Anda wujudkan untuk SDGs? Anda dapat
                            membuat proyek Anda sendiri di Brigawan dan mengajak komunitas kami untuk mendukungnya.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">Jadi Relawan</a></h4>
                        <p class="description">Selain mendukung dengan dana, Anda juga dapat menyumbangkan waktu dan
                            keahlian Anda sebagai relawan untuk membantu proyek-proyek yang Anda pedulikan.</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>Mengapa Brigawan</h2>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4">
                    <h3>Membawa Impian Menjadi Kenyataan.</h3>
                    <p class="fst-italic">
                        Kami menyediakan wadah bagi para pemimpi dan visioner untuk menggalang dana guna menjalankan
                        proyek-proyek yang mengubah dunia.
                        Dari pendidikan dan kesehatan hingga lingkungan dan kesetaraan gender, Brigawan menyediakan
                        solusi untuk mendukung perubahan yang
                        Anda harapkan.
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Transparansi dan Akuntabilitas.</h3>
                    <p class="fst-italic">
                        Kami sangat peduli tentang transparansi dalam penggunaan dana.
                        Setiap proyek yang terdaftar di Brigawan harus memberikan pembaruan reguler kepada para
                        donatur,
                        sehingga Anda dapat melihat dampak positif yang telah dicapai melalui dukungan Anda.
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <h3>Komunitas Berperasaan Serupa</h3>
                    <p>Bergabunglah dengan komunitas besar orang-orang yang memiliki minat serupa dalam mencapai
                        SDGs.
                        Dari peneliti dan aktivis hingga perusahaan dan individu,
                        Brigawan menghubungkan mereka yang ingin berbuat baik dengan proyek-proyek yang membutuhkan
                        dukungan.</p>
                </div>
            </div>


        </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->
</body>
