<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid" style="height: 50px;">
    <a class="navbar-brand" href="#">Hop Location Cafe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item" style="padding-right: 100px;">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown" style="padding-right: 150px;">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Location
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">KOTA PONTIANAK</a></li>
            <li><a class="dropdown-item" href="#">KABUPATEN KUBU RAYA</a></li>
            <li><a class="dropdown-item" href="#">KABUPATEN LANDAK</a></li>
            <li><a class="dropdown-item" href="#">KOTA SINGKAWANG</a></li>
            <li><a class="dropdown-item" href="#">KABUPATEN SAMBAS</a></li>
            <li><a class="dropdown-item" href="#">KABUPATEN BENGKAYANG</a></li>
            <li><a class="dropdown-item" href="#">KABUPATEN KETAPANG</a></li>
            <li><a class="dropdown-item" href="#">KABUPATEN KAYONG UTARA</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    <!-- End Example Code -->

    <!--map-->
    <div>
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1t9SHrxdV5gT_yASNouPmizZ1jynnSwY&ehbc=2E312F" width="100%" height="600px" style="margin-top: -60px;"></iframe>
    </div>
    <!--end map-->

    <div id="isi">
      <h1>Your Location</h1>
      <h1 style="margin-top: -30px;">HOP</h1>
      <input type="text" placeholder="Pencarian">
    </div>
  </body>
</html>