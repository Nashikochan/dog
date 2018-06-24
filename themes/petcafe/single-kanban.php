<?php
/*
Template Name: single-kanban
*/
get_header(); ?>
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
<img src="<?php echo $url; ?>/img/top_kan.jpg" />

</div><!--/box940-->


<div class="box940 mt20">


<div class="shousai mt30 mr20">

<p><?php $kenshu = get_field('kenshu'); if($kenshu){ echo $kenshu; } ?></p>

<p class="FNT14"><?php the_title(); ?></p>

<p>性別：<?php 
$sex = get_field('sex');
if ($sex == 'オス') {
 echo 'オス';
}else{
 echo 'メス';
}
?></p>

<p>体重：<?php $weight = get_field('weight'); if($weight){ echo $weight; } ?> kg</p>

<p>好きなもの：<?php $fav = get_field('fav'); if($fav){ echo $fav; } ?></p>


<p>一言<br/>
<?php $hitokoto = get_field('hitokoto'); if($hitokoto){ echo $hitokoto; } ?></p>


<a href="<?php echo home_url('/'); ?>kanban/">
<img src="<?php echo $url; ?>/img/bn2_2.jpg" />
</a>

</div><!--/shousai-->



<div class="photo mt30">

<?php if( get_field('image_pet') ): ?><!--もしfield画像があったら表示-->
<img src="<?php the_field('image_pet'); ?>" />
<?php endif; ?>

</div><!--/photo-->



<br style="clear:both;" />

</div><!--/box940-->

</main>



<?php get_footer(); ?>