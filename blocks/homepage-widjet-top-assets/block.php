<section class="top-assets  <?php block_field('additional-class'); ?>">
    <div class="container">
        <div class="top-assets__header section-header">
            <h2 class="section-header__header">Top Assets</h2>            
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

