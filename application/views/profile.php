  <!-- =============================================== -->
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php get_instance()->load->helper('follow_helper'); ?>
    <!-- Content Header (Page header) -->
 
    <!-- Main content -->
   <section class="content">
    <?php foreach ($profile as $profil) {
      # code...
   ?>

      <div class="row" style="margin-top: 3%;">
        <div class="col-md-8 col-md-offset-2" > 
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user" >
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <!-- <div class="widget-user-header bg-aqua-active"> -->
              <div class="row" style="padding: 5% 0;">
                <div class="col-md-7 col-md-offset-1"> 
                  <h3 class="widget-user-username"><?php echo $profil->name?></h3>
                  <h4 class="widget-user-desc"><?php echo $profil->username?></h4>
                  <h5 class="widget-user-desc"><?php echo $profil->biography?></h5>
                </div>
                <div class="col-md-3 text-center" style=""> 
                  <!-- <div class="widget-user-image"> -->
                    <img class="img-circle" style="width: 60%;" src="<?php echo base_url();?>assets/images/profile/<?php echo $profil->image?>" alt="User Avatar">
                  <!-- </div> -->
                </div>
              </div>
            <!-- </div> -->
            <div class="">
              <div class="row">
                <div class="col-sm-2" style="margin-left: 5%; margin-bottom: 2%">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo jumlah_following($profil->id)?></h5>
                    <span class="description-text">FOLLOWING</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-2">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo jumlah_follower($profil->id)?></h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-sm-offset-3 text-center" style="margin-top: 1%">
                  <?php if (follow($profil->id,$this->session->userdata('id')) > 0){ ?>
                  <a href="<?php echo base_url(); ?>profile/unfollow/<?php echo $profil->id ?>" class="btn btn-default btn-s"><i class="fa fa-heart"></i> Followed</a>
                <?php } else { ?>
                  <a href="<?php echo base_url(); ?>profile/follow/<?php echo $profil->id ?>" class="btn btn-primary btn-s"><i class="fa fa-heart"></i> Follow</a>
                <?php } ?>
                  <button type="button" class="btn btn-default btn-s"><i class="fa fa-comments"></i> Chat</button>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
      </div>
      <?php   }  ?>
        <!-- /.col -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->