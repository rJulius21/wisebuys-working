        <div class="header-nav__drop-box">
          <div id="header-nav-close"></div>

          <!-- START MENU REGISTERED IN WORDPRESS ADMIN -->
          <!-- <div id="headerDepartmentsMenu" class="header-nav__link-list">
            <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'brandHeaderMenu'
              ));
            ?>
          </div> -->
          <!-- END MENU REGISTERED IN WORDPRESS ADMIN -->

          <!-- START BRAND BOX -->
          <?php
            $headerBrandQuery = new WP_Query(array(
              'post_type' => 'company',
              'posts_per_page' => 20,
            ));
            while($headerBrandQuery->have_posts()) {
              $headerBrandQuery->the_post(); 
          ?>
            <a  href="<?php the_permalink(); ?>" class="header-nav__brand-link">
            <div class="header-nav__brand-logo-box">
              <img src="<?php the_field('small_logo'); ?>" alt="" class="header-nav__brand-logo">
            </div>
              <p class="header-nav__brand-label"><?php the_title(); ?></p>
            <a>

          <?php } wp_reset_postdata(); ?>
          <!-- END BRAND BOX -->
          
        </div>