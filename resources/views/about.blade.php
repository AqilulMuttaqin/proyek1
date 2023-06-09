@extends('layouts.template')

@section('content')
  <!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About Us</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p class="text-justify">
          The Mount Panderman-Butak team consists of enthusiastic and dedicated members, 
          although we are still beginners in website development. Aqilul Muttaqin, as the Project Manager, 
          is responsible for coordinating the efforts of website creation and development. 
          Afif, as the Team Lead, assists in designing the website's layout and functionality to cater to the needs of visitors. 
          Billie, as the Communication Specialist, plays a role in effectively and engagingly conveying information about Gunung Panderman-Butak through the website. 
          Despite being in the learning phase, we are committed to providing a great user experience on our website and continually improving its quality over time.
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <div class="social-media">
          <a href="https://www.facebook.com/GunungButak" target="_blank" rel="noopener noreferrer" style="font-size: 25px;"><i class="fab fa-facebook-f" ></i> Gunung Butak</a>
          <a href="https://www.instagram.com/panderman_buthak/" target="_blank" rel="noopener noreferrer" style="font-size: 25px;"><i class="fab fa-instagram"></i> @panderman_buthak</a>
          <a href="https://github.com/AqilulMuttaqin/proyek1" target="_blank" rel="noopener noreferrer" style="font-size: 25px;"><i class="fab fa-github"></i> Proyek Web Butak-Panderman</a>
          <!-- Tambahkan tombol sosial media lainnya di sini -->
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>"Gunung Panderman-Butak is located in Pesanggrahan, Kec. Batu, Kota Batu, East Java, Indonesia."</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65313</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>081234567890 (Aqilul)</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7904.114403091758!2d112.49347916091115!3d-7.889084714736026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7887ca42fe676d%3A0xffd43d204369a57f!2sPos%20Pendakian%20Gunung%20Butak%20Via%20Panderman!5e0!3m2!1sid!2sid!4v1686185404639!5m2!1sid!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

          </div>
        </div>
      </div>
  </section>  
@endsection

@push('custom_css')
  <style>
    .social-media {
    display: flex;
    flex-direction: column;
    align-items:flex-start;
  }

  .social-media a {
    display: inline-block;
    margin-bottom: 10px;
  }

  .social-media i {
    font-size: 30px;
  }
  </style>
@endpush

  
      