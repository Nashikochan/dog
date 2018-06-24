<?php
/*
Template Name: tx-dogs
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
<!--パンくずリスト--></p>
<h2><img src="<?php echo $url; ?>/img/top_kan.jpg" alt="看板犬リスト" /></h2>

</div><!--/box940-->


<div class="box940 mt20">
	
<div class="c_d mt50">
<li class="mr10"><a href="<?php echo home_url('/'); ?>petcafe/dogs/"><img src="<?php echo $url; ?>/img/d_lt.jpg" alt="犬リスト" /></a></li>
<li><a href="<?php echo home_url('/'); ?>petcafe/cats/"><img src="<?php echo $url; ?>/img/c_lt.jpg" alt="猫リスト" /></a></li>
</div>

<?php
	/* Run the loop to output the page.
	* If you want to overload this in a child theme then include a file
	* called loop-page.php and that will be used instead.
	
	get_template_part( 'loop', 'parts_petlist' );

*/

get_template_part( 'parts_dogs' );

?>



<br style="clear:both;" />


</div><!--/box940-->

</main>


<?php get_footer(); ?>