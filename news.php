<?php
//Template Name: NewsPage
?>

<?php get_header(); ?>

    <section class="news-page">
        <div class="container">
            <h1>Новости</h1>

            <div class="news-page__wrap">
                <div class="fb-page" data-href="https://www.facebook.com/TeamSmartCode/" data-tabs="timeline"
                     data-width="800" data-height="800" data-small-header="true" data-adapt-container-width="true"
                     data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/TeamSmartCode/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/TeamSmartCode/">Smartcode Team</a></blockquote>
                </div>


                <div class="news-page__form">
                    <form class="main-form" action="">
                        <div class="input-top">
                            <input class="input-top__name" type="text" placeholder="Ваше имя">
                            <input class="input-top__phone" type="text" placeholder="Ваш телефон">
                        </div>
                        <input type="email" placeholder="Email*">
                        <textarea name="vid-uslug"
                                  placeholder="Опишите ваш заказ. Например: буклет А4,бумага мелованая матовая, 150 гр., 4+4, 2 фальца  и т.п."></textarea>
                        <button type="submit" class="btn">Оставить заявку</button>
                        <!--<a href="#" class="btn">Оставить заявку</a>-->
                    </form>
                </div>
            </div> <!--news-page__wrap-->

        </div> <!--container-->
    </section>



<?php get_footer(); ?>