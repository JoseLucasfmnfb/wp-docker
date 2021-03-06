<?php wp_footer(); ?>
<?php global $info; ?>
<footer class="footer pt-150 gray-bg">
    <img src="<?php echo WP_TEMPLATE ?>/image/GXCOB_logo_1.png" alt="" class="footer-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="footer-links text-center">
                    <a href="index.html" class="logo">
                        <img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/GXCOB_logo_1.png" alt="">
                    </a>
                    <div class="footer-social-links">
                        <ul>
                            <?php if ($info['facebook']):?>
                                <li>
                                    <a target="_blank" href="<?php echo $info['facebook']; ?>">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if ($info['twitter']):?>
                                <li>
                                    <a target="_blank" href="<?php echo $info['twitter']; ?>">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if ($info['linkedin']):?>
                                <li>
                                    <a target="_blank" href="<?php echo $info['linkedin']; ?>">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if ($info['instagram']):?>
                                <li>
                                    <a target="_blank" href="<?php echo $info['instagram']; ?>">
                                        <i class="lni lni-instagram-original"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                    <nav class="footer-menu">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#features">Ferramentas</a></li>
                            <li><a href="#process">Processos</a></li>
                            <li><a href="#team">Time</a></li>
                            <!-- <li><a href="#blog">Blog</a></li> -->
                            <li><a href="<?php echo WP_URL ?>/contato">Contato</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="copyright-area text-center">
            <!-- <p class="mb-0">Designed and Developed by <a href="https://uideck.com" rel="nofollow" target="_blank">UIdeck</a></p> -->
        </div>
    </div>
	<!-- <div class="container">
		<div class="row itens-footer">
			<div class="col-sm-3">
				<h5>Navega????o</h5>
				<ul>
					<li>
						<a href="<?php echo WP_URL ?>/">
							Home
						</a>
					</li>
					<li>
						<a href="<?php echo WP_URL ?>/sobre-nos">
							Sobre N??s
						</a>
					</li>
					<li>
						<a href="<?php echo WP_URL ?>/blog">
							Blog
						</a>
					</li>
					<li>
						<a href="<?php echo WP_URL ?>/contato">
							Contato
						</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<h5>Contato</h5>
				<ul>
					<?php if ($info['telefone']): ?>
						<li>
							<a href="tel:<?php echo $info['telefone']; ?>" target="_blank">
								<i class="fas fa-phone"></i> <?php echo $info['telefone']; ?>
							</a>
						</li>
					<?php endif ?>
					<?php if ($info['celular']): ?>
						<li>
							<a href="tel:<?php echo $info['celular']; ?>" target="_blank">
								<i class="fas fa-mobile-alt"></i> <?php echo $info['celular']; ?>
							</a>
						</li>
					<?php endif ?>
					<?php if ($info['email']): ?>
						<li>
							<a href="mailto:<?php echo $info['email']; ?>" target="_blank">
								<i class="fas fa-envelope"></i> <?php echo $info['email']; ?>
							</a>
						</li>
					<?php endif ?>
					<?php if ($info['endereco']): ?>
						<li>
							<a href="http://maps.google.com/?q=<?php echo $info['endereco']; ?>" target="_blank">
								<i class="fas fa-map-marker-alt"></i> <?php echo $info['endereco']; ?>
							</a>
						</li>
					<?php endif ?>
				</ul>
				<div class="midias">
					<ul>
						<?php if ($info['facebook']): ?>
							<li>
								<a target="_blank" href="<?php echo $info['facebook'] ?>">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
						<?php endif ?>
						<?php if ($info['instagram']): ?>
							<li>
								<a target="_blank" href="<?php echo $info['instagram'] ?>">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
						<?php endif ?>
						<?php if ($info['linkedin']): ?>
							<li>
								<a target="_blank" href="<?php echo $info['linkedin'] ?>">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						<?php endif ?>
						<?php if ($info['whatsapp']): ?>
							<li>
								<a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo preg_replace('/\D/', '', $info['whatsapp']); ?>">
									<i class="fab fa-whatsapp"></i>
								</a>
							</li>
						<?php endif ?>
					</ul>
				</div>
			</div>
			<div class="col-sm-5 text-center">
				<?php if ($info['facebook']): ?>
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0"></script>
					<div class="fb-page" data-href="<?php echo $info['facebook']; ?>" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo $info['facebook']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $info['facebook']; ?>"><?php echo $info['title']; ?></a></blockquote></div>
				<?php endif ?>
			</div>
		</div>
	</div>
	<div id="copyright">
		<div class="container">
			<div class="row copyright-wrapper">
				<p>Todos os direitos reservados</p>
				<p class="assinatura">
					<a target="_blank" href="https://www.site.com.br">
						Desenvolvido por <img src="<?php echo WP_TEMPLATE; ?>/image/logo-site.png" alt="">
					</a>
				</p>
			</div>
		</div>
	</div> -->
</footer>
<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>
<div class="script">
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/font-awesome/js/fontawesome.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/lightgallery/dist/js/lightgallery.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo WP_TEMPLATE; ?>/assets/js/bootstrap.bundle-5.0.0.alpha-1-min.js"></script>
    <script src="<?php echo WP_TEMPLATE; ?>/assets/js/count-up.min.js"></script>
    <script src="<?php echo WP_TEMPLATE; ?>/assets/js/glightbox.min.js"></script>
    <script src="<?php echo WP_TEMPLATE; ?>/assets/js/tiny-slider.js"></script>
    <script src="<?php echo WP_TEMPLATE; ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo WP_TEMPLATE; ?>/assets/js/main.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/script.min.js"></script>
	<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/scripts/newsletter.js"></script>
</div>
</div>
</body>
</html>