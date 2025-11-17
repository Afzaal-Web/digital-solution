<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// --- reCAPTCHA v3 configuration ---

$recaptcha_site_key   = '6LdAIw8sAAAAALwiw0AKCbmwuQbq_S_VgZFKZJz5';
$recaptcha_secret_key = '6LdAIw8sAAAAAG3o8Sz9XBegel2T545TM5GQRzp4';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Solutions - Software Development Company</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="logo.png">
    <style>
        a.service-card {
            text-decoration: none;
        }
        .portfolio-buttons {
            display: flex;
            gap: 12px;
            margin-top: 18px;
        }
        .portfolio-buttons a {
            display: inline-block;
            padding: 10px 22px;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .portfolio-buttons .btn-primary {
            background: linear-gradient(90deg, #088ad2 0%, #005fa3 100%);
            color: #fff;
            border: none;
        }
        .portfolio-buttons .btn-primary:hover {
            background: linear-gradient(90deg, #005fa3 0%, #088ad2 100%);
            color: #fff;
        }
        .portfolio-buttons .btn-secondary {
            background: #fff;
            color: #088ad2;
            border: 2px solid #088ad2;
        }
        .portfolio-buttons .btn-secondary:hover {
            background: #088ad2;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
 <?php include 'header.php'; ?>

    <!-- Hero Slider Section -->
    <section id="home" class="hero">
        <div class="hero-slider">
            <button class="slider-arrow slider-prev" aria-label="Previous slide">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="slides-track">
            <div class="slide active">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80');">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1>We Build Scalable Software</h1>
                            <p>Transforming ideas into powerful digital solutions that drive your business forward</p>
                            <a href="#services" class="btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1>Custom Solutions for Your Business</h1>
                            <p>Tailored software development services that perfectly fit your unique requirements</p>
                            <a href="#portfolio" class="btn-primary">View Our Work</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=2100&q=80');">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1>Innovating with Technology</h1>
                            <p>Cutting-edge solutions powered by the latest technologies and best practices</p>
                            <a href="#about" class="btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1>Data-Driven Solutions</h1>
                            <p>Transform your business with intelligent analytics and data visualization tools</p>
                            <a href="#services" class="btn-primary">Explore Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80');">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1>Digital Transformation</h1>
                            <p>Modernize your business processes with cutting-edge digital solutions</p>
                            <a href="#portfolio" class="btn-primary">View Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
                    <div class="slide-overlay">
                        <div class="slide-content">
                            <h1>Expert Team</h1>
                            <p>Work with experienced developers and designers who bring your vision to life</p>
                            <a href="#contact" class="btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <button class="slider-arrow slider-next" aria-label="Next slide">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="slider-dots">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Comprehensive software development solutions tailored to your needs</p>
            </div>
            <div class="services-grid">
                <a href="web-development.php" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Custom web applications built with modern frameworks and technologies for optimal performance and user experience.</p>
                </a>
                <a href="mobile-apps.php" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Apps</h3>
                    <p>Native and cross-platform mobile applications that deliver seamless experiences across all devices.</p>
                </a>
                <a href="cloud-solutions.php" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Cloud Solutions</h3>
                    <p>Scalable cloud infrastructure and migration services to optimize your business operations and reduce costs.</p>
                </a>
                <a href="uiux-design.php" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>User-centered design solutions that create intuitive and engaging digital experiences for your customers.</p>
                </a>
                <a href="database-management.php" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Database Management</h3>
                    <p>Efficient database design, optimization, and management services to ensure your data is secure and accessible.</p>
                </a>
                <a href="cybersecurity.php" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Cybersecurity</h3>
                    <p>Comprehensive security solutions to protect your applications and data from threats and vulnerabilities.</p>
                </a>
                <a href="devops-automation.php" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>DevOps & Automation</h3>
                    <p>Streamline your development workflow with automated deployment, monitoring, and infrastructure management.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-header">
                <h2>Our Portfolio</h2>
                <p>Showcasing our latest projects and successful implementations</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="E-commerce Platform">
                    <div class="portfolio-overlay">
                        <h3>E-commerce Platform</h3>
                        <p>Full-stack web application with payment integration</p>
                        <div class="portfolio-buttons">
                            <a href="#" class="btn-primary" target="_blank">View Project</a>
                            <a href="#" class="btn-secondary" target="_blank">View Code</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Mobile Banking App">
                    <div class="portfolio-overlay">
                        <h3>Mobile Banking App</h3>
                        <p>Secure mobile application for financial services</p>
                        <div class="portfolio-buttons">
                            <a href="#" class="btn-primary" target="_blank">View Project</a>
                            <a href="#" class="btn-secondary" target="_blank">View Code</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Analytics Dashboard">
                    <div class="portfolio-overlay">
                        <h3>Analytics Dashboard</h3>
                        <p>Real-time data visualization and reporting tool</p>
                        <div class="portfolio-buttons">
                            <a href="#" class="btn-primary" target="_blank">View Project</a>
                            <a href="#" class="btn-secondary" target="_blank">View Code</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="SaaS Platform">
                    <div class="portfolio-overlay">
                        <h3>SaaS Platform</h3>
                        <p>Cloud-based software solution for businesses</p>
                        <div class="portfolio-buttons">
                            <a href="#" class="btn-primary" target="_blank">View Project</a>
                            <a href="#" class="btn-secondary" target="_blank">View Code</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80" alt="IoT Management System">
                    <div class="portfolio-overlay">
                        <h3>IoT Management System</h3>
                        <p>Connected device monitoring and control platform</p>
                        <div class="portfolio-buttons">
                            <a href="#" class="btn-primary" target="_blank">View Project</a>
                            <a href="#" class="btn-secondary" target="_blank">View Code</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=2070&q=80" alt="AI-Powered Tool">
                    <div class="portfolio-overlay">
                        <h3>AI-Powered Tool</h3>
                        <p>Machine learning application for data analysis</p>
                        <div class="portfolio-buttons">
                            <a href="#" class="btn-primary" target="_blank">View Project</a>
                            <a href="#" class="btn-secondary" target="_blank">View Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Digital Solutions</h2>
                    <p>We are a leading software development company dedicated to delivering innovative digital solutions that transform businesses and drive growth. With over 8 years of experience in the industry, our team of expert developers, designers, and strategists work together to create cutting-edge software that meets the unique needs of our clients.</p>
                    <p>Our mission is to bridge the gap between technology and business goals, ensuring that every project we undertake delivers measurable value and exceptional user experiences. We pride ourselves on our commitment to quality, innovation, and client satisfaction.</p>
                    <div class="about-stats">
                        <div class="stat">
                            <h3>150+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat">
                            <h3>50+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <div class="stat">
                            <h3>8+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Our Team">
                </div>
            </div>
        </div>
    </section>

   <!-- Contact Section -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$successMsg = '';
$errorMsg   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    // Basic sanitization
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // --- reCAPTCHA v3 server-side verification ---
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
    $recaptcha_ok = false;

    if (empty($recaptcha_secret_key) || $recaptcha_secret_key === 'YOUR_RECAPTCHA_SECRET_KEY') {
        // If developer hasn't set a secret key, treat as failed verification to be safe.
        $errorMsg = 'reCAPTCHA secret key not configured. Please set $recaptcha_secret_key.';
    } elseif (empty($recaptcha_response)) {
        $errorMsg = 'reCAPTCHA token is missing. Please enable JavaScript in your browser.';
    } else {
        $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = http_build_query([
            'secret' => $recaptcha_secret_key,
            'response' => $recaptcha_response,
            'remoteip' => $_SERVER['REMOTE_ADDR'] ?? null,
        ]);

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => $data,
                'timeout' => 5,
            ],
        ];

        $context = stream_context_create($options);
        $result = @file_get_contents($verify_url, false, $context);

        if ($result === false) {
            $errorMsg = 'Could not contact reCAPTCHA verification server.';
        } else {
            $resp = json_decode($result, true);
            if (!empty($resp['success'])) {
                $score = $resp['score'] ?? 0;
                $action = $resp['action'] ?? '';
                // Accept only if action matches and score is reasonably high (adjust threshold as needed)
                if ($action === 'contact' && $score >= 0.5) {
                    $recaptcha_ok = true;
                } else {
                    $errorMsg = 'reCAPTCHA verification failed (low score or mismatched action).';
                }
            } else {
                $errorMsg = 'reCAPTCHA verification returned failure.';
            }
        }
    }

    // If reCAPTCHA passed, proceed to send the email
    if ($recaptcha_ok) {
        $mail = new PHPMailer(true);

        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'etech.afzaal@gmail.com';       // Your Gmail
            $mail->Password   = 'cble xmvu mhiw xdcp';          // Gmail App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Sender & Recipient
            $mail->setFrom('etech.afzaal@gmail.com', 'Website Contact');
            $mail->addReplyTo($email, $name); // reply goes to sender
            $mail->addAddress('etech.sarmad@gmail.com', 'Customer Service');
            $mail->addCC('afzaalbscs240@gmail.com', 'Muhammad Afzaal');

            // Email Content (escape output to avoid HTML injection)
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = "
                <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
                <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
            ";
            $mail->AltBody = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;

            $mail->send();
            echo '<script>window.location.href="thankyou.php";</script>';
            exit;
        } catch (Exception $e) {
            $errorMsg = '❌ Message could not be sent. Error: ' . $mail->ErrorInfo;
        }
    }
}
?>

