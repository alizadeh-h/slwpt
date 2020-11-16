<?php


class MetaBoxes {

	public static function register_product_price_meta_box(  ) {
	add_meta_box('product_price_meta_box',
		'قیمت محصول',
		'MetaBoxes::product_price_content_handler',
		'product'
	);
		
	}


	public static function product_price_content_handler( $post ) {
		$post_price = (int) get_post_meta($post->ID,'product_price',true);
		view::render('admin/metabox/product/product_price');

	}
}