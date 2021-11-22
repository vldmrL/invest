<?php 
// available fields
[
'title'           => $title,
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



  
<section class="homepage-widjet-top-weekly block <?php echo $some_class; ?>">
    <div class="container">
        <div class="row">
            <?php if ( !empty($title) ) { ?>
            <div class="col-12">
                <div class="block__header section-header">
                    <h3 class="section-header__header text-center"><?php echo $title; ?></h2>                   
                </div>
            </div>
            <?php } ?>
            <div class="col-12">
                <div class="block__widjet">
                    <?php get_template_part('template-parts/tradeview-widjets/graph/top-weekly'); ?>
                </div>
            </div>

        </div>
    </div>
</section>

