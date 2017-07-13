<!DOCTYPE html>
<html lang="en">
<head>
  <title>Projects | Greg Sargent, UI/Ix Designer</title>
  <meta name="description" content="Greg is a UX/UI Designer in the north Dallas area. Specializing in minimal modern design, Greg is currently working in the FinTech industry designing personal financial management tools at Alkami.">
  <?php // This php pulls in head.php to create the meta and links
  include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>
  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

  <div class="banner empty-banner">
    <p class="banner-meta-text"> </p>
    <h1 class="banner-heading">Projects</h1>
    <p class="banner-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
    <div class="banner-img">
    </div>
  </div>

  <main>
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/recent-projects.php'; ?>
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/all-projects.php'; ?>
  </main>

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
