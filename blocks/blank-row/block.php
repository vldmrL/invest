<section class="blank-row block <?php block_field('add-class');?>">
    <div class="container <?php block_field('container-class');?>">
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

            <?php block_field('inner'); ?>           

        </div>
    </div>
</section>