<div class="container">
  <form action="" method="post" style="margin-bottom: 300px;">
    <legend>Ubah Data Kategori</legend>
    <div class="mb-3">
        <input type="hidden" name="id" value="<?= $kategori['id'];?>">
        <label for="kategori" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" id="kategori" name="kategori" style="width: 300px;" value = "<?= $kategori['kategori'];?>">
        <div class="form-text text-danger"><?= form_error('kategori'); ?></div>
    </div>
    <a href="<?= base_url("kategori"); ?>" type="submit" class="btn btn-danger">Kembali</a>
    <input type="submit" name="ubah" value="Ubah" class="btn btn-primary"></input>
  </form>
</div>