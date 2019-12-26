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

                <!--Begin:: App Content-->
                <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title"><?php echo $subTitle ?></h3>
                                    </div>
                                    <div class="kt-portlet__head-toolbar kt-hidden">
                                        <div class="kt-portlet__head-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-sellsy"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="kt-nav">
                                                        <li class="kt-nav__section kt-nav__section--first">
                                                            <span class="kt-nav__section-text">Quick Actions</span>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                                                <span class="kt-nav__link-text">Statistics</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                                <span class="kt-nav__link-text">Events</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                                                <span class="kt-nav__link-text">Reports</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-bell-1o"></i>
                                                                <span class="kt-nav__link-text">Notifications</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item">
                                                            <a href="#" class="kt-nav__link">
                                                                <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                                                <span class="kt-nav__link-text">Files</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="formPassword" class="kt-form kt-form--label-right">
                                    <div class="kt-portlet__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                                    <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                                    <div class="alert-text">
                                                        Konfigurasikan kata sandi pengguna untuk kedaluwarsa secara berkala. Pengguna perlu peringatan bahwa kata sandi mereka akan kedaluwarsa, <br> atau mereka mungkin secara tidak sengaja dikunci dari sistem!</div>
                                                        <div class="alert-close">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Password Lama</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input type="password" class="form-control" name="userPasswordLama" value="" placeholder="">
                                                            <div class="cleanError userPasswordLama"></div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Password Baru</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input type="password" class="form-control" name="userPassword" value="" placeholder="">
                                                            <div class="cleanError userPassword"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Ulangi Password</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input type="password" class="form-control" name="userPasswordVerify" value="" placeholder="">
                                                            <div class="cleanError userPasswordVerify"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <div class="row">
                                                    <div class="col-lg-3 col-xl-3">
                                                    </div>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <button type="submit" id="btnChangePassword" class="btn btn-brand btn-bold">Ubah Password</button>&nbsp;
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

                $(document).on('submit', '#formPassword', function(event) {
                    event.preventDefault();

                    var data = new FormData(this);

                    $.ajax({
                        url: '<?php echo current_url() ?>',
                        type: 'POST',
                        dataType: 'JSON',
                        cache: false,
                        processData : false,
                        contentType: false,
                        data: data,
                        beforeSend: function()
                        {
                            btnLoading('#btnChangePassword');
                            cleanError();
                        },
                        complete: function()
                        {
                            btnNormal('#btnChangePassword');
                        },
                        success: function(res)
                        {
                            if (res.status == 'validate') 
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