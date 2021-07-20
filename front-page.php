<?php get_header(); ?>

  <!-- START FRONT-PAGE -->
  <div class="front-page">

    <!-- START HERO -->
    <div class="hero">
      <img src="<?php echo get_theme_file_uri('/img/hat-print-202-151-85.png'); ?>" alt="" class="hero__bg-desktop">
      <img src="<?php echo get_theme_file_uri('/img/wisebuys-fullbanner-213213233.png'); ?>" alt="" class="hero__banner-img">
      <p class="hero__sub-heading">Shop wisely friends</p>
      <p class="hero__text">
        We show you the best products, made right here in the USA, that are available on the most popular shopping platforms
      </p>
    </div>
    <!-- END HERO -->

    <!-- START MENUS ROW -->
    <div class="row">

      <!-- START BRANDS CARD -->
      <div class="menu-card">
        <div class="menu-card__header"><a href="#" class="menu-card__header-link U-center-flex">brands</a></div>
        <div class="menu-card__content">
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
        </div>
      </div>
      <!-- END BRANDS CARD -->

      <!-- START DEPARTMENTS CARD -->
      <div class="menu-card">
        <div class="menu-card__header"><a href="#" class="menu-card__header-link U-center-flex">popular departments</a></div>
        <div class="menu-card__content">
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
          <div class="menu-card__item">
            <img src="<?php echo get_theme_file_uri('/img/brand-logos/zippo-logo-png.png'); ?>" alt="zippo-logo" class="menu-card__item-img">
            <p class="menu-card__item-label">zippo</p>
          </div>
        </div>
      </div>
      <!-- END DEPARTMENTS CARD -->

    </div>
    <!-- END MENUS ROW -->

    <!-- START ROW -->
    <div class="row">
      
      <!-- START PRODUCT ROW -->
      <div class="product-row__viewport">
  
        <!-- START VIEWPORT -->
        <div class="product-row">
          <?php
            $allProductsQuery = new WP_Query(array(
              'post_type' => 'product',
            ));
    
            while($allProductsQuery->have_posts()) {
              $allProductsQuery->the_post(); 
            ?>
      
            <!-- START CARD -->
            <div class="product-card">
    
              <div class="product-card__header">
                <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_field('short_name'); ?></a>
              </div>
    
              <!-- START CARD BODY -->
              <div class="product-card__body">
    
                <div class="product-card__thumb-box">
                  <div class="product-card__thumb"><?php the_field('affiliate_thumbnail'); ?></div>
                </div>
    
                <p class="product-card__price">$99.99</p>
                <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
              </div>
              <!-- END CARD BODY -->
    
            </div>
            <!-- END CARD -->
      
          <?php } wp_reset_postdata(); ?>
  
        </div>
        <!-- END VIEWPORT -->
  
      </div>
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

    <!-- START ROW -->
    <div class="row">
      
      <!-- START PRODUCT ROW -->
      <div class="product-row__viewport">
  
        <!-- START VIEWPORT -->
        <div class="product-row">
          <?php
            $allProductsQuery = new WP_Query(array(
              'post_type' => 'product',
            ));
    
            while($allProductsQuery->have_posts()) {
              $allProductsQuery->the_post(); 
            ?>
      
            <!-- START CARD -->
            <div class="product-card">
    
              <div class="product-card__header">
                <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_field('short_name'); ?></a>
              </div>
    
              <!-- START CARD BODY -->
              <div class="product-card__body">
    
                <div class="product-card__thumb-box">
                  <div class="product-card__thumb"><?php the_field('affiliate_thumbnail'); ?></div>
                </div>
    
                <p class="product-card__price">$99.99</p>
                <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
              </div>
              <!-- END CARD BODY -->
    
            </div>
            <!-- END CARD -->
      
          <?php } wp_reset_postdata(); ?>
  
        </div>
        <!-- END VIEWPORT -->
  
      </div>
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

    <!-- START ROW -->
    <div class="row">
      
      <!-- START PRODUCT ROW -->
      <div class="product-row__viewport">
  
        <!-- START VIEWPORT -->
        <div class="product-row">
          <?php
            $allProductsQuery = new WP_Query(array(
              'post_type' => 'product',
            ));
    
            while($allProductsQuery->have_posts()) {
              $allProductsQuery->the_post(); 
            ?>
      
            <!-- START CARD -->
            <div class="product-card">
    
              <div class="product-card__header">
                <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_field('short_name'); ?></a>
              </div>
    
              <!-- START CARD BODY -->
              <div class="product-card__body">
    
                <div class="product-card__thumb-box">
                  <div class="product-card__thumb"><?php the_field('affiliate_thumbnail'); ?></div>
                </div>
    
                <p class="product-card__price">$99.99</p>
                <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
              </div>
              <!-- END CARD BODY -->
    
            </div>
            <!-- END CARD -->
      
          <?php } wp_reset_postdata(); ?>
  
        </div>
        <!-- END VIEWPORT -->
  
      </div>
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

  </div>
  <!-- END FRONT-PAGE -->

<?php get_footer(); ?>