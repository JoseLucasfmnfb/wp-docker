<?php
	
	//////////////////////////////////////////////////
	############## slider
	//////////////////////////////////////////////////

	add_action( 'init', 'slider' );
	function slider() {
		$labels = array(
			'name' 			=> __( 'Slider' ),
			'singular_name' => __( 'Slider' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title','editor', 'thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'slider', $post);
	}
    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_61ab7b9383578',
            'title' => 'Campos do botão',
            'fields' => array(
                array(
                    'key' => 'field_61ab964d9e923',
                    'label' => 'Label do botão',
                    'name' => 'label_do_botao',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_61ab965d9e924',
                    'label' => 'Link do botão',
                    'name' => 'link_do_botao',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'slider',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        ));
    endif;	

	//////////////////////////////////////////////////
	############## sobre
	//////////////////////////////////////////////////

	add_action( 'init', 'sobre' );
	function sobre() {
		$labels = array(
			'name' 			=> __( 'Sobre nós' ),
			'singular_name' => __( 'Sobre nós' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'sobre', $post);
	}

	//////////////////////////////////////////////////
	############## post_blog
	//////////////////////////////////////////////////

	add_action( 'init', 'post_blog' );
	function post_blog() {
		$labels = array(
			'name' 			=> __( 'Blog' ),
			'singular_name' => __( 'Blog' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'taxonomies'		=> array('categoria'),
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'post-blog', $post);
	}
?>