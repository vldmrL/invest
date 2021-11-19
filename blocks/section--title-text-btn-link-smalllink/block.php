<?php

if ( !empty( block_value('template')) ) {
    get_template_part( block_value('template'), null, array(
        'title' => block_value('title'),
        'text' => block_value('text'),
        'button_link' => block_value('button-link'),
        'button_text' => block_value('button-text'),
        'small_text' => block_value('small-text'),
        'small_link_url' => block_value('small-link-url'),
        'small_link_text' => block_value('small-link-text'), 
        'add_class' => block_value('add-class'),
    ) );
}

?>

