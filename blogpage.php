<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="./blogbanner.css">
</head>
<body>
    <?php
    include "./navbar.php";

    ?>
      <div class="blog-banner">
        <div class="banner-content">
            <h1 class="banner-title">Welcome to Our Blog</h1>
            <p class="banner-subtitle">Discover insightful articles, expert tips, and the latest trends in our carefully curated collection of blog posts.</p>
            <a href="#" class="banner-button">Start Reading</a>
        </div>
    </div>
    <?php 
    include './blog.php';
    ?>
    <?php 
    include './footer.php';
    ?>

</body>
</html>