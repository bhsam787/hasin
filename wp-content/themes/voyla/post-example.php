<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
  </head>
  <body>
    <?php


    while (have_posts()) {
      the_post();
      echo "<h2>";
        the_title();
      echo "</h2>";

    }



     ?>



  </body>
</html>
