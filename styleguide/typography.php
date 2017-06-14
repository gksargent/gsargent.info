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

<div id="content_wrapper">
  <nav id="secondary_nav">
    <ul>
      <li><a href="index.php" class="secondary-nav-link">Overview</a></li>
      <li><a href="layout.php" class="secondary-nav-link">Layout</a></li>
      <li><a href="branding.php" class="secondary-nav-link">Branding</a></li>
      <li><a href="typography.php" class="secondary-nav-link sg-active-tab">Typography</a></li>
      <li><a href="navigation.php" class="secondary-nav-link">Navigation</a></li>
      <li><a href="elements.php" class="secondary-nav-link">HTML Elements</a></li>
    </ul>
  </nav>
  <main>
    <h2>Typography</h2>
    <h3>Varela Round</h3>
    <p>Google Fonts API served <a href="https://fonts.google.com/specimen/Varela+Round" target="-blank">Varela Round</a> 143 million times last week, and the happy rounded font family is used on more than 310,000 websites throughout the world.</p>
    <h3>Why I use Varela Round</h3>
    <p>As a UI designer, one of my favorite tasks is creating vector icons. And my favorite style of icon is a simple flat outline design. With rounded edges - no sharp corners! If I were to create a font family to match my obsessive style of icon design, it would be Varela Round. Such perfection, such consistency. Each glyph contains the exact same stroke width, with no overly designed and unexpected ears, terminals or shoulders.</p>
    <h3>Heading fonts</h3>
    <h1 class="styleguide-heading-example">Heading 1</h1>
    <h2 class="styleguide-heading-example">Heading 2</h2>
    <h3 class="styleguide-heading-example">Heading 3</h3>
    <h4 class="styleguide-heading-example">Heading 4</h4>
    <h5 class="styleguide-heading-example">Heading 5</h5>
    <h6 class="styleguide-heading-example">Heading 6</h6>
    <h3>Body fonts</h3>
        <p>ABCDEFHIJKLMNOPQRSTUVWXYZ<br>abcdefghijklmnopqrstuvwxyz<br>0123456789<br>!@#$%^&*(){};‘”</p>
  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
