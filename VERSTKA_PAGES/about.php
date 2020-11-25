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
            <form class="main-form" action="">
                <div class="input-top">
                    <input class="input-top__name" type="text" placeholder="Ваше имя">
                    <input class="input-top__phone" type="text" placeholder="Ваш телефон">
                </div>
                <input type="email" placeholder="Email*">
                <textarea name="vid-uslug" placeholder="Опишите ваш заказ. Например: буклет А4,бумага мелованая матовая, 150 гр., 4+4, 2 фальца  и т.п."></textarea>
                <button type="submit" class="btn">Оставить заявку</button>
                <!--<a href="#" class="btn">Оставить заявку</a>-->
            </form>
        </div>
    </section>


<?php get_footer(); ?>