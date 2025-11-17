
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Digital Solutions</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="logo.png">
        <style>
        a.service-card {
            text-decoration: none;
        }
        </style>
</head>
<body>
    <!-- Header Section -->
<?php include 'header.php'; ?>

    <!-- Page Hero with Background Image -->
    <section class="page-hero" style="padding-top: 120px; position: relative; background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=2100&q=80'); background-size: cover; background-position: center;">
        <div style="position:absolute; inset:0; background: linear-gradient(135deg, rgb(78 63 233 / 30%) 0%, #088ad27a 100%), rgba(0, 0, 0, 0.35);"></div>
        <div class="container" style="position: relative; z-index: 1; padding: 80px 10px 90px;">
            <h1 style="color:#ffffff; font-size: 2.75rem; line-height:1.2; margin-bottom: .75rem;">Our Services</h1>
            <p style="color: rgba(255,255,255,0.92); max-width: 720px;">Expert solutions across web, mobile, cloud, design, data, security, and DevOps — engineered for reliability and scale.</p>
        </div>
    </section>

    <!-- Services Detail Grid -->
      <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Comprehensive software development solutions tailored to your needs</p>
            </div>
            <div class="services-grid">
                <a href="web-development.html" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Custom web applications built with modern frameworks and technologies for optimal performance and user experience.</p>
                </a>
                <a href="mobile-apps.html" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Apps</h3>
                    <p>Native and cross-platform mobile applications that deliver seamless experiences across all devices.</p>
                </a>
                <a href="cloud-solutions.html" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Cloud Solutions</h3>
                    <p>Scalable cloud infrastructure and migration services to optimize your business operations and reduce costs.</p>
                </a>
                <a href="uiux-design.html" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>User-centered design solutions that create intuitive and engaging digital experiences for your customers.</p>
                </a>
                <a href="database-management.html" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Database Management</h3>
                    <p>Efficient database design, optimization, and management services to ensure your data is secure and accessible.</p>
                </a>
                <a href="cybersecurity.html" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Cybersecurity</h3>
                    <p>Comprehensive security solutions to protect your applications and data from threats and vulnerabilities.</p>
                </a>
                <a href="devops-automation.html" class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>DevOps & Automation</h3>
                    <p>Streamline your development workflow with automated deployment, monitoring, and infrastructure management.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Our Process (enhanced) -->
    <section class="about" style="background:#fff;">
        <div class="container">
            <div class="section-header" style="margin-bottom: 2.5rem;">
                <h2>How We Work</h2>
                <p>Clear phases, tight feedback loops, and measurable outcomes at every milestone.</p>
            </div>

            <!-- Horizontal steps with icons and gradient accents -->
            <div class="process-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem; align-items: stretch;">
                <div class="service-card process-step" style="position:relative;">
                    <div style="position:absolute; inset:0 0 auto 0; height:6px; border-radius:10px 10px 0 0; background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;"></div>
                    <div style="display:flex; align-items:center; gap:.75rem; margin-bottom: .75rem;">
                        <div style="width:44px; height:44px; border-radius:12px; display:flex; align-items:center; justify-content:center; color:#fff; background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <span style="font-weight:700; color:#088ad2;">01</span>
                    </div>
                    <h3 style="margin-bottom:.5rem;">Discover</h3>
                    <p style="color:#6b7280;">Workshops, requirements, risk mapping, and success metrics to align teams.</p>
                </div>

                <div class="service-card process-step" style="position:relative;">
                    <div style="position:absolute; inset:0 0 auto 0; height:6px; border-radius:10px 10px 0 0; background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;"></div>
                    <div style="display:flex; align-items:center; gap:.75rem; margin-bottom: .75rem;">
                        <div style="width:44px; height:44px; border-radius:12px; display:flex; align-items:center; justify-content:center; color:#fff; background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <span style="font-weight:700; color:#088ad2;">02</span>
                    </div>
                    <h3 style="margin-bottom:.5rem;">Design</h3>
                    <p style="color:#6b7280;">Information architecture, UX flows, prototypes, and a scalable design system.</p>
                </div>

                <div class="service-card process-step" style="position:relative;">
                    <div style="position:absolute; inset:0 0 auto 0; height:6px; border-radius:10px 10px 0 0; background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;"></div>
                    <div style="display:flex; align-items:center; gap:.75rem; margin-bottom: .75rem;">
                        <div style="width:44px; height:44px; border-radius:12px; display:flex; align-items:center; justify-content:center; color:#fff; background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;">
                            <i class="fas fa-code"></i>
                        </div>
                        <span style="font-weight:700; color:#088ad2;">03</span>
                    </div>
                    <h3 style="margin-bottom:.5rem;">Build</h3>
                    <p style="color:#6b7280;">Agile, test‑driven development, CI/CD, and code reviews for quality.</p>
                </div>

                <div class="service-card process-step" style="position:relative;">
                    <div style="position:absolute; inset:0 0 auto 0; height:6px; border-radius:10px 10px 0 0; background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;"></div>
                    <div style="display:flex; align-items:center; gap:.75rem; margin-bottom: .75rem;">
                        <div style="width:44px; height:44px; border-radius:12px; display:flex; align-items:center; justify-content:center; color:#fff; background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);;">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <span style="font-weight:700; color:#088ad2;">04</span>
                    </div>
                    <h3 style="margin-bottom:.5rem;">Launch & Scale</h3>
                    <p style="color:#6b7280;">Production readiness, observability, and iterative optimization after launch.</p>
                </div>
            </div>

            <!-- Add a subtle note -->
            <p style="text-align:center; color:#6b7280; margin-top: 1.25rem;">Weekly demos and shared roadmaps keep stakeholders aligned throughout.</p>
        </div>
    </section>

    <!-- FAQs (two-column layout) -->
    <section class="contact" style="background:#f8fafc;">
        <div class="container">
            <div class="section-header">
                <h2>FAQs</h2>
                <p>Answers to the most common questions about our services and delivery.</p>
            </div>
            <div class="contact-content" style="gap: 2rem; align-items: stretch; min-height: 520px;">
                <div style="display:flex; flex-direction: column; gap: 1rem; height: 100%;">
                    <details class="service-card" style="text-align:left;" open>
                        <summary style="cursor:pointer; font-weight:600;">How long does a typical project take?</summary>
                        <p style="margin-top: .75rem; color:#6b7280;">Most MVPs are delivered in 6–10 weeks; larger programs are phased.</p>
                    </details>
                    <details class="service-card" style="text-align:left;">
                        <summary style="cursor:pointer; font-weight:600;">Do you provide maintenance and support?</summary>
                        <p style="margin-top: .75rem; color:#6b7280;">Yes. We offer flexible SLAs and ongoing feature development retainers.</p>
                    </details>
                    <details class="service-card" style="text-align:left;">
                        <summary style="cursor:pointer; font-weight:600;">Can you work with our in‑house team?</summary>
                        <p style="margin-top: .75rem; color:#6b7280;">Absolutely. We integrate with your team and processes as needed.</p>
                    </details>
                    <details class="service-card" style="text-align:left;">
                        <summary style="cursor:pointer; font-weight:600;">What engagement models do you offer?</summary>
                        <p style="margin-top: .75rem; color:#6b7280;">Fixed‑price, time‑and‑materials, and dedicated team models depending on scope.</p>
                    </details>
                    <details class="service-card" style="text-align:left;">
                        <summary style="cursor:pointer; font-weight:600;">Do you help with architecture and discovery?</summary>
                        <p style="margin-top: .75rem; color:#6b7280;">Yes. We run discovery workshops and produce architecture blueprints and roadmaps.</p>
                    </details>
                </div>
                <div style="height: 100%;">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" alt="FAQs illustration" style="width:100%; height:100%; object-fit: cover; border-radius: 15px; box-shadow: 0 20px 40px rgba(0,0,0,0.12);">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="services" style="padding-top:60px; padding-bottom:80px; background:#fff;">
        <div class="container" style="text-align:center;">
            <h2 style="margin-bottom:1rem;">Ready to build?</h2>
            <p style="color:#6b7280; margin-bottom:2rem;">Tell us about your project and we’ll propose the best path forward.</p>
            <a href="index.html#contact" class="btn-primary">Start Your Project</a>
        </div>
    </section>


<?php include 'footer.php'; ?>

    <script src="script.js"></script>
    <script>
        // Enable smooth anchor offset for fixed header on this page
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });
    </script>
    
</body>
</html>


