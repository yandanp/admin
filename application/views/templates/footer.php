<!-- ======= Footer ======= -->
  <footer id="footer" class="footer fixed-bottom">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/'); ?>admin/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
        //Checkbox toggle all
        $('.toggle-checkbox').click( function () {
            let target = $(this).data('toggle-checkbox');
            $('input[class*="'+target+'"]').prop('checked', this.checked);
        });
    });
</script>
</body>

</html>