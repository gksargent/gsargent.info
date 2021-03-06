<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample Project</title>
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.">
  <?php // This php pulls in head.php to create the meta and links
  include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>
  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

  <div class="banner">
  <p class="banner-meta-text">Meta text</p>
  <h1 class="banner-heading">Sample Project</h1>
  <p class="banner-subheading">Short blurb or description here, and a little more text to get the line to wrap.</p>
  <div class="banner-img">
  </div>
</div>

<main>

<div class="container">

  <div class="columns">
      <div class="three-fourths column">
        <article>
          <h2>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Donec elementum ligula eu sapien consequat eleifend. </p>

<p>Donec nec dolor erat, condimentum sagittis sem. Praesent porttitor porttitor risus, dapibus rutrum ipsum gravida et. Integer lectus nisi, facilisis sit amet eleifend nec, pharetra ut augue. Integer quam nunc, consequat nec egestas ac, volutpat ac nisi. </p>

<p>Sed consectetur dignissim dignissim. Donec pretium est sit amet ipsum fringilla feugiat. Aliquam erat volutpat. Maecenas scelerisque, orci sit amet cursus tincidunt, libero nisl eleifend tortor, vitae cursus risus mauris vitae nisi. Cras laoreet ultrices ligula eget tempus. </p>

<p>Aenean metus purus, iaculis ut imperdiet eget, sodales et massa. Duis pellentesque nisl vel massa dapibus non lacinia velit volutpat. Maecenas accumsan interdum sodales. In hac habitasse platea dictumst. Pellentesque ornare blandit orci, eget tristique risus convallis ut. Vivamus a sapien neque. </p>

<h3>Lorem Ipsum Dolor Sit Am</h3>

<p>Nam quis sem orci. Phasellus ligula tellus, lobortis nec accumsan eget, mattis at erat. </p>

    </article>
      </div>

      <div class="one-fourth column">
        <aside id="project-details">
          <img src="http://via.placeholder.com/200x100">
          <h3>Client</h3>
          <p>Client Name Here</p>
          <h3>Project Timeframe</h3>
          <p>Project timeframe here</p>
          <h3>Software Used</h3>
          <p>Software 1, Software 2, Software 3</p>
          <h3>Project Description</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </aside>
      </div>
    </div><!-- end conlumns -->

</div><!-- end container -->


</main>

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
