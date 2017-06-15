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
      <li><a href="typography.php" class="secondary-nav-link">Typography</a></li>
      <li><a href="navigation.php" class="secondary-nav-link">Navigation</a></li>
      <li><a href="elements.php" class="secondary-nav-link sg-active-tab">HTML Elements</a></li>
    </ul>
  </nav>
  <main>
    <h2>HTML Elements</h2>
    <p>Here are all the elements I'll be using throughout the site.</p>
    <h3>Headings</h3>
    <p>See <a href="/styleguide/typography.php">Typography</a></p>
    <h3>Lists</h3>
    <ul>Unordered List
      <li>List item</li>
      <li>List item</li>
      <li>List item</li>
    </ul>
    <br>
    <ol>Ordered List
      <li>List item</li>
      <li>List item</li>
      <li>List item</li>
    </ol>
    <h3>Links</h3>
    <p>I want to treat links a little different than the body copy, but not so stark a difference with crazy colors that it's jarring. I've placed a whitesmoke background with 5px left/right padding and 3px top/bottom padding. There's also a slightly heavier font treatment. With a nice hover state, the text links create a beautifully simple experience for the viewer.</p>
    <p><a href="#">Text link</a></p>
    <h3>Paragraphs</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
    <h3>Figure &amp; Figcaption</h3>
    <figure>
      <img src="/assets/images/gregs-office-optimized.jpg" alt="A photo of my office space at home">
      <figcaption><i>Fig 1</i> My home office - bright and happy!</figcaption>
    </figure>
  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
