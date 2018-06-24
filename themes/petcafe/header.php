<!DOCTYPE html>
<html lang="ja">
<head>

<?php include('url.php'); ?>
<meta charset="UTF-8">

<title><?php bloginfo('name'); ?></title>

<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo $url; ?>/js/jquery.bxslider.css" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo $url; ?>/js/jquery.bxslider.min.js"></script>

<script src="<?php echo $url; ?>/js/jquery.bxslider.js"></script>


<script>

 $(document).ready(function(){
    
$('.bxslider').bxSlider({
  pagerCustom: '#bx-pager', /*サムネ画像*/
  auto: true /*オート機能*/
});
  });
</script>

<?php wp_head(); ?>
</head>
<body>



<header class="mt30">
<div class="box940">
<a href="<?php echo home_url('/'); ?>">
<h1><img src="<?php echo $url; ?>/img/logo.png" alt="PetCafe" /></h1>
</a>
<nav>
<ul>
<a href="<?php echo home_url('/'); ?>"><li>TOP</li></a>
<a href="<?php echo home_url('/'); ?>kanban/"><li>看板犬</li></a>
<a href="<?php echo home_url('/'); ?>ryoukin/"><li>料金表</li></a>
<a href="#"><li>ご意見・ご要望</li></a>
</ul>
</nav>

</div><!--/box940-->
</header>

<br style="clear:both;">

