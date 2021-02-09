<div class="content-wrapper">

    <section class="content">


        <div class="box">
        

        <div class="box-header bg-blue-gradient">
              <h3 class="box-title"><li class='glyphicon glyphicon-user'></li> &nbsp;&nbsp; TAMBAH USER</h3>
        </div>

        <div class="box-body">
    
    <form action="<?php echo base_url('admin/register'); ?>" method="post">

      <!-- username -->
      <div class="form-group">
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap*" value="<?php echo set_value('nama'); ?>" autofocus >
          </div>
          <small class="text-danger mb-1"><?php echo form_error('nama') ?></small>

      <!-- email -->
      <div class="form-group mt-3">
              <input type="text" name="email" class="form-control" placeholder="Email*" onkeyup="this.value=this.value.toLowerCase()" value="<?php echo set_value('email'); ?>" >
          </div>
          <small class="text-danger mb-1"><?php echo form_error('email') ?></small>

      <!-- password1 -->
      <div class="form-group mt-3">
              <input type="password" name="password1" class="form-control" placeholder="Password*" >
          </div>
          <small class="text-danger mb-1"><?php echo form_error('password1') ?></small>


      <!-- password2 -->
      <div class="form-group mt-3">
              <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password*" >
          </div>
          


      <!-- role id -->
      <div class="form-group mt-3"> 
              <select name="role_id" id="role_id" class="form-control">
                <option>Pilih Hak Akses</option>
                <?php foreach($role as $r) :?>
                  <option value="<?php echo $r['id']; ?>"><?php echo $r['role']; ?></option>
                <?php endforeach; ?>
              </select>
      </div>

      
        <div class="container-fluid">
        <!-- /.col -->
        <a href="<?php echo base_url('admin/datauser') ?>" class="btn btn-danger">Batal</a>
        
          <button type="submit" class="btn btn-primary">Daftar</button>
        
        <!-- /.col -->
      </div>
      <br>
    </form>

    
</div>
</section>
<br>
</div>