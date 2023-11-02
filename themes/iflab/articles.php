<?php
/* Template Name:  ブログ・記事一覧テンプレ */
?>

 <!doctype html>
 <html lang="en">
   <head>
     <?php wp_head(); ?>
     <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
   </head>
   <body class="bg-slate-100 mt-48 p-6 max-w-6xl flex flex-col justify-center items-center mx-auto">
   <?php get_header(); ?>

  <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
    <?php
     if ( have_posts() ) {
       while ( have_posts() ) {
        
         the_post();?>
        <div class="flex flex-col sm:flex-row-reverse justify-between w-full rounded-2xl bg-gray-200 shadow-sm hover:shadow-lg transition duration-300 ease-in-out hover:bg-gray-300 p-2 md:p-4 mt-4 relative">
            <img src="<?php the_post_thumbnail_url() ?>" alt="thumbnail" class=" h-48 w-48 object-cover rounded-2xl">
            <div class="text-gray-700 my-auto">
            <?php the_title( '<h1 class="text-gray-900 entry-title text-3xl my-2">', '</h1>' );?>
            <?php the_content();?>
            <p class="font-bold text-blue-500 mt-2">記事を見る</p>
            </div>
            <a href="<?php the_permalink( ); ?>" class="absolute w-full h-full top-0 left-0"></a>
        </div>
         <?php
        }
      }?>
  </div>
    
   </body>
   <?php get_footer(); ?>
 </html>