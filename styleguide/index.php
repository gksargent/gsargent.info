<!DOCTYPE html>
<html lang="en">
<head>
  <title>Style Guide | Greg Sargent, UI/Ix Designer</title>
  <meta name="description" content="Greg is a UX/UI Designer in the north Dallas area. Specializing in minimal modern design, Greg is currently working in the FinTech industry designing personal financial management tools at Alkami.">
  <?php // This php pulls in head.php to create the meta and links
  include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>
  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

<div class="content_wrapper">

  <nav class="secondary_nav">
    <ul>
      <li><a href="index.php" class="secondary-nav-link sg-active-tab">Overview</a></li>
      <li><a href="layout.php" class="secondary-nav-link">Layout</a></li>
      <li><a href="branding.php" class="secondary-nav-link">Branding</a></li>
      <li><a href="typography.php" class="secondary-nav-link">Typography</a></li>
      <li><a href="navigation.php" class="secondary-nav-link">Navigation</a></li>
      <li><a href="grids.php" class="secondary-nav-link">CSS Grids</a></li>
      <li><a href="elements.php" class="secondary-nav-link">HTML Elements</a></li>
      <li><a href="references.php" class="secondary-nav-link">References</a></li>
    </ul>
  </nav>

  <main>

    <div class="container">

      <h2>Overview</h2>
      <h3>Site Purpose</h3>
      <p>This site serves two purposes:</p>
      <ul>
        <li>share my experiences and things I've learned through the projects and articles pages</li>
        <li>practice all the front end development stuff I've been learning while studying at BYU.</li>
      </ul>
      <p>One of the things that I've learned over the past few years is that being a UI designer is not about designing killer marketing sites, or social media assets, or display banners...but instead designing systems of componenets.</p>
      <p>This style guide outlines my design system. Take a look around and let me know what you think.</p>
      <h3>Target Audience</h3>
      <p>Since I'm not trying to sell a product or service, my target audience is not segmented up by standard marketing demographics - rather I'm focused on creating a simplistic experience that delights a range of visitors. On any given day I could have a fellow classmate visit to check in on the status of a project, a fellow coworker seeing what I'm up to outside of work or a stakeholder at an organization looking to hire a designer. </p>
      <h3>About This Style Guide</h3>
      <p>This site has been designed and coded from scratch. This is not a WordPress, Squarespace or Webflow generated site. I've done everything by hand, which I'm super proud of! The only downside to maintaining a site manually is that common elements tend to get recreated over and over with variances and changes in the both the code and design. So to keep things nice and consistent, the rest of these sections aim to keep me doing the same things and building out the site in a consistently beautiful way.</p>

      <?php // This php pulls in footer.php to create the footer content
      include $_SERVER['DOCUMENT_ROOT'].'/modules/author-snippet.php'; ?>

    </div><!-- end container -->

  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
