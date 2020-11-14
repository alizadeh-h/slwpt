<?php
include "constants.php";
////function sl_new_user_register($new_user_id,$data){
////
////	echo "new user id :{$new_user_id}";
////}
////function sl_new_user_register2($new_user_id,$data){
////	echo "<br> email sent.";
////}
////function sl_new_user_register3($new_user_id,$data){
////	echo "<br>sms sent.";
////}
////class user{
////	public function login(  ) {
////
////
////	}
////
////	public function logout(  ) {
////
////
////	}
////
////	public static function register(  ) {
////
////	}
////}
////
////$new_user_object = new user();
////
////add_action('new_user_register','sl_new_user_register',1,2);
////add_action('new_user_register','sl_new_user_register2',2,2);
////add_action('new_user_register','sl_new_user_register3',3,2);
////add_action('new_user_register',array($new_user_object,'login'),3,2);
////add_action('new_user_register','user::register',3,2);
////
////$wp_action = array(
////	'new_user_register' => array(
////		'sl_new_user_register',
////		'sl_new_user_register2',
////		'sl_new_user_register3'
////	)
////);
//////call_user_func('sl_new_user_register');
////do_action('new_user_register', 10,20);
////function sl_check_user_id(){
////if(isset($_GET['aff_id']) && intval($_GET['aff_id']) > 0){
////	do_action('sl_check_user_aff',intval($_GET['aff_id']));
////  }
////}
////add_action('init','sl_check_user_id');
////$black_list = array(1,2,3,10,56);
////
////function sl_add_user_to_black_list($users){
////
////	$users[]=23;
////
////	return $users;
////
////}
////$content = "سیستم مدیریت محتوای ورد پرس یک سیستم سایت ساز بسیار قوی می باشد.ورد پرس در سال 2002 پایه گذاری شد.";
////
////function sl_check_wordpress_words ($content){
//// $content = preg_replace('/ورد پرس/','<a href="/category/wordpress">ورد پرس</a>',$content);
//// return $content;
////}
////add_filter('check_wordpress_words','sl_check_wordpress_words');
////
////
////$content = apply_filters('check_wordpress_words',$content);
////
////
////echo '<P>'.$content.'</P>';
//
//interface shipping_method {
//	public function getName();
//}
//
//class shipping_BYCar implements shipping_method {
//
//	protected $name;
//
//	public function __construct() {
//		$this->name = 'تحویل با خودرو';
//	}
//
//	public function getName() {
//		return $this->name;
//	}
//}
//
//class shippingBYPlain implements shipping_method {
//	protected $name;
//
//	public function __construct() {
//		$this->name = 'تحویل با هواپیما';
//	}
//
//	public function getName() {
//
//		return $this->name;
//
//	}
//}
//
//class shippingBYHand implements shipping_method {
//	protected $name;
//
//	public function __construct() {
//		$this->name = 'تحویل دستی';
//	}
//
//	public function getName() {
//		return $this->name;
//
//	}
//}
//
//
//class shippingBYTrain implements shipping_method{
//
//	protected $name;
//
//	public function __construct() {
//
//		$this->name = 'تحویل با قطار';
//	}
//	public function getName() {
//		return $this->name;
//	}
//}
//
//add_filter('$shipping_methods',function ($methods){
//	$methods[]='shippingBYTrain';
//	return $methods;
//
//});
//$shipping_methods = array( 'shipping_BYCar', 'shippingBYPlain', 'shippingBYHand' );
//$shipping_methods = apply_filters( '$shipping_methods', $shipping_methods );
//
//foreach ($shipping_methods as $shipping_method){
//	$obj = new $shipping_method;
//	echo '<input type="radio" name="ship_method">'.$obj->getname();
//}
