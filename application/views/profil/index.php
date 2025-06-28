<div class="container">
<?= form_open_multipart();?>
<legend>Data Profil Pengguna</legend>
	<?php if( $this->session->flashdata('flash') ) : ?>
		<div class="alert alert-success alert-dismissible fade show mt-2 mb-2" role="alert">
		<strong><?= $this->session->flashdata('flash'); ?><a class="text-success" href="<?= base_url("auth/logout"); ?>">Login</a></strong>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>
<?php if( $this->session->flashdata('error') ) : ?>
    <div class="alert alert-danger alert-dismissible fade show mt-2 mb-2" role="alert">
        Perubahan <strong>Gagal Disimpan!</strong> <?= $this->session->flashdata('error'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
	<input type="hidden" name="id" value="<?= $this->session->userdata('id') ?>"></input>
		<div class="main-body" style="margin-bottom: 70px;">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body mb-2">
							<div class="d-flex flex-column align-items-center text-center">
							<img src="<?= base_url('assets/foto/') ?><?= $this->session->userdata('foto') ?>" alt="Unggah Foto" class="rounded mx-auto d-block " width="114px" heigth="114px">
								<div class="mt-3">
									<h4><?= $this->session->userdata('username') ?></h4>
                                    <?php if($this->session->userdata('id_role') == 1) : ?>
									<p class="text-secondary mb-1">Admin</p>
                                    <?php endif; ?>
                                    <?php if($this->session->userdata('id_role') == 2) : ?>
									<p class="text-secondary mb-1">Tamu</p>
                                    <?php endif; ?>
                                    <input type="file" class="form-control" id="formFile" name="image" accept="image/*" size="20" required>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8" style="margin-bottom: 70px;">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">E-mail</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="email" name="email" class="form-control" value="<?= $this->session->userdata('email') ?>" readonly>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Username</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="username" name="username" class="form-control" value="<?= $this->session->userdata('username') ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Password</h6>
								</div>
								<div class="col-sm-9 text-secondary mb-4">
									<input type="password" id="password" name="password" class="form-password form-control" value="<?= $this->session->userdata('password') ?>">
                                    <input type="checkbox" class="form-checkbox"> Tampilkan Kata sandi
                                </div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-dark px-4" value="Simpan Perubahan"></input>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

<style>
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
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
  width: 60px;
}
</style>