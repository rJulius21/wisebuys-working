<?php get_header(); ?>

  <!-- START ARCHIVE -->
  <div class="archive">

    <div class="row--paginate">
      <?php  echo paginate_links(); ?>
    </div>

    <div class="product-grid">
      <?php

        while(have_posts()) {
          the_post(); 
          get_template_part('template-parts/content', get_post_type());
      ?>

      <?php } wp_reset_postdata();?>
    </div>
    
    <div class="row--paginate">
      <?php  echo paginate_links(); ?>
    </div>

    <!-- START ROW -->
<div id="frontPageSlider" class="row row--relative">
      
      <!-- START PRODUCT ROW -->
      <?php include 'sliders/company-row.php'; ?>
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

  </div>
  <!-- END ARCHIVE -->



<?php get_footer(); ?>