<?php query_posts('post_type=news&showposts=5'); ?>
<!--
query_typeでカスタム投稿の投稿タイプスラッグ、
showpostsで表示したい記事の数。１なら１記事。５なら５記事表示させる
-->
<?php $counter = 0; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $counter++; ?>
<?php
$title= mb_substr($post->post_title,0,50);//タイトルの文字数を設定
$naka = mb_substr(get_the_excerpt(), 0, 55);//抜粋の文字数を設定
// mb_sbstrは文字列の一部を取得する。
?>
<?php if ($counter <= 3): ?><!-- 最初の３つ記事判別 -->
<?php include('url.php'); ?>


<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<div class="box620 mt15 mb15">
<div class="box120 mr30">

<?php 

$news_menu = get_field('news_menu');
if ($news_menu == 'news') {
 echo "<img src='" . $url . "/img/tpc_nw.png' />";
}else{
 echo "<img src='" . $url . "/img/tpc_mn.png' />";
}
?>

</div><!--/box120-->

<div class="box470">
<p><?php echo $title; ?></p>
<p><?php echo $naka; ?>…</p>
</div><!--/box470-->


</div><!--/box620-->
<hr/>
</a>

<?php else: ?><!--４つめ以降の記事-->

<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<div class="box620 mt15 mb15">
<div class="box120 mr30">

<?php 

$news_menu = get_field('news_menu');
if ($news_menu == 'news') {
 echo "<img src='" . $url . "/img/tpc_nw.png' />";
}else{
 echo "<img src='" . $url . "/img/tpc_mn.png' />";
}
?>

</div><!--/box120-->

<div class="box470">
<p><?php echo $title; ?></p>
</div><!--/box470-->


</div><!--/box620-->
<hr/>
</a>

<?php endif; ?>
<?php endwhile; endif; ?>





