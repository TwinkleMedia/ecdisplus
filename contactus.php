<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="./contactus.css">
      <link rel="stylesheet" href="./blogbanner.css">
    <!-- Add EmailJS CDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
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
        // Initialize EmailJS with your public key
        (function() {
            emailjs.init("HtHlGzizhMtWwua0Z");
        })();

        // Handle form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Show loading state
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;

            // Get form data - matching exactly with your template variables
            const templateParams = {
                to_name: "Admin", // The recipient's name
                from_name: document.getElementById('from_name').value,
                from_email: document.getElementById('from_email').value,
                from_phone: document.getElementById('from_phone').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };

            // Send email using EmailJS
            emailjs.send('service_vi53dwj', 'template_l128f7l', templateParams)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    alert('Message sent successfully!');
                    document.getElementById('contact-form').reset();
                }, function(error) {
                    console.log('FAILED...', error);
                    alert('Failed to send message. Error: ' + JSON.stringify(error));
                })
                .finally(function() {
                    submitButton.textContent = 'Send Message';
                    submitButton.disabled = false;
                });
        });
    </script>
</body>
</html>