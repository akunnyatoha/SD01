<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SDN SUKAPURA 01 | {{ $title }}</title>
  </head>
  <body>
    <div class="wrapper" style="display:flex; flex-direction: column; justify-content:center; align-items:center; background-color:rgb(223, 223, 223); height:50px">
      <span id="tanggal"></span>
      <span id="waktu"></span>
    </div>
    <div class="title-sekolah" style="display:flex; flex-direction: column; justify-content:center; align-items:center;">
      <img src="img/logo/logo.jpg" alt="Tutwuri Handayani" style="width: 100px">
      <h1 style="font-weight: bold; color:rgb(0, 0, 0)">SDN SUKAPURA 01</h1>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(175, 0, 0);">
      <div class="container" style="display:flex; flex-direction:row; justify-content: space-between; align-items:center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="display: flex; justify-content:center; align-items:center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="profile">Profile</a></li>
                <li><a class="dropdown-item" href="sejarah">Sejarah</a></li>
                <li><a class="dropdown-item" href="fasilitas">Fasilitas</a></li>
                <li><a class="dropdown-item" href="denah">Denah</a></li>
                <li><a class="dropdown-item" href="kontak">Kontak</a></li>
                <li><a class="dropdown-item" href="struktur">struktur</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/visimisi">Visi & Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/ptk">PTK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/prestasi">Prestasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/informasi">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/kegiatan">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/galeri">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="width: 100;">
          <div class="carousel-item active">
            <img src="img/slides/slide1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slides/slide2.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slides/slide3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container">
          @yield('container')
      </div>
      
      <div class="footer" style="background-color: black; display:flex; flex-direction:column; justify-content:center; align-items:center; height:150px; margin-top:1cm">
        <span style="text-align: center; color:white; font-size:12px">CopyRight © 2022-SDN Sukapura 01 <br/> Developer: @tohabgskr</span>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      var dt = new Date();
      document.getElementById("tanggal").innerHTML = dt.toLocaleDateString();
      </script>
      <script type="text/javascript">
        window.onload = function() {waktu();}

        function waktu() {
          var a = document.getElementById('waktu'),
          d = new Date(), h, m, s;
          h = d.getHours();
          m = set(d.getMinutes());
          s = set(d.getSeconds());

          a.innerHTML = h + ":" + m + ":" + s;

          setTimeout('waktu()', 1000);
        }

        function set(a) {
          a = a < 10? '0' + a : a;
          return a;
        }
      </script>
  </body>
</html>