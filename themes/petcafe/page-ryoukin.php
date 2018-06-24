<?php
/*
Template Name: page-ryoukin
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
<h2><img src="<?php echo $url; ?>/img/top_rkn.jpg" alt="料金表" /></h2>

</div><!--/box940-->




<div class="box940 mt20">

<div class="box620 mt50 mr20">

<h3><img src="<?php echo $url; ?>/img/subt1.png" alt="pet cafe料金" /></h3>

<table class="type1 FNT15 mt30">
<tr>
<td>30分</td><td>お一人様1000円</td>
</tr>
<tr>
<td>1時間</td><td>お一人様1500円</td>
</tr>
<tr>
<td>延長15分ごと</td><td>お一人様500円</td>
</tr>
</table>
<p class="cl_bw FNT13 mt10">１時間以上ご利用の方はお好きな飲み物１つサービス</p>


<div class="mt30">
<h3><img src="<?php echo $url; ?>/img/subt2.png" alt="ドリンク" /></h3>
</div>

<li class="FNT14 cl_bw mt10">コーヒー</li>
<li class="FNT14 cl_bw mt10">カフェラテ</li>
<li class="FNT14 cl_bw mt10">カプチーノ</li>
<li class="FNT14 cl_bw mt10">紅茶</li>
<li class="FNT14 cl_bw mt10">ロイヤルミルクティー</li>


<div class="mt30">
<h3><img src="<?php echo $url; ?>/img/subt3.png" alt="レンタル犬料金" /></h3>
</div>

<table class="type1 FNT15 mt30">
<tr>
<td>小型犬</td><td>1時間3000円</td>
</tr>
<tr>
<td>中型犬</td><td>1時間3200円</td>
</tr>
<tr>
<td>大型犬</td><td>1時間3400円</td>
</tr>
<tr>
<td>延長15分ごと</td><td>500円</td>
</tr>
</table>

</div><!--/box620-->



<?php dynamic_sidebar('side_w'); ?>



</div><!--/box940-->
<br style="clear:both;" />
</main>




<?php get_footer(); ?>
