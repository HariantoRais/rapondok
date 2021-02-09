<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
        Selamat Datang, <?php echo $user['nama'] ?> <br>
        <small>di Aplikasi Rapor Pondok SMP Islam As-Sunnah Bagik Nyaka.</small>
      </h4>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Info boxes -->
      <div class="row">
      	<?php if ($user['role_id'] == 71 or $user['role_id'] == 1): ?>
      		<div class="col-md-4 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-aqua">7A</span>

	            <div class="info-box-content">
	              <span class="info-box-text">YAHYA, S.Pd.I</span>
	              <span class="info-box-number"><?php echo round(($viia_p/$viia_t)*100, 2) ?><small>%</small></span>
	              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/viia') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->	
      	<?php endif ?>
        
        <?php if ($user['role_id'] == 72 or $user['role_id'] == 1): ?>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-red">7B</span>

	            <div class="info-box-content">
	              <span class="info-box-text">MOH. PATIX ARIANGGA, S.Pd</span>
	              <span class="info-box-number"><?php echo round(($viib_p/$viib_t)*100, 2) ?><small>%</small></span>
	              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/viib') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->
	    <?php endif ?>

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <?php if ($user['role_id'] == 73 or $user['role_id'] == 1): ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green">7C</span>

            <div class="info-box-content">
              <span class="info-box-text">YAYAN PUTRA, S.Pd</span>
              <span class="info-box-number"><?php echo round(($viic_p/$viic_t)*100, 2) ?><small>%</small></span>
              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/viic') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
	    <?php endif ?>

	    <?php if ($user['role_id'] == 81 or $user['role_id'] == 1): ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple">8A</span>

            <div class="info-box-content">
              <span class="info-box-text">ULIAN TUHIBBI, S.Pd</span>
              <span class="info-box-number"><?php echo round(($viiia_p/$viiia_t)*100, 2) ?><small>%</small></span>
              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/viiia') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
	    <?php endif ?>

	    <?php if ($user['role_id'] == 82 or $user['role_id'] == 1): ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-grey">8B</span>

            <div class="info-box-content">
              <span class="info-box-text">AHZAR, S.Pd.I</span>
              <span class="info-box-number"><?php echo round(($viiib_p/$viiib_t)*100, 2) ?><small>%</small></span>
              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/viiib') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
	    <?php endif ?>

	    <?php if ($user['role_id'] == 83 or $user['role_id'] == 1): ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-navy">8C</span>

            <div class="info-box-content">
              <span class="info-box-text">SAUFIAN SAURI, S.Pd.I</span>
              <span class="info-box-number"><?php echo round(($viiic_p/$viiic_t)*100, 2) ?><small>%</small></span>
              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/viiic') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
	    <?php endif ?>

	    <?php if ($user['role_id'] == 91 or $user['role_id'] == 1): ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow">9A</span>

            <div class="info-box-content">
              <span class="info-box-text">HERJAN PANDI K., S.Pd</span>
              <span class="info-box-number"><?php echo round(($ixa_p/$ixa_t)*100, 2) ?><small>%</small></span>
              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/ixa') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
	    <?php endif ?>

	    <?php if ($user['role_id'] == 92 or $user['role_id'] == 1): ?>
         <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue">9B</span>

            <div class="info-box-content">
              <span class="info-box-text">SUHENDRI, SH</span>
              <span class="info-box-number"><?php echo round(($ixb_p/$ixb_t)*100, 2) ?><small>%</small></span>
              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/ixb') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
	    <?php endif ?>

	    <?php if ($user['role_id'] == 93 or $user['role_id'] == 1): ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-black">9C</span>

            <div class="info-box-content">
              <span class="info-box-text">L. MUHAMMAD RISPAN S. S., S.Pd</span>
              <span class="info-box-number"><?php echo round(($ixb_p/$ixb_t)*100, 2) ?><small>%</small></span>
              <span class="info-box-text" align="right"><a class="btn btn-sm btn-primary" href="<?php echo base_url('wakel/data/ixc') ?>"><i class="fa fa-edit fa-fw"></i> Input Nilai</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
	    <?php endif ?>

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
