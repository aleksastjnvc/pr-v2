
<div class="container-blog">
        <div class="flex-row">
 
        <div class="post">
            <a href="<?php the_permalink()?>">
            <div class="img-container">
          <?php the_post_thumbnail(); ?>
            </div>
        </a>

        <a href="<?php the_permalink()?>"> 
          <h2 class="flex-post-title"><?php echo the_title() ?></h2>
      </a>

          
          <p><?php echo wp_trim_words(get_the_excerpt(), 50) ?></p>
          <a class="readmore-btn-blog" href="<?php the_permalink(); ?>">See more</a>
        </div>
  <?php
    wp_reset_postdata();
  ?>
    </div>
</div>