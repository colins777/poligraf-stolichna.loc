<?php
//Template Name: MainPage
?>


<?php get_header(); ?>


<div class="header-slider">
    <?php $slides = get_post_meta(get_the_ID(), 'slider', true);
         foreach ($slides as $slide) :
            //$image_test = wp_get_attachment_image( get_post_meta( get_the_ID(), 'slider', 1 ), 'medium' );
            $image = $slide["slide_image"];
        ?>
    <div class="header-slider__item" style="background-image: url(<?php echo $image; ?>)">
        <div class="header-slider__wrap">
            <div class="container container--relative">
                <div class="header-slider__content">
                    <h2><?php echo $slide["slide_title"]; ?></h2>
                    <a class="header-slider__link" href="<?php echo $slide["slide_link"] ?>"><?php echo $slide["slide_descr"] ?><img src="<?php echo THEME_PATH_IMG . 'icons/arrow-right.png'; ?>" alt="arrow"></a>
                </div>
            </div>
        </div>
    </div> <!-- header-slider__item -->
    <?php endforeach; ?>
</div>

<section class="about">
    <div class="container">
        <h1 class="blue-line">Добро пожаловать в «Типографию «Столичная»</h1>
        <div class="about-text"><p>Наша мисия – сделать Клиента счастливым , постоянно совершенствуя спектр услуг.</p>
            <p>Именно поэтому, наши Клиенты ласково называют нас "Столичная". У нас Вы найдете полное понимание, профессиональный подход  и оперативное решение нестандартных  задач.</p>
            <p>Типография Столичная успешно работает более 10 лет на рынке Украины имея полный замкнутый цикл производства. За годы плодотворной  работы,  мы освоили печать на бумаге, картонах, пленке Oracal, пластике (ПВХ, акриле) и многих других декоративных материалах  , включая  дерево.</p>
        </div>
    </div>
</section>

<section class="adv">
    <div class="container">
        <div class="adv-wrap">
            <?php
            $advantages  = get_post_meta( get_the_ID(), 'advantages', true );
                foreach ($advantages as $advantage) :
            ?>
            <div class="adv-item">
                <div class="adv-img">
                    <img src="<?php echo $advantage['advantages_icon']; ?>" alt="advantages">
                </div> <!--adv-img-->
                <div class="adv-text">
                    <h2 class="adv-title">
                        <?php echo $advantage['advantages_title']; ?>
                    </h2>
                    <div class="adv-descr">
                        <?php echo $advantage['advantages_descr']; ?>
                    </div> <!--adv-descr-->
                </div> <!--adv-text-->
            </div> <!--adv-item-->
            <?endforeach; ?>
        </div> <!--adv-wrap-->
    </div> <!--container-->
</section>

<section class="clients">
    <div class="container">
        <h1 class="blue-line"><?php _e( 'Наши клиенты', 'stolichna' ); ?></h1>
        <div class="clients-wrap">
            <?php
            $clients  = get_post_meta( get_the_ID(), 'clients', true );
            foreach ($clients as $client) :
            ?>
            <div class="clients-item">
                <div class="clients-img">
                    <img src="<?php echo $client['clients_logo']; ?>" alt="advantages">
                </div>
            </div> <!--clients-item-->
            <?php endforeach; ?>
        </div> <!--clients-wrap-->
    </div>
</section>

<section class="products">
    <div class="container">
        <h1 class="blue-line">
            <?php $section_title  = get_post_meta( get_the_ID(), 'products_section_title', true );
              echo $section_title;
            //var_dump($section_title);
            ?>
        </h1>
        <div class="products-wrap">
            <?php $products  = get_post_meta( get_the_ID(), 'products', true );

            foreach ($products as $product) :
            ?>
            <div class="products-item">
                <div class="products-img">
                    <img src="<?php echo $product['product_logo']; ?>" alt="advantages">

                </div>
                <h2 class="products-item__title">
                    <?php echo $product['product_title']; ?>
                </h2>
            </div> <!--products-item-->
            <?php endforeach; ?>
        </div> <!--products-wrap-->
    </div>
</section>


<section class="home-form">
    <div class="container">
        <h2 class="home-form__title"><?php _e( 'Оставьте заявку на расчет', 'stolichna' ); ?></h2>
        <?php echo do_shortcode('[contact-form-7 id="117" title="Оставить заявку Форма" html_class="main-form"]') ?>
    </div>
</section>

<?php get_footer(); ?>

<!--univest-print.com -->
