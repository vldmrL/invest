<?php wp_enqueue_style('swiper'); ?>
<?php wp_enqueue_script('about-us-block'); ?>

<section class="about-us <?php block_field('additional-class'); ?>">
    <div class="container">

        <div class="about-us__header section-header">
            <h2 class="section-header__header">What traders say about us?</h2>
        </div>

        <div class="about-us__slider swiper">
            <div class="about-us__slider-wrapper swiper-wrapper">

                <div class="about-us__review review swiper-slide">
                    <div class="row review__wrap">
                        <div class="col-md-6 review__image-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/slider/1-sm.jpg" alt="review" class="review__image">
                        </div>
                        <div class="col-md-6 review__content-wrap">
                            <div class="review__content">
                                <h6 class="review__name">Name</h6>
                                <p class="review__country">Country</p>
                                <div class="review__rating">
                                    <i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i>
                                </div>
                                <p class="review__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>                   
                </div>

                <div class="about-us__review review swiper-slide">
                    <div class="row review__wrap">
                        <div class="col-md-6 review__image-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/slider/2-sm.jpg" alt="review" class="review__image">
                        </div>
                        <div class="col-md-6 review__content-wrap">
                            <div class="review__content">
                                <h6 class="review__name">Name</h6>
                                <p class="review__country">Country</p>
                                <div class="review__rating">
                                    <i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i>
                                </div>
                                <p class="review__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>                   
                </div>

                <div class="about-us__review review swiper-slide">
                    <div class="row review__wrap">
                        <div class="col-md-6 review__image-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/slider/3-sm.jpg" alt="review" class="review__image">
                        </div>
                        <div class="col-md-6 review__content-wrap">
                            <div class="review__content">
                                <h6 class="review__name">Name</h6>
                                <p class="review__country">Country</p>
                                <div class="review__rating">
                                    <i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i>
                                </div>
                                <p class="review__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>                   
                </div>

                <div class="about-us__review review swiper-slide">
                    <div class="row review__wrap">
                        <div class="col-md-6 review__image-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/slider/4-sm.jpg" alt="review" class="review__image">
                        </div>
                        <div class="col-md-6 review__content-wrap">
                            <div class="review__content">
                                <h6 class="review__name">Name</h6>
                                <p class="review__country">Country</p>
                                <div class="review__rating">
                                    <i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i>
                                </div>
                                <p class="review__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>                   
                </div>
                
            </div>
            <div class="about-us__slider-nav">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <div class="about-us__thumb-slider thumb-slider swiper">
            <div class="thumb-slider__wrapper swiper-wrapper">
                <div class="thumb-slider__image-wrap swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider/1-sm.jpg" alt="review" class="thumb-slider__image">
                </div>
                <div class="thumb-slider__image-wrap swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider/2-sm.jpg" alt="review" class="thumb-slider__image">
                </div>
                <div class="thumb-slider__image-wrap swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider/3-sm.jpg" alt="review" class="thumb-slider__image">
                </div>
                <div class="thumb-slider__image-wrap swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider/4-sm.jpg" alt="review" class="thumb-slider__image">
                </div>
            </div>
        </div>

    </div>
</section>
