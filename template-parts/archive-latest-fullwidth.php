<?php wp_enqueue_style('swiper'); ?>
<?php wp_enqueue_script('archive-latest-fullwidth'); ?>

<section class="latest-news">

    <div class="latest-news__section-header section-header">
        <h2 class="section-header__header">Latest</span></h2>            
    </div>

    <div class="latest-news__slider swiper">
      <div class="latest-news__slider-wrapper swiper-wrapper">

        <?php
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'orderby' => 'date',
            'order'   => 'DESC'
            // 'suppress_filters' => true
        );
        $query = new WP_Query( $args );

        while ( $query->have_posts() ) {
            $query->the_post();
        ?>    

            <div class="latest-news__item swiper-slide">
                <div class="latest-news__item-inner row">
                    <div class="latest-news__image-col col-12 col-md-6 col-lg-7 col-xs-8">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="" class="latest-news__thubnail"  onclick="window.location.href='<?php the_permalink(); ?>';">
                    </div>
                    <div class="latest-news__text-col col-12 col-md-6 col-lg-5 col-xl-4">
                        <div class="latest-news__date text-gray">
                            <?php echo get_the_date(); ?>
                        </div>
                        <h2 class="latest-news__title" onclick="window.location.href='<?php the_permalink(); ?>';">
                            <?php the_title(); ?>
                        </h2>
                        <div class="latest-news__exerpt text-gray">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="latest-news__readmore">
                            <a href="<?php the_permalink(); ?>" class="btn btn-readmore">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }   
        wp_reset_postdata();
        ?>	

      </div>
    </div> <!--// latest-news__slider -->

</section>