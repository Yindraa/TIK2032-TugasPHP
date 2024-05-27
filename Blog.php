<?php
require 'connection.php';
$blog = query("SELECT * FROM blog");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />

    <title>Blog</title>
  </head>
  <body class="blog-page fade">
    <div class="bg-title">
      <h1><span class="special">B</span>log.</h1>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="Gallery.html">Gallery</a></li>
          <li><a href="Blog.php" class="active">Blog</a></li>
          <li><a href="Contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="Personal-Blog">
      <h2>Here are some articles that you can read!</h2>
    </div>

    <?php foreach ($blog as $b) : ?>
    <article>
      <h3>
      <?= $b["judul"];?>
      </h3>
      <p>
      <?= $b["isi"];?>
      </p>
      <a
        href=<?= $b["isi"];?>
        >Read More</a
      >
    </article>
    <?php endforeach; ?>

    <footer>
      <p>© 2024 Made Narayindra. All rights reserved.</p>
    </footer>
  </body>
</html>
