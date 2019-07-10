
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
                <img src="<?= base_url('assets/') ?>/images/line.png" align="left">
                <br>
                <img src="<?= base_url('assets/') ?>/images/line.png" align="right">
              </div>
                                      
              <form class="pt-3 p-5" method="post" action="<?= base_url('auth');?>">
                
                <?= $this->session->flashdata('message'); ?>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="email" name="email"placeholder="Enter Your Email Address" value="<?= set_value('email'); ?>">
                  <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                  <br>
                  <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                  <a href="<?= base_url('auth/forgotpassword');  ?>" class="text-primary">Forgot your password?</a>
                </div>

                <!--
                <div class="text-left mt-4 font-weight-light">
                  <a href="register.html" class="text-primary">Forgot your password?</a>
                </div>
-->

                <div class="mt-3">
                  <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submin" style="display: block; margin: auto;">Login</button>
                </div>

                

                <!-- login facebook google
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-google auth-form-btn">
                    <i class="mdi mdi-google mr-2"></i>Login with Google
                  </button>
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Login with Facebook
                  </button>
                </div>
                login facebook google  -->

                
                <div class="text-center mt-4 font-weight-light">
                  Not a member yet? <a href="<?= base_url('auth/registration'); ?>" class="text-primary">Sign Up</a>
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
  