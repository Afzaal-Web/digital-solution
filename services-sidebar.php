<?php
// services-sidebar.php

// Define services list (page => [icon, label])
$services = [
    "web-development.php"     => ["fas fa-code", "Web Development"],
    "mobile-apps.php"         => ["fas fa-mobile-alt", "Mobile Apps"],
    "cloud-solutions.php"     => ["fas fa-cloud", "Cloud Solutions"],
    "uiux-design.php"         => ["fas fa-paint-brush", "UI/UX Design"],
    "database-management.php" => ["fas fa-database", "Database Management"],
    "cybersecurity.php"       => ["fas fa-shield-alt", "Cybersecurity"],
    "devops-automation.php"   => ["fas fa-cogs", "DevOps & Automation"],
];

// Get current page name
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<aside class="services-sidebar">
    <ul>
        <?php foreach ($services as $link => [$icon, $label]): ?>
            <li>
                <a href="<?php echo $link; ?>" class="<?php echo ($currentPage === $link) ? 'active' : ''; ?>">
                    <i class="<?php echo $icon; ?>"></i> <?php echo $label; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>
