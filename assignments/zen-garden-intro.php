<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Zen Garden Intro | Greg Sargent - UX/UI Designer</title>
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>

  <body>

    <?php // This php pulls in header.php to create the header content
    include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

    <div id="pageBanner">
      <h1>Zen Garden Intro</h1>
      <p>The objective for this assignment is to begin planning a Zen Garden design by deciding on a theme, generating a wireframe and establishing a plan to move forward.</p>
    </div><!--end pageBanner -->

    <main>

      <h6>Group Members</h6>
      <p>Gregory Sargent</p>
      <p>McKenzie Taggart</p>
      <p>Tyler Wilhelm</p>
      <hr>

      <h2>Theme </h2>
      <p>As of this moment the group is working within the minimal design aesthetic; utilizing lots of white space, straight clean lines, high contrast fonts and subtle grays. A single accent color will be used for buttons, hover states, etc. </p>

      <h2>Wireframes</h2>
      <h6>Desktop Wireframe</h6>
      <p><img src='/images/desktop-wireframe.png' width='100%'></p>

      <h6>Mobile Wireframes</h6>
      <p><img src='/images/mobile-wireframe.png' width='100%'></p>

    </main>

    <?php // This php pulls in footer.php to create the footer content
	  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

  </body>
</html>
