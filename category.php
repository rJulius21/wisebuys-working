

<?php get_header(); ?>

<!-- START ARCHIVE -->
<div class="archive">
  <?php the_archive_title(); ?>
  <?php echo get_terms(); ?>
  
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
            <p class="product-card__header-brand">By: <?php the_field('brand') ?></p>
          </div>
          <!-- END CARD HEADER -->

          <!-- START CARD BODY -->
          <div class="product-card__body">

            <div class="product-card__thumb-box">
              <div class="product-card__thumb"><?php the_field('affiliate_thumbnail'); ?></div>
            </div>

            <p class="product-card__price">$ <?php the_field('price'); ?></p>
            <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
          </div>
          <!-- END CARD BODY -->

        </div>
        <!-- END CARD -->

    <?php
      }
    ?>
  </div>
  <!-- END GRID -->

  <div class="row">
    <h1>Category</h1>
  </div>

</div>
<!-- END ARCHIVE -->


<?php echo paginate_links(); wp_reset_postdata();?>

<?php get_footer(); ?>