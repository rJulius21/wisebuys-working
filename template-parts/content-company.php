<!-- START COMPANY CARD -->
<div class="company-card">
  <div class="company-card__header">
    <a href="<?php the_permalink(); ?>" class="company-card__header-link "><?php the_title(); ?></a>
  </div>
  <div class="company-card__body">
    <div class="company-card__thumb-container">
      <img src="<?php the_field('company_logo'); ?>" alt="company-logo" class="company-card__thumb">
  </div>
    <a href="https://wisebuysusa.com/?s=<?php the_title(); ?>" class="company-card__btn-link U-center-flex">view items</a>
    <a href="<?php the_permalink(); ?>" class="company-card__btn-link U-center-flex">company profile</a>
  </div>
</div>
<!-- END COMPANY CARD -->