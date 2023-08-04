<?php get_header() ?>

                <h1> 
                    <?php
					printf( esc_html__( 'Search Results for: %s', 'prblog' ), '<span>' . get_search_query() . '</span>' );
					?>
                </h1>



                <?php if (have_posts() ) : ?>
                    <?php while (have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', 'search' );
                    ?>

            <?php endwhile; ?>
                    <?php else : ?> 
                        <h1>Nothing found here. Have you misstyped something? Please, try again.</h1>
                            <?php get_search_form() ?>
                                    <?php endif ; ?>


                        
<?php get_footer() ?>