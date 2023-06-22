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
