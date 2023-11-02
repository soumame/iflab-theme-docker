<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>


<!doctype html>
 <html lang="en">
   <head>
     <?php wp_head(); ?>
     <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
   </head>
   <body class="bg-slate-100 mt-48 p-6 max-w-6xl flex flex-col justify-center items-center mx-auto">
   <?php get_header(); ?>

  <div class="flex items-center justify-center">
	<h1 class="p-4 text-3xl font-bold italic">404</h1><p class="p-4 text-center ">ページが見つかりませんでした。</p>

  </div>
    
   </body>
   <?php get_footer(); ?>
 </html>