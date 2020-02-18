<section class="content">
    <div class="content__left">
        <?php 
                $image = get_field('attr1_image');
                if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" ; class="content__icon">
        <?php endif; ?>
        <h3><?php the_field('attr1_title'); ?></h3>
        <?php the_field('attr1_description'); ?>
    </div>
    <div class="content__right">
        <?php 
                $image = get_field('attr2_image');
                if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" ; class="content__icon">
        <?php endif; ?>
        <h3><?php the_field('attr2_title'); ?></h3>
        <?php the_field('attr2_description'); ?>
    </div>
</section>