 <!-- Main Footer -->
 <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>



<!-- DataTables  & Plugins -->
<script src="{{asset('/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('/jszip/jszip.min.js')}}"></script>
<script src="{{asset('/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

@notifyJs
<x:notify-messages />
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(document).ready(function() {
      $('#category').select2();
  });
</script>
</body>
</html>
