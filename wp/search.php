<?php
    get_header();
?>
    <div class="container"><?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>

    <div class="container">
  <section class="cards">
      <div class="cards__container cards__container--catalog">
      <?php
          // $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'category_name'  => 'Card',
            'posts_per_page' => 6,
            'paged' => $paged
          );
          // $wp_query = new WP_Query( $args );
          if(have_posts()) {
            while(have_posts()) {
              the_post();

              // vars
              $card_img = get_field('card-img');
              $card_title = get_field('card-title');
              $card_text = get_field('card-text');
              $card_format = get_field('card-format');
              $card_link = get_field('card-link');

              // Tags
              $post_tags = get_the_tags();
              
        ?>
        <div class="cards__card cards__card--catalog">
          <div class="cards__img"><img src="<?php echo $card_img; ?>" alt="card img"/></div>
          <div class="cards__body">
            <h4 class="cards__title"><?php echo $card_title; ?></h4>
            <p class="cards__text"><?php echo $card_text; ?></p>
            <p class="cards__format"><?php echo $card_format?></p><a class="button button--download" href="<?php echo $card_link; ?>">Скачать архив</a>
          </div>
          <div class="cards__footer">
            <?php if($post_tags) {
                    foreach($post_tags as $tag) {
                  ?><a class="cards__badge" href="<?php echo esc_url(home_url('/')); ?>"><?php echo $tag->name . '';?></a>
            <?php
                }
              }
            ?>
          </div>
        </div>
        <?php 
            }
          } else {
        ?>
            <div class="container">
            <section class="cards">
                <div class="cards__container cards__container--catalog cards__container--not-found">
                    <p class="not-found__text">По вашему запросу ничего не найдено</p>
                    <div class="cards__card cards__card--catalog">
                      <div class="cards__img"><img src="<?php bloginfo('stylesheet_directory')?>./img/question-sign.jpg" alt="card img"/></div>
                      <div class="cards__body">
                        <h4 class="cards__title">Не найдено</h4>
                        <p class="cards__text">К сожалению, мы не нашли матеариалов по Вашему запросу</p>
                        <p class="cards__format"><?php echo $card_format?></p><a class="button button--download button--disabled" href="<?php echo esc_url(home_url('/')); ?>">Перейти на главную</a>
                      </div>
                      <div class="cards__footer"><a class="cards__badge" href="#">Не найдено</a><a class="cards__badge" href="#">Баннер</a></div>
                </div>
            </div>
            </div>
          <?php
          }
        ?>
        </div>
      </div>
            <div class="container container--breadcrumb">
              <?php wp_pagenavi(); ?>
            </div>
<?php
get_footer();
?>