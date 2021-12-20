<?php
    $args = array(
        'post_type' => 'descricao_recursos',
        'posts_per_page' => 1,
    );

    $my_query = new WP_Query( $args );

    while($my_query->have_posts()) : $my_query->the_post();
        $titulo_descricao = get_the_title();
        $descricao_descricao = get_the_content();
        $subtitulo_descricao = get_field('label_subtitulo');
    endwhile;
?>

<section id="features" class="service-section gray-bg pt-150 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">
                        <?php if ($subtitulo_descricao):?>
                            <?php echo $subtitulo_descricao; ?>
                        <?php endif ?>
                    </span>
                    <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                        <?php if ($titulo_descricao):?>
                            <?php echo $titulo_descricao; ?>
                        <?php endif ?>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        <?php if ($descricao_descricao):?>
                            <?php echo $descricao_descricao; ?>
                        <?php endif ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'recursos',
                    'posts_per_page' => 4,
                );
            
                $my_query = new WP_Query( $args );
            
                while($my_query->have_posts()) : $my_query->the_post();
                    $count_gradient = 0;
                    $count_gradient++;
            ?>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-service text-center mb-30 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.3s">
                        <div class="service-icon icon-gradient gradient-<?php echo $count_gradient;?> mb-30">
                            <i class="lni lni-money-protection"></i>
                        </div>
                        <h4 class="mb-15">
                            <?php the_title(); ?>
                        </h4>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>