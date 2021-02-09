<div class="content-wrapper">

    <section class="content">


        <div class="box">
        

        <div class="box-header bg-blue-gradient">
              <h3 class="box-title"><li class='fa fa-edit fa-fw'></li> &nbsp;&nbsp; EDIT DATA USER</h3>
        </div>

        <div class="box-body">

			<?php foreach($pengguna as $p) { ?>

				<form action="<?php echo base_url().'admin/update_datauser'; ?>" method="post"class="form-horizontal">
								
					
					<div class="form-group container-fluid">
						<label class="control-label">Nama Pengguna</label>
						<div class="container-fluid">
						<input required type="text" name="nama" class="form-control" value="<?php echo $p->nama ?>">
						<?php echo form_error('nama') ?>
						</div>
					</div>

					<div class="form-group container-fluid">
						<label class="control-label">Email</label>
						<div class="container-fluid">
						<input type="hidden" name="id" class="form-control" value="<?php echo $p->id ?>">
						<input required type="text" name="email" class="form-control" value="<?php echo $p->email ?>">
						</div>
					</div>
					
					<div class="form-group container-fluid">
						<label class="control-label">Role Id</label>
						<div class="container-fluid">
						<input required type="text" name="role_id" class="form-control" value="<?php echo $p->role_id ?>">
						</div>
					</div>
					<div class="form-group container-fluid">
						<label class="control-label">Level</label>
						<div class="container-fluid">
						<input required type="text" name="level" class="form-control" value="<?php echo $p->level
						 ?>">
						</div>
					</div>
					
					<div class="form-group container-fluid">
						<label class="control-label">Status</label>
						<div class="container-fluid">
						<input required type="text" name="is_active" class="form-control" value="<?php echo $p->is_active ?>">
						</div>
					</div>
					

					<div class="container-fluid">
					<!-- tombol reset -->
					<a href="<?php echo base_url('admin/datauser') ?>" class="btn btn-danger">Batal</a>

					<!-- tombol simpan -->
					<button type="submit" class="btn btn-primary">Simpan</button>
					</div>	
					
				</form>
			<?php } ?>
	</div>
</div>
</section>
<br>
</div>