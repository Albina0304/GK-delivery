<?php get_header()?>
<section class="section-hero">
    <div class="container-gl">
        <div class="decor">
            <img src="<?php echo get_template_directory_uri().'/assets/images/decor.png';?>">
        </div>
        <div class="hero-general">
            <div class="hero-general-left">
                <?php $hero_title = get_field('hero_title', 'options');?>
                <h1 class="hero-title">
                    <?php echo $hero_title;?>
                </h1>
                <?php $hero_text = get_field('hero_text', 'options');?>
                <div class="hero-text">
                    <?php echo $hero_text;?>
                </div>
                <div class="section-button">
                    <?php 
                    $link = get_field('btn_primary');
                        if( $link ): 
                        $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <a class="btn btn-secondary" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['title'] ); ?>">
                            <?php echo esc_html( $link['title'] ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="hero-general-right">
                <div class="hero-general-right-img">
                    <?php 
                    $hero_image = get_field('hero_image', 'options') ;
                        echo wp_get_attachment_image($hero_image['ID'], 'full');?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section odds">
    <div class="container">
        <?php $odds_title = get_field('odds_title', 'options');?>
        <div class="odds-discription">
            <h3 class="odds-title">
                <?php echo $odds_title;?>
            </h3>
            <?php $odds_text = get_field('odds_text', 'options');?>
            <div class="odds-text">
                <?php echo $odds_text;?>
            </div>
        </div>
        <div class="odds-colons">
        <?php $odds_repeater = get_field('odds_repeater', 'options');?>
            <?php foreach($odds_repeater as $odd_repeater) { ?>
                <div class="odds-col">
                    <div class="odds-col-info">
                        <div class="odds-col-img">
                            <?php echo wp_get_attachment_image($odd_repeater['image']['ID'], 'thumbnail') ;?>
                        </div>
                        <h4 class="odds-col-title">
                            <?php echo ($odd_repeater['title']) ;?>
                        </h4>
                        <div class="odds-col-text">
                            <?php echo ($odd_repeater['text']) ;?>
                        </div>
                    </div>
                </div>
            <?php } ;?>
        </div>
    </div>
</section>
<section class="section section-maps">
    <div class="container-gl">
        <div class="map">
            <div class="container">
                <div class="map-info">
                    <?php $map_title = get_field('map_title', 'options');?>
                    <h3 class="map-title">
                        <?php echo $map_title;?>
                    </h3>
                    <?php $map_text = get_field('map_text', 'options');?>
                    <div class="map-text">
                        <?php echo $map_text;?>
                    </div>
                    <div class="section-button">
                        <?php 
                        $link = get_field('btn_primary');
                            if( $link ): 
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <a class="btn btn-primary" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['title'] ); ?>">
                                <?php echo esc_html( $link['title'] ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section labor">
    <div class="container">
        <div class="labor-global">
            <?php $labor_title = get_field('labor_title', 'options');?>
            <div class="labor-discription">
                <h3 class="labor-title">
                    <?php echo $labor_title;?>
                </h3>
                <?php $labor_text = get_field('labor_text', 'options');?>
                <div class="labor-text">
                    <?php echo $labor_text;?>
                </div>
            </div>
            <div class="labor-colons-slider">
                <?php $labors_repeater = get_field('labor_repeater', 'options');?>
                    <?php foreach($labors_repeater as $labor_repeater) { ?>
                    <div class="labor-col">
                        <div class="labor-col-card">
                            <div class="labor-col-img">
                                <?php echo wp_get_attachment_image($labor_repeater['image']['ID'], 'primary') ;?>
                            </div>
                            <div class="labor-col-info">
                                <div class="number">
                                    <?php echo ($labor_repeater['number']) ;?>
                                </div>
                                <h4 class="labor-col-title">
                                    <?php echo ($labor_repeater['title']) ;?>
                                </h4>
                                <div class="labor-col-text">
                                    <?php echo ($labor_repeater['text']) ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ;?>
            </div>
            <div class="section-button">
                <?php 
                $link = get_field('btn_primary');
                    if( $link ): 
                    $link_target = $link['target'] ? $link['target'] : '_self';?>
                    <a class="btn btn-primary" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['title'] ); ?>">
                        <?php echo esc_html( $link['title'] ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>   
    </div>
</section>
<?php get_footer()?>