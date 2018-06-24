<?php 
/*
Template Name: news
*/
get_header(); 
?>
<?php include('url.php'); ?>

<div id="wrapper" class="mt50">

<main class="mt50">

<div class="box940">

<p class="cl_bw">
<!--パンくずリスト-->
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<!--パンくずリスト-->
</p>
<img src="<?php echo $url; ?>/img/sl3.jpg" />

</div><!--/box940-->


<div class="box940 mt20">

<h2><img src="<?php echo $url; ?>/img/subt_o.png" alt="お知らせ" /></h2>
<br />

<div class="new_image">
<!--カスタムフィールド画像-->
<?php $image = get_field('image'); ?>

<?php if( get_field('image') == null ): ?><!--もしfield画像がない場合-->
<img src="<?php echo $url; ?>/img/noimage.png" />

<?php else: ?>
<img src="<?php if($image){ echo $image; } ?>" />

<?php endif; ?>
<!--/カスタムフィールド画像-->

</div>

<div class="news">
<?php 
$url = get_template_directory_uri();
$news_menu = get_field('news_menu');
if ($news_menu == 'news') {
 echo '<img src="' . $url . '/img/tpc_nw.png" />';
}else{
 echo '<img src="' . $url . '/img/tpc_mn.png" />';
}
?>

<h3><?php the_title(); ?></h3>

<p class="TAL mt30">
<?php if ( have_posts() ): ?><!--もし投稿本文あったら表示-->
<?php while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</p>

</div>

<br style="clear:both;" />

</div><!--/box940-->

</main>


<?php get_footer(); ?>