<div class="container">
<legend>Data Transaksi</legend>
<a class="btn btn-success" href="<?= base_url('transaksi/export_excel'); ?>" target="_blank" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z"/>
</svg> Export.xls</a>
<?php if( $this->session->flashdata('flash') ) : ?>
    <div class="alert alert-success alert-dismissible fade show mt-2 mb-2" role="alert">
        Data transaksi <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php if( $this->session->flashdata('error') ) : ?>
    <div class="alert alert-danger alert-dismissible fade show mt-2 mb-2" role="alert">
        Data transaksi <strong>Gagal Ditambahkan </strong> <?= $this->session->flashdata('error'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
    <form action="" method="post" class="d-flex mb-2 mt-2" role="search">
        <input class="form-control" type="search" placeholder="Cari kata kunci..." aria-label="search" name="keyword" style="width: 500px;">
        <button class="btn btn-outline-success" value="Cari" type="submit" name="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button></input>
    </form>
    <div class="card-body table-responsive p-0">
    <table class="table" style="margin-bottom: 300px;">
        <thead>
            <tr align="center">
              <th scope="col">ID</th>
              <th scope="col">ID Member</th>
              <th scope="col">Nama</th>
              <th scope="col">Kategori</th>
              <th scope="col">Produk</th>
              <th scope="col">Kuantitas</th>
              <th scope="col">Status</th>
            <?php if($this->session->userdata('id_role') == 2) : ?>
              <th scope="col">Hubungi</th>
              <?php endif; ?>
              <th colspan="2" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if( empty($transaksi) ) :?>
                <tr>
                    <td colspan="2">
                      <div class="alert alert-danger" role="alert">
                            Data Transaksi Tidak Ditemukan
                      </div>
                    </td>
                </tr>
            <?php endif; ?>
            <?php $i=1; ?>
            <?php foreach( $transaksi as $tra ) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $tra['id_member']; ?></td>
                    <td><?= $tra['nama']; ?></td>
                    <td><?= $tra['kategori']; ?></td>
                    <td><?= $tra['produk']; ?></td>
                    <td><?= $tra['kuantitas']; ?></td>
                    <td align="center">
                    <?php if($tra['status']==2) : ?>
                        <a class="badge text-bg-success">Diterima</a>
                    <?php elseif(($tra['status']==1)) : ?>
                        <a class="badge text-bg-warning">Diproses</a>
                    <?php elseif(($tra['status']==3)) : ?>
                        <a class="badge text-bg-primary">Selesai</a>
                    <?php endif; ?>
                    </td>
                    <?php if($this->session->userdata('id_role') == 2) : ?>
                    <td align="center">
                    <?php if($tra['status']==2) : ?>
                        <?php
                        $url = 'https://api.whatsapp.com/send?phone=6285811367152&text=Form%20Data%20Pesanan%20Saya%20%3A%0A%0AID%20Member%20%3A%20' . urlencode($tra['id_member']) . '%0ANama%20%3A%20' . urlencode($tra['nama']) . '%0AE-mail%20%3A%20' . urlencode($tra['email']) . '%0ANo%20Telepon%20%3A%20' . urlencode($tra['no_hp']) . '%0AAlamat%20%3A%20' . urlencode($tra['alamat']) . '%0AKategori%20%3A%20' . urlencode($tra['kategori']) . '%0AProduk%20%3A%20' . urlencode($tra['produk']) . '%0AKuantitas%20%3A%20' . urlencode($tra['kuantitas']) . '%0AHarga%20%3A%20Rp.' . urlencode($tra['harga']) . '%0ATotal%20Transaksi%20%3A%20Rp.' . urlencode($tra['total']) . '%0AKeterangan%20%3A%20' . urlencode($tra['keterangan']) . '%0ATanggal%20Transaksi%20%3A%20' . urlencode($tra['tanggal_transaksi']) . '%0A%0A%23Stokis%20HNI-HPAI%0A%23Halal%20is%20my%20way%0A%23Produk%20Halal%20Tanggung%20Jawab%20Bersama';
                        ?>
                        <a href="<?php echo $url; ?>" target="_blank" class="badge text-bg-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg> Whatsapp</a>
                    <?php endif; ?>
                    <?php endif; ?>
                    <td align="center">
                    <a href="<?= base_url('transaksi/detail/'); ?><?= $tra['id']; ?>" class="badge text-bg-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                        <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                        </svg> Detail</a>
                        <?php if($this->session->userdata('id_role') == 2) : ?>
                    <a href="<?= base_url('transaksi/ubah/'); ?><?= $tra['id']; ?>" class="badge text-bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg> Ubah</a>
                        <?php endif; ?>
                        <?php if($this->session->userdata('id_role') == 1) : ?>
                    <a href="<?= base_url('transaksi/ubah/'); ?><?= $tra['id']; ?>" class="badge text-bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg> Konfirmasi</a>
                        <?php endif; ?>
                    <a type="button" class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $tra['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg> Hapus</a>
                        <div class="modal hide fade" id="exampleModal-<?= $tra['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi untuk Menghapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus Transaksi <strong><?= $tra['nama']; ?></strong> ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
                                    <a href="<?= base_url('transaksi/hapus/'); ?><?= $tra['id']; ?>" class="btn btn-danger">Hapus</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>