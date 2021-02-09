<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>PPDB</b>2020</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Daftarkan diri anda sekarang</p>

    <form action="<?php echo base_url('auth/register'); ?>" method="post">

      <!-- username -->

      <div class="input-group mb-2">
          <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo set_value('nama'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div><small class="text-danger pl-3"><?php echo form_error('nama') ?></small>

      <!-- email -->

        <div class="input-group mb-1">
          <input type="email" class="form-control container-fluid" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div><small class="text-danger pl-3"><?php echo form_error('email') ?></small>
        

      <!-- password1 -->

        <div class="input-group mb-1">
          <input type="password" class="form-control" placeholder="Password" name="password1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div><small class="text-danger pl-3"><?php echo form_error('password1') ?></small>


      <!-- password2 -->

      <div class="input-group mb-1">
          <input type="password" class="form-control" placeholder="Konfimasi Password" name="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>  <hr>

      <div class="row">
        
        <!-- /.col -->
        <div class="container-fluid">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
      <br>
    </form>

    <div class="text-center">
    <a href="<?php echo base_url('auth') ?>">Saya memiliki akun</a>
    </div>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->