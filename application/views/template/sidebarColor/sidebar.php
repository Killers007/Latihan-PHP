<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
    
    <div 
        id="kt_aside_menu"
        class="kt-aside-menu "
        data-ktmenu-vertical="1"
         data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500"  
        >       
        
        <ul class="kt-menu__nav ">
             <?php $name = $this->router->fetch_class(); 
            ?>

            <?php foreach ($menu as $menus): ?>

                <?php if (isset($menus['child'])): ?>
                    <?php $active = (array_search($name, array_column($menus['child'], 'modules')) !== FALSE)?'kt-menu__item--open kt-menu__item--here':''; ?>

                    <li class="kt-menu__item <?php echo $active ?>  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
              
                            <span class="kt-menu__link-icon <?= $menus['icon']?> "></span>&nbsp;<span class="kt-menu__link-text"><?= $menus['label']?></span>
                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <?php foreach ($menus['child'] as $childMenus): ?>
                                    <?php $actived = ($childMenus['modules'] == $name)?'kt-menu__item--open kt-menu__item--here':''; ?>
                                    <li class="kt-menu__item <?php echo $actived ?>"  aria-haspopup="true">
                                        <a  href="<?= base_url($childMenus['url'])?>" class="kt-menu__link ">
                                            <span class="kt-menu__link-icon <?= $childMenus['icon']?>"></span>
                                            <span class="kt-menu__link-text"><?= $childMenus['label']?></span>
                                            <span class="kt-menu__link-badge">
                                            </span>
                                        </a>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                    </li>

                    <?php else: ?>
                        <?php $actived = ($menus['modules'] == $name)?'kt-menu__item--active':''; ?>
                        <li class="kt-menu__item <?php echo $actived ?>">
                            <a  href="<?= base_url($menus['url'])?>" class="kt-menu__link">
                                <span class="kt-menu__link-icon"><span class="<?= $menus['icon']?>"></span></span>
                                <span class="kt-menu__link-text"><?= $menus['label']?></span>
                            </a>
                        </li>
                    <?php endif ?>

                <?php endforeach ?></ul></div>
    </div>
</div>


<!-- <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile "  >

        <ul class="kt-menu__nav ">

            <?php $name = $this->router->fetch_class(); 
            ?>

            <?php foreach ($menu as $menus): ?>

                <?php if (isset($menus['child'])): ?>
                    <?php $active = (array_search($name, array_column($menus['child'], 'modules')) !== FALSE)?'kt-menu__item--open kt-menu__item--here':''; ?>

                    <li class="kt-menu__item <?php echo $active ?>  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                        <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                            <span class="kt-menu__link-text"><span class="<?= $menus['icon']?>"></span>&nbsp;<?= $menus['label']?></span>
                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <?php foreach ($menus['child'] as $childMenus): ?>
                                    <?php $actived = ($childMenus['modules'] == $name)?'kt-menu__item--open kt-menu__item--here':''; ?>
                                    <li class="kt-menu__item <?php echo $actived ?>"  aria-haspopup="true">
                                        <a  href="<?= base_url($childMenus['url'])?>" class="kt-menu__link ">
                                            <span class="kt-menu__link-icon <?= $childMenus['icon']?>"></span>
                                            <span class="kt-menu__link-text"><?= $childMenus['label']?></span>
                                            <span class="kt-menu__link-badge">
                                            </span>
                                        </a>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                    </li>

                    <?php else: ?>
                        <?php $actived = ($menus['modules'] == $name)?'kt-menu__item--open':''; ?>
                        <li class="kt-menu__item <?php echo $actived ?>">
                            <a  href="<?= base_url($menus['url'])?>" class="kt-menu__link">
                                <span class="kt-menu__link-text kt-pulse__ring"><span class="<?= $menus['icon']?>"></span>&nbsp;<?= $menus['label']?></span>
                            </a>
                        </li>
                    <?php endif ?>

                <?php endforeach ?>



            </ul>
        </div>
    </div>
 -->