<?php 
$form = get_field('forms');
$form_image = get_field('form_image');
$form_title = get_field('form_title');
$form_text = get_field('form_text');?>
<section id="contacts" class="form">
    <div class="container-gl">
        <div class="form-global">
            <div class="container">
                <div class="form-description">
                    <?php if (['title']) :?>
                        <h3 class="form-description-title">
                            <?php echo $form_title ;?>
                        </h3>
                    <?php endif;?>
                    <?php if (['text']) :?>
                        <div class="form-description-text">
                            <?php echo $form_text ;?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="form-contact">
                    <?php if (['image']) :?>
                        <div class="form-image">
                            <?php echo wp_get_attachment_image($form_image['ID'], 'full');?>
                        </div>
                    <?php endif;?>
                    <div class="form-application">
                        <?php echo do_shortcode('[contact-form-7 id="127" title="Form Application"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>