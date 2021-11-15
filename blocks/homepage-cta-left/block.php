<section class="cta-left <?php block_field('additional-class'); ?>">
    <div class="container">        
        <div class="row">
            <div class="col-12 col-lg-6 cta-left__content-wrap">
                <div class="cta-left__header section-header">
                  <h2 class="section-header__header"><?php block_field('title'); ?></span></h2>            
                </div>
                <div class="cta-left__content list-cards">
                    <?php block_field('inner') ?>
                </div>
            </div>

            <div class="col-12 col-lg-6 cta-left__image-wrap">
                <img src="<?php block_field('image'); ?>" alt="" class="cta-left__image">
            </div>

        </div>

        
    </div>
</section>