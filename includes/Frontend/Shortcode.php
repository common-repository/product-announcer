<?php

namespace Product\Announcer\Frontend;

/**
 * Shortcode handler class
 */
class Shortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        add_shortcode( 'PA_product_email_template', [ $this, 'PA_product_announcer_email_template' ] );
    }

    /**
     * Shortcode handler class
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function PA_product_announcer_email_template( $atts, $content = '' ) {
        return 'Hello from Shortcode';
    }
}
