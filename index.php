

<?php get_header(); ?>

  <!-- START GRID -->
  <div class="product-grid">

    <?php
      $allProductsQuery = new WP_Query(array(
        'post_type' => 'product'
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

        <p class="product-card__price">$ <?php the_field('price'); ?></p>
        <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
      </div>
      <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->

    <?php } wp_reset_postdata(); ?>

  </div>
  <!-- END GRID -->

  <div class="row">
    <?php echo paginate_links(); ?>
    <h1>index</h1>
  </div>

<?php get_footer(); ?>