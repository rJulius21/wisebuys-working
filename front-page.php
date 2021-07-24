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
        <div class="menu-card__header"><a href="#" class="menu-card__header-link U-center-flex">top brands</a></div>
        <div class="menu-card__content">

          <!-- START BRAND BOX -->
      <?php
            $menucardCompanyQuery = new WP_Query(array(
              'post_type' => 'company',
              'posts_per_page' => 12,
            ));
            while($menucardCompanyQuery->have_posts()) {
              $menucardCompanyQuery->the_post(); 
          ?>
            <a  href="<?php the_permalink(); ?>" class="company-link">
              <div class="company-link__logo-box">
                <img src="<?php the_field('company_logo'); ?>" alt="" class="company-link__logo">
              </div>
              <p class="company-link__label"><?php the_title(); ?></p>
            <a>

          <?php } wp_reset_postdata(); ?>
          <!-- END BRAND BOX -->
          
        </div>
      </div>

      
      <!-- END BRANDS CARD -->

      <!-- START DEPARTMENTS CARD -->
      <div class="menu-card">
        <div class="menu-card__header"><a href="<?php echo site_url('/all-departments'); ?>" class="menu-card__header-link U-center-flex">popular departments</a></div>
        <div class="menu-card__content">
          <div class="menu-card__item">
            <a href="<?php echo site_url('/category/accessories'); ?>">accessories</a>
          </div>
          <div class="menu-card__item">
            <a href="<?php echo site_url('/category/watches'); ?>">watches</a>
          </div>
          <div class="menu-card__item">
            <a href="<?php echo site_url('/category/sunglasses'); ?>">sunglasses</a>
          </div>
          <div class="menu-card__item">
            <a href="<?php echo site_url('/category/everyday-carry'); ?>">everyday-carry</a>
          </div>
          <div class="menu-card__item">
            <a href="<?php echo site_url('/category/tools'); ?>">tools</a>
          </div>
          <div class="menu-card__item">
            <a href="<?php echo site_url('/category/home/essentials'); ?>">essentials</a>
          </div>
          <div class="menu-card__item">
            <a href="<?php echo site_url('/category/tools/knives'); ?>">knives</a>
          </div>
          <div class="menu-card__item">
            <a href="<?php echo site_url('/category/clothing'); ?>">clothing</a>
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
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

  </div>
  <!-- END FRONT-PAGE -->

<?php get_footer(); ?>