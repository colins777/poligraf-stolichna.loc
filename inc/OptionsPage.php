<?php


namespace Inc;


class OptionsPage
{
    public function __construct() {
        add_action( 'cmb2_admin_init', array( $this, 'register_my_admin_page' ) );
    }


    public function register_my_admin_page() {
        $args = array(
            'id'           => 'site_options_page',
            'title'        => 'Site Options',
            'object_types' => array( 'options-page' ),
            'show_on'      => array('key' =>'options-page'),
            'option_key'   => 'stolTheme_options',
            'tab_group'    => 'stolTheme_options',
            'menu_title'   => esc_html__( 'Options', 'myprefix' ),
            'position'     => 1

        );

        // 'tab_group' property is supported in > 2.4.0.
        if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
            $args['display_cb'] = 'yourprefix_options_display_with_tabs';
        }

        $main_options = new_cmb2_box( $args );

        /**
         * Options fields ids only need
         * to be unique within this box.
         * Prefix is not needed.
         */
        $main_options->add_field( array(
            'name'    => 'Site Background Color',
            'desc'    => 'field description (optional)',
            'id'      => 'bg_color',
            'type'    => 'colorpicker',
            'default' => '#ffffff',
        ) );

        /**
         * Registers secondary options page, and set main item as parent.
         */
        $args = array(
            'id'           => 'yourprefix_secondary_options_page',
            'menu_title'   => 'Secondary Options', // Use menu title, & not title to hide main h2.
            'object_types' => array( 'options-page' ),
            'option_key'   => 'yourprefix_secondary_options',
            'parent_slug'  => 'yourprefix_main_options',
            'tab_group'    => 'yourprefix_main_options',
            'tab_title'    => 'Secondary',
        );

        // 'tab_group' property is supported in > 2.4.0.
        if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
            $args['display_cb'] = 'yourprefix_options_display_with_tabs';
        }

        $secondary_options = new_cmb2_box( $args );

        $secondary_options->add_field( array(
            'name'    => 'Test Radio',
            'desc'    => 'field description (optional)',
            'id'      => 'radio',
            'type'    => 'radio',
            'options' => array(
                'option1' => 'Option One',
                'option2' => 'Option Two',
                'option3' => 'Option Three',
            ),
        ) );

        /**
         * Registers tertiary options page, and set main item as parent.
         */
        $args = array(
            'id'           => 'yourprefix_tertiary_options_page',
            'menu_title'   => 'Tertiary Options', // Use menu title, & not title to hide main h2.
            'object_types' => array( 'options-page' ),
            'option_key'   => 'yourprefix_tertiary_options',
            'parent_slug'  => 'yourprefix_main_options',
            'tab_group'    => 'yourprefix_main_options',
            'tab_title'    => 'Tertiary',
        );

        // 'tab_group' property is supported in > 2.4.0.
        if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
            $args['display_cb'] = 'yourprefix_options_display_with_tabs';
        }

        $tertiary_options = new_cmb2_box( $args );

        $tertiary_options->add_field( array(
            'name' => 'Test Text Area for Code',
            'desc' => 'field description (optional)',
            'id'   => 'textarea_code',
            'type' => 'textarea_code',
        ) );
    }

}