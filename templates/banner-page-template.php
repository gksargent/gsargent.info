<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Page Template | Greg Sargent - UX/UI Designer</title>
    <meta name="description" content="Greg is a UX/UI Designer in the north Dallas area. Specializing in minimal modern design, Greg is currently working in the FinTech industry designing personal financial management tools at Alkami.">
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>
  <body>
    <?php // This php pulls in header.php to create the header content
    include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

    <div class="banner">
      <p class="banner-meta-text">Meta text</p>
      <h1 class="banner-heading">Page or article title</h1>
      <p class="banner-subheading">Short blurb or description here, and a little more text to get the line to wrap.</p>
      <div class="banner-img">
      </div>
    </div>

  <main>

    <div class="container">

      <div class="columns">
        <div class="full column">
          <h2>Secondary heading</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
        </div> <!-- end full column -->
      </div><!-- end columns -->

    </div><!-- end container -->


  </main>



  <?php // This php pulls in footer.php to create the footer content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
