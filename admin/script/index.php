<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script type="text/javascript">
  $(document).on('click', '.ubah-gallery', function() {
    var idfoto = $(this).data('id');
    var nama = $(this).data('nm');
    var foto = $(this).data('ft');
    
    $('modal-ubah #idfoto').val(idfoto);
    $('modal-ubah #nama').val(nama);
    $('modal-ubah #gambar').$attr("src","img/Gallery/" + foto);
  })

  $(document).ready(function(e){
    $('#form').on('submit', function(e){
      e.preventDefault();
      $.ajax({
        url:'modul/ubah_gallery.php',
        type:'POST',
        data:new FormData(this),
        contentType:false,
        cache:false,
        processData: false,
        success:function(pesan){
          $('.table').html(pesan);
        }
      });
    });
  })
</script>
<!-- <script src="js/demo.js"></> -->
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": false,
    //     "ordering": true,
    //     "info": true,
    //     "autoWidth": false,
    //     "responsive": true,
    // });
  });
</script>