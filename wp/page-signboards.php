<?php
/*
    Template Name: Signboards Page
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
          $args = array(
            'category_name'=> 'Signboards'
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
        <?php the_posts_pagination(); ?>
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