 <!-- Main Footer -->
 <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Ver 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y');?> <a href="https://adminlte.io">Kukodisha</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Toast plugins -->
@jquery
@toastr_js
@toastr_render

<!-- DataTables  & Plugins -->
<script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('jszip/jszip.min.js')}}"></script>
<script src="{{asset('pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('datatables-buttons/js/buttons.colVis.min.js')}}"></script>



<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('plugins/dist/js/demo.js')}}"></script>
<!-- summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- dropzone -->
<script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>


<script>
  $(function () {
     //Initialize Select2 Elements
     $('.category').select2();

     //initilize datatable
     $("#item_list").Datatable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

     //Run summernote
     $('#item_description').summernote();

  });
</script>
</body>
</html>
