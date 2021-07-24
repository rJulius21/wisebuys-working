<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="/img/wb-black-hat-favicon.jpg"/>
    <?php wp_head(); ?>
  </head>
  <body class="body" >
    <div class="wrapper">
      
      <!-- START HEADER -->
      <header class="header">

      <!-- START HEADER BRANDING -->
      <div class="header-brand">
        <div class="header-brand__logo-box">
          <img src="<?php echo get_theme_file_uri('img/wb-black-hat-favicon.jpg')?>" alt="" class="header-brand__logo">
        </div>

        <a href="<?php echo site_url(); ?>" class="header-brand__heading-link"><h1 class="header-brand__heading">WisebuysUSA.com</h1></a>
      </div>
      <!-- START HEADER BRANDING -->

      <!-- START SEARCH -->
      <div class="header-search">
        <form action="#" class="header-search__form">
          <input type="text" class="header-search__input" placeholder="Search...">
          <button class="header-search__submit">
            <img class="header-search__icon" src="<?php echo get_theme_file_uri('img/png-icons/search.png')?>" alt="search-icon">
          </button>
        </form>
      </div>
      <!-- END SEARCH -->

      <!-- START HEADER NAV -->
      <?php include 'header-parts/header-nav.php'; ?>
      <!-- END HEADER NAV -->

      </header>
      <!-- END HEADER -->
