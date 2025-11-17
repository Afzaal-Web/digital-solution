<?php

// --- reCAPTCHA v3 configuration ---
$recaptcha_site_key   = '6LdAIw8sAAAAALwiw0AKCbmwuQbq_S_VgZFKZJz5';
$recaptcha_secret_key = '6LdAIw8sAAAAAG3o8Sz9XBegel2T545TM5GQRzp4';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$successMsg = '';
$errorMsg = '';

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['name'], $_POST['email'], $_POST['requirements'], $_POST['recaptcha_token'])
) {
    // Verify reCAPTCHA v3 token
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_response = $_POST['recaptcha_token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret_key . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
    if ($recaptcha && $recaptcha->success && $recaptcha->score >= 0.5) {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0; // Disable debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'etech.afzaal@gmail.com';
            $mail->Password = 'cble xmvu mhiw xdcp';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('etech.afzaal@gmail.com', 'Website Contact');
            $mail->addReplyTo($_POST['email'], $_POST['name']);
            $mail->addAddress('etech.sarmad@gmail.com', 'Customer Service');
            $mail->addCC('afzaalbscs240@gmail.com', 'Muhammad Afzaal');

            $mail->Subject = 'Quote Request Submission';
            $mail->Body = "Name: {$_POST['name']}\nEmail: {$_POST['email']}\nCompany: {$_POST['company']}\nPhone: {$_POST['phone']}\nRequirements: {$_POST['requirements']}";

            $mail->send();
            echo '<script>window.location.href="thankyou.php";</script>';
            exit;
        } catch (Exception $e) {
            $errorMsg = 'Message could not be sent. Error: ' . $mail->ErrorInfo;
        }
    } else {
        $errorMsg = 'reCAPTCHA verification failed. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get a Quote - Digital Solutions</title>
    <link rel="stylesheet" href="style.css">
    <!-- Google reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recaptcha_site_key; ?>"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="logo.png">
    <style>
        .quote-hero {
            padding: 80px 10px 30px;
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1400&q=80');
            background-size: cover;
            background-position: center;
        }
        .quote-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgb(78 63 233 / 30%) 0%, #088ad27a 100%), rgba(0, 0, 0, 0.35);;
        }
        .quote-hero-content {
            position: relative;
            z-index: 1;
            padding: 80px 0 90px;
            text-align: left;
        }
        .quote-hero-content h1 {
            color: #fff;
            font-size: 2.75rem;
            margin-bottom: .75rem;
        }
        .quote-hero-content p {
            color: rgba(255,255,255,0.92);
            max-width: 720px;
        }
        .quote-section {
            padding: 80px 0;
        }
        .quote-form-row {
            display: flex;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            gap: 0;
            align-items: stretch;
            justify-content: space-between;
        }
        .quote-form-full {
            flex: 1 1 0;
            min-width: 0;
        }
        .quote-form-form {
            background: #f7f9fa;
            border-radius: 12px 0 0 12px;
            padding: 48px 40px;
            max-width: none;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .quote-form-form h2 {
            margin-bottom: 18px;
        }
        .quote-form-form .form-group {
            margin-bottom: 16px;
        }
        .quote-form-form input,
        .quote-form-form textarea {
            width: 100%;
            padding: 10px 14px;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }
        .quote-form-form button[type="submit"] {
          margin-top: 18px;
          width: 50%;
          padding: 12px 0;
          font-size: 1rem;
          border-radius: 10px;
          background: #0889d1;
          color: #fff;
          font-weight: 600;
          font-family: 'Lexend Deca', Arial, sans-serif;
          border: 2px solid #0889d1;
          box-shadow: 0 2px 8px rgba(18, 202, 189, 0.10);
          transition: all 0.25s ease;
          display: block;margin-left: auto;
          margin-right: auto;
        }
        .quote-form-form button[type="submit"]:hover {
            background: transparent;
            color: #12CABD;
            box-shadow: 0 8px 18px rgba(18,202,189,0.25);
            cursor: pointer;
        }
        .quote-form-image {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0 12px 12px 0;
            overflow: hidden;
            background: #fff;
        }
        .quote-form-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0 12px 12px 0;
            box-shadow: 0 2px 12px rgba(0,0,0,0.10);
            min-height: 400px;
            max-height: 600px;
        }
        @media (max-width: 900px) {
            .quote-form-row {
                flex-direction: column;
            }
            .quote-form-form, .quote-form-image {
                border-radius: 12px;
            }
            .quote-form-image img {
                border-radius: 12px;
                min-height: 220px;
                max-height: 320px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
  <?php include 'header.php'; ?>

    <!-- Quote Hero Section -->
    <section class="quote-hero">
        <div class="quote-hero-overlay"></div>
        <div class="container quote-hero-content">
            <h1>Request a Free Quote</h1>
            <p>Let us know your project requirements and we'll get back to you with a tailored solution and pricing.</p>
        </div>
    </section>

    <!-- Quote Form Section -->
    <section class="quote-section">
        <div class="quote-form-row">
            <div class="quote-form-full quote-form-form">
                <h2>Get a Quote</h2>
                 <!-- Show Success/Error above the form -->
            <?php if ($successMsg): ?>
                <div class="success-message"><?php echo $successMsg; ?></div>
            <?php elseif ($errorMsg): ?>
                <div class="error-message"><?php echo $errorMsg; ?></div>
            <?php endif; ?>
                <form method="POST" id="quoteForm">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="company" placeholder="Company Name (optional)" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone Number (optional)" required>
                    </div>
                    <div class="form-group">
                        <textarea name="requirements" placeholder="Project Requirements" rows="5" required></textarea>
                    </div>
                    <input type="hidden" name="recaptcha_token" id="recaptchaToken">
                    <button type="submit">Submit Request</button>
                </form>
              
            </div>
            <div class="quote-form-full quote-form-image">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80" alt="Get a Quote">
            </div>
        </div>
    </section>

    <!-- Footer -->
   <?php include 'footer.php'; ?>

    <script src="script.js"></script>
<script>
// Google reCAPTCHA v3 integration
document.getElementById('quoteForm').addEventListener('submit', function(e) {
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