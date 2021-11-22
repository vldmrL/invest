<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
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


<section class="top-assets  <?php echo $some_class; ?>">
    <div class="container">
        <div class="top-assets__header section-header">
            <h2 class="section-header__header"><?php echo $title; ?>"></h2>            
        </div>
        
        <div class="row top-assets__row">

            <div class="col-12 col-lg-4 top-assets__item">
                <div class="top-assets__item-wrap asset card">
                    <?php
                    if ( empty(block_value('symbol1')) ) {
                        $symbol1 = block_value('symbol1'); //needs fix
                    } else {
                        $symbol1 = block_value('symbol1');
                    }
                    get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array(
                        'symbol' => $symbol1                      
                    ));
                    ?>
                </div>         
            </div>
            
            <div class="col-12 col-lg-4 top-assets__item">
                <div class="top-assets__item-wrap asset card">
                    <?php
                    if ( empty(block_value('symbo2l')) ) {
                        $symbol2 = block_value('symbol2'); //needs fix
                    } else {
                        $symbol2 = block_value('symbol2');
                    }
                    get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array(
                        'symbol' => $symbol2                        
                    ));
                    ?>
                </div>   
            </div>    

            <div class="col-12 col-lg-4 top-assets__item">
                <div class="top-assets__item-wrap asset card">
                    <?php
                    if ( empty(block_value('symbol3')) ) {
                        $symbol3 = block_value('symbol3'); //needs fix
                    } else {
                        $symbol3 = block_value('symbol3');
                    }
                    get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array(
                        'symbol' => $symbol3                      
                    ));
                    ?>
                </div>   
            </div>

        </div>
    </div>
</section>


<?php unset($symbol1, $symbol2, $symbol3); ?>




