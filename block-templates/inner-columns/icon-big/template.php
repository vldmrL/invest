<?php 
// available fields
[
'image'           => $image,
'title'           => $title,
'text'            => $text,
'some_class'      => $column_classes,
'some_id'         => $some_id,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>


<div class="col <?php echo $column_classes; ?>">
    <div class="block__inner-wrapper d-flex flex-column <?php block_field('add-class'); ?>">
        <?php if ( !empty($image) ) { ?>
            <div class="mb-2">
                <img class="block-icon--big" src="<?php echo $image; ?>">
            </div>            
        <?php } ?>
        <?php if ( !empty($title) ) { ?>
            <h3 class="mb-2"><?php echo $title; ?></h3>
        <?php } ?>
        <?php if ( !empty(block_value('text')) ) { ?>
            <p class="mb-2"><?php echo $text; ?></p>
        <?php } ?>       
    </div>
</div>