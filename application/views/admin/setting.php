<div class="content-wrapper">

    <section class="content">


        <div class="box">
        

        <div class="box-header bg-blue-gradient">
              <h3 class="box-title"><li class='glyphicon glyphicon-user'></li> &nbsp;&nbsp; SETTING</h3>
        <div class="box-tools pull-right">
       
        </div>
        </div>

        <div class="box-body">


<div class="flash-success" data-flashdata="<?php echo $this->session->flashdata('success'); ?>"></div>
      
        <table id="example1" class="table table-bordered table-striped table-hover">
        <thead class="thead-dark" align="center">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Jenjang</th>
          <th scope="col">Status</th>
        </tr>
        </thead>
        
        <tbody>
          
          <?php  
          foreach ($setting as $set) :?>
            <tr>
              
              <td align="center"><?php echo $set->id ?></td>
              <td align="center"><?php echo $set->jenjang ?></td>
              
             

              <td align="center">
             <?php if ($set->status == 0): ?>
               <?php echo anchor ('admin/buka_setting/'.$set->id,'<button class="btn btn btn-primary btn-sm">Buka</button>') ?> <button btn btn-default btn-sm disabled>Tutup</button>
             <?php endif ?>
             <?php if ($set->status == 1): ?>
               <?php echo anchor ('admin/tutup_setting/'.$set->id,'<button class="btn btn btn-default btn-sm disabled">Buka</button>') ?> <button btn btn-default btn-sm>Tutup</button>
             <?php endif ?>
              <!-- button edit -->
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

