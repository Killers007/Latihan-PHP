
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
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Datatable <?php echo $title ?>
                    </h3>
                </div>
             <!--    <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-download"></i> Export   
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Choose an option</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-print"></i>
                                                <span class="kt-nav__link-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="<?php echo current_url() ?>/excel" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                <span class="kt-nav__link-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                <span class="kt-nav__link-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            &nbsp;
                            <a href="#" onclick="setTitle('Tambah', 'Tambah')" data-toggle="modal" data-target="#modal-edit" class="btnShowModal btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                Tambah Data
                            </a>
                        </div>  
                    </div>      </div> -->
                </div>

                <div class="kt-portlet__body table-responsive">
                    <!--begin: Datatable -->
                    <table id="table" class="table  table-checkable">
                        <thead>
                            <tr>
                                <th width="1px" class="text-center">Nama</th>
                                <th width="1px" class="text-center">NIP</th>
                                <th width="1px" class="text-center">Detail</th>
                                <!-- <th>NIP</th> -->
                                <th>Nama</th>
                                <th>Pangkat Golongan</th>
                                <th>Jabatan</th>
                                <th>Instansi</th>
                                <!-- <th style="min-width: 70px; max-width: 70px; width: 70px;" class="text-center">Aksi</th> -->
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>

                    </table>
                    <!--end: Datatable -->
                </div>
            </div>  </div>
            <!-- end:: Content -->     
        </div>
    </div>         


    <!--begin::Modal-->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <?php echo form_open_multipart('', 'id="formData" class="kt-form kt-form--label-right"'); ?> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span class="modalLabel"></span> Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                 <div class="row">
                    <div class="col-md-12">
                            <div class="kt-portlet__body">
                                <div class="kt-portlet__body">
                                    <div class="form-group row">
                                        <div class="col-lg-12 text-center">
                                            <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                <div class="kt-avatar__holder" id="pesertaFoto" style="background-image: url(&quot;<?php echo base_url('assets/media/users/default.jpg') ?>&quot;);"></div>
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
                                    <!-- <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>NIP <span class="text-danger">*</span></label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pesertaNik" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
                                            </div>
                                            <div class="cleanError pesertaNik"></div>
                                        </div>
                                    </div>   --> 
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label>Gelar Depan</label>
                                            <input type="text" class="form-control" name="pesertaGelarDepan" placeholder="">
                                            <div class="cleanError pesertaGelarDepan"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="">Nama Lengkap <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pesertaNama" placeholder="">
                                            <div class="cleanError pesertaNama"></div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="">Gelar Belakang</label>
                                            <input type="text" class="form-control" name="pesertaGelarBelakang" placeholder="">
                                            <div class="cleanError pesertaGelarBelakang"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-7">
                                            <label>Tempat lahir</label>
                                            <input type="text" class="form-control" name="pesertaTempatLahir" placeholder="">
                                            <div class="cleanError pesertaTempatLahir"></div>
                                        </div>
                                        <div class="col-lg-5">
                                            <label class="">Tanggal Lahir</label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control datePicker" name="pesertaTanggalLahir" placeholder="">
                                                <!-- <input type="text" class="form-control" readonly="" value="05/20/2017" id="kt_datepicker_3"> -->
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
                                            <input type="text" class="form-control" name="pesertaJabatan" placeholder="">
                                            <div class="cleanError pesertaJabatan"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="">Instansi <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pesertaInstansi" placeholder="">
                                            <div class="cleanError pesertaInstansi"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="">Pangkat Golongan <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pesertaPangkatGolongan" placeholder="">
                                            <div class="cleanError pesertaPangkatGolongan"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Alamat Rumah</label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pesertaAlamat" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                            </div>
                                            <div class="cleanError pesertaAlamat"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Alamat Kantor</label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pesertaAlamatKantor" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                            </div>
                                            <div class="cleanError pesertaAlamatKantor"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>No Hp <span class="text-info text-sm"><small>ex : 85291860735</small></span></label>
                                            <div class="kt-input-icon kt-input-icon--left">
                                                <input type="text" class="form-control" name="pesertaNoHp" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                    <span>+62</span>
                                                </span>
                                            </div>
                                            <div class="cleanError pesertaNoHp"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="pesertaEmail" placeholder="">
                                            <div class="cleanError pesertaEmail"></div>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Agama <span class="text-danger">*</span></label>
                                            <?php echo form_dropdown('pesertaAgama', $selectAgama, '', ['class' => 'form-control kt-select2', 'style' => 'width: 100%']) ?>
                                            <div class="cleanError pesertaAgama"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Pendidikan Terakhir <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pesertaPendidikanTerakhir" placeholder="">
                                            <div class="cleanError pesertaPendidikanTerakhir"></div>
                                        </div>
                                    </div>   
                                    

                                    <!-- <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label><span class="text-danger">* Wajib di isi</span></label>
                                        </div>
                                    </div>     --> 
                                </div>
                            </div>
                    </div>

                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btnSimpan"><span class="modalSimpan"></span></button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin menghapus data?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body modalDeleteBody">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger btnConfirmDelete">Delete</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

