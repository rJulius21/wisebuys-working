<?php get_header(); ?>

  <div class="front-page">

    <div class="hero">
      <h1 class="hero__heading">WisebuysUSA Banner</h1>
      <p class="hero__text">
        We show you the best products, made right here in the USA, that are available on the most popular shopping platforms
      </p>
      <p class="hero__text">Shop wisely friends</p>
    </div>

    <div class="row">
      <?php
          while(have_posts()) {
            the_post(); 
        ?>
  
        <h6> <?php the_title(); ?> </h6>
  
      <?php } echo paginate_links(); ?>
    </div>

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

  </div>



<?php get_footer(); ?>