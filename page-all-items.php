<?php get_header(); ?>

  <div class="row">
    <h1>All items template</h1>
  </div>

  <!-- START GRID -->
  <div class="product-grid">
    <?php

    $allproductsQuery = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => 24,
    ));

    while($allproductsQuery->have_posts()){
      $allproductsQuery->the_post(); ?>

      <!-- START CARD -->
      <div class="product-card">

        <!-- START CARD HEADER -->
        <div class="product-card__header">
          <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_field('post_short_name') ?></a>
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
    } wp_reset_postdata();
    ?>
  </div>
  <!-- END GRID -->

  <div class="row">
    <h1>All items template</h1>
  </div>

<?php get_footer(); ?>