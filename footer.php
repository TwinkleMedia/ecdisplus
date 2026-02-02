<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .footers {
            background: #154475;
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .footers::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 15px;
            background: linear-gradient(90deg, transparent, #ff1744, transparent);
            animation: borderFlow 3s linear infinite;
        }

        .call-buton .cc-calto-action-ripple {
            z-index: 99999;
            position: fixed;
            right: 1rem;
            bottom: 8rem;
            background: #ec8b00;
            width: 4rem;
            height: 4rem;
            padding: 1rem;
            border-radius: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #ffffff;
            -webkit-animation: cc-calto-action-ripple 0.6s linear infinite;
            animation: cc-calto-action-ripple 0.6s linear infinite;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            justify-items: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            text-decoration: none;
        }

        .call-buton .cc-calto-action-ripple i {
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
            font-size: 2.2rem;
        }

        .call-buton .cc-calto-action-ripple:hover i {
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        @-webkit-keyframes cc-calto-action-ripple {
            0% {
                -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 0 rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2);
                box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 0 rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2);
            }

            100% {
                -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2), 0 0 0 20px rgba(236, 139, 0, 0);
                box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2), 0 0 0 20px rgba(236, 139, 0, 0);
            }
        }

        @keyframes cc-calto-action-ripple {
            0% {
                -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 0 rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2);
                box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 0 rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2);
            }

            100% {
                -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2), 0 0 0 20px rgba(236, 139, 0, 0);
                box-shadow: 0 4px 10px rgba(236, 139, 0, 0.2), 0 0 0 5px rgba(236, 139, 0, 0.2), 0 0 0 10px rgba(236, 139, 0, 0.2), 0 0 0 20px rgba(236, 139, 0, 0);
            }
        }





        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        @keyframes borderFlow {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .footers-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
        }

        .footers-section {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footers-section:nth-child(2) {
            animation-delay: 0.2s;
        }

        .footers-section:nth-child(3) {
            animation-delay: 0.4s;
        }

        .footers-section:nth-child(4) {
            animation-delay: 0.6s;
        }

        .footers-section h3 {
            color: #ff1744;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footers-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: #ff1744;
            transition: width 0.3s ease;
        }

        .footers-section:hover h3::after {
            width: 100px;
        }

        .footers-section p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .footers-links {
            list-style: none;
        }

        .footers-links li {
            margin-bottom: 0.8rem;
        }

        .footers-links a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footers-links a:hover {
            color: #ff1744;
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            color: #154475;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #ff1744;
            color: white;
            transform: translateY(-5px);
        }

        .newsletter-form {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .newsletter-form input {
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
            flex: 1;
            font-size: 0.9rem;
        }

        .newsletter-form button {
            padding: 0.8rem 1.5rem;
            background: #ff1744;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-form button:hover {
            background: #d50000;
            transform: scale(1.05);
        }

        .footers-bottom {
            text-align: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Mobile floating buttons at bottom */
        .floating-buttons-mobile {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.15);
            padding: 10px;
            gap: 10px;
            z-index: 9999;
        }

        .mobile-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            color: white;
        }

        .mobile-btn i {
            font-size: 20px;
        }

        .call-btn {
            background-color: #ec8b00;
        }

        .call-btn:hover {
            background-color: #d17d00;
        }

        .whatsapp-btn {
            background-color: #25d366;
        }

        .whatsapp-btn:hover {
            background-color: #1fb855;
        }

        /* Hide desktop buttons on mobile, show mobile buttons */
        @media screen and (max-width: 768px) {
            .floating-buttons-mobile {
                display: flex;
            }

            .desktop-only {
                display: none !important;
            }

            /* Add padding to footer so content isn't hidden behind buttons */
            .footers {
                padding-bottom: 80px;
            }
        }

        /* Show desktop buttons only on larger screens */
        @media screen and (min-width: 769px) {
            .floating-buttons-mobile {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .footers-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .footers-section {
                text-align: center;
            }

            .footers-section h3::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .social-links {
                justify-content: center;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-form button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <footer class="footers">
        <div class="footers-content">
            <div class="footers-section">
                <h3>About Us</h3>
                <p>At ECDISPLUS, we’re not just about training – we’re about building a community of skilled, confident
                    mariners. When you choose us, you become part of a network of professionals dedicated to excellence
                    in maritime navigation.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="footers-section">
                <h3>Quick Links</h3>
                <ul class="footers-links">
                    <li><a href="./">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footers-section">
                <h3>Contact Info</h3>
                <ul class="footers-links">
                    <li><i class="fas fa-phone"></i> +91 7710074143</li>
                    <li><i class="fas fa-envelope"></i>training@ecdisplus.com</li>

                </ul>
            </div>

            <div class="footers-section">
                <h3>Office Address</h3>
                <p>104 B Wing 10th Floor , Aggarwal Trade Center , Sector 11, CBD BELAPUR 400 614</p>

            </div>
        </div>


        <div class="footers-bottom">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
        </div>
    </footer>
    <!-- Replace the existing call-buton and float sections with this -->
    <div class="floating-buttons-mobile">
        <a href="tel:+917710074143" class="mobile-btn call-btn">
            <i class="fa fa-phone"></i>
            <span>Call</span>
        </a>
        <a href="https://api.whatsapp.com/send?phone=917710074143&text=Hi Could you please provide more details"
            class="mobile-btn whatsapp-btn" target="_blank">
            <i class="fa fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
    </div>
    <section class="call-buton desktop-only">
        <a class="cc-calto-action-ripple" href="tel:+917710074143">
            <i class="fa fa-phone"></i>
        </a>
    </section>

    <a href="https://api.whatsapp.com/send?phone=917710074143&text=Hi Could you please provide more details"
        class="float desktop-only" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</body>

</html>