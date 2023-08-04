<?php 

get_header() ?>

<title><?php the_title() ?></title>


    <div class="container-blog">
        <div class="row">

        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'paged'          => $paged
            );
      ?>

  <?php
   
    $query = new WP_Query($args);
    
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
  ?>
        <div class="post">
            <a href="<?php the_permalink()?>">
            <div class="img-container-blog">
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

      ?>

      

      <?php

    endif;
    wp_reset_postdata();
  ?>


    </div>
</div>


<div class="pagination-blog">

      <?php 

      echo paginate_links( array(
        'total'    => $query->max_num_pages,
        'current'  => $paged,
        'prev_text' => __( '&laquo; Previous' ),
        'next_text' => __( 'Next &raquo;' ),
      ) );

      ?>

      </div>


<?php get_footer() ?>

