<div class="product-row__viewport">
  
        <!-- START VIEWPORT -->
        <div class="product-row">
          <?php
    
            while(have_posts()) {
              the_post(); 
            ?>
      
            <!-- START CARD -->
            <div class="product-card">
    
              <div class="product-card__header">
                <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_field('post_short_name'); ?></a>
              </div>
    
              <!-- START CARD BODY -->
              <div class="product-card__body">
    
                <div class="product-card__thumb-box">
                  <div class="product-card__thumb"><?php the_field('post_aff_img'); ?></div>
                </div>
    
                <p class="product-card__price">$ <?php the_field('post_price'); ?></p>
                <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
              </div>
              <!-- END CARD BODY -->
    
            </div>
            <!-- END CARD -->
      
          <?php } wp_reset_postdata(); ?>
  
        </div>
        <!-- END VIEWPORT -->
  
      </div>