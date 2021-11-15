<?php wp_enqueue_style('swiper'); ?>
<?php wp_enqueue_script('archive-top-articles'); ?>

<section class="top-articles">

    <div class="top-articles__section-header section-header">
        <h2 class="section-header__header text-gray">Top articles</span></h2>            
    </div>

    <div class="top-articles__slider swiper">
      <div class="top-articles__slider-wrapper swiper-wrapper">

        <?php
        $args = array(
            'posts_per_page' => 4,
            'post_type' => 'post',
            'orderby' => 'date',
            'order'   => 'DESC'            
        );
        $query = new WP_Query( $args );

        while ( $query->have_posts() ) {
            $query->the_post();
        ?>    

            <div class="top-articles__item swiper-slide">
                <div class="top-articles__item-inner post-item">
                    <div class="post-item__image-wrap">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="" class="post-item__image"  onclick="window.location.href='<?php the_permalink(); ?>';">
                    </div>
                    <div class="post-item__text-wrap">                       
                        <h4 class="post-item__title" onclick="window.location.href='<?php the_permalink(); ?>';">
                            <?php the_title(); ?>
                        </h4>
                        <div class="post-item__exerpt text-gray">
                            <?php the_excerpt(); ?>
                        </div>                       
                    </div>
                </div>
            </div>

        <?php
        }   
        wp_reset_postdata();
        ?>	

    </div> <!--// top-articles__slider -->

</section>