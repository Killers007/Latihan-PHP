
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

        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-xl">

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        Total Keseluruhan
                                    </h4>
                                    <span class="kt-widget24__desc">
                                         Peserta DIKLAT
                                    </span>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand">
                                   <?php echo $dataTotal->totalPeserta ?>
                                </span>  
                            </div> 
                             
                        </div>
                        <!--end::Total Profit-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Total
                                </h4>
                                <span class="kt-widget24__desc">
                                    Pendaftar hari ini
                                </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-warning">
                                   <?php echo $dataTotal->totalPendaftar ?>
                            </span>  
                        </div> 
                           
                    </div>              
                    <!--end::New Orders--> 
                </div>


                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Feedbacks-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        Total
                                    </h4>
                                    <span class="kt-widget24__desc">
                                        Pendaftar sudah diverifikasi hari ini
                                    </span>
                                </div>

                                <span class="kt-widget24__stats kt-font-success">
                                   <?php echo $dataTotal->totalPendaftarValid ?>
                             </span>  
                         </div> 

                                            
                    </div>              
                    <!--end::New Feedbacks--> 
                </div>

            
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Total
                                </h4>
                                <span class="kt-widget24__desc">
                                    Pendaftar belum diverifikasi hari ini
                                </span>
                            </div>

                            <span class="kt-widget24__stats kt-font-danger">
                                   <?php echo $dataTotal->totalPendaftarInValid ?>
                            </span>  
                        </div> 
              
                    </div>              
                    <!--end::New Users--> 
                </div>

            </div>
        </div>
    </div>
    <div class="kt-portlet" id="kt_portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="flaticon-calendar"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Jadwal Pelatihan
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">

            </div>
        </div>
        <div class="kt-portlet__body">
            <div id="kt_calendar"></div>
        </div>
    </div>  
</div>

</div>
</div>  


<script type="text/javascript">

    $(document).ready(function() {

        "use strict";

        var KTCalendarListView = function() {

            return {
                init: function() {
                    var todayDate = moment().startOf('day');
                    var YM = todayDate.format('YYYY-MM');
                    var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                    var TODAY = '<?php echo date('Y-m-d') ?>'
                    var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                    var calendarEl = document.getElementById('kt_calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

                        isRTL: KTUtil.isRTL(),
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                        },

                        height: 800,
                        contentHeight: 750,
                        aspectRatio: 3, 

                        views: {
                            dayGridMonth: { buttonText: 'month' },
                            timeGridWeek: { buttonText: 'week' },
                            timeGridDay: { buttonText: 'day' },
                            listDay: { buttonText: 'list' },
                            listWeek: { buttonText: 'list' }
                        },

                        // defaultView: 'listWeek',
                        defaultDate: TODAY,

                        editable: true,
                        eventLimit: true,
                        navLinks: true,
                        events: <?php echo str_replace('"', '', json_encode($dataJadwal, JSON_PRETTY_PRINT)) ?>,
                        eventRender: function(info) {
                            var element = $(info.el);

                            if (info.event.extendedProps && info.event.extendedProps.description) {
                                if (element.hasClass('fc-day-grid-event')) {
                                    element.data('content', info.event.extendedProps.description);
                                    element.data('placement', 'top');
                                    KTApp.initPopover(element);
                                } else if (element.hasClass('fc-time-grid-event')) {
                                    element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>'); 
                                } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                    element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>'); 
                                }
                            } 
                        }
                    });

                    calendar.render();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTCalendarListView.init();
        });
    });
</script>