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
    ############## descricao_recursos
    //////////////////////////////////////////////////
    
    add_action( 'init', 'descricao_recursos' );
    function descricao_recursos() {
        $labels = array(
            'name'	=> __( 'Descrição Recursos' ),
            'singular_name' => __( 'Descrição Recursos' ),
        );
    
        $post = array(
            'labels'			=> $labels,
            //'taxonomies'		=> array('categoria'),
            'supports'			=> array('title', 'editor'),
            'capability_type'	=> 'post',
            'public'			=> true,
            'has_archive'		=> false,
        );
    
        register_post_type( 'descricao_recursos', $post);
    };

    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_field_descricao_recursos',
            'title' => 'Campos do botão',
            'fields' => array(
                array(
                    'key' => 'field_subtitulo',
                    'label' => 'Subtitulo',
                    'name' => 'label_subtitulo',
                    'type' => 'text',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'descricao_recursos',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'active' => true,
        ));
    endif;

    //////////////////////////////////////////////////
    ############## recursos
    //////////////////////////////////////////////////
    
    add_action( 'init', 'recursos' );
    function recursos() {
        $labels = array(
            'name'	=> __( 'Recursos' ),
            'singular_name' => __( 'Recursos' ),
        );
    
        $post = array(
            'labels'			=> $labels,
            //'taxonomies'		=> array('categoria'),
            'supports'			=> array('title', 'editor','thumbnail'),
            'capability_type'	=> 'post',
            'public'			=> true,
            'has_archive'		=> false,
        );
    
        register_post_type( 'recursos', $post);
    };

    //////////////////////////////////////////////////
    ############## porque_usar
    //////////////////////////////////////////////////
    
    add_action( 'init', 'porque_usar' );
    function porque_usar() {
        $labels = array(
            'name'	=> __( 'Porque Usar' ),
            'singular_name' => __( 'Porque Usar' ),
        );
    
        $post = array(
            'labels'			=> $labels,
            //'taxonomies'		=> array('categoria'),
            'supports'			=> array('title', 'editor','thumbnail'),
            'capability_type'	=> 'post',
            'public'			=> true,
            'has_archive'		=> false,
        );
    
        register_post_type( 'porque-usar', $post);
    };

    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_61bcd600a05bc',
            'title' => 'Campos extras',
            'fields' => array(
                array(
                    'key' => 'field_61bcd6d821b12',
                    'label' => 'Subtitulo',
                    'name' => 'subtitulo',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_61bcd60521b11',
                    'label' => 'Itens Oferecidos',
                    'name' => 'itens_oferecidos',
                    'type' => 'repeater',
                    'collapsed' => 'field_61bcd7a121b13',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_61bcd7a121b13',
                            'label' => 'Titulo',
                            'name' => 'titulo',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_61bcd7a821b14',
                            'label' => 'Descrição',
                            'name' => 'descricao',
                            'type' => 'wysiwyg',
                            'tabs' => 'all',
                            'toolbar' => 'full',
                            'media_upload' => 1,
                            'delay' => 0,
                        ),
                        array(
                            'key' => 'field_61bcd7b721b15',
                            'label' => 'Tag Icone',
                            'name' => 'tag_icone',
                            'type' => 'text',
                        ),
                    ),
                    'layout' => 'row',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'porque-usar',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'active' => true,
        ));
    endif;
    
    //////////////////////////////////////////////////
    ############## facilidade_uso
    //////////////////////////////////////////////////
    
    add_action( 'init', 'facilidade_uso' );
    function facilidade_uso() {
        $labels = array(
            'name'	=> __( 'Facilidade no uso' ),
            'singular_name' => __( 'Facilidade no uso' ),
        );
    
        $post = array(
            'labels'			=> $labels,
            //'taxonomies'		=> array('categoria'),
            'supports'			=> array('title', 'editor','thumbnail'),
            'capability_type'	=> 'post',
            'public'			=> true,
            'has_archive'		=> false,
        );
    
        register_post_type( 'facilidade-uso', $post);
    };

    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_61bcd600a9843',
            'title' => 'Campos extras',
            'fields' => array(
                array(
                    'key' => 'field_61bcd6d821c12',
                    'label' => 'Subtitulo',
                    'name' => 'subtitulo',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_61bcd60521c11',
                    'label' => 'Itens Oferecidos',
                    'name' => 'itens_oferecidos',
                    'type' => 'repeater',
                    'collapsed' => 'field_61bcd7a121c13',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_61bcd7a121c13',
                            'label' => 'Titulo',
                            'name' => 'titulo',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_61bcd7a821c14',
                            'label' => 'Descrição',
                            'name' => 'descricao',
                            'type' => 'wysiwyg',
                            'tabs' => 'all',
                            'toolbar' => 'full',
                            'media_upload' => 1,
                            'delay' => 0,
                        ),
                        array(
                            'key' => 'field_61bcd7b721c15',
                            'label' => 'Tag Icone',
                            'name' => 'tag_icone',
                            'type' => 'text',
                        ),
                    ),
                    'layout' => 'row',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'facilidade-uso',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'active' => true,
        ));
    endif;

    //////////////////////////////////////////////////
    ############## contador
    //////////////////////////////////////////////////
    
    add_action( 'init', 'contador' );
    function contador() {
        $labels = array(
            'name'	=> __( 'Contador' ),
            'singular_name' => __( 'Contador' ),
        );
    
        $post = array(
            'labels'			=> $labels,
            //'taxonomies'		=> array('categoria'),
            'supports'			=> array('title'),
            'capability_type'	=> 'post',
            'public'			=> true,
            'has_archive'		=> false,
        );
    
        register_post_type( 'contador', $post);
    };

    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_61bcd600a9943',
            'title' => 'Campos extras',
            'fields' => array(
                array(
                    'key' => 'field_61bcd6d821d12',
                    'label' => 'Quantidade',
                    'name' => 'quantidade',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_61bcd6d821d13',
                    'label' => 'Tag icone',
                    'name' => 'tag_icone',
                    'type' => 'text',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'contador',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'active' => true,
        ));
    endif;

    //////////////////////////////////////////////////
    ############## descricao_nosso_time
    //////////////////////////////////////////////////
    
    add_action( 'init', 'descricao_nosso_time' );
    function descricao_nosso_time() {
        $labels = array(
            'name'	=> __( 'Descrição Nosso Time' ),
            'singular_name' => __( 'Descrição Nosso Time' ),
        );
    
        $post = array(
            'labels'			=> $labels,
            //'taxonomies'		=> array('categoria'),
            'supports'			=> array('title', 'editor'),
            'capability_type'	=> 'post',
            'public'			=> true,
            'has_archive'		=> false,
        );
    
        register_post_type( 'descricao-nosso-time', $post);
    };

    //////////////////////////////////////////////////
    ############## nosso_time
    //////////////////////////////////////////////////
    
    add_action( 'init', 'nosso_time' );
    function nosso_time() {
        $labels = array(
            'name'	=> __( 'Nosso Time' ),
            'singular_name' => __( 'Nosso Time' ),
        );
    
        $post = array(
            'labels'			=> $labels,
            //'taxonomies'		=> array('categoria'),
            'supports'			=> array('title', 'thumbnail'),
            'capability_type'	=> 'post',
            'public'			=> true,
            'has_archive'		=> false,
        );
    
        register_post_type( 'nosso-time', $post);
    };

    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'info_mebros',
            'title' => 'Informações',
            'fields' => array(
                array(
                    'key' => 'field_info_funcao',
                    'label' => 'Função',
                    'name' => 'funcao',
                    'type' => 'text',
                    'formatting' => 'html',
                ),
                array(
                    'key' => 'field_info_facebook',
                    'label' => 'Facebook',
                    'name' => 'facebook',
                    'type' => 'text',
                    'formatting' => 'html',
                ),
                array(
                    'key' => 'field_info_instagram',
                    'label' => 'Instagram',
                    'name' => 'instagram',
                    'type' => 'text',
                    'formatting' => 'html',
                ),
                array(
                    'key' => 'field_info_twitter',
                    'label' => 'Twitter',
                    'name' => 'twitter',
                    'type' => 'text',
                    'formatting' => 'html',
                ),
                array (
                    'key' => 'field_info_linkedin',
                    'label' => 'Linkedin',
                    'name' => 'linkedin',
                    'type' => 'text',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'nosso-time',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'seamless',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'active' => true,
        ));
    endif;

    //////////////////////////////////////////////////
    ############## descricao_blog
    //////////////////////////////////////////////////
    
    add_action( 'init', 'descricao_blog' );
    function descricao_blog() {
        $labels = array(
            'name'	=> __( 'Descrição do Blog' ),
            'singular_name' => __( 'Descrição do Blog' ),
        );
    
        $post = array(
            'labels'			=> $labels,
            //'taxonomies'		=> array('categoria'),
            'supports'			=> array('title', 'editor'),
            'capability_type'	=> 'post',
            'public'			=> true,
            'has_archive'		=> false,
        );
    
        register_post_type( 'descricao-blog', $post);
    };

    if( function_exists('acf_add_local_field_group') ):
        acf_add_local_field_group(array(
            'key' => 'group_campos_extras_descrocaoBlog',
            'title' => 'Campos extras',
            'fields' => array(
                array(
                    'key' => 'field_subtitulo',
                    'label' => 'Subtitulo',
                    'name' => 'subtitulo',
                    'type' => 'text',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'descricao-blog',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'active' => true,
        ));
    endif;

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