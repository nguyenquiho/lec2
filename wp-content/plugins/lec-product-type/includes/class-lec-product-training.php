<?php

/**
 * Training Product Type
 */
class WC_Product_Training extends WC_Product {
    
    /**
     * Initialize simple product.
     *
     * @param WC_Product|int $product Product instance or ID.
     */
    public function __construct( $product = 0 ) {
        // $this->supports[] = 'ajax_add_to_cart';
        parent::__construct( $product );
    }

    /**
     * Return the product type
     * @return string
     */
    public function get_type() {
        return 'training';
    }

    public function is_purchasable() {
        return apply_filters( 'woocommerce_is_purchasable', true, $this );
    }

    /**
     * Returns the product's active price.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string price
     */
    public function get_price( $context = 'view' ) {
        if( $this->is_type( 'training' ) ) {
            $product = get_fields( $this->id );
            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                foreach ($product['training_types'] as $key => $training_type) {
                    if ($training_type['training_type'] ->ID == $cart_item['training_type_id'] && $training_type['cost'] != '') {
                        return $this->parse_price($training_type['cost']);
                    }
                }
                $price = $this->get_training_cost($cart_item['training_type_id']);
                return $this->parse_price($price);
            }
            return 0;
        }
		return $this->get_prop( 'price', $context );
    }

    public function get_training_type( $id ) {
        if(function_exists('get_fields')){
            return get_fields($id);
        }
        return '';
    }

    public function get_training_name( $id ) {
        return get_the_title($id);
    }

    public function get_training_cost( $id ) {
        if(function_exists('get_post_meta')){
            return get_post_meta($id, "cost", true);
        }
        return '';
    }

    public function parse_price( $text ) {
        return absint(filter_var($text, FILTER_SANITIZE_NUMBER_INT));
    }
}