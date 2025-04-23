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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-darkblue px-4">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-img img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                    <button class="btn btn-secondary btn-sm ms-2">Log In</button>
                    <button class="btn btn-yellow btn-sm ms-2">Sign Up</button>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <section class="hero">
                    <h1>Free Youtube Subscribers</h1>
                    <p>Get free subscribers to your page today. Up to 50 subscribers at no cost. Delivered instantly.
                    </p>
                </section>
                <div class="row icon-list-hero">
                    <div class="col-md-12">
                        <ul>
                            <li><i class="fa-solid fa-clock"></i> Limited Time Offer</li>
                            <li><i class="fa-solid fa-shield"></i> 100% safe</li>
                            <li><i class="fa-solid fa-bolt"></i>Fast Delivery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <section class="form-section">
                    <input type="email" placeholder="Enter your Email here..">
                    <input type="url" placeholder="Enter your link here..">
                    <input type="number" placeholder="Subscribers Goal">
                    <button class="button-golden">Get Free Subscribers</button>
                </section>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Want to get more free Subscribers?</h2>
                <p>Follow the three simple steps to get started with <span style="color: #facc15;">
                        SocialPlug
                    </span></p>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <section class="steps">
            <div class="row">
                <div class="col-md-4">
                    <div class="step">
                        <i class="fa-solid fa-address-card"></i>
                        <h3>Sign Up</h3>
                        <p>Create a <span style="color: #facc15;">
                                SocialPlug
                            </span>
                            account</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="step">
                        <i class="fa-solid fa-piggy-bank"></i>
                        <h3>Earn Credits</h3>
                        <p>Complete tasks and get <span style="color: #facc15;">credits</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step">
                        <i class="fa-solid fa-credit-card"></i>
                        <h3>Get Subscribers</h3>
                        <p>Use credits to get <span style="color: #facc15;">subscribers</span></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- faqs --}}
    <section class="container my-5 faqsection">
        <h2 class="text-center text-white mb-4">Frequently Asked Questions</h2>
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
                                to <a href="#" class="text-primary">get started</a> and start developing websites even
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
    <div class="container my-2 user-review">
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <h2>User's Reviews</h2>
                <p>Discover What our Users have to say about <span style="color: #facc15;">
                        SocialPlug 10,000+
                    </span> Positive reviews </p>
            </div>
        </div>
    </div>
    {{-- Customer Review Carcousel --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner bg-darkblue p-5 rounded">
                        <div class="carousel-item active">
                            <blockquote class="blockquote text-center">
                                <p class="mb-4">"Flowbite is just awesome...5"</p>
                                <footer class="blockquote-footer text-white">Bonnie Green, | <cite title="Company">CTO
                                        at
                                        Flowbite</cite></footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="blockquote text-center">
                                <p class="mb-4">"Excellent platform to gain exposure and real engagement."</p>
                                <footer class="blockquote-footer text-white">Alex Brown, | <cite title="Company">Content
                                        Creator</cite></footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="blockquote text-center">
                                <p class="mb-4">"Simple and effective. Highly recommended!"</p>
                                <footer class="blockquote-footer text-white">Taylor Smith, | <cite
                                        title="Company">Marketing Specialist</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="container subscribe-box">
        <div class="row">
            <div class="col-md-7">
                <h2>Join 2,000 Subscriber</h2>
                <p>Stay in the loop with everything you need to know</p>
            </div>
            <div class="col-md-5">
                <div>
                    <input type="email" placeholder="Enter your email">
                    <button>Subscribe</button>
                </div>
                <p>we care about your data in our privacy policy</p>
            </div>
        </div>
    </div>

    {{-- footer --}}

    <footer class="bg-darkblue text-light py-4 footer">
        <div class="container">
            <div class="row">
                <div class="mobile-margin col-md-3">
                    <div><strong class="logo">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo-img img-fluid">
                        </strong></div>
                    <p>Grow your YouTube channel easily and effectively with our subscriber exchange network.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
                <div class="mobile-margin col-md-2">
                    <h6>About Us</h6>
                    <ul>
                        <li><a href="#">Company History</a></li>
                        <li><a href="#">Meet the Team</a></li>
                        <li><a href="#">Employee Handbook</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="mobile-margin col-md-2">
                    <h6>Our Services</h6>
                    <ul>

                        <li> <a href="#">YouTube Growth</a></li>
                        <li> <a href="#">Social Media Marketing</a></li>
                        <li> <a href="#">Channel Management</a></li>
                        <li> <a href="#">Content Creation</a></li>
                </div>
                <div class="mobile-margin col-md-2">
                    <h6>Helpful Links</h6>
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="mobile-margin col-md-3">
                    <h6>Contact Us</h6>
                    <ul>
                        <li>
                            <p>Email: support@socialplug.com</p>
                        </li>
                        <li>
                            <p>Address: 213 Lane, London, UK</p>
                        </li>
                    </ul>
                </div>
            </div>


        </div>

    </footer>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 text-center text-white">
                &copy; 2025 SocialPlug. All rights reserved.
            </div>
            <div class="col-md-6 text-center footer-links">
                All Rights Reserved |
                <a href="#" class="text-decoration-underline">Terms & Conditions</a> |
                <a href="#" class="text-decoration-underline">Privacy Policy</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-4+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
</body>

</html>