<!-- <div class="row">
    <div class="col-md-2">
        <div class="text-center">
            <img src="https://keenthemes.com/metronic/preview/assets/media/users/100_14.jpg" class="rounded-circle kt-marginless" alt="photo">
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-sm-2">
                <b>Agama</b>
            </div>
            <div class="col-sm-10">
                : `+d.agamaNama+`
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <b>No Hp</b>
            </div>

            <div class="col-sm-10">
                : `+d.pesertaNoHp+`
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <b>Email</b>
            </div>

            <div class="col-sm-10">
                : `+d.pesertaEmail+`
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <b>Alamat</b>
            </div>

            <div class="col-sm-10">
                : `+d.pesertaAlamat+`
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <b>Alamat Kantor</b>
            </div>

            <div class="col-sm-10">
                : `+d.pesertaAlamatKantor+`
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <b>TTL</b>
            </div>

            <div class="col-sm-10">
                : `+d.pesertaTempatLahir+`, `+moment(d.pesertaTanggalLahir).locale('id').format('dddd D MMMM YYYY')+`
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <b>Pendidikan Terakhir</b>
            </div>

            <div class="col-sm-10">
                : `+d.pesertaPendidikanTerakhir+`
            </div>
        </div>

    </div>
</div> -->


<script type="text/javascript">
    function setTitle(title, button)
    {
        $('.modalSimpan').html(button);
        $('.modalLabel').html(title);
    }

    $(document).ready(function() {

        var dataFull;
        var tanggal;

        $('.datePicker').datepicker({
            rtl: KTUtil.isRTL(),
            todayHighlight: true,
            orientation: "bottom left",
        }).on('hide', function(e) {
            $('.datePicker').val(moment(tanggal).locale('id').format('D MMMM YYYY'));
        });;

        $(document).on('change', '.datePicker', function(event) {
            tanggal = $(this).val();

            $('.datePicker').val(moment(tanggal).locale('id').format('D MMMM YYYY'));
        });


        oTable = $('#table').dataTable({
            processing: true,
            serverSide: true,
            scrollX: false,
            lengthMenu: [15, 30],
            order: [[1, "asc"]],
            'searching'   : true,
            // pagingType: 'numbers',
            language:{
                "search":"Pencarian : ",
                "info":           "<b>Menampilkan _START_ sampai _END_ dari _TOTAL_ Data</b>",

            },
            ajax: {
                'type' : 'GET',
                'url' : '<?php echo current_url();?>',
                'dataSrc': function(json)
                {
                    return dataFull = json.data;
                },
            },
            columnDefs: [{visible: false, target: 0}],
            columns: [
            {data: 'pesertaNama'},
            {data: 'pesertaNik'},
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    var btnDetail =  `<a class="details-control btn btn-sm btn-clean btn-icon btn-icon-md">
                    <i style="color: #20c997;" class="la la-toggle-off"></i></a>`;

                    return btnDetail;
                }
            },
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    var text = '';
                    var foto = (data.pesertaFoto == null)?'./assets/media/users/default.jpg':'<?php echo base_url('assets/upload/images') ?>/'+data.pesertaFoto;

                    text += `<div class="kt-user-card-v2">
                    <div class="kt-user-card-v2__pic">
                    <img src="`+foto+`" width="90px" height="90px" class="m-img-rounded kt-marginless" alt="photo">
                    </div>
                    <div class="kt-user-card-v2__details">
                    <span class="kt-user-card-v2__name">`+ data.pesertaGelarDepan+' '+data.pesertaNama+' '+data.pesertaGelarBelakang+`</span>
                    <a href="#" class="kt-user-card-v2__email kt-link">`+data.pesertaNik+`</a>
                    </div>
                    </div>`;

                    return text;
                }
            },
            {data: 'pesertaPangkatGolongan'},
            {data: 'pesertaJabatan'},
            {data: 'pesertaInstansi'},
            // {
            //     data: null, searchable: false, orderable: false, render: function (data) {

            //         var btnUbah =  `<a onclick="setTitle('Perbaharui', 'Perbaharui')" data-id="`+data.pesertaNik+`" class="btnEdit btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
            //         <i style="color: #366CF3;"class="la la-edit"></i>
            //         </a> `;

            //         var btnDelete =  `<a data-id="`+data.pesertaNik+`" class="btnDelete btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
            //         <i style="color: red;" class="la la-trash"></i>
            //         </a> `;

            //         return btnUbah+btnDelete;
            //     }
            // },
            ],
        });

        oTable.fnSetColumnVis(0,false,false);
        oTable.fnSetColumnVis(1,false,false);

        $('tbody').on('click', 'td a.details-control', function () {
            var tr = $(this).closest('tr');
            var row = oTable.api().row( tr );

            if ( row.child.isShown() ) {
                $(this).html('<i style="color: #20c997;" class="la la-toggle-off"></i>')
                row.child.hide('slow');
                tr.removeClass('shown');
            }
            else {
                row.child( format(row.data()) ).show();
                tr.addClass('shown');

                $('[data-toggle="tooltip"]').tooltip();  
                $(this).html('<i style="color: #20c997;"  class="la la-toggle-on"></i>')

            }
        } 
        );

        function format ( d ) {
            var text = '';
            var foto = (d.pesertaFoto == null)?'./assets/media/users/default.jpg':'<?php echo base_url('assets/upload/images') ?>/'+d.pesertaFoto;
            var tentang = (d.pesertaTentang == null)?'':d.pesertaTentang;

            text += `<div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget kt-widget--user-profile-3">
                                <div class="kt-widget__top">
                                    <div class="kt-widget__media kt-hidden-">
                                        <img src="`+foto+`" alt="image">
                                    </div>
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JM
                                    </div>
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__head">
                                            <a href="#" class="kt-widget__username">
                                                `+d.pesertaGelarDepan+' '+d.pesertaNama+' '+d.pesertaGelarBelakang+`    
                                                <i class="flaticon2-correct kt-font-success"></i>                       
                                            </a>

                                            <div class="kt-widget__action">
                                                <button type="button" data-id="`+d.pesertaNik+`" class="btnDelete btn btn-label-danger btn-sm btn-upper">Delete</button>&nbsp;
                                                <button type="button" onclick="setTitle('Perbaharui', 'Perbaharui')" data-id="`+d.pesertaNik+`" class="btnEdit btn btn-brand btn-sm btn-upper">Update</button>
                                            </div>
                                        </div>

                                        <div class="kt-widget__subhead">
                                            <a href="#"><i class="la la-key"></i>`+d.pesertaNik+`</a>
                                            <a href="#"><i class="flaticon2-new-email"></i>`+d.pesertaEmail+`</a>
                                            <a href="#"><i class="fa fa-user-tie"></i>`+d.pesertaJabatan+` </a>
                                            <a href="#"><i class="fa fa-phone-alt"></i>+62 `+d.pesertaNoHp+` </a>
                                        </div>

                                        <div class="kt-widget__info">
                                            <div class="kt-widget__desc">
                                                `+tentang+`
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                   <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-confetti"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Pangkat/ Golongan</span>
                                            <span class="kt-widget__value">`+d.pesertaPangkatGolongan+`</span>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-confetti"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Instansi</span>
                                            <span class="kt-widget__value">`+d.pesertaInstansi+`</span>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-confetti"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Pendidikan Terakhir</span>
                                            <span class="kt-widget__value">`+d.pesertaPendidikanTerakhir+`</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-confetti"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Alamat</span>
                                            <span class="kt-widget__value">`+d.pesertaAlamat+`</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="flaticon-confetti"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Alamat Kantor</span>
                                            <span class="kt-widget__value">`+d.pesertaAlamatKantor+`</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>`;

            return text;
        }

        $(document).on('click', '.btnShowModal', function(event) {
            id = '';

            cleanError();
            $('#formData').trigger('reset');
            $('select').trigger("chosen:updated").change();
        });

        var id = '';
        $(document).on('click', '.btnEdit', function(event) {
            id = $(this).data('id');
            cleanError();

            $('#modal-edit').modal('show');

            find = dataFull.find(seep => seep.pesertaNik == id);


            $.each(find, function(index, el) 
            {

                if (index == 'pesertaFoto') {
                    $('#pesertaFoto').attr("style", 'background-image: url("<?php echo base_url('assets/upload/images') ?>/'+el+'")');
                }
                else
                {
                    $('input[name="'+index+'"]').val(el);
                    $('select[name="'+index+'"]').val(el);
                    $('select[name="'+index+'"]').trigger("chosen:updated").change();
                }
            }); 

            $('.datePicker').val(moment(find.pesertaTanggalLahir).locale('id').format('D MMMM YYYY'));
        });


        $(document).on('click', '.btnDelete', function(event) {
            id = $(this).data('id');
            $('#modal-delete').modal('show');

            find = dataFull.find(seep => seep.pesertaNik == id);

            template(find);
        });

        function template(data)
        {
            var txt = `<div class="table-responsive">
            <table class="table table-hover">
            <tbody>`;

            var label = ['NIP', 'Nama', 'Jabatan'];
            var key   = ['pesertaNik', 'pesertaNama', 'pesertaJabatan'];

            $.each(key, function(index, el) 
            {
                if (data[el]) 
                {
                    txt += `
                    <tr>
                    <th width="30%">`+label[index]+`</th>
                    <td width="1px">:</td>
                    <td>`+data[el]+`</td>
                    </tr>
                    `;
                }
            }); 

            txt += ` </tbody>
            </table>
            </div>`;

            $('.modalDeleteBody').html(txt);
        }

        $(document).on('submit', 'form', function(event) {
            event.preventDefault();

            var data = new FormData(this);

            $.ajax({
                url: '<?php echo current_url() ?>/replaceData/'+id,
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

                        id = '';
                        $('#modal-edit').modal('hide');
                        oTable.api().ajax.reload();
                    }
                }
            })

        });

        $(document).on('click', '.btnConfirmDelete', function(event) {
            event.preventDefault();

            $.ajax({
                url: '<?php echo current_url() ?>/deleteData/'+id,
                type: 'POST',
                dataType: 'JSON',
                beforeSend: function()
                {
                    btnLoading('.btnConfirmDelete');
                },
                complete: function()
                {
                    btnNormal('.btnConfirmDelete');
                },
                success: function(res)
                {
                    id = '';

                    toastr[res.status](res.message);

                    $('#modal-delete').modal('hide');
                    oTable.api().ajax.reload();
                },
                error: function()
                {
                    toastr['error']('Data peserta sedang digunakan pada pelatihan, peserta tidak dapat dihapus');
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