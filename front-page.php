<?php get_header(); ?>

  <!-- START FRONT-PAGE -->
  <div class="front-page">

    <!-- START MOBILE HERO -->
      <div class="hero-mobile">
        <img src="<?php echo get_theme_file_uri('/img/wb-bg-lightblue-embossed.png'); ?>" alt="" class="hero-mobile__bg">
        <div class="hero-mobile__text-box">
          <p class="hero-mobile__text">
            Wisebuys USA is here to show you the best products, made right here in the USA, that are available on the most popular shopping platforms
          </p>
          <p class="hero-mobile__sub-heading">Shop wisely friends</p>
          <a href="https://wisebuysusa.com/?s=" class="hero-mobile__all-items-link">See what we have!</a>
      </div>
      </div>
    <!-- END MOBILE HERO -->

    <!-- START HERO -->
    <div class="hero">
      <img src="<?php echo get_theme_file_uri('/img/wb-hero-tablet-embossed.png'); ?>" alt="" class="hero__bg-tablet">
      <img src="<?php echo get_theme_file_uri('/img/wb_hero-whd.png'); ?>" alt="" class="hero__banner-img">
      <div class="hero__text-box">
        <p class="hero__sub-heading">Shop wisely friends</p>
        <p class="hero__text">
        Wisebuys USA is here to show you the best products, made right here in the USA, that are available on the most popular shopping platforms
        </p>
        <a href="https://wisebuysusa.com/?s=" class="hero__all-items-link">See what we have!</a>
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
            <a class="menu-card__item-link" href="<?php echo site_url('/company/lodge-cast-iron'); ?>">lodge cast iron</a>
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