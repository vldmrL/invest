<section class="instruments-text-left <?php block_field('add-class'); ?>">
    <div class="container block">
        <div class="block__header section-header">
            <h2 class="section-header__header <?php block_field('title-class'); ?>"><?php block_field('title'); ?></h2>
            <?php if ( !empty(block_value('subtitle')) ) { ?>
                <p class="section-header__text"><?php block_field('subtitle'); ?></p>
            <?php } ?>
        </div>

        <div class="row">

            <div class="col-md-6 col-lg-5 block__col"> 
                <div class="block__left">                    
                    <div class="block__text text-gray--dark mb-inner"  data-aos="fade-up">
                        <?php block_field('text'); ?>
                    </div>
                    <?php if ( !empty(block_value('button-text'))  ) { ?>
                        <div class="block__bottons">
                            <a href="<?php block_field('button-link'); ?>" class="block__btn btn btn-outline-secondary"><?php block_field('button-text'); ?></a>
                        </div>  
                    <?php } ?>                    
                </div>        
            </div>  
            
            <div class="col-md-6 col-lg-6 offset-lg-1 block__col"> 
                <div class="block__right rounded border bg-darker px-4 py-4">
                    <?php block_field('inner'); ?>
                    <!-- <img src="" alt="" class="block__image">                    -->
                </div>        
            </div>   

        </div>       
        
    </div>
</section>