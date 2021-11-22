<?php 
// available fields
[
'title'           => $title,
// 'subtitle'        => $subtitle,
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

<section class="payment-systems block <?php echo $some_class; ?>">
    <div class="container">
        <div class="payment-systems__header section-header">
            <h2 class="section-header__header"><?php echo $title; ?></h2>
        </div>
        <div class="payment-systems__wrapper">
            <div class="payment-systems__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/payments/apple.jpg" alt="" class="payment-systems__image">
            </div>
            <div class="payment-systems__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/payments/google.jpg" alt="" class="payment-systems__image">
            </div>
            <div class="payment-systems__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/payments/PayPal.jpg" alt="" class="payment-systems__image">
            </div>
            <div class="payment-systems__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/payments/visa.jpg" alt="" class="payment-systems__image">
            </div>
            <div class="payment-systems__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/payments/mastercard.jpg" alt="" class="payment-systems__image">
            </div>
        </div>
    </div>
</section>


