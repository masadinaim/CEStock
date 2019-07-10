
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left">
              
              <div class="brand-logo p-5">
                <img src="<?= base_url('assets/') ?>/images/logo.png" style="display: block; margin: auto;" >                              
              </div>
              <div class="line-logo">
                <img src="<?= base_url('assets/') ?>/images/line.png" align="right">
                <br>
                <img src="<?= base_url('assets/') ?>/images/line.png" align="left">
              </div>

              <div class="pt-1 p-2 text-center">
                  <h1>Change password for</h1>
                  <h5><?= $this->session->userdata('reset_email'); ?></h5>

              </div>
                                      
              <form class="pt-3 p-5" method="post" action="<?= base_url('auth/changepassword');?>">
                
                <?= $this->session->flashdata('message'); ?>
                
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password1" name="password1" placeholder="Enter new password">
                  <?= form_error('password1','<small class="text-danger pl-3">', '</small>'); ?>
                </div>              

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password2" name="password2" placeholder="Repeat password">
                  <br>
                  <?= form_error('password2','<small class="text-danger pl-3">', '</small>'); ?>
                  
                </div>
               
                <div class="mt-3">
                  <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submin" style="display: block; margin: auto;">Change Password</button>
                </div>
                                             
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  