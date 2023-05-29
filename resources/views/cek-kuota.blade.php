<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Proyek 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
      form {
        margin-left: 100px;
        margin-right: 100px;
      }

      table {
        max-width: 100%;
        width: 1150px;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        color: #333;
        margin-left: 100px;

    }

    table thead th {
        background-color: #1E6115;
        color: #fff;
        padding: 10px;
        text-align: left;
    }

    table tbody td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  @include('layouts.navbar')
  <!-- End Header -->

  <section id="hero1" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>HALAMAN</h1>
          <h1>BOOKING</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          {{-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> --}}
        </div>
      </div>
    </div>

  </section>

    <!-- Main -->
  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills">
    <div class="form-container">

    </div>
    <!-- Formulir untuk memasukkan tanggal berangkat dan pulang -->

    <form action="{{ route('cek-kuota') }}" method="GET">
    <div class="mb-3">
        <label for="start_date" class="form-label">Tanggal Berangkat:</label>
        <input class="form-control" type="date" name="start_date" id="start_date" required>
    </div>
    <div class="mb-3">
        <label for="end_date" class="form-label">Tanggal Pulang:</label>
        <input class="form-control" type="date" name="end_date" id="end_date" required>
    </div>
    <button type="submit" class="btn btn-primary">Cek Kuota</button>
</form>

<br>
@if (isset($kuotas))
    <h2 class="kuotapendakian">Kuota Pendakian:</h2>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Kuota Tersedia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kuotas as $kuota)
                <tr>
                    <td>{{ $kuota->tanggal->format('Y-m-d') }}</td>
                    <td>{{ $kuota->kuota }} kuota tersedia</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

    {{-- <ul>
        @foreach ($kuotas as $kuota)
            <li>{{ $kuota->tanggal->format('Y-m-d') }}: {{ $kuota->kuota }} kuota tersedia</li>
        @endforeach
    </ul> --}}
@endif
  </section>

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layouts/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>