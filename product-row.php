<div class="product-row__viewport">
  
        <!-- START VIEWPORT -->
        <div class="product-row">
          <?php
    
            while(have_posts()) {
              the_post(); 
            ?>
      
            <?php get_template_part('template-parts/content', get_post_type()); ?>
      
          <?php } wp_reset_postdata(); ?>
  
        </div>
        <!-- END VIEWPORT -->
  
      </div>