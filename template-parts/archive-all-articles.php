<?php wp_enqueue_script('archive-all-articles'); ?>

<section class="all-articles">

    <div class="all-articles__section-header section-header">
        <h2 class="section-header__header text-gray">All articles</span></h2>            
    </div>

    <div class="all-articles__row row">

        <?php
        $args = array(
            'posts_per_page' => 6,
            'post_type' => 'post',
            'orderby' => 'date',
            'order'   => 'DESC'            
        );
        $query = new WP_Query( $args );

        while ( $query->have_posts() ) {
            $query->the_post();
        ?>    

            <div class="all-articles__col col-12 col-md-6 col-lg-4 post-item">
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
            </div>

        <?php
        }   
        wp_reset_postdata();
        ?>	

    </div> <!--// all-articles__slider -->

</section>