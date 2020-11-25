<?php
//Template Name: ContactsPage
$theme_options = get_option( 'stolTheme_option' );
?>

<?php get_header(); ?>

<section class="page-contacts">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="page-contacts__wrap">
            <div class="page-contacts__con">
                <div class="phones-wrap">
                    <span class="footer-address__name"><img class="contact-icon" src="<?php echo THEME_PATH_IMG . '/icons/phone-square-solid.svg'; ?>" alt="phone"><?php _e( 'Нашы телефоны', 'stolichna' ); ?>:</span>
                    <div class="phones-items">
                        <?php
                        foreach ($theme_options['footer_phones'] as $phone) : ?>
                            <a class="phones-item" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        <?php endforeach;?>
                    </div>
                </div>

                <div class="email-wrap">
                    <span class="footer-address__name"><img class="contact-icon"
                                                            src="<?php echo THEME_PATH_IMG . '/icons/envelope-solid.svg'; ?>"
                                                            alt="email">E-mail: </span>
                    <a class="mail-item"
                       href="mailto:<?php echo $theme_options['email']; ?>"><?php echo $theme_options['email']; ?>
                    </a>
                </div>

                <div class="address">
                    <span class="footer-address__name"><img class="contact-icon"
                                                            src="<?php echo THEME_PATH_IMG . '/icons/map-marked-solid.svg'; ?>"
                                                            alt="email"><?php _e( 'Наш адрес', 'stolichna' ); ?>: </span>
                    <span class="address-title"><?php echo $theme_options['phones_address']; ?></span>
                </div>

                <div class="schedule">
                    <span class="schedule-title"><img class="contact-icon" src="<?php echo THEME_PATH_IMG . '/icons/clock-solid.svg'; ?>" alt="email"><?php _e( 'Режим работы', 'stolichna' ); ?>: </span>
                    <?php
                    foreach ($theme_options['contacts_schedule'] as $contacts_schedule) : ?>
                        <span class="schedule-time"><?php echo $contacts_schedule; ?></span>
                    <?php endforeach;?>
                </div>
            </div> <!--page-contacts__con-->

            <div class="page-contacts__form">
                <h2 class="home-form__title"><?php _e( 'Оставьте заявку на расчет', 'stolichna' ); ?></h2>
                <?php echo do_shortcode('[contact-form-7 id="117" title="Оставить заявку Форма" html_class="main-form"]') ?>
            </div> <!--page-contacts__form-->
        </div> <!--page-contacts__wrap-->

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10157.274085472365!2d30.4948556!3d50.4724137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9dc6cd9a6f1775c!2z0KHRgtC-0LvQuNGH0L3QsA!5e0!3m2!1suk!2sua!4v1605121627382!5m2!1suk!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>