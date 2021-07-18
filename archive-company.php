<?php get_header(); ?>

  <div class="archive">

    <div class="full-grid">
      <?php

        while(have_posts()) {
          the_post(); 
      ?>

      <div class="company-card">
        <div class="company-card__header">
          <a href="<?php the_permalink(); ?>" class="company-card__header-link "><?php the_title(); ?></a>
        </div>
        <div class="company-card__body">
          <div class="company-card__thumb-container">
            <img src="<?php the_field('large_logo'); ?>" alt="brand-logo" class="company-card__thumb">
        </div>
          <a href="<?php the_permalink(); ?>" class="company-card__btn-link U-center-flex">company profile</a>
        </div>
      </div>

      <?php }?>
    </div>
    
    <div class="row">
      <?php  echo paginate_links(); ?>

    </div>

  </div>

<?php get_footer(); ?>