  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <!-- Main content -->
    <section class="content">
       <?php foreach ($user as $u) { ?>
      <div class="row">
        <div class="col-md-2 col-md-offset-2" > 
          <div class="a">
            <img class="img-responsive" style="" src="<?php echo base_url();?>assets/images/profile/<?php echo $u->image?>" alt="User Avatar">
            <button type="button" class="btn btn-primary form-control" style=" margin-top: 3%;" data-toggle="modal" data-target="#myModal">Change Avatar</button>
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change Avatar</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-3 col-md-offset-1">
                        <img class="img-responsive" style="" src="<?php echo base_url();?>assets/images/profile/<?php echo $u->image?>" alt="User Avatar">
                      </div>
                      <div class="col-md-6 col-md-offset-2">
                        <form method="POST" action="<?php echo base_url();?>profile/uploadgambar" enctype="multipart/form-data">
                          <input type="file" name="gambar" style="margin-top: 10%">
                          <input type="submit" name="submit" value="Update" class="btn btn-primary" style="margin-top: 5%">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="box box-primary" style="margin-top: 10%">
            <div class="box-body">
              <ul class="nav nav-pills nav-stacked">
                <li class="<?php if($this->session->flashdata('type') == null ){ echo "active";} ?>"><a href="#profile" data-toggle="tab">Profile</a></li>
                <li class="<?php if($this->session->flashdata('type') == 'change_password'){ echo "active";} ?>"><a href="#password" data-toggle="tab">Change Password</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="tab-content">
              <div class="tab-pane <?php if($this->session->flashdata('type') == null ){ echo "active";} ?>" id="profile">
                <div class="box-header with-border">
                  <h4>My Profile</h4>
                </div>
               
                <form class="form-horizontal" action="<?php echo base_url();?>Profile/saveuserdata" method="POST">
                <div class="box-body">
                  <input type="hidden" name="id_user" value="<?php echo $u->id?>">
                  <table class="table borderless">
                    <tr>
                      <td>Username</td>
                      <td>:</td>
                      <td><input type="text" name="username" class="form-control" readonly="" value="<?php echo $u->username?>"></td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td><input type="text" name="nama" class="form-control" value="<?php echo $u->name?>" required></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td><input type="email" name="email" class="form-control" value="<?php echo $u->email?>"></td>
                    </tr>
                    <tr>
                      <td>Biography</td>
                      <td>:</td>
                      <td><textarea type="textarea" name="biography" class="form-control" value=""><?php echo $u->biography?></textarea></td>
                    </tr>
                    <tr>
                      <td>Location</td>
                      <td>:</td>
                      <td><input type="text" name="location" class="form-control" value="<?php echo $u->location?>">
                        <!-- <select type="text" name="location" class="col-xs-7">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select> --></td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td>:</td>
                      <td><select type="text" name="gender" class="col-xs-4" required>
                        <option value="1" <?php if($u->gender == '1' ){ echo "selected";} ?> >Male</option>
                        <option value="2" <?php if($u->gender == '2' ){ echo "selected";} ?> >Female</option>
                      </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Birthday</td>
                      <td>:</td>
                      <td><input type="date" name="bday" class="form-control" value="<?php echo $u->birthday?>"></td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>:</td>
                      <td><input type="text" name="phone" class="form-control" maxlength="12" value="<?php echo $u->phone?>"></td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td>:</td>
                      <td><textarea type="textarea" name="address" class="form-control" value=""><?php echo $u->address?></textarea></td>
                    </tr>
                  </table>
                  <div>
                    <button  class="btn btn-primary form-control; col-md-4; col-md-offset-5" type="submit" style=" margin-top: 3%">Save Change</button>
                  </div>
                </div>
              </form>
                <?php } ?>
              </div>
              <div class="tab-pane <?php if($this->session->flashdata('type') == 'change_password'){ echo "active";} ?>" id="password">
                <div class="box-header with-border">
                  <h4>Change Password</h4>
                </div>
                <div class="box-body">
                  
                  <?= $this->session->flashdata('message'); ?>
                  <form method="post" action="<?=base_url();?>profile/save_password">
                    <table class="table borderless">
                      <tr>
                        <td>Current Password</td>
                        <td>:</td>
                        <td><input type="password" name="cpassword" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>New Password</td>
                        <td>:</td>
                        <td><input type="password" name="new" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>Verify Password</td>
                        <td>:</td>
                        <td><input type="password" name="re_new" class="form-control"></td>
                      </tr>
                    </table>
                    <div>
                      <button type="submit" class="btn btn-primary form-control; col-md-4; col-md-offset-5" style=" margin-top: 3%">Save Change</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="tab-pane" id="blocked">
                <div class="box-header with-border">
                  <h4>Blocked List</h4>
                </div>
                <div class="box-body">
                  <table class="table borderless">
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 