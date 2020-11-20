<?php
//Template Name: OurClientsPage
?>

<?php get_header(); ?>

<section class="clients-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="clients-page__wrap">
        <?php
            $clients  = get_post_meta( get_the_ID(), 'clients', true );

            foreach ($clients as $client) :
                $image_test = wp_get_attachment_image( get_post_meta( get_the_ID(), 'clients', 1 ), 'medium' );
                $image = $client["client_logo"];
//                echo '<pre>';
//               var_dump($image);
//                echo '<pre>';
            ?>
            <div class="clients-page__item">
                <div class="clients-img">
                    <img src="<?php echo  $image; ?>" alt="clients">
                </div>
                <h2 class="clients-page__item-title">
                    <!--Кондитерська компанія АВК-->
                    <?php echo $client["client_name"]; ?>
                </h2>
                <p class="clients-page__item-descr"><?php echo $client["text"]; ?></p>
            </div> <!--clients-page__item-->
            <?php endforeach; ?>
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