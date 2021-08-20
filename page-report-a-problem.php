

<?php get_header(); ?>

<!-- START CONTENT WRAPPER -->
<div class="content-wrapper">

  <!-- START PAGE -->
  <div class="page">
    <?php
      while(have_posts()){
        the_post(); ?>

          <div class="problem">
            <?php the_content(); ?>
          </div>

      <?php } ?>

  </div>
  <!-- END PAGE -->

</div>
<!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>
