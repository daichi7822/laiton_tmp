<?php get_header(); ?>
      
      <section class="main">
        <div class="banner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Top_02.jpg" alt="" class="pc-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Top_02.jpg" alt="" class="sp-img">
        </div>
        <div class="text info-text">
          <div class="inner">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <div class="info-content">
                <?php the_content(); ?>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>