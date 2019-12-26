
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
                        DATA <?php echo $title ?>
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                       <!--      <div class="dropdown dropdown-inline">
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
                            </div> -->
                            &nbsp;
                            <button onclick="setTitle('Tambah', 'Tambah')" data-toggle="modal" data-target="#modal-edit" class="btnShowModal btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                Tambah Data
                            </button>
                        </div>  
                    </div>      </div>
                </div>

                <div class="kt-portlet__body table-responsive">
                    <!--begin: Datatable -->
                    <table id="table" class="table table-checkable">
                        <thead>
                            <tr>
                                <th width="1px" class="text-center">Detail</th>
                                <th>Nama Diklat</th>
                                <th>Tempat Pelatihan</th>
                                <th>Jumlah Peserta Diverifikasi / Kuota</th>
                                <th>Jumlah Pendaftar</th>
                                <th>Status Pendaftaran</th>
                                <th style="min-width: 70px; max-width: 70px; width: 70px;" class="text-center">Aksi</th>
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
                                        <div class="col-lg-12">
                                            <label>Nama DIKLAT <span class="text-danger">*</span></label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="diklatNama" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
                                            </div>
                                            <div class="cleanError diklatNama"></div>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label>Kuota Peserta<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="diklatKuota" placeholder="">
                                            <div class="cleanError diklatKuota"></div>
                                        </div>
                                        <div class="col-lg-9">
                                            <label class="">Tempat Pelatihan <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="diklatTempatPelatihan" placeholder="">
                                            <div class="cleanError diklatTempatPelatihan"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Tanggal Pendaftaran <span class="text-danger">*</span></label>
                                            <div class='input-group dateRang' id='kt_daterangepicker_1'>
                                                <input type='text' class="form-control" name="tanggalPendaftaran" readonly  placeholder=""/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="cleanError tanggalPendaftaran"></div>
                                        </div>
                                    </div> 
                                     <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Tanggal Pelatihan <span class="text-danger">*</span></label>
                                            <div class='input-group' id='kt_daterangepicker_2'>
                                                <input type='text' class="form-control" name="tanggalPelatihan" readonly  placeholder=""/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="cleanError tanggalPelatihan"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Pengajar <span class="text-danger">*</span></label>
                                            <?php echo form_dropdown('diklatPengajar[]', $selectPengajar, '', ['class' => 'form-control kt-select2', 'multiple' => 'multiple', 'style' => 'width: 100%']) ?>
                                            <div class="cleanError diklatPengajar"></div>
                                        </div>
                                    </div> 
                                     <div class="form-group row">
                                       <!--  <div class="col-lg-4 col-md-4 col-xs-4">
                                            <label class="">Total Jam Pelatihan <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="diklatJamPelatihan" placeholder="">
                                            <div class="cleanError diklatJamPelatihan"></div>
                                        </div> -->
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <label>Nomor Depan</label>
                                            <input type="number" class="form-control" name="diklatNoDepan" placeholder="">
                                            <div class="cleanError diklatNoDepan"></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <label class="">Nomor Belakang</label>
                                            <input type="number" class="form-control" name="diklatNoBelakang" placeholder="">
                                            <div class="cleanError diklatNoBelakang"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3" name="diklatKeterangan" style="margin-top: 0px; margin-bottom: 0px; height: 80px;"></textarea>
                                            <div class="cleanError diklatKeterangan"></div>
                                        </div>
                                    </div> 
                                    
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

