<?php
	get_header();
	echo "<main>";
	get_template_part('templates/content-banner');
	get_template_part('templates/content-recursos');
	get_template_part('templates/content-sobre');
	get_template_part('templates/content-porque-usamos');
	get_template_part('templates/content-facil-uso');
	get_template_part('templates/content-contador');
	get_template_part('templates/content-team');
	//get_template_part('templates/content-depoimentos');
	//get_template_part('templates/content-blog');
	//get_template_part('templates/content-video');
	get_template_part('templates/content-newsletter');
	//get_template_part('templates/content-contato');
	//get_template_part('templates/content-mapa');
	echo "</main>";
	get_footer();
?>