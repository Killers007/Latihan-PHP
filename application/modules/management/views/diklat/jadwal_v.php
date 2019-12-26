
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <!-- begin:: Subheader -->
      <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title"><?php echo $title ?> <?php echo $dataDiklat->diklatNama ?></h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc"><?php echo date_convert($dataDiklat->diklatTanggalMulai)->default.' s.d '.date_convert($dataDiklat->diklatTanggalSelesai)->default ?></span>

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
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                 
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
                    <table id="table" class="table table-checkable table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Materi Pelajaran</th>
                                <th>Penyaji</th>
                                <th>JP</th>
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
                                    <div class="col-lg-6">
                                        <label>Tanggal dan Waktu <span class="text-danger">*</span></label>
                                        <div class="kt-input-icon">
                                            <div class="input-group date">
                                                <input type="text" class="form-control" readonly="" name="jadwalTanggal" value="" id="kt_datetimepicker_3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar glyphicon-th"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cleanError jadwalTanggal"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Waktu Mulai<span class="text-danger">*</span></label>
                                        <div class="input-group timepicker">
                                            <input class="form-control" id="kt_timepicker_1" readonly="" name="jadwalWaktuMulai"  placeholder="" type="text">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cleanError jadwalWaktuMulai"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Waktu Selesai<span class="text-danger">*</span></label>
                                        <div class="input-group timepicker">
                                            <input class="form-control" id="kt_timepicker_2" readonly="" name="jadwalWaktuSelesai"  placeholder="" type="text">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cleanError jadwalWaktuSelesai"></div>
                                    </div>
                                </div>   
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label>Materi Pelajaran<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="jadwalMateriPelajaran" placeholder="">
                                        <div class="cleanError jadwalMateriPelajaran"></div>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <label>Penyaji<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="jadwalPenyaji" placeholder="">
                                        <div class="cleanError jadwalPenyaji"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>JP<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="jadwalJP" placeholder="">
                                        <div class="cleanError jadwalJP"></div>
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

         $('#kt_timepicker_1, #kt_timepicker_2').timepicker({
            minuteStep: 1,
            defaultTime: '',
            showSeconds: true,
            showMeridian: false,
            snapToStep: true
        });

        $('#kt_datetimepicker_3').datetimepicker({
            startDate: '<?php echo $dataDiklat->diklatTanggalMulai ?>',
            endDate: '<?php echo $dataDiklat->diklatTanggalSelesai ?>',
            // endDate: '<?php echo date('Y-m-d', strtotime("+1 day", strtotime($dataDiklat->diklatTanggalSelesai))) ?>',
            todayHighlight: true,
            autoclose: true,
            pickerPosition: 'bottom-left',
            todayBtn: true,
            format: 'yyyy/mm/dd',
            startView: 2,
            minView: 2,
        }).on('hide', function(e) {
            $('input[name="jadwalTanggal"]').val(moment(tanggal).locale('id').format('D MMMM YYYY'));
        });

        $(document).on('change', '#kt_datetimepicker_3', function(event) {
            tanggal = $(this).val();

            $('input[name="jadwalTanggal"]').val(moment(tanggal).locale('id').format('D MMMM YYYY'));
        });

        oTable = $('#table').dataTable({
            processing: true,
            serverSide: true,
            scrollX: false,
            lengthMenu: [15, 30],
            order: [[0, "asc"]],
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
            drawCallback: function(settings) {
                var api = this.api();
                var rows = api.rows({page: 'current'}).nodes();
                var last = null;

                api.column(0, {page: 'current'}).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before(
                            '<tr class="group"><td colspan="10">' + moment(group).locale('id').format('D MMMM YYYY') + '</td></tr>',
                        );
                        last = group;
                    }
                });
            },
            columnDefs: [{visible: false, target: 0}],
            columns: [
            {data: 'jadwalTanggal'},
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    var text =  data.jadwalWaktuMulai+' - '+data.jadwalWaktuSelesai;

                    return text;
                }
            },
            {data: 'jadwalMateriPelajaran'},
            {data: 'jadwalPenyaji'},
            {
                data: 'jadwalJP', searchable: true, orderable: true, render: function (data) {

                    var text =  data+' JP';

                    return text;
                }
            },
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    var btnUbah =  `<a onclick="setTitle('Perbaharui', 'Perbaharui')" data-id="`+data.jadwalId+`" class="btnEdit btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                    <i style="color: #366CF3;"class="la la-edit"></i>
                    </a> `;

                    var btnDelete =  `<a data-id="`+data.jadwalId+`" class="btnDelete btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                    <i style="color: red;" class="la la-trash"></i>
                    </a>  `;

                    return btnUbah + btnDelete;
                }
            },
            ],
        });

        oTable.fnSetColumnVis(0,false,false);

        $(document).on('click', '.btnShowModal', function(event) {
            id = '';

            cleanError();
            $('#formData').trigger('reset');
        });

        var id = '';
        $(document).on('click', '.btnEdit', function(event) {
            id = $(this).data('id');
            cleanError();

            $('#modal-edit').modal('show');

            find = dataFull.find(seep => seep.jadwalId == id);


            $.each(find, function(index, el) 
            {
                $('input[name="'+index+'"]').val(el);
                $('textarea[name="'+index+'"]').val(el);
            }); 

            $('input[name="jadwalTanggal"]').val(moment(find.jadwalTanggal).locale('id').format('D MMMM YYYY'));

        });


        $(document).on('click', '.btnDelete', function(event) {
            id = $(this).data('id');
            $('#modal-delete').modal('show');

            find = dataFull.find(seep => seep.jadwalId == id);

            template(find);
        });

        function template(data)
        {
            var txt = `<div class="table-responsive">
            <table class="table table-hover">
            <tbody>`;

            var label = ['Tanggal', 'Materi Pelajaran', 'Penyaji'];
            var key   = ['jadwalTanggal', 'jadwalMateriPelajaran', 'jadwalPenyaji'];

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
                url: '<?php echo current_url() ?>/'+id,
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
                url: '<?php echo base_url('management/diklat') ?>/deleteDataJadwal/'+id,
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