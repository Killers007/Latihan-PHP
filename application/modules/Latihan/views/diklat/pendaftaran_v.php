
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <!-- begin:: Subheader -->
      <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title"><?php echo $title ?> <?php echo $dataDiklat->diklatNama ?></h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <!-- <span class="kt-subheader__desc">Pendaftaran : <?php echo $dataDiklat->diklatTanggalPendaftaran.' s.d '.$dataDiklat->diklatTanggalAkhirPendaftaran ?></span> -->
                <div class="kt-margin-l-20" style="margin-right: 20px" id="kt_subheader_search_form">
                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search">
                        <input type="text" class="form-control" placeholder="Search..." id="field-cari">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>                                    <!--<i class="flaticon2-search-1"></i>-->
                            </span>
                        </span>
                    </div>
                </div>

                <a href="#" class="btn btn-label-google"  data-target="#modal-email" data-toggle="modal"><i class="socicon-google"></i> Broadcast Email</a>

                <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                    <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                    </span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">

                    <a class="btn kt-subheader__btn-daterange" data-toggle="kt-tooltip" title="Tanggal Pendaftaran dibuka s.d ditutup" data-placement="left">
                        <span class="kt-subheader__desc" ><?php echo date_convert($dataDiklat->diklatTanggalPendaftaran)->default.' s.d '.date_convert($dataDiklat->diklatTanggalAkhirPendaftaran)->default ?></span>
                    </a>
                      
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
    <!-- begin:: Content -->

       <!-- begin:: Content -->
       <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="listPeserta">
                
            </div>

            <div class="kt-portlet__body table-responsive">
                <table id="table" class="">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>nip</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>

                    <tbody>

                    </tbody>

                </table>
            </div>
        </div>


        <!--Begin:: Chat-->
        <div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="kt-chat">
                        <div class="kt-portlet kt-portlet--last">
                            <div class="kt-portlet__head">
                                <div class="kt-chat__head ">
                                    <div class="kt-chat__left">
                                        <div class="kt-chat__label">
                                            <a href="#" class="kt-chat__title chatNama">Jason Muller</a>
                                            <span class="kt-chat__status">
                                            </span>
                                        </div>                                
                                    </div>
                                    <div class="kt-chat__right">   
                                        <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                            <i class="flaticon2-cross"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-scroll kt-scroll--pull ps ps--active-y" data-height="410" data-mobile-height="300">
                                    <div class="kt-chat__messages kt-chat__messages--solid bodyMessage">
                                        
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-chat__input">
                                    <div class="kt-chat__editor">
                                        <textarea class="textMessage" placeholder="Type here..." style="height: 50px"></textarea>
                                    </div>
                                    <div class="kt-chat__toolbar">
                                        <div class="kt_chat__tools">
                                        </div>                           
                                        <div class="kt_chat__actions">
                                            <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply btnReply">reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--ENd:: Chat-->

<!--begin::Modal-->
<div class="modal fade" id="modal-email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kirim email notifikasi ke semua peserta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="form-email" class="kt-form kt-form--fit kt-form--label-right">
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="summernote" id="kt_summernote_1"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnSendEmail">Kirim</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

      
</div>
</div>



