<?php get_header() ?>

<?php if(!have_posts()) {
        echo '<h2>There are no posts for this category</h2>';
} ?>

<?php

    $url = site_url();
    

?>


<?php if ( is_category( '7' ) ) : ?>
    <div class="archive-hero" style="background-image:url('http://pavleristic.com/wp-content/uploads/2023/06/bussines-banner.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

<?php elseif (is_category('11') ) : ?>
    <div class="archive-hero" style="background-image:url('http://pavleristic.com/wp-content/uploads/2023/06/technology-banner.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

    <?php elseif (is_category('10') ) : ?>
    <div class="archive-hero" style="background-image:url('http://pavleristic.com/wp-content/uploads/2023/06/sport-banner.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

    <?php elseif (is_category('8') ) : ?>
    <div class="archive-hero" style="background-image:url('http://pavleristic.com/wp-content/uploads/2023/06/international-banner.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

    <?php elseif (is_category('12') ) : ?>
    <div class="archive-hero" style="background-image:url(http://pavleristic.com/wp-content/uploads/2023/06/travel-bannerjpg.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

<?php endif; ?>


<div class="main">

<?php while(have_posts()) {
      the_post();  
?>

   
    <a href="<?php the_permalink() ?>">
        <div class="img-container-archive">
            <?php the_post_thumbnail() ?>
        </div>
    </a>

    
    <a href="<?php the_permalink()?>">
        <h2 class="archive-post-title"><?php the_title() ?></h2>
            <p class="archive-post-paragraph"><?php echo get_the_excerpt() ?></p>
                <a class="readmore-btn-archive" href="<?php the_permalink() ?>">Read More</a>
    </a>

    <br><br><br>

<?php 
    }
    wp_reset_query();
?>

</div>

<?php get_footer() ?>
