
<!-- START FOOTER -->
<footer>
  <div class="footer">

    <!-- START MENU -->
    <div class="footer__links-section">
      <div class="footer__links footer__links--left">

        <!-- <?php
        // This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
        wp_nav_menu(array(
          'theme_location' => 'footerMenu'
        ));
        ?> -->
        
        <ul class="footer__links-list">
          <li class="footer__link-li"><a class="footer__link U-link-text" href="<?php echo site_url('/all-departments'); ?>">View Departments</a></li>
          <li class="footer__link-li"><a class="footer__link U-link-text" href="<?php echo site_url('/company'); ?>">View Brands</a></li>
          <li class="footer__link-li"><a class="footer__link U-link-text" href="<?php echo site_url('/about-wisebuys-usa'); ?>">About WisebuysUSA</a></li>
        </ul>
      </div>

      <div class="footer__links footer__links--right">
        <ul class="footer__links-list">
          <li class="footer__link-li"><a class="footer__link U-link-text" a href="<?php echo site_url('/report-a-problem'); ?>">Report Site Issue</a></li>
          <li class="footer__link-li"><a class="footer__link U-link-text" a href="<?php echo site_url('/report-a-problem'); ?>">Report Non-American product</a></li>
          <li class="footer__link-li"><a class="footer__link U-link-text" a href="<?php echo site_url('/report-a-problem'); ?>">Report Product not Available</a></li>
        </ul>
      </div>
    </div>
    <!-- END MENU -->

    <!-- START LOGOS -->
    <div class="footer__logos">
      <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
      <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
      <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
      <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
    </div>
    <div class="footer__logos">
      <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
      <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
      <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
      <div class="footer__logo-box"><img src="" alt="" class="footer__logo"></div>
    </div>
    <!-- END LOGOS -->
      
    <a class="footer__copy" href="<?php site_url(); ?>">WisebuysUSA.com &copy; 2021</a>

  </div>
</footer>
    <!-- END FOOTER -->

  </div>

  <?php wp_footer(); ?>
</body>

</html>