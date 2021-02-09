<footer class="main-footer" style="background-color: black; color: white">
    <div class="pull-right hidden-xs">
      <b>Versi</b> 2020
    </div>
    <strong>&copy; 2020 </strong> by <a href="https://www.facebook.com/hariantorais">Harianto Rais</a>
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->




<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/') ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/') ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/') ?>bower_components/morris.js/morris.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url('assets/') ?>plugins/toastr/toastr.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/') ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/') ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/') ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/') ?>plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url('assets/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/') ?>dist/js/pages/dashboard.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/') ?>plugins/iCheck/icheck.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url('assets/') ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- DataTables -->
<script src="<?php echo base_url('assets/') ?>DataTables/DataTables/js/jquery.dataTables.min.js"></script>


<!-- SweetAlert2 -->
<script src="<?php echo base_url('assets/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/sweetalert2/myscript.js"></script>



<script src="<?php echo base_url().'assets/plugins/chart.js/Chart.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assets/plugins/sparkline/jquery.sparkline.min.js'?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assets/dist/js/pages/dashboard2.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>



<!-- SCRIPT JS -->
<script>

  

  $(document).ready(function() {
    $('#example1').DataTable( {
        scrollY: '350',
        scorllX: true,
        "pageLength": 50,

        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ],

        "oLanguage": {
                  "sLengthMenu": "Tampilkan _MENU_ data per Halaman",
                  "sSearch": "Pencarian : ",
                  "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
                  "sInfo": "_START_ s/d _END_ dari _TOTAL_ data",
                  "sInfoEmpty": "Tidak ada data",
                  "sInfoFiltered": "(difilter dari _MAX_ total data)",
                  "oPaginate": {
                      "sFirst": "<<",
                      "sLast": ">>",
                      "sPrevious": "<",
                      "sNext": ">"
                 }
              }

    } );

    
} );
</script>





<script type="application/javascript">  
     /** After windod Load */  
     $(window).bind("load", function() {  
       window.setTimeout(function() {  
         $(".alert").fadeTo(3000, 0).slideUp(500, function() {  
           $(this).remove();  
         });  
       }, 1000);  
     });  
   </script>

   <script language="javascript">
     function validAngka(a)
     {
        if(!/^[0-9.]+$/.test(a.value))
        {
        a.value=a.value.substring(0,a.value.length-1000);
      }
     }
   </script>

   <script>
     function angka(evt){
      var CharCode = (evt.which)?evt.which:event.keyCode
      if (CharCode > 31 && (CharCode < 48||CharCode>57))
        return false;
      return true
     }
   </script>

<script>
  $(function () {

    $('.select2').select2()

  })
</script>


</body>
</html>
