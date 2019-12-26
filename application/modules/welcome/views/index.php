    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

            <!-- begin:: Subheader -->
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container ">
                    <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title">

                        Basic Examples          </h3>

                        <div class="kt-subheader__breadcrumbs">
                            <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <a href="" class="kt-subheader__breadcrumbs-link">
                            Crud                        </a>
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <a href="" class="kt-subheader__breadcrumbs-link">
                            Datatables.net                      </a>
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <a href="" class="kt-subheader__breadcrumbs-link">
                            Basic                       </a>
                            <span class="kt-subheader__breadcrumbs-separator"></span>
                            <a href="" class="kt-subheader__breadcrumbs-link">
                            Basic Tables                        </a>
                        </div>
                    </div>
                    <div class="kt-subheader__toolbar">
                        <div class="kt-subheader__wrapper">
                            <a href="#" class="btn kt-subheader__btn-secondary">
                                Reports
                            </a>

                            <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
                                <a href="#" class="btn btn-danger kt-subheader__btn-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Products
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="la la-plus"></i> New Product</a>
                                    <a class="dropdown-item" href="#"><i class="la la-user"></i> New Order</a>
                                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:: Subheader -->
            <!-- begin:: Content -->
            <div class="kt-container  kt-grid__item kt-grid__item--fluid">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <i class="kt-font-brand flaticon2-line-chart"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">
                                Extended Pagination
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
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
                                                    <a href="#" class="kt-nav__link">
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
                                    <a href="#" data-toggle="modal" data-target="#modal-edit" class="btnShowModal btn btn-brand btn-elevate btn-icon-sm">
                                        <i class="la la-plus"></i>
                                        New Record
                                    </a>
                                </div>  
                            </div>      </div>
                        </div>

                        <div class="kt-portlet__body table-responsive">
                            <!--begin: Datatable -->
                            <table id="table" class="table table-striped- table-bordered table-hover table-checkable">
                                <thead>
                                    <tr>
                                        <th>DATE</th>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>Aksi</th>
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
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Perbaharui Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                         <div class="row">
                            <div class="col-md-12">
                                <!--begin::Form-->
                                <form id="formData" class="kt-form kt-form--label-right">
                                    <div class="kt-portlet__body">
                                        <div class="form-group form-group-last">
                                            <div class="alert alert-secondary" role="alert">
                                                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                                <div class="alert-text">
                                                    Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Nama</label>
                                            <div class="col-10">
                                                <input class="form-control" name="nama" type="text" value="" id="example-text-input">
                                                <div class="cleanError nama"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label">NIM</label>
                                            <div class="col-10">
                                                <input class="form-control" name="nim" type="text" value="" id="example-text-input">
                                                <div class="cleanError nim"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-date-input" class="col-2 col-form-label">Tanggal</label>
                                            <div class="col-10">
                                                <input class="form-control" name="ttl" type="date" value="" id="example-date-input">
                                                <div class="cleanError ttl"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--end::Portlet-->
                            </div>

                        </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btnSimpan">Save changes</button>
                    </div>
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
            $(document).ready(function() {

                oTable = $('#table').dataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: false,
                    lengthMenu: [15, 30],
                    columnDefs: [{"className": "dt-tengah", "targets": [2]}],
                    // order: [[0, "asc"], [1, "desc"]],
                    'searching'   : true,
                    pagingType: 'numbers',
                    language:{
                        "search":"Pencarian : ",
                        "info":           "<b>Menampilkan _START_ sampai _END_ dari _TOTAL_ Data</b>",

                    },
                    ajax: {
                        'type' : 'GET',
                        'url' : '<?php echo current_url();?>',
                        'dataSrc': function(json)
                        {
                            return json.data;
                        },
                    },
                    drawCallback: function(settings) {
                        var api = this.api();
                        var rows = api.rows({page: 'current'}).nodes();
                        var last = null;

                        api.column(0, {page: 'current'}).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before(
                                    '<tr class="group"><td colspan="10">Tanggal : ' + group + '</td></tr>',
                                    );
                                last = group;
                            }
                        });
                    },
                    columnDefs: [
                    {
                        targets: [0],
                        visible: false,
                    },
                    ],
                    columns: [
                    {data: 'ttl'},
                    {data: 'nim'},
                    {data: 'nama'},
                    {
                        data: null, searchable: false, orderable: false, render: function (data) {

                            keyData = data;
                            findData[data.nim] = data;
                            var btnUbah =  `<a href="#" data-id="`+data.nim+`" class="btnEdit btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                            <i class="la la-edit"></i>
                            </a> `;
                            var btnDelete =  `<a href="#" data-id="`+data.nim+`" class="btnDelete btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                            <i class="la la-trash"></i>
                            </a> `;

                            return btnUbah+btnDelete;
                        }
                    },
                    ],
                });

                $(document).on('click', '.btnShowModal', function(event) {
                    //Hapus id update/delete ketika menambah
                    id = '';

                    cleanError();
                    $('#formData').trigger('reset');
                });

                var id = '';
                var keyData = null;
                var findData = [];
                $(document).on('click', '.btnEdit', function(event) {
                    id = $(this).data('id');
                    cleanError();

                    $('#modal-edit').modal('show');

                    $.each(findData[id], function(index, el) 
                    {
                        $('input[name="'+index+'"]').val(el);
                    }); 
                });


                $(document).on('click', '.btnDelete', function(event) {
                    id = $(this).data('id');
                    $('#modal-delete').modal('show');

                    $.each(findData[id], function(index, el) 
                    {
                        $('input[name="'+index+'"]').val(el);
                    }); 

                    template(findData[id]);
                });

                function template(data)
                {
                    var txt = `<div class="table-responsive">
                    <table class="table table-bordered table-hover">
                    <tbody>`;

                    var label = ['Nama', 'NIM', 'Tempat tanggal lahir'];
                    var indexs = 0
                    $.each(data, function(index, el) 
                    {

                        txt += `
                        <tr>
                        <th width="30%">`+label[indexs]+`</th>
                        <td width="1px">:</td>
                        <td>`+el+`</td>
                        </tr>
                        `;
                        indexs++;
                    }); 

                    txt += ` </tbody>
                    </table>
                    </div>`;

                    $('.modalDeleteBody').html(txt);
                }

                $(document).on('click', '.btnSimpan', function(event) {
                    event.preventDefault();

                    var data = $('#formData').serialize();

                    $.ajax({
                        url: '<?php echo current_url() ?>/replaceData/'+id,
                        type: 'POST',
                        dataType: 'JSON',
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

            });
        </script>