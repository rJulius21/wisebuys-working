

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
      <img src="<?php the_field('large_logo'); ?>" alt="" class="single-company__img">
    </div>
    <p class="single-company__location"><span><?php the_title(); ?> </span> was founded in <?php the_field('location'); ?> in 19xx</p>
  </div>


  <div class="single-company__info-box">
    <p class="single-company__summary"><?php the_field('summary'); ?></p>
    <a href="<?php the_field('company_link'); ?>" class="single-company__link" target="_blank"><?php the_title(); ?> website</a>
  </div>

  <?php } wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>