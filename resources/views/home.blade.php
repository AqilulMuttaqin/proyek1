@extends('layouts.template')

@section('content')
<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">      
          <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/laravel.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img id="peta" src="assets/img/tracking.jpeg" class="img-fluid peta" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Peta Jalur Pendakian Gunung Butak-Panderman</h3>
            
            <p class="fst-italic" style="text-align: justify;">
              Dimulai dari basecamp loket perijinan memesan tiket pendakian. Untuk jadwal operasional pendakian
              biasanya dimulai pukul 06.00 WIB
            </p>
            
            <p class="fst-italic" style="text-align: justify;">
              Untuk ke Puncak Basundara yang di mana itu merupakan puncak dari Gunung Panderman. Estimasi perjalanan
              dari loket perijinan ke sumber air hanya memerlukan waktu kurang lebih 15 menit. Lalu lanjut dari 
              sumber ke Latarombo berkisar 45 menit. Lalu lanjut, dari Latarombo ke Watu Gede memerlukan waktu sekitar
              1 jam, dan yang terakhir menuju ke Puncak Basundara memerlukan waktu sekitar 1,5 jam dengan medan jalur 
              pendakian yang sedikit curam.
            </p>
            
            <p class="fst-italic" style="text-align: justify;">
              Perjalanan dimulai dari basecamp melalui jalan setapak yang dikelilingi perkebunan penduduk menuju hutan. 
              Setelah melewati jalan setapak yang landai, dalam waktu sekitar 1,5-2 jam kita akan mencapai Pos 1, 
              tempat yang cocok untuk mendirikan tenda dengan sumber mata air. Perjalanan berlanjut dari Pos 1 dengan 
              trek berpasir yang menanjak, termasuk Tanjakan PHP. Alternatif jalur tersedia untuk menghindari Tanjakan PHP. 
              Sekitar 1,5-2 jam kemudian, kita akan mencapai Pos 2 yang datar dengan sedikit kemiringan. 
              Dari Pos 2, perjalanan dilanjutkan melalui hutan lebat dan setelah sekitar satu setengah jam, 
              kita akan sampai di Pos 3, tanah lapang yang ideal untuk mendirikan tenda. Dari Pos 3, 
              perjalanan terus berlanjut melalui jalan setapak berliku, dengan sesekali menyusuri atas tebing dan jurang. 
              Kurang dari 2 jam kemudian, kita akan tiba di Pos 4 atau Sabana Gunung Butak, tempat istirahat sebelum mencapai puncak Gunung Butak yang berada di ketinggian 2868 mdpl. 
              Estimasi waktu total perjalanan dari basecamp ke Sabana Gunung Butak adalah sekitar 5,5-7 jam, tergantung pada kondisi perjalanan.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="{{ url('/information') }}">Information</a></h4>
              <p>Contains information about Mount Butak-Panderman</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="{{ url('/gallery') }}">Gallery</a></h4>
              <p>Contains photos about Mount Butak-Panderman</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="{{ url('/flow') }}">Ticket Order Flow</a></h4>
              <p>Contains order flow about ticket Mount Butak-Panderman</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Hello everyone, we are the Group 7. We have come together to develop a web-based information system about a Butak-Panderman Mountain.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/Aqil.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Aqilul Muttaqin</h4>
                <span>Project Manager</span>
                <p>
                  Planning, team management, coordination, risk management, monitoring, change management, reporting, project evaluation, and leadership.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/Afif.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Afif Lukmanul Hakim</h4>
                <span>Team Lead</span>
                <p>Coordinating the team, managing resources, monitoring progress, managing risks, facilitating change, reporting, evaluating the project, and providing leadership.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/afiflh_/"><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/Billie.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Billie Faiqul Izzat</h4>
                <span>Communicate Specialist</span>
                <p>Responsible for managing the overall project. Plan schedules, organize team meetings, monitor progress, and ensure that projects are on time</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Team Section -->

  </main>
  @endsection


  <style>
    .peta{
      border-radius: 10px;
    }
    </style>