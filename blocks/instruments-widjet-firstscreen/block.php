<section class="instruments-widjet-firstscreen">    
    <div class="container">
        <div class="row block">

            <div class="col-md-6 col-lg-5 block__col"> 
                <div class="block__content">
                    <h1 class="h2 block__title text-gradient--dark" data-aos="fade-in">
                        <?php block_field('title'); ?>
                    </h1>
                    <div class="block__text text-gray--dark" data-aos="fade-up">
                        <?php block_field('text'); ?>
                    </div>
                    <div class="block__bottons">
                        <a href="<?php block_field('button-link'); ?>" class="block__btn btn btn-secondary"><?php block_field('button-text'); ?></a>
                    </div>                
                    <div class="block__small">
                        <span class="block__small-text text-gray--dark"><?php block_field('small-text'); ?></span>
                        <a href="<?php block_field('small-link-url'); ?>" class="block__small-link"><?php block_field('small-link-text'); ?></a>
                    </div> 
                </div>        
            </div>   

            <div class="col-md-6 col-lg-6 offset-lg-1 block__col">  
                <div class="block__widjet bg-dark-1 rounded">
                    <?php get_template_part( block_value('add-class'), null); ?>              
                </div>           
                
            </div>

        </div>
    </div>
</section>