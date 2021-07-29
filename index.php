


<?php get_header(); ?>

<!-- START CONTENT WRAPPER -->
<div class="content-wrapper">

  <!-- START CONSTRUCTION -->
  <div class="construction">

    <img src="<?php echo get_theme_file_uri('/img/hat-print-202-151-85.png'); ?>" alt="" class="construction__bg-img">

    <p class="construction__heading"> Something went wrong!!! </p>

      <p class="construction__message">
        The page you're looking for doesn't exist, sorry for the inconvenience!
      </p>

      <a href="<?php echo site_url('/report-a-problem'); ?>" class="construction__message">Report this error</a>

  </div>
  <!-- END CONSTRUCTION -->

</div>
<!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>