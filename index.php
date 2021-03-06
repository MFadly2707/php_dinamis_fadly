<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<!-- Ini Adalah Navbar -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Fadly</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link Mactive" aria-current="page" href="#">Alamat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hobi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cita - Cita</a>
        </li>
    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
     </div>
    </div>
  </nav>
</div>
<!-- Ini Adalah Penutup Navbar -->
<!-- Content 1 -->
<div class="container" id=perkenalan> 
  <div class="row">
    <div class="col-4">
    <div class="card mx-auto" style="width: 8rem;">
  <img src="assets/img/fadly.jpg" class="card-img-top" style="width: 12rem;">
    <div class="card-body">
    <p class="card-text">Muhammad Fadly Eka Ardiansyah</p>
    </div>
  </div>
</div>
<div class="col-8">
      <h1>Selamat datang di website saya</h1>
      <p>Perkenalkan nama saya Muhammad Fadly Eka Ardiansyah dari kelas xi rpl</p>
    </div>
  </div>
</div>
<!-- Penutup Content 1 -->
<!-- Content 2 -->
<div class="container" id=alamat>
  <div class="row">
    <div class="col-8">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/slide/h1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/slide/h2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/slide/h3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>
<div class="col-4">
  <h1>alamat rumah saya</h1>
  <p>Jl.Kebon Jeruk XIX No.59</p>
    </div>
</div>
</div>
</div>
<!-- Penutup Content 2 -->

<!-- Link Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body> 
</html>