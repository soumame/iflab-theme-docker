<?php

// トップナビゲーション（メニューバー）
register_nav_menu('top', 'ナビゲーションメニュー（メニューバー）');

// フッター（ページ下部のナビゲーション）
register_nav_menu('footer', 'ページ下部（フッターメニュー）');

//サムネイルを有効
add_theme_support('post-thumbnails');

class custom_walker_nav_menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
      $output .= '<div class="header-nav-child"><div class="container"><ul class="sub-menu text-lg text-gray-600 list-disc">';
    }
    function end_lvl(&$output, $depth = 0, $args = array()) {
      $output .= '</ul></div></div>';
    }
  }

if ( ! function_exists( 'myfirsttheme_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which runs
   * before the init hook.
   */
  function myfirsttheme_setup() {
    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );
  
    // Enqueue editor styles.
    add_editor_style( 'editor-style.css' );
  }
  endif; // myfirsttheme_setup
  add_action( 'after_setup_theme', 'myfirsttheme_setup' );