<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );}
remove_action('wp_head', 'wp_generator'); function no_woo_version ()
{ return true;}
add_filter ('wf_disable_generator_tags', 'no_woo_version');
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );  add_action( 'woocommerce_after_add_to_cart_button','woocommerce_template_single_price', 30 );

add_action( 'after_setup_theme', 'remove_pgz_theme_support', 100 );
function remove_pgz_theme_support() { 
remove_theme_support( 'wc-product-gallery-zoom' ); }
add_action( 'storefront_header', 'jk_storefront_header_content', 40 );
	function jk_storefront_header_content() { ?><link href="https://fonts.googleapis.com/css?family=Lato|Zilla+Slab+Highlight" rel="stylesheet"> <?php	}
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10 );
remove_action('storefront_post_content_before', 'storefront_post_thumbnail', 10 );

add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat'); }

function my_wc_add_to_cart_redirect_to_checkout( $url ) {
	return wc_get_checkout_url();}
add_filter( 'woocommerce_add_to_cart_redirect', 'my_wc_add_to_cart_redirect_to_checkout' );

function duck_search_widget() {
register_widget('WP_Widget_Search');
if ( storefront_is_woocommerce_activated() ) { ?>
			<div class="site-search">
				<?php the_widget( 'WP_Widget_Search', 'title=' ); ?>
			</div>
		<?php
		}
	}
add_action( 'storefront_header', 'duck_search_widget', 40 );

add_filter( 'wc_order_is_editable', 'wc_make_processing_orders_editable', 10, 2 );
function wc_make_processing_orders_editable( $is_editable, $order ) {
    if ( $order->get_status() == 'processing' ) {
        $is_editable = true;    }
    return $is_editable;}
function remove_wc_password_meter() { wp_dequeue_script( 'wc-password-strength-meter' );}
add_action( 'wp_print_scripts', 'remove_wc_password_meter', 100 );
 add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
    function custom_override_checkout_fields( $fields ) {
        unset($fields['billing']['billing_company']);
        unset($fields['billing']['billing_phone']); return $fields; }
remove_action( 'storefront_post_content_before', 'storefront_post_thumbnail',  10 );
if (wp_is_mobile()) {
    // hide 
} else {add_action( 'woocommerce_single_product_summary', 'themeprefix_woocommerce_template_product_description', 10 );
function themeprefix_woocommerce_template_product_description() {
	wc_get_template( 'single-product/tabs/description.php' );}
add_filter( 'woocommerce_product_tabs', 'themeprefix_woo_remove_product_tabs', 98 );
function themeprefix_woo_remove_product_tabs( $tabs ) {
   unset( $tabs['description'] );        return $tabs;}}
if ( ! function_exists( 'woocommerce_quantity_input' ) ) {
	function woocommerce_quantity_input( $args = array(), $product = null, $echo = true ) {
			if ( is_null( $product ) )
      $product = $GLOBALS['product'];
		$defaults = array(
		  'input_name'    => 'quantity',
		  'input_value'   => '25',
		  'max_value'     => apply_filters( 'woocommerce_quantity_input_max', '', $product ),
		  'min_value'     => apply_filters( 'woocommerce_quantity_input_min', '', $product ),
		  'step'          => apply_filters( 'woocommerce_quantity_input_step', '5', $product ),
		  'style'         => apply_filters( 'woocommerce_quantity_style', 'margin-bottom: 10px;', $product )
		);		
		if ( ! empty( $defaults['min_value'] ) )
		$min = $defaults['min_value'];
		else $min = 25;
		if ( ! empty( $defaults['max_value'] ) )
		$max = $defaults['max_value'];
		else $max = 1000;
		if ( ! empty( $defaults['step'] ) )
		$step = $defaults['step'];
		else $step = 5;
		$options = '';
		for ( $count = $min; $count <= $max; $count = $count+$step ) {
			$selected = $count === $args['input_value'] ? ' selected' : '';
			$options .= '<option value="' . $count . '"'.$selected.'>' . $count . '</option>';		}
		$args = apply_filters( 'woocommerce_quantity_input_args', wp_parse_args( $args, $defaults ), $product );
			echo '<div class="quantity_select" style="' . $args['style'] . '"><select name="' . esc_attr( $args['input_name'] ) . '" title="' . _x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) . '" class="qty">' . $options . '</select></div>';
    ob_start();
    if ( $echo ) {
        echo ob_get_clean();    } else {
        return ob_get_clean();    }	}}
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }  
    return $title; }
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
 ?>
