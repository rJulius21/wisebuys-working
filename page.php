

<?php get_header(); ?>

<!-- START CONTENT WRAPPER -->
<div class="content-wrapper">

  <!-- START CONSTRUCTION -->
  <div class="construction">

    <img src="<?php echo get_theme_file_uri('/img/hat-print-202-151-85.png'); ?>" alt="" class="construction__bg-img">

    <!-- START DYNAMIC INPUT -->
    <?php
    while(have_posts()) {
      the_post(); 
    ?>

      <p class="construction__heading"> <?php the_title(); ?> </p>

      <p class="construction__message">
        This page is coming soon, sorry for the inconvenience!
      </p>

    <?php } wp_reset_postdata(); ?>
    <!-- END DYNAMIC INPUT -->

  </div>
  <!-- END CONSTRUCTION -->

</div>
<!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>