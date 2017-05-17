<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Page Template | Greg Sargent - UX/UI Designer</title>
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>

  <body>

    <?php // This php pulls in header.php to create the header content
    include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

    <div id="pageBanner">
      <h1><!-- enter page title here--></h1>
      <!-- enter meta tags here if needed <h6>BYU-I</h6><h6>Spring 2017</h6>-->
      <p><!-- enter page description here --></p>
    </div><!--end pageBanner -->

    <main>


      <!-- Enter content here -->


    </main>

    <?php // This php pulls in footer.php to create the footer content
	  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

  </body>
</html>
