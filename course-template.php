<?php
require_once './course-data.php';

// $courseSlug must be set by the calling page
if (!isset($courseSlug) || !isset($courses[$courseSlug])) {
    http_response_code(404);
    die('Course not found.');
}

$c = $courses[$courseSlug];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= htmlspecialchars($c['title']) ?>
    </title>
    <meta name="description" content="<?= htmlspecialchars($seo['description']) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($seo['keywords']) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($seo['canonical']) ?>">

    <meta property="og:title" content="<?= htmlspecialchars($seo['og_title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seo['og_desc']) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($seo['og_image']) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($seo['canonical']) ?>">
    <meta property="og:type" content="website">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "<?= htmlspecialchars($seo['schema_name']) ?>",
  "description": "<?= htmlspecialchars($seo['schema_desc']) ?>",
  "provider": {
    "@type": "EducationalOrganization",
    "name": "ECDISPLUS Training Solutions",
    "url": "https://ecdisplus.com"
  }
}
</script>

    <link rel="stylesheet" href="./course.css">
    <link rel="stylesheet" href="./navbar.css">
    <link rel="stylesheet" href="./newcourse.css">
</head>

<body>

    <?php include './navbar.php';
    include './form.php'; ?>

    <!-- HERO -->
    <section class="course-section">
        <div class="course-container">
            <div class="course-content">
                <h2>
                    <?= htmlspecialchars($c['title']) ?>
                </h2>
                <p>
                    <?= htmlspecialchars($c['description']) ?>
                </p>
                <ul class="features">
                    <li>Expert Instructors with extensive knowledge</li>
                    <li>Comprehensive Curriculum</li>
                    <li>Flexible Learning Options</li>
                    <li>Accredited by Directorate General of Shipping</li>
                </ul>
                <button onclick="openModal('<?= htmlspecialchars($c['title']) ?>')" class="apply-btn" style="border:none;">
                    Apply Training
                </button>
            </div>
            <div class="course-logo">
                <img src="<?= htmlspecialchars($c['logo']) ?>" alt="<?= htmlspecialchars($c['logo_alt']) ?>">
            </div>
        </div>
    </section>

    <!-- MODULES -->
    <section class="modules-section">
        <div class="modules-container">
            <h2 class="modules-title"><span class="menu-icon">≡</span> Course Modules</h2>
            <div class="modules-grid">
                <?php foreach ($c['modules'] as $mod): ?>
                    <div class="module-card <?= !empty($mod['highlight']) ? 'highlight' : '' ?>">
                        <span class="module-no">Module
                            <?= $mod['no'] ?>
                        </span>
                        <h4>
                            <?= htmlspecialchars($mod['title']) ?>
                        </h4>
                        <img src="./assets/new-folder/<?= htmlspecialchars($mod['img']) ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- OBJECTIVES -->
    <section class="objectives-section">
        <div class="objectives-container">
            <div class="objectives-content">
                <h2 class="objectives-title"><span class="target-icon">◎</span> Course Objectives</h2>
                <ul class="objectives-list">
                    <?php foreach ($c['objectives'] as $obj): ?>
                        <li>
                            <?= htmlspecialchars($obj) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="objectives-image">
                <img src="./assets/new-folder/course-objectives.png" alt="Course Objectives">
            </div>
        </div>
    </section>

    <!-- COURSE DETAILS -->
    <section class="course-details-section">
        <div class="course-details-container">
            <h2 class="course-details-title">Course Details</h2>
            <div class="course-timeline">
                <div class="timeline-row top">
                    <div class="timeline-item"><span>Timeframe:
                            <?= htmlspecialchars($c['details']['timeframe']) ?>
                        </span></div>
                    <div class="timeline-item"><span>Daily Test Attempts:
                            <?= htmlspecialchars($c['details']['daily_attempts']) ?>
                        </span></div>
                    <div class="timeline-item highlight"><span>Min % of Progress to Access TestMe:
                            <?= htmlspecialchars($c['details']['min_progress']) ?>
                        </span></div>
                    <div class="timeline-item"><span>Total Test Time:
                            <?= htmlspecialchars($c['details']['test_time']) ?>
                        </span></div>
                </div>
                <div class="timeline-line"></div>
                <div class="timeline-row bottom">
                    <div class="timeline-item"><span>Course Access:
                            <?= htmlspecialchars($c['details']['course_access']) ?>
                        </span></div>
                    <div class="timeline-item"><span>Language:
                            <?= htmlspecialchars($c['details']['language']) ?>
                        </span></div>
                    <div class="timeline-item"><span>Min % of Passing the TestMe:
                            <?= htmlspecialchars($c['details']['min_passing']) ?>
                        </span></div>
                    <div class="timeline-item"><span>Certificate:
                            <?= htmlspecialchars($c['details']['certificate']) ?>
                        </span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- SUITABLE FOR + PREREQUISITES -->
    <section class="audience-section">
        <div class="audience-container">
            <h2 class="section-title"><span class="icon">👥</span> Suitable For</h2>
            <div class="audience-grid">
                <?php foreach ($c['suitable_for'] as $item): ?>
                    <div class="audience-card">
                        <p>
                            <?= htmlspecialchars($item) ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <h2 class="section-title"><span class="icon">🎓</span> Prerequisites</h2>
            <ul class="prerequisite-list">
                <?php foreach ($c['prerequisites'] as $pre): ?>
                    <li>
                        <?= htmlspecialchars($pre) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <!-- FEATURES (only if course has 'features') -->
    <?php if (!empty($c['features'])): ?>
        <section class="features-section">
            <div class="container">
                <h2 class="section-title"><span class="red-icon">★</span> Key Features</h2>
                <ul class="features-list">
                    <?php foreach ($c['features'] as $feature): ?>
                        <li>
                            <?= htmlspecialchars($feature) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>
    <!-- LEARNING OUTCOMES (only if course has 'outcomes') -->
    <?php if (!empty($c['outcomes'])): ?>
        <section class="learning-equipment-section">
            <div class="container">
                <h2 class="section-title"><span class="red-icon">✔</span> Learning Outcomes</h2>
                <div class="learning-grid">
                    <?php foreach ($c['outcomes'] as $outcome): ?>
                        <div class="learning-card <?= !empty($outcome['highlight']) ? 'highlight' : '' ?>">
                            <p><?= htmlspecialchars($outcome['text']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (!empty($c['equipment'])): ?>
        <section class="equipment-section">
            <div class="container">
                <h2 class="section-title"><span class="red-icon">▢</span> Equipment Covered</h2>
                <div class="equipment-grid">
                    <?php foreach ($c['equipment'] as $equip): ?>
                        <div class="equipment-card">
                            <h3><?= htmlspecialchars($equip['name']) ?></h3>
                            <ul class="equipment-list">
                                <?php foreach ($equip['items'] as $item): ?>
                                    <li><?= htmlspecialchars($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- WHY ECDISPLUS -->
    <section class="why-section">
        <div class="why-container">
            <h2 class="section-title"><span class="red-icon">🎖</span> Why Choose ECDISPLUS?</h2>
            <div class="why-grid">
                <div class="why-card"><img src="./assets/icons/expert.png" alt="">
                    <p>Expert Instructors with extensive knowledge<br>State-of-the-Art Training Facilities</p>
                </div>
                <div class="why-card"><img src="./assets/icons/curriculum.png" alt="">
                    <p>Comprehensive Curriculum</p>
                </div>
                <div class="why-card"><img src="./assets/icons/flexible.png" alt="">
                    <p>Flexible Learning Options</p>
                </div>
                <div class="why-card highlight"><img src="./assets/icons/accredited.png" alt="">
                    <p>Accredited by Directorate General of Shipping</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ENROLL -->
    <section class="enroll-section">
        <div class="enroll-container">
            <div class="enroll-text">
                <h2><span class="enroll-icon">🎓</span> Enroll Now</h2>
                <p>
                    <?= htmlspecialchars($c['enroll_desc']) ?>
                </p>
            </div>
            <div class="enroll-action">
               <button onclick="openModal('<?= htmlspecialchars($c['title']) ?>')" class="enroll-btn" style="border:none;">
                    Book Now
                </button>
            </div>
        </div>
    </section>

    <?php include './footer.php'; ?>
</body>

</html>