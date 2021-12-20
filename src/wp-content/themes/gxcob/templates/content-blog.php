<?php
    $args_descricao_blog = array(
        'post_type' => 'descricao-blog',
        'posts_per_page' => 1,
    );

    $descricao_blog_query = new WP_Query( $args_descricao_blog );

    while($descricao_blog_query->have_posts()) : $descricao_blog_query->the_post();
        $titulo_descricao = get_the_title();
        $subtitulo_descricao = get_field('subtitulo');
        $content_descricao = get_the_content();
    endwhile;
?>

<?php
    $args_posts_blog = array(
        'post_type' => 'post-blog',
        'posts_per_page' => 3,
    );

    $posts_blog_query = new WP_Query( $args_posts_blog );
?>

<?php if ($posts_blog_query->have_posts()):?>
    <section id="blog" class="blog-section pt-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
                    <div class="section-title text-center mb-55">
                        <?php if ($subtitulo_descricao):?>
                            <span class="wow fadeInDown" data-wow-delay=".2s">
                                <?php echo $subtitulo_descricao; ?>
                            </span>
                        <?php endif ?>
                        <?php if ($titulo_descricao):?>
                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                <?php echo $titulo_descricao; ?>
                            </h2>
                        <?php endif ?>
                        <?php if ($content_descricao):?>
                            <p class="wow fadeInUp" data-wow-delay=".4s">
                                <?php echo $content_descricao; ?>
                            </p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while($posts_blog_query->have_posts()) : $posts_blog_query->the_post(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".2s">
                            <div class="blog-img mb-25">
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </a>
                            </div>
                            <!-- <div class="blog-meta mb-20">
                                <div class="blog-author">
                                    <img src="<?php echo WP_TEMPLATE ?>/assets/img/blog/blog-author-1.png" alt="">
                                    <span>Tina Mark</span>
                                </div>
                                <div class="blog-comment">
                                    <i class="lni lni-comments-alt"></i>
                                    <span>2 Comments</span>
                                </div>
                            </div> -->
                            <div class="blog-title">
                                <h4>
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <?php echo get_the_title(); ?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="container text-center">
			<a class="secondary-button" href="<?php echo WP_URL ?>/blog">Veja mais</a>
		</div>
    </section>
<?php endif ?>