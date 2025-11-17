
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Design - Digital Solutions</title>
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
    <section class="page-hero" style="padding-top: 120px; position: relative; background-image: url('https://images.unsplash.com/photo-1602576666092-bf6447a729fc?w=500&auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div style="position:absolute; inset:0; background: linear-gradient(135deg, rgb(78 63 233 / 30%) 0%, #088ad27a 100%), rgba(0, 0, 0, 0.35);"></div>
        <div class="container" style="position: relative; z-index: 1; padding: 80px 10px 90px;">
            <h1 style="color:#ffffff; font-size: 2.75rem; line-height:1.2; margin-bottom: .75rem;">UI/UX Design</h1>
            <p style="color: rgba(255,255,255,0.92); max-width: 720px;">Crafting intuitive, engaging digital experiences that delight users and drive results.</p>
        </div>
    </section>
    <!-- Main Layout -->
    <div class="container services-layout">
             <?php include 'services-sidebar.php'; ?>
        <main class="services-content">
            <div class="section-header">
                <h2>Our UI/UX Design Services</h2>
                <p>We design beautiful, user-centric interfaces for web and mobile applications. Our team blends creativity with usability to deliver products that are both visually stunning and easy to use.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <h3>Wireframing & Prototyping</h3>
                    <p>Transforming ideas into interactive prototypes for rapid validation.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-object-group"></i></div>
                    <h3>UI Design</h3>
                    <p>Crafting visually appealing interfaces that reflect your brand identity.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-user-check"></i></div>
                    <h3>UX Research</h3>
                    <p>Understanding user needs and behaviors to inform design decisions.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-vial"></i></div>
                    <h3>Usability Testing</h3>
                    <p>Ensuring your product is intuitive and enjoyable for real users.</p>
                </div>
            </div>
            <div style="margin: 3rem 0; text-align:center;">
                <img src="https://images.unsplash.com/photo-1576153192396-180ecef2a715?w=500&auto=format&fit=crop&q=80" alt="UI/UX Design" style="width:100%; max-width:700px; border-radius:15px; box-shadow:0 20px 40px rgba(0,0,0,0.10);">
            </div>
            <div class="section-header">
                <h2>Technologies & Tools</h2>
                <p>We use industry-leading tools to deliver exceptional design results.</p>
            </div>
            <div class="services-grid" style="margin-bottom:2.5rem;">
                <div class="service-card"><div class="service-icon"><i class="fab fa-figma"></i></div><h3>Figma</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fab fa-sketch"></i></div><h3>Sketch</h3></div>
                <div class="service-card"><div class="service-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" role="img" aria-labelledby="xdTitle" class="adobe-xd-logo" width="64" height="64">
  <title id="xdTitle">Adobe XD logo</title>
  <defs>
    <linearGradient id="xdGradient" gradientTransform="rotate(135)">
      <stop offset="0%" stop-color="#088ad2"/>
      <stop offset="100%" stop-color="#005fa3"/>
    </linearGradient>
  </defs>
  <!-- Gradient background -->
  <rect width="0" height="0" rx="12" ry="12" fill="url(#xdGradient)"/>
  <!-- "XD" text -->
  <text x="50%" y="66%" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" font-weight="700" font-size="44" fill="#ffffff">XD</text>
</svg>
</div><h3>Adobe XD</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fas fa-drafting-compass"></i></div><h3>InVision</h3></div>
                <div class="service-card"><div class="service-icon"><i class="fas fa-user-friends"></i></div><h3>UserTesting</h3></div>
            </div>
            <!-- Get a Quote Section -->
            <section class="services" style="padding-top:40px; padding-bottom:40px; background:#fff;">
                <div class="container" style="text-align:center;">
                    <h2 style="margin-bottom:1rem;">Ready to elevate your product's user experience?</h2>
                    <p style="color:#6b7280; margin-bottom:2rem;">Contact us to discuss your UI/UX needs and get a tailored solution.</p>
                    <a href="index.php#contact" class="btn-primary">Get a Quote</a>
                </div>
            </section>
        </main>
    </div>
  <?php include 'footer.php'; ?>
   <script src="script.js"></script>
</body>
</html>


