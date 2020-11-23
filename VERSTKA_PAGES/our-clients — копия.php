<?php
//Template Name: OurClientsPage
?>

<?php get_header(); ?>

<section class="clients-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="clients-page__wrap">
            <div class="clients-page__item">
                <div class="clients-img">
                    <img src="<?php echo THEME_PATH_IMG . 'clients/avk.jpg'; ?>" alt="advantages">
                </div>
                <h2 class="clients-page__item-title">
                    Кондитерська компанія АВК
                </h2>
                <p class="clients-page__item-descr">Центральний офіс «АВК» знаходиться в Києві, а основні виробничі потужності компанії зосереджені в Дніпрі. Продукція «АВК» експортується у понад 60 країн світу. Центральний офіс «АВК» знаходиться в Києві
                </p>
            </div> <!--clients-page__item-->

            <div class="clients-page__item">
                <div class="clients-img">
                    <img src="<?php echo THEME_PATH_IMG . 'clients/metro-cash-carry.jpg'; ?>" alt="advantages">
                </div>
                <h2 class="clients-page__item-title">
                    Кондитерська компанія АВК
                </h2>
                <p class="clients-page__item-descr">Центральний офіс «АВК» знаходиться в Києві, а основні виробничі потужності компанії зосереджені в Дніпрі. Продукція «АВК» експортується у понад 60 країн світу.
                </p>
            </div> <!--clients-page__item-->


            <div class="clients-page__item">
                <div class="clients-img">
                    <img src="<?php echo THEME_PATH_IMG . 'clients/avtocentr.png'; ?>" alt="advantages">
                </div>
                <h2 class="clients-page__item-title">
                    Кондитерська компанія АВК
                </h2>
                <p class="clients-page__item-descr">Центральний офіс «АВК» знаходиться в Києві, а основні виробничі потужності компанії зосереджені в Дніпрі. Продукція «АВК» експортується у понад 60 країн світу.
                </p>
            </div> <!--clients-page__item-->

            <div class="clients-page__item">
                <div class="clients-img">
                    <img src="<?php echo THEME_PATH_IMG . 'clients/avk.jpg'; ?>" alt="advantages">
                </div>
                <h2 class="clients-page__item-title">
                    Кондитерська компанія АВК
                </h2>
                <p class="clients-page__item-descr">Центральний офіс «АВК» знаходиться в Києві, а основні виробничі потужності компанії зосереджені в Дніпрі. Продукція «АВК» експортується у понад 60 країн світу.
                </p>
            </div> <!--clients-page__item-->

            <div class="clients-page__item">
                <div class="clients-img">
                    <img src="<?php echo THEME_PATH_IMG . 'clients/kraft.png'; ?>" alt="advantages">
                </div>
                <h2 class="clients-page__item-title">
                    Кондитерська компанія АВК
                </h2>
                <p class="clients-page__item-descr">Центральний офіс «АВК» знаходиться в Києві, а основні виробничі потужності компанії зосереджені в Дніпрі. Продукція «АВК» експортується у понад 60 країн світу.
                </p>
            </div> <!--clients-page__item-->

            <div class="clients-page__item">
                <div class="clients-img">
                    <img src="<?php echo THEME_PATH_IMG . 'clients/coca-cola-logo.jpg'; ?>" alt="advantages">
                </div>
                <h2 class="clients-page__item-title">
                    Кондитерська компанія АВК
                </h2>
                <p class="clients-page__item-descr">Центральний офіс «АВК» знаходиться в Києві, а основні виробничі потужності компанії зосереджені в Дніпрі. Продукція «АВК» експортується у понад 60 країн світу.
                </p>
            </div> <!--clients-page__item-->

        </div> <!--clients-page__wrap-->
    </div>
</section>

    <section class="home-form home-form-border">
        <div class="container">
            <h2 class="home-form__title"><?php _e( 'Оставьте заявку на расчет', 'stolichna' ); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="117" title="Оставить заявку Форма" html_class="main-form"]') ?>
        </div>
    </section>


<?php get_footer(); ?>