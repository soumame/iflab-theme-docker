<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Iflab
 * @subpackage Iflab
 * @since 1.0.0
 */
?><!doctype html>
<!-- -->
<html <?php language_attributes(); ?>>
<head>    
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav class="fixed w-full max-w-6xl top-0 flex justify-center items-center p-4 z-50">
      <div class="w-full menu-wrapper flex grow justify-between p-6 rounded-3xl bg-sky-200 shadow-lg">
        <div>
          <input type="checkbox" id="menu-toggle" class="hidden">
          <label for="menu-toggle" class="menu-button">
              <span></span>
              <span></span>
              <span></span>
          </label>
            <div class="menu">
            <ul class="flex flex-col m-4">
            <?php
              wp_nav_menu([
                'menu'            => 'top',
                'theme_location'  => 'top',
                'container'       => 'ul',
                'container_id'    => 'bs4navbar',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'block flex flex-col py-2 pl-3 pr-4 text-black font-bold text-xl text-gray-700',
                'depth'           => 2,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'  => new custom_walker_nav_menu
              ]);
              ?>
            </ul>
        </div> 
      </div>
    <!--ロゴ -->
      <a href="/" class="absolute left-[50%] mt-5 translate-x-[-50%] translate-y-[-50%] p-2 bg-white shadow rounded-full overflow-hidden">
        <?php $site_icon_url = get_site_icon_url(128, 'app/public/wp-content/themes/iflab/assets/image/error.png');
        echo '<img src="' . esc_url($site_icon_url) . '" alt="Site logo" class="md:w-20 md:h-20 w-16 h-16 p-1 object-contain" />'; ?>
      </a>
    </div>
</nav>

<div id="content" class="site-content">
<style>


.menu-button {
    display: inline-block;
    width: 30px;
    height: 22px;
    position: relative;
    cursor: pointer;
}

.menu-button span {
    display: block;
    width: 100%;
    height: 3px;
    background: black;
    margin: 4px 0;
    transition: all 0.3s;
}

.menu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease-in-out;
}

#menu-toggle:checked ~ .menu-button span:nth-child(1) {
    transform: translateY(9px) rotate(45deg);
}

#menu-toggle:checked ~ .menu-button span:nth-child(2) {
    opacity: 0;
}

#menu-toggle:checked ~ .menu-button span:nth-child(3) {
    transform: translateY(-9px) rotate(-45deg);
}

#menu-toggle:checked ~ .menu {
    max-height: 100vh; /* 必要に応じて調整してください */
}

.menu ul {
    opacity: 0;
    list-style: none;
    padding: 0;
    margin: 0;
    transition: opacity 0.5s ease-in-out;

}
#menu-toggle:checked ~ .menu ul {
    opacity: 1;
    list-style: none;
    padding: 0;
    margin: 0;
}

.menu li {
    padding: 10px;

}
.menu li:hover {
 color : #9ca3af;
 transition: all 0.3s; 
}
</style>
