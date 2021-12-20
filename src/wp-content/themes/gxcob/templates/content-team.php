<?php
    $args = array(
        'post_type' => 'descricao-nosso-time',
        'posts_per_page' => 1,
    );

    $my_query = new WP_Query( $args );

    while($my_query->have_posts()) : $my_query->the_post();
        $titulo_descricao = get_the_title();
        $content_descricao = get_the_content();
    endwhile;
?>
<section id="team" class="team-section pt-150 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">
                        Nosso Time
                    </span>
                    <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                        <?php echo $titulo_descricao; ?>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        <?php echo $content_descricao; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'nosso-time',
                    'posts_per_page' => 4,
                );
            
                $my_query = new WP_Query( $args );
            
                while($my_query->have_posts()) : $my_query->the_post();
                    $facebook = get_field('facebook');
                    $instagram = get_field('instagram');
                    $twitter = get_field('twitter');
                    $linkedin = get_field('linkedin');
            ?>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-team mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-img mb-20">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <div class="team-social-links">
                                <ul>
                                    <?php if ($facebook):?>
                                        <li>
                                            <a href="<?php echo $facebook; ?>">
                                                <i class="lni lni-facebook-filled"></i>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($twitter):?>
                                        <li>
                                            <a href="<?php echo $twitter; ?>">
                                                <i class="lni lni-twitter-filled"></i>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($linkedin):?>
                                        <li>
                                            <a href="<?php echo $linkedin; ?>">
                                                <i class="lni lni-linkedin-original"></i>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                    <?php if ($instagram):?>
                                        <li>
                                            <a href="<?php echo $instagram; ?>">
                                                <i class="lni lni-instagram-original"></i>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                </ul>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>
                                <?php echo get_the_title(); ?>
                            </h4>
                            <span>
                                <?php echo get_field('funcao'); ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>