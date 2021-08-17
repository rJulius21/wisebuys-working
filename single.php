

<?php get_header(); ?>

<div class="single-product__spacer"></div>
<div class="single-product">

  <?php
    while(have_posts()){
      the_post(); 
  ?>

  <div class="single-product__display">
    <div class="single-product__img-box">
      <!-- START WORDPRESS ACF IMAGE ARRAY QUERY -->
      <?php 
      $postSingleImage = get_field('post_full_img');
      if( !empty( $postSingleImage ) ): ?>
          <img class="single-product__img" src="<?php echo esc_url($postSingleImage['url']); ?>" alt="<?php echo esc_attr($postSingleImage['alt']); ?>" />
      <?php endif; ?>
      <!-- END WORDPRESS ACF IMAGE ARRAY QUERY -->
    </div>
  </div>

  <div class="single-product__info-box">
    <h2 class="single-product__heading"><?php the_title(); ?></h2>
    <p class="single-product__description"><?php the_field('post_desc'); ?></p>
    <div class="single-product__price-box">
      <p class="single-product__price">$<?php the_field('post_price'); ?></p>
      <p class="single-product__price-disclaimer">Prices are subject to change on retailing websites</p>
    </div>
    <div class="single-product__buy-box">
      <a href="<?php the_field('post_aff_link'); ?>" class="single-product__buy-link" target="_blank">Buy on Amazon!</a>
      <input type="checkbox" name="productDisclaimer" id="productDisclaimer">
      <label for="productDisclaimer" class="single-product__disclaimer-label">What's an affiliate link?</label>
      <p class="single-product__disclaimer-text">
        Affiliate links cost you absolutely nothing to use!
        <br> <br>
        We use affiliate links on WisebuysUSA.com to earn a small commison on the quality American products that we show you on the site. Without these links, this site would not be able to operate, thanks for visiting!
      </p>
    </div>
  </div>

  <?php } wp_reset_postdata(); ?>

  <!-- START ROW -->
  <div id="frontPageSlider" class="row row--relative">
      
      <!-- START PRODUCT ROW -->
      <?php include 'sliders/product-row.php'; ?>
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

</div>

<?php get_footer(); ?>