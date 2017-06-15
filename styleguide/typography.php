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
    <h3>San Francisco, Segoe &amp; Roboto</h3>
    <p>Major tech companies like Apple, Microsoft and Google have invested massive resources into designing and optimizing the perfect fonts for their system, and the legibility of these fonts are fantastic. And so I thought wouldn't it be pretty sweet to dynamically serve these fonts to visitors of my website. By dynamically serve I mean serve Mac &amp; iOS users the <a href="https://developer.apple.com/fonts/" target="_blank">San Francisco</a> font, Windows users the <a href="https://en.wikipedia.org/wiki/Segoe" target="_blank">Segoe</a> font and Android users <a href="https://fonts.google.com/specimen/Roboto" target="_blank">Roboto</a>. Since these users are already accustomed to these fonts, seeing them on a website would feel natural and familiar. I set out to make it so. Here's the article I found: <a href="https://booking.design/implementing-system-fonts-on-booking-com-a-lesson-learned-bdc984df627f" target="_blank">Medium article.</a></p>
    <h3>Heading font treatment</h3>
    <h1 class="styleguide-heading-example">Heading 1</h1>
    <h2 class="styleguide-heading-example">Heading 2</h2>
    <h3 class="styleguide-heading-example">Heading 3</h3>
    <h6 class="styleguide-heading-example">Heading 6</h6>
    <h3>Body font treatment</h3>
    <p>ABCDEFHIJKLMNOPQRSTUVWXYZ<br>abcdefghijklmnopqrstuvwxyz<br>0123456789<br>!@#$%^&*(){};‘”</p>
    <h3>Preformatted font treatment</h3>
    <pre>.class {
  display: block;
  width: 600px;
  background-color: whitesmoke;
}</pre>

  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
