<?php
//Template Name: ContactsPage
?>

<?php get_header(); ?>

<section class="page-contacts">
    <div class="container">
        <h1>Контакты</h1>
        <div class="page-contacts__wrap">
            <div class="page-contacts__con">
                <div class="phones-wrap">
                    <span class="footer-address__name"><img class="contact-icon" src="//localhost:3000/wp-content/themes/stolichna/img//icons/phone-square-solid.svg" alt="phone">Наши телефоны: </span>
                    <div class="phones-items">
                        <a class="phones-item" href="tel:044 593-79-40">044 593-79-40</a>
                        <a class="phones-item" href="tel:044 593-79-41">044 593-79-41</a>
                        <a class="phones-item" href="tel:044 593-79-42">044 593-79-42</a>
                    </div>
                </div>

                <div class="email-wrap">
                    <span class="footer-address__name"><img class="contact-icon"
                                                            src="<?php echo THEME_PATH_IMG . '/icons/envelope-solid.svg'; ?>"
                                                            alt="email">E-mail: </span>
                    <a class="mail-item" href="#">sale@stolichnaya.kiev.ua</a>
                </div>

                <div class="address">
                    <span class="footer-address__name"><img class="contact-icon"
                                                            src="<?php echo THEME_PATH_IMG . '/icons/map-marked-solid.svg'; ?>"
                                                            alt="email">Адрес: </span>
                    <span class="address-title">г. Киев, ул. Фрунзе, 82</span>
                </div>

                <div class="schedule">
                    <span class="schedule-title"><img class="contact-icon" src="<?php echo THEME_PATH_IMG . '/icons/clock-solid.svg'; ?>" alt="email">Режим работы: </span>
                    <span class="schedule-time">пн-пт 9:00-19:00</span>
                </div>
            </div> <!--page-contacts__con-->

            <div class="page-contacts__form">
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
            </div> <!--page-contacts__form-->
        </div> <!--page-contacts__wrap-->

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10157.274085472365!2d30.4948556!3d50.4724137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9dc6cd9a6f1775c!2z0KHRgtC-0LvQuNGH0L3QsA!5e0!3m2!1suk!2sua!4v1605121627382!5m2!1suk!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>


<?php get_footer(); ?>