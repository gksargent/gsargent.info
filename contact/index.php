<?php

  if($_POST["message"]) {
    mail("gksargent@gmail.com", "New message from gsargent.info contact page", $_POST["message"], "From:an@email.address");
  }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/css/main.processed.css">
  <title>College | Greg Sargent, UI/Ix Designer</title>
  <meta name="description" content="Greg is a UX/UI Designer in the north Dallas area. Specializing in minimal modern design, Greg is currently working in the FinTech industry designing personal financial management tools at Alkami.">
  <?php // This php pulls in head.php to create the meta and links
  include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>
  <?php // This php pulls in header.php to create the header content
  include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

<div class="content_wrapper">

  <main>
    <div class="container">
        <div class="columns">

          <div class="one-half column">
            <h2>Howdy! Send me a message.</h2>
            <p>If you want to talk about a project or just say hi, drop me a few lines below.
            <form method="post" action="#">
          <input type="text"
                 placeholder="First Name"
                 required="required"/>
          <input type="email"
                 placeholder="Email"
                 required="required"/>
          <textarea rows="4"
                    placeholder="Message"
                    required="required"></textarea>
          <button class="primary-button"
                  type="submit">Send Message</button>
        </form>
          </div> <!-- end half column -->

          <div class="one-half column">
            <h2>I'm social! Well, online at least.</h2>
            <p>Connect with me in my favorite social spaces:</p>
            <ul class="no-bullets">
              <li><a href="https://www.linkedin.com/in/gksargent/" target="_blank">LinkedIn</a></li>
              <li><a href="https://github.com/gksargent" target="_blank">GitHub</a></li>
              <li><a href="https://dribbble.com/gksargent" target="_blank">Dribbble</a></li>
              <li><a href="https://www.behance.net/gksargent44bc" target="_blank">Behance</a></li>
              <li><a href="https://codepen.io/gsargent/" target="_blank">Codepen</a></li>
              <li><a href="https://twitter.com/GregKSargent" target="_blank">Twitter</a></li>
            </ul>
          </div> <!-- end half column -->

        </div><!-- end columns -->
      </div><!-- end container -->
  </main>
</div><!-- end content_wrapper -->

<?php // This php pulls in footer.php to create the footer content
include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>
