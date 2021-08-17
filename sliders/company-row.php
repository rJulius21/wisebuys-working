<div class="product-row__btn product-row__btn--left"></div>
      <!-- START VIEWPORT -->
      <div class="product-row__viewport">
        
        <!--START PRODUCT ROW (THIS CONTAINER SLIDES BEHIND THE VIEWPORT) -->
        <div class="product-row">
          <?php

          $companiesQuery = new WP_Query(array(
            'post_type' => 'company',
            'posts_per_page' => 15
          
          ));
    
          while($companiesQuery->have_posts()) {
            $companiesQuery->the_post(); 
            ?>
            
            <?php get_template_part('template-parts/content', get_post_type()); ?>
            
            <?php } wp_reset_postdata(); ?>
            
        </div>
        <!-- END PRODUCT ROW -->
    
  </div>
  <!-- END VIEWPORT -->
  <div class="product-row__btn product-row__btn--right"></div>