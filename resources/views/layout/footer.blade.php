

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}',
    })
</script>
@endif
@if(session('succses'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Sukses',
    text: '{{ session('succses') }}',
})
</script>
@endif

<script>
    
    // Popup disable
    $(document).on("click", ".disable-link", function(e) {
        e.preventDefault();
        url = $(this).attr("href");
        swal({
                title: "Yakin akan menonaktifkan data ini?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn btn-danger',
                cancelButtonClass: 'btn btn-success',
                buttonsStyling: false,
                confirmButtonText: "Non Aktifkan",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: url,
                        success: function(resp) {
                            window.location.href = url;
                        }
                    });
                }
                return false;
            });
    });

    // Popup approval
    $(document).on("click", ".approval-link", function(e) {
        e.preventDefault();
        url = $(this).attr("href");
        swal({
                title: "Anda yakin ingin menyetujui data ini?",
                type: "info",
                showCancelButton: true,
                confirmButtonClass: 'btn btn-danger',
                cancelButtonClass: 'btn btn-success',
                buttonsStyling: false,
                confirmButtonText: "Ya, Setujui",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: url,
                        success: function(resp) {
                            window.location.href = url;
                        }
                    });
                }
                return false;
            });
    });
</script>
</div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.content-wrapper -->



<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<!-- Popper JS -->
<script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Defaultmenu JS -->
<script src="{{ asset('assets/js/defaultmenu.min.js')}}"></script>

<!-- Node Waves JS-->
<script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>

<!-- Sticky JS -->
<script src="{{ asset('assets/js/sticky.js')}}"></script>

<!-- Simplebar JS -->
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/js/simplebar.js')}}"></script>

<!-- Color Picker JS -->
<script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>



<!-- JSVector Maps JS -->
<script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

<!-- JSVector Maps MapsJS -->
<script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

<!-- Apex Charts JS -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- Chartjs Chart JS -->
<script src="{{ asset('assets/libs/chart.js/chart.min.js')}}"></script>

<!-- index -->
<script src="{{ asset('assets/js/index.js')}}"></script>


<!-- Custom-Switcher JS -->
<script src="{{ asset('assets/js/custom-switcher.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js')}}"></script>

<script src="{{ asset('assets/js/show-password.js')}}"></script>
<script src="{{ asset('assets/sweetalert/js/sweetalert.min.js') }}"></script>


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <!-- Datatables Cdn -->
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="{{ asset('assets/js/datatables.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <!-- Select2 Cdn -->
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <!-- Internal Select-2.js -->
   <script src="{{asset('assets/js/select2.js')}}"></script>

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Alerts JS -->
    <script src="{{asset('assets/js/alerts.js')}}"></script>
        <!-- Prism JS -->
        <script src="{{asset('assets/libs/prismjs/prism.js')}}"></script>
        <script src="{{asset('assets/js/prism-custom.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(function() {
        //Initialize Select2 Elements
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        })

        $('.mselect2').select2({
            dropdownParent: $('.Tambah')
        });

        $('.checkbox-toggle').click(function() {
            var clicks = $(this).data('clicks')
            if (clicks) {
                //Uncheck all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass(
                    'fa-square')
            } else {
                //Check all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass(
                    'fa-check-square')
            }
            $(this).data('clicks', !clicks)
        })

        //Handle starring for glyphicon and font awesome
        $('.mailbox-star').click(function(e) {
            e.preventDefault()
            //detect type
            var $this = $(this).find('a > i')
            var glyph = $this.hasClass('glyphicon')
            var fa = $this.hasClass('fa')

            //Switch states
            if (glyph) {
                $this.toggleClass('glyphicon-star')
                $this.toggleClass('glyphicon-star-empty')
            }

            if (fa) {
                $this.toggleClass('fa-star')
                $this.toggleClass('fa-star-o')
            }
        })
    })
</script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>
<!-- page script -->

<script>
   
    $(document).on("click", ".delete-link", function(e) {
           e.preventDefault();
           url = $(this).attr("href");
           Swal.fire({
     title: "Apakah Yakin Untuk Menghapus Data?",
     text: "Anda Tidak Dapat Mengembalikan Data ini!",
     icon: "warning",
     showCancelButton: true,
     confirmButtonColor: "#3085d6",
     cancelButtonColor: "#d33",
     confirmButtonText: "Delete"
   }).then((result) => {
     if (result.isConfirmed) {
        window.location.href = url
     
     }
   });
       });
   </script>
@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
        })
    </script>
@endif
@if(session('succses'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: '{{ session('succses') }}',
    })
</script>
@endif


</body>

</html>
