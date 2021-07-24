

<?php get_header(); ?>

<!-- START ARCHIVE -->
<div class="archive">
  <?php the_archive_title(); ?>

  <div class="row">
    <?php echo paginate_links();  ?>
  </div>
  
  <!-- START GRID -->
  <div class="product-grid">
    <?php

      while(have_posts()){
        the_post(); ?>

        <!-- START CARD -->
        <div class="product-card">

          <!-- START CARD HEADER -->
          <div class="product-card__header">
            <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_title(); ?></a>
            <p class="product-card__header-brand">By: <?php the_field('post_brand') ?></p>
          </div>
          <!-- END CARD HEADER -->

          <!-- START CARD BODY -->
          <div class="product-card__body">

            <div class="product-card__thumb-box">
              <div class="product-card__thumb"><?php the_field('post_aff_img'); ?></div>
            </div>

            <p class="product-card__price">$ <?php the_field('post_price'); ?></p>
            <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
          </div>
          <!-- END CARD BODY -->

        </div>
        <!-- END CARD -->

    <?php
      } wp_reset_postdata();
    ?>
  </div>
  <!-- END GRID -->

  <div class="row">
    <?php echo paginate_links();  ?>
  </div>

</div>
<!-- END ARCHIVE -->

<?php get_footer(); ?>