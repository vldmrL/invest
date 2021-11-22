<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
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


<section class=" block" id="<?php echo $template_id; ?>">    
    <div class="container">
        <div class="row">


        </div>
    </div>
</section>