<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2>Get In Touch</h2>
            <p>Ready to start your next project? Let's discuss how we can help you achieve your goals.</p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Address</h3>
                        <p>96-G Phase 1, DHA Lahore</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Phone</h3>
                        <p>+92-423-720-4400</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email</h3>
                        <p>info@digitalsolutions.today</p>
                    </div>
                </div>
            </div>

            <!-- Success / Error Messages -->
            <?php if ($successMsg): ?>
                <div class="success-message"><?php echo $successMsg; ?></div>
            <?php elseif ($errorMsg): ?>
                <div class="error-message"><?php echo $errorMsg; ?></div>
            <?php endif; ?>

            <!-- Contact Form -->
            <form class="contact-form" method="post">
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>


    <!-- Footer -->
   <?php include 'footer.php'; ?>

    <!-- reCAPTCHA v3 client-side: loads grecaptcha and attaches token to the contact form before submit -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recaptcha_site_key; ?>"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.querySelector('.contact-form');
        if (!form || typeof grecaptcha === 'undefined') return;

        form.addEventListener('submit', function (e) {
            // prevent default submit while we fetch token
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php echo $recaptcha_site_key; ?>', {action: 'contact'}).then(function(token) {
                    // add token to form and submit
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'g-recaptcha-response';
                    input.value = token;
                    form.appendChild(input);
                    form.submit();
                });
            });
        });
    });
    </script>
    <script src="script.js"></script>
</body>
</html>

