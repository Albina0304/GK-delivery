            <?php 
            $footer_logo = get_field('footer_logo', 'options') ;
            $copyright = get_field('copyright', 'options');
            $text = get_field('text', 'options') ;
            $menus_title = get_field('menus_title', 'options');
            $contacts_title = get_field('contacts_title', 'options');
            $phone = get_field('phone', 'options');
            $email = get_field('email', 'options');
            ?>
            <footer class="footer">
                <div class="container-gl">
                    <div class="footer-main">
                        <div class="container">
                            <div class="footer-global">
                                <div class="footer-global-left">
                                    <?php if ($footer_logo['ID']) :?>
                                        <div class="footer-logo">
                                            <a href="<?php echo get_home_url();?>">
                                                <?php echo getImage($footer_logo);?>
                                            </a>
                                        </div>
                                    <?php endif;?>
                                    <?php if (isset($text)) :?>
                                        <div class="footer-text">
                                            <?php echo $text;?>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="footer-global-right">
                                    <div class="footer-menus">
                                        <?php if (isset($menus_title)):?>
                                            <h4 class="footer-menus-title">
                                                <?php echo $menus_title;?>
                                            </h4>
                                        <?php endif;?>
                                        <?php
                                        $menu_args = array(
                                            'theme_location' => 'main',
                                            'menu_class' => 'footer-global-right footer-menus'
                                        );
                                        wp_nav_menu($menu_args);?>
                                    </div>
                                    <div class="footer-contacts">
                                        <?php if (isset($contacts_title)):?>
                                            <h4 class="footer-menus-title">
                                                <?php echo $contacts_title;?>
                                            </h4>
                                        <?php endif;?>
                                        <nav class="footer-nav">
                                            <ul class="footer-contact">
                                                <li>
                                                    <a href="tel:<?php echo $phone;?>"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.9538 11.6281C9.65726 11.6281 8.37329 11.3204 7.10193 10.705C5.83057 10.0896 4.69554 9.28258 3.69682 8.28385C2.6981 7.28514 1.88999 6.15117 1.27247 4.88195C0.654953 3.61273 0.346191 2.32983 0.346191 1.03325C0.346191 0.833252 0.412858 0.666585 0.546191 0.533252C0.679525 0.399919 0.846191 0.333252 1.04619 0.333252H3.22051C3.39316 0.333252 3.54381 0.386458 3.67244 0.492869C3.80106 0.59928 3.88076 0.736675 3.91154 0.905053L4.29359 2.86657C4.32008 3.03067 4.3173 3.17981 4.28526 3.314C4.2532 3.44819 4.1829 3.56529 4.07436 3.66529L2.54102 5.164C3.06752 6.05803 3.69531 6.86572 4.42438 7.58709C5.15343 8.30845 5.97865 8.93752 6.90002 9.47427L8.38976 7.95889C8.4983 7.85034 8.62672 7.77321 8.77501 7.72749C8.9233 7.68175 9.07522 7.67214 9.23078 7.69864L11.082 8.07555C11.2504 8.11316 11.3878 8.19458 11.4942 8.31979C11.6006 8.445 11.6538 8.59393 11.6538 8.76659V10.9281C11.6538 11.1281 11.5872 11.2948 11.4538 11.4281C11.3205 11.5614 11.1538 11.6281 10.9538 11.6281ZM2.06156 4.21787L3.25131 3.0794C3.27267 3.0623 3.28656 3.0388 3.29297 3.00889C3.29939 2.97896 3.29831 2.95119 3.28976 2.92555L3.00003 1.4358C2.99147 1.40161 2.97651 1.37597 2.95514 1.35889C2.93378 1.34179 2.906 1.33324 2.87181 1.33324H1.44617C1.42053 1.33324 1.39916 1.34179 1.38206 1.35889C1.36497 1.37597 1.35642 1.39734 1.35642 1.42299C1.3906 1.87854 1.46517 2.34136 1.58014 2.81145C1.6951 3.28154 1.85557 3.75035 2.06156 4.21787ZM10.5641 10.6076C10.5898 10.6076 10.6111 10.599 10.6282 10.582C10.6453 10.5649 10.6539 10.5435 10.6539 10.5178V9.11529C10.6539 9.0811 10.6453 9.05331 10.6282 9.03194C10.6111 9.01057 10.5855 8.99561 10.5513 8.98707L9.15129 8.70245C9.12565 8.69391 9.10321 8.69284 9.08398 8.69925C9.06474 8.70566 9.04444 8.71955 9.02307 8.74092L7.83589 9.94092C8.27777 10.1469 8.73867 10.3044 9.21859 10.4134C9.6985 10.5223 10.147 10.5871 10.5641 10.6076Z" fill="white"/></svg><?php echo $phone;?></a>
                                                </li>
                                                <li>
                                                    <a href="mailto:<?php echo $email;?>"><svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.87176 9.99997C1.535 9.99997 1.24996 9.8833 1.01663 9.64997C0.783293 9.41663 0.666626 9.13159 0.666626 8.79483V1.20513C0.666626 0.868379 0.783293 0.583333 1.01663 0.35C1.24996 0.116667 1.535 0 1.87176 0H12.1281C12.4649 0 12.7499 0.116667 12.9833 0.35C13.2166 0.583333 13.3333 0.868379 13.3333 1.20513V8.79483C13.3333 9.13159 13.2166 9.41663 12.9833 9.64997C12.7499 9.8833 12.4649 9.99997 12.1281 9.99997H1.87176ZM12.3333 1.9615L7.32429 5.16792C7.27302 5.19697 7.22003 5.21983 7.16533 5.2365C7.11063 5.25317 7.0555 5.2615 6.99994 5.2615C6.94439 5.2615 6.88926 5.25317 6.83456 5.2365C6.77986 5.21983 6.72687 5.19697 6.67559 5.16792L1.66661 1.9615V8.79483C1.66661 8.85467 1.68584 8.90382 1.72431 8.94228C1.76278 8.98075 1.81193 8.99998 1.87176 8.99998H12.1281C12.188 8.99998 12.2371 8.98075 12.2756 8.94228C12.314 8.90382 12.3333 8.85467 12.3333 8.79483V1.9615ZM6.99994 4.33332L12.2307 0.999984H1.76918L6.99994 4.33332ZM1.66661 2.11533V1.35318V1.37305V1.3519V2.11533Z" fill="white"/></svg><?php echo $email;?></a>
                                                </li>
                                            </ul>
                                            <?php echo get_template_part('template-parts/social') ;?>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-bottom">
                                <?php if (isset($copyright)):?>
                                    <div class="footer-copyright">
                                        &copy;<?php echo $copyright;?>
                                    </div>
                                <?php endif;?>
                                <div class="scroll-btn">
                                    <button id="scroll"><?php echo pll__('Догори'); ?><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="ic" clip-path="url(#clip0_1346_4311)"><mask id="mask0_1346_4311" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24"><rect id="Bounding box" width="24" height="24" fill="#D9D9D9"/></mask><g mask="url(#mask0_1346_4311)"><path id="arrow_upward_alt" d="M7.50009 5.40528L5.28467 7.62068C5.19237 7.71298 5.07635 7.7602 4.93661 7.76235C4.79687 7.76448 4.67872 7.71726 4.58214 7.62068C4.48555 7.5241 4.43726 7.40701 4.43726 7.26941C4.43726 7.1318 4.48555 7.01471 4.58214 6.91813L7.57829 3.92198C7.6988 3.80147 7.8394 3.74121 8.00007 3.74121C8.16075 3.74121 8.30135 3.80147 8.42186 3.92198L11.418 6.91813C11.5103 7.01044 11.5575 7.12646 11.5597 7.2662C11.5618 7.40594 11.5146 7.5241 11.418 7.62068C11.3214 7.71726 11.2043 7.76554 11.0667 7.76554C10.9291 7.76554 10.8121 7.71726 10.7155 7.62068L8.50006 5.40528V11.2694C8.50006 11.4113 8.4522 11.5301 8.35647 11.6258C8.26075 11.7215 8.14195 11.7694 8.00007 11.7694C7.8582 11.7694 7.7394 11.7215 7.64367 11.6258C7.54795 11.5301 7.50009 11.4113 7.50009 11.2694V5.40528Z" fill="white"/></g></g><defs><clipPath id="clip0_1346_4311"><rect width="16" height="16" fill="white"/></clipPath></defs></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php wp_footer()?>
    </body>
</html>
