<?php get_header(); ?>

  <!-- START FRONT-PAGE -->
  <div class="front-page">

  <!-- START HERO -->
  <div class="fp-hero">
    <!-- welcome to wisebuysusa section -->
    <div class="fp-hero__panel fp-hero__panel--left">
      <div class="fp-hero__banner-box">
        <div class="fp-hero__banner">WiseBuys USA</div>
      </div>
      <div class="fp-hero__hook-box">
        <div class="fp-hero__hook"> Wisebuys USA is here to show you the best products, made right here in the USA, that are available where you already shop</div>
      </div>
      <div class="fp-hero__circle-box">
        <img src="<?php echo get_theme_file_uri('/img/wb_logo-gold-blue.png'); ?>" class="fp-hero__circle">
      </div>
    </div>

    <div class="fp-hero__panel fp-hero__panel--right">

    <!-- 
      <div class="fp-hero__composition">
        search bar goes in this section
        <div class="fp-hero__composition-img-box fp-hero__composition-img-box--1">
          <img src="" class="fp-hero__composition-img fp-hero__composition-img--1">
        </div>
        <div class="fp-hero__composition-img-box fp-hero__composition-img-box--2">
          <img src="" class="fp-hero__composition-img fp-hero__composition-img--2">
        </div>
      </div>
     -->

     <div class="fp-hero__search-box">
       <div class="fp-hero__search-heading">search wisebuysusa.com</div>
       <form class="fp-hero__search-form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
         <input type="text" type="search" name="s" class="fp-hero__search-bar">
         <input type="submit" class="fp-hero__search-btn" value="search">
       </form>
     </div>

      <!-- START HERO NAV -->
      <div class="fp-hero__nav-box">
        <div class="fp-hero__nav-heading">How do you prefer to browse?</div>
        <nav class="fp-hero__nav">

          <a href="#fp-featured" class="fp-hero__nav-item">
            <div class="fp-hero__nav-item-img-box">
              <img src="<?php echo get_theme_file_uri('img/categories/shield-star.png') ?>" alt="" class="fp-hero__nav-item-img">
            </div>
            <div class="fp-hero__nav-item-label">featured</div>
          </a>

          <a href="#fp-brands" class="fp-hero__nav-item">
            <div class="fp-hero__nav-item-img-box">
              <img src="<?php echo get_theme_file_uri('img/categories/tm.png') ?>" alt="" class="fp-hero__nav-item-img">
            </div>
            <div class="fp-hero__nav-item-label">brands</div>
          </a>

          <a href="#fp-categories" class="fp-hero__nav-item">
            <div class="fp-hero__nav-item-img-box">
              <img src="<?php echo get_theme_file_uri('img/categories/list-heart.png') ?>" alt="" class="fp-hero__nav-item-img">
            </div>
            <div class="fp-hero__nav-item-label">categories</div>
          </a>

          <a href="#fp-platforms" class="fp-hero__nav-item">
            <div class="fp-hero__nav-item-img-box">
              <img src="<?php echo get_theme_file_uri('img/categories/cart.png') ?>" alt="" class="fp-hero__nav-item-img">
            </div>
            <div class="fp-hero__nav-item-label">platforms</div>
          </a>

        </nav>
      </div>
      <!-- END HERO NAV -->
      
    </div>
  </div>
  <!-- END HERO -->

  <!-- START FEATURED -->
  <div id="fp-featured" class="fp-section">
    <div class="fp-section__header">
      <h2 class="fp-section__title">shop featured selections</h2>
    </div>

    <!-- START BODY -->
    <div class="fp-section__body">
      <div class="fp-featured">
        <div class="fp-featured__grid">

          <div class="fp-featured__item">
            <a href="#" class="fp-featured__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/new.png') ?>" alt="" class="fp-featured__img">
            </a>
            <a href="#" class="fp-featured__label-box">
              <span></span>
              <div class="fp-featured__label">new items</div>
            </a>
          </div>

          <div class="fp-featured__item">
            <a href="#" class="fp-featured__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/under20.png') ?>" alt="" class="fp-featured__img">
            </a>
            <a href="#" class="fp-featured__label-box">
              <span></span>
              <div class="fp-featured__label">items under $20</div>
            </a>
          </div>

          <div class="fp-featured__item">
            <a href="#" class="fp-featured__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/under50.png') ?>" alt="" class="fp-featured__img">
            </a>
            <a href="#" class="fp-featured__label-box">
              <span></span>
              <div class="fp-featured__label">items under $50</div>
            </a>
          </div>

          <div class="fp-featured__item">
            <a href="#" class="fp-featured__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/winter.png') ?>" alt="" class="fp-featured__img">
            </a>
            <a href="#" class="fp-featured__label-box">
              <span></span>
              <div class="fp-featured__label">winter gear</div>
            </a>
          </div>

          <div class="fp-featured__item">
            <a href="#" class="fp-featured__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/popular.png') ?>" alt="" class="fp-featured__img">
            </a>
            <a href="#" class="fp-featured__label-box">
              <span></span>
              <div class="fp-featured__label">popular items</div>
            </a>
          </div>

        </div>
      </div>
    </div>
    <!-- END BODY -->

  </div>
  <!-- END FEATURED -->

  <!-- START BRANDS -->
  <div id="fp-brands" class="fp-section">
    <div class="fp-section__header">
      <h2 class="fp-section__title">shop by brand</h2>
    </div>

    <!-- START BODY -->
    <div class="fp-section__body">
      <div class="fp-brands">
        <div class="fp-brands__grid">

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/oakley'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/oakley-logo.jpeg')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>oakley</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/oakley'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">oakley</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/shinola'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/shinola-logo-png.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>shinola</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/shinola'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">shinola</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/red-wing-shoes'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/redwing-logo-png.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>red wing shoes</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/red-wing-shoes'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">red wing shoes</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/leatherman'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/leatherman-logo-png.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>leatherman</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/leatherman'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">leatherman</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/trayvax'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/trayvax-logo-png.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>trayvax</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/trayvax'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">trayvax</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/serta'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/serta-logo-png.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>serta</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/serta'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">serta</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/lodge-cast-iron'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/lodge-logo.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>lodge cast iron</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/lodge-cast-iron'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">lodge cast iron</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/american-optical'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/americanoptical-logo.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>american optical</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/american-optical'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">american optical</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/yankee-candle'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/yankeecandle-logo-png.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>yankee candle</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/yankee-candle'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">yankee candle</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

          <div class="fp-brands__item">
            <a href="<?php echo site_url('/company/libman'); ?>" class="fp-brands__img-box">
              <img src="<?php echo get_theme_file_uri('img/brand-logos/libman-logo-png.png')?>" alt="" class="fp-brands__img">
              <div class="fp-brands__img-cap">
                <br>
                <span>libman</span>
              </div>
            </a>
            <div class="fp-brands__label-viewport">
              <a href="<?php echo site_url('/company/libman'); ?>" class="fp-brands__label-box">
                <div class="fp-brands__label-brand">libman</div>
                <div class="fp-brands__label-cta">
                  <p>Show me products!</p>
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- END BODY -->

    <a href="<?php echo site_url('/company'); ?>" class="fp-section__see-all">see all brands</a>

  </div>
  <!-- END BRANDS -->

  <!-- START CATEGORIES -->
  <div id="fp-categories" class="fp-section">
    <div class="fp-section__header">
      <h2 class="fp-section__title">shop by category</h2>
    </div>

    <!-- START BODY -->
    <div class="fp-section__body">
      <div class="fp-categories">
        <div class="fp-categories__grid">

          <div  class="fp-categories__item">
            <a href="<?php echo site_url('/category/tools'); ?>" class="fp-categories__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/wrench-screwdriver.png') ?>" alt="" class="fp-categories__img">
              <div class="fp-categories__img-overlay"></div>
            </a>
            <div class="fp-categories__label-viewport">
              <a href="<?php echo site_url('/category/tools'); ?>" class="fp-categories__label-box">
                <div class="fp-categories__label">tools</div>
                <div class="fp-categories__cta">browse for tools</div>
              </a>
            </div>
          </div>

          <div  class="fp-categories__item">
            <a href="<?php echo site_url('/category/wallets'); ?>" class="fp-categories__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/wallet.png') ?>" alt="" class="fp-categories__img">
              <div class="fp-categories__img-overlay"></div>
            </a>
            <div class="fp-categories__label-viewport">
              <a href="<?php echo site_url('/category/wallets'); ?>" class="fp-categories__label-box">
                <div class="fp-categories__label">wallets</div>
                <div class="fp-categories__cta">browse for wallets</div>
              </a>
            </div>
          </div>

          <div class="fp-categories__item">
            <a href="<?php echo site_url('/category/sunglasses'); ?>" class="fp-categories__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/sunglasses.png') ?>" alt="" class="fp-categories__img">
              <div class="fp-categories__img-overlay"></div>
            </a>
            <div class="fp-categories__label-viewport">
              <a href="<?php echo site_url('/category/sunglasses'); ?>" class="fp-categories__label-box">
                <div class="fp-categories__label">sunglasses</div>
                <div class="fp-categories__cta">browse for sunglasses</div>
              </a>
            </div>
          </div>

          <div class="fp-categories__item">
            <a href="<?php echo site_url('/category/home/decor'); ?>" class="fp-categories__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/couch.png') ?>" alt="" class="fp-categories__img">
              <div class="fp-categories__img-overlay"></div>
            </a>
            <div class="fp-categories__label-viewport">
              <a href="<?php echo site_url('/category/home/decor'); ?>" class="fp-categories__label-box">
                <div class="fp-categories__label">home decor</div>
                <div class="fp-categories__cta">browse for home decor</div>
              </a>
            </div>
          </div>

          <div class="fp-categories__item">
            <a href="<?php echo site_url('/category/footwear'); ?>" class="fp-categories__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/shoe.png') ?>" alt="" class="fp-categories__img">
              <div class="fp-categories__img-overlay"></div>
            </a>
            <div class="fp-categories__label-viewport">
              <a href="<?php echo site_url('/category/footwear'); ?>" class="fp-categories__label-box">
                <div class="fp-categories__label">footwear</div>
                <div class="fp-categories__cta">browse for footwear</div>
              </a>
            </div>
          </div>

          <div  class="fp-categories__item">
            <a href="<?php echo site_url('/category/everyday-carry'); ?>" class="fp-categories__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/pocket-knife.png') ?>" alt="" class="fp-categories__img">
              <div class="fp-categories__img-overlay"></div>
            </a>
            <div class="fp-categories__label-viewport">
              <a href="<?php echo site_url('/category/everyday-carry'); ?>" class="fp-categories__label-box">
                <div class="fp-categories__label">everyday carry</div>
                <div class="fp-categories__cta">browse for everyday carry</div>
              </a>
            </div>
          </div>

          <div  class="fp-categories__item">
            <a href="<?php echo site_url('/category/recreation/outdoors'); ?>" class="fp-categories__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/leaf.png') ?>" alt="" class="fp-categories__img">
              <div class="fp-categories__img-overlay"></div>
            </a>
            <div class="fp-categories__label-viewport">
              <a href="<?php echo site_url('/category/recreation/outdoors'); ?>" class="fp-categories__label-box">
                <div class="fp-categories__label">outdoors</div>
                <div class="fp-categories__cta">browse for outdoors</div>
              </a>
            </div>
          </div>

          <div  class="fp-categories__item">
            <a href="<?php echo site_url('/category/cleaning-products'); ?>" class="fp-categories__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/spray2.png') ?>" alt="" class="fp-categories__img">
              <div class="fp-categories__img-overlay"></div>
            </a>
            <div class="fp-categories__label-viewport">
              <a href="<?php echo site_url('/category/cleaning-products'); ?>" class="fp-categories__label-box">
                <div class="fp-categories__label">cleaning products</div>
                <div class="fp-categories__cta">browse for cleaning products</div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- END BODY -->

    <a href="<?php echo site_url('/all-departments'); ?>" class="fp-section__see-all">see all categories</a>

  </div>
  <!-- END CATEGORIES -->

  <!-- START PLATFORMS -->
  <!-- 
    NEW PLATFORMS TO ADD:
      Ebay
      Walmart
      Target
      Wish
      Best Buy
      Etsy
      Home Depot
      Sears
   -->
   <div id="fp-platforms" class="fp-section">
    <div class="fp-section__header">
      <h2 class="fp-section__title">shop by platform</h2>
    </div>

    <!-- START BODY -->
    <div class="fp-section__body">
      <div class="fp-platforms">
        <div class="fp-platforms__grid">

          <div href="#" class="fp-platforms__item">
            <div class="fp-platforms__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/az-thumb.jpg') ?>" alt="" class="fp-platforms__img">
            </div>
            <a href="#" class="fp-platforms__label-link">amazon</a>
            <a href="#" class="fp-platforms__label-box">
              <div class="fp-platforms__label-description">
                Click to find your favorite products from
              </div>
            </a>
          </div>

          <div href="#" class="fp-platforms__item">
            <div class="fp-platforms__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/ebay-thumb.jpg') ?>" alt="" class="fp-platforms__img">
            </div>
            <a href="#" class="fp-platforms__label-link">ebay</a>
            <a href="#" class="fp-platforms__label-box">
              <div class="fp-platforms__label-description">
                Click to find your favorite products from
              </div>
            </a>
          </div>

          <div href="#" class="fp-platforms__item">
            <div class="fp-platforms__img-box">
              <img src="<?php echo get_theme_file_uri('/img/categories/target-thumb.jpg') ?>" alt="" class="fp-platforms__img">
            </div>
            <a href="#" class="fp-platforms__label-link">target</a>
            <a href="#" class="fp-platforms__label-box">
              <div class="fp-platforms__label-description">
                Click to find your favorite products from
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
    <!-- END BODY -->

    <a href="<?php echo site_url('/platforms'); ?>" class="fp-section__see-all">see all platforms</a>

  </div>
  <!-- END PLATFORMS -->

    

  </div>
  <!-- END FRONT-PAGE -->

<?php get_footer(); ?> 