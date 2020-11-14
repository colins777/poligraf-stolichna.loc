<?php

namespace Inc;

class Products
{
    /**
     * Product page constructor.
     */
    public function __construct() {
        add_filter( 'cmb2_init', array( $this, 'setting' ) );
    }


    /**
     * Settings
     */
    public function setting() {
        $box_options = array(
            'id'           => 'product',
            'title'        => __( 'Настройки', \stolTheme::$theme_name ),
            'object_types' => array( 'page' ),
            'show_on'      => array(
                'key'   => 'page-template',
                'value' => 'products.php',
               // 'value' => 'equipment.php',
            ),
            'show_names'   => true,
        );

        //Setup meta box
        $cmb = new_cmb2_box( $box_options );

        $group_field_id = $cmb->add_field( array(
            'id'      => 'products',
            'type'    => 'group',
            'name' => __( 'Добавление продуктов', \stolTheme::$theme_name ),
            'options' => array(
                'group_title'   => __( 'Продукт {#}', \stolTheme::$theme_name ),
                'add_button'    => __( 'Добавить продукт', \stolTheme::$theme_name ),
                'remove_button' => __( 'Удалить продукт', \stolTheme::$theme_name ),
                'sortable'      => true, // beta
            )
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Название продукта', \stolTheme::$theme_name ),
            'id'      => 'product_name',
            'type'    => 'text',
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Шорткод галереи продукта', \stolTheme::$theme_name ),
            'id'      => 'product_gallery',
            'type'    => 'text',
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Описание продукта', \stolTheme::$theme_name ),
            'id'      => 'text',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop'       => false, // use wpautop?
                'textarea_rows' => 20, // rows="..."
            ),
        ) );


    }

}