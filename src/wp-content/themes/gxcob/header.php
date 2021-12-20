<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<?php the_css_config(); ?>
    <link rel="stylesheet" href="<?php echo WP_TEMPLATE ?>/assets/css/bootstrap-5.0.0-alpha-1.min.css">
    <link rel="stylesheet" href="<?php echo WP_TEMPLATE ?>/assets/css/LineIcons.2.0.css">
    <link rel="stylesheet" href="<?php echo WP_TEMPLATE ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo WP_TEMPLATE ?>/assets/css/glightbox.min.css">
    <link rel="stylesheet" href="<?php echo WP_TEMPLATE ?>/assets/css/tiny-slider.css">
    <link rel="stylesheet" href="<?php echo WP_TEMPLATE ?>/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo WP_TEMPLATE ?>/style.css">
	<link rel="shortcut icon" type="image/png" href="<?php echo WP_TEMPLATE ?>/image/GXCOB_logo-icone_1.png">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<meta name="msapplication-navbutton-color" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<title><?php echo wp_title('|', true, 'right'); ?></title>
</head>
<body>
<div class="body-wrapper">
<?php 
    global $info;
?>
<script>
    var info = <?php echo json_encode($info); ?>;
    var template_url = <?php echo json_encode(WP_TEMPLATE); ?>;
</script>
<?php if (is_home()): ?>
	<h1 style="display: none !important;">
		<?php echo WP_NAME; ?>
	</h1>
<?php endif ?>
<!-- <header>
	<div class="top">
		<div class="container">
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
	</div>
	<div class="container">
		<div class="row header-wrapper">
			<div class="col-sm-4 logo">
				<a href="<?php echo WP_URL ?>/">
					<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/logo-site.png">
				</a>
			</div>
			<div class="col-sm-8">
				<nav id="menu-desktop">
					<ul>
						<li>
							<a href="<?php echo WP_URL ?>/">
								Home
							</a>
						</li>
						<li>
							<a href="<?php echo WP_URL ?>/sobre-nos">
								Sobre Nós
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
				</nav>
			</div>
		</div>
	</div>
	<?php get_template_part('templates/content-menu-lateral'); ?>
</header> -->
<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg <?php echo is_home() ? '' : 'not-home'; ?>">
                        <a class="navbar-brand" href="<?php echo WP_URL ?>/">
                            <img src="<?php echo WP_TEMPLATE ?>/image/GXCOB_logo_2.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="<?php echo WP_URL ?>/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#features">Ferramentas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#process">Processos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#team">Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>
                                <li>
                                    <a href="<?php echo WP_URL ?>/contato">
                                        Contato
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="page-scroll" href="#subscribe">Subscribe</a>
                                </li> -->
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
</header>