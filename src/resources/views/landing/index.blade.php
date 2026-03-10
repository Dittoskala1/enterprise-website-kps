@extends('landing.layout')

@section('content')


  <div class="sidebar-left">
    <div class="sidebar-close">
      <a class="close" href="#close"><i class="lni lni-close"></i></a>
    </div>
    <div class="sidebar-content">
      <div class="sidebar-logo">
      <img src="{{ asset('landing/assets/images/blog/logokps.png') }}" 
     alt="Logo PT KPS"
     style="height:100px;">
      </div>
      <p class="text">Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro.</p>
      <!-- logo -->
      <div class="sidebar-menu">
        <h5 class="menu-title">Quick Links</h5>
        <ul>
          <li><a href="javascript:void(0)">About Us</a></li>
          <li><a href="javascript:void(0)">Our Team</a></li>
          <li><a href="javascript:void(0)">Latest News</a></li>
          <li><a href="javascript:void(0)">Contact Us</a></li>
        </ul>
      </div>
      <!-- menu -->
      <div class="sidebar-social align-items-center justify-content-center">
        <h5 class="social-title">Follow Us On</h5>
        <ul>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-youtube"></i></a>
          </li>
        </ul>
      </div>
      <!-- sidebar social -->
    </div>
    <!-- content -->
  </div>
  <div class="overlay-left"></div>

  <!--====== SIDEBAR PART ENDS ======-->

  <!-- Start header Area -->
  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>PT. KUSUMA PUTRA SUKSES</h1>
            <p style="font-style: italic; text-align: justify;">
            Kami adalah perusahaan penyedia kebutuhan industri yang membantu perusahaan mencapai kelancaran dan efisiensi operasional.
            Bagi kami, kualitas produk dan ketepatan distribusi adalah fondasi untuk membangun kepercayaan dan keberlanjutan bisnis.
            </p>
            <div class="button">
              <a href="javascript:void(0)" class="btn primary-btn">Get Started</a>
              <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                class="glightbox video-button">
                <span class="btn icon-btn rounded-full">
                  <i class="lni lni-play"></i>
                </span>
                <span class="text">Watch Intro</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="{{ asset('landing/assets/images/blog/intro.jpg') }}">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End header Area -->

  <!--====== ABOUT FIVE PART START ======-->

  <section class="about-area about-five">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="about-image-five">
            <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
            </svg>
            <img src="{{ asset('landing/assets/images/blog/gudang.jpg') }}">
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-five-content">
            <h6 class="small-title text-lg">OUR STORY</h6>
            <h2 class="main-title fw-bold">Our team comes with the experience and knowledge</h2>
            <div class="about-five-tab">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who"
                    type="button" role="tab" aria-controls="nav-who" aria-selected="true">Who We Are</button>
                  <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision"
                    type="button" role="tab" aria-controls="nav-vision" aria-selected="false">our Vision</button>
                  <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                    type="button" role="tab" aria-controls="nav-history" aria-selected="false">our History</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                  <p style="font-style: italic; text-align: justify;">
                    PT Kusuma Putra Sukses adalah perusahaan yang bergerak di bidang penyediaan dan distribusi kebutuhan industri serta operasional perusahaan. Kami hadir untuk mendukung kelancaran aktivitas bisnis melalui produk yang berkualitas, pelayanan yang responsif, dan sistem distribusi yang tepat waktu.
                     Didukung oleh tim yang profesional dan berpengalaman, kami berkomitmen untuk memberikan solusi yang efisien dan bernilai tambah bagi setiap pelanggan. Kami memahami bahwa setiap industri memiliki kebutuhan yang berbeda, sehingga kami selalu mengutamakan fleksibilitas, ketepatan, dan konsistensi dalam setiap kerja sama.
                     </p>
                  <p style="font-style: italic; text-align: justify;"> 
                  Bagi kami, hubungan bisnis bukan sekadar transaksi, melainkan kemitraan jangka panjang yang dibangun atas dasar kepercayaan, integritas, dan profesionalisme.
                </p>
                </div>
                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                  <p style="font-style: italic; text-align: justify;">
                    Menjadi perusahaan yang unggul dan terpercaya dalam penyediaan kebutuhan industri, dengan mengedepankan kualitas produk, profesionalisme layanan, serta sistem distribusi yang efisien dan tepat waktu, guna mendukung kelancaran dan pertumbuhan bisnis pelanggan secara berkelanjutan.
                  </p>
                  <p style="font-style: italic; text-align: justify;">
                  Menjadi perusahaan distribusi kebutuhan industri yang unggul, inovatif, dan berintegritas, serta mampu menciptakan nilai tambah berkelanjutan bagi pelanggan dan mitra bisnis.
                </p>
                </div>
                <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                  <p style="font-style: italic; text-align: justify;">
                    PT Kusuma Putra Sukses didirikan dengan semangat untuk menghadirkan solusi yang andal dalam penyediaan kebutuhan industri dan operasional perusahaan. Berawal dari komitmen untuk membantu berbagai sektor usaha memperoleh produk berkualitas dengan proses distribusi yang efisien, perusahaan ini tumbuh melalui kepercayaan dan kerja sama jangka panjang dengan para pelanggan.
                     Seiring perkembangan dunia industri yang semakin dinamis, PT Kusuma Putra Sukses terus beradaptasi dan meningkatkan standar pelayanan, sistem distribusi, serta kualitas produk yang ditawarkan. Dengan fokus pada konsistensi, ketepatan waktu, dan profesionalisme, perusahaan memperluas jaringan serta memperkuat kemitraan bisnis di berbagai sektor industri.
                    </p>
                  <p style="font-style: italic; text-align: justify;">
                    Hingga saat ini, PT Kusuma Putra Sukses terus berkomitmen untuk berkembang secara berkelanjutan, menjaga integritas, serta memberikan kontribusi nyata dalam mendukung kelancaran operasional dan pertumbuhan bisnis para mitra.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container -->
  </section>

  <!--====== ABOUT FIVE PART ENDS ======-->

  <!-- ===== service-area start ===== -->
  <section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Services</h6>
              <h2 class="fw-bold">Our Best Services</h2>
              <p>
              Solusi layanan terbaik dari PT Kusuma Putra Sukses untuk mendukung kebutuhan bisnis Anda.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
             <i class="lni lni-package"></i>
            </div>
            <div class="service-content">
              <h4>Penyediaan Kebutuhan Industri Berkualitas</h4>
              <p>
              Kami menyediakan berbagai kebutuhan industri dengan standar kualitas terbaik untuk mendukung kelancaran operasional perusahaan secara optimal dan berkelanjutan.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
             <i class="lni lni-delivery"></i>
            </div>
            <div class="service-content">
              <h4>Distribusi Tepat Waktu</h4>
              <p>
              Ketepatan pengiriman adalah prioritas kami. Dengan sistem distribusi yang terorganisir, kami memastikan setiap pesanan sampai sesuai jadwal yang telah disepakati.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
             <i class="lni lni-dollar"></i>
            </div>
            <div class="service-content">
              <h4>Harga Kompetitif & Transparan</h4>
              <p>
              Kami menawarkan harga yang kompetitif dengan sistem penawaran yang jelas dan transparan, sehingga memberikan nilai terbaik bagi setiap pelanggan.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
             <i class="lni lni-support"></i>
            </div>
            <div class="service-content">
              <h4>Pelayanan Responsif & Profesional</h4>
              <p>
              Tim kami siap memberikan pelayanan yang cepat, ramah, dan profesional untuk menjawab kebutuhan maupun pertanyaan pelanggan secara efektif.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
             <i class="lni lni-handshake"></i>
            </div>
            <div class="service-content">
              <h4>Kemitraan Jangka Panjang</h4>
              <p>
              Kami membangun hubungan bisnis bukan hanya sebagai supplier, tetapi sebagai mitra strategis yang mendukung pertumbuhan dan efisiensi perusahaan pelanggan.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
             <i class="lni lni-cogs"></i>
            </div>
            <div class="service-content">
              <h4>Fleksibilitas & Solusi Custom</h4>
              <p>
              Kami memahami setiap perusahaan memiliki kebutuhan berbeda. Oleh karena itu, kami memberikan solusi yang fleksibel dan dapat disesuaikan dengan kebutuhan spesifik pelanggan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== service-area end ===== -->


  <!-- Start Pricing  Area -->
  <section id="pricing" class="pricing-area pricing-fourteen">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Our Product</h6>
              <h2 class="fw-bold">Produk</h2>
              <p>
               Kami menyediakan berbagai produk kebutuhan industri dengan kualitas terpercaya untuk mendukung kelancaran operasional bisnis para pelanggan.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen">
            <div class="table-head">
              <h6 class="title">Kain Majun Putih</h4>
                <p>Kain pembersih berkualitas tinggi yang dirancang untuk kebutuhan industri dan perawatan mesin. Memiliki daya serap yang baik sehingga efektif digunakan untuk membersihkan oli, minyak, debu, dan berbagai kotoran pada area kerja.</p>
            </div>

            <div class="light-rounded-buttons">
             <div class="header-image">
              <img src="{{ asset('landing/assets/images/blog/Majun_Putih.png') }}">
             </div>
            </div>

            <div class="price">
                  <h2 class="amount">
                    <span class="currency"></span>20.000<span class="duration">/Kg </span>
                  </h2>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen middle">
            <div class="table-head">
              <h6 class="title">Pallet Plastik</h4>
                <p>Pallet plastik yang kuat dan tahan lama untuk kebutuhan penyimpanan serta distribusi barang. Tahan terhadap kelembapan dan beban berat, sehingga cocok digunakan di gudang, logistik, dan berbagai kebutuhan industri.</p>
            </div>

            <div class="light-rounded-buttons">
             <div class="header-image">
              <img src="{{ asset('landing/assets/images/blog/Pallet-Plastik-.png') }}">
             </div>
            </div>

            <div class="table-content">
                <div class="price">
                  <h2 class="amount">
                    <span class="currency"></span>250.000<span class="duration">/Pcs </span>
                  </h2>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen">
            <div class="table-head">
              <h6 class="title">Pallet Kayu</h6>
                <p>Pallet kayu yang kuat dan andal untuk kebutuhan penyimpanan serta pengangkutan barang. Dirancang untuk menahan beban berat sehingga cocok digunakan dalam operasional gudang, logistik, dan distribusi industri.</p>
            </div>

            <div class="light-rounded-buttons">
             <div class="header-image">
              <img src="{{ asset('landing/assets/images/blog/Pallet-kayu-.png') }}">
             </div>
            </div>

                <div class="price">
                  <h2 class="amount">
                    <span class="currency"></span>150.000<span class="duration">/Pcs </span>
                  </h2>
                </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen">
            <div class="table-head">
              <h6 class="title">Pallet Kayu</h6>
                <p>Pallet kayu yang kuat dan andal untuk kebutuhan penyimpanan serta pengangkutan barang. Dirancang untuk menahan beban berat sehingga cocok digunakan dalam operasional gudang, logistik, dan distribusi industri.</p>
            </div>

            <div class="light-rounded-buttons">
             <div class="header-image">
              <img src="{{ asset('landing/assets/images/blog/Pallet-kayu-.png') }}">
             </div>
            </div>

                <div class="price">
                  <h2 class="amount">
                    <span class="currency"></span>150.000<span class="duration">/Pcs </span>
                  </h2>
                </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen">
            <div class="table-head">
              <h6 class="title">Pallet Kayu</h6>
                <p>Pallet kayu yang kuat dan andal untuk kebutuhan penyimpanan serta pengangkutan barang. Dirancang untuk menahan beban berat sehingga cocok digunakan dalam operasional gudang, logistik, dan distribusi industri.</p>
            </div>

            <div class="light-rounded-buttons">
             <div class="header-image">
              <img src="{{ asset('landing/assets/images/blog/Pallet-kayu-.png') }}">
             </div>
            </div>

                <div class="price">
                  <h2 class="amount">
                    <span class="currency"></span>150.000<span class="duration">/Pcs </span>
                  </h2>
                </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen">
            <div class="table-head">
              <h6 class="title">Pallet Kayu</h6>
                <p>Pallet kayu yang kuat dan andal untuk kebutuhan penyimpanan serta pengangkutan barang. Dirancang untuk menahan beban berat sehingga cocok digunakan dalam operasional gudang, logistik, dan distribusi industri.</p>
            </div>

            <div class="light-rounded-buttons">
             <div class="header-image">
              <img src="{{ asset('landing/assets/images/blog/Pallet-kayu-.png') }}">
             </div>
            </div>

                <div class="price">
                  <h2 class="amount">
                    <span class="currency"></span>150.000<span class="duration">/Pcs </span>
                  </h2>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ End Pricing  Area -->



  <!-- Start Cta Area -->
  <section id="call-action" class="call-action">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
          <div class="inner-content">
            <h2>Mitra Terpercaya untuk <br />Kebutuhan Industri Anda</h2>
            <p>
              PT Kusuma Putra Sukses hadir sebagai mitra yang dapat diandalkan dalam
              <br />
              penyediaan berbagai kebutuhan industri Dengan pengalaman dan komitmen
              terhadap kualitas, kami siap membantu perusahaan Anda dalam mendukung
              operasional bisnis secara efektif dan berkelanjutan.
            </p>
            </p>
            <div class="light-rounded-buttons">
              <a href="javascript:void(0)" class="btn primary-btn-outline">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Cta Area -->



  <!-- Start Latest News Area -->
  <div id="blog" class="latest-news-area section">

