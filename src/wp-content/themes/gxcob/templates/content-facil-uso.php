<?php
    $args = array(
        'post_type' => 'facilidade-uso',
        'posts_per_page' => 1,
    );

    $my_query = new WP_Query( $args );

    while($my_query->have_posts()) : $my_query->the_post();
        $titulo = get_the_title();
        $conteudo = get_the_content();
        $subtitulo = get_field('subtitulo');
        $repeater = get_field('itens_oferecidos');
        $thumbnail = get_the_post_thumbnail_url();
    endwhile;
?>
<section id="process" class="process-section pt-150 mb-150">
    <img src="<?php echo WP_TEMPLATE ?>/assets/img/process/process-shape.svg" alt="" class="shape process-shape">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="section-title mb-30">
                    <span class="wow fadeInDown" data-wow-delay=".2s">
                        <?php echo $subtitulo; ?>
                    </span>
                    <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                        <?php echo $titulo; ?>
                    </h2>
                    <p class="mb-50 wow fadeInUp" data-wow-delay=".6s">
                        <?php echo $conteudo; ?>
                    </p>
                </div>
                <div class="process-faq">
                    <div class="accordion" id="accordionExample2">
                        <?php foreach($repeater as $key =>$value): ?>
                            <div class="faq-item mb-15 wow fadeInUp" data-wow-delay=".2s">
                                <div class="faq-header" id="faq-heading-1">
                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse" data-target="#faq-<?php echo $key; ?>"
                                        aria-expanded="true" aria-controls="faq-<?php echo $key; ?>">
                                        <?php if ($value['tag_icone']):?>
                                            <i class="<?php echo $value['tag_icone']; ?> gradient-<?php echo $key+1; ?>"></i>
                                        <?php endif ?>
                                        <!-- <i class="lni lni-bullhorn gradient-1"></i> -->
                                        <span>
                                            <?php echo $value['titulo']; ?>
                                        </span>
                                    </button>
                                </div>
                                <div id="faq-<?php echo $key; ?>" class="collapse" aria-labelledby="faq-heading-<?php echo $key; ?>" data-parent="#accordionExample">
                                    <div class="faq-body">
                                        <p>
                                            <?php echo $value['descricao']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="process-img wow fadeInRight" data-wow-delay=".5s">
                    <img src="<?php echo $thumbnail; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>