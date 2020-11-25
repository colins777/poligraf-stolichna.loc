<?php


namespace Inc;


class Main
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
            'id'           => 'main',
            'title'        => __( 'Настройки', \stolTheme::$theme_name ),
            'object_types' => array( 'page' ),

            'show_on'      => array(
                'key'   => 'page-template',
                'value' => array( 'index.php'),
                // 'key' => 'id', 'value' => array( 7, 112 )
            ),
            'show_names'   => true,
        );


        //Setup meta box
        $cmb = new_cmb2_box( $box_options );

        $group_field_id = $cmb->add_field( array(
            'id'      => 'slider',
            'type'    => 'group',
            'name' => __( 'Добавление слайдов', \stolTheme::$theme_name ),
            'options' => array(
                'group_title'   => __( 'Слайд {#}', \stolTheme::$theme_name ),
                'add_button'    => __( 'Добавить слайд', \stolTheme::$theme_name ),
                'remove_button' => __( 'Удалить слайд', \stolTheme::$theme_name ),
                'sortable'      => true, // beta
            )
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Заголовок', \stolTheme::$theme_name ),
            'id'      => 'slide_title',
            'type'    => 'text',
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Описание', \stolTheme::$theme_name ),
            'id'      => 'slide_descr',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop'       => false, // use wpautop?
                'textarea_rows' => 5, // rows="..."
            ),
        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Ссылка на страницу', \stolTheme::$theme_name ),
            'id'      => 'slide_link',
            'type'    => 'text',

        ) );

        $cmb->add_group_field( $group_field_id, array(
            'name'    => __( 'Картинка слайдера', \stolTheme::$theme_name ),
            'id'      => 'slide_image',
            'type'    => 'file',
            'options' => array(
                'url'                   => false,
                'add_upload_files_text' => __( 'Загрузить', \stolTheme::$theme_name ),
            ),
        ) );

        $cmb->add_field(array(
            'name' => __('Заголовок блока о компании', \stolTheme::$theme_name),
            'id' => 'about_title',
            'type' => 'text',
        ));

        $cmb->add_field(array(
            'name' => __('Описание компании', \stolTheme::$theme_name),
            'id' => 'about_descr',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop'       => false, // use wpautop?
                'textarea_rows' => 5, // rows="..."
            ),
        ));

        $advantages_group_id = $cmb->add_field( array(
            'id'      => 'advantages',
            'type'    => 'group',
            'repeatable'  => true,
            'name' => __( 'Добавление преимуществ', \stolTheme::$theme_name ),
            'options' => array(
                'group_title'   => __( 'Преимущество {#}', \stolTheme::$theme_name ),
                'add_button'    => __( 'Добавить преимущество', \stolTheme::$theme_name ),
                'remove_button' => __( 'Удалить преимущество', \stolTheme::$theme_name ),
                'sortable'      => true, // beta
            )
        ) );

        $cmb->add_group_field( $advantages_group_id, array(
            'name' => 'Заголовок преимущества',
            'id'   => 'advantages_title',
            'type' => 'text',
        ) );

        $cmb->add_group_field( $advantages_group_id, array(
            'name' => 'Описание преимущества',
            'id'   => 'advantages_descr',
            'type'    => 'wysiwyg',
            'options' => array(
                'wpautop'       => false,
                'textarea_rows' => 5,
            ),
        ) );

        $cmb->add_group_field( $advantages_group_id, array(
            'name' => 'Иконка преимущества',
            'id'   => 'advantages_icon',
            'type'    => 'file',
            'options' => array(
                'url'                   => false,
                'add_upload_files_text' => __( 'Загрузить', \stolTheme::$theme_name ),
            ),
        ) );


        //Our Clients
        $clients_group_id = $cmb->add_field( array(
            'id'      => 'clients',
            'type'    => 'group',
            'repeatable'  => true,
            'name' => __( 'Добавление клиентов', \stolTheme::$theme_name ),
            'options' => array(
                'group_title'   => __( 'Клиент {#}', \stolTheme::$theme_name ),
                'add_button'    => __( 'Добавить клиента', \stolTheme::$theme_name ),
                'remove_button' => __( 'Удалить клиента', \stolTheme::$theme_name ),
                'sortable'      => true,
            )
        ) );

        $cmb->add_group_field( $clients_group_id, array(
            'name' => 'Логотип клиента',
            'id'   => 'clients_logo',
            'type'    => 'file',
            'options' => array(
                'url'                   => false,
                'add_upload_files_text' => __( 'Загрузить', \stolTheme::$theme_name ),
            ),
        ) );


        //Our Products Title
        $products_title_group_id = $cmb->add_field( array(
            'id'      => 'products_section_title',
            'type'    => 'text',
            'repeatable'  => false,
            'name' => 'Название секции продуктов'
        ) );

//        $cmb->add_group_field( $products_title_group_id, array(
//            'name' => 'Заголовок',
//            'id'   => 'section_title',
//            'type'    => 'text'
//        ) );

        //Our Products
        $products_group_id = $cmb->add_field( array(
            'id'      => 'products',
            'type'    => 'group',
            'repeatable'  => true,
            'name' => __( 'Добавление продуктов', \stolTheme::$theme_name ),
            'options' => array(
                'group_title'   => __( 'Клиент {#}', \stolTheme::$theme_name ),
                'add_button'    => __( 'Добавить продукт', \stolTheme::$theme_name ),
                'remove_button' => __( 'Удалить продукт', \stolTheme::$theme_name ),
                'sortable'      => true,
            )
        ) );

        $cmb->add_group_field( $products_group_id, array(
            'name' => 'Название продукта',
            'id'   => 'product_title',
            'type'    => 'text'
        ) );

        $cmb->add_group_field( $products_group_id, array(
            'name' => 'Иконка продукта',
            'id'   => 'product_logo',
            'type'    => 'file',
            'options' => array(
                'url'                   => false,
                'add_upload_files_text' => __( 'Загрузить', \stolTheme::$theme_name ),
            ),
        ) );

    }
}