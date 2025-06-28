<section class="vh-50" style="background-color: #5e982a;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block align-items-center">
              <img src="https://ifoxsoft.com/wp-content/uploads/2022/11/Logo-HNI-PNG-%E2%80%93-IfoxSoft.Com_.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
          <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <form method="post" action="<?= base_url('auth/index');?>">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">STOKIS HNI-HPAI</span>
                  </div>
              <?php if( $this->session->flashdata('message') ) : ?>
                <div class="alert alert-warning alert-dismissible fade show mt-2 mb-2" role="alert">
                <strong><?= $this->session->flashdata('message'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login ke Akun Anda</h5>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control form-control-lg" />
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>');?>
                  </div>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" class="form-password form-control form-control-lg" />
                    <input type="checkbox" class="form-checkbox"> Tampilkan Kata sandi </input>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" value="submit">Login</button>
                  </div>
                  <a class="small text-muted" href="<?= base_url("register/forgot_password"); ?>">Lupa kata sandi?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Tidak memiliki akun? <a href="<?= base_url("register"); ?>"
                      style="color: #393f81;">Daftar disini</a></p>
                  <p class="small text-muted">© Copyright | HNI - Halal Network International 2023</p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>