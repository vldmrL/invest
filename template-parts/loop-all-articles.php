<div class="all-articles__item post-item__inner" data-aos="fade-in">
    <div class="post-item__image-wrap">
        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="" class="post-item__image rounded"  onclick="window.location.href='<?php the_permalink(); ?>';">
    </div>
    <div class="post-item__text-wrap"> 
        <div class="post-item__date text-gray">
            <?php echo get_the_date(); ?>
        </div>                      
        <h4 class="post-item__title" onclick="window.location.href='<?php the_permalink(); ?>';">
            <?php the_title(); ?>
        </h4>
        <div class="post-item__exerpt text-gray">
            <?php  echo excerpt(20);  ?>
        </div>                       
    </div>
</div>

