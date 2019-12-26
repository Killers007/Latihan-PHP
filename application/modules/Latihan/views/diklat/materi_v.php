
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <!-- begin:: Subheader -->
      <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title"><?php echo $title ?> <?php echo $dataDiklat->diklatNama ?></h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc"><?php echo date_convert($dataDiklat->diklatTanggalPendaftaran)->default.' s.d '.date_convert($dataDiklat->diklatTanggalAkhirPendaftaran)->default ?></span>

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
                    <table id="table" class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID Materi</th>
                                <th>Nama Materi</th>
                                <th>Lama Materi / jam</th>
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
                                    <div class="col-lg-9">
                                        <label>Nama Materi <span class="text-danger">*</span></label>
                                        <div class="kt-input-icon">
                                            <div class="input-group date">
                                                <input type="text" class="form-control" name="materiNama">
                                                <!-- <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar glyphicon-th"></i>
                                                    </span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="cleanError materiNama"></div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Lama Materi / Jam<span class="text-danger">*</span></label>
                                        <div class="input-group timepicker">
                                            <input class="form-control" name="materiJam"  placeholder="" type="numbers">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cleanError materiJam"></div>
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

        oTable = $('#table').dataTable({
            processing: true,
            serverSide: true,
            scrollX: false,
            lengthMenu: [15, 30],
            // order: [[1, "asc"]],
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
            {data: 'materiId'},
            {data: 'materiNama'},
            {
                data: 'materiJam', searchable: true, orderable: true, render: function (data) {

                    var text =  data+' Jam';

                    return text;
                }
            },
            {
                data: null, searchable: false, orderable: false, render: function (data) {

                    var btnUbah =  `<a onclick="setTitle('Perbaharui', 'Perbaharui')" data-id="`+data.materiId+`" class="btnEdit btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                    <i style="color: #366CF3;"class="la la-edit"></i>
                    </a> `;

                    var btnDelete =  `<a data-id="`+data.materiId+`" class="btnDelete btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
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

            find = dataFull.find(seep => seep.materiId == id);


            $.each(find, function(index, el) 
            {
                $('input[name="'+index+'"]').val(el);
            }); 

        });


        $(document).on('click', '.btnDelete', function(event) {
            id = $(this).data('id');
            $('#modal-delete').modal('show');

            find = dataFull.find(seep => seep.materiId == id);

            template(find);
        });

        function template(data)
        {
            var txt = `<div class="table-responsive">
            <table class="table table-hover">
            <tbody>`;

            var label = ['ID Materi', 'Nama Materi', 'Lama Materi / jam'];
            var key   = ['materiId', 'materiNama', 'materiJam'];

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
                url: '<?php echo base_url('management/diklat') ?>/deleteDataMateri/'+id,
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