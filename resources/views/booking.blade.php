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

      <div class="section-title">
        <h2>Booking</h2>
      </div>

    </div>
    <!-- Formulir untuk memasukkan tanggal berangkat dan pulang -->
    <form method="POST" action="{{ route('booking.store') }}">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Ketua Kelompok:</label>
        <input type="text" class="form-control" id="nama" name="nama" required value="{{ old('nama')}}">
      </div>
      <div class="mb-3">
        <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat:</label>
        <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" required value="{{ old('tanggal_berangkat')}}">
      </div>
      <div class="mb-3">
        <label for="tanggal_pulang" class="form-label">Tanggal Pulang:</label>
        <input type="date" class="form-control" id="tanggal_pulang" name="tanggal_pulang" required value="{{ old('tanggal_pulang')}}">
      </div>
      <div class="mb-3">
        <label for="jumlah_pendaki" class="form-label">Jumlah Pendaki:</label>
        <input type="number" name="jumlah_pendaki" class="form-control" id="jumlah_pendaki" min="1" max="10" value="1" required value="{{ old('jumlah_pendaki')}}">
        <p>Ket: Jumlah pendaki termasuk dengan ketua kelompok.</p>
      </div>
      <button type="submit" class="btn btn-primary" onclick="calculateTotal()">Booking</button>

      <script>
          function calculateTotal() {
              // Lakukan perhitungan total pembayaran sesuai dengan kebutuhan
              var jumlahPendaki = parseInt(document.getElementById('jumlah_pendaki').value);
              var totalAmount = jumlahPendaki * 100; // Misalnya, setiap pendaki dikenakan biaya 100
  
              // Setel nilai total_amount pada input tersembunyi
              document.getElementById('total_amount').value = totalAmount;
          }
      </script>
    </form>
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
  <script>
    let error = document.querySelector('#error').value;
    if(error != 'bukan'){
      alert(error);
    } else {
      console.log('tes')
    }
  </script>
</body>

</html>