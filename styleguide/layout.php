<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="/css/main.processed.css">
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
      <li><a href="layout.php" class="secondary-nav-link sg-active-tab">Layout</a></li>
      <li><a href="branding.php" class="secondary-nav-link">Branding</a></li>
      <li><a href="typography.php" class="secondary-nav-link">Typography</a></li>
      <li><a href="navigation.php" class="secondary-nav-link">Navigation</a></li>
      <li><a href="grids.php" class="secondary-nav-link">CSS Grids</a></li>
      <li><a href="elements.php" class="secondary-nav-link">HTML Elements</a></li>
      <li><a href="references.php" class="secondary-nav-link">References</a></li>
    </ul>
  </nav>
  <main>

    <div class="container">

      <h2>Layout</h2>
      <h3>Sitemap</h3>
      <img src="/assets/images/sitemap.png" width="100%" alt="Landing Page Wireframe">
      <h3>Wireframes</h3>
          <img src="/assets/images/landing-page-wireframe@2x.png" width="100%" alt="Landing Page Wireframe">
          <img src="/assets/images/content-page-wireframe@2x.png" width="100%" alt="Content Page Wireframe">

      <h3>Photoshop Design</h3>
      <p>Typically I do all my design work using Sketch, but for this school project the class is working in Photoshop. Download my psd file and see how I've set up the grid, layers and layer comps!</p>
      <form method="get" action="/assets/files/960_grid_12_col.psd">
    <button class="primary-button" type="submit">Download PSD</button>
  </form>

    </div><!-- end container -->

  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
