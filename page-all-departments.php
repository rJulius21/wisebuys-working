

<?php get_header(); ?>

<!-- START CONTENT WRAPPER -->
<div class="page">



    <div class="cat-menu">
    <?php
              //This code tells wordpress to register a menu location here that is managed in the wordpress dashboard
              wp_nav_menu(array(
                'theme_location' => 'categoriesPageMenu',
              ));
            ?>
    </div>


  

</div>
<!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>