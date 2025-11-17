
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps & Automation - Digital Solutions</title>
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
    <section class="page-hero" style="padding-top: 120px; position: relative; background-image: url('https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=2100&q=80'); background-size: cover; background-position: center;">
        <div style="position:absolute; inset:0; background: linear-gradient(135deg, rgb(78 63 233 / 30%) 0%, #088ad27a 100%), rgba(0, 0, 0, 0.35);"></div>
        <div class="container" style="position: relative; z-index: 1; padding: 80px 10px 90px;">
            <h1 style="color:#ffffff; font-size: 2.75rem; line-height:1.2; margin-bottom: .75rem;">DevOps & Automation</h1>
            <p style="color: rgba(255,255,255,0.92); max-width: 720px;">Accelerate development and deployment with automated, reliable workflows.</p>
        </div>
    </section>
    <!-- Main Layout -->
    <div class="container services-layout">
           <?php include 'services-sidebar.php'; ?>
        <main class="services-content">
            <div class="section-header">
                <h2>Our DevOps & Automation Services</h2>
                <p>We streamline your software delivery pipeline with CI/CD, infrastructure as code, and automated monitoring for faster, more reliable releases.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-sync"></i></div>
                    <h3>CI/CD Pipelines</h3>
                    <p>Automated build, test, and deployment workflows for rapid delivery.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-server"></i></div>
                    <h3>Infrastructure as Code</h3>
                    <p>Provision and manage infrastructure using code for consistency and scalability.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-robot"></i></div>
                    <h3>Process Automation</h3>
                    <p>Automate repetitive tasks to boost productivity and reduce errors.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-chart-area"></i></div>
                    <h3>Monitoring & Logging</h3>
                    <p>Real-time monitoring and analytics for proactive issue resolution.</p>
                </div>
            </div>
            <div style="margin: 3rem 0; text-align:center;">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1200&q=80" alt="DevOps & Automation" style="width:100%; max-width:700px; border-radius:15px; box-shadow:0 20px 40px rgba(0,0,0,0.10);">
            </div>
            <div class="section-header">
                <h2>Technologies We Use</h2>
                <p>We leverage top DevOps and automation tools for seamless delivery.</p>
            </div>
            <div class="services-grid" style="margin-bottom:2.5rem;">
                <div class="service-card"><div class="service-icon"><i class="fab fa-jenkins"></i></div><h3>Jenkins</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fab fa-git-alt"></i></div><h3>Git</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fab fa-docker"></i></div><h3>Docker</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fas fa-cubes"></i></div><h3>Kubernetes</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fas fa-layer-group"></i></div><h3>Terraform</h3></div>
            </div>
            <!-- Get a Quote Section -->
            <section class="services" style="padding-top:40px; padding-bottom:40px; background:#fff;">
                <div class="container" style="text-align:center;">
                    <h2 style="margin-bottom:1rem;">Ready to automate your development workflow?</h2>
                    <p style="color:#6b7280; margin-bottom:2rem;">Contact us to discuss your DevOps needs and get a tailored solution.</p>
                    <a href="index.php#contact" class="btn-primary">Get a Quote</a>
                </div>
            </section>
        </main>
    </div>
  <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>


