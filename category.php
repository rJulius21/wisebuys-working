

<?php get_header(); ?>

<!-- START PAGE -->
<div class="page">
  
  <div class="page-banner">
    <h2 class="page-banner__heading">
      You're browsing in <?php the_archive_title(); ?>
    </h2>
  </div>

  <div class="row--paginate">
    <?php echo paginate_links();  ?>
  </div>
  
  <!-- START GRID -->
  <div class="product-grid">
    <?php

      while(have_posts()){
        the_post(); ?>

        <?php get_template_part('template-parts/content', get_post_type()); ?>

        <?php
      } wp_reset_postdata();
    ?>
  </div>
  <!-- END GRID -->

  <div class="row--paginate">
    <?php echo paginate_links();  ?>
  </div>

  <!-- START ROW -->
  <div id="frontPageSlider" class="row row--relative">
      
      <!-- START PRODUCT ROW -->
      <?php include 'product-row.php'; ?>
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

</div>
<!-- END PAGE -->

<?php get_footer(); ?>