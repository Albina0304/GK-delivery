<?php 
$odds = get_field('odds');?>
<section id="advantage" class="section odds">
    <div class="container">
        <div class="odds-description">
            <?php if ($odds['title']) :?>
                <h2 class="odds-title">
                    <?php echo $odds['title'];?>
                </h2>
            <?php endif;?>
            <?php if ($odds['text']) :?>
                <div class="odds-text">
                    <?php echo $odds['text'];?>
                </div>
            <?php endif;?>
        </div>
        <div class="odds-colons">
            <?php
            if(isset($odds['repeater'])):
                foreach($odds['repeater'] as $odd_repeater) { ?>
                    <div class="odds-col">
                        <div class="odds-info">
                            <?php if ($odd_repeater['image']) :?>
                                <div class="odds-img">
                                    <?php echo getImage($odd_repeater['image'], 'thumbnail') ;?>
                                </div>
                            <?php endif;?> 
                            <?php if ($odd_repeater['title']) :?>
                                <h3 class="odds-title">
                                    <?php echo ($odd_repeater['title']) ;?>
                                </h3>
                            <?php endif;?>
                            <?php if ($odd_repeater['text']) :?>
                                <div class="odds-text">
                                    <?php echo ($odd_repeater['text']) ;?>
                                </div>
                            <?php endif;?>   
                        </div>
                    </div>
                <?php } ;
            endif;?>
        </div>
    </div>
</section>