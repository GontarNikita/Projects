<?php
// Custom Post Types
            $labels = array(
		    'name'               => _x( 'Товары', 'post type general name', 'base' ),
		    'singular_name'      => _x( 'Товар', 'post type singular name', 'base' ),
		    'menu_name'          => _x( 'Товары', 'admin menu', 'base' ),
		    'name_admin_bar'     => _x( 'Товар', 'add new on admin bar', 'base' ),
		    'add_new'            => _x( 'Добавить новый', 'товар', 'base' ),
		    'add_new_item'       => __( 'Добавить Новый Товар', 'base' ),
		    'new_item'           => __( 'Новый Товар', 'base' ),
		    'edit_item'          => __( 'Редактировать Товар', 'base' ),
		    'view_item'          => __( 'Просмотреть Товар', 'base' ),
		    'all_items'          => __( 'Все Товары', 'base' ),
		    'search_items'       => __( 'Искать Товары', 'base' ),
		    'parent_item_colon'  => __( 'Родительские Товары:', 'base' ),
		    'not_found'          => __( 'Товары не найдены.', 'base' ),
		    'not_found_in_trash' => __( 'Товары в корзине не найдены.', 'base' )
		);
		$args = array(
		    'labels'             => $labels,
		    'public'             => true,
		    'publicly_queryable' => true,
		    'show_ui'            => true,
		    'show_in_menu'       => true,
		    'query_var'          => true,
		    'rewrite'            => array( 'slug' => 'product' ,'with_front' => false, 'hierarchical' => true ),
		    'capability_type'    => 'post',
		    'has_archive'        => true,
            'menu_position'       => 2,
		    'hierarchical'       => false,
		    'menu_position'      => null,
                    'menu_icon'	 => 'dashicons-cart',
		    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		);
		register_post_type( 'product', $args );
		// video coments post type
	 $labels = array(
		    'name'               => _x( 'Видео коменты', 'post type general name', 'base' ),
		    'singular_name'      => _x( 'Видео коменты', 'post type singular name', 'base' ),
		    'menu_name'          => _x( 'Видео коменты', 'admin menu', 'base' ),
		    'name_admin_bar'     => _x( 'Видео комент', 'add new on admin bar', 'base' ),
		    'add_new'            => _x( 'Добавить новый', 'Видео комент', 'base' ),
		    'add_new_item'       => __( 'Добавить Новый Видео комент', 'base' ),
		    'new_item'           => __( 'Новый Видео комент', 'base' ),
		    'edit_item'          => __( 'Редактировать Видео комент', 'base' ),
		    'view_item'          => __( 'Просмотреть Видео комент', 'base' ),
		    'all_items'          => __( 'Все Видео коменты', 'base' ),
		    'search_items'       => __( 'Искать Видео коменты', 'base' ),
		    'parent_item_colon'  => __( 'Родительские Видео коменты:', 'base' ),
		    'not_found'          => __( 'Видео коменты не найдены.', 'base' ),
		    'not_found_in_trash' => __( 'Видео коменты в корзине не найдены.', 'base' )
		);
		$args = array(
		    'labels'             => $labels,
		    'public'             => true,
		    'publicly_queryable' => true,
		    'show_ui'            => true,
		    'show_in_menu'       => true,
		    'query_var'          => true,
		    'rewrite'            => array( 'slug' => 'video_coments' ,'with_front' => false, 'hierarchical' => true ),
		    'capability_type'    => 'post',
		    'has_archive'        => true,
            'menu_position'       => 2,
		    'hierarchical'       => false,
		    'menu_position'      => null,
                    'menu_icon'	 => 'dashicons-video-alt3',
		    'supports'           => array( 'title', 'author', 'thumbnail', 'excerpt' )
		);
		register_post_type( 'video_coments', $args );


// text coment post type
		 $labels = array(
		    'name'               => _x( 'Текст коменты', 'post type general name', 'base' ),
		    'singular_name'      => _x( 'Текст комент', 'post type singular name', 'base' ),
		    'menu_name'          => _x( 'Текст коменты', 'admin menu', 'base' ),
		    'name_admin_bar'     => _x( 'Текст комент', 'add new on admin bar', 'base' ),
		    'add_new'            => _x( 'Добавить новый', 'Текст комент', 'base' ),
		    'add_new_item'       => __( 'Добавить Новый Текст коменты', 'base' ),
		    'new_item'           => __( 'Новый Текст коменты', 'base' ),
		    'edit_item'          => __( 'Редактировать Текст комент', 'base' ),
		    'view_item'          => __( 'Просмотреть Текст комент', 'base' ),
		    'all_items'          => __( 'Все Текст комент', 'base' ),
		    'search_items'       => __( 'Искать Текст коменты', 'base' ),
		    'parent_item_colon'  => __( 'Родительские Текст коменты:', 'base' ),
		    'not_found'          => __( 'Текст коменты не найдены.', 'base' ),
		    'not_found_in_trash' => __( 'Текст коменты в корзине не найдены.', 'base' )
		);
		$args = array(
		    'labels'             => $labels,
		    'public'             => true,
		    'publicly_queryable' => true,
		    'show_ui'            => true,
		    'show_in_menu'       => true,
		    'query_var'          => true,
		    'rewrite'            => array( 'slug' => 'text_coment' ,'with_front' => false, 'hierarchical' => true ),
		    'capability_type'    => 'post',
		    'has_archive'        => true,
            'menu_position'       => 2,
		    'hierarchical'       => false,
		    'menu_position'      => null,
                    'menu_icon'	 => 'dashicons-media-spreadsheet',
		    'supports'           => array( 'title', 'editor', 'author', 'excerpt' )
		);
		register_post_type( 'text_coment', $args );