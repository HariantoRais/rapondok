<div class="content-wrapper">

    <section class="content">


        <div class="box">
        

        <div class="box-header bg-blue-gradient">
              <h3 class="box-title"><li class='glyphicon glyphicon-user'></li> &nbsp;&nbsp; DATA USER</h3>
        <div class="box-tools pull-right">
        <a href="<?php echo base_url('admin/register') ?>"><button class="btn btn-success"><i class="fa fa-user-plus"></i> Tambah Pengguna</button></a>
        </div>
        </div>

        <div class="box-body">


<div class="flash-success" data-flashdata="<?php echo $this->session->flashdata('success'); ?>"></div>
      
        <table id="example1" class="table table-bordered table-striped table-hover">
        <thead class="thead-dark" align="center">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pengguna</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Level</th>
          <th scope="col">Status</th>
          <th scope="col">Menu Aksi</th>
        </tr>
        </thead>
        
        <tbody>
          
          <?php  
          $no = 1;
          foreach ($role as $r) :?>
            <tr>
              <td align="center"><b><?php echo $no++ ?></b></td>
              <td><b><?php echo $r['nama'] ?></b></td>
              <td align="center"><?php echo $r['email'] ?></td>
              <td align="center"><?php echo $r['role'] ?></td>
              <td align="center"><?php echo $r['level'] ?></td>


              <td align="center">
                <?php if ($r['is_active']==1) {
                  echo 'Aktif';
                }else{
                  echo 'Tidak Aktif';
                } ?>
              </td>
              
              <td align="center">
             
              <!-- button edit -->

               <?php echo anchor ('admin/edit_datauser/'.$r['id'],'<div class="btn btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
               <!-- button hapus -->
              <i onclick="javascript: return confirm('Apakah antum yakin menghapus data?')"><?php echo anchor ('admin/hapus_datauser/'.$r['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
              </i>    
              </td>  
            </tr>
        <?php endforeach; ?>
        
        </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
      </div>
    </section>

    <!-- Modal -->
   

        </div>
        </div>
      </div>
    </div>

</div>

</body>
</html>