<div class="section-title-five">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content">
          <h6>Company Activities</h6>
          <h2 class="fw-bold">Galeri Ativitas</h2>
          <p>
          Dokumentasi berbagai aktivitas PT Kusuma Putra Sukses dalam menyediakan kebutuhan industri serta mendukung kelancaran operasional para klien kami.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">

    <!-- Gallery 1 -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="single-news">
        <div class="image">
          <a href="#">
            <img class="thumb" src="{{ asset('landing/assets/images/blog/Gallery3.jpg') }}" alt="Warehouse Operations">
          </a>
        </div>
        <div class="content-body">
          <h4 class="title">
            <a href="#">Proses Pemuatan Barang</a>
          </h4>
          <p style="text-align: justify; font-style: italic;">
           Kegiatan pemuatan barang ke dalam kendaraan pengiriman untuk memastikan produk siap didistribusikan kepada pelanggan.
          </p>
        </div>
      </div>
    </div>

    <!-- Gallery 2 -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="single-news">
        <div class="image">
          <a href="#">
            <img class="thumb" src="{{ asset('landing/assets/images/blog/Gallery3.jpg') }}" alt="Warehouse Operations">
          </a>
        </div>
        <div class="content-body">
          <h4 class="title">
            <a href="#">Penyimpanan Produk</a>
          </h4>
          <p style="text-align: justify; font-style: italic;">
          Proses penyimpanan berbagai kebutuhan industri dan perlengkapan lainnya secara rapi dan terorganisir di gudang.
          </p>
        </div>
      </div>
    </div>

    <!-- Gallery 3 -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="single-news">
        <div class="image">
          <a href="#">
            <img class="thumb" src="{{ asset('landing/assets/images/blog/Gallery3.jpg') }}" alt="Warehouse Operations">
          </a>
        </div>
        <div class="content-body">
          <h4 class="title">
            <a href="#">Operasional Gudang</a>
          </h4>
          <p style="text-align: justify; font-style: italic;">
          Aktivitas operasional gudang dalam mengelola persediaan barang serta menyiapkan produk industri sebelum proses distribusi kepada pelanggan
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <!-- End Latest News Area -->

  <!-- Start Brand Area -->
  <div id="clients" class="brand-area section">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Meet our Clients</h6>
              <h2 class="fw-bold">Klien dan Mitra Kami</h2>
              <p>
              Kami dipercaya oleh berbagai perusahaan dan mitra industri dalam menyediakan kebutuhan perlengkapan industri serta mendukung kelancaran operasional bisnis mereka.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
          <div class="clients-logos">
            <div class="single-image">
             <img src="{{ asset('landing/assets/images/blog/pokpand.jpg') }}" alt="Brand Logo Images" />
            </div>
            <div class="single-image">
             <img src="{{ asset('landing/assets/images/blog/Tong-Hong.png') }}" alt="Brand Logo Images" />
            </div>
            <div class="single-image">
             <img src="{{ asset('landing/assets/images/blog/mmp.jpg') }}" alt="Brand Logo Images" />
            </div>
            <div class="single-image">
             <img src="{{ asset('landing/assets/images/blog/GH.jpg') }}" alt="Brand Logo Images" />
            </div>
            <div class="single-image">
             <img src="{{ asset('landing/assets/images/blog/Polindo-Utama.jpg') }}" alt="Brand Logo Images" />
            </div>
            <div class="single-image">
            <img src="{{ asset('landing/assets/images/blog/MGI.png') }}" alt="Brand Logo Images" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Brand Area -->

  <!-- ========================= contact-section start ========================= -->
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="contact-item-wrapper">
            <div class="row">
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-phone"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Contact</h4>
                    <p>085693444573</p>
                    <p>Kps@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Address</h4>
                    <p>Jl.Otonom Cikupa Talagasari No.13</p>
                    <p>Indonesia</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-alarm-clock"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Schedule</h4>
                    <p>24 Jam / 7 Days</p>
                    <p>Jam Kerja: 10 AM - 5:30 PM</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="contact-form-wrapper">
            <div class="row">
              <div class="col-xl-10 col-lg-8 mx-auto">
                <div class="section-title text-center">
                  <span> Hubungi Kami </span>
                  <h2>
                    Solusi Kebutuhan Industri Anda
                  </h2>
                  <p>
                  Silakan hubungi PT Kusuma Putra Sukses untuk informasi produk,
                  pemesanan, maupun kerja sama bisnis.
                  </p>
                </div>
              </div>
            </div>
            <form action="#" class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="name" id="name" placeholder="Name" required />
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" id="email" placeholder="Email" required />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="phone" id="phone" placeholder="Phone" required />
                </div>
                <div class="col-md-6">
                  <input type="text" name="subject" id="subject" placeholder="Subject" required />
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <textarea name="message" id="message" placeholder="Type Message" rows="5"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="button text-center rounded-buttons">
                    <button type="button" onclick="sendWhatsApp()" class="btn primary-btn rounded-full">
                    Kirim Pesan
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SCRIPT WHATSAPP -->
  <script>
