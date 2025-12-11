<?php
$text = get_field('text_image_text');
$textArea = get_field('text_image_textarea');
$image = get_field('text_image_image');
?>

<section class="block-text-image">
  <div class="container text-image-container">

    <div class="text-wrap">
        <?php if($text): ?>
        <h2><?php echo esc_html($text);?></h2>
    <?php endif; ?>

    <?php if($textArea): ?>
        <p><?php echo esc_html($textArea);?></p>
    <?php endif; ?>
    </div>
    <?php if($image): ?>
      <div class="image-wrap">
        <img src="<?php echo esc_url($image['sizes']['large']); ?>">
      </div>
    <?php endif; ?>
  </div>
</section>
