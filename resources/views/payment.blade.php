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
          <h1>PEMBAYARAN</h1>
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
        <h2>Detail Booking</h2>
    </div>
    <!-- Formulir untuk memasukkan tanggal berangkat dan pulang -->
    <form method="POST" action="{{ route('booking.store') }}">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Ketua Kelompok:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $booking->nama }}" required>
      </div>
      <div class="mb-3">
        <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat:</label>
        <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" value="{{ $booking->tanggal_berangkat }}" required>
      </div>
      <div class="mb-3">
        <label for="tanggal_pulang" class="form-label">Tanggal Pulang:</label>
        <input type="date" class="form-control" id="tanggal_pulang" name="tanggal_pulang" value="{{ $booking->tanggal_pulang }}" required>
      </div>
      <div class="mb-3">
        <label for="jumlah_pendaki" class="form-label">Jumlah Pendaki:</label>
        <input type="number" name="jumlah_pendaki" class="form-control" id="jumlah_pendaki" min="1" max="10" value="{{ $booking->jumlah_pendaki }}" required>
      </div>
      <div class="mb-3">
        <label for="jumlah_pendaki" class="form-label">Total Amount</label>
        <input type="number" name="total_amount" class="form-control" id="total_amount" value="{{ $booking->total_amount}}" required>
      </div>
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

</body>

</html>

{{-- </html>
<!-- payment.blade.php -->

<h1>Halaman Pembayaran</h1>

<h2>Detail Booking</h2>
<p>Nama Ketua Kelompok: {{ $booking->nama }}</p>
<p>Tanggal Berangkat: {{ $booking->tanggal_berangkat }}</p>
<p>Tanggal Pulang: {{ $booking->tanggal_pulang }}</p>
<p>Jumlah Pendaki: {{ $booking->jumlah_pendaki }}</p>
<p>Total Amount: {{ $booking->total_amount }}</p>

<hr>

<h2>Formulir Pembayaran</h2>
<form method="POST" action="{{ route('booking.processPayment', $booking->id) }}">
    @csrf
    <!-- Tambahkan input lainnya sesuai kebutuhan -->
    <div class="mb-3">
        <label for="payment_method">Pembayaran kirim ke rekening yang tertera di bawah</label><br>
        <label for="payment_method">BRI: 626163646506</label><br>
        <label for="payment_method">BNI: 717273747507</label>   
    </div>
    <div class="mb-3">
        <label>Bukti Pembayaran</label>
        <input type="file" name="bukti_pembayaran">
    </div>
    <button type="submit" class="btn btn-primary">Bayar</button>
</form> --}}