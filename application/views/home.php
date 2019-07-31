<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title text-blue">Sparkline line</h3>

              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#f39c12" data-highlight-Line-Color="#222" data-min-Spot-Color="#f56954" data-max-Spot-Color="#00a65a" data-spot-Color="#39CCCC" data-offset="90" data-width="100%" data-height="100px" data-line-Width="2" data-line-Color="#39CCCC" data-fill-Color="rgba(57, 204, 204, 0.08)">
                6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title text-blue">Sparkline line</h3>

              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#f39c12" data-highlight-Line-Color="#222" data-min-Spot-Color="#f56954" data-max-Spot-Color="#00a65a" data-spot-Color="#39CCCC" data-offset="90" data-width="100%" data-height="100px" data-line-Width="2" data-line-Color="#39CCCC" data-fill-Color="rgba(57, 204, 204, 0.08)">
                6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title text-blue">Sparkline line</h3>

              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#f39c12" data-highlight-Line-Color="#222" data-min-Spot-Color="#f56954" data-max-Spot-Color="#00a65a" data-spot-Color="#39CCCC" data-offset="90" data-width="100%" data-height="100px" data-line-Width="2" data-line-Color="#39CCCC" data-fill-Color="rgba(57, 204, 204, 0.08)">
                6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header">
              <h3 class="box-title text-blue">Sparkline line</h3>

              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#f39c12" data-highlight-Line-Color="#222" data-min-Spot-Color="#f56954" data-max-Spot-Color="#00a65a" data-spot-Color="#39CCCC" data-offset="90" data-width="100%" data-height="100px" data-line-Width="2" data-line-Color="#39CCCC" data-fill-Color="rgba(57, 204, 204, 0.08)">
                6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="box box-solid">
            <div class="box-body">
              <div class="row" style="padding-top: 2%; padding-right: 2%;">
                <div class="col-md-2 text-center">
                  <img src="<?php echo base_url(); ?>assets/images/profile/<?php echo photo_user($this->session->userdata('id')); ?>" class="img-circle" alt="User Image" width="75%">
                </div>
                <div class="col-md-10">
                  <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Write here...." style="resize: none;"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php foreach ($post as $p){?>
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
          <?php }?>
        </div>
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-body">
              
            </div>
          </div>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Trending</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                   <img src="<?php echo base_url(); ?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" width=100%>
                  </div>
                  <div class="">
                    <div class="row">
                      <div class="col-md-7">
                        <a href="javascript:void(0)" class="product-title">Samsung TV
                          <span class="product-description">
                              Reputation ?
                            </span>
                          
                        </a>
                      </div>
                      <div class="col-md-2">
                        <a class="btn btn-lg">
                            <i class="fa fa-heart-o"></i>
                          </a>
                      </div>
                    </div>
                  </div>
                </li>
                
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">+ Discover More</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <div class="text-right">
            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
            <p>
              Terms & Conditions | Help | About <br>
              CEStocks &copy; 2019
            </p>
          </div>
        </div>
      </div>  
    </section>
    <!-- /.content -->
  </div>