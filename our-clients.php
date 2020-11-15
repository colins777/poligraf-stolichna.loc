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
            <h2 class="home-form__title">Оставьте заявку на расчет</h2>
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