<?php
//Template Name: ProductsPage
?>

<?php get_header(); ?>
    <section class="prod-page">
        <div class="container">
            <h1>Наша продукция</h1>
            <div class="prod-page__wrap">
                <div class="prod-page__descr prod-page-item">
                    <h2>Брошюры, буклеты</h2>
                    <p>Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Текстов, эта, снова? За, путь. Страну это себя предупреждал дороге пустился вопрос семь переписали, гор своего силуэт диких, наш проектах живет переулка решила свою, необходимыми возвращайся знаках пояс большого вскоре, продолжил языком! Несколько безопасную даже сбить но вопрос назад рукопись предупреждал, ты, правилами, грустный пояс знаках lorem, дороге пустился рот? Свой правилами языком точках всемогущая рекламных ведущими которое использовало, домах реторический переписывается вопрос решила возвращайся рот вопроса напоивший ручеек злых наш силуэт, большой букв от всех гор встретил строчка. Встретил толку, предложения свой. Это о страна, последний журчит, вопроса языком до.</p>
                </div> <!--prod-page__descr-->

                <div class="prod-page__gallery prod-page-item">
                    <?php /*the_post(); the_content(); */?>
                    <?php echo do_shortcode('[foogallery id="25"]')?>
                </div> <!--prod-page__gallery-->
            </div> <!--prod-page__wrap-->

            <div class="prod-page__wrap">
                <div class="prod-page__gallery prod-page-item">
                    <?php /*the_post(); the_content(); */?>
                    <?php echo do_shortcode('[foogallery id="25"]')?>
                </div>
                <div class="prod-page__descr prod-page-item">
                    <h2>ТЕСТ Брошюры, буклеты ТЕСТ Брошюры, буклеты</h2>
                    <p>Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Текстов, эта, снова? За, путь. Страну это себя предупреждал дороге пустился вопрос семь переписали, гор своего силуэт диких, наш проектах живет переулка решила свою, необходимыми возвращайся знаках пояс большого вскоре, продолжил языком! Несколько безопасную даже сбить но вопрос назад рукопись предупреждал, ты, правилами, грустный пояс знаках lorem, дороге пустился рот? Свой правилами языком точках всемогущая рекламных ведущими которое использовало, домах реторический переписывается вопрос решила возвращайся рот вопроса напоивший</p>
                </div>
            </div> <!--prod-page__wrap-->


            <div class="prod-page__wrap">
                <div class="prod-page__descr prod-page-item">
                    <h2>Ретейл полиграфия</h2>
                    <p>Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Текстов, эта, снова? За, путь. Страну это себя предупреждал дороге пустился вопрос семь переписали, гор своего силуэт диких, наш проектах живет переулка решила свою, необходимыми возвращайся знаках пояс большого вскоре, продолжил языком! Несколько безопасную даже сбить но вопрос назад рукопись предупреждал, ты, правилами, грустный пояс знаках lorem, дороге пустился рот? Свой правилами языком точках всемогущая рекламных ведущими которое использовало, домах реторический переписывается вопрос решила возвращайся рот вопроса напоивший ручеек злых наш силуэт, большой букв от всех гор встретил строчка. Встретил толку, предложения свой. Это о страна, последний журчит, вопроса языком до. ил языком! </p>
                </div> <!--prod-page__descr-->

                <div class="prod-page__gallery prod-page-item">
                    <?php /*the_post(); the_content(); */?>
                    <?php echo do_shortcode('[foogallery id="25"]')?>
                </div> <!--prod-page__gallery-->
            </div> <!--prod-page__wrap-->
    </div> <!--container-->

</section>

    <section class="home-form">
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
<section>
    <div class="container">
        <?php
        $products  = get_post_meta( get_the_ID(), 'products', true );
        foreach ($products as $product) :
            $counter === 0;
            $counter++;
            if ($counter % 2 !== 0) :
                ?>

                <div class="prod-page__wrap">
                    <div class="prod-page__descr prod-page-item">
                        <h2><?php echo $product["product_name"]; ?></h2>
                        <p><?php echo $product["text"]; ?></p>
                    </div> <!--prod-page__descr-->

                    <div class="prod-page__gallery prod-page-item">
                        <?php /*the_post(); the_content(); */?>
                        <?php echo do_shortcode($product["product_gallery"]) ;?>

                    </div> <!--prod-page__gallery-->
                </div> <!--prod-page__wrap-->

            <?php else : ?>
        <div class="prod-page__wrap">
                <div class="prod-page__gallery prod-page-item">
                    <?php echo do_shortcode($product["product_gallery"]) ;?>
                </div> <!--prod-page__gallery-->
                    <div class="prod-page__descr prod-page-item">
                        <h2><?php echo $product["product_name"]; ?></h2>
                        <p><?php echo $product["text"]; ?></p>
                    </div> <!--prod-page__descr-->
        </div>
            <?php endif; endforeach; ?>
    </div>
</section>


<?php get_footer(); ?>