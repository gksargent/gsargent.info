<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="/css/main.processed.css">
  <title>Style Guide | Greg Sargent, UI/Ix Designer</title>
  <?php // This php pulls in head.php to create the meta and links
  include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>

  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

<div id="content_wrapper">
  <nav id="secondary_nav">
    <ul>
      <li><a href="index.php" class="secondary-nav-link">Overview</a></li>
      <li><a href="layout.php" class="secondary-nav-link">Layout</a></li>
      <li><a href="branding.php" class="secondary-nav-link">Branding</a></li>
      <li><a href="typography.php" class="secondary-nav-link">Typography</a></li>
      <li><a href="navigation.php" class="secondary-nav-link">Navigation</a></li>
      <li><a href="grids.php" class="secondary-nav-link">CSS Grids</a></li>
      <li><a href="elements.php" class="secondary-nav-link">HTML Elements</a></li>
      <li><a href="references.php" class="secondary-nav-link sg-active-tab">References</a></li>
    </ul>
  </nav>
  <main>
    <h2>References</h2>
    <h3>Links to web design examples</h3>
    <ul>
      <li><a href="http://ux.mailchimp.com/" target="_blank">MailChimp UX Patterns</a> - I love what MailChimp does and keep a close eye on everything they do. I've mimicked their layout in my own style guide and have plans to steal a few more visual design concepts from them too!</li>
      <li><a href="https://atlassian.design/guidelines/marketing/overview" target="_blank">Atlassian Style Guide</a> - I work within Jira everyday, and have had a love/hate relationship with Jira and other Atlassian products, but one thing I really dig is their style guide. I plan on eventually adding my icons and other visual assets into my style guide similar to what Atlassian has done. Very fun and so clean!</li>
      <li><a href="http://www.fiftythree.com/styleguide/typography" target="_blank">53 Typography Style Guide</a> - Eventually I want to display how to use my SCSS variables, mixins and other stuff...and will surface that information like 53 has done here in their typography style guide. If I can figure out how, I'll also make various snippets of code clickable to save the snippet to the clipboard. That would be super cool.</li>
    </ul>

    <h3>Links to stuff I want to learn how to do</h3>
    <ul>
      <li><a href="https://gist.github.com/murtaugh/cac94695bac33dbdba08" target="_blank">ALA Image Snippets</a> - I've been trying to figure out how to serve both standard resolution images and ultra high resolution images, and it looks like this guy has the solution.</a></li>
    </ul>
  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
