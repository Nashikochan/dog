<?php
/*
Template Name: home
*/
get_header(); ?>
<?php $url = get_template_directory_uri(); ?>

<div id="wrapper" class="mt50">

<main class="mt50">

<div class="box940">

<!--スライダー-->
<div class="slider">
<ul class="bxslider">
<li><img src="<?php echo $url; ?>/img/sl1.jpg" /></li>
<li><img src="<?php echo $url; ?>/img/sl2.jpg" /></li>
<li><img src="<?php echo $url; ?>/img/sl3.jpg" /></li>
</ul>

<div class="TAC">
<div id="bx-pager">
  <a data-slide-index="0" href=""><img src="<?php echo $url; ?>/img/thum1.jpg" /></a>
  <a data-slide-index="1" href=""><img src="<?php echo $url; ?>/img/thum2.jpg" /></a>
  <a data-slide-index="2" href=""><img src="<?php echo $url; ?>/img/thum3.jpg" /></a>
</div>
</div>
</div>
<!--/スライダー-->


</div><!--/box940-->

<div class="box940 dpy mt20">

<ul>
<li class="mt40"><img src="<?php echo $url; ?>/img/bana1.jpg" /></li>
<li class="mt40"><img src="<?php echo $url; ?>/img/bana2.jpg" /></li>
<li class="mt40"><img src="<?php echo $url; ?>/img/bana3.jpg" /></li>
</ul>
<br style="clear:both;" />
</div><!--/box940 dpy-->


<div class="box940 mt20">

<div class="box620 mt50 mr20">
<img src="<?php echo $url; ?>/img/subt_os.png" />


<?php get_template_part( 'parts_news' ); ?>



</div><!--/box620-->


<?php dynamic_sidebar('side_w'); ?>


<!--
<div class="box300 mt50">
<a href="#">
<img src="<?php bloginfo('template_directory'); ?>/img/bn2.jpg" alt="かわいい看板犬リスト" />
</a>
</div>
/box300-->

<br style="clear:both;" />

</div><!--/box940-->

</main>


<?php get_footer(); ?>
