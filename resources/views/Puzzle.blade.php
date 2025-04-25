<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Puzzle - AI-powered financial platform</title>
    <link rel="stylesheet" href="{{ asset('css/puzzle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <!-- Locomotive Scroll for smooth scrolling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
</head>

<body data-scroll-container>
    <div class="noise-overlay"></div>
    
    <header class="header" data-scroll-section>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <div class="logo-wrapper">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z" fill="#20FE6B"/>
                                <path d="M11 11H25V25H11V11Z" fill="#040308"/>
                            </svg>
                            <span>Puzzle</span>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <button class="btn btn-ghost me-2">Log in</button>
                            <button class="btn btn-primary">Get started</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-section" data-scroll-section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="hero-title" data-scroll data-scroll-speed="1">
                            <span class="reveal-text">AI-powered</span>
                            <span class="reveal-text delay-1">accounting & tax</span>
                            <span class="reveal-text delay-2">management</span>
                        </h1>
                        <p class="hero-description" data-scroll data-scroll-speed="0.5">
                            Streamline your financial operations with our intelligent platform. Designed for businesses and individuals seeking efficiency and accuracy.
                        </p>
                        <div class="hero-cta" data-scroll data-scroll-speed="0.7">
                            <button class="btn btn-primary me-3">Request a demo</button>
                            <button class="btn btn-outline">Learn more</button>
                        </div>
                        <div class="metrics-row" data-scroll data-scroll-speed="0.5">
                            <div class="metric">
                                <span class="metric-value">99%</span>
                                <span class="metric-label">Accuracy</span>
                            </div>
                            <div class="metric">
                                <span class="metric-value">$2.4M</span>
                                <span class="metric-label">Client savings</span>
                            </div>
                            <div class="metric">
                                <span class="metric-value">4,500+</span>
                                <span class="metric-label">Active users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image" data-scroll data-scroll-speed="1.5">
                            <div class="floating-elements">
                                <div class="floating-card card-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#20FE6B"/>
                                    </svg>
                                    <span>Transaction processed</span>
                                </div>
                                <div class="floating-card card-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#28B1DC"/>
                                    </svg>
                                    <span>Tax optimization</span>
                                </div>
                                <div class="platform-illustration">
                                    <div class="dashboard-mockup">
                                        <div class="mockup-header"></div>
                                        <div class="mockup-content">
                                            <div class="chart-element"></div>
                                            <div class="data-rows">
                                                <div class="data-row"></div>
                                                <div class="data-row"></div>
                                                <div class="data-row"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-divider">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <section class="features-section" data-scroll-section>
            <div class="container">
                <div class="section-header text-center" data-scroll data-scroll-speed="0.5">
                    <h2 class="section-title">
                        <span class="highlight">Key features</span> designed for efficiency
                    </h2>
                    <p class="section-description">
                        Our platform combines powerful AI with user-friendly interfaces to streamline your financial management
                    </p>
                </div>

                <div class="row features-row">
                    <div class="col-md-4" data-scroll data-scroll-speed="0.3">
                        <div class="feature-card">
                            <div class="feature-icon green">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="feature-title">Intelligent Analysis</h3>
                            <p class="feature-description">
                                Our AI automatically categorizes transactions and identifies patterns to provide actionable insights.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4" data-scroll data-scroll-speed="0.5">
                        <div class="feature-card">
                            <div class="feature-icon blue">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <h3 class="feature-title">Tax Optimization</h3>
                            <p class="feature-description">
                                Maximize deductions and minimize liability with our AI-powered tax planning tools.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4" data-scroll data-scroll-speed="0.7">
                        <div class="feature-card">
                            <div class="feature-icon purple">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3 class="feature-title">Compliance Assurance</h3>
                            <p class="feature-description">
                                Stay ahead of regulatory requirements with automated compliance checks and documentation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="platform-section" data-scroll-section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-scroll data-scroll-speed="0.5">
                        <div class="platform-content">
                            <h2 class="section-title">
                                <span class="highlight">Streamlined</span> dashboard for complete visibility
                            </h2>
                            <p class="section-description">
                                Get a comprehensive view of your financial health with our intuitive dashboard
                            </p>
                            <ul class="feature-list">
                                <li class="feature-item">
                                    <span class="feature-check"><i class="fas fa-check"></i></span>
                                    Real-time financial overview
                                </li>
                                <li class="feature-item">
                                    <span class="feature-check"><i class="fas fa-check"></i></span>
                                    Automated categorization
                                </li>
                                <li class="feature-item">
                                    <span class="feature-check"><i class="fas fa-check"></i></span>
                                    Instant tax implications
                                </li>
                                <li class="feature-item">
                                    <span class="feature-check"><i class="fas fa-check"></i></span>
                                    Custom reporting tools
                                </li>
                            </ul>
                            <button class="btn btn-primary">Explore the platform</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="platform-visual" data-scroll data-scroll-speed="1">
                            <div class="dashboard-preview">
                                <div class="preview-header"></div>
                                <div class="preview-content">
                                    <div class="preview-chart"></div>
                                    <div class="preview-stats">
                                        <div class="stat-item"></div>
                                        <div class="stat-item"></div>
                                        <div class="stat-item"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="floating-notification">
                                <div class="notification-icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="notification-content">
                                    <p>Tax saving opportunity detected</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-section" data-scroll-section>
            <div class="container">
                <div class="section-header text-center" data-scroll data-scroll-speed="0.5">
                    <h2 class="section-title">
                        Trusted by <span class="highlight">businesses</span> and <span class="highlight">individuals</span>
                    </h2>
                    <p class="section-description">
                        Hear what our clients have to say about their experience with Puzzle
                    </p>
                </div>
                
                <div class="testimonials-slider" data-scroll data-scroll-speed="0.3">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Puzzle has transformed how we manage our finances. The AI-powered insights have saved us countless hours and thousands of dollars."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image"></div>
                            <div class="author-info">
                                <h4>Sarah Johnson</h4>
                                <p>CFO, TechStart Inc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"As a freelancer, keeping track of expenses and taxes was always a headache. Puzzle makes it simple and actually enjoyable."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image"></div>
                            <div class="author-info">
                                <h4>Michael Chen</h4>
                                <p>Independent Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"The tax optimization features alone have paid for our subscription many times over. Highly recommended for any business."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image"></div>
                            <div class="author-info">
                                <h4>Alex Rodriguez</h4>
                                <p>Owner, Coastal Retail</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="client-logos" data-scroll data-scroll-speed="0.7">
                    <div class="logo-item">
                        <svg width="100" height="40" viewBox="0 0 100 40" fill="#3F4E57">
                            <rect width="100" height="40" rx="4" />
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="100" height="40" viewBox="0 0 100 40" fill="#3F4E57">
                            <rect width="100" height="40" rx="4" />
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="100" height="40" viewBox="0 0 100 40" fill="#3F4E57">
                            <rect width="100" height="40" rx="4" />
                        </svg>
                    </div>
                    <div class="logo-item">
                        <svg width="100" height="40" viewBox="0 0 100 40" fill="#3F4E57">
                            <rect width="100" height="40" rx="4" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section" data-scroll-section>
            <div class="container">
                <div class="cta-wrapper" data-scroll data-scroll-speed="0.5">
                    <h2 class="cta-title">Ready to transform your financial management?</h2>
                    <p class="cta-description">Join thousands of satisfied users who have streamlined their accounting and tax processes with Puzzle</p>
                    <div class="cta-buttons">
                        <button class="btn btn-primary">Get started free</button>
                        <button class="btn btn-outline">Schedule a demo</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer" data-scroll-section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-brand">
                        <div class="logo-wrapper">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z" fill="#20FE6B"/>
                                <path d="M11 11H25V25H11V11Z" fill="#040308"/>
                            </svg>
                            <span>Puzzle</span>
                        </div>
                        <p class="footer-description">
                            AI-powered accounting and tax management platform designed for businesses and individuals.
                        </p>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-links">
                                <h3 class="footer-heading">Product</h3>
                                <ul class="footer-list">
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Integrations</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-links">
                                <h3 class="footer-heading">Resources</h3>
                                <ul class="footer-list">
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">Tutorials</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-links">
                                <h3 class="footer-heading">Company</h3>
                                <ul class="footer-list">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Legal</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">
                    <p>&copy; 2024 Puzzle Finance, Inc. All rights reserved.</p>
                </div>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Locomotive Scroll
            const scroll = new LocomotiveScroll({
                el: document.querySelector('[data-scroll-container]'),
                smooth: true,
                multiplier: 1,
                smartphone: {
                    smooth: true
                },
                tablet: {
                    smooth: true
                }
            });

            // GSAP animations
            gsap.registerPlugin(ScrollTrigger);
            
            // Update ScrollTrigger when locomotive scroll updates
            scroll.on('scroll', ScrollTrigger.update);
            
            // Link ScrollTrigger and Locomotive Scroll
            ScrollTrigger.scrollerProxy('[data-scroll-container]', {
                scrollTop(value) {
                    return arguments.length ? scroll.scrollTo(value, 0, 0) : scroll.scroll.instance.scroll.y;
                },
                getBoundingClientRect() {
                    return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
                }
            });
            
            // Define animations
            gsap.from('.reveal-text', {
                y: 100,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: "power3.out"
            });

            gsap.from('.hero-description', {
                opacity: 0,
                duration: 1,
                delay: 0.7,
                ease: "power2.out"
            });

            gsap.from('.hero-cta', {
                opacity: 0,
                y: 30,
                duration: 1,
                delay: 0.9,
                ease: "power2.out"
            });

            gsap.from('.floating-card', {
                y: 30,
                opacity: 0,
                duration: 1,
                stagger: 0.3,
                delay: 0.5,
                ease: "power2.out"
            });

            // Subtle floating animation for cards
            gsap.to('.floating-card.card-1', {
                y: -15,
                duration: 2,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });

            gsap.to('.floating-card.card-2', {
                y: -15,
                duration: 2.5,
                repeat: -1,
                yoyo: true,
                delay: 0.3,
                ease: "sine.inOut"
            });

            // Section animations
            document.querySelectorAll('section').forEach(section => {
                const title = section.querySelector('.section-title');
                const elements = section.querySelectorAll('.feature-card, .testimonial-card, .platform-visual');
                
                if (title) {
                    ScrollTrigger.create({
                        trigger: section,
                        scroller: '[data-scroll-container]',
                        start: 'top 70%',
                        onEnter: () => {
                            gsap.fromTo(title, {
                                y: 50,
                                opacity: 0
                            }, {
                                y: 0,
                                opacity: 1,
                                duration: 0.8,
                                ease: "power2.out"
                            });
                        }
                    });
                }
                
                if (elements.length) {
                    ScrollTrigger.create({
                        trigger: section,
                        scroller: '[data-scroll-container]',
                        start: 'top 60%',
                        onEnter: () => {
                            gsap.fromTo(elements, {
                                y: 50,
                                opacity: 0
                            }, {
                                y: 0,
                                opacity: 1,
                                duration: 0.8,
                                stagger: 0.15,
                                ease: "power2.out"
                            });
                        }
                    });
                }
            });

            // After all animations are set up
            ScrollTrigger.addEventListener('refresh', () => scroll.update());
            ScrollTrigger.refresh();
        });
    </script>
</body>

</html>