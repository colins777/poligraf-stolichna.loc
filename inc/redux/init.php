<?php

namespace inc\redux;
use stolTheme;

require_once get_template_directory() . '/inc/redux/includes/Headers.php';

/**
 * Class Init
 * @package DTHEME\Bundles\Redux
 * @since   1.0.0
 * //Redux WP DOC
//https://docsv3.redux.io/extensions/repeater/index.html
 */
class Init extends Includes\Headers {

	/**
	 * Enable initialization
	 * @return bool
	 */
	public static function is_initialize() {
		if ( ! class_exists( 'Redux' ) ) {
			return false;
		} else {
			return true;
		}
	}


	/**
	 * Connection priority
	 * @var int
	 */
	public static $priority = 5;


	/**
	 * Init constructor.
	 */
	public function __construct() {
		parent::__construct();

		// Theme options
		$this->theme_options( $this::$opt_name );

		// Remove menu "About"
		add_action( 'admin_menu', array( $this, 'remove_redux_menu' ), 12 );
	}


	/**
	 * @param $opt_name
	 */
	public function theme_options( $opt_name ) {
		// Global section
		\Redux::setSection( $opt_name, array(
			'title'            => __( 'Контакты Header', stolTheme::$theme_name ),
			'id'               => 'contacts_header',
			'customizer_width' => '400px',
			'icon'             => 'el el-cogs',
			'fields'           => array(
				array(
					'id'    => 'header_phones',
					'type'  => 'multi_text',
					'title' => __( 'Телефоны', stolTheme::$theme_name ),
				),
//				array(
//					'id'       => 'fb_link',
//					'type'     => 'text',
//					'validate' => 'url',
//					'title'    => __( 'Facebook', stolTheme::$theme_name ),
//					'subtitle' => __( 'Ссылка на профиль', stolTheme::$theme_name ),
//					'default'  => 'https://www.facebook.com/simpleukraine/',
//				),
//				array(
//					'id'       => 'ins_link',
//					'type'     => 'text',
//					'validate' => 'url',
//					'title'    => __( 'Instagram', stolTheme::$theme_name ),
//					'subtitle' => __( 'Ссылка на профиль', stolTheme::$theme_name ),
//				),
				array(
					'id'       => 'email',
					'type'     => 'text',
					'validate' => 'email',
					'title'    => __( 'Email', stolTheme::$theme_name ),
					'subtitle' => __( 'Адрес электронной почты', stolTheme::$theme_name ),
				),
//				array(
//					'id'    => 'info-google-maps',
//					'type'  => 'info',
//					'style' => 'warning',
//					'icon'  => 'el el-info-circle',
//					'desc'  => __( 'Настройки Google Maps', stolTheme::$theme_name )
//				),
//				array(
//					'id'       => 'storeLocationX',
//					'type'     => 'text',
//					'title'    => __( 'Координаты магазина: X', stolTheme::$theme_name ),
//					'default'  => '50.442978',
//					'validate' => 'numeric',
//				),
//				array(
//					'id'       => 'storeLocationY',
//					'type'     => 'text',
//					'title'    => __( 'Координаты магазина: Y', stolTheme::$theme_name ),
//					'default'  => '30.498216',
//					'validate' => 'numeric',
//				),
//				array(
//					'id'      => 'mapPin',
//					'type'    => 'media',
//					'mode'    => false,
//					'url'     => true,
//					'title'   => __( 'Пин', stolTheme::$theme_name ),
//					'default' => array(
//						'url' => stolTheme::$assets_url . 'img/iconsvg/pin.svg'
//					)
//				),
			)
		) );

		\Redux::setSection( $opt_name, array(
			'title'            => __( 'Контакты Footer и страница Контакты', stolTheme::$theme_name ),
			'id'               => 'contacts_footer',
			'customizer_width' => '400px',
			'icon'             => 'el el-cogs',
			'fields'           => array(
                array(
                    'id'    => 'footer_phones',
                    'type'  => 'multi_text',
                    'title' => __( 'Телефоны', stolTheme::$theme_name ),
                ),

                array(
                    'id'    => 'phones_address',
                    'type'  => 'text',
                    'title' => __( 'Адрес', stolTheme::$theme_name ),
                ),

                array(
                    'id'    => 'contacts_schedule',
                    'type'  => 'multi_text',
                    'title' => __( 'Режим работы на странице Контакты', stolTheme::$theme_name ),
                ),
			)
		) );

        \Redux::setSection( $opt_name, array(
            'title'            => __( 'Copyright Footer', stolTheme::$theme_name ),
            'id'               => 'copyright_footer',
            'customizer_width' => '400px',
            'icon'             => 'el el-cogs',
            'fields'           => array(
                array(
                    'id'    => 'copyright',
                    'type'  => 'text',
                    'title' => __( 'Текст копирайта', stolTheme::$theme_name ),
                    'default' => '© Полиграфия Столична, Киев, 2020',
                )
            )
        ) );

        \Redux::setSection( $opt_name, array(
            'title'            => __( 'Страницы Footer', stolTheme::$theme_name ),
            'id'               => 'pages_footer',
            'customizer_width' => '400px',
            'icon'             => 'el el-cogs',
            'fields'           => array(
                array(
                    'id'    => 'confidential_politics_title',
                    'type'  => 'text',
                    'title' => __( 'Название', stolTheme::$theme_name ),
                    'default' => 'Политика конфиденциальности',
                ),
                array(
                    'id'    => 'confidential_politics_link',
                    'type'  => 'text',
                    'title' => __( 'Ссылка на страницу политики конф.', stolTheme::$theme_name )
                ),

                array(
                    'id'    => 'terms_title',
                    'type'  => 'text',
                    'title' => __( 'Название', stolTheme::$theme_name ),
                    'default' => 'Пользовательское соглашение',
                ),
                array(
                    'id'    => 'terms_link',
                    'type'  => 'text',
                    'title' => __( 'Ссылка на страницу соглашения', stolTheme::$theme_name )
                ),

            )
        ) );


	}


	public function remove_redux_menu() {
		remove_submenu_page( 'tools.php', 'redux-about' );
	}

}