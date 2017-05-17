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
      <h1>Lesson 4 Walkthrough</h1>
      <p>The objective for this assignment is to create a walkthrough of a css shape, and explain the code behind it.</p>
    </div><!--end pageBanner -->

    <main>

      <video width="100%" controls>
  <source src="/videos/l04-walkthrough.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>

    </main>

    <?php // This php pulls in footer.php to create the footer content
	  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

  </body>
</html>
