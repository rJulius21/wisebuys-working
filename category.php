

<?php get_header(); ?>

<!-- START PAGE -->
<div class="page">
  
  <div class="row--paginate">
    <?php the_archive_title(); ?>
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

</div>
<!-- END PAGE -->

<?php get_footer(); ?>