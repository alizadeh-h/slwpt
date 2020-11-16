<?php
include "constants.php";
include "app/autoloader.php";

add_action('init','PostTypes::make_product_post_type');

add_action('add_meta_boxes',' MetaBoxes::register_product_price_meta_box');