
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <!-- begin:: Subheader -->
      <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title"><?php echo $title ?> <?php echo $dataDiklat->diklatNama ?></h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc"><?php echo $dataDiklat->diklatTanggalMulai.' s.d '.$dataDiklat->diklatTanggalSelesai ?></span>

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
            <?php echo form_open_multipart('', 'id="formData" class="kt-form kt-form--label-right"'); ?> 

            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        <?php echo $title ?> PESERTA DIKLAT 
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                          
                            &nbsp;
                            <?php if ($disabled != 'disabled'): ?>
                                <button type="submit" class="btnSimpan btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Simpan Nilai
                                </button>
                            <?php endif ?>    
                        </div>  
                    </div>      </div>
                </div>

                <div class="kt-portlet__body table-responsive">
                    <!--begin: Datatable -->

                    <table id="table" class="table table-checkable">
                        <thead>
                            <tr>
                                <th>NIP / NIK</th>
                                <th>Nama</th>
                                <th>Peserta</th>
                                <th style="min-width: 70px; max-width: 70px; width: 70px;" class="text-left">Nilai</th>
                                <th>Status Nilai</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>

                    </table>
                    <!--end: Datatable -->
                </div>
            </div>  
            <?php echo form_close() ?>

        </div>
            <!-- end:: Content -->     
        </div>
    </div>     


    <script type="text/javascript">
        function setTitle(title, button)
        {
            $('.modalSimpan').html(button);
            $('.modalLabel').html(title);
        }

        $(document).ready(function() {

            var dataFull;

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
                {data: 'pesertaNik'},
                {data: 'pesertaNama'},
                {
                    data: null, searchable: false, orderable: false, render: function (data) {

                        var text = '';
                        var gd = (data.pesertaGelarDepan == null)?'':data.pesertaGelarDepan;
                        var gb = (data.pesertaGelarBelakang == null)?'':data.pesertaGelarBelakang;

                        var foto = (data.pesertaFoto == null)?'<?php echo base_url('assets/media/users/default.jpg') ?>':'<?php echo base_url('assets/upload/images') ?>/'+data.pesertaFoto;

                        text += `<div class="kt-user-card-v2">
                        <div class="kt-user-card-v2__pic">
                        <img src="`+foto+`" width="90px" height="90px" class="m-img-rounded kt-marginless" alt="photo">
                        </div>
                        <div class="kt-user-card-v2__details">
                        <span class="kt-user-card-v2__name">`+ gd +' '+data.pesertaNama+' '+gb +`</span>
                        <a href="#" class="kt-user-card-v2__email kt-link">`+data.pesertaNik+`</a>
                        </div>
                        </div>`;

                        return text;
                    }
                },
                {
                    data: null, searchable: false, orderable: false, render: function (data) {

                       <?php if ($disabled == 'disabled'): ?>
                        var btnNilai = data.pendaftaranNilai;
                        <?php else: ?>
                            var btnNilai =  `<div class="">
                            <div class='input-group'>
                            <input type='number' class="form-control" value="`+data.pendaftaranNilai+`" min="0" max="100" name="nilai[`+data.pesertaNik+`]" placeholder=""/>
                            </div>
                            </div> `;
                        <?php endif ?>    


                        return btnNilai;
                    }
                },
                {data: 'nilaiKeterangan'},
                ],
            });

            oTable.fnSetColumnVis(0,false,false);
            oTable.fnSetColumnVis(1,false,false);

            $(document).on('click', '.btnShowModal', function(event) {
                id = '';

                cleanError();
                $('#formData').trigger('reset');
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
                            oTable.api().ajax.reload();
                        }
                    }
                })

            });

            $(document).on('click', '.btnConfirmDelete', function(event) {
                event.preventDefault();

                $.ajax({
                    url: '<?php echo base_url('admin/diklat') ?>/deleteDataJadwal/'+id,
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