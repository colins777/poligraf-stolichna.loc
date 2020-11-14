<?php
//Template Name: EquipmentPage
?>

<?php get_header(); ?>


    <section class="prod-page">
        <div class="container">
            <h1>Оборудование и технологии</h1>
            <div class="prod-page__wrap">
                <div class="prod-page__descr prod-page-item">
                    <h2>Печатная машина Heidelberg MOVP</h2>
                    <ul>
                        <li>Количество печатных секций - 4</li>
                        <li>Максимальный размер листа - 480 х 650 мм</li>
                        <li>Минимальный размер листа - 210 х 280 мм</li>
                        <li>Максимальная площадь изображения - 472 х 645 мм</li>
                        <li>Максимальная скорость печати оттисков в час - 12 000 листов</li>
                        <li>Вес - 13920 кг</li>
                        <li>Потребляемая мощность – 28,5 кВт</li>
                        <li>Толщина пластины - 0,15 - 0,5 мм</li>
                        <li>Размер пластины - 550 х 650 мм</li>
                        <li>Красочные и увлажняющие валики фирмы Bottcher</li>
                        <li>Печать от кальки до картона толщиной до 0,5 мм</li>
                        <li>Полистный самонаклад</li>
                        <li>Прямое пленочное увлажнение</li>
                        <li>Секция переворота</li>
                        <li>Вакуумный разглаживатель листа</li>
                        <li>Порошковое противоотмарывающее устройство</li>
                    </ul>
                </div> <!--prod-page__descr-->

                <div class="prod-page__gallery prod-page-item">
                    <?php /*the_post(); the_content(); */?>
                    <?php echo do_shortcode('[foogallery id="29"]')?>
                </div> <!--prod-page__gallery-->
            </div> <!--prod-page__wrap-->

            <div class="prod-page__wrap">
                <div class="prod-page__gallery prod-page-item">
                    <?php /*the_post(); the_content(); */?>
                    <?php echo do_shortcode('[foogallery id="31"]')?>
                </div>
                <div class="prod-page__descr prod-page-item">
                    <h2>Пресс для вырубки HEIDELBERG Original</h2>
                    <ul>
                        <li>Максимальный формат материала 770х540 мм</li>
                        <li>Минимальный формат материала 150х125 мм</li>
                        <li>Максимальная толщина материала 0,8мм</li>
                        <li>Минимальная толщина материала: 0,08мм</li>
                        <li>Производительность от 2500 до 3500 циклов в час (зависит от типа материала)</li>
                    </ul>
                </div>
            </div> <!--prod-page__wrap-->


            <div class="prod-page__wrap">
                <div class="prod-page__descr prod-page-item">
                    <h2>Листоподбор Theisen & Bonitz sprint 315</h2>
                    <p>Листоподборочная машина Theisen & Bonitz sprint 315 с 10 станциями предназначена для подборки листов и сфальцованных тетрадей до 3-х сгибов а так же для сшивки на скобы. </p>
                    <ul>
                        <li>Производительность: 3100 тактов в час</li>
                        <li>Максимальный формат: 35х50 см</li>
                        <li>Минимальный – 6,5х10 см</li>
                    </ul>

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
                    <h2>Резальное оборудование Polar 92 EM-Monitor</h2>
                <p>Бумагорезальные машины Polar занимают первое место среди резаков различных производителей и соответствуют самым высоким требованиям, предъявляемым к резкам.</p>
                    <p>Точность реза, простота и автоматизация процессов - вот отличительные черты бумагорезальных машин Polar.</p>
                </div>
            </div> <!--prod-page__wrap-->

            <div class="prod-page__wrap">
                <div class="prod-page__descr prod-page-item">
                    <h2>Фальцовочная машина - Stahl К 49</h2>
                    <ul>
                        <li>Формат: 10х15 см. - 49х66 см</li>
                        <li>Тип самонаклада: плоскостапельный с листоразделителем и электронным индикатором положения стапеля</li>
                        <li>Машина включает первую кассетную фальцсекцию с четырьмя кассетами и ножевой фальцаппарат.</li>
                    </ul>

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
                    <h2>Рулонный ламинатор KDFM</h2>
                    <p>Рулонные ламинаторы KDFM - это высокоскоростные ламинаторы с возможностью ламинации с двух сторон, как матовой, так и глянцевой пленкой.</p>
                </div>
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

<?php get_footer(); ?>