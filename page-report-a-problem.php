

<?php get_header(); ?>

<!-- START CONTENT WRAPPER -->
<div class="content-wrapper">

  <!-- START PAGE -->
  <div class="page">

      <div class="problem">
        <form action="#" class="problem__form">
          <h3 class="problem__form-heading">Report problem on <span>&nbsp;WiseBuysUSA.com</span></h3>
          <div class="problem__form-group problem__form-group--text">
            <label for="" class="problem__label"> Full name or URL of item</label>
            <input type="text" class="problem__input">
          </div>
          <div class="problem__form-group">
            <label for="" class="problem__label">This product is no longer available</label>
            <input type="checkbox" class="problem__input">
          </div>
          <div class="problem__form-group">
            <label for="" class="problem__label">The price has changed on this item</label>
            <input type="checkbox" class="problem__input">
          </div>
          <div class="problem__form-group">
            <label for="" class="problem__label">This item is not made in the USA</label>
            <input type="checkbox" class="problem__input">
          </div>
          <input type="textarea" class="problem__textarea" placeholder="Describe another issue...">
          <input type="submit" class="problem__submit">
        </form>
      </div>

  </div>
  <!-- END PAGE -->

</div>
<!-- END CONTENT WRAPPER -->

<?php get_footer(); ?>