<?php
// Förväntar ACF-fält: hero_title, hero_subtitle, hero_image
$hero_image = get_field('hero_image');
$hero_peach = get_field('hero_peach');
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_button_link = get_field('hero_button_link');
$hero_button_text = get_field('hero_button_text');
?>

<section class="block-hero" style="background-image: url('<?php echo esc_url($hero_image); ?>');">
  <div class="hero-inner container">
    <div class="hero-box">
      <?php if($hero_peach): ?>
      <span class="hero-peach"><?php echo esc_html($hero_peach); ?></span>
    <?php endif; ?>
 <?php if($hero_title): ?>
      <h1 class="hero-title"><?php echo esc_html($hero_title); ?></h1>
    <?php endif; ?>

    <?php if($hero_subtitle): ?>
      <p class="hero-sub"><?php echo esc_html($hero_subtitle); ?></p>
    <?php endif; ?>

    <?php if($hero_button_text): ?>
      <a class="hero-button" href="<?php echo esc_html($hero_button_link); ?>"><?php echo esc_html($hero_button_text); ?></a>
    <?php endif; ?>
    </div>
  </div>
</section>
