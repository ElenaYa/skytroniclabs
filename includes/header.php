<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($DESCRIPTION) ? $DESCRIPTION : 'Skytronic Labs - Modern Technology Education Platform. Learn Web Development, Cybersecurity, AI/ML, and more with expert instructors.'; ?>">
    <meta name="keywords" content="<?php echo isset($KEYWORDS) ? $KEYWORDS : 'edtech, technology courses, web development, programming, cybersecurity, artificial intelligence, online learning'; ?>">
    <meta name="author" content="Skytronic Labs">
    <meta property="og:title" content="<?php echo isset($TITLE) ? $TITLE : 'Skytronic Labs - Modern Tech Education'; ?>">
    <meta property="og:description" content="<?php echo isset($DESCRIPTION) ? $DESCRIPTION : 'Transform your career with cutting-edge technology courses designed by industry experts.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://skytroniclabs.com">
    <meta property="og:image" content="https://skytroniclabs.com/images/og-image.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($TITLE) ? $TITLE : 'Skytronic Labs - Modern Tech Education'; ?>">
    <meta name="twitter:description" content="<?php echo isset($DESCRIPTION) ? $DESCRIPTION : 'Transform your career with cutting-edge technology courses designed by industry experts.'; ?>">
    <meta name="twitter:image" content="https://skytroniclabs.com/images/og-image.webp">
    
    <title><?php echo isset($TITLE) ? $TITLE : 'Skytronic Labs - Modern Tech Education Platform'; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Skytronic Labs",
        "description": "Modern technology education platform offering courses in web development, cybersecurity, AI/ML, and more.",
        "url": "https://skytroniclabs.com",
        "logo": "https://skytroniclabs.com/images/logo.webp",
        "sameAs": [
            "https://twitter.com/skytroniclabs",
            "https://linkedin.com/company/skytroniclabs",
            "https://github.com/skytroniclabs"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "",
            "contactType": "customer service",
            "email": "admin@skytroniclabs.com"
        },
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "US"
        }
    }
    </script>
</head>
<body>
    <!-- Cookie Consent Banner -->
    <div id="cookieConsent" class="cookie-consent">
        <div class="cookie-content">
            <div class="cookie-text">
                <p>We use cookies to enhance your learning experience and analyze our traffic. By continuing to use our site, you agree to our use of cookies.</p>
            </div>
            <div class="cookie-actions">
                <button type="button" class="btn btn-outline-light btn-sm me-2" onclick="manageCookies()">Manage Preferences</button>
                <button type="button" class="btn btn-secondary btn-sm me-2" onclick="rejectCookies()">Reject All</button>
                <button type="button" class="btn btn-primary btn-sm" onclick="acceptCookies()">Accept All</button>
            </div>
        </div>
    </div>

    <!-- Cookie Preferences Modal -->
    <div id="cookieModal" class="cookie-modal">
        <div class="cookie-modal-content">
            <div class="cookie-modal-header">
                <h3>Cookie Preferences</h3>
                <button type="button" class="btn-close" onclick="closeCookieModal()"></button>
            </div>
            <div class="cookie-modal-body">
                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <h4>Essential Cookies</h4>
                        <div class="toggle-switch">
                            <input type="checkbox" id="essential" checked disabled>
                            <label for="essential"></label>
                        </div>
                    </div>
                    <p>These cookies are necessary for the website to function and cannot be switched off.</p>
                </div>
                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <h4>Performance Cookies</h4>
                        <div class="toggle-switch">
                            <input type="checkbox" id="performance">
                            <label for="performance"></label>
                        </div>
                    </div>
                    <p>These cookies help us understand how visitors interact with our website.</p>
                </div>
                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <h4>Marketing Cookies</h4>
                        <div class="toggle-switch">
                            <input type="checkbox" id="marketing">
                            <label for="marketing"></label>
                        </div>
                    </div>
                    <p>These cookies are used to show you relevant advertisements.</p>
                </div>
            </div>
            <div class="cookie-modal-footer">
                <button type="button" class="btn btn-secondary me-2" onclick="closeCookieModal()">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="saveCookiePreferences()">Save Preferences</button>
            </div>
        </div>
    </div>

    <!-- Navigation Header -->
    <header class="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="index.php">
                    <div class="logo">
                        <div class="logo-icon">
                            <i class="fas fa-atom"></i>
                        </div>
                        <div class="logo-text">
                            <span class="logo-name">Skytronic</span>
                            <span class="logo-subtitle">Labs</span>
                        </div>
                    </div>
                </a>

                <!-- Mobile Menu Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">
                                <i class="fas fa-users"></i>
                                <span>About</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="courses.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-graduation-cap"></i>
                                <span>Courses</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="courses.php#webdev">
                                    <i class="fas fa-code"></i>
                                    Web Development
                                </a></li>
                                <li><a class="dropdown-item" href="courses.php#javascript">
                                    <i class="fab fa-js-square"></i>
                                    Advanced JavaScript
                                </a></li>
                                <li><a class="dropdown-item" href="courses.php#php">
                                    <i class="fab fa-php"></i>
                                    PHP & MySQL
                                </a></li>
                                <li><a class="dropdown-item" href="courses.php#cybersecurity">
                                    <i class="fas fa-shield-alt"></i>
                                    Cybersecurity
                                </a></li>
                                <li><a class="dropdown-item" href="courses.php#cloud">
                                    <i class="fas fa-cloud"></i>
                                    Cloud & DevOps
                                </a></li>
                                <li><a class="dropdown-item" href="courses.php#ai-ml">
                                    <i class="fas fa-brain"></i>
                                    AI & Machine Learning
                                </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reviews.php">
                                <i class="fas fa-star"></i>
                                <span>Reviews</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">
                                <i class="fas fa-envelope"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">
                                <i class="fas fa-question-circle"></i>
                                <span>FAQ</span>
                            </a>
                        </li>
                    </ul>

                    <!-- CTA Button -->
                    <div class="navbar-cta">
                        <a href="courses.php" class="btn btn-primary">
                            <i class="fas fa-rocket"></i>
                            Start Learning
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Navigation Background Effect -->
        <div class="nav-bg-effect"></div>
        
        <!-- Animated Bottom Line -->
        <div class="nav-bottom-line"></div>
    </header>

    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="loading-content">
            <div class="loading-logo">
                <div class="logo-icon">
                    <i class="fas fa-atom"></i>
                </div>
            </div>
            <div class="loading-text">Loading Skytronic Labs...</div>
            <div class="loading-bar">
                <div class="loading-progress"></div>
            </div>
        </div>
    </div>