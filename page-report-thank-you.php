<?php get_header(); ?>

<!-- START PAGE -->
<div class="page">

  <!-- START THANK YOU -->
  <div class="thank-you">
    <h2 class="thank-you__heading">Thanks!</h2>
    <p class="thank-you__text">
      Thanks for helping us keep <a href="<?php echo site_url(); ?>">WiseBuysUSA.com</a> accurate and up-to-date!
    </p>
  </div>
  <!-- END THANK YOU -->

  <!-- START SLIDER -->
  <div class="row row--relative" id="frontPageSlider">
    <?php include 'sliders/product-row.php';?>
  </div>
  <!-- END SLIDER -->

  <!-- START SLIDER -->
  <div class="row row--relative" id="companySlider">
    <?php include 'sliders/company-row.php';?>
  </div>
  <!-- END SLIDER -->

</div>
<!-- END PAGE -->

<?php get_footer(); ?>
