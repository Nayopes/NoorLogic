<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/assets/css/woocommerce.css',
        array( 'parent-style'),
        wp_get_theme()->get('1.0.0')
    );

}


// Display Fields using WooCommerce Action Hook
add_action( 'woocommerce_product_options_general_product_data', 'woocommerce_general_product_data_custom_field' );

function woocommerce_general_product_data_custom_field() {
    global $woocommerce, $post;
    echo '<div class="options_group">';
    woocommerce_wp_radio( array(
        'id'            => '_input_radio',

        'label'         => __('Delivery Period'),
        'description'   => __( 'Delivery Period Description' ).'<br>',
        'options'       => array(
            'Yellow'       => __('Yellow'),
            'Green'       => __('Green'),
            'Purple'       => __('Purple'),
            'White'       => __('White'),
        )
    ) );
    echo '</div>';
}

function product_certification_number_save( $product ){
    if( isset($_POST['_input_radio']) ) {
        $product->update_meta_data( '_product_color', sanitize_text_field( $_POST['_input_radio'] ) );
    }
}
add_action( 'woocommerce_admin_process_product_object', 'product_certification_number_save', 10, 1 );
//function woocommerce_product_custom_fields_save(){
//    update_post_meta('')
//}
// Custom Product Number Field
//woocommerce_wp_radio
//function so_29549525_create_attribute_taxonomie() {
//
//    $attribute = wc_get_attribute_taxonomies();
//
//    $slug = wp_list_pluck( $attribute, 'attribute_name' );
//
//    if ( ! in_array( 'my_color', $slug ) ) {
//
//        $arg = array(
//            'slug'    => 'T-shirts-color',
//            'name'   => __( 'T-shirts Color', 'your-text' ),
//            'type'    => 'select',
//            'orderby' => 'menu_order',
//            'has_archives'  => false,
//        );
//
//        $result = wc_create_attribute( $arg );
//
//    }
//}
//add_action( 'admin_init', 'so_29549525_create_attribute_taxonomie' );

//function createAttribute( $attributeName,  $attributeSlug) {
//    delete_transient('wc_attribute_taxonomies');
//    \WC_Cache_Helper::incr_cache_prefix('woocommerce-attributes');
//
//    $attributeLabels = wp_list_pluck(wc_get_attribute_taxonomies(), 'attribute_label', 'attribute_name');
//    $attributeWCName = array_search($attributeSlug, $attributeLabels, TRUE);
//
//
//    if (! $attributeWCName) {
//        $attributeWCName = wc_sanitize_taxonomy_name($attributeSlug);
//    }
//
//    $attributeId = wc_attribute_taxonomy_id_by_name($attributeWCName);
//    if (! $attributeId) {
//        $taxonomyName = wc_attribute_taxonomy_name($attributeWCName);
//        unregister_taxonomy($taxonomyName);
//        $attributeId = wc_create_attribute(array(
//            'name' => $attributeName,
//            'slug' => $attributeSlug,
//            'type' => 'select',
//            'order_by' => 'menu_order',
//            'has_archives' => 0,
//            'output'  => 'wvs_color_variation_attribute_options',
//            'preview' => 'wvs_color_variation_attribute_preview'
//
//
//        ));
//
//        register_taxonomy($taxonomyName, apply_filters('woocommerce_taxonomy_objects_' . $taxonomyName, array(
//            'product'
//        )), apply_filters('woocommerce_taxonomy_args_' . $taxonomyName, array(
//            'labels' => array(
//                'name' => $attributeSlug,
//            ),
//            'hierarchical' => FALSE,
//            'show_ui' => FALSE,
//            'query_var' => TRUE,
//            'rewrite' => FALSE,
//        )));
//    }
//
//    return wc_get_attribute($attributeId);
//}
//
//function createTerm( $termName,  $termSlug,  $taxonomy,  $order = 0) {
//    $taxonomy = wc_attribute_taxonomy_name($taxonomy);
//
//    if (! $term = get_term_by('slug', $termSlug, $taxonomy)) {
//        $term = wp_insert_term($termName, $taxonomy, array(
//            'slug' => $termSlug,
//
//        ));
//
//
//    }
//
//    return $term;
//}
//createAttribute('Colors', 'my-colors');
//createTerm('Red', 'my-red', 'my-colors', 10);
//createTerm('Green', 'my-green', 'my-colors', 20);
//createTerm('Blue', 'my-blue', 'my-colors', 30);
//






//function woo_add_custom_general_fields() {
//
//
//    global $woocommerce, $post;
//
//    echo '<div class="options_group">';
//
//    // Custom fields will be created here...
//
//    echo '</div>';
//
//    woocommerce_wp_checkbox(
//        array(
//            'id'            => '_checkbox',
//            'wrapper_class' => 'show_if_simple',
//            'label'         => __('My Checkbox Field', 'woocommerce' ),
//            'description'   => __( 'Check me!', 'woocommerce' )
//        )
//    );
//
//}


function iconic_variable_price_format($price, $product)
{

    $prefix = sprintf('%s ', __('Od', 'iconic'));

    $min_price_regular = $product->get_variation_regular_price('min', true);
    $min_price_sale = $product->get_variation_sale_price('min', true);
    $max_price = $product->get_variation_price('max', true);
    $min_price = $product->get_variation_price('min', true);

    $price = ($min_price_sale == $min_price_regular) ?
        wc_price($min_price_regular) :
        '<del>' . wc_price($min_price_regular) . '</del>' . '<ins>' . wc_price($min_price_sale) . '</ins>';

    return ($min_price == $max_price) ?
        $price :
        sprintf('%s%s', $prefix, $price);

}

add_filter('woocommerce_variable_sale_price_html', 'iconic_variable_price_format', 10, 2);
add_filter('woocommerce_variable_price_html', 'iconic_variable_price_format', 10, 2);






