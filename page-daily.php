<?php /* 
Template Name: 日報
Template Post Type: post, page, event
*/ ?>


<?php get_header(); ?>


<br>
<br>
<br>
<br>
<br>

<!-- カスタムフィールド取得 -->
<p><?php the_field('day'); ?></p>
<p><?php the_field('content'); ?></p>
<img style="width:600px;" src="<?php the_field('img'); ?>" alt="">


<?php get_footer(); ?>