function sendWhatsApp(){

  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let phone = document.getElementById("phone").value;
  let subject = document.getElementById("subject").value;
  let message = document.getElementById("message").value;

  if(name=="" || email=="" || phone=="" || subject=="" || message==""){
      alert("Mohon lengkapi semua data terlebih dahulu");
      return;
  }

  let phoneNumber = "6285693444573";

  let text =
  "Halo PT Kusuma Putra Sukses,%0A%0A"+
  "Nama: "+name+"%0A"+
  "Email: "+email+"%0A"+
  "No. Telepon: "+phone+"%0A"+
  "Subjek: "+subject+"%0A"+
  "Pesan: "+message;

  let url = "https://wa.me/" + phoneNumber + "?text=" + text;

  window.open(url,'_blank');
}
</script>
  <!-- ========================= contact-section end ========================= -->

  <!-- ========================= map-section end ========================= -->
  <section class="map-section map-style-9">
    <div class="map-container">
      <object style="border:0; height: 500px; width: 100%;"
        data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object>
    </div>
    </div>
  </section>
  <!-- ========================= map-section end ========================= -->

  <!-- Start Footer Area -->
 
  <!--/ End Footer Area -->

	

  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== js ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tiny-slider.js"></script>

  <script>

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

  </script>

@endsection