<script type="text/javascript">
    function setTitle(title, button)
    {
        $('.modalSimpan').html(button);
        $('.modalLabel').html(title);
    }

    $(document).ready(function() {

        var dataFull;
        var tanggal;

        $('#kt_daterangepicker_2').daterangepicker({
            // minDate: moment('<?php echo date('Y-m-d') ?>').format('MM/DD/YYYY'),
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-secondary'
        }, function(start, end, label) {
            $('#kt_daterangepicker_2 .form-control').val( moment(start).locale('id').format('D MMMM YYYY') + ' - ' + moment(end).locale('id').format('D MMMM YYYY'));
        });

        $('#kt_daterangepicker_1').daterangepicker({
            // minDate: moment('<?php echo date('Y-m-d') ?>').format('MM/DD/YYYY'),
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-secondary'
        }, function(start, end, label) {
            $('#kt_daterangepicker_1 .form-control').val( moment(start).locale('id').format('D MMMM YYYY') + ' - ' + moment(end).locale('id').format('D MMMM YYYY'));
        });

        oTable = $('#table').dataTable({
            processing: true,
            serverSide: true,
            scrollX: false,
            lengthMenu: [15, 30],
            order: [[1, "asc"]],
            'searching'   : true,
            // pagingType: 'numbers',
            columnDefs: [{"className": "dt-center", "targets": [3]}],
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
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    var btnDetail =  `<a class="details-control btn btn-sm btn-clean btn-icon btn-icon-md">
                    <i style="color: #20c997;" class="la la-toggle-off"></i></a>`;

                    return btnDetail;
                }
            },
            {data: 'diklatNama'},
            {data: 'diklatTempatPelatihan'},
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    btnDetail = '( '+data.diklatJumlah+' / '+data.diklatKuota+' )';

                    return btnDetail;
                }
            },
            {data: 'diklatJumPendaftar', searchable: false, orderable: false},
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    if (data.diklatStatus == '0') 
                    {
                        btnDetail = '<span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Ditutup</span>';
                    }
                    else
                    {
                        btnDetail = '<span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Dibuka</span>';
                    }

                    return btnDetail;
                }
            },
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    var btnUbah =  `<a onclick="setTitle('Perbaharui', 'Perbaharui')" data-id="`+data.diklatId+`" class="btnEdit btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                    <i style="color: #366CF3;"class="la la-edit"></i>
                    </a> `;

                    var btnDelete =  ` `;

                    // <a class="dropdown-item" href="<?php echo str_replace('index.php/', '', current_url()) ?>/cetak_absensi/`+data.diklatId+`" target="_blank"><i class="fa fa-cogs"></i> Cetak Daftar Hadir</a>
                    // <a class="dropdown-item" href="<?php echo str_replace('index.php/', '', current_url()) ?>/word/`+data.diklatId+`" target="_blank"><i class="fa fa-file-word"></i> Cetak Sertifikat</a>
                    // <a class="dropdown-item" href="<?php echo str_replace('index.php/', '', current_url()) ?>/export_excel/`+data.diklatId+`" target="_blank"><i class="fa fa-file-excel"></i> Export Excel</a>
                    // <a class="dropdown-item" href="<?php echo str_replace('index.php/', '', current_url()) ?>/jadwal/`+data.diklatId+`"><i class="fa fa-calendar-alt"></i> Kelola Jadwal</a>
                    // <a class="dropdown-item" href="<?php echo str_replace('index.php/', '', current_url()) ?>/nilai/`+data.diklatId+`"><i class="fa fa-pencil-alt"></i> Isi Nilai</a>
                    // <a class="dropdown-item" href="<?php echo str_replace('index.php/', '', current_url()) ?>/pendaftaran/`+data.diklatId+`"><i class="fa fa-check-circle"></i> Verifikasi Peserta</a>
                    // <a class="dropdown-item btnDelete" data-id="`+data.diklatId+`"><i class="fa fa-trash-restore"></i> Hapus</a>

                    var btnEtc = `<span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Reporting</span>
                                    </li>

                                    <li class="kt-nav__item">

                                        <a href="<?php echo str_replace('index.php/', '', current_url()) ?>/cetak_absensi/`+data.diklatId+`" class="kt-nav__link">
                                            <i class="kt-nav__link-icon fa fa-cogs"></i>
                                            <span class="kt-nav__link-text">Cetak Daftar Hadir</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="<?php echo str_replace('index.php/', '', current_url()) ?>/word/`+data.diklatId+`" class="kt-nav__link">
                                            <i class="kt-nav__link-icon fa fa-file-word"></i>
                                            <span class="kt-nav__link-text">Cetak Sertifikat</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="<?php echo str_replace('index.php/', '', current_url()) ?>/wordback/`+data.diklatId+`" class="kt-nav__link">
                                            <i class="kt-nav__link-icon fa fa-file-word"></i>
                                            <span class="kt-nav__link-text">Cetak Belakang Sertifikat</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="<?php echo str_replace('index.php/', '', current_url()) ?>/export_excel/`+data.diklatId+`" class="kt-nav__link">
                                            <i class="kt-nav__link-icon fa fa-file-excel"></i>
                                            <span class="kt-nav__link-text">Export Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__section">
                                        <span class="kt-nav__section-text">Lainnya</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="<?php echo str_replace('index.php/', '', current_url()) ?>/jadwal/`+data.diklatId+`" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                            <span class="kt-nav__link-text">Kelola Jadwal</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="<?php echo str_replace('index.php/', '', current_url()) ?>/materi/`+data.diklatId+`" class="kt-nav__link">
                                            <i class="kt-nav__link-icon fa fa-book-open"></i>
                                            <span class="kt-nav__link-text">Kelola Materi</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="<?php echo str_replace('index.php/', '', current_url()) ?>/nilai/`+data.diklatId+`" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                            <span class="kt-nav__link-text">Isi Nilai</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="<?php echo str_replace('index.php/', '', current_url()) ?>/pendaftaran/`+data.diklatId+`" class="kt-nav__link">
                                            <i class="kt-nav__link-icon fa fa-check-circle"></i>
                                            <span class="kt-nav__link-text">Verifikasi peserta</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a class="kt-nav__link btnDelete" data-id="`+data.diklatId+`">
                                            <i class="kt-nav__link-icon fa fa-trash-restore"></i>
                                            <span class="kt-nav__link-text">Hapus</span>
                                        </a>
                                    </li>
                                </ul>           
                            </div></span>`;

                    return btnEtc + btnUbah + btnDelete;
                }
            },
            ],
        });

        // oTable.fnSetColumnVis(0,false,false);
        // oTable.fnSetColumnVis(1,false,false);

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

        function format ( d ) 
        {
                var text = $('<div/>')
                .addClass( 'text-center' )
                .html( '<i class="fa fa-spinner fa-spin"></i> Loading ...' );

                $.ajax({
                    url: '<?php echo current_url() ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        'mengajarDiklatId': d.diklatId,
                        'status' : 'getPengajar'
                    },
                    success: function(res)
                    {
                        text.html( templateDetail(d, res) ).removeClass( 'text-center' );

                        $('[data-toggle="kt-tooltip"]').tooltip();  
                    },
                    error: function(res)
                    {
                        text
                        .html('<div class="text-center"><i class="fa fa-signal"></i> Periksa Koneksi anda</div>')
                        .removeClass( 'loading' );
                    }
                })
              
            return text;
        }

        function templateDetail(d, data)
        {
            var pengajar = '';
            var pendaftar = '';
            var peserta = '';

            $.each(data.pengajar, function(index, val) {
                var foto = (val.pengajarFoto == null)?'<?php echo base_url('assets/media/users/default.jpg') ?>':'<?php echo base_url('assets/upload/images') ?>/'+val.pengajarFoto;

                pengajar += ` <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="`+val.pengajarNama+`">
                                            <img src="`+foto+`" alt="image">
                                        </a>`
            });

           
             $.each(data.pendaftar, function(index, val) {

                var foto = (val.pesertaFoto == null)?'<?php echo base_url('assets/media/users/default.jpg') ?>':'<?php echo base_url('assets/upload/images') ?>/'+val.pesertaFoto;

                if (val.pendaftaranIsAcc == '1') 
                {
                    peserta += ` <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="`+val.pesertaNama+`">
                                                <img src="`+foto+`" alt="image">
                                            </a>`
                }
                else
                {
                    pendaftar += ` <a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="`+val.pesertaNama+`">
                                                <img src="`+foto+`" alt="image">
                                            </a>`
                }
            });
            return `<div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-widget kt-widget--project-1">
                        

                        <div class="kt-widget__body">
                            <div class="kt-widget__stats">
                                <div class="kt-widget__item">
                                    <span class="kt-widget__date">
                                                Tanggal Pendaftaran
                                            </span>
                                    <div class="kt-widget__label">
                                        <span class="btn btn-label-brand btn-sm btn-bold btn-upper">`+moment(d.diklatTanggalPendaftaran).locale('id').format('dddd, D MMMM YYYY') +`</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-widget__date">
                                                Pendaftaran Ditutup
                                            </span>
                                    <div class="kt-widget__label">
                                        <span class="btn btn-label-danger btn-sm btn-bold btn-upper">`+moment(d.diklatTanggalAkhirPendaftaran).locale('id').format('dddd, D MMMM YYYY')+`</span>
                                    </div>
                                </div>

                                 <div class="kt-widget__item">
                                    <span class="kt-widget__date">
                                                Tanggal Pelatihan
                                            </span>
                                    <div class="kt-widget__label">
                                        <span class="btn btn-label-success btn-sm btn-bold btn-upper">`+moment(d.diklatTanggalMulai).locale('id').format('dddd, D MMMM YYYY')+`</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-widget__date">
                                                Penutupan Pelatihan
                                            </span>
                                    <div class="kt-widget__label">
                                        <span class="btn btn-label-info btn-sm btn-bold btn-upper">`+ moment(d.diklatTanggalSelesai).locale('id').format('dddd, D MMMM YYYY')+`</span>
                                    </div>
                                </div>

                            </div>

                            <span class="kt-widget__text">
                                `+d.diklatKeterangan+`

                            <div class="kt-widget__content">
                              
                                <div class="kt-widget__details">
                                    <span class="kt-widget__subtitle">Pengajar</span>

                                    <div class="kt-media-group">
                                        `+pengajar+`
                                    </div>
                                </div>

                                 <div class="kt-widget__details">
                                    <span class="kt-widget__subtitle">Peserta</span>

                                    <div class="kt-media-group">
                                        `+peserta+`
                                    </div>
                                </div>

                                <div class="kt-widget__details">
                                    <span class="kt-widget__subtitle">Pendaftar Belum Diverifikasi</span>

                                    <div class="kt-media-group">
                                        `+pendaftar+`
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="kt-widget__footer">
                            <div class="kt-widget__wrapper">
                                <div class="kt-widget__section">
                                   
                                </div>

                                <div class="kt-widget__section">
                                    <a href="<?php echo base_url('home/diklat/jadwal') ?>/`+d.diklatId+`" class="btn btn-label-twitter"><i class="fa fa-calendar-alt"></i> Jadwal Pelatihan</a>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
        }

        $(document).on('click', '.btnShowModal', function(event) {
            id = '';

            cleanError();
            $('#formData').trigger('reset');
            $('.kt-select2').val(null).trigger('change');
        });

        var id = '';
        $(document).on('click', '.btnEdit', function(event) {
            id = $(this).data('id');
            
            cleanError();

            $('#modal-edit').modal('show');

            find = dataFull.find(seep => seep.diklatId == id);


            $.each(find, function(index, el) 
            {

                if (index == 'pegawaiFoto') {
                    $('#pegawaiFoto').attr("style", 'background-image: url("<?php echo base_url('assets/upload/images') ?>/'+el+'")');
                }
                else
                {
                    $('input[name="'+index+'"]').val(el);
                    $('textarea[name="'+index+'"]').val(el);
                }
            }); 

            $('#kt_daterangepicker_1').daterangepicker({
                // minDate: moment('<?php echo date('Y-m-d') ?>').format('MM/DD/YYYY'),
                buttonClasses: ' btn',
                applyClass: 'btn-primary',
                cancelClass: 'btn-secondary',
                startDate: moment(find.diklatTanggalPendaftaran).format('MM/DD/YYYY'),
                endDate: moment(find.diklatTanggalAkhirPendaftaran).format('MM/DD/YYYY'),
            }, function(start, end, label) {
                $('#kt_daterangepicker_1 .form-control').val( moment(start).locale('id').format('D MMMM YYYY') + ' - ' + moment(end).locale('id').format('D MMMM YYYY'));
            });
            $('input[name="tanggalPendaftaran"]').val(moment(find.diklatTanggalPendaftaran).locale('id').format('D MMMM YYYY') + ' - ' + moment(find.diklatTanggalAkhirPendaftaran).locale('id').format('D MMMM YYYY'));

            $('#kt_daterangepicker_2').daterangepicker({
                // minDate: moment('<?php echo date('Y-m-d') ?>').format('MM/DD/YYYY'),
                buttonClasses: ' btn',
                applyClass: 'btn-primary',
                cancelClass: 'btn-secondary',
                startDate: moment(find.diklatTanggalMulai).format('MM/DD/YYYY'),
                endDate: moment(find.diklatTanggalSelesai).format('MM/DD/YYYY'),
            }, function(start, end, label) {
                $('#kt_daterangepicker_2 .form-control').val( moment(start).locale('id').format('D MMMM YYYY') + ' - ' + moment(end).locale('id').format('D MMMM YYYY'));
            });
            $('input[name="tanggalPelatihan"]').val(moment(find.diklatTanggalMulai).locale('id').format('D MMMM YYYY') + ' - ' + moment(find.diklatTanggalSelesai).locale('id').format('D MMMM YYYY'));

            $.ajax({
                url: '<?php echo current_url() ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    mengajarDiklatId: id,
                    status: 'getPengajar',
                },
                success: function(res)
                {
                    var vals = [];
                    $.each(res.pengajar, function(index, val) {
                        vals.push(val.pengajarNip);                       
                    });
                    $('.kt-select2').val(vals).trigger('change');
                }
            })


        });


        $(document).on('click', '.btnDelete', function(event) {
            id = $(this).data('id');
            $('#modal-delete').modal('show');

            find = dataFull.find(seep => seep.diklatId == id);

            template(find);
        });

        function template(data)
        {
            var txt = `<div class="table-responsive">
            <table class="table table-hover">
            <tbody>`;

            var label = ['Nama', 'Kuota', 'Tempat Pelatihan'];
            var key   = ['diklatNama', 'diklatKuota', 'diklatTempatPelatihan'];

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
                    toastr['error']('Data diklat sedang digunakan, Diklat tidak dapat dihapus');
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