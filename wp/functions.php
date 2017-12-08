<?php

  function oldboyFamily_theme_setup() {
      // Menu support
      register_nav_menus(array(
          "primary"   => __('Primary Menu'),
      ));
  }
  add_action('after_setup_theme', 'oldboyFamily_theme_setup');

  function remove_admin_login_header() {
      remove_action('wp_head', '_admin_bar_bump_cb');
  }

  
function dimox_breadcrumbs() {
    
      if ( is_page_template( 'Catalog Page' ) ) {
          /* === ОПЦИИ === */
        $text['home'] = 'Главная'; // текст ссылки "Главная"
        $text['category'] = '%s'; // текст для страницы рубрики
        $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
        $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
        $text['author'] = 'Статьи автора %s'; // текст для страницы автора
        $text['404'] = 'Ошибка 404'; // текст для страницы 404
        $text['page'] = 'Страница %s'; // текст 'Страница N'
        $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
        $wrap_before = '<div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
          $wrap_after = '</div><!-- .breadcrumb -->'; // закрывающий тег обертки
        //   $sep = '›'; // разделитель между "крошками"
        //   $sep_before = '<span class="sep">'; // тег перед разделителем
          $sep_after = '</a>'; // тег после разделителя
          $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
          $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
          $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
          $before = '<a class="breadcrumb__item breadcrumb__item--active">'; // тег перед текущей "крошкой"
          $after = '</a>'; // тег после текущей "крошки"
          /* === КОНЕЦ ОПЦИЙ === */
        
          global $post;
          $home_url = home_url('/');
          $link_before = '<span class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
          $link_after = '</span>';
          $link_attr = ' itemprop="item"';
          $link_in_before = '<span class="breadcrumb__item" itemprop="name">';
          $link_in_after = '</span>';
          $link = $link_before . '<a class="breadcrumb__item--active" href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
          $frontpage_id = get_option('page_on_front');
          $parent_id = ($post) ? $post->post_parent : '';
          $home_link = $link_before . '<a class="breadcrumb__item" href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;
        
          if (is_home() || is_front_page()) {
        
            if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
        
          } else {
        
            echo $wrap_before;
            if ($show_home_link) echo $home_link;
        
            if ( is_category() ) {
              $cat = get_category(get_query_var('cat'), false);
              if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
              }
              if ( get_query_var('paged') ) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
              } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
              }
        
            } elseif ( is_search() ) {
              if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
              } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
              }
        
            } elseif ( is_day() ) {
              if ($show_home_link) echo $sep;
              echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
              echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
              if ($show_current) echo $sep . $before . get_the_time('d') . $after;
        
            } elseif ( is_month() ) {
              if ($show_home_link) echo $sep;
              echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
              if ($show_current) echo $sep . $before . get_the_time('F') . $after;
        
            } elseif ( is_year() ) {
              if ($show_home_link && $show_current) echo $sep;
              if ($show_current) echo $before . get_the_time('Y') . $after;
        
            } elseif ( is_single() && !is_attachment() ) {
              if ($show_home_link) echo $sep;
              if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
              } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
                if ( get_query_var('cpage') ) {
                  echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                  if ($show_current) echo $before . get_the_title() . $after;
                }
              }
        
            // custom post type
            } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
              $post_type = get_post_type_object(get_post_type());
              if ( get_query_var('paged') ) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
              } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
              }
        
            } elseif ( is_attachment() ) {
              if ($show_home_link) echo $sep;
              $parent = get_post($parent_id);
              $cat = get_the_category($parent->ID); $cat = $cat[0];
              if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
              }
              printf($link, get_permalink($parent), $parent->post_title);
              if ($show_current) echo $sep . $before . get_the_title() . $after;
        
            } elseif ( is_page() && !$parent_id ) {
              if ($show_current) echo $sep . $before . get_the_title() . $after;
        
            } elseif ( is_page() && $parent_id ) {
              if ($show_home_link) echo $sep;
              if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                  $page = get_page($parent_id);
                  if ($parent_id != $frontpage_id) {
                    $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                  }
                  $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                  echo $breadcrumbs[$i];
                  if ($i != count($breadcrumbs)-1) echo $sep;
                }
              }
              if ($show_current) echo $sep . $before . get_the_title() . $after;
        
            } elseif ( is_tag() ) {
              if ( get_query_var('paged') ) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
              } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
              }
        
            } elseif ( is_author() ) {
              global $author;
              $author = get_userdata($author);
              if ( get_query_var('paged') ) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
              } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
              }
        
            } elseif ( is_404() ) {
              if ($show_home_link && $show_current) echo $sep;
              if ($show_current) echo $before . $text['404'] . $after;
        
            } elseif ( has_post_format() && !is_singular() ) {
              if ($show_home_link) echo $sep;
              echo get_post_format_string( get_post_format() );
            }
        
            echo $wrap_after;
    }
   } else {
        /* === ОПЦИИ === */
        $text['home'] = 'Главная'; // текст ссылки "Главная"
        $text['category'] = '%s'; // текст для страницы рубрики
        $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
        $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
        $text['author'] = 'Статьи автора %s'; // текст для страницы автора
        $text['404'] = 'Ошибка 404'; // текст для страницы 404
        $text['page'] = 'Страница %s'; // текст 'Страница N'
        $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
        $wrap_before = '<div class="breadcrumb breadcrumb--mrtop" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
          $wrap_after = '</div><!-- .breadcrumb -->'; // закрывающий тег обертки
        //   $sep = '›'; // разделитель между "крошками"
        //   $sep_before = '<span class="sep">'; // тег перед разделителем
          $sep_after = '</a>'; // тег после разделителя
          $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
          $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
          $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
          $before = '<a class="breadcrumb__item breadcrumb__item--active">'; // тег перед текущей "крошкой"
          $after = '</a>'; // тег после текущей "крошки"
          /* === КОНЕЦ ОПЦИЙ === */
        
          global $post;
          $home_url = home_url('/');
          $link_before = '<span class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
          $link_after = '</span>';
          $link_attr = ' itemprop="item"';
          $link_in_before = '<span class="breadcrumb__item" itemprop="name">';
          $link_in_after = '</span>';
          $link = $link_before . '<a class="breadcrumb__item--active" href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
          $frontpage_id = get_option('page_on_front');
          $parent_id = ($post) ? $post->post_parent : '';
          $home_link = $link_before . '<a class="breadcrumb__item" href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;
        
          if (is_home() || is_front_page()) {
        
            if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
        
          } else {
        
            echo $wrap_before;
            if ($show_home_link) echo $home_link;
        
            if ( is_category() ) {
              $cat = get_category(get_query_var('cat'), false);
              if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
              }
              if ( get_query_var('paged') ) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
              } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
              }
        
            } elseif ( is_search() ) {
              if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
              } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
              }
        
            } elseif ( is_day() ) {
              if ($show_home_link) echo $sep;
              echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
              echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
              if ($show_current) echo $sep . $before . get_the_time('d') . $after;
        
            } elseif ( is_month() ) {
              if ($show_home_link) echo $sep;
              echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
              if ($show_current) echo $sep . $before . get_the_time('F') . $after;
        
            } elseif ( is_year() ) {
              if ($show_home_link && $show_current) echo $sep;
              if ($show_current) echo $before . get_the_time('Y') . $after;
        
            } elseif ( is_single() && !is_attachment() ) {
              if ($show_home_link) echo $sep;
              if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
              } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
                if ( get_query_var('cpage') ) {
                  echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                  if ($show_current) echo $before . get_the_title() . $after;
                }
              }
        
            // custom post type
            } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
              $post_type = get_post_type_object(get_post_type());
              if ( get_query_var('paged') ) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
              } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
              }
        
            } elseif ( is_attachment() ) {
              if ($show_home_link) echo $sep;
              $parent = get_post($parent_id);
              $cat = get_the_category($parent->ID); $cat = $cat[0];
              if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
              }
              printf($link, get_permalink($parent), $parent->post_title);
              if ($show_current) echo $sep . $before . get_the_title() . $after;
        
            } elseif ( is_page() && !$parent_id ) {
              if ($show_current) echo $sep . $before . get_the_title() . $after;
        
            } elseif ( is_page() && $parent_id ) {
              if ($show_home_link) echo $sep;
              if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                  $page = get_page($parent_id);
                  if ($parent_id != $frontpage_id) {
                    $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                  }
                  $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                  echo $breadcrumbs[$i];
                  if ($i != count($breadcrumbs)-1) echo $sep;
                }
              }
              if ($show_current) echo $sep . $before . get_the_title() . $after;
        
            } elseif ( is_tag() ) {
              if ( get_query_var('paged') ) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
              } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
              }
        
            } elseif ( is_author() ) {
              global $author;
              $author = get_userdata($author);
              if ( get_query_var('paged') ) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
              } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
              }
        
            } elseif ( is_404() ) {
              if ($show_home_link && $show_current) echo $sep;
              if ($show_current) echo $before . $text['404'] . $after;
        
            } elseif ( has_post_format() && !is_singular() ) {
              if ($show_home_link) echo $sep;
              echo get_post_format_string( get_post_format() );
            }
        
            echo $wrap_after;
    }
    
  }
}

    // numbered pagination
    function pagination($pages = '', $range = 4)
    {  
         $showitems = ($range * 2)+1;  
     
         global $paged;
         if(empty($paged)) $paged = 1;
     
         if($pages == '')
         {
             global $wp_query;
             $pages = $wp_query->max_num_pages;
             if(!$pages)
             {
                 $pages = 1;
             }
         }   
     
         if(1 != $pages)
         {
             echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
             if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
             if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
     
             for ($i=1; $i <= $pages; $i++)
             {
                 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                 {
                     echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
                 }
             }
     
             if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
             if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
             echo "</div>\n";
         }
    }

    class mywalker_nav_menu extends Walker_Nav_Menu {
      
        // add classes to ul sub-menus
        function start_lvl( &$output, $depth ) {
          // depth dependent classes
          $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
          $display_depth = ( $depth + 1); // because it counts the first submenu as 0
          $classes = array(
            'sub-menu'
            );
          $class_names = implode( ' ', $classes );
      
          // build html
          $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
        }


        
        
        function start_el(&$output, $item, $depth, $args) {
          global $wp_query;

          $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
          $depth_classes = array(
            ( $depth == 0 ? 'main-menu__item' : 'main-menu__dropdown-item' ),
            'menu-item-depth-' . $depth
          );

          $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
          $classes = empty( $item->classes ) ? array() : (array) $item->classes;
          $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
      
          // build html
          $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
      
          // link attributes
          $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
          $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
          $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
          $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
          $attributes .= ' class="main-menu__link ' . ( $depth > 0 ? 'main-menu__sublink' : '' ) . '"';
      
          $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
          );
      
          // build html
          $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
 
        }
      }
      class mywalker_nav_menuWithout extends Walker_Nav_Menu {
        
          // add classes to ul sub-menus
          function start_lvl( &$output, $depth ) {
            // depth dependent classes
            $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
            $display_depth = ( $depth + 1); // because it counts the first submenu as 0
            $classes = array(
              'sub-menu hide'
              );
            $class_names = implode( ' ', $classes );
        
            // build html
            $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
          }
  
  
          
          
          function start_el(&$output, $item, $depth, $args) {
            global $wp_query;
  
            $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
            $depth_classes = array(
              ( $depth == 0 ? 'main-menu__item' : 'main-menu__dropdown-item' ),
              'menu-item-depth-' . $depth
            );
  
            $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
        
            // build html
            $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
        
            // link attributes
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $attributes .= ' class="main-menu__link ' . ( $depth > 0 ? 'main-menu__sublink' : '' ) . '"';
        
            $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
              $args->before,
              $attributes,
              $args->link_before,
              apply_filters( 'the_title', $item->title, $item->ID ),
              $args->link_after,
              $args->after
            );
        
            // build html
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
   
          }
        }
      function categories() {
       $count = 1;
        foreach((get_the_category()) as $category) {
          $string = '<a href="#" class="cards__badge">'. $category->cat_name .'</a>';
          echo $string;
        }
      }
      function has_children() {
        global $post;
    
        $children = get_pages( array( 'child_of' => $post->ID ) );
          $args = array(
            'theme_location'    => 'primary',
            'container_id'      => 'top-navigation-primary',
            'container_class'   => 'main-menu',
            'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker'            => new mywalker_nav_menu,
            'menu_class'        => 'main-menu__list'
          );
        wp_nav_menu($args);
        }
    function my_custom_login() {
      echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
      }
      add_action('login_head', 'my_custom_login');

?>
