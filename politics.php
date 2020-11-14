<?php
//Template Name: PoliticsPage
?>

<?php get_header(); ?>

<section class="politics-page">
    <div class="container">
        <h1><?php the_post(); the_title(); ?></h1>
        <div class="politics-page__wrap">
            <?php the_content(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>