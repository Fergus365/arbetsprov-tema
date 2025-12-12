<?php
$gallery_title = get_field("gallery_title");
$images = [];

// Hämtar alla bilder
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
          <a href="<?php echo esc_url($image['url']); ?>" class="glightbox" data-gallery="acf-gallery">
          <img 
            src="<?php echo esc_url($image['url']); ?>">
      </a>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>
