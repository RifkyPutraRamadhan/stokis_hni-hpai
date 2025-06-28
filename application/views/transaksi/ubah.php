<?php 
$month = date('m');
$day = date('d');
$year = date('Y');
$today = $year . '-' . $month . '-' . $day;
?>

<div class="container">
<form action="" method="post"  style="margin-bottom: 300px;">
<?php if($this->session->userdata('id_role') == 2) : ?>
    <legend>Ubah Data Transaksi</legend>
    <?php endif; ?>
<?php if($this->session->userdata('id_role') == 1) : ?>
    <legend>Konfirmasi Data Transaksi</legend>
    <?php endif; ?>
    <input type="hidden" name="id" value="<?= $transaksi['id']; ?>"></input>
    <?php if($this->session->userdata('id_role') == 2) : ?>
    <div class="mb-3">
        <label for="formFile" class="form-label">ID Member</label>
        <input type="text" class="form-control" id="id_member" name="id_member" value="<?= $transaksi['id_member']; ?>" style="width: 500px" required>
        <div class="form-text text-danger"><?= form_error('id_member'); ?></div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $transaksi['email']; ?>" style="width: 500px;" readonly>
        <div class="form-text text-danger"><?= form_error('email'); ?></div>
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No Handphone</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $transaksi['no_hp']; ?>" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('no_hp'); ?></div>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $transaksi['nama']; ?>" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('nama'); ?></div>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" value="<?= $transaksi['alamat']; ?>" style="width: 500px;"><?= $transaksi['alamat']; ?></textarea>
        <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" id="kategori" name="kategori" style="width: 500px;" onChange="document.getElementById('form_id').submit();">
        <option selected value="<?= $transaksi['id_kategori']; ?>"><?= $transaksi['kategori']; ?></option>
        <?php foreach( $kategori as $kat ) : ?>
            <option disabled value="<?= $kat['id']; ?>"><?= $kat['kategori']; ?></option>
        <?php endforeach; ?>
        </select>
        <div class="form-text text-danger"><?= form_error('kategori'); ?></div>
    </div>
    <div class="mb-3">
        <label for="produk" class="form-label">Produk</label>
        <input class="form-control" id="produk" name="produk" value="<?= $transaksi['produk']; ?>" style="width: 500px;" readonly></input>
        <div class="form-text text-danger"><?= form_error('produk'); ?></div>
    </div>
    <div class="mb-3">
        <label for="kuantitas" class="form-label">Kuantitas</label>
        <input type="number" class="form-control" id="kuantitas" name="kuantitas" min="1" max="100" value="<?= $transaksi['kuantitas']; ?>" style="width: 500px;" readonly>
        <div class="form-text text-danger"><?= form_error('kuantitas'); ?></div>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" min="1" max="100" value="<?= $transaksi['harga']; ?>" style="width: 500px;" readonly>
        <div class="form-text text-danger"><?= form_error('harga'); ?></div>
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total Transaksi</label>
        <input type="number" class="form-control" id="total" name="total" min="1" max="100" value="<?= $transaksi['total']; ?>" style="width: 500px;" readonly>
        <div class="form-text text-danger"><?= form_error('total'); ?></div>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" value="<?= $transaksi['keterangan']; ?>" style="width: 500px;"><?= $transaksi['keterangan']; ?></textarea>
        <div class="form-text text-danger"><?= form_error('keterangan'); ?></div>
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" id="status" name="status" value="1" style="width: 500px;">
        </div>

    <div class="mb-3">
    <?php endif; ?>
    <?php if($this->session->userdata('id_role') == 1) : ?>
    <input type="hidden" class="form-control" id="id_member" name="id_member" value="<?= $transaksi['id_member']; ?>"></input>
    <input type="hidden" class="form-control" id="email" name="email" value="<?= $transaksi['email']; ?>"></input>
    <input type="hidden" class="form-control" id="no_hp" name="no_hp" value="<?= $transaksi['no_hp']; ?>"></input>
    <input type="hidden" class="form-control" id="nama" name="nama" value="<?= $transaksi['nama']; ?>"></input>
    <input type="hidden" class="form-control" id="alamat" name="alamat" value="<?= $transaksi['alamat']; ?>"></input>
    <input type="hidden" class="form-control" id="kategori" name="kategori" value="<?= $transaksi['id_kategori']; ?>"></input>
    <input type="hidden" class="form-control" id="produk" name="produk" value="<?= $transaksi['produk']; ?>"></input>
    <input type="hidden" class="form-control" id="kuantitas" name="kuantitas" min="1" max="100" value="<?= $transaksi['kuantitas']; ?>"></input>
    <input type="hidden" class="form-control" id="harga" name="harga" min="1" max="100" value="<?= $transaksi['harga']; ?>"></input>
    <input type="hidden" class="form-control" id="total" name="total" min="1" max="100" value="<?= $transaksi['total']; ?>"></input>
    <input type="hidden" class="form-control" id="keterangan" name="keterangan" value="<?= $transaksi['keterangan']; ?>"></input>
    <input type="hidden" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="<?= $transaksi['tanggal_transaksi']; ?>"></input>
    
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" style="width: 500px;" onChange="document.getElementById('form_id').submit();">
        <option selected value="<?= $transaksi['status']; ?>">Pilih Status</option>
            <option value="1" >Diproses</option>
            <option value="2" >Diterima</option>
            <option value="3" >Selesai</option>
        </select>
        <div class="form-text text-danger"><?= form_error('status'); ?></div>
    </div>
    <?php endif; ?>
    <?php if($this->session->userdata('id_role') == 2) : ?>
        <input type="hidden" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="<?php echo $today; ?>" style="width: 500px;"></input>
    <?php endif; ?>
    <a href="<?= base_url("transaksi"); ?>" type="submit" class="btn btn-danger">Kembali</a>
    <input type="submit" value="Ubah" class="btn btn-primary"></input>
  </form>
</div>