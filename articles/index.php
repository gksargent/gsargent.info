<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Articles | Greg Sargent - UX/UI Designer</title>
    <meta name="description" content="Greg is a UX/UI Designer in the north Dallas area. Specializing in minimal modern design, Greg is currently working in the FinTech industry designing personal financial management tools at Alkami.">
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>
  <body>
    <?php // This php pulls in header.php to create the header content
    include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

    <div class="banner empty-banner">
      <p class="banner-meta-text"> </p>
      <h1 class="banner-heading">Articles</h1>
      <p class="banner-subheading">This is a space for me to share thoughts on being a designer and all the front-end dev stuff I've been learning at school.</p>
      <div class="banner-img">
      </div>
    </div>

    <main>
        <?php // This php pulls in head.php to create the meta and links
        include $_SERVER['DOCUMENT_ROOT'].'/modules/recent-articles.php'; ?>
        <?php // This php pulls in head.php to create the meta and links
        include $_SERVER['DOCUMENT_ROOT'].'/modules/all-articles.php'; ?>
    </main>



  <?php // This php pulls in footer.php to create the footer content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
