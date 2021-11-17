<section class="instruments-faq">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block__header section-header">
                    <h2 class="section-header__header"><?php block_field('title'); ?></h2>
                    <?php if ( !empty(block_field('subtitle')) ) { ?>
                        <p class="section-header__text"><?php block_field('subtitle'); ?></p>
                    <?php } ?>
                </div>
                <div class="block__content ">


                <div class="accordion" id="faqAccordion">

                    <div class="accordion__item">
                        <div class="accordion__header" id="headingOne">
                        <h4 class="mb-0" type="button" data-toggle="collapse" data-target="#faq-1" aria-expanded="true" aria-controls="faq-1">                           
                            Collapsible Group Item #1                            
                        </h4>
                        </div>
                        <div id="faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body">
                            Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                        </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <div class="accordion__header" id="headingOne">
                        <h4 class="mb-0" type="button" data-toggle="collapse" data-target="#faq-2" aria-expanded="true" aria-controls="faq-2">                           
                            Collapsible Group Item #2                            
                        </h4>
                        </div>
                        <div id="faq-2" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body">
                            Some placeholder content for the 2 accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                        </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <div class="accordion__header" id="headingOne">
                        <h4 class="mb-0" type="button" data-toggle="collapse" data-target="#faq-3" aria-expanded="true" aria-controls="faq-3">                           
                            Collapsible Group Item #3                            
                        </h4>
                        </div>
                        <div id="faq-3" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body">
                            Some placeholder content for the 3 accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                        </div>
                        </div>
                    </div>

                </div>








                </div>
            </div>
        </div>
    </div>
</section>