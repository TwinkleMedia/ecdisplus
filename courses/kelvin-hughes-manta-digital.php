<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./course.css">
</head>

<body>
  <?php
     include './navbar.php';
      include './form.php';
    ?>
    <div class="main-container">
        <section class="info-card">
            <h2 class="info-card-title"><i class="fas fa-info-circle"></i>Kelvin Hughes Manta Digital
            </h2>

        </section>

        <section class="info-card">
            <h2 class="info-card-title"><i class="fas fa-list-alt"></i> Course Modules</h2>
            <div class="modules-grid">
                <div class="module-element">
                    <h3>Module 1</h3>
                    <p>User Interface</p>
                </div>
                <div class="module-element">
                    <h3>Module 2</h3>
                    <p>ECDIS Basic Features</p>
                </div>
                <div class="module-element">
                    <h3>Module 3</h3>
                    <p>Sensor Management/Monitoring</p>
                </div>
                <div class="module-element">
                    <h3>Module 4</h3>
                    <p>Alert Management</p>
                </div>
                <div class="module-element">
                    <h3>Module 5</h3>
                    <p>Chart Management</p>
                </div>
                <div class="module-element">
                    <h3>Module 6</h3>
                    <p>Digital Passage Planning</p>
                </div>
                <div class="module-element">
                    <h3>Module 7</h3>
                    <p>Voyage Planning</p>
                </div>
                <div class="module-element">
                    <h3>Module 8</h3>
                    <p>Voyage Monitoring</p>
                </div>
                <div class="module-element">
                    <h3>Module 9</h3>
                    <p>Backup Arrangements, Logs & Data</p>
                </div>
                <div class="module-element">
                    <h3>Module 10</h3>
                    <p>Navigational Tools and Functions</p>
                </div>
            </div>
        </section>
        <div class="main-container">
            <section class="info-card">
                <h2 class="info-card-title"><i class="fas fa-info-circle"></i>Course Objectives</h2>
                <p>The objectives of this course are to cover type-specific familiarisation of ECDIS tailored to the
                    specific needs of the Navigational Officers. Subject areas covered in the course include an overview
                    of ECDIS carriage requirements, electronic charts, ECDIS navigational functions, ship handling with
                    ECDIS, sensor integration, alert management, as well as the latest changes according to the new IHO
                    and IEC standards. Combined the content of this course ensures that officers understand the
                    type-specific navigational functions of ECDIS, and are familiar with the features that are common to
                    all ECDIS systems before boarding a vessel, which ultimately translates to safer operations and
                    vessel manoeuvring.
                </p>
            </section>





            <div class="info-card">
                <h2 class="info-card-title">Course Details</h2>
                <ul class="course-card-list">
                    <li><strong>Course Access:</strong> 21 days</li>
                    <li><strong>Timeframe:</strong> 16 hours</li>
                    <li><strong>Language:</strong> English</li>
                    <li><strong>Certificate:</strong> Indefinite</li>
                    <li><strong>Strong Authentication:</strong> Yes</li>
                    <li><strong>Daily Test Attempts:</strong> 10</li>
                    <li><strong>Min % of Progress to Access TestMe:</strong> 70%</li>
                    <li><strong>Min % of Passing the TestMe:</strong> 70%</li>
                    <li><strong>Total Test Time:</strong>1hr 30 minutes</li>
                </ul>
                <!-- Book Now Button -->
            <div style="text-align: center; margin-top: 2rem;">
                <button onclick="openModal()" class="book-now-course-btn">Book Now</button>
            </div>
    </div>
            </div>
        </div>
    </div>
    <?php
    include '../footer.php';
    ?>
</body>

</html>