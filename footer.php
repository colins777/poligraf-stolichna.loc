<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="phones-wrap">
                <span class="footer-address__name">Наши телефоны: </span>
                <a class="phones-item" href="tel:044 593-79-40">044 593-79-40</a>
                <a class="phones-item" href="tel:044 593-79-41">044 593-79-41</a>
                <a class="phones-item" href="tel:044 593-79-42">044 593-79-42</a>
            </div>

            <div class="footer-address">
                <span class="footer-address__name">Наш адрес:</span>
                <span class="footer-address__text">г. Киев, ул. Фрунзе, 82</span>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__left">
                <p class="footer-rights">© Друкарня Столична, Киев, 2020</p>
            </div>

            <div class="footer-bottom__right">
                <a class="footer-bottom__right-text" href="<?php echo site_url() . '/confidential-politics' ?>">Политика конфиденциальности</a>
                <a class="footer-bottom__right-text" href="<?php echo site_url() . '/terms-of-use' ?>">Пользовательское соглашение</a>
            </div>

        </div>
    </div>

    <div class="hidden">
        <div id="callback" class="white-popup mfp-hide">
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
    </div> <!--hidden-->
</footer>

<?php wp_footer();?>
</body>
</html>
