<?php
//Template Name: 404Page
?>

<?php get_header(); ?>

    <section class="page-404 sticky-footer">
        <div class="container">
            <div class="page-404__wrap">
                <h1>404</h1>
                <h2 class="page-404__title">
                    <?php _e( 'Страница не найдена', 'stolichna' ); ?>
                </h2>
                <a class="page-404__link" href="<?php echo site_url(); ?>"><?php _e( 'Вернуться на Главную страницу сайта', 'stolichna' ); ?></a>
            </div>

        </div>
    </section>


<?php get_footer(); ?>