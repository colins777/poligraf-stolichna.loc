<?php
$theme_options = get_option( 'stolTheme_option' );
//echo '<pre>';
//var_dump($redux_options);
//echo '</pre>';
//echo($redux_options['email']);
?>

<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="phones-wrap">
                <span class="footer-address__name"><?php _e( 'Нашы телефоны', 'stolichna' ); ?></span>
                <?php
                    foreach ($theme_options['footer_phones'] as $phone) : ?>
                        <a class="phones-item" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    <?php endforeach;?>
<!--                <a class="phones-item" href="tel:044 593-79-41">--><?php //var_dump($redux_options['phones']); ?><!--</a>-->
<!--                <a class="phones-item" href="tel:044 593-79-41">044 593-79-41</a>-->
<!--                <a class="phones-item" href="tel:044 593-79-42">044 593-79-42</a>-->
            </div>

            <div class="footer-address">
                <span class="footer-address__name"><?php _e( 'Наш адрес', 'stolichna' ); ?></span>
                <!--<span class="footer-address__text">г. Киев, ул. Фрунзе, 82</span>-->
                <span class="footer-address__text"><?php echo $theme_options['phones_address']; ?></span>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__left">
                <!--<p class="footer-rights">© Полиграфия Столична, Киев, 2020</p>-->
                <p class="footer-rights"><?php echo $theme_options['copyright']; ?></p>
            </div>

            <div class="footer-bottom__right">
                <?php
                    if ($theme_options['confidential_politics_title']) : ?>
                        <a class="footer-bottom__right-text" href="<?php echo $theme_options['confidential_politics_link']; ?>"><?php echo $theme_options['confidential_politics_title']; ?></a>
              <?php endif;  ?>

                <?php
                if ($theme_options['terms_title']) : ?>
                <a class="footer-bottom__right-text" href="<?php echo $theme_options['terms_link']; ?>"><?php echo $theme_options['terms_title']; ?></a>
                <?php endif;  ?>
            </div>
        </div>
    </div>

    <div class="hidden">
        <div id="callback" class="white-popup mfp-hide">
            <?php echo do_shortcode('[contact-form-7 id="117" title="Оставить заявку Форма" html_class="main-form"]') ?>
        </div>
    </div> <!--hidden-->
</footer>

<?php wp_footer();?>
</body>
</html>
