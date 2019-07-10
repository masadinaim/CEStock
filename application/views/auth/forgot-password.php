
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left">
              
              <div class="brand-logo p-5 text-center">
                <img src="<?= base_url('assets/') ?>/images/logo.png" >                              
              </div>
              <div class="line-logo">
                <img src="<?= base_url('assets/') ?>/images/line.png" align="right">
                <br>
                <img src="<?= base_url('assets/') ?>/images/line.png" align="left">
              </div>

                <div class="pt-1 p-3 text-right">
                  <h1>Forgot Password</h1>
                  <h5>Enter your email address and you'll receive a link </h5>
                  <h5>to reset your passwordk</h5>
                </div>
              
                                      
              <form class="pt-3 p-5" method="post" action="<?= base_url('auth/forgotpassword');?>">
                
                <?= $this->session->flashdata('message'); ?>
                                
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="email" name="email"placeholder="Enter Your Email Address" value="<?= set_value('email'); ?>">
                  <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                </div>              
               
                <div class="mt-3">
                  <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submin" style="display: block; margin: auto;">Forgot Password</button>
                </div>
                                             
                <div class="text-center mt-4 font-weight-light">
                 <a href="<?= base_url('auth'); ?>" class="text-primary"> Back to login</a>
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
  