<?php get_header(); ?>
      
      <section class="main">
        <div class="text info-text gallery-text">
          <div class="inner gallery-inner">
          <?php
            global $post;
            $args = array(
              'posts_per_page' => 18,
              'post_type'=> 'gallery',
              'order' => 'DESC',
              'orderby' => 'title'
            );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class='gallery'>
                <?php the_content(); ?>
              </div>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>