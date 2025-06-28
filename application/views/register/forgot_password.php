<section class="vh-100" style="background-color: #5e982a;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block align-items-center">
              <img src="https://ifoxsoft.com/wp-content/uploads/2022/11/Logo-HNI-PNG-%E2%80%93-IfoxSoft.Com_.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
          <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">STOKIS HNI-HPAI</span>
                  </div>
              <?php if( $this->session->flashdata('success_msg') ) : ?>
                <div class="alert alert-success alert-dismissible fade show mt-2 mb-2" role="alert">
                <strong><?= $this->session->flashdata('success_msg'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
              <?php if( $this->session->flashdata('success_pw') ) : ?>
                <div class="alert alert-primary alert-dismissible fade show mt-2 mb-2" role="alert">
                <strong><?= $this->session->flashdata('success_pw'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
              <?php if( $this->session->flashdata('error_msg') ) : ?>
                <div class="alert alert-warning alert-dismissible fade show mt-2 mb-2" role="alert">
                <strong><?= $this->session->flashdata('error_msg'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
              <form action="<?= base_url("register/forgot_password"); ?>" method="post">
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Lupa kata sandi ?</h5>
                  <div class="form-outline mb-4">
                  <p class="small text-muted">Masukkan E-mail anda untuk mengatur ulang kata sandi.</p>
                  <label class="form-label" for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg"/>
                    <div class="form-text text-danger"><?= form_error('email'); ?></div>
                  </div>
                  <div class="pt-1 mb-4">
                    <a href="<?= base_url("auth"); ?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
					          <input class="btn btn-dark btn-lg btn-block" type="submit" value="Ubah"></input>
                  </div>
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