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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <section id="beranda">
    <nav class="navbar navbar-expand-lg py-3 mb-4 fixed-top sticky sticky-dark nav-sticky bg-nav">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>"><i class="fa-solid fa-graduation-cap"></i> SPKita Solusi
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
              <a class="nav-link" href="<?= base_url(); ?>/login">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>


  <section class="bg-home bg-hexa" id="home">
    <div id="sliderSPKita" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
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
              <!-- end container -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="home-center">
            <div class="home-desc-center">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="home-title mo-mb-20 text-white">
                      <h1 class="mb-4 text-white">
                        SPKita Solusi</h1>
                      <p class="text-white-50 home-desc">
                      </p>
                      <p>SPKita Solusi adalah sebuah website yang dirancang untuk memudahkan proses seleksi penerimaan
                        beasiswa pendidikan pada perguruan tinggi. Tujuan dibuatnya aplikasi ini adalah untuk menentukan
                        target penerima beasiswa berdasarkan persyaratan yang telah dibuat secara efisien.</p>
                      <p></p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-md-7 order-first-" style="margin: 0 auto;">
                    <div class="home-img position-relative">
                      <img class="d-block w-100" src="<?php base_url(); ?>/assets/images/slider2.png" alt="" class="home-first-img">
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </div>
              <!-- end container -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="home-center">
            <div class="home-desc-center">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="home-title mo-mb-20 text-white">
                      <h1 class="mb-4 text-white">
                        Beasiswa JPPO</h1>
                      <p class="text-white-50 home-desc">
                      </p>
                      <p>Jalur Peminatan Prestasi dan Olahraga (JPPO) merupakan beasiswa yang disalurkan oleh
                        Universitas Amikom Purwokerto bagi siswa yang memiliki prestasi dibidang akademin dan non
                        akademik, seperti peringkat kelas, nilai rata-rata raport dan hafal minimal 5 jus
                        Al-Qur'an.</br></br>
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-md-7 order-first-" style="margin: 0 auto;">
                    <div class="home-img position-relative">
                      <img class="d-block w-100" src="<?php base_url(); ?>/assets/images/slider4.png" alt="" class="home-first-img">
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </div>
              <!-- end container -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="home-center">
            <div class="home-desc-center">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="home-title mo-mb-20 text-white">
                      <h1 class="mb-4 text-white">
                        Daftar Sekarang Juga!!</h1>
                      <p class="text-white-50 home-desc">
                      </p>
                      <p>Semua orang bermimpi untuk sukses dan semua orang memiliki peluang untuk sukses, segera
                        daftarkan dirimu dan nantikan pengumumannya.</br></br>Bergabunglah
                        bersama kami dan nikmati manfaatnya.</br></br>
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 offset-lg-1 col-md-7 order-first-" style="margin: 0 auto;">
                    <div class="home-img position-relative">
                      <img class="d-block w-100" src="<?php base_url(); ?>/assets/images/slider3.png" alt="" class="home-first-img">
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </div>
              <!-- end container -->
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#sliderSPKita" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#sliderSPKita" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
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
            <p>Sosialisasi merupakan tahap pengenalan mengenai program beasiswa SPKita yang diadakan sejak bulan
              Desember 2022</p>
            <span class="circle"></span>
            <span class="date">Desember 2022</span>
          </li>
          <li>
            <h4 class="title">Pendaftaran Beasiswa</h4>
            <p>Pendaftaran Beasiswa dapat dilakukan mulai bulan Januari 2023, namun pendaftaran akun dapat dilakukan
              sebelum bulan tersebut</p>
            <span class="circle"></span>
            <span class="date">Januari 2023</span>
          </li>
          <li>
            <h4 class="title">Penutupan Pendaftaran</h4>
            <p>Pendaftaran akan ditutup di bulan Maret 2023 untuk dilakukan proses penentuan penerima Beasiswa SPKita
            </p>
            <span class="circle"></span>
            <span class="date">Maret 2023</span>
          </li>
          <li>
            <h4 class="title">Pengumuman Penerima Beasiswa</h4>
            <p>Pengumuman penerima Beasiswa SPKita akan mendapat informasi penerimaan di akun masing-masing</p>
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

    <div class="container" data-aos="fade-up">

      <header class="section-header bg-transparent">
        <h4 class="h4 text-white">Panduan Beasiswa</h4>
      </header>

      <div id="panduan" class="mb-5">
        <div class="card mb-200">
          <div class="card-body">
            <h5 class="card-title">Unduh Panduan</h5>
            <table class="table table-hover">
              <tr>
                <td>#</td>
                <td><strong>NAMA</strong></td>
                <td><strong>AKSI</strong></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Pedoman Pendaftaran Beasiswa SPKita 2023.pdf</td>
                <td>
                  <form action="<?= base_url('/assets/documents/panduan.pdf'); ?>" method="post">
                    <button type="submit" class="btn btn-primary btn-sm">
                      <i class="bi bi-download"></i>
                    </button>
                  </form>
                </td>
              </tr>

            </table>
          </div>
        </div>
      </div>

      <h4 class="h4 text-white" style="text-align: center;">Frequently Asked Questions</h4>
      <p class="text-white" style="text-align: center;">Pertanyaan yang sering ditanyakan</p>
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
                    Beasiswa SPKita sepenuhnya gratis, kecuali apabila nantinya terdapat kegiatan tambahan selama masa
                    kuliah.
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
                    Siapa saja boleh mendaftar beasiswa SPKita, namun kriteria penerima ditentukan berdasarkan kondisi
                    ekonomi dan nilai semasa sekolah. Untuk pendaftar Gap Year kami hanya menerima pendaftar mulai dari
                    lulusan 2019.
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
                    SPKita Beasiswa ditujukan secara eksklusif hanya untuk yang tidak mampu secara ekonomi. Siswa yang
                    secara
                    akademik unggul tapi mampu secara ekonomi tidak diperkenankan mendaftar. Namun jika anda mendaftar
                    dan dikatakan tidak layak kemungkinan anda akan ditetapkan sebagai mahasiswa reguler bukan penerima
                    Beasiswa SPKita.
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
                    Tidak ada test secara tertulis maupun lisan, namun diharapkan bagi pendaftar menginputkan nilai
                    dengan sejujur-jujurnya.
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
                    Jika sudah menjadi mahasiswa kemudian
                    menikah maka Beasiswa SPKita tidak dapat disalurkan lagi, hal ini dikarenakan tanggung jawab
                    penerima
                    beasiswa sudah sepenuhnya ditanggung oleh pasangan masing-masing.
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
                    Penerima Beasiswa SPKita tidak diperkenankan pindah prodi maupun fakultas, hal ini akan mempersulit
                    proses administrasi dan menghambat lamanya waktu kuliah sampai dengan lulus.
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
      <div class="container card" style="height: 350px;">
        <div class="row">
          <div class="col-lg-6 col-md-6 py-3">
            <p class="px-3 pt-3">Apabila ada pertanyaan atau kendala mengenai proses beasiswa, silahkan bisa menghubungi
              kami melalui kontak yang tertera berikut ini : </p>
            <div class="px-3">
              <i class="h5 bi bi-whatsapp px-2 py-2"></i>&nbsp; 0811-1111-xxxx
            </div>
            <div class="px-3">
              <i class="h5 bi bi-telephone px-2 py-2"></i>&nbsp; 0281-000-xxx
            </div>
            <div class="px-3">
              <i class="h5 bi bi-envelope px-2 py-2"></i>&nbsp; admin@spkita.my.id
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <iframe style="min-width: 100%; min-height: 350px;" src="https://maps.google.com/maps?q=Universitas%20Amikom%20Purwokerto&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

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
          <span class="mb-1 mb-md-0 text-muted" style="font-size: 14px;">Copyright &copy; <?= Date('Y'); ?>
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