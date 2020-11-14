<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    die;
}


class stolTheme
{

    /**
     * @var mixed|void
     * static дозволяє викликати власт чи метод без створ нового екземпляру класу в самому класі чи за межам класу
     * $this::$theme_uri      = get_template_directory_uri();
     *
     * self - це асевдонім класу в якому знах метод. використ для виклику власт чи методів в самому класі, наприклад stolTheme::$theme_option можна записати self::$theme_option
     */
    static $theme_option;
    static $theme_uri;
    static $theme_path;
    static $theme_version;
    static $theme_name;
    static $framework_path;
    static $framework_url;
    static $libs_path;
    static $assets_url;
    static $is_admin;
    static $filter_prefix;

    public function __construct() {
        $this::$theme_option   = get_option( 'stolTheme_option' );
        $this::$theme_uri      = get_template_directory_uri();
        $this::$theme_path     = get_template_directory();
        $this::$framework_path = dirname( __FILE__ );
        $this::$framework_url  = $this::$theme_uri . '/framework/';
        $this::$libs_path      = $this::$framework_path . '/libs/';
        $this::$assets_url     = $this::$theme_uri . '/assets/';
        $this::$theme_name     = 'stolTheme';
        $this::$theme_version  = '1.0.0';
        $this::$is_admin       = is_admin();
        $this::$filter_prefix  = 'stolTheme';

        // Подключения библиотек
        $this->load_libs();

        $this->activate_pages ();
    }

    private function load_libs() {
        if ( $this::$is_admin and current_user_can( 'administrator' ) ) {
            // Connection CMB2 framework
            require_once $this::$libs_path . 'cmb2/init.php';
            require_once $this::$libs_path . 'cmb2-taxonomy/plugin.php';

        }
    }

    public function activate_pages ()
    {
        if ($this::$is_admin and current_user_can('administrator')) {
            require_once $this::$theme_path . '/inc/Products.php';
            new inc\Products();
        }
    }
}