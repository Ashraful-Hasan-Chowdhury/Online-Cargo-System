<!-- jQuery js -->
<script src="{{asset('public/user/plugins/jquery/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('public/user/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jQuery ui js -->
<script src="{{asset('public/user/plugins/jquery-ui-1.11.4/jquery-ui.js')}}"></script>
<!-- owl carousel js -->
<script src="{{asset('public/user/plugins/owl.carousel-2/owl.carousel.min.js')}}"></script>
<!-- jQuery appear -->
<script src="{{asset('public/user/plugins/jquery-appear/jquery.appear.js')}}"></script>
<!-- jQuery countTo -->
<script src="{{asset('public/user/plugins/jquery-countTo/jquery.countTo.js')}}"></script>
<!-- jQuery validation -->
<script src="{{asset('public/user/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<!-- gmap.js helper -->
<script src="http://maps.google.com/maps/api/js"></script>
<!-- gmap.js -->
<script src="{{asset('public/user/plugins/gmap.js')}}"></script>
<!-- mixit up -->
<script src="{{asset('public/user/plugins/jquery.mixitup.min.js')}}"></script>

<!-- revolution slider js -->
<script src="{{asset('public/user/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('public/user/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('public/user/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}">
</script>
<script src="{{asset('public/user/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}">
</script>
<script src="{{asset('public/user/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}">
</script>
<script src="{asset{(public/user/'plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}">
</script>
<script src="{{asset('public/user/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}">
</script>
<script src="{{asset('public/user/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}">
</script>
<script src="{{asset('public/user/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}">
</script>
<script src="{{asset('public/user/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}">
</script>
<script src="{{asset('public/user/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- fancy box -->
<script src="{{asset('public/user/plugins/fancyapps-fancyBox/source/jquery.fancybox.pack.js')}}"></script>
<!-- type script -->
<script src="{{asset('public/user/plugins/typed.js-master/dist/typed.min.js')}}"></script>

<!-- theme custom js  -->
<script src="{{asset('public/user/js/main.js')}}"></script>

{{-- File  upload --}}
<script src="{{asset('public/admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<script>
    //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage');
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage');
        //third upload
        var thirdUpload = new FileUploadWithPreview('myThirdImage');
        var thirdUpload = new FileUploadWithPreview('myFourthImage');
</script>
{{-- File Upload end --}}
{{-- Snackbar Notifier --}}
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
{{-- Snackbar Notifier --}}