<?php 
// available fields
[
'title'           => $title,
'text'            => $text,
'button_link'     => $button_link,
'button_text'     => $button_text,
'small_text'      => $small_text,
'small_link_url'  => $small_link_url,
'small_link_text' => $small_link_text,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script($template_id, $template_path.".js");  // load template.js from same folder (in footer, no order control).
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>


<section class="instruments-firstscreen block" id="<?php echo $template_id; ?>">    
    <div class="container">
        <div class="row block">

            <div class="col-md-6 col-lg-5 block__col"> 
                <div class="block__content">
                    <h1 class="h2 block__title text-gradient--dark" data-aos="fade-in">
                        <?php echo $title; ?>
                    </h1>
                    <div class="block__text text-gray--dark" data-aos="fade-up">
                        <?php echo $text; ?>
                    </div>
                    <div class="block__bottons">
                        <a href="<?php echo $button_link; ?>" class="block__btn btn btn-secondary"><?php echo $button_text; ?></a>
                    </div>                
                    <div class="block__small">
                        <span class="block__small-text text-gray--dark"><?php echo $small_text; ?></span>
                        <a href="<?php echo $small_link_url; ?>" class="block__small-link"><?php echo $small_link_text; ?></a>
                    </div> 
                </div>        
            </div>   

            <div class="col-md-6 col-lg-6 offset-lg-1 block__col">  
                <div class="block__widjet bg-dark-1 rounded">
                    <?php get_template_part( 'template-parts/tradeview-widjets/market-overview/widjet' ); ?>
                    <?php
                    //echo $inner; 
                    ?>
                </div>           
                
            </div>

        </div>
    </div>
</section>



