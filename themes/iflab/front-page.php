<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link
 *
 * @package Iflab
 * @subpackage Iflab
 * @since 1.0.0
 */
?>

 <!doctype html>
 <html lang="en">
   <head>
     <?php wp_head(); ?>
     <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
   </head>
   <body class="bg-slate-200 mt-16 p-6 max-w-6xl flex flex-col justify-center items-center mx-auto">
   <?php get_header(); ?>
   <!-- メインビジュアル -->
   <div>
  <div class="grid md:grid-cols-3 grid-cols-1 gap-2 my-2 text-gray-900 shadow-black">
    <div class="col-span-full bg-red-500 rounded-xl relative">
      <img src="https://picsum.photos/800/400" alt="thumbnail" class="w-full h-full object-cover rounded-xl">
      <h2 class="absolute bottom-4 left-4 text-2xl font-bold text-white"><?php bloginfo( 'name' ); ?></h2>
    </div>


    <div class="p-4 rounded-xl bg-sky-200 md:mt-0 mt-4 ">
      <h1 class="text-2xl lg:text-3xl font-bold">フリースクール</h1>
      <p class="pt-2 text-gray-700">説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ</p>
      <a href="" class="">
        <button class="p-3 mt-2 rounded-full bg-yellow-200 ">さらに詳しく
        </button>
      </a>
    </div>
    <div class="p-4 rounded-xl bg-sky-200 md:mt-0 mt-4">
      <h1 class="text-2xl lg:text-3xl font-bold">ペアトレ講座</h1>
      <p class="pt-2 text-gray-700">説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ</p>
      <a href="" class="">
        <button class="p-3 mt-2 rounded-full bg-yellow-200">さらに詳しく
        </button>
      </a>
    </div>
    <div class="p-4 rounded-xl bg-sky-200 md:mt-0 mt-4">
      <h1 class="text-2xl lg:text-3xl font-bold">講演会</h1>
      <p class="pt-2 text-gray-700">説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ説明はここ</p>
      <a href="" class="">
        <button class="p-3 mt-2 rounded-full bg-yellow-200">さらに詳しく
        </button>
      </a>
    </div>

  </div>
    <!-- メインビジュアルここまで -->

    <!-- 記事一覧 -->
    <h2 class="text-3xl font-bold"> 記事を見る</h2>
    <p class="mt-2">最新の４件を表示しています</p>
  <div class="gap-4">
  <?php query_posts('posts_per_page=4'); ?> 
    <?php
     if ( have_posts() ) {
       while ( have_posts() ) {
        
         the_post();?>
        <div class="flex flex-col sm:flex-row-reverse justify-between w-full rounded-2xl bg-gray-200 shadow-sm hover:shadow-lg transition duration-300 ease-in-out hover:bg-gray-300 p-3 md:p-4 mt-4 relative">
            <img src="<?php the_post_thumbnail_url() ?>" alt="thumbnail" class=" md:aspect-video md:w-60 sm:w-48 sm:h-48 h-48 object-cover rounded-2xl">
            <div class="text-gray-700 my-auto">
            <?php the_title( '<h1 class="text-gray-900 entry-title text-2xl md:text-3xl my-2 shrink">', '</h1>' );?>
            <?php
            if(mb_strlen($post->post_content, 'UTF-8')>50){
            $content= mb_substr(strip_tags($post->post_content), 0, 50, 'UTF-8');
            echo $content.'...';
            }else{
            echo strip_tags($post->post_content);
            }
            ?>
            <p class="font-bold text-blue-500 mt-2">記事を見る</p>
            </div>
            <a href="<?php the_permalink( ); ?>" class="absolute w-full h-full top-0 left-0"></a>
        </div>
         <?php
        }
      }?>
  </div>
    <div class="flex justify-center items-center mt-4">
        <a href="/articles" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 m-2 rounded-full flex gap-2">
        もっと見る</a>
    
   </body>
   <?php get_footer(); ?>
 </html>