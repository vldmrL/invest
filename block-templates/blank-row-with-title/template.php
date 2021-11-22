<?php 
// available fields
[
'title'           => $title,
'some_class'      => $section_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<section class="block <?php echo $section_class; ?>">    
    <div class="container">
        <?php if ( !empty($title) ) { ?>
        <div class="row">
            <div class="col-12">               
                <div class="block__header section-header">
                    <h3 class="section-header__header <?php block_field('title-class'); ?>"><?php echo $title; ?></h3>                        
                </div>               
            </div>
        </div>
        <?php } ?>
        <div class="row">  
            <?php echo $inner; ?>
        </div>
    </div>
</section>



