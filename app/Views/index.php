<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPKita - Sistem Beasiswa Amikom</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/custom.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css">
</head>

<body>
  <section id="beranda">
    <nav class="navbar navbar-expand-lg py-3 mb-4 fixed-top sticky sticky-dark nav-sticky bg-nav">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-graduation-cap"></i> SPKita Solusi
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item ">
              <a class="nav-link scrollto active" aria-current="page" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollto" href="#timeline">Timeline</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollto" href="#faq">Panduan dan FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrollto" href="#kontak">Kontak Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>/login">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>


  <section class="bg-home bg-hexa" id="home">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class=""></li>
        <li data-target="#carouselExampleControls" data-slide-to="1" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active carousel-item-left">
          <div class="home-center">
            <div class="home-desc-center">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="home-title mo-mb-20 text-white">
                      <h1 class="mb-4 text-white">
                        SPKita Beasiswa Pendidikan</h1>
                      <p class="text-white-50 home-desc">
                      </p>
                      <p>SPKita Beasiswa merupakan beasiswa pendidikan yang ditujukan bagi kalian yang ingin
                        belajar di Perguruan Tinggi namun terbatas biaya perkuliahan. Dengan beasiswa SPKita kalian
                        memiliki kesempatan untuk belajar dan menambah ilmu pengetahuan. </br></br>
                        LET'S JOIN US!</p>
                      <p></p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-md-7 order-first-" style="margin: 0 auto;">
                    <div class="home-img position-relative">
                      <img class="d-block w-100" src="<?php base_url(); ?>/assets/images/slider1.png" alt="" class="home-first-img">
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </div>
              <!-- end container-fluid -->
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>


  <!-- Timeline -->
  <section id="timeline">
    <div class="timeline">
      <h3 class="heading">Timeline Beasiswa 2023</h3>
      <div class="stytimeline">
        <ul>
          <li>
            <h4 class="title">Sosialisasi Beasiswa</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quod qui dolorem, eligendi
              magni</p>
            <span class="circle"></span>
            <span class="date">Desember 2022</span>
          </li>
          <li>
            <h4 class="title">Pendaftaran Beasiswa</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quod qui dolorem, eligendi
              magni</p>
            <span class="circle"></span>
            <span class="date">Januari 2023</span>
          </li>
          <li>
            <h4 class="title">Penutupan Pendaftaran</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quod qui dolorem, eligendi
              magni</p>
            <span class="circle"></span>
            <span class="date">Maret 2023</span>
          </li>
          <li>
            <h4 class="title">Pengumuman Penerima Beasiswa</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quod qui dolorem, eligendi
              magni</p>
            <span class="circle"></span>
            <span class="date">April 2023</span>
          </li>
        </ul>
      </div>

    </div>
  </section>
  <!-- Timeline -->


  <!-- FAQ -->
  <section id="faq" class="faq bg-hexa">

    <div class="container-fluid" data-aos="fade-up">

      <header class="section-header bg-transparent">
        <h4 class="h4 text-white">Panduan dan FAQ</h4>
      </header>

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Apa beasiswa SPKita gratis?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna
                    aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui
                    ut ornare
                    lectus sit amet est
                    placerat in egestas.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Siapa saja yang boleh mendaftar beasiswa?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna
                    aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui
                    ut ornare
                    lectus sit amet est
                    placerat in egestas.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Jika mendaftar beasiswa kemudian saya dikatakan tidak layak, apa yang akan terjadi?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna
                    aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui
                    ut ornare
                    lectus sit amet est
                    placerat in egestas.
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Apakah ada test untuk pendaftaran beasiswa?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna
                    aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui
                    ut ornare
                    lectus sit amet est
                    placerat in egestas.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Penerima beasiswa apakah tidak boleh menikah selama kuliah?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna
                    aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui
                    ut ornare
                    lectus sit amet est
                    placerat in egestas.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Apakah penerima beasiswa dapat pindah prodi?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna
                    aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui
                    ut ornare
                    lectus sit amet est
                    placerat in egestas.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- FAQ -->


  <!-- Kontak -->
  <section id="kontak">
    <div class="informasi">
      <h3 class="heading">Kontak Kami</h3>
      <div class="container card">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <p class="p-3">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo quo exercitationem
              recusandae,
              eligendi, officiis dolores voluptatibus corporis maxime saepe cumque amet omnis ex,
              perferendis voluptas
              nemo eveniet neque voluptates ea?. Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Cupiditate
              velit cum ducimus incidunt fugiat nostrum doloribus neque earum esse. Tempora eos,
              accusamus fuga id culpa
              sed at mollitia deleniti incidunt. Lorem ipsum dolor sit amet consectetur, adipisicing
              elit. Explicabo quo
              exercitationem recusandae,
            </p>
          </div>
          <div class="col-lg-6 col-md-6">
            <iframe style="min-width: 100%; min-height: 100%;" src="https://maps.google.com/maps?q=Universitas%20Amikom%20Purwokerto&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Kontak -->


  <!-- Footer -->
  <section id="footer">
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <span class="mb-1 mb-md-0 text-muted" style="font-size: 14px;">Copyright &copy; 2022 -
            <strong>SPKita</strong> Solusi</span>
        </div>
      </footer>
    </div>
  </section>
  <!-- Footer -->


  <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
  <script>
    $('.carousel').carousel({
      interval: 2000
    })
  </script>
</body>

</html>