<body>
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat Datang <strong><?php echo $this->session->userdata('username') ?></strong></h1>
      <h2>Produk Halal Tanggung Jawab Bersama</h2>
      <?php if($this->session->userdata('id_role') == 1) : ?>
      <a href="<?= base_url("transaksi"); ?>" class="btn btn-dark btn-lg btn-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
        <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
      </svg> Periksa Data Hari ini</a>
      <?php endif; ?>
      <?php if($this->session->userdata('id_role') == 2) : ?>
      <a href="<?= base_url("transaksi"); ?>" class="btn btn-dark btn-lg btn-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
        <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
      </svg> Cek Riwayat Transaksi Anda</a>
      <?php endif; ?>
    </div>
  </section>

  <main id="main">
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <legend>Apa Yang Kita Lakukan ?</legend>
          <div>Halal Is My Way</div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div><img src="<?= base_url('assets/system-image/brosur.jpg') ?>" width="50px"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="<?= base_url('assets/pdf/brosur.pdf'); ?>" target="_blank">Brosur</a></h4>
              <p>Buka sekarang untuk melihat update produk terbaru</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div><img src="<?= base_url('assets/system-image/katalog.jpg') ?>" width="50px"><i class="bx bx-file"></i></div>
              <h4><a href="<?= base_url('assets/pdf/katalog.pdf'); ?>" target="_blank">Katalog</a></h4>
              <p>&nbsp&nbsp&nbsp  Lihat produk yang anda inginkan secara detail  &nbsp&nbsp&nbsp&nbsp&nbsp</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div><img src="<?= base_url('assets/system-image/panduan-sukses.jpg') ?>" width="50px"><i class="bx bx-tachometer"></i></div>
              <h4><a href="<?= base_url('assets/pdf/panduan-sukses.pdf'); ?>" target="_blank">Panduan Sukses</a></h4>
              <p>Sukses-kan Bisnis Anda dengan menjadi pemimpin kelas dunia yang halal</p>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>

<style>
#hero {
  width: 100%;
  height: 60vh;
  background: url("https://1.bp.blogspot.com/-QqOcvjAeYh0/YPUythv9boI/AAAAAAAAFiI/gDCJJ5KKMZQYsho-0D6PXvsNXhoYIJtwgCLcBGAsYHQ/s600/produk-hni-hpai.jpg") center center;
  background-size: cover;
  position: relative;
  margin-top: 70px;
  padding: 0;
}


#hero:before {
  content: "";
  background: rgba(56, 64, 70, 0.7);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  z-index: 2;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}

#hero h1 span {
  border-bottom: 4px solid #3498db;
}

#hero h2 {
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: 30px;
  font-size: 24px;
}

#hero .btn-get-started {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-size: 13px;
  letter-spacing: 2px;
  display: inline-block;
  padding: 12px 28px;
  border-radius: 4px;
  transition: ease-in-out 0.3s;
  color: #fff;
  background: #3498db;
  text-transform: uppercase;
}

#hero .btn-get-started:hover {
  background: #4ea5e0;
}

@media (max-width: 992px) {
  #hero {
    height: calc(100vh - 70px);
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 30px;
    line-height: 36px;
  }

  #hero legend {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

section {
  padding: 60px 0;
}

.section-bg {
  background-color: #f7fbfe;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title legend {
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title legend::before {
  content: "";
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-title legend::after {
  content: "";
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #5e982a;
  bottom: 0;
  left: calc(50% - 20px);
}

.section-title p {
  margin-bottom: 0;
}

.what-we-do .icon-box {
  text-align: center;
  padding: 30px 20px;
  transition: all ease-in-out 0.3s;
  background: #fff;
}

.what-we-do .icon-box .icon {
  margin: 0 auto;
  width: 64px;
  height: 64px;
  background: #eaf4fb;
  border-radius: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  transition: ease-in-out 0.3s;
}

.what-we-do .icon-box .icon i {
  color: #3498db;
  font-size: 28px;
}

.what-we-do .icon-box h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 24px;
}

.what-we-do .icon-box h4 a {
  color: #384046;
  transition: ease-in-out 0.3s;
}

.what-we-do .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.what-we-do .icon-box:hover {
  border-color: #fff;
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
}

.what-we-do .icon-box:hover h4 a,
.what-we-do .icon-box:hover .icon i {
  color: #3498db;
}
    </style>