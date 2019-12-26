<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<?php
if (isset($_SERVER['HTTP_HOST']) && preg_match('/^((\[[0-9a-f:]+\])|(\d{1,3}(\.\d{1,3}){3})|[a-z0-9\-\.]+)(:\d+)?$/i', $_SERVER['HTTP_HOST']))
{
  $base_url = (is_https() ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST']
    .substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], basename($_SERVER['SCRIPT_FILENAME'])));
}
else
{
  $base_url = 'http://localhost/';
}
?>
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="../../../../"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Terjadi Kesalahan Server</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">        <!--end::Fonts -->

        
                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="<?php echo $base_url; ?>assets/css/demo4/pages/error/error-4.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
        
        <!--begin:: Global Mandatory Vendors -->
<link href="<?php echo $base_url; ?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="<?php echo $base_url; ?>assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url; ?>assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles(used by all pages) -->
                    
                    <link href="<?php echo $base_url; ?>assets/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

        <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/media/logos/favicon.ico" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  style="background-image: url(<?php echo $base_url; ?>assets/media/demos/demo4/header.jpg); background-position: center top; background-size: 100% 350px;"  class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >

                   <!-- begin::Page loader -->
  
<!-- end::Page Loader -->        
      <!-- begin:: Page -->
  <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-error-v4" style="background-image: url(<?php echo $base_url; ?>assets/media//error/bg4.jpg);">
  <div class="kt-error_container">
    <h1 class="kt-error_number">
      500    
    </h1>   
    <p class="kt-error_title">
      ERROR
    </p>
    <p class="kt-error_description">
            <?php echo str_replace(array('<p>', '</p>'), array('', ''), $message); ?>
    </p>     
  </div>   
</div>  </div>
  
<!-- end:: Page -->


        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#366cf3","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

      <!--begin:: Global Mandatory Vendors -->
<script src="<?php echo $base_url; ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="<?php echo $base_url; ?>assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="<?php echo $base_url; ?>assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
               
             <script src="<?php echo $base_url; ?>assets/js/demo4/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

        
            </body>
    <!-- end::Body -->
</html>

          