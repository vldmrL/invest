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

<div class="info-cards__col <?php echo $column_classes; ?>">
    <div class="info-cards__item frame info-card" data-aos="fade-up">
        <img src="<?php echo $image; ?>" alt="" class="info-card__icon">
        <h5 class="info-card__title"><?php echo $title; ?></h5>
        <p class="info-card__text"><?php echo $text; ?></p>
    </div>
</div>