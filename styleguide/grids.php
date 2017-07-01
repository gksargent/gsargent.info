<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/css/main.processed.css">
  <title>Style Guide | Greg Sargent, UI/Ix Designer</title>
  <?php // This php pulls in head.php to create the meta and links
  include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>

  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

<div class="content_wrapper">
  <nav class="secondary_nav">
    <ul>
      <li><a href="index.php" class="secondary-nav-link">Overview</a></li>
      <li><a href="layout.php" class="secondary-nav-link">Layout</a></li>
      <li><a href="branding.php" class="secondary-nav-link">Branding</a></li>
      <li><a href="typography.php" class="secondary-nav-link">Typography</a></li>
      <li><a href="navigation.php" class="secondary-nav-link">Navigation</a></li>
      <li><a href="grids.php" class="secondary-nav-link sg-active-tab">CSS Grids</a></li>
      <li><a href="elements.php" class="secondary-nav-link">HTML Elements</a></li>
      <li><a href="references.php" class="secondary-nav-link">References</a></li>
    </ul>
  </nav>
  <main>

    <div class="container">

      <h2>CSS Grids</h2>
      <p>I'm using a super simple CSS grid to organize everything within the <tt>main</tt> tags. Based on the GitHub <a href="http://primercss.io/" target="_blank">Primer CSS Toolkit</a> concepts (not using the actual toolkit).</p>
      <h3>Basic Grid Visualization</h3>

      <div class="sg-container">

        <!-- full column example -->

        <div class="sg-columns">
          <div class="sg-full sg-column">
            <pre>.full</pre>
          </div> <!-- end full column -->
        </div><!-- end columns -->



        <!-- two column example -->

        <div class="sg-columns">
          <div class="sg-one-half sg-column">
            <pre>.one-half</pre>
          </div> <!-- end half column -->
          <div class="sg-one-half sg-column">
            <pre>.one-half</pre>
          </div> <!-- end half column -->
        </div><!-- end columns -->



        <!-- three column example -->

        <div class="sg-columns">
          <div class="sg-one-third sg-column">
            <pre>.one-third</pre>
          </div> <!-- end third column -->
          <div class="sg-one-third sg-column">
            <pre>.one-third</pre>
          </div> <!-- end third column -->
          <div class="sg-one-third sg-column">
            <pre>.one-third</pre>
          </div> <!-- end third column -->
        </div><!-- end columns -->



        <!-- four column example -->

        <div class="sg-columns">
          <div class="sg-one-fourth sg-column">
            <pre>.one-fourth</pre>
          </div> <!-- end fourth column -->
          <div class="sg-one-fourth sg-column">
            <pre>.one-fourth</pre>
          </div> <!-- end fourth column -->
          <div class="sg-one-fourth sg-column">
            <pre>.one-fourth</pre>
          </div> <!-- end fourth column -->
          <div class="sg-one-fourth sg-column">
            <pre>.one-fourth</pre>
          </div> <!-- end fourth column -->
        </div><!-- end columns -->

      </div><!-- end container -->



      <h3>Uneven Grid Visualization</h3>

      <div class="sg-container">

        <div class="sg-columns">
          <div class="sg-one-fifth sg-column">
            <pre>.one-fifth</pre>
          </div>
          <div class="sg-four-fifths sg-column">
            <pre>.four-fifth</pre>
          </div>
        </div><!-- end columns -->

        <div class="sg-columns">
          <div class="sg-one-fourth sg-column">
            <pre>.one-fourth</pre>
          </div>
          <div class="sg-three-fourths sg-column">
            <pre>.three-fourths</pre>
          </div>
        </div><!-- end conlumns -->

        <div class="sg-columns">
          <div class="sg-one-third sg-column">
            <pre>.one-third</pre>
          </div>
          <div class="sg-two-thirds sg-column">
            <pre>.two-thirds</pre>
          </div>
        </div><!-- end conlumns -->

      </div><!-- end container -->

    </div><!-- end container -->


  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
