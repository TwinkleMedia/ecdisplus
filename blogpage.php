<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="./blogbanner.css">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>

<body>
    <?php
    include "./navbar.php";

    ?>
    <div class="blog-banner">
        <div class="banner-content">
            <h1 class="banner-title">Let’s Explore Together</h1>
            
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