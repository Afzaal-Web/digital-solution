
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Apps - Digital Solutions</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="logo.png">
    <style>
        .services-layout { display: flex; gap: 2.5rem; margin-top: 40px; }
        .services-sidebar {
            min-width: 260px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(18,202,189,0.08), 0 1.5px 8px rgba(35,131,123,0.07);
            padding: 2.5rem 1.5rem 2.5rem 1.5rem;
            height: fit-content;
            position: relative;
        }
        .services-sidebar ul { list-style: none; padding: 0; }
        .services-sidebar li { margin-bottom: 1.2rem; }
        .services-sidebar a {
            color: #282928;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.08rem;
            display: flex;
            align-items: center;
            gap: 0.7rem;
            padding: 12px 18px;
            border-radius: 12px;
            transition: color 0.2s, background 0.2s, box-shadow 0.2s;
            position: relative;
        }
        .services-sidebar a.active, .services-sidebar a:hover {
            color: #fff;
            background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);
            box-shadow: 0 4px 16px rgba(18,202,189,0.10);
        }
        .services-sidebar a i {
            font-size: 1.15rem;
        }
        .services-content { flex: 1; }
        .services-grid { margin-bottom: 2.5rem; }
        @media (max-width: 900px) {
            .services-layout { flex-direction: column; }
            .services-sidebar { width: 100%; margin-bottom: 2rem; }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
     <?php include 'header.php'; ?>
    <!-- Hero Section -->
    <section class="page-hero" style="padding-top: 120px; position: relative; background-image: url('https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=2100&q=80'); background-size: cover; background-position: center;">
        <div style="position:absolute; inset:0; background: linear-gradient(135deg, rgb(78 63 233 / 30%) 0%, #088ad27a 100%), rgba(0, 0, 0, 0.35);"></div>
        <div class="container" style="position: relative; z-index: 1; padding: 80px 10px 90px;">
            <h1 style="color:#ffffff; font-size: 2.75rem; line-height:1.2; margin-bottom: .75rem;">Mobile Apps</h1>
            <p style="color: rgba(255,255,255,0.92); max-width: 720px;">Native and cross-platform mobile applications for seamless experiences on every device.</p>
        </div>
    </section>
    <!-- Main Layout -->
    <div class="container services-layout">
          <?php include 'services-sidebar.php'; ?>
        <main class="services-content">
            <div class="section-header">
                <h2>Our Mobile App Services</h2>
                <p>We design and develop high-quality mobile applications for iOS and Android, using the latest frameworks and best practices. Our apps are fast, secure, and deliver outstanding user experiences.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fab fa-apple"></i></div>
                    <h3>iOS Development</h3>
                    <p>Swift and Objective-C for robust, native iPhone and iPad apps.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fab fa-android"></i></div>
                    <h3>Android Development</h3>
                    <p>Kotlin and Java for high-performance Android applications.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Cross-Platform</h3>
                    <p>React Native and Flutter for apps that work everywhere.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>App Security</h3>
                    <p>End-to-end security, data protection, and compliance for mobile solutions.</p>
                </div>
            </div>
            <div style="margin: 3rem 0; text-align:center;">
                <img src="https://images.unsplash.com/photo-1748682449490-e601a8a38b8f?w=500&auto=format&fit=crop&q=80&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fG1vYmlsZSUyMGFwcHMlMjBkZXZlbG9wbWVudHxlbnwwfDB8MHx8fDA%3D" alt="Mobile Apps" style="width:100%; max-width:700px; border-radius:15px; box-shadow:0 20px 40px rgba(0,0,0,0.10);">
            </div>
            <div class="section-header">
                <h2>Technologies We Use</h2>
                <p>Our stack includes Swift, Kotlin, Java, React Native, Flutter, Firebase, and more.</p>
            </div>
            <div class="services-grid" style="margin-bottom:2.5rem;">
                <div class="service-card"><div class="service-icon"><i class="fab fa-apple"></i></div><h3>Swift</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fab fa-android"></i></div><h3>Kotlin</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fab fa-java"></i></div><h3>Java</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fab fa-react"></i></div><h3>React Native</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fas fa-bolt"></i></div><h3>Flutter</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fas fa-fire"></i></div><h3>Firebase</h3></div>
            </div>
            <!-- Get a Quote Section -->
            <section class="services" style="padding-top:40px; padding-bottom:40px; background:#fff;">
                <div class="container" style="text-align:center;">
                    <h2 style="margin-bottom:1rem;">Ready to launch your mobile app?</h2>
                    <p style="color:#6b7280; margin-bottom:2rem;">Share your vision and we'll help you build a standout mobile experience.</p>
                    <a href="index.php#contact" class="btn-primary">Get a Quote</a>
                </div>
            </section>
        </main>
    </div>
 <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>


