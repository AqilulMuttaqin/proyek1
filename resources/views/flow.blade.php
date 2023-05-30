@extends('layouts.template')

@section('content')
  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Ticket Order Flow</h2>
        <h3 style="color: #1E6115;">Ticket Information and Opening Hours of the Climb</h3>
        <p>Jam operasional yang diberlakukan di kawasan Gunung Butak maupun Panderman sama dengan gunung lainnya yang umumnya buka 24 jam untuk jam operasional. Namun, untuk malam hari seringkali basecamp panderman tidak buka 24 jam. Oleh karena itu, jika kalian berangkat malam hari biasanya menunggu sampai pagi hari sekitar 06.00 WIB.
          Untuk informasi mengenai tarif biaya, biaya pendakian yang diperlukan untuk melakukan kegiatan pendakian Gunung Butak-Panderman via Panderman yaitu Rp 10.000 untuk biaya registrasi, Rp 5.000 untuk motor/unit, dan Rp 10.000 untuk mobil/unit.</p><br><br>
      
        <h3 style="color: #1E6115;">Registration Flow for Mount Butak-Panderman Climbing</h3>
        <img src="assets/img/alur.png" alt="alur.jpg"><br><br><br>
        
        <h3 style="color: #1E6115;">Booking Tiket</h3>
        <p>For those of you who don't want to have any more trouble ordering tickets offline at the Mount Butak-Panderman climbing basecamp via Panderman, 
          we provide services for making online bookings for climbing Mount Butak-Panderman via Panderman. Hit the message button below.
        </p><br>
          <a href="{{ url('/booking') }}" class="booking-button">Booking</a>

      </div>
    </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->
@endsection
    
  