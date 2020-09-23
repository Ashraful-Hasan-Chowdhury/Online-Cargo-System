<script src="{{asset('public/admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('public/admin/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('public/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>
<script src="{{asset('public/admin/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('public/admin/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset('public/admin/assets/js/custom.js')}}"></script>
<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="{{asset('public/admin/assets/js/scrollspyNav.js')}}"></script>

<!-- toastr -->
<script src="{{asset('public/admin/plugins/notification/snackbar/snackbar.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="{{asset('public/admin/assets/js/components/notification/custom-snackbar.js')}}"></script>
<!--  END CUSTOM SCRIPTS FILE  -->

<script>
    @if (Session::has('message'))
    Snackbar.show({
        text: "{{ Session::get('message') }}",
        pos: 'top-center',
    }); 
    @endif
    
</script>

{{-- Dt --}}
<script src="{{asset('public/admin/plugins/table/datatable/datatables.js')}}"></script>
<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="{{asset('public/admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
<script>
    $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
</script>
{{-- dt end --}}
{{-- Sweetalert --}}
<script src="{{ asset('public/sweetalert/sweetalert2.min.js') }}"></script>
<script>
    $(document).on("click","#delete",function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                  window.location.href= link;
              }
            })
            });
</script>
{{-- Sweetalert --}}
{{-- select2 --}}
<script src="{{asset('public/admin/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/select2/custom-select2.js')}}"></script>
{{-- select2 end--}}

{{-- File  upload --}}
<script src="{{asset('public/admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<script>
    //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
        //third upload
        var secondUpload = new FileUploadWithPreview('myThirdImage')
</script>
{{-- File Upload end --}}