<?php $theme_options = get_option( 'stolTheme_option' ); ?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title>Полиграфия Столичная</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

<?php wp_head();?>
    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v9.0&appId=725816238286874&autoLogAppEvents=1" nonce="ZY5rcn4y"></script>
</head>

<body>

<!-- Custom HTML -->

<header class="header">
    <div class="mobile-btn-wrap">
        <div class="sandwich">
            <div class="sandwich__line sandwich__line--top"></div>
            <div class="sandwich__line sandwich__line--middle"></div>
            <div class="sandwich__line sandwich__line--bottom"></div>
        </div>
    </div>
    <div class="container">
        <div class="header-wrap">
            <div class="header-top">
                <a class="logo" href="#">
                    <img src="<?php echo THEME_PATH_IMG . 'logo_clear.png'; ?>" alt="Логотип">
                </a>

                <div class="phones-wrap">
                    <img class="contact-icon" src="<?php echo THEME_PATH_IMG . '/icons/phone-square-solid.svg'; ?>"
                         alt="phone">
                    <?php
                    foreach ($theme_options['header_phones'] as $phone) : ?>
                        <a class="phones-item" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    <?php endforeach;?>
                    <!--<a class="phones-item" href="#">044 593-79-40</a>
                    <a class="phones-item" href="#">044 593-79-41</a>-->
                </div>

                <div class="email-wrap">
                    <img class="contact-icon" src="<?php echo THEME_PATH_IMG . '/icons/envelope-solid.svg'; ?>"
                         alt="email">
                    <!--<a class="mail-item" href="#">sale@stolichnaya.kiev.ua</a>-->
                    <a class="mail-item" href="mailto:<?php echo $theme_options['email']; ?>"><?php echo $theme_options['email']; ?></a>
                </div>

                <div class="lang-wrap">
                    <a href="#" class="lang-item">RU</a>
                    <a href="#" class="lang-item">UA</a>
                    <a href="#" class="lang-item">EN</a>
                </div>

                <div class="header-btn">
                    <a href="#callback" class="btn"><?php _e( 'Оставить заявку', 'stolichna' ); ?></a>
                </div>
            </div> <!--header-top-->
        </div> <!--container-->
    </div>
    <nav class="header-bottom">
        <div class="container">
<!--            <ul class="header-menu">-->
<!--                <li class="header-menu__item"><a class="header-menu__link" href="#">Главная</a></li>-->
<!--                <li class="header-menu__item"><a class="header-menu__link" href="#">О нас</a></li>-->
<!--                <li class="header-menu__item"><a class="header-menu__link" href="#">Продукция</a></li>-->
<!--                <li class="header-menu__item"><a class="header-menu__link" href="#">Наши клиенты</a></li>-->
<!--                <li class="header-menu__item"><a class="header-menu__link" href="#">Оборудование и технологии</a></li>-->
<!--                <li class="header-menu__item"><a class="header-menu__link" href="#">Контакты</a></li>-->
<!--                <li class="header-menu__item"><a class="header-menu__link" href="#">Комплексные решения</a></li>-->
<!--                <li class="header-menu__item"><a class="header-menu__link" href="#">Новости</a></li>-->
<!--            </ul>-->
            <?php wp_nav_menu( array(

                'container'       => 'ul',
                //'container_class' => 'header-menu',
                'container_id'    => '',
                'menu_class'      => 'header-menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ) );

            ?>
        </div> <!--container-->
    </nav>
</header>
