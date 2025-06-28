<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h4>Detail Transaksi</h4>
                <?php if($this->session->userdata('id_role') == 2) : ?>
                <?php if($transaksi['status']==1) : ?>
                <p class="mb-0">Pesanan anda sedang diproses, Mohon Untuk Menunggu Konfirmasi dari Admin.</p>
                <?php elseif(($transaksi['status']==2)) : ?>
                <p class="mb-0">Pesanan anda Telah Diizinkan Oleh Pihak Admin, Silahkan Klik tombol Whatsapp di bagian Form 'Hubungi' untuk melanjutkan Transaksi Berikutnya.</p>
                <?php elseif(($transaksi['status']==3)) : ?>
                <p class="mb-0">Pesanan anda telah sampai tujuan, Terima kasih telah membeli dan menggunakan produk kami di Stokis HNI-HPAI.Ditunggu transaksi berikutnya.</p>
                <?php endif; ?>
                <?php endif; ?>
            </div>

            <div class="project-info-box">
                <p><b>Status :</b> 
            <?php if($transaksi['status']==2) : ?>
              <a class="badge text-bg-success">Diterima</a>
            <?php elseif(($transaksi['status']==1)) : ?>
                <a class="badge text-bg-warning">Diproses</a>
            <?php elseif(($transaksi['status']==3)) : ?>
                <a class="badge text-bg-primary">Selesai</a>
            <?php endif; ?>
                </p>
                <?php if($this->session->userdata('id_role') == 2) : ?>
                <?php if($transaksi['status']==2) : ?>
                <p><b>Hubungi :</b>
                <?php
                $url = 'https://api.whatsapp.com/send?phone=6285811367152&text=Form%20Data%20Pesanan%20Saya%20%3A%0A%0AID%20Member%20%3A%20' . urlencode($transaksi['id_member']) . '%0ANama%20%3A%20' . urlencode($transaksi['nama']) . '%0AE-mail%20%3A%20' . urlencode($transaksi['email']) . '%0ANo%20Telepon%20%3A%20' . urlencode($transaksi['no_hp']) . '%0AAlamat%20%3A%20' . urlencode($transaksi['alamat']) . '%0AKategori%20%3A%20' . urlencode($transaksi['kategori']) . '%0AProduk%20%3A%20' . urlencode($transaksi['produk']) . '%0AKuantitas%20%3A%20' . urlencode($transaksi['kuantitas']) . '%0AHarga%20%3A%20Rp.' . urlencode($transaksi['harga']) . '%0ATotal%20Transaksi%20%3A%20Rp.' . urlencode($transaksi['total']) . '%0AKeterangan%20%3A%20' . urlencode($transaksi['keterangan']) . '%0ATanggal%20Transaksi%20%3A%20' . urlencode($transaksi['tanggal_transaksi']) . '%0A%0A%23Stokis%20HNI-HPAI%0A%23Halal%20is%20my%20way%0A%23Produk%20Halal%20Tanggung%20Jawab%20Bersama';
                ?>
                <a href="<?php echo $url; ?>" target="_blank" class="badge text-bg-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg> Whatsapp</a>
                <?php endif; ?>
                <?php endif; ?>
                <p><b>ID Member :</b> <?= $transaksi['id_member']; ?></p>
                <p><b>Nama :</b><?= $transaksi['nama']; ?></p>
                <p><b>E-mail :</b> <?= $transaksi['email']; ?></p>
                <p><b>No Telepon :</b> <?= $transaksi['no_hp']; ?></p>
                <p><b>Alamat :</b> <?= $transaksi['alamat']; ?></p>
                <p><b>kuantitas :</b> <?= $transaksi['kuantitas']; ?></p>
                <p><b>Keterangan :</b> <?= $transaksi['keterangan']; ?></p>
                <p><b>Harga :</b>Rp.<?= $transaksi['harga']; ?></p>
                <p><b>Total Transaksi :</b>Rp.<?= $transaksi['total']; ?></p>
                <p><b>Tanggal Transaksi :</b> <?= $transaksi['tanggal_transaksi']; ?></p>
                <div><a href="<?= base_url('transaksi'); ?>" class="btn btn-danger">Kembali</a></div>
            </div>
        </div>

        <div class="col-md-7">
        <img src="<?= base_url('assets/foto/'). $transaksi['foto']; ?>" width="400px" height="400px" alt="Foto tidak ditemukan" class="rounded">
            <div class="project-info-box">
                <p><b>Kategori :</b> <?= $transaksi['kategori']; ?></p>
                <p><b>Produk :</b> <?= $transaksi['produk']; ?></p>
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