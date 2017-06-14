<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>BYU-I Web Design &amp; Development | Greg Sargent - UX/UI Designer</title>
    <meta name="description" content="Greg is a UX/UI Designer in the north Dallas area. Specializing in minimal modern design, Greg is currently working in the FinTech industry designing personal financial management tools at Alkami.">
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>

<body>

  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

  <div id="banner">
    <h1>BYU-I Web Design &amp; Development</h1>
    <p>I'm currently a junior at Brigham Young University Idaho working on a BS in web design and development with an emphasis on design. Here I'll include links to work I've completed for classes and little things that I'm learning about.</p>
  </div>

  <main>
    <h2>COMM497R - Special Topics Practicum</h2>
    <a href="/college/comm497r/site-walkthrough.php" target="_self">Class site walkthrough</a>
    <hr>
    <h2>CIT301B - Advanced CSS</h2>
    <a href="/college/cit301b/zengarden.php" target="_self">ZenGarden group project</a>
  </main>


  <?php // This php pulls in footer.php to create the footer content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
