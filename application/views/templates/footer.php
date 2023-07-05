<!-- ======= Footer ======= -->
    
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">     
      <a href="https://fasilkom.umri.ac.id/"
      target="_blank">Fasilkom UMRI</a>.
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!-- <script src="<?php echo base_url('assets/'); ?>admin/vendor/apexcharts/apexcharts.min.js"></script> -->
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="<?php echo base_url('assets/'); ?>admin/vendor/chart.js/chart.umd.js"></script> -->
  <!-- <script src="<?php echo base_url('assets/'); ?>admin/vendor/echarts/echarts.min.js"></script> -->
  <!-- <script src="<?php echo base_url('assets/'); ?>admin/vendor/quill/quill.min.js"></script> -->
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/simple-datatables/simple-datatables.js"></script>
  <!-- <script src="<?php echo base_url('assets/'); ?>admin/vendor/tinymce/tinymce.min.js"></script> -->
  <script src="<?php echo base_url('assets/'); ?>admin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/'); ?>admin/js/main.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

  <script>
    $(document).ready(function () {
        //Checkbox toggle all
        $('.toggle-checkbox').click( function () {
            let target = $(this).data('toggle-checkbox');
            $('input[class*="'+target+'"]').prop('checked', this.checked);
        });
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('.hapus').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah anda yakin',
            text: "Data akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74c3c',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })

    });
});
</script>
</body>

</html>