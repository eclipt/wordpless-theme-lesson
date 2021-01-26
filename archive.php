<?php get_header(); ?>

<div class="main-content">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <!-- 繰り返し処理する内容 -->
        <?php endwhile; ?>
        <?php else: ?>
         <!-- 投稿データが取得できない場合の処理 -->
        <?php endif; ?>

        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <!-- 繰り返し処理する内容 -->
           <a href="<?php the_permalink() ;?>">
                <div class="blog-content" >
                  <?php the_post_thumbnail('thumbnail'); ?>
                     <div class="blog-info">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?> </p>
                        <a href="#"><?php the_category(); ?></a><a href="#"><?php the_time(); ?></a>
                     </div>
                </div>   
                </a>          
       <?php endwhile; ?>
       <?php else: ?>
     <!-- 投稿データが取得できない場合の処理 -->
        <p>投稿がありません</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>