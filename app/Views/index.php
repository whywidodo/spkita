<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPKita - Sistem Beasiswa Amikom</title>
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/style/css/bootstrap.css">
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/style/css/custom.css">
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/fontawesome/css/all.min.css">
</head>

<body>
  <div class="container-fluid">
    <section id="beranda">
      <nav class="navbar navbar-expand-lg py-3 mb-4 border-bottom bg-nav">
        <div class="container">
          <a class="navbar-brand" href="#"><i class="fa-solid fa-graduation-cap"></i> SPKita Solusi
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Timeline</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Daftar</a>
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
    <section id="tentang">
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <script src="<?php base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
  <script src="<?php base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
  <script>
    $('.carousel').carousel({
      interval: 2000
    })
  </script>
</body>

</html>