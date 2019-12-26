<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <?php $foto = ($profile->pesertaFoto == null)?base_url('assets/media/users/default.jpg'):base_url('assets/upload/images/'.$profile->pesertaFoto) ?>
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
                                                <div class="kt-portlet">
                                                    <div class="kt-portlet__head">
                                                        <div class="kt-portlet__head-label">
                                                            <h3 class="kt-portlet__head-title"><?php echo $subTitle ?></h3>
                                                        </div>
                                                    </div>

                                                    <?php echo form_open_multipart('', 'id="formData" class="kt-form kt-form--label-right"'); ?> 
                                                    <div class="kt-portlet__body">
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">

                                                                <div class="form-group row">
                                                                    <div class="col-lg-12 text-center">
                                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                                            <div class="kt-avatar__holder" id="pesertaFoto" style="background-image: url(&quot;<?php echo $foto ?>&quot;);"></div>
                                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Ubah Foto">
                                                                                <i class="fa fa-pen"></i>
                                                                                <input type="file" name="pesertaFoto" accept=".png, .jpg, .jpeg">
                                                                            </label>
                                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
                                                                                <i class="fa fa-times"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="cleanError pesertaFoto"></div>
                                                                    </div>
                                                                </div> 

                                                                <div class="form-group row">
                                                                    <div class="col-lg-3">
                                                                        <label>Gelar Depan</label>
                                                                        <input type="text" class="form-control" name="pesertaGelarDepan" value="<?php echo html_escape($profile->pesertaGelarDepan); ?>" placeholder="">
                                                                        <div class="cleanError pesertaGelarDepan"></div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label class="">Nama Lengkap <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" name="pesertaNama" value="<?php echo html_escape($profile->pesertaNama); ?>" placeholder="">
                                                                        <div class="cleanError pesertaNama"></div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <label class="">Gelar Belakang</label>
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaGelarBelakang); ?>" name="pesertaGelarBelakang" placeholder="">
                                                                        <div class="cleanError pesertaGelarBelakang"></div>
                                                                    </div>
                                                                </div> 
                                                                <div class="form-group row">
                                                                    <div class="col-lg-7">
                                                                        <label>Tempat lahir</label>
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaTempatLahir); ?>" name="pesertaTempatLahir" placeholder="">
                                                                        <div class="cleanError pesertaTempatLahir"></div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <label class="">Tanggal Lahir</label>
                                                                        <div class="input-group date">
                                                                            <input type="text" class="form-control datePicker" value="<?php echo html_escape($profile->pesertaTanggalLahir); ?>" readonly name="pesertaTanggalLahir" placeholder="">
                                                                            <!-- <input type="text" class="form-control" readonly="" value="05/20/html_escape(2017"); id="kt_datepicker_3"> -->
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cleanError pesertaTanggalLahir"></div>
                                                                    </div>
                                                                </div> 
                                                                <div class="form-group row">
                                                                    <div class="col-lg-4">
                                                                        <label>Jabatan <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaJabatan); ?>" name="pesertaJabatan" placeholder="">
                                                                        <div class="cleanError pesertaJabatan"></div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label class="">Instansi <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaInstansi); ?>" name="pesertaInstansi" placeholder="">
                                                                        <div class="cleanError pesertaInstansi"></div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label class="">Pangkat Golongan <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaPangkatGolongan); ?>" name="pesertaPangkatGolongan" placeholder="">
                                                                        <div class="cleanError pesertaPangkatGolongan"></div>
                                                                    </div>
                                                                </div> 
                                                                <div class="form-group row">
                                                                    <div class="col-lg-6">
                                                                        <label>Alamat Rumah</label>
                                                                        <div class="kt-input-icon">
                                                                            <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaAlamat); ?>" name="pesertaAlamat" placeholder="">
                                                                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                                        </div>
                                                                        <div class="cleanError pesertaAlamat"></div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label>Alamat Kantor</label>
                                                                        <div class="kt-input-icon">
                                                                            <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaAlamatKantor); ?>" name="pesertaAlamatKantor" placeholder="">
                                                                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                                        </div>
                                                                        <div class="cleanError pesertaAlamatKantor"></div>
                                                                    </div>
                                                                </div> 
                                                                <div class="form-group row">
                                                                    <div class="col-lg-6">
                                                                        <label>No Hp <span class="text-info text-sm"><small>ex : 85291860735</small></span></label>
                                                                        <div class="kt-input-icon kt-input-icon--left">
                                                                            <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaNoHp); ?>" name="pesertaNoHp" placeholder="">
                                                                            <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                                                <span>+62</span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="cleanError pesertaNoHp"></div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label>Email</label>
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaEmail); ?>" name="pesertaEmail" placeholder="">
                                                                        <div class="cleanError pesertaEmail"></div>
                                                                    </div>
                                                                </div>   
                                                                <div class="form-group row">
                                                                    <div class="col-lg-6">
                                                                        <label>Agama <span class="text-danger">*</span></label>
                                                                        <?php echo form_dropdown('pesertaAgama', $selectAgama, $profile->pesertaAgama, ['class' => 'form-control kt-select2', 'style' => 'width: 100%']) ?>
                                                                        <div class="cleanError pesertaAgama"></div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label>Pendidikan Terakhir <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaPendidikanTerakhir); ?>" name="pesertaPendidikanTerakhir" placeholder="">
                                                                        <div class="cleanError pesertaPendidikanTerakhir"></div>
                                                                    </div>
                                                                </div>   

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-form__actions text-center">
                                                            <div class="row">
                                                                <div class="pull-right">
                                                                    <button type="submit" class=" btnSimpan btn btn-success">Simpan</button>&nbsp;
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

                            var tanggal = '<?php echo $profile->pesertaTanggalLahir ?>';

                            $('.datePicker').val(moment(tanggal).format('dddd, D MMMM YYYY'));

                            $('.datePicker').datepicker({
                                rtl: KTUtil.isRTL(),
                                todayHighlight: true,
                                orientation: "bottom left",
                            }).on('hide', function(e) {
                                $('.datePicker').val(moment(tanggal).format('dddd, D MMMM YYYY'));
                            });;

                            $(document).on('change', '.datePicker', function(event) {
                                tanggal = $(this).val();

                                $('.datePicker').val(moment(tanggal).format('dddd, D MMMM YYYY'));
                            });

                            $(document).on('keyup', 'input[name="pesertaEmail"]', function(event) {
                                text = $(this).val();

                                $('#emailAddress').text(text);
                            });

                            $(document).on('keyup', 'input[name="pesertaNoHp"]', function(event) {
                                text = $(this).val();

                                $('#phoneNumber').text(text);
                            });

                            $(document).on('keyup', 'input[name="pesertaNama"]', function(event) {
                                text = $(this).val();

                                $('#namaLengkap').text(text);
                            });

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