<?php $socials = get_field('socials', 'options');?>
<ul class="social">
    <?php foreach($socials as $social) { ?>
        <li>
            <a href="<?php echo $social['link'];?>">
                <?php echo wp_get_attachment_image($social['icon']['ID'], 'thumbnail') ;?>
            </a>
        </li>
    <?php } ;?>
</ul>