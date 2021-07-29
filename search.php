<?php get_header(); ?>

<!-- START PAGE -->
<div class="page">

  <div class="row--paginate">
    <?php echo paginate_links(); ?>
  </div>
  
  <!-- START ROW -->
  <div class="row">
    
    <!-- START GRID -->
    <div class="product-grid">
  
      <?php
        if(have_posts()) {
          while(have_posts()){
            the_post(); 
            get_template_part('template-parts/content', get_post_type());
          }
        } else{
          echo '<h2 class="product-grid__message">Sorry, we cant find that on Wisebuys USA</h2>';
        }
        ?>
  
    </div>
    <!-- END GRID -->
    
  </div>
  <!-- END ROW -->
  
  <div class="row--paginate">
    <?php echo paginate_links(); ?>
  </div>
  
  <?php wp_reset_postdata(); ?>

</div>
<!-- END PAGE -->

<?php get_footer(); ?>