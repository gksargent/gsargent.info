<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Greg Sargent - UX/UI Designer</title>
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

  <div class="content_wrapper">
  <main>
    <div class="container">
      <h2>More stuff coming soon...</h2>

      <p>I'll eventually have my portfolio here, and I'll be working on it slowly over time. My main focus is on finishing up my degree and designing banking software at Alkami.</p>
    </div><!-- end container -->


  </main>
</div><!-- end content_wrapper -->

<div class="cta-container">
  <div class="columns">
    <div class="cta-left" class="one-half column">
      <p>Work with a purpose</p>
      <form method="get" action="#">
        <button class="primary-button" type="submit">My Work</button>
      </form>
    </div> <!-- end half column -->
    <div class="cta-right" class="one-half column">
      <p>Study with a purpose</p>
      <form method="get" action="#">
        <button class="primary-button" type="submit">My Studies</button>
      </form>
    </div> <!-- end half column -->
  </div><!-- end columns -->
</div><!-- end cta-container -->


  <?php // This php pulls in footer.php to create the footer content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
