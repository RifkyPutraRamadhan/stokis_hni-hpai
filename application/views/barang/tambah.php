<?php 
$month = date('m');
$day = date('d');
$year = date('Y');
$today = $year . '-' . $month . '-' . $day;
?>

<div class="container">
  <?= form_open_multipart('barang/tambah');?>
    <legend>Tambah Data Barang</legend>
    <div class="mb-3">
        <label for="formFile" class="form-label">Foto</label>
        <input type="file" class="form-control" id="formFile" name="image" accept="image/*" style="width: 500px;" required>
        <div class="form-text text-danger"><?= form_error('image'); ?></div>
    </div>
    <div class="mb-3">
        <label for="kode" class="form-label">Kode</label>
        <input type="text" class="form-control" id="kode" name="kode" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('kode'); ?></div>
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" id="kategori" name="kategori" style="width: 500px;" onChange="document.getElementById('form_id').submit();">
        <option selected>Pilih Kategori</option>
        <?php foreach( $kategori as $kat ) : ?>
            <option value="<?= $kat['id']; ?>"><?= $kat['kategori']; ?></option>
        <?php endforeach; ?>
        </select>
        <div class="form-text text-danger"><?= form_error('kategori'); ?></div>
    </div>
    <div class="mb-3">
        <label for="produk" class="form-label">Produk</label>
        <input type="text" class="form-control" id="produk" name="produk" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('produk'); ?></div>
    </div>
    <div class="mb-3">
        <label for="dimensi_kualitas" class="form-label">Dimensi Kualitas</label>
        <input type="text" class="form-control" id="dimensi_kualitas" name="dimensi_kualitas" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('dimensi_kualitas'); ?></div>
    </div>
    <div class="mb-3">
        <label for="berat_bersih" class="form-label">Berat Bersih</label>
        <input type="text" class="form-control" id="berat_bersih" name="berat_bersih" style="width: 500px;">
        <div class="form-text text-danger"><?= form_error('berat_bersih'); ?></div>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" style="width: 500px;"></input>
        <div class="form-text text-danger"><?= form_error('stok'); ?></div>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" style="width: 500px;"></input>
        <div class="form-text text-danger"><?= form_error('harga'); ?></div>
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" style="width: 500px;"></textarea>
        <div class="form-text text-danger"><?= form_error('keterangan'); ?></div>
    </div>
        <input type="hidden" class="form-control" id="tanggal_proses" name="tanggal_proses" style="width: 500px;" value="<?php echo $today; ?>"></input>
    <a href="<?= base_url("barang"); ?>" type="submit" class="btn btn-danger">Kembali</a>
    <input type="submit" value="Tambah" class="btn btn-primary"></input>
  </form>
</div>

<style>
input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background: #084cdf;
  padding: 10px 20px;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}
</style>