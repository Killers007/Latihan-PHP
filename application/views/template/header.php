<!DOCTYPE html>

<html lang="en" >
<!-- begin::Head -->
<head><!--begin::Base Path (base relative path for assets of this page) -->
    <meta charset="utf-8"/>

    <title>
        <?php if ($infoNotifUnread != 0 && $this->session->user['role'] == 'peserta'): ?>
            (<?php echo $infoNotifUnread ?>)
        <?php endif ?>
        <?php echo $title ?></title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">        <!--end::Fonts -->
        <link href="<?php echo base_url(); ?>assets/css/demo1/pages/inbox/inbox.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/demo4/pages/pricing/pricing-1.css" rel="stylesheet" type="text/css" />
        <!--begin:: Global Mandatory Vendors -->
        <link href="<?php echo base_url(); ?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
        <!--end:: Global Mandatory Vendors -->
        <link href="<?php echo base_url(); ?>assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/demo4/pages/support-center/faq-2.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--begin:: Global Optional Vendors -->
        <link href="<?php echo base_url(); ?>assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
        <!--end:: Global Optional Vendors -->

        <link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/logos/favicon.ico" />
    </head>
    <body  style="background-image: url(<?php echo base_url(); ?>assets/media/demos/demo4/header.jpg); background-position: center top; background-size: 100% 350px;"  class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >

     <!-- begin::Page loader -->
     <style type="text/css">
      th.dt-center, td.dt-center{
        text-align: center;
    }
</style>
<!-- end::Page Loader -->        
<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
    <div class="kt-header-mobile__logo">
        <a href="demo4/index.html">
            <img alt="Logo" width="60px" src="<?php echo base_url() ?>assets/pemprov.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">

        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header  kt-header--fixed "  data-ktheader-minimize="on" >
                <div class="kt-container ">
                    <!-- begin:: Brand -->
                    <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                        <a class="kt-header__brand-logo" href="<?php echo base_url() ?>">
                            <img alt="Logo" width="60px" src="<?php echo base_url() ?>assets/pemprov.png" class="kt-header__brand-logo-default"/>
                            <img alt="Logo" width="60px" src="<?php echo base_url() ?>assets/pemprov.png" class="kt-header__brand-logo-sticky"/>
                        </a>        
                    </div>
                    <!-- end:: Brand -->        




                    <?php echo $this->load->view($sidebar) ?>



                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar kt-grid__item">
                     <?php echo $this->load->view($infoHeader) ?>
                 </div>
                 <!-- end:: Header Topbar -->
             </div>
         </div>
<!-- end:: Header -->