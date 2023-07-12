<?php 
$maps = get_field('maps');?>
<section id="map" class="section section-maps">
    <div class="container-gl">
        <div class="map lazy">
            <div class="container">
                <div class="map-info">
                    <?php if ($maps['title']) :?>
                        <h2 class="map-title">
                            <?php echo $maps['title'];?>
                        </h2>
                    <?php endif;?>
                    <?php if ($maps['text']) :?>
                        <div class="map-text">
                            <?php echo $maps['text'];?>
                        </div>
                    <?php endif;?>
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
                </div>
            </div>
        </div>
    </div>
</section>