<?php
//ヘッダー部余分な記述を削除

// フィード出力を削除します
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// スタイルシートを削除します
remove_action('wp_head', 'wp_print_styles', 8);
// スクリプトを削除します
remove_action('wp_head', 'wp_print_head_scripts', 9);
// リンク情報「prev」「next」を削除します
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// リンク情報「shortlink」を削除します
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// リンク情報「canonical」を削除します
remove_action('wp_head', 'rel_canonical');
// リンク情報「EditURI」を削除します
remove_action('wp_head', 'rsd_link');
// リンク情報「wlwmanifest」を削除します
remove_action('wp_head', 'wlwmanifest_link');
// WordPressのバージョン情報を削除します
remove_action('wp_head', 'wp_generator');

// WordPress 4.4から追加された「Embed」機能に関する出力
// 必要ない場合に以下で出力を削除します
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

add_filter( 'emoji_svg_url', '__return_false' );

function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );



//ウィジェット
register_sidebar(array(
     'name' => 'sidebar',
     'id' => 'side_w',
     'before_widget' => '<div class="box300 mt50">',
     'after_widget' => '</div>'
));


//サムネイル
add_theme_support('post-thumbnails');    // アイキャッチ画像を追加
set_post_thumbnail_size(150, 150, true); // 通常の投稿サムネイル
add_image_size('thumbnailMidium',220, 220 ,true );





?>