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
      <div class="header-nav">

        <div class="header-nav__switch-box">
          <div class="header-nav__switch-btn">Departments</div>
          <div class="header-nav__switch-btn">Brands</div>
          <div class="header-nav__switch-btn">Other</div>
        </div>

        <!-- START NAV DROP BOX -->
        <div class="header-nav__drop-box">
          <div id="header-nav-close"></div>
          
          <div id="headerDepartmentsMenu" class="header-nav__link-list">
            <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'departmentHeaderMenu'
              ));
            ?>
          </div>

          <div id="headerBrandsMenu" class="header-nav__link-list">
            <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'brandHeaderMenu'
              ));
            ?>
          </div>

          <div id="headerOtherMenu" class="header-nav__link-list">
            <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'otherHeaderMenu'
              ));
            ?>
          </div>
          
        </div>
        <!-- END NAV DROP BOX -->
                                          
      </div>
      <!-- END HEADER NAV -->

      </header>
      <!-- END HEADER -->
