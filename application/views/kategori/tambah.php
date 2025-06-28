<div class="container">
  <form action="" method="post" style="margin-bottom: 300px;">
    <legend>Tambah Data Kategori</legend>
    <div class="mb-3">
        <label for="kategori" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" id="kategori" name="kategori" style="width: 300px;">
        <div class="form-text text-danger"><?= form_error('kategori'); ?></div>
    </div>
    <a href="<?= base_url("kategori"); ?>" type="submit" class="btn btn-danger">Kembali</a>
    <input type="submit" value="Tambah" class="btn btn-primary"></input>
  </form>
</div>