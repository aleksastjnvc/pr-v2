<?php get_header(); ?> 


<?php while(have_posts()) {
                the_post();         
        ?>

<div class="hero">
   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
</div>


<div class="container-single">
    <div class="main-content">
        <h2><?php the_title() ?></h2>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20) ?></p>
            <div class="info">
                <p class="single-time"><?php the_time('F j, Y') ?></p>
                    <h4 class="single-cat"><?php echo get_the_category_list() ?></h4>
            </div>
    </div>
</div>

<div class="container-single">
    <div class="content">
        <p><?php the_content() ?></p>
    </div>
</div>
 
<?php /* comment_form();

    $comments_number = get_comments_number();
        if($comments_number != 0) {
            ?>

            <div class="comments">
                <h3 class="comments-heading">What people say</h3>
                <ol class="all-comments">
                    <?php

                        $comments = get_comments(array(
                            'post_id' => $post->ID,
                            'status' => 'approve'
                        ));

                        wp_list_comments(array(
                            'per_page' => 15
                        ), $comments);
                    ?>
                </ol>
            </div>


            <?php
        } */
?>

<?php
if (comments_open() || get_comments_number()) {
    comments_template();
}
?>

<?php }
wp_reset_postdata(); 
?>

<?php get_footer() ?>