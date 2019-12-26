<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>

                Notifikasi           </h3>

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
            <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app kt-inbox">
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
                    <div class="kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__view kt-inbox__view--shown-" id="kt_inbox_view" style="display: flex;">

                        <div class="kt-portlet__body kt-portlet__body--fit-x">
                            <div class="kt-inbox__subject">
                                <div class="kt-inbox__title">
                                    <h3 class="kt-inbox__text">Email Masuk</h3>
                                    <span class="kt-inbox__label kt-badge kt-badge--unified-danger kt-badge--bold kt-badge--inline">
                                        Inbox
                                    </span>
                                </div>

                            </div>

                            <div class="kt-inbox__messages">

                                <?php foreach ($getEmail as $key => $email): ?>

                                    <div class="kt-inbox__message <?php echo ($key == 0)?'kt-inbox__message--expanded':'' ?>">
                                        <div class="kt-inbox__head">
                                            <?php $fotoPegawai = ($email->pegawaiFoto == null)?base_url('assets/media/users/default.jpg'):base_url('assets/upload/images/'.$email->pegawaiFoto) ?>
                                            <span class="kt-media" data-toggle="expand" style="background-image: url('<?php echo $fotoPegawai ?>')">
                                                <span></span>
                                            </span>

                                            <div class="kt-inbox__info">
                                                <div class="kt-inbox__author" data-toggle="expand">
                                                    <a href="#" class="kt-inbox__name"><?php echo ($email->pegawaiNama == null)?'Administrator':$email->pegawaiNama ?></a>

                                                    <div class="kt-inbox__status">

                                                        <!-- <span class="kt-badge kt-badge--success kt-badge--dot"></span>  -->
                                                        <?php echo timeAgo($email->bctDate) ?>
                                                        <span class="kt-inbox__label kt-badge kt-badge--unified-brand kt-badge--bold kt-badge--inline">
                                                            DIKLAT <?php echo $email->diklatNama ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="kt-inbox__details">
                                                    <div class="kt-inbox__tome">
                                                        <span class="kt-inbox__label" data-toggle="dropdown">
                                                            to me <i class="flaticon2-down"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">
                                                            <table class="kt-inbox__details">
                                                                <tbody><tr>
                                                                    <td>from</td>
                                                                    <td><?php echo ($email->pegawaiNama == null)?'Administrator':$email->pegawaiNama ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>date:</td>
                                                                    <td><?php echo date_convert($email->bctDate)->formatFull;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>subject:</td>
                                                                    <td><?php echo $email->bctHeader ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>reply to:</td>
                                                                    <td><?php echo $profile->pesertaEmail ?></td>
                                                                </tr>
                                                            </tbody></table>
                                                        </div>
                                                    </div>

                                                    <div class="kt-inbox__desc" data-toggle="expand">
                                                        <?php $str = strip_tags($email->bctBody); ?>
                                                        <?php if (strlen($str) > 60): ?>
                                                            <?php echo substr($str, 0, 60).' ..... '  ?>
                                                            <?php else: ?>
                                                                <?php echo $str ?>
                                                            <?php endif ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="kt-inbox__actions">
                                                    <div class="kt-inbox__datetime">
                                                        <?php echo date_convert($email->bctDate)->formatFull; ?>
                                                    </div>

                                                               <!--  <div class="kt-inbox__group">
                                                                    <span class="kt-inbox__icon kt-inbox__icon--label kt-inbox__icon--label--on kt-inbox__icon--light" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="Star">
                                                                        <i class="flaticon-star"></i>
                                                                    </span>
                                                                    <span class="kt-inbox__icon kt-inbox__icon--label kt-inbox__icon--light" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="Mark as important">
                                                                        <i class="flaticon-add-label-button"></i>
                                                                    </span>
                                                                    <span class="kt-inbox__icon kt-inbox__icon--light" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="Reply">
                                                                        <i class="flaticon2-reply-1"></i>
                                                                    </span>
                                                                    <span class="kt-inbox__icon kt-inbox__icon--light" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="Settings">
                                                                        <i class="flaticon-more"></i>
                                                                    </span>
                                                                </div> -->
                                                            </div>
                                                        </div>

                                                        <div class="kt-inbox__body">
                                                            <?php echo $email->bctBody; ?>
                                                        </div>
                                                    </div>

                                                <?php endforeach ?>

                                            </div>

                                            <div class="kt-inbox__reply kt-inbox__reply--on">


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