<section class="homepage-widjet-top-weekly block <?php block_field('add-class');?>">
    <div class="container">
        <div class="row">
            <?php if ( !empty(block_value('title')) ) { ?>
            <div class="col-12">
                <div class="block__header section-header <?php block_field('title-class');?>">
                    <h3 class="section-header__header"><?php block_field('title'); ?></h2>
                    <?php if ( !empty(block_value('subtitle')) ) { ?>
                        <p class="section-header__text"><?php block_field('subtitle'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>

            <div class="col-12">
                <div class="block__widjet <?php block_field('widjet-wrap'); ?>">
                    <?php get_template_part('template-parts/tradeview-widjets/graph/top-weekly'); ?>
                </div>
            </div>

        </div>
    </div>
</section>