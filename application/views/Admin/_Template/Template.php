<?php
//$getUser = $this->session->userdata('session_user');
//$getGrup = $this->session->userdata('session_grup');
?>

<!DOCTYPE html>
<html>
<?php echo @$head; ?>

<body>
    <div id="wrapper">
    <?php echo @$sidebar; ?>

    <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
    <?php echo @$topbar; ?>
    <?php echo @$content; ?>    
    </div>

    <?php echo @$footer; ?>
    </div>
    </div>

    <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('login/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
     
  <!-- Bootstrap core JavaScript-->
  <script src="koleksi/vendor/jquery/jquery.min.js"></script>
  <script src="koleksi/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="koleksi/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="koleksi/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="koleksi/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="koleksi/js/demo/chart-area-demo.js"></script>
  <script src="koleksi/js/demo/chart-pie-demo.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="koleksi/vendor/jquery/jquery.min.js"></script>
  <script src="koleksi/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="koleksi/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="koleksi/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="koleksi/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="koleksi/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="koleksi/js/demo/datatables-demo.js"></script>

</body>
</html>