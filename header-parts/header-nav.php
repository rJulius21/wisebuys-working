<div class="header-nav">

        <div class="header-nav__switch-box">
          <div id="openBtnCat" class="header-nav__switch-btn">Departments</div>
          <div id="openBtnCom" class="header-nav__switch-btn">Brands</div>
          <div id="openBtnOth" class="header-nav__switch-btn">Other</div>
        </div>

        <!-- START CATEGORIES DROP BOX -->
        <div class="header-drop-box" id="dropboxCat">
          <div class="header-drop-box-close" id="closeBtnCat"></div>

            <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'categoriesHeaderMenu',
              ));
            ?>
          
        </div>
        <!-- END CATEGORIES DROP BOX -->


        <!-- START BRANDS DROP BOX -->
        <div class="header-drop-box" id="dropboxCom">
          <div  id="closeBtnCom" class="header-drop-box-close" ></div>

          <!-- START BRAND BOX -->
          <?php
            $headerCompanyQuery = new WP_Query(array(
              'post_type' => 'company',
              'posts_per_page' => 100,
            ));
            while($headerCompanyQuery->have_posts()) {
              $headerCompanyQuery->the_post(); 
          ?>
            <a  href="<?php the_permalink(); ?>" class="company-link">
            <div class="company-link__logo-box">
              <img src="<?php the_field('company_logo'); ?>" alt="" class="company-link__logo">
            </div>
              <p class="company-link__label"><?php the_title(); ?></p>
            <a>

          <?php } wp_reset_postdata(); ?>
          <!-- END BRAND BOX -->
          
        </div>
        <!-- END BRANDS DROP BOX -->

        
        <!-- START OTHER DROP BOX -->
        <!-- ADD 'header-parts/header-nav-other.php' HERE -->
        <div class="header-drop-box" id="dropboxOth" >
          <div id="closeBtnOth" class="header-drop-box-close"></div>

          
            <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'otherHeaderMenu',
              ));
            ?>
          
          
        </div>
        <!-- END OTHER DROP BOX -->
                                          
      </div>