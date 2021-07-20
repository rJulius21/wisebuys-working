

<?php get_header(); ?>

  <!-- START GRID -->
  <div class="product-grid">

    <?php
      $allProductsQuery = new WP_Query(array(
        'post_type' => 'product',
      ));

      while($allProductsQuery->have_posts()) {
        $allProductsQuery->the_post(); 
    ?>

    <!-- START CARD -->
    <div class="product-card">

      <div class="product-card__header">
        <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_field('short_name'); ?></a>
        <p class="product-card__header-brand">By: <?php the_field('brand') ?></p>
      </div>

      <!-- START CARD BODY -->
      <div class="product-card__body">

        <div class="product-card__thumb-box">
          <div class="product-card__thumb"><?php the_field('affiliate_thumbnail'); ?></div>
        </div>

        <p class="product-card__price">$99.99</p>
        <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
      </div>
      <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->

    <?php } wp_reset_postdata(); echo paginate_links(); ?>

  </div>
  <!-- END GRID -->

<?php get_footer(); ?>