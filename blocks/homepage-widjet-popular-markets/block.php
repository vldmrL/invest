<section class="popular-markets block <?php block_field('additional-class'); ?>">
    <div class="container">
        <div class="block__header section-header">
            <h2 class="section-header__header"><?php block_field('title'); ?></h2>
            <p class="section-header__text"><?php block_field('subtitle'); ?></p>
        </div>

        <div class="row">
            <div class="col-lg-4 block__content-col" data-aos="fade-up">
                <ul class="block__list list-checker">
                    <?php block_field('list'); ?>
                </ul>
                <a href="<?php block_field('button-link'); ?>" class="block__button btn btn-secondary"><?php block_field('button-text'); ?></a>
                <div class="block__buy-links buy-links">
                    <a href="<?php the_field('app-links_apple-download-link', 'options'); ?>" class="btn-app -store"></a>
                    <a href="<?php the_field('app-links_google-download-link', 'options'); ?>" class="btn-app -google"></a>
                </div>
            </div>

            <div class="col-lg-8 block__data-col"  data-aos="fade-up">           
               <?php get_template_part('template-parts/tradeview-widjets/market-overview/widjet'); ?>            
            </div>

        </div>
        
        
    </div>
</section>