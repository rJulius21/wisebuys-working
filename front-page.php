<?php get_header(); ?>

  <!-- START FRONT-PAGE -->
  <div class="front-page">

    <!-- START HERO -->
    <div class="hero">
      <!-- <img src="<?php echo get_theme_file_uri('/img/hat-print-202-151-85.png'); ?>" alt="" class="hero__bg-desktop"> -->
      <img src="<?php echo get_theme_file_uri('/img/wb_hero-desktop.png'); ?>" alt="" class="hero__banner-img">
      <div class="hero__text-box">
        <p class="hero__sub-heading">Shop wisely friends</p>
        <p class="hero__text">
          We show you the best products, made right here in the USA, that are available on the most popular shopping platforms
        </p>
      </div>
    </div>
    <!-- END HERO -->

    <!-- START MENUS ROW -->
    <div class="row">

      <!-- START BRANDS CARD -->
      <div class="menu-card">
        <div class="menu-card__header">
          <a href="<?php echo site_url('/company'); ?>" class="menu-card__header-link U-center-flex">top brands</a>
        </div>
        <div class="menu-card__content">

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/oakley'); ?>">oakley</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/leatherman'); ?>">leatherman</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/shinola'); ?>">shinola</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/american-optical'); ?>">american optical</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/serta'); ?>">serta</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/trayvax'); ?>">trayvax</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/red-wing-shoes'); ?>">red wing shoes</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/lodge-cookware'); ?>">lodge cookware</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/zippo'); ?>">zippo</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/sunbrite-tv'); ?>">sunbrite TV</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/libman'); ?>">libman</a>
          </div>

          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/company/yankee-candle'); ?>">yankee candle</a>
          </div>

        </div>
      </div>
      <!-- END BRANDS CARD -->

      <!-- START CATAGORIES CARD -->
      <div class="menu-card">
        <div class="menu-card__header"><a href="<?php echo site_url('/all-departments'); ?>" class="menu-card__header-link U-center-flex">popular categories</a></div>
        <div class="menu-card__content">
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/cleaning-products'); ?>">cleaning products</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/footwear'); ?>">footwear</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/sunglasses'); ?>">sunglasses</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/everyday-carry'); ?>">everyday carry</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/tools'); ?>">tools</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/home/home-essentials'); ?>">home essentials</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/recreation/outdoors'); ?>">outdoors</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/appliances'); ?>">appliances</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/home/kitchen/cookware'); ?>">cookware</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/home/kids-clothing'); ?>">kid's clothing</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/tools/knives'); ?>">women's clothing</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/clothing'); ?>">men's clothing</a>
          </div>
          
        </div>
      </div>
      <!-- END DEPARTMENTS CARD -->

    </div>
    <!-- END MENUS ROW -->

    <!-- START ROW -->
    <div class="row">
      
      <!-- START PRODUCT ROW -->
      <!-- INCLUDE product-row.php WHEN CONSTRUCTION FINISHED -->
      <!-- END PRODUCT ROW -->

    </div>
    <!-- END ROW -->

  </div>
  <!-- END FRONT-PAGE -->

<?php get_footer(); ?>