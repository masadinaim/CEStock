<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 	<style type="text/css">
 		table{
 			margin: 2% 0;
 		}
 		table td, table th{
 			text-align: center; 
 			border: none !important;
 		}
 	</style>
    <!-- Main content -->
    <section class="content">
      <div class="row" style="margin-top: 3%;">
      	<div class="col-md-12">
      		<div class="box box-primary">
      			<div class="box-header with-border">
      				<h4>Tambah Post</h4>
      			</div>
      			<div class="box-body">
      				<form action="<?php echo base_url(); ?>post/newpost" method="post" enctype='multipart/form-data'>
      					<table class="table" style="">
			      			<tr>
			      				<th width="10%">
			      					Content
			      				</th>
			      				<td width="1%">
			      					:
			      				</td>
			      				<td>
			      					<textarea name="content" class="form-control" rows="10"></textarea>
			      				</td>
			      			</tr>
			      			<tr>
			      				<th width="10%">
			      					Foto
			      				</th>
			      				<td width="1%">
			      					:
			      				</td>
			      				<td>
			      					<input type="file" name="gambarpost">
			      				</td>
			      			</tr>
			      			<tr>
			      				<td colspan="3">
			      					<input type="submit" class="btn btn-primary" name="submit" value="Insert Post">
			      				</td>
			      			</tr>
	      				</table>
      				</form>
	      		</div>
      		</div>
      	</div>
      </div>
  </section>
</div>