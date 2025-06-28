<?php 
$month = date('m');
$day = date('d');
$year = date('Y');
$today = $year . '-' . $month . '-' . $day;
?>

<div class="container">
<form action="" method="post">
    <legend>Tambah Data Transaksi</legend>
    <input type="hidden" class="form-control" id="foto" name="foto" value="<?= $barang['foto']; ?>"></input>
    <div class="mb-3">
        <img src="<?= base_url('assets/foto/') . $barang['foto']; ?>" id="formFile" class="img-thumbnail" width="225px" height="330px" alt="">
    </div>
    <div class="mb-3">
        <label for="id_member" class="form-label">ID Member</label>
        <input type="text" class="form-control" id="id_member" name="id_member" style="width: 500px" required>
        <div class="form-text text-danger"><?= form_error('id_member'); ?></div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" style="width: 500px;" value="<?php echo $this->session->userdata('email') ?>" readonly>
        <div class="form-text text-danger"><?= form_error('email'); ?></div>
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No Handphone</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('no_hp'); ?></div>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('nama'); ?></div>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" style="width: 500px;"></textarea>
        <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" id="kategori" name="kategori" style="width: 500px;" onChange="document.getElementById('form_id').submit();">
        <option selected value="<?= $barang['id_kategori']; ?>"><?= $barang['kategori']; ?></option>
        <?php foreach( $kategori as $kat ) : ?>
            <option disabled value="<?= $kat['id']; ?>"><?= $kat['kategori']; ?></option>
        <?php endforeach; ?>
        </select>
        <div class="form-text text-danger"><?= form_error('kategori'); ?></div>
    </div>
    <div class="mb-3">
        <label for="produk" class="form-label">Produk</label>
        <input type="text" class="form-control" id="produk" name="produk" style="width: 500px;" value="<?= $barang['produk']; ?>" readonly>
        <div class="form-text text-danger"><?= form_error('produk'); ?></div>
    </div>
    <div class="mb-3">
        <label for="produk" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" style="width: 500px;" value="<?= $barang['harga']; ?>" readonly>
        <div class="form-text text-danger"><?= form_error('harga'); ?></div>
    </div>
    <div class="mb-3">
        <label for="kuantitas" class="form-label">Kuantitas</label>
        <input type="number" class="form-control" id="kuantitas" name="kuantitas" min="1" max="100" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('kuantitas'); ?></div>
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" id="status" name="status" value="1" style="width: 500px;">
        <input type="hidden" class="form-control" id="total" name="total" value="total" style="width: 500px;">
        </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" style="width: 500px;"></textarea>
        <div class="form-text text-danger"><?= form_error('keterangan'); ?></div>
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="<?php echo $today; ?>"></input>
    <a href="<?= base_url("barang"); ?>" type="submit" class="btn btn-danger">Kembali</a>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Tambah</button>
    <div class="modal hide fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Transaksi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Pastikan data anda sudah benar terisi dengan tepat dan lengkap !
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                                    <input type="submit" value="Ya" name="hitung" class="btn btn-dark"></input>
                                </div>
                                </div>
                            </div>
                        </div>
  </form>
</div>

<script>
$(document).ready(function() {
  $('#kuantitas, #harga').keyup(function() {
    var kuantitas = parseFloat($('#kuantitas').val()) || 0;
    var harga = parseFloat($('#harga').val()) || 0;
    var total = kuantitas * harga;
    $('#total').val(total.toFixed(2));
  });
});
</script>