

<?php get_header(); ?>

<div class="single-company__spacer"></div>
<div class="single-company">

  <?php
    while(have_posts()){
      the_post();

    
  ?>

  <div class="single-company__display">
    <h2 class="single-company__heading"><?php the_title(); ?></h2>
    <div class="single-company__img-box">
      <img src="<?php the_field('company_img'); ?>" alt="" class="single-company__img">
    </div>
    <p class="single-company__location"><span><?php the_title(); ?> </span> was founded in <?php the_field('company_location'); ?> in <?php the_field('company_est'); ?></p>
  </div>


  <div class="single-company__info-box">
    <p class="single-company__summary"><?php the_field('company_summary'); ?></p>
    <a href="https://wisebuysusa.com/?s=<?php the_title(); ?>" class="single-company__link U-center-flex">view items</a>
    <a href="<?php the_field('company_website'); ?>" class="single-company__link" target="_blank"><?php the_title(); ?> website</a>
    <!-- work -->
    <input type="checkbox" name="productDisclaimer" id="productDisclaimer">
      <label for="productDisclaimer" class="single-product__disclaimer-label">What's an affiliate link?</label>
      <p class="single-product__disclaimer-text">
        Affiliate links cost you absolutely nothing to use!
        <br> <br>
        We use affiliate links on WisebuysUSA.com to earn a small commison on the quality American products that we show you on the site. Without these links, this site would not be able to operate, thanks for visiting!
      </p>
    <!-- work -->
  </div>

  <?php } wp_reset_postdata(); ?>
</div>

<!-- START ROW -->
<div id="frontPageSlider" class="row row--relative">
      
      <!-- START PRODUCT ROW -->
      <?php include 'sliders/product-row.php'; ?>
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

<?php get_footer(); ?>