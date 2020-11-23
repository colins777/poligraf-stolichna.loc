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
			'title'            => __( 'Контакты Footer', stolTheme::$theme_name ),
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

		\Redux::setSection( $opt_name, array(
			'title'            => __( 'Lunch Time', stolTheme::$theme_name ),
			'id'               => 'menu-lunch-time',
			'customizer_width' => '400px',
			'subsection'       => true,
			'icon'             => 'el el-cogs',
			'fields'           => array(
				array(
					'id'       => 'lunch_time_price',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => __( 'Цена Lunch Time', stolTheme::$theme_name ),
				),
				array(
					'id'          => 'lunch_time_open_time',
					'type'        => 'text',
					'custom_type' => 'time',
					'title'       => __( 'Предложение действует с', stolTheme::$theme_name ),
				),
				array(
					'id'          => 'lunch_time_close_time',
					'type'        => 'text',
					'custom_type' => 'time',
					'title'       => __( 'Предложение действует до', stolTheme::$theme_name ),
				),
			)
		) );

		\Redux::setSection( $opt_name, array(
			'title'            => __( 'Оформления заказа', stolTheme::$theme_name ),
			'id'               => 'checkout',
			'customizer_width' => '400px',
			'icon'             => 'el el-cogs',
			'fields'           => array(
				array(
					'id'    => 'text_order_delivery_error',
					'type'  => 'textarea',
					'title' => __( 'Текст подсказки когда доставка не доступна', stolTheme::$theme_name ),
					'args'  => array(
						'wpautop'       => true,
						'textarea_rows' => 25,
					)
				),
				array(
					'id'    => 'order_user_id_text',
					'type'  => 'editor',
					'title' => __( 'Текст подсказки для ввода ID', stolTheme::$theme_name ),
					'args'  => array(
						'wpautop'       => false,
						'media_buttons' => false,
						'textarea_rows' => 25,
					)
				),
				array(
					'id'    => 'delivery_terms',
					'type'  => 'editor',
					'title' => __( 'Правила доставки', stolTheme::$theme_name ),
					'args'  => array(
						'wpautop'       => false,
						'media_buttons' => false,
						'textarea_rows' => 25,
					)
				),
			)
		) );

		\Redux::setSection( $opt_name, array(
			'title'            => __( 'Доставка', stolTheme::$theme_name ),
			'id'               => 'checkout-delivery',
			'customizer_width' => '400px',
			'icon'             => 'el el-cogs',
			'subsection'       => true,
			'fields'           => array(
				array(
					'id'       => 'delivery_price',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => __( 'Стоимость доставки', stolTheme::$theme_name ),
					'default'  => '59',
				),
				array(
					'id'       => 'min_price',
					'type'     => 'text',
					'validate' => 'numeric',
					'title'    => __( 'Минимальная цена для доставки', stolTheme::$theme_name ),
					'default'  => '250',
				),
				array(
					'id'          => 'max_price',
					'type'        => 'text',
					'validate'    => 'numeric',
					'title'       => __( 'Максимальная цена для доставки', stolTheme::$theme_name ),
					'description' => __( 'Если стоимость больше этого значения то в этом случае доставка бесплатная', stolTheme::$theme_name ),
					'default'     => '499',
				),
				array(
					'id'       => 'email_order',
					'type'     => 'text',
					'validate' => 'email',
					'title'    => __( 'Email оповещения админу', stolTheme::$theme_name ),
				),
			)
		) );

		\Redux::setSection( $opt_name, array(
			'title'            => __( 'Время работы доставка', stolTheme::$theme_name ),
			'id'               => 'checkout-time',
			'customizer_width' => '400px',
			'icon'             => 'el el-cogs',
			'subsection'       => true,
			'fields'           => array(
				array(
					'id'          => 'delivery_time',
					'type'        => 'text',
					'validate'    => 'numeric',
					'description' => __( 'Указать количество минут которое нужно для достаки', stolTheme::$theme_name ),
					'title'       => __( 'Время доставки', stolTheme::$theme_name ),
				),
				array(
					'id'          => 'delivery_time_weekdays_start',
					'type'        => 'text',
					'custom_type' => 'time',
					'title'       => __( 'Время начала доставки (будни)', stolTheme::$theme_name ),
				),
				array(
					'id'          => 'delivery_time_weekdays_stop',
					'type'        => 'text',
					'custom_type' => 'time',
					'title'       => __( 'Время зыкрытия доставки (будни)', stolTheme::$theme_name ),
				),
				array(
					'id'   => 'presentation-divide-checkout-time-1',
					'type' => 'divide',
				),
				array(
					'id'          => 'delivery_time_weekend_start',
					'type'        => 'text',
					'custom_type' => 'time',
					'title'       => __( 'Время начала доставки (выходные)', stolTheme::$theme_name ),
				),
				array(
					'id'          => 'delivery_time_weekend_stop',
					'type'        => 'text',
					'custom_type' => 'time',
					'title'       => __( 'Время зыкрытия доставки (выходные)', stolTheme::$theme_name ),
				),
				array(
					'id'    => 'delivery_time_lunch_time_info1',
					'type'  => 'info',
					'style' => 'info',
					'title' => __('Настройка времени доставки <strong>Lunch Time</strong>',  stolTheme::$theme_name ),
				),
				array(
					'id'          => 'delivery_time_lunch_time_start',
					'type'        => 'text',
					'custom_type' => 'time',
					'title'       => __( 'Время начала доставки', stolTheme::$theme_name ),
				),
				array(
					'id'          => 'delivery_time_lunch_time_stop',
					'type'        => 'text',
					'custom_type' => 'time',
					'title'       => __( 'Время зыкрытия доставки', stolTheme::$theme_name ),
				),
			)
		) );

		\Redux::setSection( $opt_name, array(
			'title'            => __( 'Личный кабинет', stolTheme::$theme_name ),
			'id'               => 'cabinet-section',
			'customizer_width' => '400px',
			'icon'             => 'el el-cogs',
			'fields'           => array(
				array(
					'desc'    => __( 'Вариации цветов личного кабинета', stolTheme::$theme_name ),
					'id'      => 'cabinet_color',
					'type'    => 'slides',
					'options' => array(
						array(
							'id'          => 'color',
							'type'        => 'color',
							'default'     => '#ffffff',
							'desc'        => __( 'Выберите цвет', stolTheme::$theme_name ),
							'validate'    => 'color',
							'transparent' => false
						),
						array(
							'id'       => 'css',
							'type'     => 'textarea',
							'desc'     => __( 'CSS Редактор. Здесь вы можете добавлять/редактировать стили данного цвета', stolTheme::$theme_name ),
							'validate' => 'no_html',
						),
					)
				)
			)
		) );

		\Redux::setSection( $opt_name, array(
			'title'            => __( 'Подписка', stolTheme::$theme_name ),
			'id'               => 'subscribe-section',
			'customizer_width' => '400px',
			'icon'             => 'el el-cogs',
			'fields'           => array(
				array(
					'id'    => 'mailchimp_info',
					'type'  => 'info',
					'style' => 'info',
					'title' => __( 'Настройка модального окна "Подписка"', stolTheme::$theme_name ),
					'desc'  => __( 'Данный функционал основан на сервисе <a href="https://mailchimp.com">MailChimp</a>', stolTheme::$theme_name )
				),
				array(
					'id'    => 'mailchimp_api_key',
					'type'  => 'text',
					'title' => __( 'API Key', stolTheme::$theme_name ),
				),
				array(
					'id'    => 'mailchimp_list_id',
					'type'  => 'text',
					'title' => __( 'List ID', stolTheme::$theme_name ),
				),
				array(
					'id'       => 'email_info',
					'type'     => 'text',
					'validate' => 'email',
					'title'    => __( 'Email оповещения админу', stolTheme::$theme_name ),
				),
			)
		) );

		\Redux::setSection( $opt_name, array(
			'title'            => __( '404', stolTheme::$theme_name ),
			'id'               => '404-section',
			'customizer_width' => '400px',
			'icon'             => 'el el-cogs',
			'fields'           => array(
				array(
					'id'    => '404_title',
					'type'  => 'text',
					'title' => __( 'Заглавия ошибки', stolTheme::$theme_name ),
				),
				array(
					'id'    => '404_text',
					'type'  => 'editor',
					'title' => __( 'Описания ошибки', stolTheme::$theme_name ),
					'args'  => array(
						'wpautop'       => false,
						'media_buttons' => false,
						'textarea_rows' => 25,
					)
				),
			)
		) );
	}


	public function remove_redux_menu() {
		remove_submenu_page( 'tools.php', 'redux-about' );
	}

}