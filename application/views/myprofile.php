  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <!-- Main content -->
    <section class="content">
      <div class="row" style="margin-top: 3%;">
        <div class="col-md-8 col-md-offset-2" > 
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user" >
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <!-- <div class="widget-user-header bg-aqua-active"> -->
              <?php foreach ($user as $u){?>
              <div class="row" style="padding: 5% 0;">
                <div class="col-md-7 col-md-offset-1"> 
                  <h3 class="widget-user-username"><?php echo $u->name?></h3>
                  <h4 class="widget-user-desc"><?php echo $u->username?></h4>
                  <h5 class="widget-user-desc"><?php echo $u->biography?></h5>
                </div>
                <div class="col-md-3 text-center" style=""> 
                  <!-- <div class="widget-user-image"> -->
                    <img class="img-circle" style="width: 60%;" src="<?php echo base_url();?>assets/images/profile/<?php echo $u->image?>" alt="User Avatar">
                  <!-- </div> -->
                </div>
              </div>
            <!-- </div> -->
              <div class="">
              <div class="row">
                <div class= "col-sm-2" style="margin-left: 5%; margin-bottom: 2%">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-2">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-2">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-4 col-sm-offset-1 text-center" style="margin-top: 1%">
                  <a href="<?php echo base_url();?>Profile/getuserdata/<?php echo $u->id?>" class="btn" role="button"><i class="fa fa-cog"></i> Edit Profile</a>
                </div>
              <?php }?>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2" style="padding-bottom: 2%;">
          <a href="<?php echo base_url(); ?>Post/post" class="btn btn-primary">New Post</a>
        </div>
        <?php foreach ($post as $p){?>
        <div class="col-md-8 col-md-offset-2">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <input type="hidden" name="id_user" value="<?php echo $p->id_user?>">
              <div class="user-block">
                <img class="img-circle" src="<?php echo base_url();?>assets/images/profile/<?php echo $p->image; ?>" alt="User Image">
                <span class="username"><?php echo $p->name?></span>
                <span class="description"><?php echo $p->created_at?></span>
              </div>
              <!-- /.user-block -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
              <p><?php echo $p->content?></p>
              <?php if($p->file != null ) { ?>
              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="<?php echo base_url();?>assets/images/post/<?php echo $p->file?>" alt="Attachment Image">
                <!-- /.attachment-pushed -->
              </div>
            <?php } ?>
              <!-- /.attachment-block -->
              <!-- Social sharing buttons -->
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
            </div>
            <!-- /.box-body -->
            <?php foreach ($comment as $c){?>
              <?php if ($p->id_post == $c->id_post){ ?>
                
              
            <div class="box-footer box-comments">
              
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="<?php echo base_url();?>assets/images/profile/<?php echo $c->image; ?>" alt="User Image">  
                <div class="comment-text">
                      <span class="username">
                        <?php echo $p->name?>
                        <span class="text-muted pull-right"><?php echo $c->created_at?></span>
                      </span><?php echo $c->comment?>
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
                <!-- /.comment-text -->
              <!-- /.box-comment -->
            </div>
            <?php } ?>
            <?php } ?>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="<?php echo base_url(); ?>post/newcomment" method="post">
                <input type="hidden" name="id_post" value="<?php echo $p->id_post?>">
                <img class="img-responsive img-circle img-sm" src="<?php echo base_url();?>assets/images/profile/default.png" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment" name="comment">
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <?php }?>
      </div>
        <!-- /.col -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 