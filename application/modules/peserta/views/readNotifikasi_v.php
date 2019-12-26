<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <?php $foto = ($profile->pesertaFoto == null)?base_url('assets/media/users/default.jpg'):base_url('assets/upload/images/'.$profile->pesertaFoto) ?>
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

                                    <div class="kt-grid__item kt-grid__item--fluid kt-app__content" id="kt_chat_content">
                                        <div class="kt-chat">
                                            <div class="kt-portlet kt-portlet--head-lg kt-portlet--last">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-chat__head ">
                                                        <div class="kt-chat__left">
                                                            <!--begin:: Aside Mobile Toggle -->
                                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md kt-hidden-desktop" id="kt_chat_aside_mobile_toggle">
                                                                <i class="flaticon2-open-text-book"></i>
                                                            </button>
                                                            <!--end:: Aside Mobile Toggle-->

                                                          
                                                        </div>

                                                        <div class="kt-chat__center">
                                                            <div class="kt-chat__label">
                                                                <a href="#" class="kt-chat__title">PANITIA</a>
                                                                <span class="kt-chat__status">
                                                                    <!-- <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active -->
                                                                </span>
                                                            </div>

                                                            <div class="kt-chat__pic kt-hidden">
                                                                <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Jason Muller">                              
                                                                    <img src="<?php echo base_url('assets/media/users/300_12.jpg') ?>" alt="image">               
                                                                </span>

                                                                <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Nick Bold">                              
                                                                    <img src="<?php echo base_url('assets/media/users/300_11.jpg') ?>" alt="image">               
                                                                </span>
                                                                <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Milano Esco">                              
                                                                    <img src="<?php echo base_url('assets/media/users/100_14.jpg') ?>" alt="image">               
                                                                </span>
                                                                <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Teresa Fox">                              
                                                                    <img src="<?php echo base_url('assets/media/users/100_4.jpg') ?>" alt="image">               
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="kt-chat__right">
                                                          
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="kt-portlet__body">
                                                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
                                                        <div class="kt-chat__messages bodyMessage">
                                                             <?php foreach ($notifikasiData as $key => $value): ?>

                                                                <?php $fotoPegawai = ($value->pegawaiFoto == null)?base_url('assets/media/users/default.jpg'):base_url('assets/upload/images/'.$value->pegawaiFoto) ?>

                                                                <?php if ($value->notifFrom == $this->session->user['user']): ?>
                                                                    <div class="kt-chat__message kt-chat__message--right">
                                                                        <div class="kt-chat__user">
                                                                            <span class="kt-chat__datetime"><?php echo '<br>'.timeAgo(date('Y-m-d H:i:s', strtotime($value->notifSend))) ?></span>
                                                                            <a href="#" class="kt-chat__username">You</a>
                                                                            <span class="kt-media kt-media--circle kt-media--sm"> 
                                                                                <img src="<?php echo $foto; ?>" alt="image">   
                                                                            </span>
                                                                        </div>
                                                                        <div class="kt-chat__text kt-bg-light-brand">
                                                                             <?php echo $value->notifContent ?>
                                                                        </div>
                                                                    </div>
                                                                <?php else: ?>
                                                                    
                                                                    <div class="kt-chat__message">
                                                                        <div class="kt-chat__user">
                                                                            <span class="kt-media kt-media--circle kt-media--sm"> 
                                                                                <img src="<?php echo $fotoPegawai; ?>" alt="image">   
                                                                            </span>
                                                                            <a href="#" class="kt-chat__username"><?php echo ($value->pegawaiNama == NULL)?'Administrator':$value->pegawaiNama ?></a>
                                                                            <span class="kt-chat__datetime"><?php echo '<br>'.timeAgo(date('Y-m-d H:i:s', strtotime($value->notifSend))) ?></span>
                                                                        </div>
                                                                        <div class="kt-chat__text kt-bg-light-success">
                                                                            <?php echo $value->notifContent ?>
                                                                        </div>
                                                                    </div>
                                                                <?php endif ?>

                                                               <?php endforeach ?>
                                                            
                                                            
                                                        </div>
                                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 504px; right: -2px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 259px;"></div></div></div>
                                                    </div>

                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-chat__input">
                                                            <div class="kt-chat__editor">
                                                                <textarea style="height: 50px" id="textContent" placeholder="Type here..."></textarea>
                                                            </div>
                                                            <div class="kt-chat__toolbar">
                                                                <div class="kt_chat__tools">
                                                                  <!--   <a href="#"><i class="flaticon2-link"></i></a>
                                                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                                                    <a href="#"><i class="flaticon2-photo-camera"></i></a> -->
                                                                </div>
                                                                <div class="kt_chat__actions">
                                                                    <button type="button" class="btnSend btn btn-brand btn-md btn-upper btn-bold kt-chat__reply">reply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                               </div>
                               <!--End::App-->


                           </div>
                           <!-- end:: Content -->                      
                       </div>

                       <script type="text/javascript">

                        $(document).ready(function() {

                            $(document).on('click', '.btnSend', function(event) {
                                event.preventDefault();

                                var content = $('#textContent').val();
                                
                                $.ajax({
                                   url: '<?php echo current_url() ?>/',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {'content': content},
                                    beforeSend: function()
                                    {
                                        btnLoading('.btnSend');
                                    },
                                    complete: function()
                                    {
                                        btnNormal('.btnSend');
                                    },
                                    success: function(res)
                                    {
                                        $('.bodyMessage').append( template(content) )
                                        toastr[res.status](res.message);
                                        $('#textContent').val('');
                                    }
                                })
                                
                            });


                            function template(content)
                            {
                                return `<div class="kt-chat__message kt-chat__message--right">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">Just Now</span>
                                                <a href="#" class="kt-chat__username">You</a>
                                                <span class="kt-media kt-media--circle kt-media--sm"> 
                                                    <img src="<?php echo $foto; ?>" alt="image">   
                                                </span>
                                            </div>
                                            <div class="kt-chat__text kt-bg-light-brand">
                                                `+content+`
                                            </div>
                                        </div>`
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