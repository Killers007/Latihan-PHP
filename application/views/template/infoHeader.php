 <!--begin: Notifications -->
 <?php if ($this->session->user['role'] == 'peserta'): ?>
<div class="kt-header__topbar-item dropdown">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
        <span class="kt-header__topbar-icon kt-pulse kt-pulse--brand">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24"/>
                    <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
                    <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000"/>
                </g>
            </svg>                                <span class="kt-pulse__ring"></span>
        </span>            
            <!--
                Use dot badge instead of animated pulse effect: 
                <span class="kt-badge kt-badge--dot kt-badge--notify kt-badge--sm kt-badge--brand"></span>
            -->
        </div>

        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
            <form>
                <!--begin: Head -->
                <div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b" style="background-image: url(<?php echo base_url(); ?>assets/media/misc/bg-1.jpg)">
                    <h3 class="kt-head__title">
                        User Notifications
                        &nbsp;
                        <span class="btn btn-success btn-sm btn-bold btn-font-md"><?php echo $infoNotifUnread ?> new</span>
                    </h3>

                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Message</a>
                        </li>
                    </ul>
                </div>
                <!--end: Head -->

                <div class="tab-content">
                    <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
                        <?php if (empty($infoNotif)): ?>
                            <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                                <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                    <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                        All caught up!
                                        <br>No new notifications.
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                <?php foreach ($infoNotif as $key => $value): ?>
                                    <?php if ($key == 10): ?>
                                        <?php break; ?>
                                    <?php endif ?>

                                    <?php $color = 'primary' ?>
                                    <?php $icon = 'fa fa-envelope' ?>
                                    <?php if ($value->notifRead == 1): ?>
                                        <?php $color = 'success' ?>
                                        <?php $icon = 'fa fa-envelope-open' ?>
                                    <?php endif ?>
                                    <a href="<?php echo base_url('peserta/notifikasi') ?>" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="<?php echo $icon ?> kt-font-<?php echo $color ?>"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title">
                                                <?php echo $value->notifContent ?>
                                            </div>
                                            <div class="kt-notification__item-time">
                                                <?php echo timeAgo(date('Y-m-d H:i:s', strtotime($value->notifSend))) ?>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end: Notifications --><!--begin: Quick Actions -->
            
