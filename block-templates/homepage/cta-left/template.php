<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'image'           => $image,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>
   
<section class="cta-left block <?php echo $some_class; ?>">
    <div class="container">        
        <div class="row">
            <div class="col-12 col-lg-6 cta-left__content-wrap">
                <div class="cta-left__header section-header">
                  <h2 class="section-header__header"><?php echo $title; ?></span></h2>            
                </div>
                <div class="cta-left__content list-cards">
                    <?php echo $inner; ?>
                </div>
            </div>

            <div class="col-12 col-lg-6 cta-left__image-wrap">
                <img src=" <?php echo $image; ?>" alt="" class="cta-left__image">
            </div>
        </div>
        
    </div>
</section>



