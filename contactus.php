<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==========================
        SEO TITLE & META DESCRIPTION
    =========================== -->
    <title>Contact Us | ECDIS Plus Maritime Training & Support</title>

    <meta name="description"
        content="Contact ECDIS Plus for maritime training, ECDIS courses, certification support, and consultation. Call +91 7710074143 or email training@ecdisplus.com">

    <meta name="keywords"
        content="Contact ECDIS Plus, Maritime Training Contact, ECDIS Training India, Marine Navigation Training Support">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://ecdisplus.com/contactus.php">

    <!-- ==========================
         OPEN GRAPH META TAGS (FB / LINKEDIN)
    =========================== -->
    <meta property="og:title" content="Contact ECDIS Plus | Maritime Training & Support">
    <meta property="og:description"
        content="Get in touch for ECDIS training, maritime certification and navigational support.">
    <meta property="og:url" content="https://ecdisplus.com/contactus.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://ecdisplus.com/logo.png">

    <!-- ==========================
         TWITTER CARD META TAGS
    =========================== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact ECDIS Plus">
    <meta name="twitter:description" content="Reach out for maritime training & ECDIS support.">
    <meta name="twitter:image" content="https://ecdisplus.com/logo.png">

    <!-- ==========================
         CSS FILES
    =========================== -->
    <link rel="stylesheet" href="./contactus.css">
    <link rel="stylesheet" href="./blogbanner.css">

    <!-- ==========================
         EMAILJS CDN
    =========================== -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <!-- ==========================
        STRUCTURED DATA - LOCAL BUSINESS SCHEMA
    =========================== -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "ECDIS Plus Maritime Training",
        "image": "https://ecdisplus.com/logo.png",
        "@id": "https://ecdisplus.com/contactus.php",
        "url": "https://ecdisplus.com/contactus.php",
        "telephone": "+91 7710074143",
        "email": "training@ecdisplus.com",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91 7710074143",
            "contactType": "customer service",
            "areaServed": "Worldwide"
        }
    }
    </script>
</head>

<body>
    <?php include './navbar.php'; ?>

    <div class="blog-banner">
        <div class="banner-content">
            <h1 class="banner-title">Contact Us</h1>
        </div>
    </div>

    <section class="contact-container">
        <div class="contact-info">
            <h2 class="section-title">Contact Information</h2>
            <div class="info-item">
                <i class="phone-icon">📞</i>
                <div class="info-content">
                    <h3>Phone</h3>
                    <p>+91 7710074143</p>
                </div>
            </div>
            <div class="info-item">
                <i class="email-icon">✉️</i>
                <div class="info-content">
                    <h3>Email</h3>
                    <p>training@ecdisplus.com</p>
                </div>
            </div>
        </div>


        <div class="contact-form">
            <h2>Send us a Message</h2>
            <form id="contact-form">
                <div>
                    <input type="text" id="from_name" name="from_name" placeholder="Full Name" required>
                </div>
                <div>
                    <input type="email" id="from_email" name="from_email" placeholder="Email Address" required>
                </div>
                <div>
                    <input type="tel" id="from_phone" name="from_phone" placeholder="Phone Number">
                </div>
                <div>
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                </div>
                <div>
                    <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <?php include './footer.php'; ?>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('from_name').value;
            const email = document.getElementById('from_email').value;
            const phone = document.getElementById('from_phone').value || "N/A";
            const subject = document.getElementById('subject').value || "N/A";
            const message = document.getElementById('message').value;

            const whatsappNumber = "917710074143"; // Your WhatsApp number

            // Safe emojis and clean formatting
            const whatsappMessage =
                ` New Contact Form Submission

 Name: ${name}
 Email: ${email}
 Phone: ${phone}
 Subject: ${subject}
 Message: ${message}`;

            // Encode for URL
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

            // Open WhatsApp
            window.open(whatsappURL, '_blank');

            // Reset form
            document.getElementById('contact-form').reset();
        });
    </script>
</body>

</html>