<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>SocialPlug - Free YouTube Subscribers</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-expand-lg bg-darkblue w-100">
            <div class="container-fluid">
                <a class="navbar-brand text-white fw-bold" href="#">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-img img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-center active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-secondary btn-md me-2 text-nowrap">Log In</button>
                        <button class="btn btn-yellow btn-md text-nowrap">Sign Up</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container hero-container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <div class="hero-content-wrapper">
                    <section class="hero">
                        <h1>Free Youtube Subscribers</h1>
                        <p>Get free subscribers to your page today. Up to 50 subscribers at no cost. Delivered instantly.
                        </p>
                    </section>
                    <div class="row icon-list-hero mt-4">
                        <div class="col-md-12">
                            <ul class="features-list">
                                <li><i class="fa-regular fa-clock"></i> Limited Time Offer</li>
                                <li><i class="fa-solid fa-shield"></i> 100% Safe</li>
                                <li><i class="fa-solid fa-bolt-lightning"></i> Fast Delivery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-box">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/mAg8UyDt_sw" title="YouTube Tutorial" allowfullscreen></iframe>
                    </div>
                    <div class="video-caption">
                        <p><i class="fa-solid fa-circle-play"></i> Watch how SocialPlug can grow your channel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Form Section -->
    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <section class="form-section-elegant">
                    <div class="form-inline-wrapper">
                        <div class="form-item">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-item">
                            <input type="url" class="form-control" placeholder="YouTube channel link">
                        </div>
                        <div class="form-item subscribers-item">
                            <input type="number" class="form-control" placeholder="Subscribers (max 50)" min="1" max="50">
                        </div>
                        <div class="form-item button-item">
                            <button class="button-golden-elegant">Get Subscribers <i class="fa-solid fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container section-container steps-section">
        <div class="row">
            <div class="col-md-12 text-center subscribers-sec">
                <h2 class="second-heading">Want to get more free Subscribers?</h2>
                <p>Follow the three simple steps to get started with
                    <span>
                        SocialPlug</span>!
                </p>
            </div>
        </div>
        <div class="row free_sub">
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="step">
                    <i class="fa-regular fa-address-card"></i>
                    <h3>Sign Up</h3>
                    <p>Create a <span style="color: #facc15;">
                            SocialPlug
                        </span>
                        account</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="step">
                    <i class="fa-solid fa-piggy-bank"></i>
                    <h3>Earn Credits</h3>
                    <p>Complete tasks and get <span style="color: #facc15;">credits</span></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mx-auto">
                <div class="step">
                    <i class="fa-regular fa-credit-card"></i>
                    <h3>Get Subscribers</h3>
                    <p>Use credits to get <span style="color: #facc15;">subscribers</span></p>
                </div>
            </div>
        </div>
    </div>
    
    {{-- faqs --}}
    <section class="container section-container faq-section">
        <h2 class="text-center text-white mb-4 second-heading">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item bg-darkblue text-white">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-darkblue text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                What is Flowbite?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                Flowbite is an open-source library of interactive components built on top of Tailwind
                                CSS
                                including buttons, dropdowns, modals, navbars, and more. Check out this guide to learn
                                how
                                to <a href="#" class="text-primary">get started</a> and start developing
                                websites even
                                faster with components on top of Tailwind CSS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-darkblue text-white">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-darkblue text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Is there a Figma file available?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Yes, Flowbite provides a Figma design file to speed up your prototyping process.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-darkblue text-white">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed bg-darkblue text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                What are the differences between Flowbite and Tailwind UI?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Flowbite is free and open-source while Tailwind UI is a commercial product offering
                                pre-built components and templates.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- User Review --}}
    <div class="container section-container review-section">
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <h2 class="second-heading">User Reviews</h2>
                <p class="section-subtitle">Discover what our users have to say about <span>SocialPlug</span> — Over <span>10,000+</span> positive reviews</p>
            </div>
        </div>
        {{-- Customer Review Carousel --}}
        <div class="row mt-4">
            <div class="col-md-12">
                <div id="reviewsCarousel" class="carousel slide reviews-carousel" data-bs-ride="carousel">
                    <div class="carousel-indicators review-indicators">
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Review 1"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" aria-label="Review 2"></button>
                        <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="2" aria-label="Review 3"></button>
                    </div>
                    <div class="carousel-inner bg-darkblue p-4 p-md-5 rounded">
                        <div class="carousel-item active">
                            <div class="review-card">
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <blockquote class="blockquote">
                                    <p class="mb-4 review-text">"SocialPlug helped me grow my YouTube channel from 100 to over 5,000 subscribers in just three months. The engagement is real and the process was incredibly easy."</p>
                                    <footer class="review-author">
                                        <img src="{{ asset('img/user-profile.png') }}" alt="Bonnie Green" class="review-avatar" />
                                        <div class="review-author-info">
                                            <h6>Bonnie Green</h6>
                                            <p>Content Creator</p>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="review-card">
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <blockquote class="blockquote">
                                    <p class="mb-4 review-text">"Excellent platform to gain real exposure and engagement. The subscriber quality is much better than any other service I've tried, and the support team is incredibly helpful."</p>
                                    <footer class="review-author">
                                        <img src="{{ asset('img/user-profile.png') }}" alt="Alex Brown" class="review-avatar" />
                                        <div class="review-author-info">
                                            <h6>Alex Brown</h6>
                                            <p>Digital Marketer</p>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="review-card">
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <blockquote class="blockquote">
                                    <p class="mb-4 review-text">"Simple, effective, and reliable. SocialPlug delivered exactly what they promised, and my channel has seen a significant boost in views and engagement. Highly recommended!"</p>
                                    <footer class="review-author">
                                        <img src="{{ asset('img/user-profile.png') }}" alt="Taylor Smith" class="review-avatar" />
                                        <div class="review-author-info">
                                            <h6>Taylor Smith</h6>
                                            <p>YouTube Influencer</p>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev review-control" type="button" data-bs-target="#reviewsCarousel"
                        data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next review-control" type="button" data-bs-target="#reviewsCarousel"
                        data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container section-container subscribe-section">
        <div class="subscribe-box">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <h2>Join 2,000+ subscribers</h2>
                    <p>Stay in the loop with everything you need to know</p>
                </div>
                <div class="col-lg-5">
                    <div class="subscribe-form">
                        <input type="email" placeholder="Enter your email">
                        <button>Subscribe</button>
                    </div>
                    <p class="privacy-text">we care about your data in our privacy policy</p>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <footer class="footer-section">
        <div class="footer-main bg-darkblue">
            <div class="container section-container">
                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                        <div class="footer-brand">
                            <img src="{{ asset('img/logo.png') }}" alt="SocialPlug Logo" class="logo-img img-fluid">
                            <p class="footer-text">Grow your YouTube channel easily and effectively with our subscriber exchange network.</p>
                        </div>
                        <div class="footer-social">
                            <h6>Connect With Us</h6>
                            <div class="social-icons">
                                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 mb-4 mb-md-0">
                        <div class="footer-links">
                            <h6>Company</h6>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 mb-4 mb-md-0">
                        <div class="footer-links">
                            <h6>Services</h6>
                            <ul>
                                <li><a href="#">YouTube Growth</a></li>
                                <li><a href="#">Social Media Marketing</a></li>
                                <li><a href="#">Channel Management</a></li>
                                <li><a href="#">Content Creation</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 mb-4 mb-md-0">
                        <div class="footer-links">
                            <h6>Resources</h6>
                            <ul>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Guides</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 mb-4 mb-md-0">
                        <div class="footer-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>
                                    <i class="fa-regular fa-envelope"></i>
                                    <a href="mailto:support@socialplug.com">support@socialplug.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:+442012345678">+44 20 1234 5678</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>123 Business Avenue, London, UK</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row py-3 align-items-center">
                    <div class="col-md-6 text-center text-md-start copyright">
                        <p>&copy; 2025 SocialPlug Ltd. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end legal-links">
                        <a href="#">Terms of Service</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-4+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
</body>

</html>
