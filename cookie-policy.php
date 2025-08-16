<?php
$TITLE = "Cookie Policy - How We Use Cookies | Skytronic Labs";
$DESCRIPTION = "Learn about Skytronic Labs cookie policy. Understand how we use cookies, tracking technologies, and how to manage your cookie preferences.";
$KEYWORDS = "cookie policy, cookies, tracking, privacy, data collection, skytronic labs cookies, cookie preferences";
include 'includes/header.php';
?>

<main id="main-content">
    <!-- Cookie Policy Hero -->
    <section class="legal-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title">Cookie <span class="text-accent">Policy</span></h1>
                    <p class="hero-subtitle">Learn how we use cookies and similar technologies to enhance your learning experience and protect your privacy.</p>
                    <div class="legal-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar"></i>
                            <span>Last Updated: December 1, 2024</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-cookie-bite"></i>
                            <span>GDPR Compliant</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-cog"></i>
                            <span>Manageable Preferences</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Cookie Controls -->
    <section class="cookie-controls py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cookie-control-panel">
                        <div class="control-info">
                            <h3>Manage Your Cookie Preferences</h3>
                            <p>Control which cookies we use to personalize your experience</p>
                        </div>
                        <div class="control-actions">
                            <button class="btn btn-primary" onclick="manageCookies()">
                                <i class="fas fa-cog"></i>
                                Cookie Settings
                            </button>
                            <button class="btn btn-outline-secondary" onclick="acceptAllCookies()">
                                <i class="fas fa-check"></i>
                                Accept All
                            </button>
                            <button class="btn btn-outline-danger" onclick="rejectAllCookies()">
                                <i class="fas fa-times"></i>
                                Reject All
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cookie Policy Content -->
    <section class="cookie-content py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="cookie-sidebar sticky-top">
                        <h3>Cookie Guide</h3>
                        <nav class="cookie-nav">
                            <a href="#what-are-cookies" class="nav-link">What Are Cookies?</a>
                            <a href="#why-we-use" class="nav-link">Why We Use Cookies</a>
                            <a href="#cookie-types" class="nav-link">Types of Cookies</a>
                            <a href="#essential-cookies" class="nav-link">Essential Cookies</a>
                            <a href="#analytics-cookies" class="nav-link">Analytics Cookies</a>
                            <a href="#marketing-cookies" class="nav-link">Marketing Cookies</a>
                            <a href="#third-party" class="nav-link">Third-Party Cookies</a>
                            <a href="#manage-cookies" class="nav-link">Managing Cookies</a>
                            <a href="#cookie-retention" class="nav-link">Cookie Retention</a>
                            <a href="#updates" class="nav-link">Policy Updates</a>
                        </nav>
                        
                        <div class="cookie-summary">
                            <h4>Quick Summary</h4>
                            <ul>
                                <li>We use cookies to enhance your experience</li>
                                <li>Essential cookies are always active</li>
                                <li>You can control optional cookies</li>
                                <li>We respect your privacy choices</li>
                                <li>Settings can be changed anytime</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <div class="legal-content">
                        <!-- What Are Cookies -->
                        <section id="what-are-cookies" class="legal-section">
                            <h2>What Are Cookies?</h2>
                            <div class="section-content">
                                <div class="cookie-definition">
                                    <h3>Understanding Cookies</h3>
                                    <p>Cookies are small text files that are stored on your device (computer, tablet, or mobile phone) when you visit websites. They are widely used to make websites work more efficiently and to provide information to website owners about how users interact with their sites.</p>
                                    
                                    <div class="cookie-basics">
                                        <div class="cookie-basic">
                                            <h4>📁 What They Contain</h4>
                                            <ul>
                                                <li>Small pieces of text data</li>
                                                <li>Unique identifiers</li>
                                                <li>User preferences and settings</li>
                                                <li>Session information</li>
                                                <li>Timestamps and expiration dates</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="cookie-basic">
                                            <h4>💾 Where They're Stored</h4>
                                            <ul>
                                                <li>Browser's cookie folder</li>
                                                <li>Device local storage</li>
                                                <li>Separate from personal files</li>
                                                <li>Encrypted when necessary</li>
                                                <li>Accessible only to authorized domains</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="cookie-basic">
                                            <h4>🔒 Security Features</h4>
                                            <ul>
                                                <li>Cannot execute programs</li>
                                                <li>Cannot access personal files</li>
                                                <li>Limited to specific domains</li>
                                                <li>Have expiration dates</li>
                                                <li>Can be deleted anytime</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="similar-technologies">
                                    <h3>Similar Technologies</h3>
                                    <p>In addition to cookies, we may use other similar technologies:</p>
                                    
                                    <div class="tech-types">
                                        <div class="tech-type">
                                            <h4>🔍 Pixel Tags (Web Beacons)</h4>
                                            <p>Tiny invisible images used to track user behavior and email interactions</p>
                                            <ul>
                                                <li>Track email open rates</li>
                                                <li>Monitor page visits</li>
                                                <li>Measure ad effectiveness</li>
                                                <li>Analyze user engagement</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="tech-type">
                                            <h4>💾 Local Storage</h4>
                                            <p>Browser storage that persists data longer than session cookies</p>
                                            <ul>
                                                <li>Store user preferences</li>
                                                <li>Cache application data</li>
                                                <li>Maintain session state</li>
                                                <li>Improve loading times</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="tech-type">
                                            <h4>📊 Analytics Scripts</h4>
                                            <p>JavaScript code that collects usage data and statistics</p>
                                            <ul>
                                                <li>Track user interactions</li>
                                                <li>Monitor performance</li>
                                                <li>Generate usage reports</li>
                                                <li>Identify popular content</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="tech-type">
                                            <h4>🆔 Device Fingerprinting</h4>
                                            <p>Collecting device and browser characteristics for identification</p>
                                            <ul>
                                                <li>Browser version and settings</li>
                                                <li>Screen resolution</li>
                                                <li>Time zone and language</li>
                                                <li>Installed fonts and plugins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Why We Use Cookies -->
                        <section id="why-we-use" class="legal-section">
                            <h2>Why We Use Cookies</h2>
                            <div class="section-content">
                                <div class="usage-purposes">
                                    <h3>Our Cookie Purposes</h3>
                                    <p>We use cookies and similar technologies to enhance your learning experience and improve our educational platform:</p>
                                    
                                    <div class="purpose-categories">
                                        <div class="purpose-category">
                                            <h4>🎓 Educational Experience</h4>
                                            <ul>
                                                <li>Remember your course progress and bookmarks</li>
                                                <li>Save your learning preferences and settings</li>
                                                <li>Maintain your login session securely</li>
                                                <li>Personalize content recommendations</li>
                                                <li>Resume videos where you left off</li>
                                                <li>Track quiz and assignment completion</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="purpose-category">
                                            <h4>🛠️ Platform Functionality</h4>
                                            <ul>
                                                <li>Enable platform features and navigation</li>
                                                <li>Remember your language and region settings</li>
                                                <li>Maintain shopping cart contents</li>
                                                <li>Prevent duplicate form submissions</li>
                                                <li>Enable real-time notifications</li>
                                                <li>Support live chat and help features</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="purpose-category">
                                            <h4>📊 Analytics and Improvement</h4>
                                            <ul>
                                                <li>Understand how students use our platform</li>
                                                <li>Identify popular courses and content</li>
                                                <li>Monitor platform performance and errors</li>
                                                <li>Optimize loading times and user experience</li>
                                                <li>Analyze learning patterns and outcomes</li>
                                                <li>Improve course effectiveness</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="purpose-category">
                                            <h4>🔒 Security and Fraud Prevention</h4>
                                            <ul>
                                                <li>Protect against unauthorized access</li>
                                                <li>Detect and prevent fraudulent activities</li>
                                                <li>Monitor for suspicious behavior</li>
                                                <li>Implement rate limiting and abuse protection</li>
                                                <li>Ensure account security</li>
                                                <li>Verify user identity</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="purpose-category">
                                            <h4>📢 Marketing and Communication</h4>
                                            <ul>
                                                <li>Show relevant course recommendations</li>
                                                <li>Personalize marketing messages</li>
                                                <li>Track email campaign effectiveness</li>
                                                <li>Display targeted advertisements</li>
                                                <li>Measure conversion rates</li>
                                                <li>Retarget interested visitors</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="benefits-to-users">
                                    <h3>Benefits to You</h3>
                                    <p>Our use of cookies provides several benefits to enhance your learning experience:</p>
                                    
                                    <div class="benefit-list">
                                        <div class="benefit-item">
                                            <i class="fas fa-user-cog"></i>
                                            <h4>Personalized Experience</h4>
                                            <p>Customized content, recommendations, and settings based on your learning preferences and progress</p>
                                        </div>
                                        
                                        <div class="benefit-item">
                                            <i class="fas fa-rocket"></i>
                                            <h4>Improved Performance</h4>
                                            <p>Faster loading times, seamless navigation, and optimized platform performance</p>
                                        </div>
                                        
                                        <div class="benefit-item">
                                            <i class="fas fa-shield-alt"></i>
                                            <h4>Enhanced Security</h4>
                                            <p>Protection against fraud, unauthorized access, and security threats</p>
                                        </div>
                                        
                                        <div class="benefit-item">
                                            <i class="fas fa-chart-line"></i>
                                            <h4>Continuous Improvement</h4>
                                            <p>Platform enhancements based on usage data and student feedback</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Types of Cookies -->
                        <section id="cookie-types" class="legal-section">
                            <h2>Types of Cookies We Use</h2>
                            <div class="section-content">
                                <div class="cookie-classification">
                                    <h3>Cookie Categories</h3>
                                    <p>We classify our cookies into several categories based on their purpose and functionality:</p>
                                    
                                    <div class="classification-overview">
                                        <div class="classification-by-purpose">
                                            <h4>By Purpose</h4>
                                            <div class="classification-grid">
                                                <div class="classification-item essential">
                                                    <h5>Essential</h5>
                                                    <p>Required for basic functionality</p>
                                                    <span class="status">Always Active</span>
                                                </div>
                                                <div class="classification-item functional">
                                                    <h5>Functional</h5>
                                                    <p>Enhance user experience</p>
                                                    <span class="status">Optional</span>
                                                </div>
                                                <div class="classification-item analytics">
                                                    <h5>Analytics</h5>
                                                    <p>Usage statistics and insights</p>
                                                    <span class="status">Optional</span>
                                                </div>
                                                <div class="classification-item marketing">
                                                    <h5>Marketing</h5>
                                                    <p>Personalized advertising</p>
                                                    <span class="status">Optional</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="classification-by-duration">
                                            <h4>By Duration</h4>
                                            <div class="duration-types">
                                                <div class="duration-type">
                                                    <h5>Session Cookies</h5>
                                                    <p>Temporary cookies that expire when you close your browser</p>
                                                    <ul>
                                                        <li>Login session management</li>
                                                        <li>Shopping cart contents</li>
                                                        <li>Form data retention</li>
                                                        <li>Security tokens</li>
                                                    </ul>
                                                </div>
                                                
                                                <div class="duration-type">
                                                    <h5>Persistent Cookies</h5>
                                                    <p>Cookies that remain on your device for a specified period</p>
                                                    <ul>
                                                        <li>User preferences and settings</li>
                                                        <li>Language and region choices</li>
                                                        <li>Authentication tokens</li>
                                                        <li>Analytics and tracking data</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="classification-by-source">
                                            <h4>By Source</h4>
                                            <div class="source-types">
                                                <div class="source-type">
                                                    <h5>First-Party Cookies</h5>
                                                    <p>Set directly by Skytronic Labs</p>
                                                    <ul>
                                                        <li>Account authentication</li>
                                                        <li>Course progress tracking</li>
                                                        <li>User preferences</li>
                                                        <li>Platform analytics</li>
                                                    </ul>
                                                </div>
                                                
                                                <div class="source-type">
                                                    <h5>Third-Party Cookies</h5>
                                                    <p>Set by external services we use</p>
                                                    <ul>
                                                        <li>Google Analytics</li>
                                                        <li>Social media widgets</li>
                                                        <li>Payment processors</li>
                                                        <li>Marketing platforms</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Essential Cookies -->
                        <section id="essential-cookies" class="legal-section">
                            <h2>Essential Cookies</h2>
                            <div class="section-content">
                                <div class="essential-overview">
                                    <div class="essential-notice">
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p><strong>Always Active:</strong> Essential cookies are necessary for our website to function properly and cannot be disabled. They enable core functionality and security features.</p>
                                    </div>
                                </div>
                                
                                <div class="essential-categories">
                                    <h3>Essential Cookie Functions</h3>
                                    
                                    <div class="essential-functions">
                                        <div class="essential-function">
                                            <h4>🔐 Authentication & Security</h4>
                                            <div class="cookie-details">
                                                <div class="cookie-item">
                                                    <h5>session_token</h5>
                                                    <p><strong>Purpose:</strong> Maintains your login session securely</p>
                                                    <p><strong>Duration:</strong> Session (expires when browser closes)</p>
                                                    <p><strong>Type:</strong> HTTP-only, Secure</p>
                                                </div>
                                                <div class="cookie-item">
                                                    <h5>csrf_token</h5>
                                                    <p><strong>Purpose:</strong> Protects against cross-site request forgery attacks</p>
                                                    <p><strong>Duration:</strong> Session</p>
                                                    <p><strong>Type:</strong> HTTP-only, Secure</p>
                                                </div>
                                                <div class="cookie-item">
                                                    <h5>security_check</h5>
                                                    <p><strong>Purpose:</strong> Detects suspicious activity and potential security threats</p>
                                                    <p><strong>Duration:</strong> 24 hours</p>
                                                    <p><strong>Type:</strong> Secure, SameSite</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="essential-function">
                                            <h4>⚙️ Platform Functionality</h4>
                                            <div class="cookie-details">
                                                <div class="cookie-item">
                                                    <h5>user_preferences</h5>
                                                    <p><strong>Purpose:</strong> Stores your language, timezone, and accessibility settings</p>
                                                    <p><strong>Duration:</strong> 1 year</p>
                                                    <p><strong>Type:</strong> Functional</p>
                                                </div>
                                                <div class="cookie-item">
                                                    <h5>course_state</h5>
                                                    <p><strong>Purpose:</strong> Remembers your course progress and current lesson</p>
                                                    <p><strong>Duration:</strong> 6 months</p>
                                                    <p><strong>Type:</strong> Functional</p>
                                                </div>
                                                <div class="cookie-item">
                                                    <h5>form_data</h5>
                                                    <p><strong>Purpose:</strong> Temporarily stores form information to prevent data loss</p>
                                                    <p><strong>Duration:</strong> Session</p>
                                                    <p><strong>Type:</strong> Temporary</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="essential-function">
                                            <h4>🛒 E-commerce Functionality</h4>
                                            <div class="cookie-details">
                                                <div class="cookie-item">
                                                    <h5>cart_contents</h5>
                                                    <p><strong>Purpose:</strong> Maintains items in your shopping cart</p>
                                                    <p><strong>Duration:</strong> 7 days</p>
                                                    <p><strong>Type:</strong> Functional</p>
                                                </div>
                                                <div class="cookie-item">
                                                    <h5>payment_session</h5>
                                                    <p><strong>Purpose:</strong> Secures payment processing during checkout</p>
                                                    <p><strong>Duration:</strong> 30 minutes</p>
                                                    <p><strong>Type:</strong> HTTP-only, Secure</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="essential-function">
                                            <h4>🍪 Cookie Consent</h4>
                                            <div class="cookie-details">
                                                <div class="cookie-item">
                                                    <h5>cookie_consent</h5>
                                                    <p><strong>Purpose:</strong> Remembers your cookie preference choices</p>
                                                    <p><strong>Duration:</strong> 1 year</p>
                                                    <p><strong>Type:</strong> Functional</p>
                                                </div>
                                                <div class="cookie-item">
                                                    <h5>gdpr_acknowledged</h5>
                                                    <p><strong>Purpose:</strong> Tracks GDPR compliance acknowledgment</p>
                                                    <p><strong>Duration:</strong> 2 years</p>
                                                    <p><strong>Type:</strong> Compliance</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="essential-importance">
                                    <h3>Why These Cookies Are Essential</h3>
                                    <p>Without essential cookies, you would experience:</p>
                                    <ul>
                                        <li>Inability to log in or maintain your session</li>
                                        <li>Loss of course progress and preferences</li>
                                        <li>Security vulnerabilities and potential fraud</li>
                                        <li>Broken checkout and payment processes</li>
                                        <li>Repeated cookie consent prompts</li>
                                        <li>Inability to access member-only content</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Analytics Cookies -->
                        <section id="analytics-cookies" class="legal-section">
                            <h2>Analytics and Performance Cookies</h2>
                            <div class="section-content">
                                <div class="analytics-overview">
                                    <div class="analytics-notice">
                                        <i class="fas fa-chart-bar"></i>
                                        <p><strong>Optional:</strong> Analytics cookies help us understand how you use our platform so we can improve your learning experience. You can disable these cookies without affecting core functionality.</p>
                                    </div>
                                </div>
                                
                                <div class="analytics-purposes">
                                    <h3>What Analytics Cookies Do</h3>
                                    <div class="analytics-functions">
                                        <div class="analytics-function">
                                            <h4>📊 Usage Analytics</h4>
                                            <ul>
                                                <li>Track which courses and lessons are most popular</li>
                                                <li>Monitor student engagement and completion rates</li>
                                                <li>Identify common learning paths and preferences</li>
                                                <li>Measure time spent on different content types</li>
                                                <li>Analyze student progression and success patterns</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="analytics-function">
                                            <h4>⚡ Performance Monitoring</h4>
                                            <ul>
                                                <li>Monitor page loading times and performance</li>
                                                <li>Identify technical issues and errors</li>
                                                <li>Track system reliability and uptime</li>
                                                <li>Measure video streaming quality</li>
                                                <li>Optimize content delivery and caching</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="analytics-function">
                                            <h4>🎯 User Experience Insights</h4>
                                            <ul>
                                                <li>Understand navigation patterns and user flows</li>
                                                <li>Identify where students encounter difficulties</li>
                                                <li>Track feature usage and adoption</li>
                                                <li>Monitor search queries and results</li>
                                                <li>Analyze mobile vs desktop usage</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="analytics-services">
                                    <h3>Analytics Services We Use</h3>
                                    <div class="service-details">
                                        <div class="service-item">
                                            <h4>Google Analytics</h4>
                                            <div class="service-info">
                                                <p><strong>Purpose:</strong> Web analytics and user behavior tracking</p>
                                                <p><strong>Data Collected:</strong> Page views, session duration, bounce rate, demographics</p>
                                                <p><strong>Retention:</strong> 26 months</p>
                                                <p><strong>Privacy:</strong> IP anonymization enabled</p>
                                                <div class="service-cookies">
                                                    <h5>Cookies Used:</h5>
                                                    <ul>
                                                        <li><code>_ga</code> - Distinguishes users (2 years)</li>
                                                        <li><code>_gid</code> - Distinguishes users (24 hours)</li>
                                                        <li><code>_gat</code> - Rate limiting (1 minute)</li>
                                                    </ul>
                                                </div>
                                                <p><a href="https://policies.google.com/privacy" target="_blank">Google Privacy Policy</a></p>
                                            </div>
                                        </div>
                                        
                                        <div class="service-item">
                                            <h4>Mixpanel</h4>
                                            <div class="service-info">
                                                <p><strong>Purpose:</strong> Product analytics and user engagement tracking</p>
                                                <p><strong>Data Collected:</strong> Feature usage, conversion events, user journeys</p>
                                                <p><strong>Retention:</strong> 2 years</p>
                                                <p><strong>Privacy:</strong> Personal data anonymization</p>
                                                <div class="service-cookies">
                                                    <h5>Cookies Used:</h5>
                                                    <ul>
                                                        <li><code>mp_*</code> - User identification and tracking</li>
                                                        <li><code>mixpanel</code> - Event tracking (1 year)</li>
                                                    </ul>
                                                </div>
                                                <p><a href="https://mixpanel.com/legal/privacy-policy/" target="_blank">Mixpanel Privacy Policy</a></p>
                                            </div>
                                        </div>
                                        
                                        <div class="service-item">
                                            <h4>Hotjar</h4>
                                            <div class="service-info">
                                                <p><strong>Purpose:</strong> User experience analysis and heatmaps</p>
                                                <p><strong>Data Collected:</strong> Mouse movements, clicks, scroll behavior</p>
                                                <p><strong>Retention:</strong> 365 days</p>
                                                <p><strong>Privacy:</strong> No personal data collected</p>
                                                <div class="service-cookies">
                                                    <h5>Cookies Used:</h5>
                                                    <ul>
                                                        <li><code>_hjid</code> - User identification (365 days)</li>
                                                        <li><code>_hjSessionUser_*</code> - Session tracking (365 days)</li>
                                                    </ul>
                                                </div>
                                                <p><a href="https://www.hotjar.com/legal/policies/privacy/" target="_blank">Hotjar Privacy Policy</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="opt-out-analytics">
                                    <h3>Opting Out of Analytics</h3>
                                    <p>You can disable analytics cookies through:</p>
                                    <ul>
                                        <li>Our cookie preference center</li>
                                        <li>Browser settings and privacy controls</li>
                                        <li>Third-party opt-out tools (like Google Analytics Opt-out)</li>
                                        <li>Privacy-focused browser extensions</li>
                                    </ul>
                                    <p><strong>Note:</strong> Disabling analytics cookies does not affect your ability to use our platform or access courses.</p>
                                </div>
                            </div>
                        </section>

                        <!-- Marketing Cookies -->
                        <section id="marketing-cookies" class="legal-section">
                            <h2>Marketing and Advertising Cookies</h2>
                            <div class="section-content">
                                <div class="marketing-overview">
                                    <div class="marketing-notice">
                                        <i class="fas fa-bullhorn"></i>
                                        <p><strong>Optional:</strong> Marketing cookies help us show you relevant course recommendations and advertisements. These cookies can be disabled without affecting your access to our educational content.</p>
                                    </div>
                                </div>
                                
                                <div class="marketing-purposes">
                                    <h3>How We Use Marketing Cookies</h3>
                                    <div class="marketing-functions">
                                        <div class="marketing-function">
                                            <h4>🎯 Personalized Recommendations</h4>
                                            <ul>
                                                <li>Suggest courses based on your interests and progress</li>
                                                <li>Recommend related learning paths</li>
                                                <li>Show relevant career opportunities</li>
                                                <li>Personalize course previews and content</li>
                                                <li>Customize newsletter and email content</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="marketing-function">
                                            <h4>📢 Targeted Advertising</h4>
                                            <ul>
                                                <li>Display relevant ads on external websites</li>
                                                <li>Show course promotions based on your interests</li>
                                                <li>Retarget visitors with relevant content</li>
                                                <li>Measure advertising campaign effectiveness</li>
                                                <li>Optimize ad spending and targeting</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="marketing-function">
                                            <h4>📊 Campaign Measurement</h4>
                                            <ul>
                                                <li>Track conversion rates and attribution</li>
                                                <li>Measure email campaign effectiveness</li>
                                                <li>Analyze social media engagement</li>
                                                <li>Monitor referral and affiliate programs</li>
                                                <li>Calculate return on marketing investment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="marketing-services">
                                    <h3>Marketing Services We Use</h3>
                                    <div class="marketing-service-details">
                                        <div class="marketing-service">
                                            <h4>Facebook Pixel</h4>
                                            <div class="service-info">
                                                <p><strong>Purpose:</strong> Social media advertising and retargeting</p>
                                                <p><strong>Data:</strong> Page visits, conversions, custom audiences</p>
                                                <p><strong>Duration:</strong> 90 days</p>
                                                <div class="service-cookies">
                                                    <h5>Cookies:</h5>
                                                    <ul>
                                                        <li><code>_fbp</code> - Browser identification</li>
                                                        <li><code>_fbc</code> - Click tracking</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="marketing-service">
                                            <h4>Google Ads</h4>
                                            <div class="service-info">
                                                <p><strong>Purpose:</strong> Search and display advertising</p>
                                                <p><strong>Data:</strong> Ad clicks, conversions, audience interests</p>
                                                <p><strong>Duration:</strong> 90 days</p>
                                                <div class="service-cookies">
                                                    <h5>Cookies:</h5>
                                                    <ul>
                                                        <li><code>_gcl_*</code> - Google Click Identifier</li>
                                                        <li><code>__gads</code> - Ad serving and frequency</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="marketing-service">
                                            <h4>LinkedIn Insights</h4>
                                            <div class="service-info">
                                                <p><strong>Purpose:</strong> Professional network advertising</p>
                                                <p><strong>Data:</strong> Professional demographics, job titles</p>
                                                <p><strong>Duration:</strong> 180 days</p>
                                                <div class="service-cookies">
                                                    <h5>Cookies:</h5>
                                                    <ul>
                                                        <li><code>_linkedin_*</code> - Conversion tracking</li>
                                                        <li><code>bcookie</code> - Browser identification</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="marketing-service">
                                            <h4>HubSpot</h4>
                                            <div class="service-info">
                                                <p><strong>Purpose:</strong> Marketing automation and lead tracking</p>
                                                <p><strong>Data:</strong> Form submissions, email engagement</p>
                                                <p><strong>Duration:</strong> 2 years</p>
                                                <div class="service-cookies">
                                                    <h5>Cookies:</h5>
                                                    <ul>
                                                        <li><code>__hstc</code> - Visitor tracking</li>
                                                        <li><code>__hssc</code> - Session tracking</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="marketing-controls">
                                    <h3>Managing Marketing Cookies</h3>
                                    <div class="control-options">
                                        <div class="control-option">
                                            <h4>🔧 Our Cookie Settings</h4>
                                            <p>Use our cookie preference center to disable marketing cookies</p>
                                            <button class="btn btn-primary btn-sm" onclick="manageCookies()">Manage Preferences</button>
                                        </div>
                                        
                                        <div class="control-option">
                                            <h4>🚫 Industry Opt-Out Tools</h4>
                                            <ul>
                                                <li><a href="https://optout.aboutads.info/" target="_blank">Digital Advertising Alliance Opt-Out</a></li>
                                                <li><a href="https://www.networkadvertising.org/choices/" target="_blank">Network Advertising Initiative Opt-Out</a></li>
                                                <li><a href="https://youronlinechoices.eu/" target="_blank">European Interactive Digital Advertising Alliance</a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="control-option">
                                            <h4>📱 Platform-Specific Controls</h4>
                                            <ul>
                                                <li><a href="https://www.facebook.com/settings?tab=ads" target="_blank">Facebook Ad Preferences</a></li>
                                                <li><a href="https://adssettings.google.com/" target="_blank">Google Ad Settings</a></li>
                                                <li><a href="https://www.linkedin.com/psettings/advertising" target="_blank">LinkedIn Ad Preferences</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Third-Party Cookies -->
                        <section id="third-party" class="legal-section">
                            <h2>Third-Party Cookies and Services</h2>
                            <div class="section-content">
                                <div class="third-party-overview">
                                    <h3>External Services and Integrations</h3>
                                    <p>Our platform integrates with various third-party services that may set their own cookies. We work only with reputable providers who maintain high privacy and security standards.</p>
                                </div>
                                
                                <div class="third-party-categories">
                                    <div class="third-party-category">
                                        <h4>📊 Analytics and Insights</h4>
                                        <div class="third-party-services">
                                            <div class="service">
                                                <h5>Google Analytics</h5>
                                                <p>Web analytics and user behavior insights</p>
                                                <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a>
                                            </div>
                                            <div class="service">
                                                <h5>Mixpanel</h5>
                                                <p>Product analytics and event tracking</p>
                                                <a href="https://mixpanel.com/legal/privacy-policy/" target="_blank">Privacy Policy</a>
                                            </div>
                                            <div class="service">
                                                <h5>Hotjar</h5>
                                                <p>User experience analysis and heatmaps</p>
                                                <a href="https://www.hotjar.com/legal/policies/privacy/" target="_blank">Privacy Policy</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="third-party-category">
                                        <h4>💬 Communication and Support</h4>
                                        <div class="third-party-services">
                                            <div class="service">
                                                <h5>Intercom</h5>
                                                <p>Customer support chat and messaging</p>
                                                <a href="https://www.intercom.com/legal/privacy" target="_blank">Privacy Policy</a>
                                            </div>
                                            <div class="service">
                                                <h5>Zoom</h5>
                                                <p>Video conferencing for live sessions</p>
                                                <a href="https://zoom.us/privacy" target="_blank">Privacy Policy</a>
                                            </div>
                                            <div class="service">
                                                <h5>SendGrid</h5>
                                                <p>Email delivery and tracking</p>
                                                <a href="https://sendgrid.com/policies/privacy/" target="_blank">Privacy Policy</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="third-party-category">
                                        <h4>💳 Payment Processing</h4>
                                        <div class="third-party-services">
                                            <div class="service">
                                                <h5>Stripe</h5>
                                                <p>Payment processing and billing</p>
                                                <a href="https://stripe.com/privacy" target="_blank">Privacy Policy</a>
                                            </div>
                                            <div class="service">
                                                <h5>PayPal</h5>
                                                <p>Alternative payment methods</p>
                                                <a href="https://www.paypal.com/privacy" target="_blank">Privacy Policy</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="third-party-category">
                                        <h4>📱 Social Media and Sharing</h4>
                                        <div class="third-party-services">
                                            <div class="service">
                                                <h5>Facebook</h5>
                                                <p>Social sharing and login integration</p>
                                                <a href="https://www.facebook.com/privacy/policy/" target="_blank">Privacy Policy</a>
                                            </div>
                                            <div class="service">
                                                <h5>LinkedIn</h5>
                                                <p>Professional networking and sharing</p>
                                                <a href="https://www.linkedin.com/legal/privacy-policy" target="_blank">Privacy Policy</a>
                                            </div>
                                            <div class="service">
                                                <h5>GitHub</h5>
                                                <p>Code repository integration</p>
                                                <a href="https://docs.github.com/en/site-policy/privacy-policies/github-privacy-statement" target="_blank">Privacy Policy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="third-party-control">
                                    <h3>Controlling Third-Party Cookies</h3>
                                    <p>You can manage third-party cookies through:</p>
                                    <ul>
                                        <li>Browser privacy settings and cookie controls</li>
                                        <li>Individual service privacy preferences</li>
                                        <li>Industry opt-out tools and platforms</li>
                                        <li>Privacy-focused browser extensions</li>
                                        <li>Our cookie preference center (for integrated services)</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Managing Cookies -->
                        <section id="manage-cookies" class="legal-section">
                            <h2>Managing Your Cookie Preferences</h2>
                            <div class="section-content">
                                <div class="management-overview">
                                    <h3>Your Cookie Control Options</h3>
                                    <p>You have several options for managing cookies and controlling your privacy preferences:</p>
                                </div>
                                
                                <div class="management-methods">
                                    <div class="management-method">
                                        <h4>🔧 Our Cookie Preference Center</h4>
                                        <p>The easiest way to manage your cookie preferences is through our built-in preference center:</p>
                                        <div class="preference-features">
                                            <ul>
                                                <li>Granular control over cookie categories</li>
                                                <li>Real-time preference updates</li>
                                                <li>Clear descriptions of each cookie type</li>
                                                <li>Easy enable/disable toggles</li>
                                                <li>Instant application of changes</li>
                                            </ul>
                                        </div>
                                        <div class="preference-actions">
                                            <button class="btn btn-primary me-2" onclick="manageCookies()">
                                                <i class="fas fa-cog"></i>
                                                Open Cookie Settings
                                            </button>
                                            <button class="btn btn-success me-2" onclick="acceptAllCookies()">
                                                <i class="fas fa-check"></i>
                                                Accept All
                                            </button>
                                            <button class="btn btn-outline-danger" onclick="rejectAllCookies()">
                                                <i class="fas fa-times"></i>
                                                Reject Optional
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="management-method">
                                        <h4>🌐 Browser Settings</h4>
                                        <p>You can also control cookies through your browser settings:</p>
                                        <div class="browser-instructions">
                                            <div class="browser-instruction">
                                                <h5>Google Chrome</h5>
                                                <ol>
                                                    <li>Click the three dots menu → Settings</li>
                                                    <li>Go to Privacy and security → Cookies and other site data</li>
                                                    <li>Choose your preferred cookie settings</li>
                                                    <li>Add sites to block or allow lists</li>
                                                </ol>
                                            </div>
                                            
                                            <div class="browser-instruction">
                                                <h5>Mozilla Firefox</h5>
                                                <ol>
                                                    <li>Click the menu button → Preferences</li>
                                                    <li>Select Privacy & Security</li>
                                                    <li>In the Cookies and Site Data section, configure settings</li>
                                                    <li>Use Custom settings for granular control</li>
                                                </ol>
                                            </div>
                                            
                                            <div class="browser-instruction">
                                                <h5>Safari</h5>
                                                <ol>
                                                    <li>Go to Safari → Preferences</li>
                                                    <li>Click the Privacy tab</li>
                                                    <li>Choose your cookie blocking preferences</li>
                                                    <li>Manage website data for specific sites</li>
                                                </ol>
                                            </div>
                                            
                                            <div class="browser-instruction">
                                                <h5>Microsoft Edge</h5>
                                                <ol>
                                                    <li>Click the three dots menu → Settings</li>
                                                    <li>Go to Cookies and site permissions</li>
                                                    <li>Click Cookies and site data</li>
                                                    <li>Configure blocking and allow settings</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="management-method">
                                        <h4>📱 Mobile Device Settings</h4>
                                        <p>For mobile devices, you can manage cookies through:</p>
                                        <div class="mobile-instructions">
                                            <div class="mobile-instruction">
                                                <h5>iOS Safari</h5>
                                                <ul>
                                                    <li>Settings → Safari → Privacy & Security</li>
                                                    <li>Block All Cookies or Allow from Current Website Only</li>
                                                    <li>Advanced → Website Data to manage individual sites</li>
                                                </ul>
                                            </div>
                                            
                                            <div class="mobile-instruction">
                                                <h5>Android Chrome</h5>
                                                <ul>
                                                    <li>Chrome app → Three dots → Settings</li>
                                                    <li>Site settings → Cookies</li>
                                                    <li>Choose to allow or block cookies</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="management-method">
                                        <h4>🛡️ Privacy Tools and Extensions</h4>
                                        <p>Additional tools for enhanced privacy control:</p>
                                        <div class="privacy-tools">
                                            <div class="privacy-tool">
                                                <h5>Browser Extensions</h5>
                                                <ul>
                                                    <li>uBlock Origin - Ad and tracker blocking</li>
                                                    <li>Privacy Badger - Automatic tracker protection</li>
                                                    <li>Ghostery - Comprehensive tracker blocking</li>
                                                    <li>DuckDuckGo Privacy Essentials</li>
                                                </ul>
                                            </div>
                                            
                                            <div class="privacy-tool">
                                                <h5>Industry Opt-Out Tools</h5>
                                                <ul>
                                                    <li><a href="https://optout.aboutads.info/" target="_blank">DAA Consumer Choice Tool</a></li>
                                                    <li><a href="https://www.networkadvertising.org/choices/" target="_blank">NAI Opt-Out Tool</a></li>
                                                    <li><a href="https://youronlinechoices.eu/" target="_blank">EDAA Opt-Out Platform</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="management-impact">
                                    <h3>Impact of Disabling Cookies</h3>
                                    <div class="impact-levels">
                                        <div class="impact-level">
                                            <h4>🟢 Essential Cookies (Cannot be disabled)</h4>
                                            <p>Disabling would break core functionality</p>
                                        </div>
                                        
                                        <div class="impact-level">
                                            <h4>🟡 Functional Cookies</h4>
                                            <p>You may lose personalization and convenience features</p>
                                        </div>
                                        
                                        <div class="impact-level">
                                            <h4>🟠 Analytics Cookies</h4>
                                            <p>No impact on functionality, but we can't improve your experience</p>
                                        </div>
                                        
                                        <div class="impact-level">
                                            <h4>🔴 Marketing Cookies</h4>
                                            <p>You'll see less relevant ads and recommendations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Cookie Retention -->
                        <section id="cookie-retention" class="legal-section">
                            <h2>Cookie Retention and Expiration</h2>
                            <div class="section-content">
                                <div class="retention-overview">
                                    <h3>How Long We Keep Cookies</h3>
                                    <p>Different types of cookies have different retention periods based on their purpose and legal requirements:</p>
                                </div>
                                
                                <div class="retention-schedules">
                                    <div class="retention-category">
                                        <h4>⏱️ Session Cookies</h4>
                                        <div class="retention-details">
                                            <p><strong>Duration:</strong> Until you close your browser</p>
                                            <p><strong>Purpose:</strong> Temporary functionality during your visit</p>
                                            <p><strong>Examples:</strong> Login sessions, shopping cart, form data</p>
                                            <p><strong>Auto-Deletion:</strong> Automatically removed when browser closes</p>
                                        </div>
                                    </div>
                                    
                                    <div class="retention-category">
                                        <h4>📅 Short-Term Persistent Cookies</h4>
                                        <div class="retention-details">
                                            <p><strong>Duration:</strong> 1 hour to 30 days</p>
                                            <p><strong>Purpose:</strong> Temporary preferences and security</p>
                                            <p><strong>Examples:</strong> Language settings, security tokens, temporary preferences</p>
                                            <p><strong>Auto-Deletion:</strong> Expire automatically after set period</p>
                                        </div>
                                    </div>
                                    
                                    <div class="retention-category">
                                        <h4>📆 Medium-Term Persistent Cookies</h4>
                                        <div class="retention-details">
                                            <p><strong>Duration:</strong> 1 month to 1 year</p>
                                            <p><strong>Purpose:</strong> User preferences and functionality</p>
                                            <p><strong>Examples:</strong> User preferences, course progress, cookie consent</p>
                                            <p><strong>Auto-Deletion:</strong> Expire after specified period or user action</p>
                                        </div>
                                    </div>
                                    
                                    <div class="retention-category">
                                        <h4>📋 Long-Term Persistent Cookies</h4>
                                        <div class="retention-details">
                                            <p><strong>Duration:</strong> 1 year to 2 years</p>
                                            <p><strong>Purpose:</strong> Analytics and marketing optimization</p>
                                            <p><strong>Examples:</strong> Analytics tracking, marketing attribution</p>
                                            <p><strong>Auto-Deletion:</strong> Renewed on each visit up to maximum period</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="retention-management">
                                    <h3>Managing Cookie Retention</h3>
                                    <div class="management-options">
                                        <div class="management-option">
                                            <h4>🗑️ Manual Deletion</h4>
                                            <p>You can delete cookies at any time through:</p>
                                            <ul>
                                                <li>Browser settings and privacy controls</li>
                                                <li>Our cookie preference center</li>
                                                <li>Individual website controls</li>
                                                <li>Browser developer tools</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="management-option">
                                            <h4>⚙️ Automatic Expiration</h4>
                                            <p>Cookies automatically expire based on:</p>
                                            <ul>
                                                <li>Predefined expiration dates</li>
                                                <li>Maximum age limits</li>
                                                <li>Inactivity periods</li>
                                                <li>Browser session endings</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="management-option">
                                            <h4>🔄 Regular Cleanup</h4>
                                            <p>We regularly review and clean up:</p>
                                            <ul>
                                                <li>Expired and unused cookies</li>
                                                <li>Inactive user data</li>
                                                <li>Outdated tracking information</li>
                                                <li>Redundant cookie data</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="data-minimization">
                                    <h3>Data Minimization Principles</h3>
                                    <p>We follow data minimization principles for cookie retention:</p>
                                    <ul>
                                        <li>Only collect necessary data for specified purposes</li>
                                        <li>Set appropriate retention periods for each cookie type</li>
                                        <li>Regularly review and update retention policies</li>
                                        <li>Delete data when no longer needed</li>
                                        <li>Respect user deletion and opt-out requests</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Policy Updates -->
                        <section id="updates" class="legal-section">
                            <h2>Policy Updates and Changes</h2>
                            <div class="section-content">
                                <div class="update-policy">
                                    <h3>How We Update This Policy</h3>
                                    <p>We may update this Cookie Policy from time to time to reflect changes in our practices, technologies, legal requirements, or other factors.</p>
                                </div>
                                
                                <div class="update-process">
                                    <h3>Update Process</h3>
                                    <div class="process-steps">
                                        <div class="process-step">
                                            <h4>1. Policy Review</h4>
                                            <p>Regular review of cookie practices and legal requirements</p>
                                            <ul>
                                                <li>Annual comprehensive policy review</li>
                                                <li>Quarterly practice assessments</li>
                                                <li>Legal compliance monitoring</li>
                                                <li>Technology change evaluations</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="process-step">
                                            <h4>2. Change Notification</h4>
                                            <p>Advance notice of significant policy changes</p>
                                            <ul>
                                                <li>Email notifications to registered users</li>
                                                <li>Website banner announcements</li>
                                                <li>In-app notifications</li>
                                                <li>Updated consent requests when necessary</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="process-step">
                                            <h4>3. Implementation</h4>
                                            <p>Gradual implementation with user control</p>
                                            <ul>
                                                <li>30-day notice period for major changes</li>
                                                <li>Immediate implementation for legal requirements</li>
                                                <li>User consent collection when required</li>
                                                <li>Updated preference controls</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="version-history">
                                    <h3>Recent Updates</h3>
                                    <div class="version-log">
                                        <div class="version-entry">
                                            <h4>Version 2.0 - December 1, 2024</h4>
                                            <p><strong>Current Version</strong></p>
                                            <ul>
                                                <li>Enhanced cookie categorization and controls</li>
                                                <li>Updated third-party service information</li>
                                                <li>Improved user preference management</li>
                                                <li>Added retention period details</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="version-entry">
                                            <h4>Version 1.2 - September 15, 2024</h4>
                                            <ul>
                                                <li>Added new analytics service integrations</li>
                                                <li>Updated marketing cookie descriptions</li>
                                                <li>Enhanced mobile cookie management guidance</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="version-entry">
                                            <h4>Version 1.1 - June 1, 2024</h4>
                                            <ul>
                                                <li>GDPR compliance enhancements</li>
                                                <li>Improved cookie consent mechanisms</li>
                                                <li>Added opt-out tool references</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="staying-informed">
                                    <h3>Staying Informed</h3>
                                    <p>To stay updated on our cookie practices:</p>
                                    <ul>
                                        <li>Review this policy periodically</li>
                                        <li>Subscribe to our privacy updates newsletter</li>
                                        <li>Follow our privacy notices and announcements</li>
                                        <li>Contact us with questions about changes</li>
                                        <li>Monitor your cookie preference settings</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Contact Information -->
                        <section class="cookie-contact">
                            <h2>Questions About Our Cookie Policy?</h2>
                            <div class="contact-info">
                                <p>If you have questions about our use of cookies or this policy, please contact us:</p>
                                <div class="contact-options">
                                    <div class="contact-option">
                                        <h3>🍪 Cookie Questions</h3>
                                        <p><a href="mailto:privacy@skytroniclabs.com">privacy@skytroniclabs.com</a></p>
                                    </div>
                                    <div class="contact-option">
                                        <h3>📧 Data Protection Officer</h3>
                                        <p><a href="mailto:dpo@skytroniclabs.com">dpo@skytroniclabs.com</a></p>
                                    </div>
                                    <div class="contact-option">
                                        <h3>📬 Postal Address</h3>
                                        <address>
                                            Skytronic Labs, Inc.<br>
                                            Privacy Team<br>
                                            123 Technology Drive<br>
                                            San Francisco, CA 94105
                                        </address>
                                    </div>
                                </div>
                                <div class="response-commitment">
                                    <p><strong>Response Time:</strong> We typically respond to cookie-related inquiries within 2 business days.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>