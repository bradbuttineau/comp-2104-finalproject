<?php
/**
 * Template Name: Single Post template*
 * Template Post Type: post
 */

get_header();
$mainImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<main>
    <section class="banner">
        <h1><?php echo wp_kses_post(get_field('page_title')); ?></h1>
    </section>
    <section class="container3>
        <?php
    $the_query = new WP_Query('posts_per_page=1');
    while ($the_query->have_posts()) :
    $the_query->the_post();
    $mainImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    ?>
        <article>
            <div class=" card
    " style="">
    <div class="card-body">
        <img src="<?php echo $mainImg[0]; ?>" class="card-img-top" alt="post featured image">
        <h2 class="card-title"><?php the_title(); ?></h2>
        <p class="card-text"> <?php the_excerpt() ?></p>
        <p><?php the_tags(); ?></p>
        <?php echo the_category(',', '', ''); ?>
        <a href="#" class="btn btn-primary">Learn more</a>
    </div>
    </div>
    </article>
    </section>

    <?php
    endwhile;
    wp_reset_postdata()
    ?>


    <?php get_footer() ?>

</main>

