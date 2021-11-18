<div class="col <?php block_field('col-class'); ?>">
    <div class="block__inner-wrapper d-flex flex-column <?php block_field('add-class'); ?>">
        <?php if ( !empty(block_value('image')) ) { ?>
            <div class="block__icon-wrap">
                <img class="block__icon--big" src="<?php block_field('image'); ?>">
            </div>
            
        <?php } ?>
        <?php if ( !empty(block_value('title')) ) { ?>
            <h3 class="block__inner-header"><?php block_field('title'); ?></h3>
        <?php } ?>
        <?php if ( !empty(block_value('text')) ) { ?>
            <p class="block__inner-text"><?php block_field('text'); ?></p>
        <?php } ?>
        <?php if ( !empty(block_value('button-text')) ) { ?>
            <a href="<?php block_field('button-link'); ?>" class="block__inner-button btn <?php block_field('button-class'); ?>"><?php block_field('button-text'); ?></a>
        <?php } ?>
    </div>
</div>