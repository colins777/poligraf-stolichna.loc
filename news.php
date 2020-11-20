<?php
//Template Name: NewsPage
?>

<?php get_header(); ?>

    <section class="news-page">
        <div class="container">
            <h1><?php the_title(); ?></h1>

            <div class="news-page__wrap">
                <div class="fb-page" data-href="https://www.facebook.com/TeamSmartCode/" data-tabs="timeline"
                     data-width="800" data-height="800" data-small-header="true" data-adapt-container-width="true"
                     data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/TeamSmartCode/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/TeamSmartCode/">Smartcode Team</a></blockquote>
                </div>


                <div class="news-page__form">
                    <h2 class="home-form__title"><?php _e( 'Оставьте заявку на расчет', 'stolichna' ); ?></h2>
                    <?php echo do_shortcode('[contact-form-7 id="117" title="Оставить заявку Форма" html_class="main-form"]') ?>
                </div>
            </div> <!--news-page__wrap-->

        </div> <!--container-->
    </section>



<?php get_footer(); ?>