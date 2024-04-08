<?php
/**
 * Template Name: Homepage Advance Custom Fields
 * Template Post Type: page
 */
get_header();
?>
<main>
    <section class="banner">
        <div>
            <h1><?php echo wp_kses_post(get_field('page_title')) ?></h1>
        </div>
    </section>
    <section>
        <h2 class="intro-title">About us:</h2>
        <p id="intro">Our company distributes and sells renovation products and household hardware to homeowners and
            home builders.
            With a Variety of tools, Hardware and accessories for your everyday needs and wants</p>
    </section>
    <section>
        <?php
        $the_query = new WP_Query('posts_per_page=3');
        while ($the_query->have_posts()) :
        $the_query->the_post();
        $mainImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        ?>

        <article class="card-group" id="post-container">
            <div class="card col-sm-6">
                <div class="card-body">
                    <img src="<?php echo $mainImg[0]; ?>" class="card-img-top" alt="post featured image">
                    <section class="card-section">
                        <h3 class="card-title"><?php the_title(); ?></h3>
                        <p class="card-text"> <?php the_excerpt() ?></p>
                        <p><?php the_tags(); ?></p>
                        <?php echo the_category(',', '', ''); ?>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </section>
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
