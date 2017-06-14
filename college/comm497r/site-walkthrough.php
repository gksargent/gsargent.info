<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>COMM497R Site Walkthrough | Greg Sargent - UX/UI Designer</title>
    <meta name="description" content="Greg is a UX/UI Designer in the north Dallas area. Specializing in minimal modern design, Greg is currently working in the FinTech industry designing personal financial management tools at Alkami.">
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>

<body>

  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

  <div id="banner">
    <h1>COMM497R Site Walkthrough</h1>
    <p>All semester we have been learning the ins and outs of WordPress, and this video shows the site I have been working on and some of my thoughts on the topic.</p>
  </div>

  <main>

    <video controls preload="metadata">
      <source src="/video/website-demo.mp4" type="video/mp4">
        Oops it looks like something went wrong. Try refreshing the page. If you continue to have problems loading this video, try in a different browser like Chrome or Firefox.
    </video>

  </main>


  <?php // This php pulls in footer.php to create the footer content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
