<!DOCTYPE html>
<html lang="en">
<head>
  <title>Style Guide | Greg Sargent, UI/Ix Designer</title>
  <?php // This php pulls in head.php to create the meta and links
  include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>

  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

<div class="content_wrapper">
  <nav class="secondary_nav">
    <ul>
      <li><a href="index.php" class="secondary-nav-link">Overview</a></li>
      <li><a href="layout.php" class="secondary-nav-link">Layout</a></li>
      <li><a href="branding.php" class="secondary-nav-link sg-active-tab">Branding</a></li>
      <li><a href="typography.php" class="secondary-nav-link">Typography</a></li>
      <li><a href="navigation.php" class="secondary-nav-link">Navigation</a></li>
      <li><a href="grids.php" class="secondary-nav-link">CSS Grids</a></li>
      <li><a href="elements.php" class="secondary-nav-link">HTML Elements</a></li>
      <li><a href="references.php" class="secondary-nav-link">References</a></li>
    </ul>
  </nav>
  <main>
    <div class="container">
    <h2>Branding</h2>
    <h3>Website Logo</h3>
    <img src="http://greg.golf/images/greg-logo.svg" alt="Greg Sargent" height="200">
    <h3>Color Pallette</h3>
    <div class="color_swatches">
      <span class="color_swatch_primary-color"></span>
      <span class="color_swatch_secondary-color"></span>
      <span class="color_swatch_filled-box-color"></span>
      <span class="color_swatch_tertiary-color"></span>
    </div><!-- end color_swatches -->
    <p>Users of modern applications and websites expect a tasteful and minimal experience, which is why I try to limit UI elements to just a few shades of gray with a splash of color to call attention. I use four base colors for the typography and buttons, and then scss color functions to generate drop shadows, hover states, etc.</p>
    <div class="color-data">
      <span class="color_swatch_primary-color"></span>
      <p><span class="meta-text">hex</span>#333333<span class="meta-text">rgb</span>51, 51, 51</p>
    </div><!-- end color-data -->
    <div class="color-data">
      <span class="color_swatch_secondary-color"></span>
      <p><span class="meta-text">hex</span>#707070<span class="meta-text">rgb</span>112, 112, 112</p>
    </div><!-- end color-data -->
    <div class="color-data">
      <span class="color_swatch_filled-box-color"></span>
      <p><span class="meta-text">hex</span>#f0f0f0<span class="meta-text">rgb</span>240, 240, 240</p>
    </div><!-- end color-data -->
    <div class="color-data">
      <span class="color_swatch_tertiary-color"></span>
      <p><span class="meta-text">hex</span>#333333<span class="meta-text">rgb</span>255, 87, 51</p>
    </div><!-- end color-data -->
  </div><!--end container -->
  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
