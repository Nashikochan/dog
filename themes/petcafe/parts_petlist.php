<?php
$args = new WP_Query(
array( //配列$argsに複数の引数追加
//	'post_type' => 'post',	//表示する投稿タイプを指定。カスタム投稿タイプblog
	'post_type' => 'kanban',	//表示する投稿タイプを指定。カスタム投稿タイプblog
//	'posts_per_page' => 2,	一覧に表示するページ数
	'paged' => get_query_var('paged'),	//ページネーションする場合は必須
	'post_status' => 'publish',
)
);
?>



<ul>

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

<br style="clear:both;" />

