<?php
/*
    Template Name: Logo Page
*/
    get_header();
?>
    <div class="container">
     
      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

    </div>
    <div class="container">
      <section class="cards">
        <div class="cards__container cards__container--catalog">
        <?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'category_name'=> 'Logo,Banners',
            'posts_per_page' => 3,
            'paged' => $paged

          );
          $wp_query = new WP_Query( $args );
          
            if(have_posts()) {
              while( $wp_query ->have_posts()) {
                $wp_query ->the_post();

                // vars
                $card_img = get_field('card-img');
                $card_title = get_field('card-title');
                $card_text = get_field('card-text');
                $card_format = get_field('card-format');
                $card_link = get_field('card-link');
          ?>
          <div class="cards__card cards__card--catalog">
            <div class="cards__img"><img src="<?php echo $card_img; ?>" alt="card img"/></div>
            <div class="cards__body">
              <h4 class="cards__title"><?php echo $card_title; ?></h4>
              <p class="cards__text"><?php echo $card_text; ?></p>
              <p class="cards__format"><?php echo $card_format; ?></p><a class="button button--download" href="<?php echo $card_link; ?>">Скачать архив</a>
            </div>
            <div class="cards__footer"><a class="cards__badge" href="#"><?php categories(); ?></a></div>
          </div>
          <?php 
              }
            }
          ?>
          </div>
        </div>
        <div class="container">
        <nav id="<?php echo $html_id; ?>" class="pagination" role="navigation">
          <h3 class="assistive-text"><?php _e( 'Post navigation', 'OldBoy Family' ); ?></h3>
           
        </nav><!-- #<?php echo $html_id; ?> .navigation -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php 
        get_footer();
    ?>
    <script src="scripts.js"></script>
  </body>
</html>