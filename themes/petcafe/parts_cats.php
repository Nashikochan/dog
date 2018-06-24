<?php
$args = array(
	'post_type' => 'kanban',
	'taxonomy' => 'pet',
	'term' => 'cats',
	'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
	);
?>



<ul>

<?php query_posts( $args ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php $thumb = get_field('thumb'); 

if( !empty($thumb) ): 
	$caption = $thumb['caption'];
    // thumbnail
    $size = 'thumbnail';
    $width = $thumb['sizes'][ $size . '-width' ];
    $height = $thumb['sizes'][ $size . '-height' ];
    $thumb2 = $thumb['sizes'][ $size ];

?>

<a href="<?php the_permalink(); ?>">
<li class="blk">
<img src="<?php echo $thumb2; ?>" max-height="220" max-width="220" />
</li>
</a>

<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>

</ul>
<?php wp_reset_query(); ?>
<br style="clear:both;" />

