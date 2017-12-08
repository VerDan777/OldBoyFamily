<?php
/*
    Template Name: Stickers Page
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
            'category_name'=> 'stickers',
            'posts_per_page' => 6,
            'paged' => $paged

          );
            query_posts($args);

            if(have_posts()) {
              while(have_posts()) {
                the_post();

                // vars
                $card_img = get_field('card-img');
                $card_title = get_field('card-title');
                $card_text = get_field('card-text');
                $card_format = get_field('card-format');
                $card_link = get_field('card-link');
                
                // links
                $get_cat        = get_the_category($id );
                $first_cat      = $get_cat[2];
                $category_name  = $first_cat->cat_name;
                $category_link  = get_category_link( $first_cat->cat_ID );
          ?>
          <div class="cards__card cards__card--catalog">
            <div class="cards__img"><img src="<?php echo $card_img; ?>" alt="card img"/></div>
            <div class="cards__body">
              <h4 class="cards__title"><?php echo $card_title; ?></h4>
              <p class="cards__text"><?php echo $card_text; ?></p>
              <p class="cards__format">Формат:<?php echo $card_format; ?></p><a class="button button--download" href="<?php echo $card_link; ?>">Скачать архив</a>
            </div>
            <div class="cards__footer"><a class="cards__badge" href="<?php echo esc_url($category_link); ?>"><?php categories(); ?></a></div>
          </div>
          <?php
              }
            }
          ?>
          </div>
        </div>
        <div class="container">
          <?php wp_pagenavi(); ?>
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