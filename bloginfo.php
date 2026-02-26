<?php
// ✅ Get blog ID from URL — defaults to 1 if not provided
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// ✅ Blog data array — keyed by ID, matching the cards in blogpage.html
$blogs = [
    1 => [
        'date' => 'January 01, 2023',
        'title' => 'E-navigation is a new way of Navigation',
        'image' => './assets/img/e-navigation.png',
        'content' => 'E-navigation is the most coordinated gathering, integration, sharing, display, and analysis of maritime information onboard and ashore by electronic means to enhance berth-to-berth navigation and related services for safety and security at sea and protection of the marine environment.

E-navigation represents a paradigm shift in how vessels navigate, communicate, and interact with port authorities and other maritime stakeholders. By integrating data from multiple sources — GPS, AIS, ECDIS, weather systems — it provides a unified operational picture for the officer on watch.

Key Benefits of E-navigation:
The system reduces navigational errors by presenting cleaner, standardized electronic chart information. Crew workload is significantly reduced through automation of routine monitoring tasks, allowing officers to focus on decision-making.

Shore-based authorities gain real-time situational awareness of vessel movements, enabling proactive responses to emerging hazards. Port state control and voyage planning become more efficient through seamless digital data exchange between ship and shore.

E-navigation also supports environmental goals by optimizing routing for fuel efficiency and helping vessels comply with emission control areas (ECAs) using accurate positional and environmental data.',
    ],
    2 => [
        'date' => 'January 01, 2023',
        'title' => 'Generic and Types of ECDIS Differences',
        'image' => './assets/img/generic-and-type.png',
        'content' => 'Much like all the other new technologies in the maritime industry, ECDIS also requires formal training before an officer can confidently operate it onboard a vessel. The IMO has mandated two levels of ECDIS training: Generic and Type-Specific.

Generic ECDIS Training:
Generic training gives seafarers a foundational understanding of ECDIS principles, ENC data, route planning, voyage monitoring, and system limitations. This training is equipment-independent and provides the theoretical and practical base that every deck officer needs regardless of which ECDIS brand is fitted on their ship.

Type-Specific ECDIS Training:
Type-specific training is tailored to a particular manufacturer\'s ECDIS equipment. Since each brand — JRC, Furuno, Transas, Kongsberg, etc. — has a unique interface, menu structure, and alarm management system, officers must be trained on the exact model installed on their vessel.

Key Differences at a Glance:
Generic training covers ECDIS theory, international standards (IEC 61174, S-52, S-57), and general operation. Type-specific training covers the exact hardware and software controls for a given manufacturer\'s system, including software updates and alarm settings unique to that model.

Both certifications are mandatory under STCW 2010 Manila Amendments, and operators must hold both certificates for the ECDIS fitted on their current vessel.',
    ],
];

// ✅ Fallback to blog 1 if an invalid ID is requested
$current_blog = $blogs[$blog_id] ?? $blogs[1];

$related_blogs = array_filter($blogs, function($value, $key) use ($blog_id) {
    return $key !== $blog_id;
}, ARRAY_FILTER_USE_BOTH);
$related_blogs = array_slice($related_blogs, 0, 4, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($current_blog['title']) ?> - ECDIS Plus Maritime</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="newcourse.css">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>

<body>

    <?php include "./navbar.php"; ?>

    <!-- Hero Banner -->
    <section class="news-hero-section">
        <div class="news-hero-overlay"></div>
        <div class="container">
            <div class="news-hero-content">
                <h1 class="news-hero-title">Our Blogs</h1>
            </div>
        </div>
    </section>

    <div class="blog-detail-container">

        <!-- ===== Main Blog Content ===== -->
        <main class="main-content">

            <a href="blogpage.php" class="back-button">
                <i class="fas fa-arrow-left"></i> Back to Blogs
            </a>

            <div class="blog-date">
                <i class="far fa-calendar"></i>
                <span><?= htmlspecialchars($current_blog['date']) ?></span>
            </div>

            <!-- ✅ Dynamic title based on which card was clicked -->
            <h1 class="blog-title"><?= htmlspecialchars($current_blog['title']) ?></h1>

            <!-- ✅ Dynamic image based on which card was clicked -->
            <img src="<?= htmlspecialchars($current_blog['image']) ?>"
                alt="<?= htmlspecialchars($current_blog['title']) ?>" class="featured-image">

            <!-- ✅ Dynamic content based on which card was clicked -->
            <div class="blog-content">
                <?php
                $paragraphs = explode("\n\n", $current_blog['content']);
                foreach ($paragraphs as $paragraph) {
                    if (trim($paragraph)) {
                        echo '<p>' . nl2br(htmlspecialchars($paragraph)) . '</p>';
                    }
                }
                ?>
            </div>

        </main>

        <!-- ===== Sidebar: Related Blogs ===== -->
        <aside class="sidebar">
            <h2 class="sidebar-title">Related news</h2>

            <?php foreach ($related_blogs as $id => $blog): ?>
                <a href="bloginfo.php?id=<?= $id ?>" class="related-news-item">
                    <img src="<?= htmlspecialchars($blog['image']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>"
                        class="related-news-image">
                    <div class="related-news-content">
                        <h3 class="related-news-title"><?= htmlspecialchars($blog['title']) ?></h3>
                        <div class="related-news-date">
                            <i class="far fa-calendar"></i>
                            <span><?= htmlspecialchars($blog['date']) ?></span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </aside>

    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.scrollTo({ top: 0, behavior: 'smooth' });
    </script>

</body>

</html>