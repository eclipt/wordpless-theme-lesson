<?php /* 
Template Name: 日報
Template Post Type: post, page, event
*/ ?>


<?php get_header(); 
the_post();?>


<br>
<br>
<br>
<br>
<br>

<?php the_post_thumbnail(); ?>
<h2>これは日報用のPHPです</h2>

<!-- カスタムフィールド取得 -->
<p><?php the_field('day'); ?></p>
<p><?php the_field('content'); ?></p>
<img style="width:600px;" src="<?php the_field('img'); ?>" alt="">


<?php get_footer(); ?>