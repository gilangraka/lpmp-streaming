<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; LPMP Jawatengah 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Peringatan !</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda ingin keluar dari dashboard ?.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                <a class="btn btn-primary" href="<?php echo base_url('Login/logout') ?>">Ya</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/template-admin/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template-admin/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/template-admin/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/template-admin/js/sb-admin-2.min.js'); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

<!-- Select2 -->
<script src="<?php echo base_url('assets/select2/js/select2.full.min.js'); ?>" type="text/javascript"></script>

<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });

    $(function() {
        //Initialize Select2 Elements
        $(".select2").select2()
    });

    $(document).ready(function() {
        $('.preloader').fadeOut();
    });

    $(document).ready(function() {
        $('.loading').click(function() {
            $('.preloader').fadeIn();
        })

    });

    function validasiFileThumbnail() {
        var inputFile = document.getElementById('thumbnail');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
        if (!ekstensiOk.exec(pathFile)) {
            alert('Silakan upload thumbnail dengan ekstensi .jpg/.png/.jpeg');
            inputFile.value = '';
            return false;
        }
    };

    function validasiFileVideo() {
        var inputFile = document.getElementById('video');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.mp4|\.mkv)$/i;
        if (!ekstensiOk.exec(pathFile)) {
            alert('Silakan upload video dengan ekstensi .mp4/.mkv');
            inputFile.value = '';
            return false;
        }
    };
</script>

</body>

</html>