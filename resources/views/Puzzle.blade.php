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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/MotionPathPlugin.min.js"></script>
    <!-- Locomotive Scroll for smooth scrolling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
    <!-- Lottie Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.11.0/lottie.min.js"></script>
    <!-- Three.js for 3D effects -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <!-- Particles.js for background effects -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>

<body data-scroll-container>
    <div class="noise-overlay"></div>
    <div id="particles-js" class="particles-container"></div>
    <div class="cursor-follower"></div>
    
    <header class="header" data-scroll-section>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <div class="logo-wrapper">
                            <div class="logo-animation" id="logoAnimation"></div>
                            <span class="glitch-text" data-text="Puzzle">Puzzle</span>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active magnetic-element" href="#">
                                    <span class="magnetic-content">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link magnetic-element" href="#">
                                    <span class="magnetic-content">Products</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link magnetic-element" href="#">
                                    <span class="magnetic-content">About</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link magnetic-element" href="#">
                                    <span class="magnetic-content">Resources</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link magnetic-element" href="#">
                                    <span class="magnetic-content">Pricing</span>
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <button class="btn btn-ghost me-2 btn-3d">Log in</button>
                            <button class="btn btn-primary btn-3d">
                                <span class="btn-text">Get started</span>
                                <span class="btn-particles"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-section" data-scroll-section>
            <div class="digital-grid">
                <div class="grid-line horizontal"></div>
                <div class="grid-line horizontal"></div>
                <div class="grid-line horizontal"></div>
                <div class="grid-line vertical"></div>
                <div class="grid-line vertical"></div>
                <div class="grid-line vertical"></div>
            </div>
            <div class="glowing-orbs">
                <div class="orb orb-1"></div>
                <div class="orb orb-2"></div>
                <div class="orb orb-3"></div>
            </div>
            
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="hero-title" data-scroll data-scroll-speed="1">
                            <span class="reveal-text cyberpunk-text">AI-powered</span>
                            <span class="reveal-text delay-1 cyberpunk-text">accounting & tax</span>
                            <span class="reveal-text delay-2 cyberpunk-text">management</span>
                        </h1>
                        <div class="cyberpunk-line"></div>
                        <p class="hero-description digital-text" data-scroll data-scroll-speed="0.5">
                            Streamline your financial operations with our intelligent platform. Designed for businesses and individuals seeking efficiency and accuracy.
                        </p>
                        <div class="hero-cta" data-scroll data-scroll-speed="0.7">
                            <button class="btn btn-primary me-3 btn-glow">
                                <span class="btn-text">Request a demo</span>
                                <div class="btn-glow-lines">
                                    <div class="glow-line"></div>
                                    <div class="glow-line"></div>
                                </div>
                            </button>
                            <button class="btn btn-outline btn-hologram">
                                <span class="hologram-text">Learn more</span>
                                <div class="hologram-grid"></div>
                            </button>
                        </div>
                        <div class="metrics-row" data-scroll data-scroll-speed="0.5">
                            <div class="metric cyberpunk-card">
                                <div class="metric-icon">
                                    <div id="accuracyAnimation" class="mini-lottie"></div>
                                </div>
                                <span class="metric-value counter-anim" data-count="99">0</span><span class="percent">%</span>
                                <span class="metric-label">Accuracy</span>
                            </div>
                            <div class="metric cyberpunk-card">
                                <div class="metric-icon">
                                    <div id="savingsAnimation" class="mini-lottie"></div>
                                </div>
                                <span class="currency">$</span><span class="metric-value counter-anim" data-count="2.4">0</span><span class="million">M</span>
                                <span class="metric-label">Client savings</span>
                            </div>
                            <div class="metric cyberpunk-card">
                                <div class="metric-icon">
                                    <div id="usersAnimation" class="mini-lottie"></div>
                                </div>
                                <span class="metric-value counter-anim" data-count="4500">0</span><span class="plus">+</span>
                                <span class="metric-label">Active users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image" data-scroll data-scroll-speed="1.5">
                            <div class="floating-elements">
                                <div class="hero-lottie-container">
                                    <div id="mainHeroAnimation" class="lottie-animation"></div>
                                </div>
                                
                                <div class="notification-cards">
                                    <div class="floating-card card-1 glass-card">
                                        <div class="card-icon pulse-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#20FE6B"/>
                                            </svg>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-label">Transaction processed</span>
                                            <div class="progress-bar-container">
                                                <div class="progress-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="floating-card card-2 glass-card">
                                        <div class="card-icon pulse-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#28B1DC"/>
                                            </svg>
                                        </div>
                                        <div class="card-content">
                                            <span class="card-label">Tax optimization</span>
                                            <div class="progress-bar-container">
                                                <div class="progress-bar blue-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="data-points-container">
                                    <div class="data-point" style="top: 20%; left: 10%"></div>
                                    <div class="data-point" style="top: 30%; left: 80%"></div>
                                    <div class="data-point" style="top: 50%; left: 30%"></div>
                                    <div class="data-point" style="top: 70%; left: 60%"></div>
                                    <div class="data-point" style="top: 80%; left: 20%"></div>
                                </div>
                                <div class="digital-sphere" id="digitalSphere"></div>
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
            // Initialize particles.js
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: ["#20FE6B", "#28B1DC", "#8B5CF6"]
                    },
                    shape: {
                        type: "circle",
                        stroke: {
                            width: 0,
                            color: "#000000"
                        },
                    },
                    opacity: {
                        value: 0.2,
                        random: true,
                        anim: {
                            enable: true,
                            speed: 1,
                            opacity_min: 0.05,
                            sync: false
                        }
                    },
                    size: {
                        value: 3,
                        random: true,
                        anim: {
                            enable: true,
                            speed: 2,
                            size_min: 0.5,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: "#20FE6B",
                        opacity: 0.1,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 1,
                        direction: "none",
                        random: true,
                        straight: false,
                        out_mode: "out",
                        bounce: false,
                    }
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: {
                            enable: true,
                            mode: "grab"
                        },
                        onclick: {
                            enable: true,
                            mode: "push"
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 140,
                            line_linked: {
                                opacity: 0.4
                            }
                        },
                        push: {
                            particles_nb: 4
                        }
                    }
                },
                retina_detect: true
            });

            // Initialize Lottie animations
            const logoAnimation = lottie.loadAnimation({
                container: document.getElementById('logoAnimation'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: 'https://assets3.lottiefiles.com/packages/lf20_sz683pfs.json' // Logo animation
            });

            const mainHeroAnimation = lottie.loadAnimation({
                container: document.getElementById('mainHeroAnimation'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: 'https://assets5.lottiefiles.com/packages/lf20_dzn7h5et.json' // Analytics Dashboard
            });

            const accuracyAnimation = lottie.loadAnimation({
                container: document.getElementById('accuracyAnimation'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: 'https://assets9.lottiefiles.com/packages/lf20_xjkbiaev.json' // Accuracy icon
            });

            const savingsAnimation = lottie.loadAnimation({
                container: document.getElementById('savingsAnimation'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: 'https://assets6.lottiefiles.com/packages/lf20_BhbCTg.json' // Money/savings icon
            });

            const usersAnimation = lottie.loadAnimation({
                container: document.getElementById('usersAnimation'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: 'https://assets2.lottiefiles.com/packages/lf20_4l03ffov.json' // User icon
            });

            // Initialize Three.js for digital sphere
            const container = document.getElementById('digitalSphere');
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
            
            const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            renderer.setSize(500, 500);
            renderer.setPixelRatio(window.devicePixelRatio > 1 ? 2 : 1);
            container.appendChild(renderer.domElement);
            
            // Create outer sphere geometry
            const sphereGeometry = new THREE.SphereGeometry(70, 64, 64);
            const sphereMaterial = new THREE.MeshBasicMaterial({
                color: 0x20FE6B,
                wireframe: true,
                transparent: true,
                opacity: 0.4
            });
            
            const sphere = new THREE.Mesh(sphereGeometry, sphereMaterial);
            scene.add(sphere);
            
            // Create inner sphere geometry with different color
            const innerSphereGeometry = new THREE.SphereGeometry(40, 32, 32);
            const innerSphereMaterial = new THREE.MeshBasicMaterial({
                color: 0x28B1DC,
                wireframe: true,
                transparent: true,
                opacity: 0.25
            });
            
            const innerSphere = new THREE.Mesh(innerSphereGeometry, innerSphereMaterial);
            scene.add(innerSphere);
            
            // Add data rings
            const ring1Geometry = new THREE.RingGeometry(80, 82, 64);
            const ring1Material = new THREE.MeshBasicMaterial({
                color: 0x20FE6B,
                side: THREE.DoubleSide,
                transparent: true,
                opacity: 0.2
            });
            const ring1 = new THREE.Mesh(ring1Geometry, ring1Material);
            ring1.rotation.x = Math.PI / 2;
            scene.add(ring1);
            
            const ring2Geometry = new THREE.RingGeometry(90, 91, 64);
            const ring2Material = new THREE.MeshBasicMaterial({
                color: 0x28B1DC,
                side: THREE.DoubleSide,
                transparent: true,
                opacity: 0.15
            });
            const ring2 = new THREE.Mesh(ring2Geometry, ring2Material);
            ring2.rotation.x = Math.PI / 4;
            scene.add(ring2);
            
            // Add particles to the sphere
            const particlesGeometry = new THREE.BufferGeometry();
            const particlesCount = 1500;
            
            const posArray = new Float32Array(particlesCount * 3);
            const scaleArray = new Float32Array(particlesCount);
            
            for(let i = 0; i < particlesCount * 3; i += 3) {
                // Create particles in sphere shape
                const radius = 60 + (Math.random() * 40);
                const theta = Math.random() * Math.PI * 2;
                const phi = Math.random() * Math.PI;
                
                posArray[i] = radius * Math.sin(phi) * Math.cos(theta);
                posArray[i+1] = radius * Math.sin(phi) * Math.sin(theta);
                posArray[i+2] = radius * Math.cos(phi);
                
                scaleArray[i/3] = Math.random();
            }
            
            particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
            particlesGeometry.setAttribute('scale', new THREE.BufferAttribute(scaleArray, 1));
            
            const particlesMaterial = new THREE.PointsMaterial({
                size: 0.5,
                color: 0xffffff,
                transparent: true,
                opacity: 0.7,
                vertexColors: false,
            });
            
            const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
            scene.add(particlesMesh);
            
            // Create floating data cards
            const createFloatingCard = (x, y, z, color) => {
                const cardGroup = new THREE.Group();
                
                // Card background
                const cardGeometry = new THREE.PlaneGeometry(15, 8);
                const cardMaterial = new THREE.MeshBasicMaterial({
                    color: color,
                    transparent: true,
                    opacity: 0.2,
                    side: THREE.DoubleSide
                });
                
                const card = new THREE.Mesh(cardGeometry, cardMaterial);
                
                // Card border
                const borderGeometry = new THREE.EdgesGeometry(cardGeometry);
                const borderMaterial = new THREE.LineBasicMaterial({
                    color: color,
                    transparent: true,
                    opacity: 0.7
                });
                
                const border = new THREE.LineSegments(borderGeometry, borderMaterial);
                border.position.z = 0.1;
                
                // Card lines (data)
                const line1Geometry = new THREE.PlaneGeometry(10, 0.5);
                const line1Material = new THREE.MeshBasicMaterial({
                    color: 0xffffff,
                    transparent: true,
                    opacity: 0.5
                });
                
                const line1 = new THREE.Mesh(line1Geometry, line1Material);
                line1.position.set(0, 2, 0.2);
                
                const line2Geometry = new THREE.PlaneGeometry(8, 0.5);
                const line2 = new THREE.Mesh(line2Geometry, line1Material);
                line2.position.set(0, 0, 0.2);
                
                const line3Geometry = new THREE.PlaneGeometry(12, 0.5);
                const line3 = new THREE.Mesh(line3Geometry, line1Material);
                line3.position.set(0, -2, 0.2);
                
                cardGroup.add(card);
                cardGroup.add(border);
                cardGroup.add(line1);
                cardGroup.add(line2);
                cardGroup.add(line3);
                
                cardGroup.position.set(x, y, z);
                
                return cardGroup;
            };
            
            const card1 = createFloatingCard(70, 10, 30, 0x20FE6B);
            const card2 = createFloatingCard(-60, -30, 40, 0x28B1DC);
            const card3 = createFloatingCard(20, 60, -40, 0x8B5CF6);
            
            scene.add(card1);
            scene.add(card2);
            scene.add(card3);
            
            camera.position.z = 150;
            
            // Create orbit paths for floating cards
            const card1Orbit = { theta: 0 };
            const card2Orbit = { theta: Math.PI * 0.5 };
            const card3Orbit = { theta: Math.PI };
            
            // Animation function
            function animate() {
                requestAnimationFrame(animate);
                
                // Rotate spheres at different speeds
                sphere.rotation.x += 0.001;
                sphere.rotation.y += 0.002;
                
                innerSphere.rotation.x -= 0.002;
                innerSphere.rotation.y -= 0.001;
                innerSphere.rotation.z += 0.001;
                
                // Rotate rings
                ring1.rotation.z += 0.002;
                ring2.rotation.z -= 0.001;
                
                // Rotate particle mesh
                particlesMesh.rotation.x += 0.0005;
                particlesMesh.rotation.y += 0.001;
                
                // Move cards in orbital paths
                card1Orbit.theta += 0.005;
                card1.position.x = 70 * Math.cos(card1Orbit.theta);
                card1.position.z = 70 * Math.sin(card1Orbit.theta);
                card1.rotation.y = -card1Orbit.theta + Math.PI/2;
                
                card2Orbit.theta += 0.003;
                card2.position.x = 60 * Math.cos(card2Orbit.theta);
                card2.position.z = 60 * Math.sin(card2Orbit.theta);
                card2.rotation.y = -card2Orbit.theta + Math.PI/2;
                
                card3Orbit.theta += 0.007;
                card3.position.x = 50 * Math.cos(card3Orbit.theta);
                card3.position.z = 50 * Math.sin(card3Orbit.theta);
                card3.rotation.y = -card3Orbit.theta + Math.PI/2;
                
                // Pulse effect for particles
                const positions = particlesMesh.geometry.attributes.position.array;
                const scales = particlesMesh.geometry.attributes.scale.array;
                
                for(let i = 0; i < particlesCount; i++) {
                    const i3 = i * 3;
                    // Calculate distance from center
                    const x = positions[i3];
                    const y = positions[i3+1];
                    const z = positions[i3+2];
                    
                    // Subtly move particles
                    positions[i3] += Math.sin(Date.now() * 0.001 + i) * 0.03;
                    positions[i3+1] += Math.cos(Date.now() * 0.001 + i) * 0.03;
                    positions[i3+2] += Math.sin(Date.now() * 0.001 + i) * 0.03;
                    
                    // Pulsing size effect
                    scales[i] = Math.abs(Math.sin(Date.now() * 0.001 + i)) + 0.5;
                }
                
                particlesMesh.geometry.attributes.position.needsUpdate = true;
                particlesMesh.geometry.attributes.scale.needsUpdate = true;
                
                renderer.render(scene, camera);
            }
            
            animate();
            
            // Add resize handler
            window.addEventListener('resize', () => {
                // Maintain sphere aspect ratio
                renderer.setSize(500, 500);
            });
            
            // Add mouse interaction
            let mouseX = 0;
            let mouseY = 0;
            let targetX = 0;
            let targetY = 0;
            
            window.addEventListener('mousemove', (event) => {
                // Calculate normalized mouse position (-1 to 1)
                mouseX = (event.clientX / window.innerWidth) * 2 - 1;
                mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
            });
            
            // Update sphere rotation based on mouse position
            function updateSphereRotation() {
                targetX += (mouseX * 0.1 - targetX) * 0.05;
                targetY += (mouseY * 0.1 - targetY) * 0.05;
                
                sphere.rotation.y = targetX;
                sphere.rotation.x = targetY;
                innerSphere.rotation.y = -targetX * 0.5;
                innerSphere.rotation.x = -targetY * 0.5;
                
                requestAnimationFrame(updateSphereRotation);
            }
            
            updateSphereRotation();

            // Custom cursor
            const cursor = document.querySelector('.cursor-follower');
            
            document.addEventListener('mousemove', e => {
                gsap.to(cursor, {
                    x: e.clientX,
                    y: e.clientY,
                    duration: 0.1
                });
            });
            
            document.addEventListener('mousedown', () => {
                gsap.to(cursor, {
                    scale: 0.7,
                    duration: 0.2
                });
            });
            
            document.addEventListener('mouseup', () => {
                gsap.to(cursor, {
                    scale: 1,
                    duration: 0.2
                });
            });
            
            // Navbar animation on scroll
            window.addEventListener('scroll', () => {
                const header = document.querySelector('.header');
                const navbar = document.querySelector('.navbar');
                const scrollPosition = window.scrollY;
                
                if (scrollPosition > 100) {
                    header.classList.add('header-scrolled');
                    navbar.classList.add('navbar-scrolled');
                } else {
                    header.classList.remove('header-scrolled');
                    navbar.classList.remove('navbar-scrolled');
                }
                
                // Adjust navbar opacity and blur based on scroll position
                const opacity = Math.min(0.15 + (scrollPosition / 1000), 0.5);
                const blur = Math.min(12 + (scrollPosition / 100), 20);
                navbar.style.backgroundColor = `rgba(15, 23, 42, ${opacity})`;
                navbar.style.backdropFilter = `blur(${blur}px)`;
                navbar.style.webkitBackdropFilter = `blur(${blur}px)`;
            });

            // Magnetic elements
            const magneticElements = document.querySelectorAll('.magnetic-element');
            
            magneticElements.forEach(element => {
                const content = element.querySelector('.magnetic-content');
                
                element.addEventListener('mousemove', e => {
                    const rect = element.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    
                    gsap.to(content, {
                        x: x * 0.2,
                        y: y * 0.2,
                        duration: 0.3
                    });
                });
                
                element.addEventListener('mouseleave', () => {
                    gsap.to(content, {
                        x: 0,
                        y: 0,
                        duration: 0.5
                    });
                });
            });

            // Button particle effects
            document.querySelectorAll('.btn-primary').forEach(button => {
                button.addEventListener('mousemove', e => {
                    const rect = button.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    button.style.setProperty('--x', x + 'px');
                    button.style.setProperty('--y', y + 'px');
                });
            });

            // Counter animation
            function animateCounters() {
                document.querySelectorAll('.counter-anim').forEach(counter => {
                    const target = parseFloat(counter.getAttribute('data-count'));
                    const duration = 2000;
                    const step = 30;
                    let current = 0;
                    const increment = target / (duration / step);
                    const timer = setInterval(() => {
                        current += increment;
                        if(current >= target) {
                            clearInterval(timer);
                            counter.textContent = target;
                        } else {
                            counter.textContent = Math.round(current * 100) / 100;
                        }
                    }, step);
                });
            }

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
            gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);
            
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

            gsap.from('.cyberpunk-line', {
                width: 0,
                duration: 1,
                delay: 0.8,
                ease: "power1.out"
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

            // Animate metrics
            gsap.from('.metric', {
                y: 30,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                delay: 1,
                ease: "power2.out",
                onComplete: animateCounters
            });

            // Floating cards animation
            gsap.from('.floating-card', {
                y: 30,
                opacity: 0,
                duration: 1,
                stagger: 0.3,
                delay: 0.5,
                ease: "power2.out"
            });

            // Animate data points
            gsap.from('.data-point', {
                scale: 0,
                opacity: 0,
                duration: 0.5,
                stagger: 0.1,
                delay: 1.2,
                ease: "back.out"
            });

            // Subtle floating animation for cards with random movement
            document.querySelectorAll('.floating-card').forEach(card => {
                gsap.to(card, {
                    y: 'random(-15, -25)',
                    x: 'random(-5, 5)',
                    rotation: 'random(-2, 2)',
                    duration: 'random(2, 4)',
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });
            });

            // Grid lines animation
            gsap.from('.grid-line', {
                opacity: 0,
                duration: 2,
                stagger: 0.1,
                ease: "power1.out"
            });

            // Glowing orbs pulsing
            gsap.to('.orb', {
                opacity: 'random(0.05, 0.15)',
                scale: 'random(0.8, 1.2)',
                duration: 'random(3, 6)',
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                stagger: 0.5
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

            // No neon matrix animations
            
            // After all animations are set up
            ScrollTrigger.addEventListener('refresh', () => scroll.update());
            ScrollTrigger.refresh();
        });
    </script>
</body>

</html>