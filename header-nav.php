<div class="header-nav">

        <div class="header-nav__switch-box">
          <div class="header-nav__switch-btn">Departments</div>
          <div class="header-nav__switch-btn">Brands</div>
          <div class="header-nav__switch-btn">Other</div>
        </div>

        <!-- START BRANDS DROP BOX -->
        <!-- ADD 'header-parts/header-nav-brands.php' HERE -->
        <!-- END BRANDS DROP BOX -->

        <!-- START DEPARTMENT DROP BOX -->
        <div class="header-nav__drop-box">
          <div id="header-nav-close"></div>

            <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'departmentsHeaderMenu',
              ));
            ?>
          
        </div>
        <!-- END DEPARTMENT DROP BOX -->

        <!-- START OTHER DROP BOX -->
        <!-- ADD 'header-parts/header-nav-other.php' HERE -->
        <!-- <div class="header-nav__drop-box">
          <div id="header-nav-close"></div>

          
            <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'otherHeaderMenu',
              ));
            ?>
          
          
        </div> -->
        <!-- END OTHER DROP BOX -->
                                          
      </div>