<?php
//Template Name: AboutPage
?>

<?php get_header(); ?>

<section class="about-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>

        <div class="about-page__wrap">
            <?php the_post(); the_content(); ?>
        </div>
    </div>
</section>

    <section class="home-form">
        <div class="container">
            <h2 class="home-form__title"><?php _e( 'Оставьте заявку на расчет', 'stolichna' ); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="117" title="Оставить заявку Форма" html_class="main-form"]') ?>
        </div>
    </section>


<?php get_footer(); ?>