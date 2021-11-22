<section class="cta-video <?php block_field('additional-class'); ?>">
    <div class="container">     
        <div class="row">

            <div class="col-12 col-lg-6 cta-video__content-col">
                <div class="cta-video__content">
                    <div class="cta-video__header section-header">
                        <h2 class="section-header__header"><?php block_field('title'); ?></h2>
                        <p class="section-header__text"  data-aos="fade-in"><?php block_field('subtitle'); ?></p>
                    </div>
                    <a href="#" class="cta-video__button btn btn-secondary">Start Trading Now</a>
                    <div class="cta-video__buy-links buy-links">
                        <a href="<?php the_field('app-links_apple-download-link', 'options'); ?>" class="btn-app -store"></a>
                        <a href="<?php the_field('app-links_google-download-link', 'options'); ?>" class="btn-app -google"></a>
                    </div>
                </div>                
            </div>
            <div class="col-12 col-lg-6 cta-video__video-col">
                <img src="<?php echo get_template_directory_uri(); ?>/img/temp/video-preview-1.jpg" alt="" class="cta-video__video">
            </div>

        </div>
    </div>
</section>