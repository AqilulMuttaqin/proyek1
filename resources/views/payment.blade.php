<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Proyek 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('')}}assets/img/favicon.png" rel="icon">
  <link href="{{asset('')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('')}}assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('')}}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('')}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('')}}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('')}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
      form {
        margin-left: 10px;
        margin-right: 100px;
      }

      .mb-3 h3 {
        font-family: Roboto;
      }

      .mb-3 label {
        font-family: Open Sans;
        font-size: 20px;
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

  </section><br>

    <!-- Main -->
  <!-- ======= Skills Section ======= -->
    <!-- Formulir untuk memasukkan tanggal berangkat dan pulang -->

    <div class="section-title">
      <h2>Payment Confirmation</h2>
    </div>
    
    <div class="container mt-3">
      <div class="card shadow">
        <div class="card-body">
          <div class="form-container">
            <form method="POST" action="{{ route('booking.processPayment', $booking->id) }}" enctype="multipart/form-data">
              <!-- Tambahkan input lainnya sesuai kebutuhan -->
              @csrf
              <div class="mb-3">
                <h3>Payment Instruction</h3>
                <label for="payment_method">Pembayaran kirim ke rekening yang tertera di bawah</label><br>
                <label for="payment_method">- BRI: 626163646506</label><br>
                <label for="payment_method">- BNI: 717273747507</label><br>
                <label for="bukti_pembayaran">Bukti Pembayaran:</label>
                <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" accept="image/*" required>
                <input type="hidden" name="nama" value="{{$booking->nama}}">
                <input type="hidden" name="tanggal_berangkat" value="{{$booking->tanggal_berangkat}}">
                <input type="hidden" name="tanggal_pulang" value="{{$booking->tanggal_pulang}}">
                <input type="hidden" name="jumlah_pendaki" value="{{$booking->jumlah_pendaki}}">
              </div>
              <button type="submit" class="btn btn-success">Bayar</button>
            </form>
          </div>
        </div>
      </div>
    </div>    
    <br>
    
  
  
    {{-- <div class="form-container">
    <h2 class="form-pembayaran">Konfirmasi Pembayaran</h2>
    <form method="POST" action="{{ route('booking.processPayment', $booking->id) }}" enctype="multipart/form-data">
    <!-- Tambahkan input lainnya sesuai kebutuhan -->
    @csrf
    <div class="mb-3">
        <label for="payment_method">Pembayaran kirim ke rekening yang tertera di bawah</label><br>
        <label for="payment_method">BRI: 626163646506</label><br>
        <label for="payment_method">BNI: 717273747507</label><br>
        <label for="bukti_pembayaran">Bukti Pembayaran:</label>
        <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" accept="image/*" required>
        <input type="hidden" name="nama" value="{{$booking->nama}}">
        <input type="hidden" name="tanggal_berangkat" value="{{$booking->tanggal_berangkat}}">
        <input type="hidden" name="tanggal_pulang" value="{{$booking->tanggal_pulang}}">
        <input type="hidden" name="jumlah_pendaki" value="{{$booking->jumlah_pendaki}}">
    </div>
      <button type="submit" class="btn btn-primary">Bayar</button>
    </form>
  </div><br> --}}

  </section>

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('')}}assets/vendor/aos/aos.js"></script>
  <script src="{{asset('')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('')}}assets/vendor/isotope-layouts/isotope.pkgd.min.js"></script>
  <script src="{{asset('')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('')}}assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{asset('')}}assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('')}}assets/js/main.js"></script>
  
</body>

</html>
<!-- payment.blade.php -->

