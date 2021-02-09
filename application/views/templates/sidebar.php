<aside class="main-sidebar fixed">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar fixed">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="background-color: grey">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/user.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['nama'] ?></p>
          <p style="font-size: 12px"><?php echo $user['level'] ?></p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">

        <!-- DASHBOARD -->
        <?php if($title == 'Dashboard'): ?>
        <li class="active">
        <?php else : ?>
        <li>
        <?php endif; ?>
          <a href="<?php echo base_url('wakel/data') ?>" class="nav-link"><i class="fa fa-tachometer fa-fw"></i> Dashboard</a>
        </li> <!-- DASHBOARD -->

        <?php if ($user['role_id']==1): ?>
          
        <!-- DASHBOARD -->
        <?php if($title == 'Data User'): ?>
        <li class="active">
        <?php else : ?>
        <li>
        <?php endif; ?>
          <a href="<?php echo base_url('Admin/datauser') ?>" class="nav-link"><i class="fa fa-user fa-fw"></i> Data User</a>
        </li> <!-- DASHBOARD -->

        <?php endif ?>

        
        
        <!-- REGISTRASI ONLINE -->
        <?php if ($title == 'VII A' or $title == 'VII B' or $title == 'VII C' or $title == 'VIII A' or $title == 'VIII B' or $title == 'VIII C' or $title == 'IX A' or $title == 'IX B' or $title == 'IX C' or $title == 'Input Nilai'): ?>
        <li class="treeview active">  
        <?php else: ?>
        <li class="treeview">
        <?php endif ?>
          <a href="#">
            <i class="fa fa-laptop fa-fw"></i>
            <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">

          <?php if ($user['role_id'] == 71 or $user['role_id'] == 1): ?>
            <?php if ($title == 'VII A' or $url == 'viia'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/viia') ?>"><i class="fa fa-circle-o fa-fw"></i>  VII A</a>
            </li>
          <?php endif ?>
            
          <?php if ($user['role_id'] == 72 or $user['role_id'] == 1): ?>
            <?php if ($title == 'VII B' or $url == 'viib'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/viib') ?>"><i class="fa fa-circle-o fa-fw"></i>  VII B</a>
            </li>
          <?php endif ?>

          <!-- VII C -->
          <?php if ($user['role_id'] == 73 or $user['role_id'] == 1): ?>
            <?php if ($title == 'VII C' or $url == 'viic'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/viic') ?>"><i class="fa fa-circle-o fa-fw"></i>  VII C</a>
            </li>
          <?php endif ?>

          <!-- VIII A -->
          <?php if ($user['role_id'] == 81 or $user['role_id'] == 1): ?>
            <?php if ($title == 'VIII A' or $url == 'viiia'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/viiia') ?>"><i class="fa fa-circle-o fa-fw"></i>  VIII A</a>
            </li>
          <?php endif ?>

          <!-- VIII B -->
          <?php if ($user['role_id'] == 82 or $user['role_id'] == 1): ?>
            <?php if ($title == 'VIII B' or $url == 'viiib'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/viiib') ?>"><i class="fa fa-circle-o fa-fw"></i>  VIII B</a>
            </li>
          <?php endif ?>

          <!-- VIII C -->
          <?php if ($user['role_id'] == 83 or $user['role_id'] == 1): ?>
            <?php if ($title == 'VIII C' or $url == 'viiic'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/viiic') ?>"><i class="fa fa-circle-o fa-fw"></i>  VIII C</a>
            </li>
          <?php endif ?>

          <!-- IX A -->
          <?php if ($user['role_id'] == 91 or $user['role_id'] == 1): ?>
            <?php if ($title == 'IX A' or $url == 'ixa'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/ixa') ?>"><i class="fa fa-circle-o fa-fw"></i>  IX A</a>
            </li>
          <?php endif ?>

          <!-- IX B -->
          <?php if ($user['role_id'] == 92 or $user['role_id'] == 1): ?>
            <?php if ($title == 'IX B' or $url == 'ixb'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/ixb') ?>"><i class="fa fa-circle-o fa-fw"></i>  IX B</a>
            </li>
          <?php endif ?>

          <!-- IX C -->
          <?php if ($user['role_id'] == 93 or $user['role_id'] == 1): ?>
            <?php if ($title == 'IX C' or $url == 'ixc'): ?>
            <li class="active">
            <?php else: ?>
            <li>
            <?php endif ?>
             <a href="<?php echo base_url('wakel/data/ixc') ?>"><i class="fa fa-circle-o fa-fw"></i>  IX C</a>
            </li>
          <?php endif ?>

          </ul>
          
        </li>

          <li class="nav-item bg-red-active" >
            <a href="<?php echo base_url('login/logout') ?>" class="nav-link">
              <center style="color: white">
                <i class="fa fa-sign-out"></i>
                <b>Logout</b>
              </center>
            </a>
          </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>