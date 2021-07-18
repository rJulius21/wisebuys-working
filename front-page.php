<?php get_header(); ?>

  <div class="construction">

    <img src="<?php echo get_theme_file_uri('img/toolbox-watermark.png'); ?>" alt="" class="construction__watermark">

    <div class="construction__banner">
      <img src="<?php echo get_theme_file_uri('/img/wb-banner-mobile.png') ?>" alt="" class="construction__logo-mobile">
      <p class="construction__slogan">
        We are here to show you great American products that are available on the most accessible online marketplaces 
        <br>
        <span>Shop wisely friends</span> 
      </p>
      <img src="<?php echo get_theme_file_uri('/img/wb-banner-desk.png') ?>" alt="" class="construction__logo-desk">
    </div>

      <div class="construction__message"> 
        wiseBuysUSA.com is currently under constuction, for updates and to see great American made products, follow us on facebook!
        <div class="construction__social-box">
          <a target="_blank" href="https://www.facebook.com/WiseBuys-USA-107026554970992" class="construction__social-link">visit our faceBook!</a>
        </div>
      </div>


      <!-- <?php
        while(have_posts()) {
          the_post(); 
      ?>

      <h6> <?php the_title(); ?> </h6>

      <?php } echo paginate_links(); ?> -->

  </div>

<?php get_footer(); ?>