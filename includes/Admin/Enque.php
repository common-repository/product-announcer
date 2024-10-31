<?php

namespace Product\Announcer\Admin;

class Enque{

    function __construct(){
        $this->init_hooks();
    }

    public function init_hooks(){
        add_action( 'admin_enqueue_scripts', [$this,'include_all_files'] );
    }

    public function include_css_files(){
        wp_enqueue_style('PA_ProductAnnouncer_mailSettings', PA_ProductAnnouncer_ASSETS . 'css/createmailsettings.css', array(), PA_ProductAnnouncer_VERSION );
    }

    public function include_js_files(){
        wp_enqueue_script('PA_ProductAnnouncer_mailSettings',PA_ProductAnnouncer_ASSETS . 'js/createmailsettings.js', array(), PA_ProductAnnouncer_VERSION, true);
        wp_localize_script('PA_ProductAnnouncer_mailSettings', 'PA_myVars', array(
            'rest_nonce'           => wp_create_nonce( 'wp_rest' ),
            'site_url'           => get_site_url().'/',
        ));
    }

    public function include_all_files(){
        $this->include_css_files();
        $this->include_js_files();
    }

}