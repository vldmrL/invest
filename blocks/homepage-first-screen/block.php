<section class="first-screen hero bg-dark">    

    <div class="container">

        <div class="row">



            <div class="col-md-6 hero__content-col">

              <div data-aos="fade-right" data-aos-duration="1200">

                <h1 class="hero__title text-gradient--dark" >

                    <?php block_field('title'); ?>

                </h1>

                <h3 class="hero__subtitle text-gray--dark">

                    <?php block_field('subtitle'); ?>

                </h3>

                <a href="#" class="hero__btn btn btn-secondary">Trade Now</a>

               </div>

                <div class="hero__app-links app-links">

                    <div class="app-links__col">

                        <a href="<?php the_field('app-links_apple-download-link', 'options'); ?>" class="app-links__button btn-app -store"></a>

                        <a href="<?php the_field('app-links_google-download-link', 'options'); ?>" class="app-links__button btn-app -google"></a>

                    </div>

                    <div class="app-links__devider"></div>

                    <div class="app-links__col">

                        <img src="<?php the_field('app-links_qr-code-download', 'options'); ?>" alt="google play">

                    </div>

                </div>

                <a href="#" class="hero__link">Commissions & Free Stock Disclosures</a>

            </div>



            <div class="col-md-6 hero__image-col">

                <div class="hero__under-image"></div>

                <img class="hero__image" src="<?php block_field('image'); ?>" alt="app" data-aos="fade-left" data-aos-duration="1200">

            </div>



        </div>

    </div>

</section>