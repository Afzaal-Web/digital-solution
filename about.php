
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Digital Solutions</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="logo.png">
</head>
<body>
    <!-- Header Section -->
<?php include 'header.php'; ?>
    <!-- Page Hero with Background Image -->
    <section class="page-hero" style="padding-top: 120px; position: relative; background-image: url('https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=2100&q=80'); background-size: cover; background-position: center;">
        <div style="position:absolute; inset:0; background: linear-gradient(135deg, rgb(78 63 233 / 30%) 0%, #088ad27a 100%), rgba(0, 0, 0, 0.35);"></div>
        <div class="container" style="position: relative; z-index: 1; padding: 80px 10px 90px;">
            <h1 style="color:#ffffff; font-size: 2.75rem; line-height:1.2; margin-bottom: .75rem;">About Us</h1>
            <p style="color: rgba(255,255,255,0.92); max-width: 720px;">Meet the team behind Digital Solutions and discover our story, values, and commitment to your success.</p>
        </div>
    </section>
    <!-- About Main Section -->
    <section class="about" style="background:#f8fafc;">
        <div class="container">
            <div class="section-header">
                <h2>Our Story</h2>
                <p>Founded in 2015, Digital Solutions has grown from a small group of passionate engineers into a full-service technology partner for businesses worldwide. Our journey is defined by innovation, collaboration, and a relentless focus on client success.</p>
            </div>
            <div class="about-content" >
                <div class="about-text">
                    <h3>Who We Are</h3>
                    <p>Digital Solutions is a team of passionate engineers, designers, and strategists dedicated to building modern digital products. We specialize in web, mobile, cloud, and automation solutions for startups and enterprises.</p>
                    <h3>Our Mission</h3>
                    <p>Delivering innovative, secure, and scalable technology that empowers our clients to succeed in a digital-first world.</p>
                    <h3>Our Values</h3>
                    <ul style="margin-left:1.5rem; color:#6b7280;">
                        <li>Client Success First</li>
                        <li>Continuous Innovation</li>
                        <li>Transparent Collaboration</li>
                        <li>Quality & Security</li>
                    </ul>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80" alt="Digital Team" style="width:100%; border-radius:15px; box-shadow:0 20px 40px rgba(0,0,0,0.10);">
                </div>
            </div>
   
            <!-- Why Choose Us Section -->
            <div class="section-header">
                <h2>Why Choose Digital?</h2>
                <p>We combine deep technical expertise with a client-first approach to deliver results that matter.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>Innovation</h3>
                    <p>We stay ahead of the curve, adopting the latest technologies to solve real business problems.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-users"></i></div>
                    <h3>Collaboration</h3>
                    <p>We work closely with clients, ensuring transparency and alignment at every step.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Security & Quality</h3>
                    <p>Our solutions are built for reliability, scalability, and security from day one.</p>
                </div>
            </div>
        </div>
    </section>
 
<?php include 'footer.php'; ?>
   <script src="script.js"></script>
</body>
</html>

