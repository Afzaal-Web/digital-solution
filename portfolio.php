
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Digital Solutions</title>
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
            background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;
            color: #fff;
            border: none;
        }
        .portfolio-buttons .btn-primary:hover {
            background: linear-gradient(90deg, #0889d1; 0%, #3fe9db 100%);
            color: #fff;
        }
        .portfolio-buttons .btn-secondary {
            background: #fff;
            color: #0889d1;;
            border: 2px solid #0889d1;;
        }
        .portfolio-buttons .btn-secondary:hover {
            background: #0889d1;;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
<?php include 'header.php'; ?>

    <!-- Page Hero with Background Image -->
    <section class="page-hero" style="padding-top: 120px; position: relative; background-image: url('https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=2100&q=80'); background-size: cover; background-position: center;">
        <div style="position:absolute; inset:0; background: linear-gradient(135deg, rgb(78 63 233 / 30%) 0%, #088ad27a 100%), rgba(0, 0, 0, 0.35);"></div>
        <div class="container" style="position: relative; z-index: 1; padding: 80px 10px 90px;">
            <h1 style="color:#ffffff; font-size: 2.75rem; line-height:1.2; margin-bottom: .75rem;">Our Portfolio</h1>
            <p style="color: rgba(255,255,255,0.92); max-width: 720px;">Explore our showcase of successful projects, innovative solutions, and digital products crafted for clients worldwide.</p>
        </div>
    </section>

    <!-- Portfolio Grid Only -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="portfolio-grid">
                <div class="portfolio-item" id="web-apps">
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
                <div class="portfolio-item" id="mobile-apps">
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
                <div class="portfolio-item" id="dashboards">
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
                <div class="portfolio-item" id="saas-platforms">
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
                <div class="portfolio-item" id="iot">
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
                <div class="portfolio-item" id="ai-tools">
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

    <!-- Footer -->
  <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>


