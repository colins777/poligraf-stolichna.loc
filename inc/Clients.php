<?php


namespace Inc;


class Clients
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
            'id'           => 'clientsPage',
            'title'        => __( 'Настройки', \stolTheme::$theme_name ),
            'object_types' => array( 'page' ),

            'show_on'      => array(
                'key'   => 'page-template',
                'value' => array( 'our-clients.php'),
            ),
            'show_names'   => true,
        );


        //Setup meta box
        $cmb = new_cmb2_box( $box_options );

        $group_field_id = $cmb->add_field( array(
            'id'      => 'clients',
            'type'    => 'group',
            'name' => __( 'Добавление клиентов', \stolTheme::$theme_name ),
            'options' => array(
                'group_title'   => __( 'Клиент {#}', \stolTheme::$theme_name ),
                'add_button'    => __( 'Добавить клиента', \stolTheme::$theme_name ),
                'remove_button' => __( 'Удалить лиента', \stolTheme::$theme_name ),
                'sortable'      => true, // beta
            )
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Название клиента', \stolTheme::$theme_name ),
            'id'      => 'client_name',
            'type'    => 'text',
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Лого клиента', \stolTheme::$theme_name ),
            'id'      => 'client_logo',
            'type'    => 'file',
            'options' => array(
                'url'                   => false,
                'add_upload_files_text' => __( 'Загрузить', \stolTheme::$theme_name ),
            ),
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Описание клиента', \stolTheme::$theme_name ),
            'id'      => 'text',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop'       => false,
                'textarea_rows' => 20,
            ),
        ) );


    }

}