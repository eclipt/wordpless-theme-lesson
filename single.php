<!-- ヘッダーの読み込み -->
<?php get_header(); ?>
<!-- サムネイルの表示 -->
<?php the_post_thumbnail('thumbnail'); ?>
<!-- ブログタイトルの表示 -->
<?php bloginfo('name'); ?>
<!-- 本文の表示 抜粋ではないよ -->
<?php the_content(); ?>
<!-- フッターの読み込み -->
<?php get_footer(); ?>