

<?php get_header(); ?>

  <div class="full-grid">

    <?php
      $allProductsQuery = new WP_Query(array(
        'post_type' => 'product',
      ));

      while($allProductsQuery->have_posts()) {
        $allProductsQuery->the_post(); 
    ?>

    <div class="product-card">
      <div class="product-card__header">
        <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_field('short_name'); ?></a>
      </div>
      <div class="product-card__body">
        <div class="product-card__thumb-container">
          <div class="product-card__thumb"><?php the_field('affiliate_thumbnail'); ?></div>
      </div>
        <p class="product-card__price">$99.99</p>
        <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
      </div>
    </div>

    <?php } wp_reset_postdata(); echo paginate_links(); ?>

  </div>

<?php get_footer(); ?>