<?php

// --- reCAPTCHA v3 configuration ---

$recaptcha_site_key   = '###';
$recaptcha_secret_key = '###';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Digital Solutions</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recaptcha_site_key; ?>"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
     <link rel="icon" type="image/png" href="logo.png">
    <style>
        .careers-hero {
            padding: 80px 10px 30px;
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=2100&q=80');
            background-size: cover;
            background-position: center;
        }
        .careers-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgb(78 63 233 / 30%) 0%, #088ad27a 100%), rgba(0, 0, 0, 0.35);;
        }
        .careers-hero-content {
            position: relative;
            z-index: 1;
            padding: 80px 0 90px;
            text-align: left;
        }
        .careers-hero-content h1 {
            color: #fff;
            font-size: 2.75rem;
            margin-bottom: .75rem;
        }
        .careers-hero-content p {
            color: rgba(255,255,255,0.92);
            max-width: 720px;
        }
        .careers-section {
            padding: 80px 0;
        }
        .careers-list {
            margin-bottom: 40px;
        }
        .careers-list h2 {
            font-size: 2rem;
            margin-bottom: 24px;
        }
        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            margin-bottom: 40px;
        }
        @media (max-width: 900px) {
            .jobs-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .jobs-grid {
                grid-template-columns: 1fr;
            }
        }
        .job-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 18px rgba(35,131,123,0.10);
            padding: 36px 28px 28px 28px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            position: relative;
            transition: box-shadow 0.2s;
        }
        .job-card:hover {
            box-shadow: 0 8px 32px rgba(35,131,123,0.18);
        }
        .job-icon {
            font-size: 2.2rem;
            color: #0889d1;;
            margin-bottom: 18px;
        }
        .job-card h3 {
            margin-bottom: 8px;
            font-size: 1.25rem;
            color: #088ad2;
        }
        .job-card p {
            margin-bottom: 10px;
            color: #444;
        }
        .job-card span {
            font-size: 0.98rem;
            color: #888;
            margin-bottom: 18px;
        }
        .careers-form {
            background: #f7f9fa;
            border-radius: 12px;
            padding: 32px;
            max-width: 500px;
            margin: 0 auto;
        }
        .careers-form h2 {
            margin-bottom: 18px;
        }
        .careers-form .form-group {
            margin-bottom: 16px;
        }
        .careers-form input,
        .careers-form textarea {
            width: 100%;
            padding: 10px 14px;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }
        .careers-form-row {
            display: flex;
            gap: 40px;
            align-items: stretch;
            justify-content: center;
            margin-top: 32px;
        }
        .careers-form-col {
            flex: 1 1 0;
            min-width: 0;
        }
        .careers-form-form {
            background: #f7f9fa;
            border-radius: 12px;
            padding: 32px;
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .careers-form-image {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .careers-form-image-row {
            display: flex;
            width: 100%;
            gap: 0;
            align-items: stretch;
            justify-content: space-between;
        }
        .careers-form-full {
            flex: 1 1 0;
            min-width: 0;
        }
        .careers-form-form {
            background: #f7f9fa;
            border-radius: 12px 0 0 12px;
            padding: 48px 40px;
            max-width: none;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .careers-form-image {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0 12px 12px 0;
            overflow: hidden;
            background: #fff;
        }
        .careers-form-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0 12px 12px 0;
            box-shadow: 0 2px 12px rgba(0,0,0,0.10);
            min-height: 400px;
            max-height: 600px;
        }
        @media (max-width: 900px) {
            .careers-form-image-row {
                flex-direction: column;
            }
            .careers-form-form, .careers-form-image {
                border-radius: 12px;
            }
            .careers-form-image img {
                border-radius: 12px;
                min-height: 220px;
                max-height: 320px;
            }
        }
        .careers-form-form button[type="submit"] {
            margin-top: 18px;
            width: 50%;
            padding: 12px 0;
            font-size: 1rem;
            border-radius: 10px;
            background: #0889d1;;
            color: #fff;
            font-weight: 600;
            font-family: 'Lexend Deca', Arial, sans-serif;
            border: 2px solid #0889d1;;
            box-shadow: 0 2px 8px rgba(18,202,189,0.10);
            transition: all 0.25s ease;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .careers-form-form button[type="submit"]:hover {
            background: transparent;
            color: #0889d1;;
            box-shadow: 0 8px 18px rgba(18,202,189,0.25);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
   <?php include 'header.php'; ?>

    <!-- Careers Hero Section -->
    <section class="careers-hero">
        <div class="careers-hero-overlay"></div>
        <div class="container careers-hero-content">
            <h1>Join Our Team</h1>
            <p>Shape the future of technology with Digital Solutions. We value innovation, collaboration, and growth. Explore our open positions and become part of our journey!</p>
        </div>
    </section>

    <!-- Careers Content -->
    <section class="careers-section">
        <div class="container">
            <div class="careers-list">
                <h2>Open Positions</h2>
                <div class="jobs-grid">
                    <div class="job-card">
                        <div class="job-icon"><i class="fas fa-laptop-code"></i></div>
                        <h3>Frontend Developer</h3>
                        <p>React, Vue, HTML5, CSS3, JavaScript</p>
                        <span>Location: Remote / SF Office</span>
                        <a href="#apply" class="btn-apply">Apply</a>
                    </div>
                    <div class="job-card">
                        <div class="job-icon"><i class="fas fa-server"></i></div>
                        <h3>Backend Developer</h3>
                        <p>Node.js, Python, REST APIs, Databases</p>
                        <span>Location: Remote / SF Office</span>
                        <a href="#apply" class="btn-apply">Apply</a>
                    </div>
                    <div class="job-card">
                        <div class="job-icon"><i class="fas fa-pencil-ruler"></i></div>
                        <h3>UI/UX Designer</h3>
                        <p>Figma, Adobe XD, User Research, Prototyping</p>
                        <span>Location: Remote / SF Office</span>
                        <a href="#apply" class="btn-apply">Apply</a>
                    </div>
                    <div class="job-card">
                        <div class="job-icon"><i class="fas fa-cloud"></i></div>
                        <h3>Cloud Engineer</h3>
                        <p>AWS, Azure, GCP, DevOps, Automation</p>
                        <span>Location: Remote / SF Office</span>
                        <a href="#apply" class="btn-apply">Apply</a>
                    </div>
                </div>
            </div>
            <div class="careers-form-image-row" id="apply">
                <div class="careers-form-full careers-form-form">
                    <h2>Apply Now</h2>
                    <?php
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;
                    require 'PHPMailer/src/Exception.php';
                    require 'PHPMailer/src/PHPMailer.php';
                    require 'PHPMailer/src/SMTP.php';
                    $successMsg = '';
                    $errorMsg = '';
                    if (
                        $_SERVER['REQUEST_METHOD'] === 'POST' &&
                        isset($_POST['name'], $_POST['email'], $_POST['message'], $_POST['position'], $_POST['recaptcha_token'])
                    ) {
                        // Verify reCAPTCHA v3 token
                        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
                        $recaptcha_response = $_POST['recaptcha_token'];
                        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret_key . '&response=' . $recaptcha_response);
                        $recaptcha = json_decode($recaptcha);
                        if ($recaptcha && $recaptcha->success && $recaptcha->score >= 0.5) {
                            // ...existing code...
                            $mail = new PHPMailer(true);
                            try {
                                // Remove SMTPDebug and Debugoutput for production
                                $mail->isSMTP();
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPAuth = true;
                                $mail->Username = '';
                                $mail->Password = 'cble xmvu mhiw xdcp';
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                $mail->Port = 587;
                                $mail->setFrom('etech.afzaal@gmail.com', 'Website Careers');
                                $mail->addReplyTo($_POST['email'], $_POST['name']);
                                $mail->addAddress('etech.sarmad@gmail.com', 'Customer Service');
$mail->addCC('afzaalbscs240@gmail.com', 'Muhammad Afzaal');
                                $mail->Subject = 'Career Application Submission';
                                $mail->Body = "Name: {$_POST['name']}\nEmail: {$_POST['email']}\nPosition: {$_POST['position']}\nMessage: {$_POST['message']}";
                                $mail->send();
                               echo '<script>window.location.href="thankyou.php";</script>';
                               exit;
                            } catch (Exception $e) {
                                $errorMsg = 'Application could not be sent. Error: ' . $mail->ErrorInfo;
                            }
                        } else {
                            $errorMsg = 'reCAPTCHA verification failed. Please try again.';
                        }
                    }
                    ?>
                      <?php if ($successMsg): ?>
    <div class="success-message"><?php echo $successMsg; ?></div>
<?php elseif ($errorMsg): ?>
    <div class="error-message"><?php echo $errorMsg; ?></div>
<?php endif; ?>
                    <form method="POST" id="careersForm">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="position" placeholder="Position Applying For" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Tell us about yourself" rows="5" required></textarea>
                        </div>
                        <input type="hidden" name="recaptcha_token" id="recaptchaToken">
                        <button type="submit">Submit Application</button>
                    </form>
                  
                </div>
                <div class="careers-form-full careers-form-image">
                    <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=800&q=80" alt="Career Opportunities">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
<?php include 'footer.php'; ?>
 <script src="script.js"></script>
 <script>
// Google reCAPTCHA v3 integration
document.getElementById('careersForm').addEventListener('submit', function(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo $recaptcha_site_key; ?>', {action: 'submit'}).then(function(token) {
            document.getElementById('recaptchaToken').value = token;
            e.target.submit();
        });
    });
});
</script>
</body>
</html>



