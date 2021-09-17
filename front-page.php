<?php get_header(); ?>

  <!-- START FRONT-PAGE -->
  <div class="front-page">
    <img src="<?php echo get_theme_file_uri('/img/wb-banner_desktop.png'); ?>" alt="" class="front-page__banner">
    <img src="<?php echo get_theme_file_uri('/img/wb-banner_whd.png'); ?>" alt="" class="front-page__banner-whd">

    <!-- START MOBILE HERO -->
      <div class="hero-mobile">
        <img src="<?php echo get_theme_file_uri('/img/wb-bg-lightblue-embossed.png'); ?>" alt="" class="hero-mobile__bg">
        <div class="hero-mobile__text-box">
          <p class="hero-mobile__text">
            Wisebuys USA is here to show you the best products, made right here in the USA, that are available where you already shop
          </p>
          <p class="hero-mobile__sub-heading">Shop wisely friends</p>
          <a href="https://wisebuysusa.com/?s=" class="hero-mobile__all-items-link">See what we've found!</a>
      </div>
      </div>
    <!-- END MOBILE HERO -->

    <!-- START HERO -->
    <div class="hero">
      <div class="hero__text-box">
        <p class="hero__sub-heading">Shop wisely friends</p>
        <p class="hero__text">
        Wisebuys USA is here to show you the best products, made right here in the USA, that are available where you already shop
        </p>
        <a href="https://wisebuysusa.com/?s=" class="hero__all-items-link">See what we've found!</a>
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
            <a class="menu-card__item-link" href="<?php echo site_url('/category/home/decor'); ?>">home decor</a>
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
            <a class="menu-card__item-link" href="<?php echo site_url('/category/footwear/boots'); ?>">boots</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/accessories/wallets'); ?>">wallets</a>
          </div>
          <div class="menu-card__item">
            <a class="menu-card__item-link" href="<?php echo site_url('/category/electronics'); ?>">electronics</a>
          </div>
          
        </div>
      </div>
      <!-- END DEPARTMENTS CARD -->

    </div>
    <!-- END MENUS ROW -->

    <!-- START ROW -->
    <div id="frontPageSlider" class="row row--relative">
      <!-- START PRODUCT ROW -->
      <?php include 'sliders/product-row.php'; ?>
      <!-- END PRODUCT ROW -->
    </div>
    <!-- END ROW -->

    <!-- START COMPANY ROW -->
    <div class="row row--relative" id="companySlider">
      <?php include 'sliders/company-row.php';?>
    </div>
    <!-- END COMPANY ROW -->

  </div>
  <!-- END FRONT-PAGE -->

<?php get_footer(); ?>