<?php
//Template Name: ProductsPage
?>

<?php get_header(); ?>
    <section class="prod-page">
        <div class="container">
            <h1>Наша продукция</h1>
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
    </div> <!--container-->

</section>

    <section class="home-form">
        <div class="container">
            <h2 class="home-form__title"><?php _e( 'Оставьте заявку на расчет', 'stolichna' ); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="117" title="Оставить заявку Форма" html_class="main-form"]') ?>
        </div>
    </section>
<?php get_footer(); ?>