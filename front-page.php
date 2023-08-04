<?php get_header() ?>

<?php wp_head() ?>


<?php

$args = array (
    'post_type' => 'post',
    'posts_per_page' => 3,
);

$posts_left = new WP_Query($args);

$i = 0;

while($posts_left->have_posts()) {
    $posts_left->the_post();
    

?>


<div class="container">
        <div class="wrapper">

       
                <h1><?php the_title() ?></h1>
                <a href="<?php the_permalink() ?>">
                <div class="img-container">
                <img class="post-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
                </div>
                </a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 50) ?></p>
                <button class="readmore-btn"><a href="<?php the_permalink() ?>">Read More</a></button>

        </div>
    </div>

<?php 

}
wp_reset_postdata();
?>

<?php

$args = array (
    'post_type' => 'post',
    'posts_per_page' => 2,
    'cat' => '3'
);

$posts_left = new WP_Query($args);

while($posts_left->have_posts()) {
    $posts_left->the_post();


?>

<div class="container">
        <div class="wrapper">
                <h1><?php the_title() ?></h1>
                <a href="<?php the_permalink() ?>">
                <div class="img-container">
                <img class="post-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
                </div>
                </a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 50) ?></p>
                <button class="readmore-btn"><a href="<?php the_permalink() ?>">Read More</a></button>
    </div>
</div>

<?php 
}
wp_reset_postdata();
?>


<?php get_template_part( 'template-parts/quote', 'front-page' ) ?>

<?php get_template_part( 'template-parts/front-about', 'front-page' ) ?>

<?php get_footer() ?>


