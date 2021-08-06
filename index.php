<?php get_header(); ?>

        <!-- Blog Section -->
        <section class="evaly-content-section">
            <div class="container-blog">
                <div class="evaly-page-title-section">
                    <h1 class="evaly-page-title">Blog</h1>
                </div>
                <div class="evaly-posts-section">
                    <?php

                        if ( have_posts() ) {
                            while( have_posts() ) : the_post(); ?>
                        
                        <article class="evaly-post-article">
                            <div class="evaly-thumbnail">
                                <?php echo the_post_thumbnail(); ?>
                            </div>
                            <h2 class="evaly-post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="evaly-post-content">
                                <p><?php the_content(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                            </div>
                        </article>

                        <?php 
                            endwhile;
                            } else {
                            echo '<h2>Sorry, No posts found!</h2>';
                        }

                    ?>
                </div>
            </div>
        </section>

<?php get_footer(); ?>