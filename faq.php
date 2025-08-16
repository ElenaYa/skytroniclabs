<?php
$TITLE = "FAQ - Frequently Asked Questions | Skytronic Labs Support Center";
$DESCRIPTION = "Find answers to common questions about Skytronic Labs courses, pricing, job placement, technical requirements, and more. Comprehensive FAQ section.";
$KEYWORDS = "skytronic labs faq, course questions, pricing information, job placement, technical requirements, enrollment process, refund policy";
include 'includes/header.php';
?>

<main id="main-content">
    <!-- FAQ Hero Section -->
    <section class="faq-hero">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="page-title">Frequently Asked <span class="text-accent">Questions</span></h1>
                    <p class="hero-subtitle">Find quick answers to the most common questions about our courses, pricing, job placement, and more</p>
                    <div class="hero-search">
                        <div class="search-box">
                            <input type="text" id="faqSearch" placeholder="Search for answers..." class="form-control">
                            <button type="button" class="search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="search-suggestions">
                            <span>Popular searches:</span>
                            <a href="#pricing">Pricing</a>
                            <a href="#job-placement">Job Placement</a>
                            <a href="#refunds">Refunds</a>
                            <a href="#prerequisites">Prerequisites</a>
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

    <!-- FAQ Categories -->
    <section class="faq-categories py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="faq-sidebar">
                        <h3>Categories</h3>
                        <nav class="faq-nav">
                            <a href="#general" class="nav-link active">
                                <i class="fas fa-info-circle"></i>
                                General Information
                            </a>
                            <a href="#courses" class="nav-link">
                                <i class="fas fa-graduation-cap"></i>
                                Courses & Curriculum
                            </a>
                            <a href="#pricing" class="nav-link">
                                <i class="fas fa-dollar-sign"></i>
                                Pricing & Payments
                            </a>
                            <a href="#enrollment" class="nav-link">
                                <i class="fas fa-user-plus"></i>
                                Enrollment Process
                            </a>
                            <a href="#technical" class="nav-link">
                                <i class="fas fa-laptop"></i>
                                Technical Requirements
                            </a>
                            <a href="#career" class="nav-link">
                                <i class="fas fa-briefcase"></i>
                                Career Support
                            </a>
                        </nav>
                        
                        <div class="contact-help">
                            <h4>Still need help?</h4>
                            <p>Can't find what you're looking for? Our support team is here to help.</p>
                            <a href="contact.php" class="btn btn-primary btn-sm">Contact Support</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <!-- General Information -->
                    <div id="general" class="faq-section">
                        <h2 class="section-title">General Information</h2>
                        <div class="faq-accordion">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What is Skytronic Labs?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Skytronic Labs is a leading online technology education platform that offers comprehensive courses in web development, cybersecurity, AI/ML, cloud computing, and more. Founded in 2020 by former Google engineers, we've helped over 12,000 students transform their careers with industry-relevant skills and expert mentorship.</p>
                                    <p>Our mission is to bridge the gap between traditional education and industry demands by providing hands-on, practical training that leads to real job opportunities. We maintain a 94% job placement rate and have partnerships with over 500 tech companies.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>How is Skytronic Labs different from other online learning platforms?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Several key factors set us apart:</p>
                                    <ul>
                                        <li><strong>Industry Expert Instructors:</strong> Our teachers are senior professionals from Google, Microsoft, Amazon, and other top companies</li>
                                        <li><strong>Project-Based Learning:</strong> You build real applications that go into your professional portfolio</li>
                                        <li><strong>1-on-1 Mentorship:</strong> Personal guidance from industry professionals throughout your journey</li>
                                        <li><strong>Career Services:</strong> Dedicated job placement assistance with a 94% success rate</li>
                                        <li><strong>Live Curriculum:</strong> Content updated every 3 months to reflect current industry trends</li>
                                        <li><strong>Community Focus:</strong> Active Discord community with 15,000+ students and alumni</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What are your accreditations and partnerships?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Skytronic Labs is accredited by ACCET (Accrediting Council for Continuing Education & Training) and maintains partnerships with:</p>
                                    <ul>
                                        <li>500+ hiring partner companies including Google, Microsoft, Amazon, Netflix, and Spotify</li>
                                        <li>CompTIA for cybersecurity certification preparation</li>
                                        <li>AWS for cloud computing training and certification paths</li>
                                        <li>Major universities for credit transfer programs</li>
                                        <li>Professional organizations like IEEE and ACM</li>
                                    </ul>
                                    <p>We're also SOC 2 compliant and ISO 27001 certified for data security and privacy protection.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>Can I get college credit for completing your courses?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Yes! We have transfer credit agreements with over 50 universities. Students can typically receive 3-12 credit hours depending on the course and institution. Popular transfer partners include:</p>
                                    <ul>
                                        <li>Arizona State University (ASU Online)</li>
                                        <li>Southern New Hampshire University</li>
                                        <li>University of Maryland Global Campus</li>
                                        <li>Western Governors University</li>
                                        <li>Purdue University Global</li>
                                    </ul>
                                    <p>Contact our academic partnerships team for specific transfer credit information for your institution.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Courses & Curriculum -->
                    <div id="courses" class="faq-section">
                        <h2 class="section-title">Courses & Curriculum</h2>
                        <div class="faq-accordion">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What courses do you offer?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>We offer 6 comprehensive technology courses:</p>
                                    <div class="course-list">
                                        <div class="course-item">
                                            <h4>Full-Stack Web Development (16 weeks)</h4>
                                            <p>HTML, CSS, JavaScript, React, Node.js, MongoDB, Express</p>
                                        </div>
                                        <div class="course-item">
                                            <h4>Advanced JavaScript Mastery (12 weeks)</h4>
                                            <p>ES6+, TypeScript, React, Vue.js, Design Patterns, Performance Optimization</p>
                                        </div>
                                        <div class="course-item">
                                            <h4>PHP & MySQL Development (14 weeks)</h4>
                                            <p>PHP 8+, Laravel, MySQL, RESTful APIs, Security, Server Deployment</p>
                                        </div>
                                        <div class="course-item">
                                            <h4>Cybersecurity Fundamentals (18 weeks)</h4>
                                            <p>Ethical Hacking, Penetration Testing, Network Security, Digital Forensics</p>
                                        </div>
                                        <div class="course-item">
                                            <h4>Cloud Computing & DevOps (20 weeks)</h4>
                                            <p>AWS, Docker, Kubernetes, CI/CD, Infrastructure as Code, Monitoring</p>
                                        </div>
                                        <div class="course-item">
                                            <h4>AI & Machine Learning (22 weeks)</h4>
                                            <p>Python, TensorFlow, PyTorch, Deep Learning, Computer Vision, NLP</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>How are the courses structured?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Each course follows a proven learning methodology:</p>
                                    <ul>
                                        <li><strong>Weekly Modules:</strong> Each week covers specific topics with clear learning objectives</li>
                                        <li><strong>Video Lessons:</strong> High-quality recorded lessons with downloadable resources</li>
                                        <li><strong>Hands-On Labs:</strong> Interactive coding exercises and real-world scenarios</li>
                                        <li><strong>Projects:</strong> Build 4-6 portfolio projects throughout the course</li>
                                        <li><strong>Live Sessions:</strong> Weekly instructor-led sessions for Q&A and code reviews</li>
                                        <li><strong>Peer Collaboration:</strong> Group projects and code review sessions</li>
                                        <li><strong>Assessments:</strong> Regular quizzes and practical evaluations</li>
                                        <li><strong>Capstone Project:</strong> Final project demonstrating mastery of all concepts</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What programming languages and technologies will I learn?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>The technologies you'll learn depend on your chosen course:</p>
                                    <div class="tech-breakdown">
                                        <div class="tech-category">
                                            <h4>Programming Languages</h4>
                                            <span class="tech-tags">
                                                <span class="tag">JavaScript</span>
                                                <span class="tag">Python</span>
                                                <span class="tag">PHP</span>
                                                <span class="tag">TypeScript</span>
                                                <span class="tag">SQL</span>
                                                <span class="tag">Bash</span>
                                            </span>
                                        </div>
                                        <div class="tech-category">
                                            <h4>Frameworks & Libraries</h4>
                                            <span class="tech-tags">
                                                <span class="tag">React</span>
                                                <span class="tag">Vue.js</span>
                                                <span class="tag">Node.js</span>
                                                <span class="tag">Express</span>
                                                <span class="tag">Laravel</span>
                                                <span class="tag">TensorFlow</span>
                                                <span class="tag">PyTorch</span>
                                            </span>
                                        </div>
                                        <div class="tech-category">
                                            <h4>Databases & Cloud</h4>
                                            <span class="tech-tags">
                                                <span class="tag">MongoDB</span>
                                                <span class="tag">MySQL</span>
                                                <span class="tag">PostgreSQL</span>
                                                <span class="tag">AWS</span>
                                                <span class="tag">Docker</span>
                                                <span class="tag">Kubernetes</span>
                                            </span>
                                        </div>
                                        <div class="tech-category">
                                            <h4>Tools & Platforms</h4>
                                            <span class="tech-tags">
                                                <span class="tag">Git</span>
                                                <span class="tag">VS Code</span>
                                                <span class="tag">Jenkins</span>
                                                <span class="tag">Terraform</span>
                                                <span class="tag">Wireshark</span>
                                                <span class="tag">Metasploit</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>Do I need prior programming experience?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>It depends on the course you choose:</p>
                                    <div class="prerequisite-guide">
                                        <div class="prereq-item beginner">
                                            <h4>🟢 Beginner-Friendly (No Experience Required)</h4>
                                            <ul>
                                                <li>Full-Stack Web Development</li>
                                                <li>PHP & MySQL Development</li>
                                                <li>Cybersecurity Fundamentals</li>
                                            </ul>
                                        </div>
                                        <div class="prereq-item intermediate">
                                            <h4>🟡 Some Programming Experience Recommended</h4>
                                            <ul>
                                                <li>Advanced JavaScript (basic JS knowledge helpful)</li>
                                                <li>Cloud Computing & DevOps (basic command line experience)</li>
                                            </ul>
                                        </div>
                                        <div class="prereq-item advanced">
                                            <h4>🟠 Programming Background Required</h4>
                                            <ul>
                                                <li>AI & Machine Learning (Python basics or equivalent programming experience)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>We provide preparatory materials and pre-course modules to help you get up to speed regardless of your starting point.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>How much time should I dedicate to studying each week?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>We recommend the following time commitments for optimal learning:</p>
                                    <div class="time-commitments">
                                        <div class="commitment-option">
                                            <h4>Part-Time Study (Recommended)</h4>
                                            <ul>
                                                <li>10-15 hours per week</li>
                                                <li>Perfect for working professionals</li>
                                                <li>Complete courses in standard timeframe</li>
                                                <li>Allows time for practice and projects</li>
                                            </ul>
                                        </div>
                                        <div class="commitment-option">
                                            <h4>Intensive Study</h4>
                                            <ul>
                                                <li>20-30 hours per week</li>
                                                <li>Complete courses 25-30% faster</li>
                                                <li>Ideal for career changers</li>
                                                <li>More time for additional projects</li>
                                            </ul>
                                        </div>
                                        <div class="commitment-option">
                                            <h4>Casual Study</h4>
                                            <ul>
                                                <li>5-8 hours per week</li>
                                                <li>Extended timeline (1.5x course length)</li>
                                                <li>Great for busy schedules</li>
                                                <li>Still achieve full learning outcomes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing & Payments -->
                    <div id="pricing" class="faq-section">
                        <h2 class="section-title">Pricing & Payments</h2>
                        <div class="faq-accordion">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>How much do the courses cost?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Our current pricing (with limited-time 40% discount):</p>
                                    <div class="pricing-table">
                                        <div class="price-item">
                                            <h4>Full-Stack Web Development</h4>
                                            <span class="price-current">$299</span>
                                            <span class="price-original">$499</span>
                                        </div>
                                        <div class="price-item">
                                            <h4>Advanced JavaScript</h4>
                                            <span class="price-current">$399</span>
                                            <span class="price-original">$599</span>
                                        </div>
                                        <div class="price-item">
                                            <h4>PHP & MySQL Development</h4>
                                            <span class="price-current">$349</span>
                                            <span class="price-original">$549</span>
                                        </div>
                                        <div class="price-item">
                                            <h4>Cybersecurity Fundamentals</h4>
                                            <span class="price-current">$499</span>
                                            <span class="price-original">$799</span>
                                        </div>
                                        <div class="price-item">
                                            <h4>Cloud Computing & DevOps</h4>
                                            <span class="price-current">$549</span>
                                            <span class="price-original">$899</span>
                                        </div>
                                        <div class="price-item">
                                            <h4>AI & Machine Learning</h4>
                                            <span class="price-current">$699</span>
                                            <span class="price-original">$1,199</span>
                                        </div>
                                    </div>
                                    <p><strong>All courses include:</strong> Complete curriculum, hands-on projects, 1-on-1 mentorship, career services, lifetime access, industry certifications, and alumni network access.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>Do you offer payment plans?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Yes! We offer flexible payment options to make our courses accessible:</p>
                                    <ul>
                                        <li><strong>Full Payment:</strong> Pay in full and save 5% additional discount</li>
                                        <li><strong>3-Month Plan:</strong> Split payment into 3 equal installments (no interest)</li>
                                        <li><strong>6-Month Plan:</strong> Split payment into 6 equal installments (small processing fee)</li>
                                        <li><strong>Income Share Agreement (ISA):</strong> Pay nothing upfront, pay percentage of salary after getting a job</li>
                                        <li><strong>Employer Sponsorship:</strong> Have your company pay for your training</li>
                                    </ul>
                                    <p>Payment plans are available for all courses with no credit check required.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>Do you offer scholarships or financial assistance?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Yes! We believe in making quality education accessible to everyone. Available financial assistance includes:</p>
                                    <div class="scholarship-options">
                                        <div class="scholarship-item">
                                            <h4>🎓 Merit-Based Scholarships</h4>
                                            <p>Up to 70% off for exceptional candidates</p>
                                            <small>Based on application, portfolio, and interview</small>
                                        </div>
                                        <div class="scholarship-item">
                                            <h4>🌍 Diversity Scholarships</h4>
                                            <p>50% off for underrepresented groups in tech</p>
                                            <small>Women, minorities, LGBTQ+, veterans, and people with disabilities</small>
                                        </div>
                                        <div class="scholarship-item">
                                            <h4>💼 Career Change Scholarships</h4>
                                            <p>40% off for career changers from non-tech fields</p>
                                            <small>For professionals transitioning into technology</small>
                                        </div>
                                        <div class="scholarship-item">
                                            <h4>🎒 Student Discounts</h4>
                                            <p>30% off for current students and recent graduates</p>
                                            <small>Valid student ID required</small>
                                        </div>
                                        <div class="scholarship-item">
                                            <h4>💡 Hardship Assistance</h4>
                                            <p>Case-by-case financial assistance</p>
                                            <small>For individuals facing financial hardship</small>
                                        </div>
                                    </div>
                                    <p>Apply for scholarships during the enrollment process or contact our financial aid team.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What is your refund policy?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>We offer a comprehensive <strong>30-day money-back guarantee</strong>:</p>
                                    <ul>
                                        <li><strong>Full Refund:</strong> 100% refund if you're not satisfied within 30 days</li>
                                        <li><strong>No Questions Asked:</strong> Simple refund process with no complex requirements</li>
                                        <li><strong>Keep Materials:</strong> You can keep any downloaded resources</li>
                                        <li><strong>Quick Processing:</strong> Refunds processed within 5-7 business days</li>
                                        <li><strong>Pro-Rated Refunds:</strong> After 30 days, pro-rated refunds available in exceptional circumstances</li>
                                    </ul>
                                    <p>We're confident in our courses, but if they're not right for you, we'll make it right.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What payment methods do you accept?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>We accept all major payment methods for your convenience:</p>
                                    <div class="payment-methods">
                                        <div class="payment-category">
                                            <h4>Credit & Debit Cards</h4>
                                            <ul>
                                                <li>Visa, Mastercard, American Express, Discover</li>
                                                <li>International cards accepted</li>
                                                <li>Secure processing with Stripe</li>
                                            </ul>
                                        </div>
                                        <div class="payment-category">
                                            <h4>Digital Wallets</h4>
                                            <ul>
                                                <li>PayPal</li>
                                                <li>Apple Pay</li>
                                                <li>Google Pay</li>
                                            </ul>
                                        </div>
                                        <div class="payment-category">
                                            <h4>Bank Transfers</h4>
                                            <ul>
                                                <li>ACH transfers (US)</li>
                                                <li>Wire transfers (international)</li>
                                                <li>Direct debit (select countries)</li>
                                            </ul>
                                        </div>
                                        <div class="payment-category">
                                            <h4>Alternative Methods</h4>
                                            <ul>
                                                <li>Company purchase orders</li>
                                                <li>Educational vouchers</li>
                                                <li>Cryptocurrency (Bitcoin, Ethereum)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enrollment Process -->
                    <div id="enrollment" class="faq-section">
                        <h2 class="section-title">Enrollment Process</h2>
                        <div class="faq-accordion">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>How do I enroll in a course?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Enrollment is simple and can be completed in under 10 minutes:</p>
                                    <div class="enrollment-steps">
                                        <div class="step">
                                            <span class="step-number">1</span>
                                            <div class="step-content">
                                                <h4>Choose Your Course</h4>
                                                <p>Browse our course catalog and select the program that matches your goals</p>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <span class="step-number">2</span>
                                            <div class="step-content">
                                                <h4>Create Account</h4>
                                                <p>Sign up with your email and create a secure password</p>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <span class="step-number">3</span>
                                            <div class="step-content">
                                                <h4>Complete Application</h4>
                                                <p>Fill out a brief application with your background and goals</p>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <span class="step-number">4</span>
                                            <div class="step-content">
                                                <h4>Payment & Verification</h4>
                                                <p>Complete payment and verify your identity</p>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <span class="step-number">5</span>
                                            <div class="step-content">
                                                <h4>Access Granted</h4>
                                                <p>Immediate access to course materials and student platform</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>When do courses start?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>We offer flexible start dates to accommodate your schedule:</p>
                                    <ul>
                                        <li><strong>Self-Paced Courses:</strong> Start immediately upon enrollment</li>
                                        <li><strong>Cohort-Based Courses:</strong> New cohorts start every 2 weeks</li>
                                        <li><strong>Live Sessions:</strong> Join weekly live sessions regardless of when you start</li>
                                        <li><strong>Catch-Up Support:</strong> Dedicated support to help you catch up if you join mid-cohort</li>
                                    </ul>
                                    <p>Upcoming cohort start dates are displayed on each course page during enrollment.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>Is there an application process or prerequisites?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Our application process varies by course complexity:</p>
                                    <div class="application-requirements">
                                        <div class="req-level">
                                            <h4>🟢 Open Enrollment (Most Courses)</h4>
                                            <ul>
                                                <li>Simple registration form</li>
                                                <li>No technical assessment required</li>
                                                <li>Immediate enrollment</li>
                                            </ul>
                                            <small>Applies to: Web Development, PHP/MySQL, Cybersecurity</small>
                                        </div>
                                        <div class="req-level">
                                            <h4>🟡 Basic Assessment</h4>
                                            <ul>
                                                <li>Short technical quiz (15 minutes)</li>
                                                <li>Background questionnaire</li>
                                                <li>Same-day approval</li>
                                            </ul>
                                            <small>Applies to: Advanced JavaScript, Cloud/DevOps</small>
                                        </div>
                                        <div class="req-level">
                                            <h4>🟠 Application Review</h4>
                                            <ul>
                                                <li>Technical assessment (30 minutes)</li>
                                                <li>Brief interview with instructor</li>
                                                <li>1-2 day approval process</li>
                                            </ul>
                                            <small>Applies to: AI & Machine Learning</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>Can I switch courses after enrolling?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Yes! We offer flexible course switching options:</p>
                                    <ul>
                                        <li><strong>Within 14 Days:</strong> Free course switch with full credit transfer</li>
                                        <li><strong>Price Difference:</strong> Pay only the difference if switching to a higher-priced course</li>
                                        <li><strong>Refund Option:</strong> Receive credit for price difference if switching to lower-priced course</li>
                                        <li><strong>Progress Transfer:</strong> Completed modules may transfer to similar courses</li>
                                        <li><strong>Advisor Consultation:</strong> Free consultation to help choose the right course</li>
                                    </ul>
                                    <p>Contact our student success team to discuss course switching options.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Requirements -->
                    <div id="technical" class="faq-section">
                        <h2 class="section-title">Technical Requirements</h2>
                        <div class="faq-accordion">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What computer and software do I need?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Minimum system requirements for optimal learning experience:</p>
                                    <div class="tech-requirements">
                                        <div class="req-category">
                                            <h4>🖥️ Computer Specifications</h4>
                                            <ul>
                                                <li><strong>Operating System:</strong> Windows 10+, macOS 10.14+, or Linux Ubuntu 18+</li>
                                                <li><strong>Processor:</strong> Intel i5 / AMD Ryzen 5 or equivalent (minimum dual-core)</li>
                                                <li><strong>Memory:</strong> 8GB RAM minimum, 16GB recommended</li>
                                                <li><strong>Storage:</strong> 50GB available disk space</li>
                                                <li><strong>Graphics:</strong> No special requirements (integrated graphics sufficient)</li>
                                            </ul>
                                        </div>
                                        <div class="req-category">
                                            <h4>🌐 Internet & Browser</h4>
                                            <ul>
                                                <li><strong>Internet Speed:</strong> 5 Mbps minimum, 25 Mbps recommended</li>
                                                <li><strong>Browser:</strong> Chrome 90+, Firefox 88+, Safari 14+, or Edge 90+</li>
                                                <li><strong>JavaScript:</strong> Must be enabled</li>
                                                <li><strong>Webcam & Microphone:</strong> Required for live sessions and mentorship</li>
                                            </ul>
                                        </div>
                                        <div class="req-category">
                                            <h4>💻 Software (Provided Free)</h4>
                                            <ul>
                                                <li><strong>Code Editor:</strong> Visual Studio Code (free)</li>
                                                <li><strong>Version Control:</strong> Git (free)</li>
                                                <li><strong>Development Tools:</strong> Course-specific tools provided</li>
                                                <li><strong>Cloud Access:</strong> AWS/Azure credits included</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p><strong>Note:</strong> Chromebooks and tablets are not recommended for programming courses.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>Can I use a Mac or Linux computer?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Absolutely! Our courses are designed to work on all major operating systems:</p>
                                    <ul>
                                        <li><strong>macOS:</strong> Excellent for web development and most programming tasks</li>
                                        <li><strong>Linux:</strong> Perfect for system administration, DevOps, and cybersecurity</li>
                                        <li><strong>Windows:</strong> Great all-around choice with strong development tool support</li>
                                        <li><strong>Virtual Machines:</strong> We provide VMs for specific exercises when needed</li>
                                    </ul>
                                    <p>Course materials include setup instructions for all supported operating systems.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>Do you provide software licenses and cloud access?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Yes! All necessary software and cloud access is included in your course fee:</p>
                                    <div class="included-software">
                                        <div class="software-category">
                                            <h4>🆓 Free Software (Always Free)</h4>
                                            <ul>
                                                <li>Visual Studio Code</li>
                                                <li>Git and GitHub</li>
                                                <li>Node.js and npm</li>
                                                <li>Python and pip</li>
                                                <li>MySQL and MongoDB</li>
                                            </ul>
                                        </div>
                                        <div class="software-category">
                                            <h4>💳 Included Licenses</h4>
                                            <ul>
                                                <li>JetBrains IDEs (1-year student license)</li>
                                                <li>Adobe Creative Suite (if needed for course)</li>
                                                <li>VMware Workstation (cybersecurity course)</li>
                                                <li>Premium learning platforms and tools</li>
                                            </ul>
                                        </div>
                                        <div class="software-category">
                                            <h4>☁️ Cloud Credits</h4>
                                            <ul>
                                                <li>AWS: $200 in credits</li>
                                                <li>Microsoft Azure: $150 in credits</li>
                                                <li>Google Cloud Platform: $100 in credits</li>
                                                <li>Additional credits available if needed</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What if I have technical problems during the course?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>We provide comprehensive technical support throughout your learning journey:</p>
                                    <ul>
                                        <li><strong>24/7 Help Desk:</strong> Technical support available around the clock</li>
                                        <li><strong>Live Chat:</strong> Instant help during business hours</li>
                                        <li><strong>Video Troubleshooting:</strong> Screen sharing sessions for complex issues</li>
                                        <li><strong>Setup Assistance:</strong> One-on-one help setting up your development environment</li>
                                        <li><strong>Community Support:</strong> Peer help in our Discord community</li>
                                        <li><strong>Instructor Office Hours:</strong> Direct access to technical instructors</li>
                                    </ul>
                                    <p>Average response time for technical issues is under 2 hours.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Career Support -->
                    <div id="career" class="faq-section">
                        <h2 class="section-title">Career Support</h2>
                        <div class="faq-accordion">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What kind of job placement support do you provide?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Our comprehensive career services include:</p>
                                    <div class="career-services">
                                        <div class="service-category">
                                            <h4>📝 Resume & Portfolio Optimization</h4>
                                            <ul>
                                                <li>Professional resume review and rewriting</li>
                                                <li>GitHub portfolio optimization</li>
                                                <li>LinkedIn profile enhancement</li>
                                                <li>Personal brand development</li>
                                            </ul>
                                        </div>
                                        <div class="service-category">
                                            <h4>🎯 Job Search Strategy</h4>
                                            <ul>
                                                <li>Personalized job search plan</li>
                                                <li>Company research and targeting</li>
                                                <li>Application tracking and follow-up</li>
                                                <li>Networking strategies and events</li>
                                            </ul>
                                        </div>
                                        <div class="service-category">
                                            <h4>💼 Interview Preparation</h4>
                                            <ul>
                                                <li>Technical interview coaching</li>
                                                <li>Behavioral interview preparation</li>
                                                <li>Mock interviews with feedback</li>
                                                <li>Salary negotiation training</li>
                                            </ul>
                                        </div>
                                        <div class="service-category">
                                            <h4>🤝 Direct Job Placement</h4>
                                            <ul>
                                                <li>Introductions to 500+ hiring partners</li>
                                                <li>Exclusive job opportunities</li>
                                                <li>Internal referrals and recommendations</li>
                                                <li>Career fair and networking events</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What is your job placement rate and average salary?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Our career outcomes speak for themselves:</p>
                                    <div class="outcome-stats">
                                        <div class="stat-item">
                                            <span class="stat-number">94%</span>
                                            <span class="stat-label">Overall Job Placement Rate</span>
                                            <small>Within 6 months of graduation</small>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-number">$95,000</span>
                                            <span class="stat-label">Average Starting Salary</span>
                                            <small>Across all courses and locations</small>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-number">180%</span>
                                            <span class="stat-label">Average Salary Increase</span>
                                            <small>For career changers</small>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-number">3.2 months</span>
                                            <span class="stat-label">Average Time to Job</span>
                                            <small>From course completion</small>
                                        </div>
                                    </div>
                                    <p><strong>Salary ranges by course:</strong></p>
                                    <ul>
                                        <li>Web Development: $70K - $120K</li>
                                        <li>Cybersecurity: $85K - $140K</li>
                                        <li>AI/ML: $100K - $180K</li>
                                        <li>Cloud/DevOps: $90K - $160K</li>
                                        <li>JavaScript: $75K - $130K</li>
                                        <li>PHP/MySQL: $65K - $110K</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>How long does career support last?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Career support is a lifetime benefit of your Skytronic Labs education:</p>
                                    <ul>
                                        <li><strong>Active Support:</strong> Unlimited access for 12 months after graduation</li>
                                        <li><strong>Alumni Network:</strong> Lifetime access to our professional network</li>
                                        <li><strong>Continued Coaching:</strong> Quarterly check-ins and career advancement advice</li>
                                        <li><strong>Job Change Support:</strong> Help with future career moves and promotions</li>
                                        <li><strong>Skill Updates:</strong> Recommendations for staying current with industry trends</li>
                                        <li><strong>Referral Network:</strong> Access to alumni working at top companies</li>
                                    </ul>
                                    <p>Many of our graduates return years later for advice on senior roles and career pivots.</p>
                                </div>
                            </div>
                            
                            <div class="faq-item">
                                <div class="faq-question">
                                    <h3>What companies hire your graduates?</h3>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">
                                    <p>Our graduates work at companies of all sizes, from startups to Fortune 500:</p>
                                    <div class="hiring-companies">
                                        <div class="company-tier">
                                            <h4>🏢 Tech Giants</h4>
                                            <div class="company-list">
                                                <span>Google</span><span>Microsoft</span><span>Amazon</span><span>Apple</span>
                                                <span>Meta</span><span>Netflix</span><span>Tesla</span><span>Spotify</span>
                                            </div>
                                        </div>
                                        <div class="company-tier">
                                            <h4>🚀 High-Growth Startups</h4>
                                            <div class="company-list">
                                                <span>Stripe</span><span>Airbnb</span><span>Uber</span><span>Coinbase</span>
                                                <span>Discord</span><span>Figma</span><span>Notion</span><span>Vercel</span>
                                            </div>
                                        </div>
                                        <div class="company-tier">
                                            <h4>🏦 Enterprise & Finance</h4>
                                            <div class="company-list">
                                                <span>JPMorgan</span><span>Goldman Sachs</span><span>IBM</span><span>Accenture</span>
                                                <span>Deloitte</span><span>McKinsey</span><span>Salesforce</span><span>Oracle</span>
                                            </div>
                                        </div>
                                        <div class="company-tier">
                                            <h4>🎯 Industry Leaders</h4>
                                            <div class="company-list">
                                                <span>Disney</span><span>Nike</span><span>Target</span><span>Walmart</span>
                                                <span>Ford</span><span>Boeing</span><span>Johnson & Johnson</span><span>Pfizer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p>We have active hiring partnerships with 500+ companies across all industries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>