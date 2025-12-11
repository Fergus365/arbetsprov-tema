<?php
$gallery_title = get_field("gallery_title");
$images = [];

for ($i = 1; $i <= 5; $i++) {
    $img = get_field("gallery_image_$i");
    if ($img) {
        $images[] = $img;
    }
}
?>

<section class="container block-gallery">
    <?php if($gallery_title): ?>
      <h2 class="gallery-title"><?php echo esc_html($gallery_title); ?></h2>
    <?php endif; ?>
  <div class="gallery-grid">
    <?php if ($images): ?>
      <?php foreach ($images as $image): ?>
        <div class="gallery-item">
          <img 
            src="<?php echo esc_url($image['sizes']['full'] ?? $image['url']); ?>" 
            alt="<?php echo esc_attr($image['alt']); ?>">
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>Inga bilder tillagda</p>
    <?php endif; ?>
  </div>
</section>
