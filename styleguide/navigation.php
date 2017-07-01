<!DOCTYPE html>
<html lang="en">
<head>
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
        <li><a href="layout.php" class="secondary-nav-link">Layout</a></li>
        <li><a href="branding.php" class="secondary-nav-link">Branding</a></li>
        <li><a href="typography.php" class="secondary-nav-link">Typography</a></li>
        <li><a href="navigation.php" class="secondary-nav-link sg-active-tab">Navigation</a></li>
        <li><a href="grids.php" class="secondary-nav-link">CSS Grids</a></li>
        <li><a href="elements.php" class="secondary-nav-link">HTML Elements</a></li>
        <li><a href="references.php" class="secondary-nav-link">References</a></li>
      </ul>
    </nav>
    <main>

      <div class="container">

        <h2>Navigation</h2>
        <h3>Main Navigation</h3>
        <p>The main navigation is sticky to the top of the viewport and is always visible. I've placed a slight transparency on the background color so you can see the content slide underneath as you scroll. I would love to figure out how to implement a background blur without breaking the navigation - that's still a work in progress. For now the links have a hover and active state with a very subtle transition between states. Go ahead and click the links, it won't take you anywhere!
        <div class="demo_nav_container">
          <nav class="demo_main_nav">
            <img src="http://greg.golf/images/greg-logo.svg" alt="Greg Sargent" height="60">
            <ul>
              <li><a href="#" class="main-nav-link">Home</a></li>
              <li><a href="#" class="main-nav-link">About</a></li>
              <li><a href="#" class="main-nav-link">Articles</a></li>
              <li><a href="#" class="main-nav-link">Projects</a></li>
              <li><a href="#" class="main-nav-link">Contact</a></li>
            </ul>
          </nav><!-- end demo_main_nav -->
        </div><!-- demo_nav_container -->
        <h3>Secondary Navigation</h3>
        <p>The secondary navigation will be used on content heavy districts within the site, such as this style guide and project pages. Feel free to hover and click on this demo nav, it's not hooked up to anything.</p>
        <nav class="demo_secondary_nav">
        <ul>
          <li><a href="#" class="secondary-nav-link sg-active-tab">Overview</a></li>
          <li><a href="#" class="secondary-nav-link">Layout</a></li>
          <li><a href="#" class="secondary-nav-link">Branding</a></li>
          <li><a href="#" class="secondary-nav-link">Typography</a></li>
          <li><a href="#" class="secondary-nav-link">Navigation</a></li>
          <li><a href="#" class="secondary-nav-link">HTML Elements</a></li>
        </ul>
      </nav>

      </div><!-- end container -->

    </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
