    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/admin/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/admin/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/admin/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/demo/chart-pie-demo.js'); ?>"></script>

     <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/admin/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/admin/js/demo/datatables-demo.js'); ?>"></script>

    <!-- Dropify -->
    <script src="<?php echo base_url('assets/dropify/dist/js/dropify.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/dropify/dist/js/dropify.min.js'); ?>" type="text/javascript"></script>
    <!-- Sweet-alert -->
    <script src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/sweetalert/sweetalert.js'); ?>"></script>

  </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){

        $('.dropify-lawyer').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih foto',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error',
            }
        });

    });
</script>