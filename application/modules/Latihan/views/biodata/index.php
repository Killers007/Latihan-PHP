
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <!-- begin:: Subheader -->
      <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title"><?php echo $title ?></h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc"><?php echo $this->session->user['nama'] ?></span>

              <!--   <a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                    Add New
                </a> -->

                <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                    <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                    </span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">

                    <a class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                        <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                        <span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                        <i class="flaticon2-calendar-1"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
    
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <?php echo form_open_multipart('', 'id="formData" class="kt-form kt-form--label-right"'); ?> 

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                       Profil <?php echo $this->session->user['nama'] ?>
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                          
                            &nbsp;
                            <button type="submit" class="btnSimpan btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-save"></i>
                                Simpan
                            </button>
                        </div>  
                    </div>      </div>
                </div>

                <div class="kt-portlet__body table-responsive">
                    <!--begin: Datatable -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="kt-portlet__body">
                                <div class="kt-portlet__body">
                                    <div class="form-group row">
                                        <div class="col-lg-12 text-center">
                                            <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                <div class="kt-avatar__holder" id="pegawaiFoto" style="background-image: url(&quot;<?php echo base_url('assets/media/users/default.jpg') ?>&quot;);"></div>
                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Ubah Foto">
                                                    <i class="fa fa-pen"></i>
                                                    <input type="file" name="pegawaiFoto" accept=".png, .jpg, .jpeg">
                                                </label>
                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </div>
                                            <div class="cleanError pegawaiFoto"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>NIP <span class="text-danger">*</span></label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pegawaiUsername" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
                                            </div>
                                            <div class="cleanError pegawaiUsername"></div>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label>Gelar Depan</label>
                                            <input type="text" class="form-control" name="pegawaiGelarDepan" placeholder="">
                                            <div class="cleanError pegawaiGelarDepan"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="">Nama Lengkap <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiNama" placeholder="">
                                            <div class="cleanError pegawaiNama"></div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="">Gelar Belakang</label>
                                            <input type="text" class="form-control" name="pegawaiGelarBelakang" placeholder="">
                                            <div class="cleanError pegawaiGelarBelakang"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-7">
                                            <label>Tempat lahir</label>
                                            <input type="text" class="form-control" name="pegawaiTempatLahir" placeholder="">
                                            <div class="cleanError pegawaiTempatLahir"></div>
                                        </div>
                                        <div class="col-lg-5">
                                            <label class="">Tanggal Lahir</label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control datePicker" readonly name="pegawaiTanggalLahir" placeholder="">
                                                <!-- <input type="text" class="form-control" readonly="" value="05/20/2017" id="kt_datepicker_3"> -->
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="cleanError pegawaiTanggalLahir"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Jabatan <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiJabatan" placeholder="">
                                            <div class="cleanError pegawaiJabatan"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="">Instansi <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiInstansi" placeholder="">
                                            <div class="cleanError pegawaiInstansi"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="">Pangkat Golongan <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiPangkatGolongan" placeholder="">
                                            <div class="cleanError pegawaiPangkatGolongan"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Alamat Rumah</label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pegawaiAlamat" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                            </div>
                                            <div class="cleanError pegawaiAlamat"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Alamat Kantor</label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pegawaiAlamatKantor" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                            </div>
                                            <div class="cleanError pegawaiAlamatKantor"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>No Hp <span class="text-info text-sm"><small>ex : 85291860735</small></span></label>
                                            <div class="kt-input-icon kt-input-icon--left">
                                                <input type="text" class="form-control" name="pegawaiNoHp" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                    <span>+62</span>
                                                </span>
                                            </div>
                                            <div class="cleanError pegawaiNoHp"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="pegawaiEmail" placeholder="">
                                            <div class="cleanError pegawaiEmail"></div>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Agama <span class="text-danger">*</span></label>
                                            <?php echo form_dropdown('pegawaiAgama', $selectAgama, '', ['class' => 'form-control kt-select2', 'style' => 'width: 100%']) ?>
                                            <div class="cleanError pegawaiAgama"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Pendidikan Terakhir <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiPendidikanTerakhir" placeholder="">
                                            <div class="cleanError pegawaiPendidikanTerakhir"></div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>

                        <button type="submit" onsubmit="return false" class="btnSimpan btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-save"></i>
                            Simpan
                        </button>
                    </div>  
                </form>
                <!--end: Datatable -->
            </div>
        </div>  </div>
    </div>
</div>         


<script type="text/javascript">
  $(document).ready(function() {

    $(document).on('submit', '#formData', function(event) {
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
                btnLoading('.btnSimpan');
                cleanError();
            },
            complete: function()
            {
                btnNormal('.btnSimpan');
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