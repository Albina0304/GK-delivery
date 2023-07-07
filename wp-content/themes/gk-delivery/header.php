<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/favicon/apple-touch-icon.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri();?>/favicon/apple-touch-icon.png">
        <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/favicon/apple-touch-icon.png">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <?php wp_head()?>
    </head>
    <body>
    <?php 
    $logo = get_field('logo', 'options');
    $phone = get_field('phone', 'options');
    $email = get_field('email', 'options');
    $result = preg_replace('/[\s-]+/', "", $phone ); ?>
    <div class="wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-top-contacts">
                        <div class="header-top-wrapper">
                            <a href="tel:<?php echo $phone;?>"class="dropdown-toggle" id="dropdownSocial" data-bs-toggle="dropdown" aria-expanded="false">  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.9538 11.6281C9.65726 11.6281 8.37329 11.3204 7.10193 10.705C5.83057 10.0896 4.69554 9.28258 3.69682 8.28385C2.6981 7.28514 1.88999 6.15117 1.27247 4.88195C0.654953 3.61273 0.346191 2.32983 0.346191 1.03325C0.346191 0.833252 0.412858 0.666585 0.546191 0.533252C0.679525 0.399919 0.846191 0.333252 1.04619 0.333252H3.22051C3.39316 0.333252 3.54381 0.386458 3.67244 0.492869C3.80106 0.59928 3.88076 0.736675 3.91154 0.905053L4.29359 2.86657C4.32008 3.03067 4.3173 3.17981 4.28526 3.314C4.2532 3.44819 4.1829 3.56529 4.07436 3.66529L2.54102 5.164C3.06752 6.05803 3.69531 6.86572 4.42438 7.58709C5.15343 8.30845 5.97865 8.93752 6.90002 9.47427L8.38976 7.95889C8.4983 7.85034 8.62672 7.77321 8.77501 7.72749C8.9233 7.68175 9.07522 7.67214 9.23078 7.69864L11.082 8.07555C11.2504 8.11316 11.3878 8.19458 11.4942 8.31979C11.6006 8.445 11.6538 8.59393 11.6538 8.76659V10.9281C11.6538 11.1281 11.5872 11.2948 11.4538 11.4281C11.3205 11.5614 11.1538 11.6281 10.9538 11.6281ZM2.06156 4.21787L3.25131 3.0794C3.27267 3.0623 3.28656 3.0388 3.29297 3.00889C3.29939 2.97896 3.29831 2.95119 3.28976 2.92555L3.00003 1.4358C2.99147 1.40161 2.97651 1.37597 2.95514 1.35889C2.93378 1.34179 2.906 1.33324 2.87181 1.33324H1.44617C1.42053 1.33324 1.39916 1.34179 1.38206 1.35889C1.36497 1.37597 1.35642 1.39734 1.35642 1.42299C1.3906 1.87854 1.46517 2.34136 1.58014 2.81145C1.6951 3.28154 1.85557 3.75035 2.06156 4.21787ZM10.5641 10.6076C10.5898 10.6076 10.6111 10.599 10.6282 10.582C10.6453 10.5649 10.6539 10.5435 10.6539 10.5178V9.11529C10.6539 9.0811 10.6453 9.05331 10.6282 9.03194C10.6111 9.01057 10.5855 8.99561 10.5513 8.98707L9.15129 8.70245C9.12565 8.69391 9.10321 8.69284 9.08398 8.69925C9.06474 8.70566 9.04444 8.71955 9.02307 8.74092L7.83589 9.94092C8.27777 10.1469 8.73867 10.3044 9.21859 10.4134C9.6985 10.5223 10.147 10.5871 10.5641 10.6076Z" fill="white"/></svg><?php echo $phone;?></a>
                            <div class="dropdown">
                                <div class="dropdown-menu" aria-labelledby="dropdownSocial">
                                    <nav class="header-top-nav">
                                        <ul class="header-top-contact">
                                            <li>
                                                <a href="tel:<?php echo $phone;?>"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="ic" clip-path="url(#clip0_1346_3125)"><mask id="mask0_1346_3125" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24"><rect id="Bounding box" width="24" height="24" fill="#D9D9D9"/></mask><g mask="url(#mask0_1346_3125)"><path id="call" d="M12.9538 13.6283C11.6573 13.6283 10.3733 13.3206 9.10192 12.7052C7.83057 12.0899 6.69554 11.2828 5.69682 10.2841C4.6981 9.28539 3.88999 8.15142 3.27247 6.8822C2.65495 5.61297 2.34619 4.33007 2.34619 3.0335C2.34619 2.8335 2.41286 2.66683 2.54619 2.5335C2.67952 2.40016 2.84619 2.3335 3.04619 2.3335H5.22051C5.39316 2.3335 5.54381 2.3867 5.67244 2.49311C5.80106 2.59952 5.88076 2.73692 5.91154 2.9053L6.29359 4.86681C6.32008 5.03091 6.3173 5.18006 6.28526 5.31425C6.2532 5.44844 6.1829 5.56553 6.07436 5.66553L4.54102 7.16425C5.06752 8.05827 5.69531 8.86596 6.42438 9.58733C7.15343 10.3087 7.97865 10.9378 8.90002 11.4745L10.3898 9.95913C10.4983 9.85059 10.6267 9.77345 10.775 9.72773C10.9233 9.682 11.0752 9.67238 11.2308 9.69888L13.082 10.0758C13.2504 10.1134 13.3878 10.1948 13.4942 10.32C13.6006 10.4452 13.6538 10.5942 13.6538 10.7668V12.9283C13.6538 13.1283 13.5872 13.295 13.4538 13.4283C13.3205 13.5617 13.1538 13.6283 12.9538 13.6283ZM4.06156 6.21811L5.25131 5.07965C5.27267 5.06255 5.28656 5.03904 5.29297 5.00913C5.29939 4.97921 5.29831 4.95143 5.28976 4.9258L5.00003 3.43605C4.99147 3.40186 4.97651 3.37622 4.95514 3.35913C4.93378 3.34203 4.906 3.33348 4.87181 3.33348H3.44617C3.42053 3.33348 3.39916 3.34203 3.38206 3.35913C3.36497 3.37622 3.35642 3.39759 3.35642 3.42323C3.3906 3.87879 3.46517 4.34161 3.58014 4.8117C3.6951 5.28179 3.85557 5.75059 4.06156 6.21811ZM12.5641 12.6078C12.5898 12.6078 12.6111 12.5993 12.6282 12.5822C12.6453 12.5651 12.6539 12.5437 12.6539 12.5181V11.1155C12.6539 11.0813 12.6453 11.0536 12.6282 11.0322C12.6111 11.0108 12.5855 10.9959 12.5513 10.9873L11.1513 10.7027C11.1256 10.6942 11.1032 10.6931 11.084 10.6995C11.0647 10.7059 11.0444 10.7198 11.0231 10.7412L9.83589 11.9412C10.2778 12.1472 10.7387 12.3046 11.2186 12.4136C11.6985 12.5226 12.147 12.5873 12.5641 12.6078Z" fill="white"/></g></g><defs><clipPath id="clip0_1346_3125"><rect width="16" height="16" fill="white"/></clipPath></defs></svg><?php echo $phone;?></a>
                                            </li>
                                            <li>
                                                <a href="mailto:<?php echo $email;?>"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="ic" clip-path="url(#clip0_1346_3222)"><mask id="mask0_1346_3222" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24"><rect id="Bounding box" width="24" height="24" fill="#D9D9D9"/></mask><g mask="url(#mask0_1346_3222)"><path id="mail" d="M2.87188 13C2.53513 13 2.25008 12.8833 2.01675 12.65C1.78341 12.4166 1.66675 12.1316 1.66675 11.7948V4.20513C1.66675 3.86838 1.78341 3.58333 2.01675 3.35C2.25008 3.11667 2.53513 3 2.87188 3H13.1282C13.465 3 13.75 3.11667 13.9834 3.35C14.2167 3.58333 14.3334 3.86838 14.3334 4.20513V11.7948C14.3334 12.1316 14.2167 12.4166 13.9834 12.65C13.75 12.8833 13.465 13 13.1282 13H2.87188ZM13.3334 4.9615L8.32441 8.16792C8.27314 8.19697 8.22015 8.21983 8.16545 8.2365C8.11075 8.25317 8.05562 8.2615 8.00006 8.2615C7.94451 8.2615 7.88938 8.25317 7.83468 8.2365C7.77998 8.21983 7.72699 8.19697 7.67571 8.16792L2.66673 4.9615V11.7948C2.66673 11.8547 2.68596 11.9038 2.72443 11.9423C2.7629 11.9808 2.81205 12 2.87188 12H13.1282C13.1881 12 13.2372 11.9808 13.2757 11.9423C13.3142 11.9038 13.3334 11.8547 13.3334 11.7948V4.9615ZM8.00006 7.33332L13.2308 3.99998H2.7693L8.00006 7.33332ZM2.66673 5.11533V4.35318V4.37305V4.3519V5.11533Z" fill="white"/></g></g><defs><clipPath id="clip0_1346_3222"><rect width="16" height="16" fill="white"/></clipPath></defs></svg><?php echo $email;?></a>
                                            </li>
                                        </ul>
                                        <?php echo get_template_part('template-parts/social',) ;?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-top-language">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.00006 13.3334C6.13169 13.3334 5.31225 13.1669 4.54175 12.834C3.77124 12.5011 3.09923 12.0479 2.52571 11.4744C1.95221 10.9009 1.49901 10.2289 1.16611 9.45838C0.833204 8.68788 0.666748 7.86844 0.666748 7.00007C0.666748 6.12485 0.833204 5.3037 1.16611 4.53662C1.49901 3.76953 1.95221 3.09923 2.52571 2.52572C3.09923 1.95222 3.77124 1.49902 4.54175 1.16612C5.31225 0.833204 6.13169 0.666748 7.00006 0.666748C7.87528 0.666748 8.69643 0.833204 9.46352 1.16612C10.2306 1.49902 10.9009 1.95222 11.4744 2.52572C12.0479 3.09923 12.5011 3.76953 12.834 4.53662C13.1669 5.3037 13.3334 6.12485 13.3334 7.00007C13.3334 7.86844 13.1669 8.68788 12.834 9.45838C12.5011 10.2289 12.0479 10.9009 11.4744 11.4744C10.9009 12.0479 10.2306 12.5011 9.46352 12.834C8.69643 13.1669 7.87528 13.3334 7.00006 13.3334ZM7.00006 12.3193C7.34024 11.868 7.62657 11.4129 7.85905 10.9539C8.09153 10.4949 8.28084 9.99321 8.427 9.44877H5.57313C5.72783 10.0103 5.91929 10.5206 6.1475 10.9795C6.3757 11.4385 6.65989 11.8851 7.00006 12.3193ZM5.70906 12.136C5.45351 11.7693 5.22402 11.3524 5.0206 10.8853C4.81718 10.4182 4.65905 9.93937 4.54623 9.44877H2.28466C2.63681 10.1411 3.10904 10.7227 3.70135 11.1937C4.29367 11.6646 4.96291 11.9787 5.70906 12.136ZM8.29107 12.136C9.03722 11.9787 9.70646 11.6646 10.2988 11.1937C10.8911 10.7227 11.3633 10.1411 11.7155 9.44877H9.4539C9.31971 9.94364 9.1509 10.4246 8.94748 10.8917C8.74406 11.3588 8.52525 11.7736 8.29107 12.136ZM1.86545 8.4488H4.34366C4.30179 8.20093 4.27145 7.95798 4.25265 7.71995C4.23385 7.4819 4.22445 7.24194 4.22445 7.00007C4.22445 6.75819 4.23385 6.51823 4.25265 6.28018C4.27145 6.04215 4.30179 5.7992 4.34366 5.55133H1.86545C1.80135 5.77783 1.7522 6.0133 1.71801 6.25775C1.68383 6.50219 1.66673 6.74963 1.66673 7.00007C1.66673 7.2505 1.68383 7.49794 1.71801 7.74238C1.7522 7.98683 1.80135 8.2223 1.86545 8.4488ZM5.34365 8.4488H8.65648C8.69836 8.20093 8.7287 7.96011 8.74751 7.72635C8.76631 7.49259 8.77571 7.2505 8.77571 7.00007C8.77571 6.74963 8.76631 6.50754 8.74751 6.27378C8.7287 6.04002 8.69836 5.7992 8.65648 5.55133H5.34365C5.30177 5.7992 5.27143 6.04002 5.25261 6.27378C5.23382 6.50754 5.22441 6.74963 5.22441 7.00007C5.22441 7.2505 5.23382 7.49259 5.25261 7.72635C5.27143 7.96011 5.30177 8.20093 5.34365 8.4488ZM9.65646 8.4488H12.1347C12.1988 8.2223 12.2479 7.98683 12.2821 7.74238C12.3163 7.49794 12.3334 7.2505 12.3334 7.00007C12.3334 6.74963 12.3163 6.50219 12.2821 6.25775C12.2479 6.0133 12.1988 5.77783 12.1347 5.55133H9.65646C9.69834 5.7992 9.72868 6.04215 9.74748 6.28018C9.76628 6.51823 9.77568 6.75819 9.77568 7.00007C9.77568 7.24194 9.76628 7.4819 9.74748 7.71995C9.72868 7.95798 9.69834 8.20093 9.65646 8.4488ZM9.4539 4.55137H11.7155C11.359 3.8505 10.89 3.26886 10.3084 2.80646C9.72677 2.34408 9.05432 2.02784 8.29107 1.85775C8.54662 2.24578 8.77397 2.67014 8.97311 3.13083C9.17227 3.59152 9.33253 4.06503 9.4539 4.55137ZM5.57313 4.55137H8.427C8.2723 3.9941 8.07764 3.48063 7.84302 3.01097C7.6084 2.54131 7.32742 2.09793 7.00006 1.68083C6.67271 2.09793 6.39173 2.54131 6.15711 3.01097C5.92249 3.48063 5.72783 3.9941 5.57313 4.55137ZM2.28466 4.55137H4.54623C4.6676 4.06503 4.82786 3.59152 5.02701 3.13083C5.22616 2.67014 5.45351 2.24578 5.70906 1.85775C4.94154 2.02784 4.26803 2.34515 3.68853 2.80968C3.10904 3.27422 2.64109 3.85478 2.28466 4.55137Z" fill="white"/>
                                    </svg>
                                    <?php echo pll_current_language();?>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $menu_args = array(
                                        'theme_location' => 'languages',
                                        'menu_class' => 'header-language'
                                    );
                                    wp_nav_menu($menu_args);?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header-bottom">
                    <?php if ($logo['ID']) :?>
                        <div class="header-bottom-logo">
                            <a href="<?php echo get_home_url();?>">
                                <?php echo getImage($logo);?>
                            </a>
                        </div>
                    <?php endif;?>
                    <?php
                    $menu_args = array(
                        'theme_location' => 'main',
                        'menu_class' => 'header-wrapper header-bottom-menus'
                    );
                    wp_nav_menu($menu_args);?>
                    <div class="section-button">
                        <?php 
                        $link = get_field('btn_primary');
                        if( $link ): 
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <a class="btn btn-primary" href="<?php echo get_home_url();?>/#contacts">
                                <?php echo esc_html( $link['title'] ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="header-burger">
                        <div id="burger-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>