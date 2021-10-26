<?php get_header(); ?>

  <!-- START FRONT-PAGE -->
  <div class="front-page">
    <img src="<?php echo get_theme_file_uri('/img/wb-banner_desktop.png'); ?>" alt="" class="front-page__banner">
    <img src="<?php echo get_theme_file_uri('/img/wb-banner_whd.png'); ?>" alt="" class="front-page__banner-whd">

    <!-- START HERO -->
    <?php include 'php-components/hero.php';?>
    <!-- END HERO -->
    
    <!-- START MENUS ROW -->
    <div class="row">

      <!-- START BRANDS CARD -->
      <?php include 'php-components/brands.php';?>
      <!-- END BRANDS CARD -->

      <!-- START CATAGORIES CARD -->
      <?php include 'php-components/categories.php';?>
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