<!DOCTYPE html>
<html lang="en">
<head>
  <title>How to measure the usability of an app</title>
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.">
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
      <div class="three-fourths column">
        <article>



          <?php // This php pulls in author-snippet.php to create the about me blurb
          include $_SERVER['DOCUMENT_ROOT'].'/modules/author-snippet.php'; ?>

        </article>
      </div>

      <div class="one-fourth column">
        <?php // This php pulls in recent-aside.php to create the content page sidebar content
        include $_SERVER['DOCUMENT_ROOT'].'/modules/recent-aside.php'; ?>
        </aside>
      </div>
    </div><!-- end conlumns -->

</div><!-- end container -->


</main>

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
