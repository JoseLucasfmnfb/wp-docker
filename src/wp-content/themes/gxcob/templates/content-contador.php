<section class="counterup-section pt-50 pb-50">
    <div class="container">
        <img src="<?php echo WP_TEMPLATE ?>/assets/img/shape/repeat-shape.svg" alt="" class="shape counter-shape-1">
        <img src="<?php echo WP_TEMPLATE ?>/assets/img/shape/repeat-shape.svg" alt="" class="shape counter-shape-2">
        <div class="counter-wrapper gradient-1 pt-50">
            <div class="row">
                <?php
                    $args = array(
                        'post_type' => 'contador',
                        'posts_per_page' => 3,
                    );
                
                    $my_query = new WP_Query( $args );
                
                    while($my_query->have_posts()) : $my_query->the_post(); 
                ?>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-counter text-center mb-50">
                            <i class="<?php echo get_field('tag_icone'); ?> icon-gradient gradient-2 mb-30"></i>
                            <h3 class="text-white">
                                <span id="secondo1" class="countup" cup-end="<?php echo get_field('quantidade'); ?>"></span>
                            </h3>
                            <p class="mb-0">
                                <?php echo get_the_title(); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>