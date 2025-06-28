<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h4>Detail Barang</h4>
                <p class="mb-0"><?= $barang['keterangan']; ?></p>
            </div>

            <div class="project-info-box">
                <p><b>Kode :</b> <?= $barang['kode']; ?></p>
                <p><b>Tanggal Proses :</b> <?= $barang['tanggal_proses']; ?></p>
                <p><b>Dimensi Kualitas :</b> <?= $barang['dimensi_kualitas']; ?></p>
                <p><b>Berat Bersih :</b> <?= $barang['berat_bersih']; ?></p>
                <p><b>stok :</b> <?= $barang['stok']; ?></p>
                <p class="mb-3"><b>Harga :</b> Rp.<?= $barang['harga']; ?></p>
                <div><a href="<?= base_url('barang'); ?>" class="btn btn-danger">Kembali</a></div>
            </div>
        </div>

        <div class="col-md-7">
        <img src="<?= base_url('assets/foto/'). $barang['foto']; ?>" width="400px" height="400px" alt="Foto tidak ditemukan" class="rounded">
            <div class="project-info-box">
                <p><b>Kategori :</b> <?= $barang['kategori']; ?></p>
                <p><b>Produk :</b> <?= $barang['produk']; ?></p>
            </div>
        </div>
    </div>
</div>

<style>
.project {
  margin: 15px 0;
}

.no-gutter .project {
  margin: 0 !important;
  padding: 0 !important;
}

.has-spacer {
  margin-left: 30px;
  margin-right: 30px;
  margin-bottom: 30px;
}

.has-spacer-extra-space {
  margin-left: 30px;
  margin-right: 30px;
  margin-bottom: 30px;
}

.has-side-spacer {
  margin-left: 30px;
  margin-right: 30px;
}

.project-title {
  font-size: 1.25rem;
}

.project-skill {
  font-size: 0.9rem;
  font-weight: 400;
  letter-spacing: 0.06rem;
}

.project-info-box {
  margin: 15px 0;
  background-color: #fff;
  padding: 30px 40px;
  border-radius: 5px;
}

.project-info-box p {
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #d5dadb;
}

.project-info-box p:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
}

.rounded {
    border-radius: 5px !important;
}
.btn-xs.btn-icon {
    width: 34px;
    height: 34px;
    max-width: 34px !important;
    max-height: 34px !important;
    font-size: 10px;
    line-height: 34px;
}

/* dribble button */
.btn-dribbble, .btn-dribbble:active, .btn-dribbble:focus {
  color: #fff !important;
  background: #ec5f94;
  border: 2px solid #ec5f94;
}

.btn-dribbble:hover {
  color: #fff !important;
  background: #b4446e;
  border: 2px solid #b4446e;
}

.btn-dribbble-link, .btn-dribbble-link:active, .btn-dribbble-link:focus {
  color: #ec5f94 !important;
  background: transparent;
  border: none;
}

.btn-dribbble-link:hover {
  color: #b4446e !important;
}

.btn-outline-dribbble, .btn-outline-dribbble:active, .btn-outline-dribbble:focus {
  color: #ec5f94 !important;
  background: transparent;
  border: 2px solid #ec5f94;
}

.btn-outline-dribbble:hover {
  color: #fff !important;
  background: #ec5f94;
  border: 2px solid #ec5f94;
}

.btn-xs.btn-icon span, .btn-xs.btn-icon i {
    line-height: 34px;
}
.btn-icon.btn-circle span, .btn-icon.btn-circle i {
    margin-top: -1px;
    margin-right: -1px;
}
.btn-icon i {
    margin-top: -1px;
}
.btn-icon span, .btn-icon i {
    display: block;
    line-height: 50px;
}
a.btn, a.btn-social {
    display: inline-block;
}
.mr-5 {
    margin-right: 5px !important;
}
.mb-0 {
    margin-bottom: 0 !important;
}
.btn-circle {
    border-radius: 50% !important;
}
.project-info-box p {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #d5dadb;
}
p {
    font-family: "Barlow", sans-serif !important;
    font-weight: 300;
    font-size: 1rem;
    color: #686c6d;
    letter-spacing: 0.03rem;
    margin-bottom: 10px;
}
b, strong {
    font-weight: 700 !important;
}
</style>