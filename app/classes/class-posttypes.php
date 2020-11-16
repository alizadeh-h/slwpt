<?php


class PostTypes {

	public static function make_product_post_type() {
		$labels = array(
			'name'               => _x( 'محصولات', 'Post type general name', 'textdomain' ),
			'singular_name'      => _x( 'محصول', 'Post type singular name', 'textdomain' ),
			'menu_name'          => _x( 'محصولات', 'Admin Menu text', 'textdomain' ),
			'name_admin_bar'     => _x( 'محصول', 'Add New on Toolbar', 'textdomain' ),
			'add_new'            => __( 'اضافه کردن', 'textdomain' ),
			'add_new_item'       => __( 'اضافه کردن محصول محصول', 'textdomain' ),
			'new_item'           => __( 'جدید محصول', 'textdomain' ),
			'edit_item'          => __( 'ویرایش محصول', 'textdomain' ),
			'view_item'          => __( 'نمایش محصول', 'textdomain' ),
			'all_items'          => __( 'همه محصولات', 'textdomain' ),
			'search_items'       => __( 'جستجوی محصولات', 'textdomain' ),
			'parent_item_colon'  => __( 'والد محصولات:', 'textdomain' ),
			'not_found'          => __( 'محصولی یافت نشد', 'textdomain' ),
			'not_found_in_trash' => __( 'در زباله دان محصولی یافت نشد', 'textdomain' ),

		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'product' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);
		register_post_type( 'product ', $args );

	}
}