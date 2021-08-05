<!-- START CARD -->
<div class="product-card">

<!-- START CARD HEADER -->
<div class="product-card__header">
  <a href="<?php the_permalink(); ?>" class="product-card__header-link "><?php the_field('post_short_name') ?></a>
  <p class="product-card__header-brand">By: <?php the_field('post_brand') ?></p>
</div>
<!-- END CARD HEADER -->

<!-- START CARD BODY -->
<div class="product-card__body">

  <div class="product-card__thumb-box">

    <!-- START WORDPRESS ACF IMAGE ARRAY QUERY -->
    <?php 
    $postCardImage = get_field('post_full_img');
    if( !empty( $postCardImage ) ): ?>
        <img class="product-card__thumb" src="<?php echo esc_url($postCardImage['url']); ?>" alt="<?php echo esc_attr($postCardImage['alt']); ?>" />
    <?php endif; ?>
    <!-- END WORDPRESS ACF IMAGE ARRAY QUERY -->
  

  </div>  

  <p class="product-card__price">$ <?php the_field('post_price'); ?></p>
  <a href="<?php the_permalink(); ?>" class="product-card__details-link U-center-flex">view details</a>
</div>
<!-- END CARD BODY -->

</div>
<!-- END CARD -->