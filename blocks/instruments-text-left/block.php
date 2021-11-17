<section class="instruments-text-left <?php block_field('add-class'); ?>">
    <div class="container block">
        <div class="block__header section-header">
            <h2 class="section-header__header"><?php block_field('title'); ?></h2>
            <?php if ( !empty(block_field('subtitle')) ) { ?>
                <p class="section-header__text"><?php block_field('subtitle'); ?></p>
            <?php } ?>
        </div>

        <div class="row">

            <div class="col-md-6 block__col"> 
                <div class="block__left">
                    <h3 class="block__title" >
                        <?php block_field('title'); ?>
                    </h3>
                    <div class="block__text text-gray--dark">
                        <?php block_field('text'); ?>
                    </div>
                    <div class="block__bottons">
                        <a href="<?php block_field('button-link'); ?>" class="block__btn btn btn-outline-secondary"><?php block_field('button-text'); ?></a>
                    </div>  
                </div>        
            </div>  
            
            <div class="col-md-6 block__col"> 
                <div class="block__right">
                    <img src="<?php block_field('image'); ?>" alt="" class="block__image">                   
                </div>        
            </div>   

        </div>       
        
    </div>
</section>