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
              <a class="nav-link scrollto" href="#informasi">Informasi</a>
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

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php base_url(); ?>/assets/images/slider-2.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php base_url(); ?>/assets/images/slider-1.jpg" alt="Second slide">
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

  <!-- Informasi -->
  <section id="informasi">
    <div class="informasi">
      <h3 class="heading">Informasi Beasiswa 2023</h3>
      <div class="container">
        <div class="row">
          <div class="card col-lg-12 col-md-6">
            <div class="card-body">
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo quo exercitationem recusandae,
                eligendi, officiis dolores voluptatibus corporis maxime saepe cumque amet omnis ex, perferendis voluptas
                nemo eveniet neque voluptates ea?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
                velit cum ducimus incidunt fugiat nostrum doloribus neque earum esse. Tempora eos, accusamus fuga id culpa
                sed at mollitia deleniti incidunt. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo quo
                exercitationem recusandae,
                eligendi, officiis dolores voluptatibus corporis maxime saepe cumque amet omnis ex, perferendis voluptas
                nemo eveniet neque voluptates ea?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
                velit cum ducimus incidunt fugiat nostrum doloribus neque earum esse. Tempora eos, accusamus fuga id culpa
                sed at mollitia deleniti incidunt.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Informasi -->

  <!-- Timeline -->
  <section id="timeline">
    <div class="timeline">
      <h3 class="heading">Timeline Beasiswa 2023</h3>
      <div class="stytimeline">
        <ul>
          <li>
            <h4 class="title">Sosialisasi Beasiswa</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quod qui dolorem, eligendi magni</p>
            <span class="circle"></span>
            <span class="date">Desember 2022</span>
          </li>
          <li>
            <h4 class="title">Pendaftaran Beasiswa</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quod qui dolorem, eligendi magni</p>
            <span class="circle"></span>
            <span class="date">Januari 2023</span>
          </li>
          <li>
            <h4 class="title">Penutupan Pendaftaran</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quod qui dolorem, eligendi magni</p>
            <span class="circle"></span>
            <span class="date">Maret 2023</span>
          </li>
          <li>
            <h4 class="title">Pengumuman Penerima Beasiswa</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quod qui dolorem, eligendi magni</p>
            <span class="circle"></span>
            <span class="date">April 2023</span>
          </li>
        </ul>
      </div>

    </div>
  </section>
  <!-- Timeline -->
  <!-- FAQ -->
  <section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h4 class="heading">Panduan dan FAQ</h4>
      </header>

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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna
                  aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui ut ornare
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna
                  aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui ut ornare
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna
                  aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui ut ornare
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna
                  aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui ut ornare
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna
                  aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui ut ornare
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
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna
                  aliqua. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Dui ut ornare
                  lectus sit amet est
                  placerat in egestas.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- FAQ -->



  <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
  <script>
    $('.carousel').carousel({
      interval: 2000
    })
  </script>
</body>

</html>