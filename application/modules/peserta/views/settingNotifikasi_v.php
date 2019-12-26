<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>

                Informasi Personal           </h3>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        <?php echo $subTitle ?>                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

            <!--Begin::App-->
            <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                <!--Begin:: App Aside Mobile Toggle-->
                <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                    <i class="la la-close"></i>
                </button>
                <!--End:: App Aside Mobile Toggle-->

                <!--Begin:: App Aside-->
                <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside" style="opacity: 1;">
                    <!--begin:: Widgets/Applications/User/Profile1-->
                    <div class="kt-portlet ">
                        <div class="kt-portlet__head  kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body kt-portlet__body--fit-y">
                            <!--begin::Widget -->
                            <?php $this->load->view('template/sidebar_peserta') ?>
                     
                                        <!--end::Widget -->
                                    </div>
                                </div>
                                <!--end:: Widgets/Applications/User/Profile1-->

                            </div>
                            <!--End:: App Aside-->
                            <?php $nEmail = ($profile->pesertaEmailNotif == 0)?'':'checked' ?>
                            <?php $nWa = ($profile->pesertaWaNotif == 0)?'':'checked' ?>
                            <?php $nSystem = ($profile->pesertaSystemNotif == 0)?'':'checked' ?>
                            <!--Begin:: App Content-->
                            <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="kt-portlet kt-portlet--height-fluid">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title"><?php echo $subTitle ?></h3>
                                                </div>
                                            </div>
                                            <form class="kt-form kt-form--label-right">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-section__body">
                                                            <div class="row">
                                                                <label class="col-xl-3"></label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <h3 class="kt-section__title kt-section__title-sm">Setup Notification:</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-group-sm row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <span class="kt-switch">
                                                                        <label>
                                                                            <input type="checkbox" <?php echo $nEmail ?> value="1" name="pesertaEmailNotif">
                                                                            <span></span>
                                                                        </label>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                           <!--  <div class="form-group form-group-sm row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Whatsapp Notification</label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <span class="kt-switch">
                                                                        <label>
                                                                            <input type="checkbox" <?php echo $nWa ?> value="1" name="pesertaWaNotif">
                                                                            <span></span>
                                                                        </label>
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="form-group form-group-last row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">System Notification</label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <span class="kt-switch">
                                                                        <label>
                                                                            <input type="checkbox" <?php echo $nSystem ?> value="1" name="pesertaSystemNotif">
                                                                            <span></span>
                                                                        </label>
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>


                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-form__actions">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-3">
                                                                </div>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <button type="submit" class="btnSimpan btn btn-brand btn-bold">Save</button>&nbsp;
                                                                    <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> 
                                    </div>           
                                </div>
                                <!--End:: App Content-->
                            </div>
                            <!--End::App-->


                        </div>
                        <!-- end:: Content -->                      
                    </div>

                    <script type="text/javascript">

                        $(document).ready(function() {

                            $(document).on('submit', 'form', function(event) {
                                event.preventDefault();

                                var data = new FormData(this);

                                $.ajax({
                                    url: '<?php echo current_url() ?>/',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    cache: false,
                                    processData : false,
                                    contentType: false,
                                    data: data,
                                    beforeSend: function()
                                    {
                                        btnLoading('.btnSimpan');
                                        cleanError();
                                    },
                                    complete: function()
                                    {
                                        btnNormal('.btnSimpan');
                                    },
                                    success: function(res)
                                    {
                                        if (!res.status) 
                                        {
                                            getError(res)
                                        }
                                        else
                                        {
                                            toastr[res.status](res.message);
                                        }
                                    }
                                })

                            });

                            function getError(data)
                            {
                                $.each(data.error, function(index, el) 
                                {
                                    $('.'+index).html(el);
                                }); 
                            }

                            function cleanError()
                            {
                                $('.cleanError').html('');
                            }

                            var btnText;
                            function btnLoading(selector)
                            {
                                btnText = $(selector).html();
                                $(selector).html('<i class="fa fa-spinner fa-spin"></i> Loading .....');
                                $(selector).attr('disabled', 'true');
                            }

                            function btnNormal(selector)
                            {
                                $(selector).html(btnText);
                                $(selector).removeAttr('disabled');
                            }

                            toastConfig();
                            function toastConfig(){
                                toastr.options = {
                                    "closeButton": false,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": false,
                                    "positionClass": "toast-top-right",
                                    "preventDuplicates": true,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                }
                            }

                        });
                    </script>