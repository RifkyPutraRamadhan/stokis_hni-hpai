<!doctype hml>
<html lang="en">
          <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="icon" href="https://ifoxsoft.com/wp-content/uploads/2022/11/Logo-HNI-PNG-%E2%80%93-IfoxSoft.Com_.webp" />
              <title><?= $title?></title>
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
             <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
            </head>
          <body>
          <div class="">
          <nav class="navbar navbar-expand-lg mb-4" style="background-color: #5e982a;">
  <img src="https://ifoxsoft.com/wp-content/uploads/2022/11/Logo-HNI-PNG-%E2%80%93-IfoxSoft.Com_.webp" width="60px">
  <a class="navbar-brand text-white" href="<?= base_url('dashboard'); ?>">STOKIS HNI-HPAI</a>
  <button class="navbar-toggler" type="button" id="navbarDropdown" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-expanded="false" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav container">
    <?php if($this->session->userdata('id_role') == 1) : ?>
      <a class="nav-item nav-link text-white" href="<?= base_url("kategori"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
      <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
      <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
    </svg> Data Kategori</a>
    <a class="nav-item nav-link text-white" href="<?= base_url("barang"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
      <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
    </svg> Data Barang</a>
    <?php endif; ?>
    <?php if($this->session->userdata('id_role') == 2) : ?>
      <a class="nav-item nav-link text-white" href="<?= base_url("barang"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg> Order Barang</a>
    <?php endif; ?>
      <a class="nav-item nav-link text-white" href="<?= base_url("profil"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
      </svg> Akun Saya</a>
      <a class="nav-item nav-link text-white" href="#" id="mode-gelap"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
      </svg> Mode Gelap</a>
      <a class="nav-item nav-link text-danger" href="<?= base_url("auth/logout"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
    </svg> Logout</a>
    </div>
  </div>
</nav>

<style>
body{
  background-color: #ffffff;
  color: #333333;
}

body.mode-gelap table{
  background-color: #eeeeee; 
  color: #333333;
}

body.mode-gelap{
  background-color: #333333; 
  color: #ffffff; 
}

nav {
  background-color: #eeeeee; 
  color: #333333;
}

nav.mode-gelap {
  background-color: #222222; 
  color: #ffffff; 
}

nav ul li a#mode-gelap {
  background-color: #222222; 
  color: #ffffff; 
}

nav.mode-gelap ul li a#mode-gelap {
  background-color: #eeeeee; 
  color: #333333
}

h1, h2, h3, h4, h5, h6, span {
  color: #ffffff;
}

@media (prefers-color-scheme: light) {
  h1, h2, h3, h4, h5, h6, span {
    color: #000000;
  }
}

p {
  color: #ffffff;
}

@media (prefers-color-scheme: light) {
p {
    color: #000000;
  }
}
</style>

<script>
var modeGelapToggle = document.getElementById("mode-gelap");
var modeGelap = localStorage.getItem("mode-gelap");

if (localStorage.getItem('mode-gelap') === 'aktif') {
  document.body.classList.add('mode-gelap');
}

var modeGelapButton = document.getElementById('mode-gelap');
modeGelapButton.addEventListener('click', function() {
  document.body.classList.toggle('mode-gelap');

  if (document.body.classList.contains('mode-gelap')) {
    localStorage.setItem('mode-gelap', 'aktif');
  } else {
    localStorage.setItem('mode-gelap', 'tidak aktif');
  }
});
</script>