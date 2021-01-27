
<?php get_header(); ?>
<?php the_post() ?>
<div class="main-content">

    <img src="<?php the_post_thumbnail_url();?>" alt="" class="post__img">
    <h1><?php the_title(''); ?></h1>
    <p><?php the_content(); ?></p>

</div>
<?php get_footer(); ?>