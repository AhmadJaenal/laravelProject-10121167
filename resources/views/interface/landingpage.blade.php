<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Geanore</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    @include('partials.navbar')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        @auth
                            <h1>{{ auth()->user()->name }}</h1>
                        @else
                            <h1>Tamu</h1>
                        @endauth
                        <h1>Elevate Your Game<span clsas="d-block"> Elevate Your Life.</span></h1>
                        <p class="mb-4">Find a complete collection of high-quality exercise equipment at Gearo
                            We provide the best equipment to help you achieve your fitness goals. From cardio equipment
                            to
                            training accessories, we support your journey to a healthy and active life.</p>
                        <p>
                            <a href="{{ route('viewShopPage') }}" class="btn btn-secondary me-2">Shop Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="img/hero12.png" class="img-fluid", width="680px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">
                        Crafted with premium materials for peak performance.</h2>
                    <p class="mb-4">Forged from top-class materials, our products embody uncompromising quality and
                        durability.</p>
                    <p><a href="{{ route('viewShopPage') }}" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5d5b15c1-c94e-42b8-b8cc-b3e4b5ab7ea2/air-max-90-ltr-older-shoes-9xnt2B.png"
                            class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nike Air Max 90 LTR</h3>
                        <strong class="product-price">$85.00</strong>

                        <span class="icon-cross">
                            <img src="img/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/04d297c1-ed00-4638-96a8-da4765bc429e/air-max-90-ltr-se-older-shoes-PSfn6G.png"
                            class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nike Air Zoom Pegasus 38</h3>
                        <strong class="product-price">$87.00</strong>

                        <span class="icon-cross">
                            <img src="img/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/809ce125-ae7f-487f-96bd-d863912c5dd0/lebron-xx-se-older-basketball-shoes-r46cM9.png"
                            class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nike Ultrafly</h3>
                        <strong class="product-price">$150.00</strong>

                        <span class="icon-cross">
                            <img src="img/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>Geanore provides various shoes from various well-known brands and maintains the quality</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="img/truck.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Fast & Free Shipping</h3>
                                <p>With an efficient logistics system, we guarantee fast delivery to ensure products
                                    arrive on time at your door.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="img/bag.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Easy to Shop</h3>
                                <p>Our booking experience is designed for practicality. With a user-friendly interface,
                                    you can easily find, select and order your favorite products without any hassle.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="img/support.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>24/7 Support</h3>
                                <p>Our customer service is ready to help you whenever you need it. With a 24-hour
                                    support team, your questions or problems will be resolved immediately.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="img/return.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Hassle Free Returns</h3>
                                <p>If the product doesn't meet your expectations, we provide an easy and
                                    customer-friendly returns policy. Your satisfaction is our top priority.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="https://images.unsplash.com/photo-1535709718101-fc0f03ce7ffa?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img
                                src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Untree.co"></div>
                        <div class="grid grid-2"><img
                                src="https://images.unsplash.com/photo-1584590069631-1c180f90a54c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Untree.co"></div>
                        <div class="grid grid-3"><img
                                src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Untree.co"></div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Elevating Your Sporty Style with Every Step</h2>
                    <p>Experience the epitome of athletic footwear design. Our commitment to quality ensures your every
                        move is supported with comfort and style. Step into a world of sporty footwear where each pair
                        is crafted to enhance your performance and make a statement on the field or track.</p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Elevate your look with athletic footwear that seamlessly blends fashion and function.
                        </li>
                        <li>Experience comfort and support in every step with our commitment to top-notch quality.</li>
                        <li>Make a statement while excelling on the field or track in our sporty footwear.</li>
                        <li>Crafted for both comfort and style, each pair enhances your athletic performance
                            effortlessly.</li>
                    </ul>
                    <p><a herf="#" class="btn">Explore</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->



    <!-- Start Testimonial Slider -->
    @include('partials.testimode')
    <!-- End Testimonial Slider -->

    <!-- Footer -->
    @include('footer.footer1')
    <!-- End of Footer -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
