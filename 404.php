<?php
$TITLE = "Page Not Found - 404 Error | Skytronic Labs";
$DESCRIPTION = "Sorry, the page you're looking for doesn't exist. Explore Skytronic Labs courses, career resources, and technology education platform.";
$KEYWORDS = "404 error, page not found, skytronic labs, technology courses, programming education";
include 'includes/header.php';
?>

<main id="main-content">
    <!-- 404 Hero Section -->
    <section class="error-hero">
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-6">
                    <div class="error-content">
                        <div class="error-code">
                            <span class="code-number">404</span>
                            <div class="code-animation">
                                <div class="binary-rain">
                                    <span>01001000</span>
                                    <span>01100101</span>
                                    <span>01101100</span>
                                    <span>01110000</span>
                                </div>
                            </div>
                        </div>
                        <h1 class="error-title">Oops! Page Not <span class="text-accent">Found</span></h1>
                        <p class="error-subtitle">The page you're looking for seems to have wandered off into the digital void. Don't worry though – our best developers are on the case!</p>
                        
                        <div class="error-suggestions">
                            <h3>What you can do:</h3>
                            <ul>
                                <li>Check the URL for any typos</li>
                                <li>Use the search bar to find what you need</li>
                                <li>Browse our popular courses below</li>
                                <li>Contact our support team if you think this is an error</li>
                            </ul>
                        </div>
                        
                        <div class="error-actions">
                            <a href="index.php" class="btn btn-primary btn-lg me-3">
                                <i class="fas fa-home"></i>
                                Go Home
                            </a>
                            <a href="courses.php" class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-graduation-cap"></i>
                                Browse Courses
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="error-illustration">
                        <div class="floating-elements">
                            <div class="element code-bracket">{</div>
                            <div class="element code-bracket">}</div>
                            <div class="element code-tag">&lt;/&gt;</div>
                            <div class="element code-function">function()</div>
                            <div class="element code-variable">$404</div>
                            <div class="element code-error">ERROR</div>
                        </div>
                        <div class="robot-character">
                            <div class="robot-head">
                                <div class="robot-eyes">
                                    <div class="eye left"></div>
                                    <div class="eye right"></div>
                                </div>
                                <div class="robot-mouth sad"></div>
                            </div>
                            <div class="robot-body">
                                <div class="error-screen">
                                    <span>404</span>
                                    <div class="screen-glitch"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Search Section -->
    <section class="quick-search py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="search-section">
                        <h2 class="text-center mb-4">Looking for something specific?</h2>
                        <div class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search courses, topics, or questions..." aria-label="Search">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search"></i>
                                    Search
                                </button>
                            </div>
                        </div>
                        <div class="popular-searches">
                            <span>Popular searches:</span>
                            <a href="courses.php#webdev" class="search-tag">Web Development</a>
                            <a href="courses.php#cybersecurity" class="search-tag">Cybersecurity</a>
                            <a href="courses.php#ai-ml" class="search-tag">AI & Machine Learning</a>
                            <a href="faq.php#pricing" class="search-tag">Pricing</a>
                            <a href="contact.php" class="search-tag">Contact Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Pages Section -->
    <section class="popular-pages py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Popular Pages</h2>
                    <p class="section-subtitle">Here are some of our most visited pages that might help you find what you need</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="page-card">
                        <div class="page-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>All Courses</h3>
                        <p>Explore our comprehensive catalog of technology courses designed by industry experts.</p>
                        <div class="page-stats">
                            <span><i class="fas fa-users"></i> 12,847+ students</span>
                            <span><i class="fas fa-star"></i> 4.9/5 rating</span>
                        </div>
                        <a href="courses.php" class="btn btn-outline-primary">View Courses</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="page-card">
                        <div class="page-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Student Reviews</h3>
                        <p>Read success stories and honest reviews from students who transformed their careers.</p>
                        <div class="page-stats">
                            <span><i class="fas fa-comments"></i> 8,500+ reviews</span>
                            <span><i class="fas fa-briefcase"></i> 94% job rate</span>
                        </div>
                        <a href="reviews.php" class="btn btn-outline-primary">Read Reviews</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="page-card">
                        <div class="page-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <h3>FAQ</h3>
                        <p>Find answers to common questions about courses, pricing, job placement, and more.</p>
                        <div class="page-stats">
                            <span><i class="fas fa-clock"></i> Instant answers</span>
                            <span><i class="fas fa-headset"></i> 24/7 support</span>
                        </div>
                        <a href="faq.php" class="btn btn-outline-primary">Get Answers</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="page-card">
                        <div class="page-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>About Us</h3>
                        <p>Learn about our mission, team, and commitment to transforming technology education.</p>
                        <div class="page-stats">
                            <span><i class="fas fa-award"></i> Industry leaders</span>
                            <span><i class="fas fa-globe"></i> 85+ countries</span>
                        </div>
                        <a href="about.php" class="btn btn-outline-primary">Our Story</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="page-card">
                        <div class="page-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Contact Support</h3>
                        <p>Get personalized help from our expert advisors and support team.</p>
                        <div class="page-stats">
                            <span><i class="fas fa-reply"></i> 2 hour response</span>
                            <span><i class="fas fa-phone"></i> Free consultation</span>
                        </div>
                        <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="page-card">
                        <div class="page-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Get Started</h3>
                        <p>Not sure where to begin? Start your journey with our course recommendation quiz.</p>
                        <div class="page-stats">
                            <span><i class="fas fa-clock"></i> 2 min quiz</span>
                            <span><i class="fas fa-target"></i> Personalized path</span>
                        </div>
                        <a href="#" class="btn btn-outline-primary">Take Quiz</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Error Report Section -->
    <section class="error-report py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="report-card">
                        <h3>Help Us Improve</h3>
                        <p>If you think this page should exist or you followed a broken link, please let us know so we can fix it.</p>
                        <form class="error-report-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="errorUrl" class="form-label">URL you were trying to visit</label>
                                    <input type="url" class="form-control" id="errorUrl" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="referrerUrl" class="form-label">Previous page (if any)</label>
                                    <input type="url" class="form-control" id="referrerUrl" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="errorDescription" class="form-label">What were you looking for?</label>
                                    <textarea class="form-control" id="errorDescription" rows="3" placeholder="Tell us what you expected to find on this page..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-bug"></i>
                                        Report Issue
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Content Section -->
    <section class="featured-content py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">While You're Here...</h2>
                    <p class="section-subtitle">Check out some of our most popular resources</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="featured-item">
                        <div class="featured-image">
                            <img src="images/featured-webdev.webp" alt="Web Development Guide">
                            <div class="featured-badge">Popular</div>
                        </div>
                        <div class="featured-content">
                            <h4>Complete Web Development Guide</h4>
                            <p>Everything you need to know about becoming a full-stack developer in 2024.</p>
                            <a href="courses.php#webdev" class="featured-link">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="featured-item">
                        <div class="featured-image">
                            <img src="images/featured-career.webp" alt="Career Change Guide">
                            <div class="featured-badge">Trending</div>
                        </div>
                        <div class="featured-content">
                            <h4>How to Change Careers to Tech</h4>
                            <p>Step-by-step guide for professionals transitioning into technology roles.</p>
                            <a href="about.php" class="featured-link">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="featured-item">
                        <div class="featured-image">
                            <img src="images/featured-salary.webp" alt="Tech Salary Guide">
                            <div class="featured-badge">New</div>
                        </div>
                        <div class="featured-content">
                            <h4>2024 Tech Salary Report</h4>
                            <p>Comprehensive analysis of technology salaries across different roles and locations.</p>
                            <a href="reviews.php" class="featured-link">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help Section -->
    <section class="help-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="help-card">
                        <div class="help-content">
                            <h2>Still Need Help?</h2>
                            <p>Our support team is here to help you find exactly what you're looking for.</p>
                            <div class="help-options">
                                <div class="help-option">
                                    <div class="help-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="help-text">
                                        <h4>Live Chat</h4>
                                        <p>Get instant help from our support team</p>
                                    </div>
                                    <button class="btn btn-primary">Start Chat</button>
                                </div>
                                
                                <div class="help-option">
                                    <div class="help-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="help-text">
                                        <h4>Email Support</h4>
                                        <p>Send us a detailed message</p>
                                    </div>
                                    <a href="mailto:admin@skytroniclabs.com" class="btn btn-outline-primary">Send Email</a>
                                </div>
                                
                                <div class="help-option">
                                    <div class="help-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="help-text">
                                        <h4>Phone Consultation</h4>
                                        <p>Schedule a free consultation call</p>
                                    </div>
                                    <a href="contact.php" class="btn btn-outline-primary">Schedule Call</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Custom 404 Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Set current URL in error form
    const errorUrlInput = document.getElementById('errorUrl');
    const referrerUrlInput = document.getElementById('referrerUrl');
    
    if (errorUrlInput) {
        errorUrlInput.value = window.location.href;
    }
    
    if (referrerUrlInput && document.referrer) {
        referrerUrlInput.value = document.referrer;
    }
    
    // Animate floating elements
    const floatingElements = document.querySelectorAll('.floating-elements .element');
    floatingElements.forEach((element, index) => {
        element.style.animationDelay = `${index * 0.5}s`;
    });
    
    // Robot eye animation
    const robotEyes = document.querySelectorAll('.robot-eyes .eye');
    setInterval(() => {
        robotEyes.forEach(eye => {
            eye.style.transform = 'scaleY(0.1)';
            setTimeout(() => {
                eye.style.transform = 'scaleY(1)';
            }, 150);
        });
    }, 3000);
});
</script>

<?php include 'includes/footer.php'; ?>