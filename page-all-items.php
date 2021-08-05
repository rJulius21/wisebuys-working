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

      <?php get_template_part('template-parts/content', get_post_type()); ?>

    <?php
    } wp_reset_postdata();
    ?>
  </div>
  <!-- END GRID -->

  <div class="row">
    <h1>All items template</h1>
  </div>

<?php get_footer(); ?>