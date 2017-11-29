<?php
/*
    Template Name: Home Page
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?><?php echo '?v=' . rand(); ?>"/>
    <title>Главная</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="site-header">
      <div class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/img/logo-new.png"/></div>
      <div class="socials"><a class="socials__link" href="https://vk.com/oldboyfamily" target="_blank">
          <svg class="socials__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve" width="40px" height="40px">
            <circle id="vk" fill="#D5A353" cx="56.098" cy="56.098" r="56.098" data-original="#4D76A1" data-old_color="#d5a353"></circle>
            <path id="vk1" fill="#FFFFFF" d="M53.979,80.702h4.403c0,0,1.33-0.146,2.009-0.878   c0.625-0.672,0.605-1.934,0.605-1.934s-0.086-5.908,2.656-6.778c2.703-0.857,6.174,5.71,9.853,8.235   c2.782,1.911,4.896,1.492,4.896,1.492l9.837-0.137c0,0,5.146-0.317,2.706-4.363c-0.2-0.331-1.421-2.993-7.314-8.463   c-6.168-5.725-5.342-4.799,2.088-14.702c4.525-6.031,6.334-9.713,5.769-11.29c-0.539-1.502-3.867-1.105-3.867-1.105l-11.076,0.069   c0,0-0.821-0.112-1.43,0.252c-0.595,0.357-0.978,1.189-0.978,1.189s-1.753,4.667-4.091,8.636c-4.932,8.375-6.904,8.817-7.71,8.297   c-1.875-1.212-1.407-4.869-1.407-7.467c0-8.116,1.231-11.5-2.397-12.376c-1.204-0.291-2.09-0.483-5.169-0.514   c-3.952-0.041-7.297,0.012-9.191,0.94c-1.26,0.617-2.232,1.992-1.64,2.071c0.732,0.098,2.39,0.447,3.269,1.644   c1.135,1.544,1.095,5.012,1.095,5.012s0.652,9.554-1.523,10.741c-1.493,0.814-3.541-0.848-7.938-8.446   c-2.253-3.892-3.954-8.194-3.954-8.194s-0.328-0.804-0.913-1.234c-0.71-0.521-1.702-0.687-1.702-0.687l-10.525,0.069   c0,0-1.58,0.044-2.16,0.731c-0.516,0.611-0.041,1.875-0.041,1.875s8.24,19.278,17.57,28.993   C44.264,81.287,53.979,80.702,53.979,80.702L53.979,80.702z" data-original="#FFFFFF" data-old_color="fill-rule: evenodd clip-rule: evenodd;#FFFFFF"></path>
          </svg></a><a class="socials__link" href="https://chat.whatsapp.com/5hfbmh5ww0H5qUmPmEtNvJ" target="_blank">
          <svg class="socials__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="40px" height="40px">
            <path class="active-path" id="whatsapp" fill="#D5A353" d="M0,58l4.988-14.963C2.457,38.78,1,33.812,1,28.5C1,12.76,13.76,0,29.5,0S58,12.76,58,28.5   S45.24,57,29.5,57c-4.789,0-9.299-1.187-13.26-3.273L0,58z" data-original="#2CB742" data-old_color="#d5a353"></path>
            <path id="whatsapp1" fill="#FFFFFF" d="M47.683,37.985c-1.316-2.487-6.169-5.331-6.169-5.331c-1.098-0.626-2.423-0.696-3.049,0.42   c0,0-1.577,1.891-1.978,2.163c-1.832,1.241-3.529,1.193-5.242-0.52l-3.981-3.981l-3.981-3.981c-1.713-1.713-1.761-3.41-0.52-5.242   c0.272-0.401,2.163-1.978,2.163-1.978c1.116-0.627,1.046-1.951,0.42-3.049c0,0-2.844-4.853-5.331-6.169   c-1.058-0.56-2.357-0.364-3.203,0.482l-1.758,1.758c-5.577,5.577-2.831,11.873,2.746,17.45l5.097,5.097l5.097,5.097   c5.577,5.577,11.873,8.323,17.45,2.746l1.758-1.758C48.048,40.341,48.243,39.042,47.683,37.985z" data-original="#FFFFFF"></path>
          </svg></a><a class="socials__link socials__link--info">
          <svg class="socials__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 23.625 23.625" style="enable-background:new 0 0 23.625 23.625;" xml:space="preserve" width="40px" height="40px">
            <path class="active-path" id="info" d="M11.812,0C5.289,0,0,5.289,0,11.812s5.289,11.813,11.812,11.813s11.813-5.29,11.813-11.813   S18.335,0,11.812,0z M14.271,18.307c-0.608,0.24-1.092,0.422-1.455,0.548c-0.362,0.126-0.783,0.189-1.262,0.189   c-0.736,0-1.309-0.18-1.717-0.539s-0.611-0.814-0.611-1.367c0-0.215,0.015-0.435,0.045-0.659c0.031-0.224,0.08-0.476,0.147-0.759   l0.761-2.688c0.067-0.258,0.125-0.503,0.171-0.731c0.046-0.23,0.068-0.441,0.068-0.633c0-0.342-0.071-0.582-0.212-0.717   c-0.143-0.135-0.412-0.201-0.813-0.201c-0.196,0-0.398,0.029-0.605,0.09c-0.205,0.063-0.383,0.12-0.529,0.176l0.201-0.828   c0.498-0.203,0.975-0.377,1.43-0.521c0.455-0.146,0.885-0.218,1.29-0.218c0.731,0,1.295,0.178,1.692,0.53   c0.395,0.353,0.594,0.812,0.594,1.376c0,0.117-0.014,0.323-0.041,0.617c-0.027,0.295-0.078,0.564-0.152,0.811l-0.757,2.68   c-0.062,0.215-0.117,0.461-0.167,0.736c-0.049,0.275-0.073,0.485-0.073,0.626c0,0.356,0.079,0.599,0.239,0.728   c0.158,0.129,0.435,0.194,0.827,0.194c0.185,0,0.392-0.033,0.626-0.097c0.232-0.064,0.4-0.121,0.506-0.17L14.271,18.307z    M14.137,7.429c-0.353,0.328-0.778,0.492-1.275,0.492c-0.496,0-0.924-0.164-1.28-0.492c-0.354-0.328-0.533-0.727-0.533-1.193   c0-0.465,0.18-0.865,0.533-1.196c0.356-0.332,0.784-0.497,1.28-0.497c0.497,0,0.923,0.165,1.275,0.497   c0.353,0.331,0.53,0.731,0.53,1.196C14.667,6.703,14.49,7.101,14.137,7.429z" data-original="#030104" data-old_color="#d5a353" fill="#D5A353"></path>
          </svg></a></div>
      <div class="menu-icon">
        <div class="menu-icon__middle"></div>
      </div>
      <form class="form" action="<?php bloginfo( 'url' ); ?>" method="get">
        <input class="form__input" type="text" name="s" placeholder="Поиск" area-label="Поиск" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
        <button class="button" type="submit">Искать</button>
    </form>
    </header>
    <?php
        $args = array(
            'theme_location'    => 'primary',
            'container_class'   => 'main-menu',
            'menu_class'        => 'main-menu__list',
            'link_after'       => '<svg class="main-menu__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewbox="0 0 129 129" enable-background="new 0 0 129 129" width="20px" height="20px">
              <g>
                <g>
                  <path class="active-path" d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" data-original="#000000" data-old_color="#000000" fill="#FFFFFF"></path>
                </g>
              </g>',
            // 'link_after'        => '',
            'fallback_cb'       => 'callable'
        );
        wp_nav_menu($args);
    ?>
   
    <section class="hero"></section>
    <section class="cards">
      <div class="tabs"></div>
      <div class="tabs-pane">
        <ul class="tabs__list" id="myTab" role="tablist">
          <li class="tabs__item tabs__current" data-tab="tab-1"><a class="tabs__link">Последние</a></li>
          <li class="tabs__item" data-tab="tab-2"><a class="tabs__link">Новые</a></li>
          <li class="tabs__item" data-tab="tab-3"><a class="tabs__link">Популярные</a></li>
        </ul>
        <div class="tabs__content tabs__current" id="tab-1">
          <div class="cards__container">
          <?php
            $args = array(
              'category_name'=> 'card-item-last'
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

                <div class="cards__card cards__card--main">
                  <div class="cards__img"><img src="<?php echo $card_img; ?>" alt="card img"/></div>
                  <div class="cards__body">
                    <h4 class="cards__title"><?php echo $card_title; ?></h4>
                    <p class="cards__text"><?php echo $card_text; ?></p>
                    <p class="cards__format"><?php echo $card_format; ?></p><a class="button button--download" href="<?php echo $card_link; ?>">Скачать архив</a>
                  </div>
                  <div class="cards__footer"><a class="cards__badge" href="#">Веб</a><a class="cards__badge" href="#">Квадратные</a><a class="cards__badge" href="#">ВКонтакте</a><a class="cards__badge" href="#">Баннер</a></div>
              </div>
          <?php
            } 
          }
         ?>
          </div>
        </div>
        <div class="tabs__content" id="tab-2">
        <div class="cards__container">
          <?php
            $args = array(
              'category_name'=> 'card-item-new'
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

                <div class="cards__card cards__card--main">
                  <div class="cards__img"><img src="<?php echo $card_img; ?>" alt="card img"/></div>
                  <div class="cards__body">
                    <h4 class="cards__title"><?php echo $card_title; ?></h4>
                    <p class="cards__text"><?php echo $card_text; ?></p>
                    <p class="cards__format"><?php echo $card_format; ?></p><a class="button button--download" href="<?php echo $card_link; ?>">Скачать архив</a>
                  </div>
                  <div class="cards__footer"><a class="cards__badge" href="#">Веб</a><a class="cards__badge" href="#">Квадратные</a><a class="cards__badge" href="#">ВКонтакте</a><a class="cards__badge" href="#">Баннер</a></div>
              </div>
          <?php
            } 
          }
         ?>
          </div>
        </div>
          
        <div class="tabs__content" id="tab-3">
        <div class="cards__container">
          <?php
            $args = array(
              'category_name'=> 'card-item-often'
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

                <div class="cards__card cards__card--main">
                  <div class="cards__img"><img src="<?php echo $card_img; ?>" alt="card img"/></div>
                  <div class="cards__body">
                    <h4 class="cards__title"><?php echo $card_title; ?></h4>
                    <p class="cards__text"><?php echo $card_text; ?></p>
                    <p class="cards__format"><?php echo $card_format; ?></p><a class="button button--download" href="<?php echo $card_link; ?>">Скачать архив</a>
                  </div>
                  <div class="cards__footer"><a class="cards__badge" href="#">Веб</a><a class="cards__badge" href="#">Квадратные</a><a class="cards__badge" href="#">ВКонтакте</a><a class="cards__badge" href="#">Баннер</a></div>
              </div>
          <?php
            } 
          }
         ?>
          </div>
        </div>
        </div>

    </section>
    <?php get_footer(); ?>
  </body>
</html>