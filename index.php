<?php
$TITLE = "Skytronic Labs - Modern Tech Education Platform";
$DESCRIPTION = "Learn cutting-edge technology with Skytronic Labs. Courses in Web Development, JavaScript, PHP, Cybersecurity, Cloud/DevOps, and AI/ML.";
$KEYWORDS = "edtech, technology courses, web development, javascript, php, cybersecurity, cloud computing, artificial intelligence, online learning";
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-bg-animation"></div>
        <div class="hero-clip-image"></div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">Master Tomorrow's <span class="text-accent">Technology</span> Today</h1>
                        <p class="hero-subtitle">Join thousands of students learning cutting-edge tech skills with industry-expert instructors and hands-on projects. Build real applications, earn certifications, and land your dream tech job.</p>
                        <div class="hero-cta">
                            <a href="courses.php" class="btn btn-primary btn-lg me-3">Explore Courses</a>
                            <a href="about.php" class="btn btn-outline-primary btn-lg">Learn More</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">12,847</span>
                                <span class="stat-label">Active Students</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">6</span>
                                <span class="stat-label">Expert Courses</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">94%</span>
                                <span class="stat-label">Job Success Rate</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">4.9/5</span>
                                <span class="stat-label">Student Rating</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="images/hero-bg.webp" alt="Modern Technology Learning" class="img-fluid">
                        <div class="floating-card card-1">
                            <i class="fas fa-code"></i>
                            <span>Web Development</span>
                        </div>
                        <div class="floating-card card-2">
                            <i class="fas fa-shield-alt"></i>
                            <span>Cybersecurity</span>
                        </div>
                        <div class="floating-card card-3">
                            <i class="fas fa-brain"></i>
                            <span>AI & Machine Learning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-divider">
            <div class="divider-line"></div>
            <div class="divider-node"></div>
        </div>
    </section>

    <!-- Labs Overview Section -->
    <section class="labs-overview py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <div class="labs-intro">
                        <h2 class="section-title">Hands‑On Skill Matrix</h2>
                        <p class="section-subtitle">A visual map of the core skills you’ll build across our labs — from fundamentals to advanced systems.</p>
                        <ul class="labs-bullets">
                            <li><i class="fas fa-bolt"></i><span>Guided labs with instant feedback</span></li>
                            <li><i class="fas fa-layer-group"></i><span>Progress from basics to production patterns</span></li>
                            <li><i class="fas fa-shapes"></i><span>Balanced stack: Frontend, Backend, Security, Cloud, AI</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="matrix-wrap">
                        <div class="matrix-grid">
                            <div class="matrix-item lvl-5"><span>HTML</span></div>
                            <div class="matrix-item lvl-5"><span>CSS</span></div>
                            <div class="matrix-item lvl-5"><span>JavaScript</span></div>
                            <div class="matrix-item lvl-4"><span>React</span></div>
                            <div class="matrix-item lvl-4"><span>Node.js</span></div>
                            <div class="matrix-item lvl-3"><span>APIs</span></div>
                            <div class="matrix-item lvl-3"><span>Databases</span></div>
                            <div class="matrix-item lvl-3"><span>Testing</span></div>
                            <div class="matrix-item lvl-2"><span>Security</span></div>
                            <div class="matrix-item lvl-2"><span>Cloud</span></div>
                            <div class="matrix-item lvl-2"><span>DevOps</span></div>
                            <div class="matrix-item lvl-2"><span>Containers</span></div>
                            <div class="matrix-item lvl-3"><span>TypeScript</span></div>
                            <div class="matrix-item lvl-3"><span>Design Systems</span></div>
                            <div class="matrix-item lvl-4"><span>Performance</span></div>
                            <div class="matrix-item lvl-2"><span>AI/ML Basics</span></div>
                        </div>
                        <div class="matrix-legend">
                            <span class="dot lvl-2"></span><small>Foundation</small>
                            <span class="dot lvl-3"></span><small>Core</small>
                            <span class="dot lvl-4"></span><small>Advanced</small>
                            <span class="dot lvl-5"></span><small>Expert Labs</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Why Choose Skytronic Labs?</h2>
                    <p class="section-subtitle">Experience the future of technology education with our innovative approach</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Industry-Leading Curriculum</h3>
                        <p>Our courses are designed by industry experts from top tech companies like Google, Microsoft, and Amazon. Stay ahead with the latest technologies, frameworks, and best practices that employers actually want.</p>
                        <ul class="feature-list">
                            <li>Updated every 3 months</li>
                            <li>Industry-validated content</li>
                            <li>Real-world projects</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Expert Instructors</h3>
                        <p>Learn from senior developers, security specialists, and AI researchers with 10+ years of experience. Get personalized feedback, mentorship, and career guidance from professionals who've been where you want to go.</p>
                        <ul class="feature-list">
                            <li>1-on-1 mentoring sessions</li>
                            <li>Live Q&A sessions</li>
                            <li>Career guidance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Hands-On Projects</h3>
                        <p>Build real applications that solve actual problems. Create a portfolio that stands out with projects like e-commerce platforms, security tools, and AI applications that demonstrate your skills to potential employers.</p>
                        <ul class="feature-list">
                            <li>Portfolio-ready projects</li>
                            <li>GitHub integration</li>
                            <li>Code reviews</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3>Industry Certifications</h3>
                        <p>Earn recognized certifications that carry weight in the job market. Our certificates are endorsed by leading tech companies and include detailed skill assessments that validate your expertise.</p>
                        <ul class="feature-list">
                            <li>Industry-recognized badges</li>
                            <li>LinkedIn profile integration</li>
                            <li>Employer verification</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Flexible Learning</h3>
                        <p>Study at your own pace with 24/7 access to course materials. Whether you're working full-time or studying part-time, our platform adapts to your schedule with mobile apps and offline content.</p>
                        <ul class="feature-list">
                            <li>Self-paced learning</li>
                            <li>Mobile accessibility</li>
                            <li>Offline downloads</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Career Support</h3>
                        <p>Get dedicated career services including resume reviews, interview preparation, and job placement assistance. Our career team has partnerships with 500+ tech companies actively hiring our graduates.</p>
                        <ul class="feature-list">
                            <li>Job placement assistance</li>
                            <li>Interview preparation</li>
                            <li>Salary negotiation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-divider">
            <div class="divider-line"></div>
            <div class="divider-node"></div>
        </div>
    </section>

    <!-- Popular Courses Section -->
    <section class="courses-preview py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Popular Courses</h2>
                    <p class="section-subtitle">Start your journey with our most sought-after programs designed for career success</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="images/course-webdev.webp" alt="Web Development Course">
                            <div class="course-level">Beginner to Advanced</div>
                            <div class="course-badge">Most Popular</div>
                        </div>
                        <div class="course-content">
                            <h3>Full-Stack Web Development</h3>
                            <p>Master modern web development from frontend to backend. Learn HTML5, CSS3, JavaScript ES6+, React, Node.js, and database management. Build responsive, scalable web applications.</p>
                            <div class="course-highlights">
                                <span class="highlight">React & Node.js</span>
                                <span class="highlight">MongoDB</span>
                                <span class="highlight">REST APIs</span>
                            </div>
                            <div class="course-meta">
                                <span class="duration"><i class="fas fa-clock"></i> 16 weeks</span>
                                <span class="students"><i class="fas fa-user-graduate"></i> 3,247 students</span>
                                <span class="rating"><i class="fas fa-star"></i> 4.9/5</span>
                            </div>
                            <div class="course-price">
                                <span class="price-current">$299</span>
                                <span class="price-original">$499</span>
                            </div>
                            <a href="courses.php#webdev" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="images/course-cyber.webp" alt="Cybersecurity Course">
                            <div class="course-level">Intermediate</div>
                            <div class="course-badge">High Demand</div>
                        </div>
                        <div class="course-content">
                            <h3>Cybersecurity Fundamentals</h3>
                            <p>Protect digital assets with comprehensive security training. Learn ethical hacking, penetration testing, network security, and incident response. Prepare for industry certifications.</p>
                            <div class="course-highlights">
                                <span class="highlight">Ethical Hacking</span>
                                <span class="highlight">Pen Testing</span>
                                <span class="highlight">CISSP Prep</span>
                            </div>
                            <div class="course-meta">
                                <span class="duration"><i class="fas fa-clock"></i> 14 weeks</span>
                                <span class="students"><i class="fas fa-user-graduate"></i> 1,892 students</span>
                                <span class="rating"><i class="fas fa-star"></i> 4.8/5</span>
                            </div>
                            <div class="course-price">
                                <span class="price-current">$399</span>
                                <span class="price-original">$599</span>
                            </div>
                            <a href="courses.php#cybersecurity" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="images/course-ai.webp" alt="AI Machine Learning Course">
                            <div class="course-level">Advanced</div>
                            <div class="course-badge">Future Skills</div>
                        </div>
                        <div class="course-content">
                            <h3>AI & Machine Learning</h3>
                            <p>Dive into artificial intelligence and machine learning. Master Python, TensorFlow, deep learning, neural networks, and natural language processing. Build intelligent applications.</p>
                            <div class="course-highlights">
                                <span class="highlight">TensorFlow</span>
                                <span class="highlight">Deep Learning</span>
                                <span class="highlight">NLP</span>
                            </div>
                            <div class="course-meta">
                                <span class="duration"><i class="fas fa-clock"></i> 18 weeks</span>
                                <span class="students"><i class="fas fa-user-graduate"></i> 2,156 students</span>
                                <span class="rating"><i class="fas fa-star"></i> 4.9/5</span>
                            </div>
                            <div class="course-price">
                                <span class="price-current">$499</span>
                                <span class="price-original">$799</span>
                            </div>
                            <a href="courses.php#ai-ml" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="courses.php" class="btn btn-outline-primary btn-lg">View All Courses</a>
            </div>
        </div>
        <div class="section-divider">
            <div class="divider-line"></div>
            <div class="divider-node"></div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="success-stories py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Learner Outcomes</h2>
                    <p class="section-subtitle">Measurable results from real projects and guided practice</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="success-card">
                        <div class="success-image">
                            <img src="images/testimonial-abstract-1.webp" alt="Abstract student success concept: upward arrow woven into geometric grid, graduation cap silhouette formed by lines, soft green accent, no people faces.">
                        </div>
                        <div class="success-content">
                            <h4>Career Transition</h4>
                            <p class="success-role">Pathway from non-tech role to software</p>
                            <blockquote>Career switch from retail to software in 8 months; portfolio of 6 projects.</blockquote>
                            <div class="success-stats">
                                <span class="stat">Time to switch: 8 months</span>
                                <span class="stat">Portfolio: 6 projects</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="success-card">
                        <div class="success-image">
                            <img src="images/testimonial-abstract-2.webp" alt="Career advancement concept: pathway made of circuit lines leading to bright horizon, minimal icons of skills, light theme, green accent, no people.">
                        </div>
                        <div class="success-content">
                            <h4>Advancement & Certification</h4>
                            <p class="success-role">Security track with certification</p>
                            <blockquote>Advanced from entry level to analyst with skills validation and a focused study plan.</blockquote>
                            <div class="success-stats">
                                <span class="stat">Certification earned</span>
                                <span class="stat">Time to offer: 2 weeks</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="success-card">
                        <div class="success-image">
                            <img src="images/testimonial-abstract-3.webp" alt="AI portfolio success concept: stacked cards with generic charts and model blocks, gentle shadows, geometric dividers, green highlight, no brands.">
                        </div>
                        <div class="success-content">
                            <h4>AI Portfolio Growth</h4>
                            <p class="success-role">ML/AI project pathway</p>
                            <blockquote>Built a practical portfolio with model demos and analytics dashboards; interviews unlocked by showcasing skills.</blockquote>
                            <div class="success-stats">
                                <span class="stat">Portfolio: 5 AI projects</span>
                                <span class="stat">Outcome: Interview invites</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="career-stats">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div class="career-stat">
                                    <span class="stat-number">94%</span>
                                    <span class="stat-label">Job Placement Rate</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="career-stat">
                                    <span class="stat-number">$95K</span>
                                    <span class="stat-label">Average Starting Salary</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="career-stat">
                                    <span class="stat-number">6 months</span>
                                    <span class="stat-label">Average Time to Job</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="career-stat">
                                    <span class="stat-number">180%</span>
                                    <span class="stat-label">Average Salary Increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-divider">
            <div class="divider-line"></div>
            <div class="divider-node"></div>
        </div>
    </section>

    <!-- Learning Experience Section -->
    <section class="learning-experience py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="experience-content">
                        <h2 class="section-title">Interactive Learning Experience</h2>
                        <p class="section-subtitle">Learn by doing with our immersive, hands-on platform</p>
                        <div class="experience-features">
                            <div class="experience-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Video Lessons</h4>
                                    <p>High-quality HD videos with captions, playback speed control, and downloadable content for offline learning.</p>
                                </div>
                            </div>
                            <div class="experience-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Interactive Coding</h4>
                                    <p>Built-in code editor with real-time feedback, syntax highlighting, and instant testing of your solutions.</p>
                                </div>
                            </div>
                            <div class="experience-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Project-Based Learning</h4>
                                    <p>Build real-world applications from scratch with step-by-step guidance and expert code reviews.</p>
                                </div>
                            </div>
                            <div class="experience-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Community Support</h4>
                                    <p>Active forums, study groups, and peer collaboration to enhance your learning experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="experience-demo">
                        <div class="demo-window">
                            <div class="window-header">
                                <div class="window-controls">
                                    <span class="control red"></span>
                                    <span class="control yellow"></span>
                                    <span class="control green"></span>
                                </div>
                                <span class="window-title">SkyLabs IDE</span>
                            </div>
                            <div class="window-content">
                                <div class="code-editor">
                                    <div class="line-numbers">1<br>2<br>3<br>4<br>5<br>6</div>
                                    <div class="code-content">
                                        <span class="keyword">function</span> <span class="function">calculateTotal</span>(<span class="parameter">items</span>) {<br>
                                        &nbsp;&nbsp;<span class="keyword">return</span> items.<span class="method">reduce</span>((<span class="parameter">sum, item</span>) => {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> sum + item.price;<br>
                                        &nbsp;&nbsp;}, <span class="number">0</span>);<br>
                                        }<br>
                                        <span class="comment">// Test with sample data</span>
                                    </div>
                                </div>
                                <div class="output-panel">
                                    <div class="output-header">Console Output</div>
                                    <div class="output-content">
                                        <span class="success">✓ All tests passed!</span><br>
                                        <span class="result">Total: $247.50</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-divider">
            <div class="divider-line"></div>
            <div class="divider-node"></div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-card">
                        <div class="cta-content">
                            <h2>Ready to Start Your Tech Journey?</h2>
                            <p>Join thousands of students who have transformed their careers with Skytronic Labs. Get instant access to all courses, expert mentorship, and career support.</p>
                            <div class="cta-benefits">
                                <div class="benefit">
                                    <i class="fas fa-check-circle"></i>
                                    <span>30-day money-back guarantee</span>
                                </div>
                                <div class="benefit">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Lifetime access to course updates</span>
                                </div>
                                <div class="benefit">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Industry-recognized certificates</span>
                                </div>
                                <div class="benefit">
                                    <i class="fas fa-check-circle"></i>
                                    <span>1-on-1 career counseling</span>
                                </div>
                            </div>
                            <div class="cta-actions">
                                <a href="courses.php" class="btn btn-primary btn-lg me-3">Start Learning Today</a>
                                <a href="contact.php" class="btn btn-outline-light btn-lg">Talk to an Advisor</a>
                            </div>
                            <div class="cta-note">
                                <small>Limited time offer: 40% off all courses. Ends December 31st.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>