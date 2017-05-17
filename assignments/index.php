<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Class Assignments | Greg Sargent - UX/UI Designer</title>
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>

  <body>

    <?php // This php pulls in header.php to create the header content
    include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

    <div id="pageBanner">
      <h1>Class Assignments</h1>
      <p>If there's as assignment I can share, I'll post it here!</p>
    </div><!--end pageBanner -->

    <main>


      <?php // This php pulls in assignments.php to populate content
      include $_SERVER['DOCUMENT_ROOT'].'/modules/assignments-content.php'; ?>


    </main>

    <?php // This php pulls in footer.php to create the footer content
	  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

  </body>
</html>
