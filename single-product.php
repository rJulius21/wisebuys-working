

<?php get_header(); ?>

<div class="single-product__spacer"></div>
<div class="single-product">

  <?php
    while(have_posts()){
      the_post(); 
  ?>

  <div class="single-product__display">
    <div class="single-product__img-box">
      <img src="<?php the_field('full_image'); ?>" alt="" class="single-product__img">
    </div>
  </div>

  <div class="single-product__info-box">
    <h2 class="single-product__heading"><?php the_title(); ?></h2>
    <p class="single-product__description"><?php the_field('description'); ?></p>
    <div class="single-product__buy-box">
      <p class="single-product__price">$<?php the_field('price'); ?></p>
      <a href="<?php the_field('affiliate_link_text'); ?>" class="single-product__buy-link" target="_blank">See on Amazon</a>
    </div>
  </div>

  <?php } wp_reset_postdata(); ?>



</div>

<?php get_footer(); ?>