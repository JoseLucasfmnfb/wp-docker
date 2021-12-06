<?php
    $args = array(
        'post_type' => 'slider',
        'posts_per_page' => 1,
    );

    $my_query = new WP_Query( $args );

    while($my_query->have_posts()) : $my_query->the_post();
        $title = get_the_title();
        $conteudo = get_the_content(); 
        $thumbnail_url = get_the_post_thumbnail_url();
        $label_btn = get_field('label_do_botao');
        $link_btn = get_field('link_do_botao');
?>

<?php endwhile; ?>
<section id="home" class="hero-section img-bg" style="background-image: url(<?php echo WP_TEMPLATE ?>/assets/img/hero/hero-bg.svg)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6">
                <div class="hero-content-wrapper">
                    <h1 class="wow fadeInDown" data-wow-delay=".4s" data-wow-duration="1.3s"><?php echo $title; ?></h1>
                    <p class="wow fadeInLeft" data-wow-delay=".6s" data-wow-duration="1.3s"><?php echo $conteudo; ?></p>
                    <?php if ($link_btn):?>
                        <a href="<?php echo $link_btn; ?>" class="theme-btn wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.3s">
                            <?php if ($label_btn):?>
                                <?php echo $label_btn; ?>
                            <?php else:?>
                                Veja mais
                            <?php endif ?>    
                        </a>                        
                    <?php endif ?>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="hero-img">
                    <img  class="wow fadeInRight" data-wow-delay=".4s" data-wow-duration="1.3s" src="<?php echo $thumbnail_url; ?>" alt="">
                    <img src="<?php echo WP_TEMPLATE ?>/assets/img/hero/hero-shape.svg" alt="" class="shape">
                </div>
            </div>
        </div>
    </div>
</section>