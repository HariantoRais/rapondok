
<div class="login-box">
  <div class="login-logo">
    <img style="width: 300px" src="<?php echo base_url('assets/img/rapondok.png') ?>">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan login terlebih dahulu</p>
    <?php echo $this->session->flashdata('pesan'); ?>

    <form action="<?php echo base_url('login'); ?>" method="post" class="user">
      <!-- email -->
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="email" value="<?php echo set_value('email') ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <small class="text-danger mb-1"><?php echo form_error('email') ?></small>
      </div>
      <!-- password -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <small class="text-danger mb-1"><?php echo form_error('password') ?></small>
      </div>
      
        
        <!-- /.col -->
        <div>
          <button type="submit" class="btn btn-success btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<center>&copy; 2020 Rapor Pondok SMP Islam As-Sunnah Bagik Nyaka <br>  by <a href="https://www.facebook.com/hariantorais">Harianto Rais</a></b></center>
<br>  
