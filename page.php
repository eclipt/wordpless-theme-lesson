
<!-- ヘッダーの読み込み -->
<?php get_header(); ?>
<?php the_post() ?>
<!-- サムネイルの表示 -->
<?php the_post_thumbnail('category-thumb'); ?>
<!-- ブログタイトルの表示 -->
<h1><?php the_title(''); ?></h1>
<h2>page.phpです</h2>
<!-- 本文の表示 抜粋ではないよ -->
<p><?php the_content(); ?></p>
<!-- フッターの読み込み -->
<?php get_footer(); ?>