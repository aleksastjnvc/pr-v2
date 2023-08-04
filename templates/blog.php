<?php /* <?php 
get_header() ?>

<title><?php the_title() ?></title>

    <div class="container-blog">
        <div class="row">
  <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5
      
    );
    $query = new WP_Query($args);
    
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
  ?>
        <div class="post">
            <a href="<?php the_permalink()?>">
            <div class="img-container">
          <?php the_post_thumbnail(); ?>
            </div>
        </a>

        <a href="<?php the_permalink()?>"> 
          <h2 class="flex-post-title" id="blogpost-title"><?php echo wp_trim_words( get_the_title(), 4 ); ?></h2>
      </a>

          
          <p id="post-text"><?php echo wp_trim_words(get_the_excerpt(), 18) ?></p>
          <a class="readmore-btn-blog-post" href="<?php the_permalink(); ?>">Read more</a>
        </div>
  <?php
      endwhile;

    endif;
    wp_reset_postdata();
  ?>

    <?php
      echo paginate_links();
    ?>

    </div>
</div>


<?php get_footer() ?>

*/ ?>
