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