<?php endif ?>
 
    
    
    <!--begin: My Cart -->
   <!--  <div class="kt-header__topbar-item dropdown">
        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
            <span class="kt-header__topbar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24"/>
                        <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" id="Path-30" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" id="Combined-Shape" fill="#000000"/>
                    </g>
                </svg>                    </span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                <form>
                    <div class="kt-mycart">
                        <div class="kt-mycart__head kt-head" style="background-image: url(<?php echo base_url(); ?>assets/media/misc/bg-1.jpg);">
                            <div class="kt-mycart__info">
                                <span class="kt-mycart__icon"><i class="flaticon2-shopping-cart-1 kt-font-success"></i></span>
                                <h3 class="kt-mycart__title">My Cart</h3>
                            </div> 
                            <div class="kt-mycart__button">
                                <button type="button" class="btn btn-success btn-sm" style=" ">2 Items</button>
                            </div>                
                        </div>        

                        <div class="kt-mycart__body kt-scroll" data-scroll="true" data-height="245" data-mobile-height="200">
                            <div class="kt-mycart__item">
                                <div class="kt-mycart__container">
                                    <div class="kt-mycart__info">
                                        <a href="#" class="kt-mycart__title">
                                            Samsung                      
                                        </a>
                                        <span class="kt-mycart__desc">
                                            Profile info, Timeline etc
                                        </span>

                                        <div class="kt-mycart__action">
                                            <span class="kt-mycart__price">$ 450</span>
                                            <span class="kt-mycart__text">for</span>
                                            <span class="kt-mycart__quantity">7</span>
                                            <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                            <a href="#" class="btn btn-label-success btn-icon">&plus;</a>
                                        </div>    
                                    </div>

                                    <a href="#" class="kt-mycart__pic">
                                        <img src="<?php echo base_url(); ?>assets/media/products/product9.jpg" title="">
                                    </a>    
                                </div>               
                            </div>

                            <div class="kt-mycart__item">
                                <div class="kt-mycart__container">
                                    <div class="kt-mycart__info">
                                        <a href="#" class="kt-mycart__title">
                                            Panasonic                       
                                        </a>

                                        <span class="kt-mycart__desc">
                                            For PHoto & Others
                                        </span>

                                        <div class="kt-mycart__action">
                                            <span class="kt-mycart__price">$ 329</span>
                                            <span class="kt-mycart__text">for</span>
                                            <span class="kt-mycart__quantity">1</span>
                                            <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                            <a href="#" class="btn btn-label-success btn-icon">&plus;</a>                          
                                        </div>    
                                    </div>

                                    <a href="#" class="kt-mycart__pic">
                                        <img src="<?php echo base_url(); ?>assets/media/products/product13.jpg" title="">
                                    </a>     
                                </div>               
                            </div>    

                            <div class="kt-mycart__item">
                                <div class="kt-mycart__container">
                                    <div class="kt-mycart__info">
                                        <a href="#" class="kt-mycart__title">
                                            Fujifilm                       
                                        </a>
                                        <span class="kt-mycart__desc">
                                            Profile info, Timeline etc
                                        </span>

                                        <div class="kt-mycart__action">
                                            <span class="kt-mycart__price">$ 520</span>
                                            <span class="kt-mycart__text">for</span>
                                            <span class="kt-mycart__quantity">6</span>
                                            <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                            <a href="#" class="btn btn-label-success btn-icon">&plus;</a>
                                        </div>    
                                    </div>

                                    <a href="#" class="kt-mycart__pic">
                                        <img src="<?php echo base_url(); ?>assets/media/products/product16.jpg" title="">
                                    </a>    
                                </div>               
                            </div>

                            <div class="kt-mycart__item">
                                <div class="kt-mycart__container">
                                    <div class="kt-mycart__info">
                                        <a href="#" class="kt-mycart__title">
                                            Candy Machine                      
                                        </a>

                                        <span class="kt-mycart__desc">
                                            For PHoto & Others
                                        </span>

                                        <div class="kt-mycart__action">
                                            <span class="kt-mycart__price">$ 784</span>
                                            <span class="kt-mycart__text">for</span>
                                            <span class="kt-mycart__quantity">4</span>
                                            <a href="#" class="btn btn-label-success btn-icon">&minus;</a>
                                            <a href="#" class="btn btn-label-success btn-icon">&plus;</a>                       
                                        </div>    
                                    </div>

                                    <a href="#" class="kt-mycart__pic">
                                        <img src="<?php echo base_url(); ?>assets/media/products/product15.jpg" title="" alt="">
                                    </a>     
                                </div>               
                            </div>          
                        </div>

                        <div class="kt-mycart__footer">
                            <div class="kt-mycart__section">
                                <div class="kt-mycart__subtitel">
                                    <span>Sub Total</span>
                                    <span>Taxes</span>
                                    <span>Total</span>                    
                                </div>  

                                <div class="kt-mycart__prices">
                                    <span>$ 840.00</span> 
                                    <span>$ 72.00</span> 
                                    <span class="kt-font-brand">$ 912.00</span>
                                </div>  
                            </div>
                            <div class="kt-mycart__button kt-align-right">
                                <button type="button" class="btn btn-primary btn-sm">Place Order</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div> -->

            <?php $name = 'Tamu' ?>

            <?php if (isset($this->session->user['nama'])): ?>
                <?php $name = $this->session->user['nama'] ?>
            <?php endif ?>
            <!--begin: User Bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user"> 

                <?php if ($templateActive == 0): ?>
                   <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="true">
                    <span class="kt-header__topbar-welcome">Hi,</span>
                    <span class="kt-header__topbar-username"><?php echo (substr($name, 0, 6)) ?></span>

                    <span class="kt-header__topbar-icon"><b><?php echo strtoupper(substr($name, 0, 1)) ?></b></span>
                    <!-- <img alt="Pic" src="./assets/media/users/300_21.jpg" class="kt-hidden"> -->
                </div>
                <?php else: ?>

                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                        <div class="kt-header__topbar-user">
                            <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                            <span class="kt-header__topbar-username kt-hidden-mobile"><?php echo (substr($name, 0, 6)) ?></span>
                            <img class="kt-hidden" alt="Pic" src="<?php echo base_url(); ?>assets/media/users/300_25.jpg" />
                            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><?php echo strtoupper(substr($name, 0, 1)) ?></span>
                        </div>
                    </div>
                <?php endif ?>   

                

                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                    <!--begin: Head -->
                    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?php echo base_url(); ?>assets/media/misc/bg-1.jpg)">
                        <div class="kt-user-card__avatar">
                            <img class="kt-hidden" alt="Pic" src="<?php echo base_url(); ?>assets/media/users/300_25.jpg" />
                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                            <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success"><?php echo strtoupper(substr($name, 0, 1)) ?></span>
                        </div>
                        <div class="kt-user-card__name">
                            <?php echo $name ?>
                        </div>
                            <!-- <div class="kt-user-card__badge">
                                <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                            </div> -->
                        </div>
                        <!--end: Head -->

                        <!--begin: Navigation -->
                        <?php 
                        $link = '';
                        $text = '';
                        $msg = '';
                        $color = '';
                        $icon = '';
                        ?>
                        <?php if ($this->uri->segment('1') == 'management'): ?>
                            <?php $link = base_url('home') ?>
                            <?php $text = 'Home ' ?>
                            <?php $msg = 'Menu Home' ?>
                            <?php $icon = 'flaticon-security' ?>
                            <?php elseif (isset($this->session->user['role']) && $this->session->user['role'] != 'peserta'): ?>
                                <?php $link = base_url('management') ?>
                                <?php $text = 'Panel '.ucwords($this->session->user['role']) ?>
                                <?php $msg = 'Manajemen data' ?>
                                <?php $icon = 'flaticon-security' ?>
                                <?php elseif($this->session->user['role'] == 'peserta'): ?>
                                    <?php $link = base_url('peserta') ?>
                                    <?php $text = 'My Profile' ?>
                                    <?php $msg = 'Mengatur biodata dan notifikasi' ?>
                                    <?php $icon = 'flaticon2-user' ?>
                                <?php endif ?>
                                <div class="kt-notification">

                                    <?php if ($link != ''): ?>
                                        <a href="<?php echo $link ?>" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="<?php echo $icon ?> kt-font-success"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    <?php echo $text ?>
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    <?php echo $msg ?>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endif ?>

                                    <?php if (isset($this->session->user['nama'])): ?>
                                        <?php $link = base_url('login/logout') ?>
                                        <?php $text = 'Logout' ?>
                                        <?php $msg = 'Keluar aplikasi' ?>
                                        <?php $color = 'danger' ?>
                                        <?php $icon = 'flaticon-reply' ?>
                                        <?php else: ?>
                                            <?php $link = base_url('login/') ?>
                                            <?php $text = 'Login' ?>
                                            <?php $msg = 'Masuk untuk akses menu' ?>
                                            <?php $color = 'success' ?>
                                            <?php $icon = 'fa fa-key' ?>
                                        <?php endif ?>
                                        <a href="<?php echo $link ?>" class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="<?php echo $icon ?> kt-font-<?php echo $color ?>"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                 <?php echo $text ?>
                                             </div>
                                             <div class="kt-notification__item-time">
                                                <?php echo $msg ?>
                                            </div>
                                        </div>
                                    </a>
                           <!--  <a href="demo1/custom/apps/user/profile-2.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        My Activities
                                    </div>
                                    <div class="kt-notification__item-time">
                                        Logs and notifications
                                    </div>
                                </div>
                            </a>
                            <a href="demo1/custom/apps/user/profile-3.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-hourglass kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        My Tasks
                                    </div>
                                    <div class="kt-notification__item-time">
                                        latest tasks and projects
                                    </div>
                                </div>
                            </a>

                            <a href="demo1/custom/apps/user/profile-1/overview.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-cardiogram kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        Billing
                                    </div>
                                    <div class="kt-notification__item-time">
                                        billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                                    </div>
                                </div>
                            </a> -->
                            <!-- <div class="kt-notification__custom kt-space-between">
                                <?php if (isset($this->session->user['nama'])): ?>
                                    <a href="<?php echo base_url('login/logout') ?>" class="btn btn-label btn-label-brand btn-sm btn-bold">Logout</a>

                                    <?php if ($this->uri->segment(1) == 'home' && $this->session->user['role'] != 'peserta'): ?>
                                        <a href="<?php echo base_url($this->session->user['role']) ?>" class="btn btn-clean btn-sm btn-bold">Panel <?php echo ucwords($this->session->user['role']) ?></a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url('home') ?>" class="btn btn-clean btn-sm btn-bold">Home</a>
                                        <?php endif ?>
                                        <?php else: ?>
                                            <a href="<?php echo base_url('login') ?>" class="btn btn-label btn-label-brand btn-sm btn-bold">Login</a>
                                        <?php endif ?>

                                    </div> -->
                                </div>
                                <!--end: Navigation -->
                            </div>
                        </div>