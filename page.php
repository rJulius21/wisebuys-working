<?php get_header(); ?>

  <div class="box">

    <h6>page</h6>

    <?php
      while(have_posts()) {
        the_post(); 
    ?>

    <h6> <?php the_title(); ?> </h6>

    <?php } echo paginate_links(); ?>

  </div>

<?php get_footer(); ?>