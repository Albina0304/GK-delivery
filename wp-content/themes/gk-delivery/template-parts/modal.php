<?php $modconf = get_field('modal_confiramtion', 'options') ;?>
<?php $modal_out = get_field('modal_out', 'options') ;?>
<div class="modal fade" id="exampleModalToggle">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <?php if ($modconf['image']) :?>
                <div class="image-modal">
                    <?php echo wp_get_attachment_image($modconf['image'] ['ID'], 'full');?>
                </div>
            <?php endif;?>
            <?php if ($modconf['title']) :?>
                <h4 class="title-modal">
                    <?php echo $modconf['title'];?>
                </h4>
            <?php endif;?>
            <?php if ($modconf['text']) :?>
                <div class="text-modal">
                    <?php echo $modconf['text'];?>
                </div>
            <?php endif;?>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-out">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <?php if ($modal_out['image']) :?>
                <div class="image-modal">
                    <?php echo wp_get_attachment_image($modal_out['image'] ['ID'], 'full');?>
                </div>
            <?php endif;?>
            <?php if ($modal_out['title']) :?>
                <h4 class="title-modal">
                    <?php echo $modal_out['title'];?>
                </h4>
            <?php endif;?>
            <?php if ($modal_out['text']) :?>
                <div class="text-modal out">
                    <?php echo $modal_out['text'];?>
                </div>
            <?php endif;?>
            <div class="section-button">
                <?php 
                $link = get_field('btn_primary');
                if( $link ): 
                    $link_target = $link['target'] ? $link['target'] : '_self';?>
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
                        <?php echo esc_attr( $link['title'] ); ?>
                    </button>
                <?php endif;?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    </div>
</div>