<script type="text/javascript">
    function setTitle(title, button)
    {
        $('.modalSimpan').html(button);
        $('.modalLabel').html(title);
    }

      var id;
      $(document).on('click', '.btnModalChat', function(event) {
        event.preventDefault();
        $('#kt_chat_modal').modal('show');

        id = $(this).data('id');

        $('.bodyMessage').html('');
        $('.chatNama').html( $(this).data('nama') );

        $.ajax({
         url: '<?php echo current_url() ?>',
         type: 'POST',
         dataType: 'JSON',
         data: {id: id, status: 'readMessage'},
         success: function(res)
         {
            $.each(res, function(index, val) 
            {
               $('.bodyMessage').append( templateMessage(val) );
           });

        }
    })


    });

        var uid = '<?php echo 'admin';$this->session->user['user'] ?>';
        function templateMessage(val)
        {
            var read = (val.notifRead == '1')?'<span class="fa fa-check"></span>':'';
            var foto = (val.pesertaFoto == null)?'<?php echo base_url('assets/media/users/default.jpg') ?>':'<?php echo base_url('assets/upload/images') ?>/'+val.pesertaFoto; 

            if (uid == val.notifFrom) 
            {
                return `<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                            <div class="kt-chat__user">                                
                                <span class="kt-chat__datetime">`+ val.notifSend+`</span>
                                <a href="#" class="kt-chat__username"><?php echo ucwords($this->session->user['nama']) ?></a>                                
                                <span class="kt-media kt-media--circle kt-media--sm"> 
                                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">
                                    <?php echo strtoupper(substr($this->session->user['nama'], 0, 1)) ?></span>
                                </span>
                            </div>
                            <div class="kt-chat__text">
                               `+read+`  `+val.notifContent+`
                            </div>
                        </div>`
            }

            return `<div class="kt-chat__message kt-chat__message--success">
                        <div class="kt-chat__user">
                            <span class="kt-media kt-media--circle kt-media--sm"> 
                                <img src="`+foto+`" alt="image">   
                            </span>
                            <a href="#" class="kt-chat__username">`+val.pesertaNama+`</a>
                            <span class="kt-chat__datetime">`+val.notifSend+`</span>
                        </div>                                    
                        <div class="kt-chat__text">
                            `+val.notifContent+`
                        </div>
                    </div>`;

        }

    var KTChat = function () {
     var initChat = function (parentEl) {
         var messageListEl = KTUtil.find(parentEl, '.kt-scroll');

         if (!messageListEl) {
             return;
         }

         KTUtil.scrollInit(messageListEl, {
             windowScroll: false, 
             mobileNativeScroll: true,
             desktopNativeScroll: false, 
             resetHeightOnDestroy: true, 
             handleWindowResize: true, 
             rememberPosition: true,
             height: function() {  
                 var height;

                 if (KTUtil.isInResponsiveRange('tablet-and-mobile')) {
                     return KTUtil.hasAttr(messageListEl, 'data-mobile-height') ? parseInt(KTUtil.attr(messageListEl, 'data-mobile-height')) : 300;
                 } 

                 if (KTUtil.isInResponsiveRange('desktop') && KTUtil.hasAttr(messageListEl, 'data-height')) {
                     return parseInt(KTUtil.attr(messageListEl, 'data-height'));
                 }

                 var chatEl = KTUtil.find(parentEl, '.kt-chat');
                 var portletHeadEl = KTUtil.find(parentEl, '.kt-portlet > .kt-portlet__head');
                 var portletBodyEl = KTUtil.find(parentEl, '.kt-portlet > .kt-portlet__body');
                 var portletFootEl = KTUtil.find(parentEl, '.kt-portlet > .kt-portlet__foot');

                 if (KTUtil.isInResponsiveRange('desktop')) {
                     height = KTLayout.getContentHeight();
                 } else {
                     height = KTUtil.getViewPort().height;
                 }

                 if (chatEl) {
                     height = height - parseInt(KTUtil.css(chatEl, 'margin-top')) - parseInt(KTUtil.css(chatEl, 'margin-bottom'));
                     height = height - parseInt(KTUtil.css(chatEl, 'padding-top')) - parseInt(KTUtil.css(chatEl, 'padding-bottom'));
                 }

                 if (portletHeadEl) {
                     height = height - parseInt(KTUtil.css(portletHeadEl, 'height'));
                     height = height - parseInt(KTUtil.css(portletHeadEl, 'margin-top')) - parseInt(KTUtil.css(portletHeadEl, 'margin-bottom'));
                 }

                 if (portletBodyEl) {
                     height = height - parseInt(KTUtil.css(portletBodyEl, 'margin-top')) - parseInt(KTUtil.css(portletBodyEl, 'margin-bottom'));
                     height = height - parseInt(KTUtil.css(portletBodyEl, 'padding-top')) - parseInt(KTUtil.css(portletBodyEl, 'padding-bottom'));
                 }

                 if (portletFootEl) {
                     height = height - parseInt(KTUtil.css(portletFootEl, 'height'));
                     height = height - parseInt(KTUtil.css(portletFootEl, 'margin-top')) - parseInt(KTUtil.css(portletFootEl, 'margin-bottom'));
                 }

                 height = height - 5;

                 return height;
             } 
         });

         var handleMessaging = function() {
             var scrollEl = KTUtil.find(parentEl, '.kt-scroll');
             var messagesEl = KTUtil.find(parentEl, '.kt-chat__messages');
             var textarea = KTUtil.find(parentEl, '.kt-chat__input textarea');

             if (textarea.value.length === 0 ) {
                return;
            }

            var node = document.createElement("DIV");  
            KTUtil.addClass(node, 'kt-chat__message kt-chat__message--brand kt-chat__message--right');

            var html = 
            '<div class="kt-chat__user">' +             
            '<span class="kt-chat__datetime">Just now</span>' +
            '<a href="#" class="kt-chat__username"><?php echo ucwords($this->session->user['nama']) ?></span></a>' +                   
            '<span class="kt-media kt-media--circle kt-media--sm">' +
            '<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><?php echo strtoupper(substr($this->session->user['nama'], 0, 1)) ?></span>'  + 
            '</span>' +
            '</div>' +
            '<div class="kt-chat__text kt-bg-light-brand">' + 
            textarea.value
            '</div>';

            KTUtil.setHTML(node, html);
            messagesEl.appendChild(node);

            $.ajax({
             url: '<?php echo current_url() ?>',
             type: 'POST',
             dataType: 'JSON',
             data: {id: id, message: textarea.value, status: 'sendMessage'},
             succcess: function(res)
             {

             }
         })

            textarea.value = '';
            scrollEl.scrollTop = 100000;

            var ps;
            if (ps = KTUtil.data(scrollEl).get('ps')) {
             ps.update();
         }                   
     }

     KTUtil.on(parentEl, '.kt-chat__input textarea', 'keydown', function(e) {
         if (e.keyCode == 13) {
             handleMessaging();
             e.preventDefault();

             return false; 
         }
     });

     KTUtil.on(parentEl, '.kt-chat__input .kt-chat__reply', 'click', function(e) {
         handleMessaging();
     });
 }

 return {
     init: function() {
         initChat( KTUtil.getByID('kt_chat_modal'));

         setTimeout(function() {
         }, 1000);
     },

     setup: function(element) {
        initChat(element);
    }
};
}();

    $(document).ready(function() {

        $('.templateUser').hide();
        $('table').hide();

        $(document).on('click', '.btnSendEmail', function(event) {
            event.preventDefault();
            var data = $('.note-editable').html();
            var ini = $(this);

            $.ajax({
                url: '<?php echo current_url() ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {data: data, status: 'broadcastEmail'},
                beforeSend : function()
                {
                    btnLoading(ini);
                },
                complete: function()
                {
                    btnNormal(ini);
                },
                error: function()
                {
                    toastr['error']('Sepertinya pengiriman email terlalu lama');
                },
                success: function(res)
                {
                    $('#modal-email').modal('hide');
                    $('.note-editable').html('');
                    toastr[res.status](res.message);

                    sendEmail(res.dataEmail)
                }
            })

        });

        function sendEmail(data)
        {
            $.ajax({
                url: '<?php echo current_url() ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {data: data, status: 'sendEmail'},
                success: function(res)
                {
                    $('#modal-email').modal('hide');
                    $('.note-editable').html('');
                    toastr[res.status](res.message);

                    console.log(res.dataEmail)
                }
            })
        }


    
        $(document).on('click', '.btnVerifikasi', function(event) {
            event.preventDefault();
            var ini = $(this);

            var id = $(this).data('id')

            $.ajax({
                url: '<?php echo current_url() ?>/'+id,
                type: 'POST',
                dataType: 'JSON',
                data: {status: '1'},
                beforeSend : function()
                {
                    btnLoading(ini);
                },
                success: function(res)
                {
                    btnNormal(ini);

                    if (res.status == 'success') 
                    {
                        ini.removeClass('btnVerifikasi').addClass('btnTolak');
                        ini.removeClass('btn-label-success').addClass('btn-label-danger');
                        ini.html('Tolak');
                    }
                    else
                    {
                        toastr[res.status](res.message);
                    }
                }
            })
        });

        $(document).on('click', '.btnTolak', function(event) {
            event.preventDefault();
            var ini = $(this);

            var id = $(this).data('id')

            $.ajax({
                url: '<?php echo current_url() ?>/'+id,
                type: 'POST',
                dataType: 'JSON',
                data: {status: '0'},
                beforeSend : function()
                {
                    btnLoading(ini);
                },
                success: function(res)
                {
                    btnNormal(ini);

                    if (res.status == 'success') 
                    {
                        ini.removeClass('btn-label-danger').addClass('btn-label-success');
                        ini.removeClass('btnTolak').addClass('btnVerifikasi');
                        ini.html('Terima');
                    }
                }
            })
        });



        var dataFull;
        var tanggal;


        oTable = $('#table').dataTable({
            processing: true,
            serverSide: true,
            scrollX: false,
            lengthMenu: [8, 4, 15, 30],
            dom: '<"top">rts<"bottom"lp>',
            'searching'   : true,
            // pagingType: 'numbers',
            drawCallback: function(settings) {

                $('.listPeserta').html(templateList());
                $('#table thead').remove();
            },
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
                data: 'pesertaNama', searchable: false, orderable: false, render: function (data, type, row) {

                    var text = templateUser(row);

                    return text;
                }
            },
            ],
        });

        function templateList()
        {
           var text = '<div class="row">';

           $.each(dataFull, function(index, data) {
            var foto = (data.pesertaFoto == null)?'<?php echo base_url('assets/media/users/default.jpg') ?>':'<?php echo base_url('assets/upload/images/'); ?>/'+data.pesertaFoto;
            var btnAksi = '';
            var disabled = '<?php echo $disabled ?>';
            var noHp = (data.pesertaNoHp != '')?'+62 '+data.pesertaNoHp:'';

            if (data.pendaftaranIsAcc == '1') 
            {
                btnAksi = `<button type="button" data-id="`+data.pesertaNik+`" class="btnTolak btn btn-label-danger btn-lg btn-upper" `+disabled+`>Tolak</button>`;
            }
            else 
            {
                btnAksi = ` <button type="button" data-id="`+data.pesertaNik+`" class="btnVerifikasi btn btn-label-success btn-lg btn-upper" `+disabled+`>Terima</button>`;
            }

                text += `
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-portlet__head kt-portlet__head--noborder">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">

                                        </h3>
                                    </div>
                                    <div class="kt-portlet__head-toolbar">
                                        <a href="#" class="btn btn-icon btnModalChat" data-id="`+data.pesertaNik+`" data-nama="`+data.pesertaNama+`" data-foto="`+foto+`">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"/>
                                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" id="Combined-Shape" fill="#000000"/>
                                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="kt-widget kt-widget--user-profile-2">
                                            <div class="kt-widget__head">
                                                <div class="kt-widget__media">
                                                    <img class="kt-widget__img kt-hidden-" width="90px" height="90px" src="`+foto+`" alt="image">
                                                    <div class="kt-widget__pic kt-widget__pic--warning kt-font-warning kt-font-boldest kt-hidden">
                                                        AL
                                                    </div>
                                                </div>

                                                <div class="kt-widget__info">
                                                    <a href="#" class="kt-widget__username">     
                                                        `+data.pesertaGelarDepan+` `+data.pesertaNama+` `+data.pesertaGelarBelakang+`                                   
                                                    </a>

                                                    <span class="kt-widget__desc">
                                                        `+data.pesertaNik +`                                                            
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="kt-widget__body">
                                                <div class="kt-widget__section">
                                            </div>                                        

                                            <div class="kt-widget__item">
                                             <div class="kt-widget__contact">
                                                <span class="kt-widget__label">No Hp:</span>
                                                <a href="#" class="kt-widget__data">`+noHp +`</a>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Email:</span>
                                                <a href="#" class="kt-widget__data">`+data.pesertaEmail +`</a>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Alamat:</span>
                                                <a href="#" class="kt-widget__data">`+data.pesertaAlamat +`</a>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">TTL:</span>
                                                <a href="#" class="kt-widget__data">`+data.pesertaTempatLahir+`, `+moment(data.pesertaTanggalLahir).format('D MMMM YYYY') +`</a>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Agama:</span>
                                                <a href="#" class="kt-widget__data">`+data.agamaNama +`</a>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Pangkat/Golongan:</span>
                                                <a href="#" class="kt-widget__data">`+data.pesertaPangkatGolongan +`</a>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Jabatan:</span>
                                                <a href="#" class="kt-widget__data">`+data.pesertaJabatan +`</a>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Instansi:</span>
                                                <span class="kt-widget__data">`+data.pesertaInstansi +`</span>
                                            </div>
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Pendidikan Terakhir:</span>
                                                <a href="#" class="kt-widget__data">`+data.pesertaPendidikanTerakhir +`</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="kt-widget__footer">
                                        `+btnAksi+`
                                        </div>
                                    </div>              

                                </div>
                            </div>
                        </div>

                `
           });

            return text+'</div>';
        }

        function templateUser(data)
        {
            var foto = (data.pesertaFoto == null)?'<?php echo base_url('assets/media/users/default.jpg') ?>':'<?php echo base_url('assets/upload/images/'); ?>/'+data.pesertaFoto;
            var btnAksi = '';

            // $('.pesertaFoto').attr('src', foto);
            // $('.pesertaNama').html(data.pesertaNama);

            // var template = $('.templateUser').html();

            if (data.pendaftaranIsAcc == '1') 
            {
                btnAksi = `<button type="button" data-id = "`+data.pesertaNik+`" class="btnTolak btn btn-label-danger btn-sm btn-upper">Tolak</button>&nbsp;`;
            }
            else 
            {
                btnAksi = `<button type="button" data-id = "`+data.pesertaNik+`" class="btnVerifikasi btn btn-label-success btn-sm btn-upper">Terima</button>&nbsp;`;
            }

            // $(template).find('.pesertaNama').html(data.pesertaNama).removeClass('pesertaNama');
            // $(template).find('.pesertaFoto').attr('src', foto).removeClass('pesertaFoto');
            // 
            
            template = `<div class="kt-portlet">
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
                                                `+data.pesertaNama+`
                                                <i class="flaticon2-correct kt-font-success"></i>                       
                                            </a>

                                            <div class="kt-widget__action btnAksi">
                                                `+btnAksi+`
                                            </div>
                                        </div>

                                        <div class="kt-widget__subhead">
                                            <a href="#"><i class="la la-key"></i>`+data.pesertaNik+`</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-phone"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">No Hp</span>
                                            <a class="">`+data.pesertaNoHp+`</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-black-tie"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Pangkat / Golongan</span>
                                            <a class="">`+data.pesertaPangkatGolongan+`</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-certificate"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Jabatan</span>
                                            <a class="">`+data.pesertaJabatan+`</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-book"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Agama</span>
                                            <a class="">`+data.agamaNama+`</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-suitcase"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Instansi</span>
                                            <a class="">`+data.pesertaInstansi+`</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-codepen"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Email</span>
                                            <a class="">`+data.pesertaEmail+`</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-birthday-cake"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Tempat Tanggal Lahir</span>
                                            <a class="">`+data.pesertaTempatLahir+`, `+data.pesertaTanggalLahir+`</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-map-marker"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Alamat</span>
                                            <a class="">`+data.pesertaAlamat+`</a>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="la la-university"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">Pendidikan Terakhir</span>
                                            <a class="">`+data.pesertaPendidikanTerakhir+`</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>`;

            return template;
        }

        oTable.fnSetColumnVis(0,false,false);
        oTable.fnSetColumnVis(1,false,false);


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

            $('input[name="jadwalTanggal"]').val(moment(find.jadwalTanggal).locale('id').format('dddd, D MMMM YYYY'));

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
            btnText = selector.html();
            selector.html('<i class="fa fa-spinner fa-spin"></i> Loading .....');
            selector.attr('disabled', 'true');
        }

        function btnNormal(selector)
        {
            selector.html(btnText);
            selector.removeAttr('disabled');
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

        $("#btn-cari").click(function () {
            oTable.fnFilter($("#field-cari").val());
        });

        $("#field-cari").on('keyup', function(e) {
            var key = e.which;
            if (key == 13) 
            { 
                oTable.fnFilter($("#field-cari").val());
            }
        });

        $(".summernote").summernote({
            height: 300,
            toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
            ]
        });


    });
</script>