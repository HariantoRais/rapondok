<div class="content-wrapper">

    <section class="content">

        <div class="box">
        
        <div class="box-header bg-purple">
           <span>DATA KELAS <?= $title ?></span>
           <span class="pull-right"><a class="btn btn-xs btn-warning" href="<?php echo base_url('wakel/data') ?>"><i class="fa fa-arrow-left fa-fw"></i></a></span>
        </div>


        <div class="box-body">
        
          <a class="btn btn-xs btn-primary" href="<?php echo base_url('wakel/crud/input_nilai/'.$url) ?>"><i class="fa fa-edit fa-fw"></i>Nilai Mapel</a>

          <a class="btn btn-xs btn-warning" href="<?php echo base_url('wakel/crud/input_kehadiran/'.$url) ?>"><i class="fa fa-edit fa-fw"></i>Kehadiran</a>

          <a class="btn btn-xs btn-info" href="<?php echo base_url('wakel/crud/input_kepribadian/'.$url) ?>"><i class="fa fa-edit fa-fw"></i>Kepribadian</a>

          <a class="btn btn-xs btn-default" href="<?php echo base_url('wakel/crud/input_poin/'.$url) ?>"><i class="fa fa-edit fa-fw"></i>Poin Pelanggaran</a>

          <a class="btn btn-xs btn-danger" href="<?php echo base_url('wakel/crud/input_catatan/'.$url) ?>"><i class="fa fa-edit fa-fw"></i>Catatan Wali Kelas</a>


  <div class="flash-success" data-flashdata="<?php echo $this->session->flashdata('success'); ?>"></div>

       <table id="example1" class="display nowrap table-bordered table-striped table-hover" style="width:100%">
        <thead>
        <tr style="width: 100%">
          <td align="center">#</td>
          <td>Cetak</td>
          <td align="center">NISN</td>
          <td align="center">NIS</td>
          <td align="center">Nama Siswa</td>
          <td align="center">Aqdh</td>
          <td align="center">Tdrb</td>

          <?php if ($url == 'viia' or $url == 'viiia' or $url == 'ixa'): ?>
          <td align="center">Thfz</td>
          <?php endif ?>

          <?php if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic' or $url == 'ixb' or $url == 'ixc'): ?>
          <td align="center">Fqih</td>
          <?php endif ?>

          <?php if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic'): ?>
          <td align="center">Tjwd</td>
          <td align="center">Doa</td>    
          <?php endif ?>
          

          <?php if ($url == 'ixb' or $url == 'ixc'): ?>
          <td align="center">Nhwu</td>
          <td align="center">Shrf</td>
          <?php endif ?>

          <td align="center">Khot</td>
          <td align="center">rata2</td>
          <td align="center">S</td>
          <td align="center">I</td>
          <td align="center">A</td>
          
        </tr>
        </thead>
        
        <tbody>
          
          <?php  
          $no = 1;
          foreach ($siswa as $sis) :?>
            <tr>
              <td align="center"><?php echo $no++ ?></td>
              <td align="center">
              <!-- <a href="<?= base_url('wakel/crud/input/'.$sis->id) ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a> -->
              <a href="<?= base_url('wakel/crud/rapor/'.$sis->id) ?>" class="btn btn-success btn-xs"><i class="fa fa-print"></i></a>
              </td>
              <td><b><?php echo $sis->nisn ?></b></td>
              <td><b><?php echo $sis->nis ?></b></td>
              <td><b><?php echo $sis->nama ?></b></td>
              <td align="center"><?php echo $sis->aqidah ?></td>
              <td align="center"><?php echo $sis->tadrib_lughowi ?></td>

              <?php if ($url == 'viia' or $url == 'viiia' or $url == 'ixa'): ?>
              <td align="center"><?php echo $sis->tahfidz ?></td>
              <?php endif ?>

              <?php if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic' or $url == 'ixb' or $url == 'ixc'): ?>
              <td align="center"><?php echo $sis->fiqih ?></td>
              <?php endif ?>

              <?php if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic'): ?>
              <td align="center"><?php echo $sis->tajwid ?></td>
              <td align="center"><?php echo $sis->doa_dzikir ?></td>  
              <?php endif ?>

              <?php if ($url == 'ixb' or $url == 'ixc'): ?>
              <td align="center"><?php echo $sis->nahwu ?></td>
              <td align="center"><?php echo $sis->shorof ?></td>  
              <?php endif ?>
              
              <td align="center"><?php echo $sis->khot ?></td>
              <td align="center"><strong><?php echo $sis->rata ?></strong></td>
              <td align="center"><?php echo $sis->sakit ?></td>
              <td align="center"><?php echo $sis->izin ?></td>
              <td align="center"><?php echo $sis->alfa ?></td>
            </tr>
        <?php endforeach; ?>
        
        </tbody>
       
        </table>
            
            <!-- /.box-body -->
          </div>
      </div>
    </section>

</div>