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
    <title>About Us</title>
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
                        <h1>About Us</h1>
                        <p class="mb-4">Welcome to Geanore, home to the most complete shoe collection from various
                            well-known brands. We are committed to providing an unmatched shoe shopping experience, with
                            a focus on quality, style and innovation. Discover the story behind each footprint and
                            explore the world of foot fashion with Geanore.</p>
                        <p><a href="{{ route('viewShopPage') }}" class="btn btn-secondary me-2">Shop Now</a><a
                                href="#" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="img/hero_about.png" class="img-fluid" width="650px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
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
                        <img src="img/banner.png" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start Team Section -->
    <div class="untree_co-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    <h2 class="section-title">Our Team</h2>
                </div>
            </div>

            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="img/person_1.jpg" class="img-fluid mb-5">
                    <h3 clas><a href="#"><span class="">Samuel</span> Turner</a></h3>
                    <span class="d-block position mb-4">Chief Innovation Officer</span>
                    <p>"Leading the footwear world, Dr. Samuel Turner, our Chief Innovation Officer, aims to bring
                        top-notch quality and innovation to you. We coexist in Geanore, on the edge of
                        Semantics."
                    </p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="img/person_2.jpg" class="img-fluid mb-5">

                    <h3 clas><a href="#"><span class=""> Alexander </span> White</a></h3>
                    <span class="d-block position mb-4">CTO</span>
                    <p>"Half of success lies in shared spirit. As the CTO, Alexander White is committed to
                        creating an extraordinary shoe community in Geanore, on the coast of Semantics."</p>

                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="img/person_3.jpg" class="img-fluid mb-5">
                    <h3 clas><a href="#"><span class="">Olivia</span> Martinez</a></h3>
                    <span class="d-block position mb-4">Chief Innovation Officer.</span>
                    <p>"At the edge of Semantics, in Geanore, Olivia Martinez, our President and Founder,
                        believes
                        in the philosophy that every small step leads us to success. As a founder, he is committed to
                        providing the best."
                    </p>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="img/person_4.jpg" class="img-fluid mb-5">

                    <h3 clas><a href="#"><span class="">Emma </span> Johnson</a></h3>
                    <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                    <p>"As the visionary CEO and founder, Emma Johnson believes in the power of unity and collaboration.
                        In Geanore, on the coast of Semantics, we thrive together as one."</p>


                </div>
                <!-- End Column 4 -->



            </div>
        </div>
    </div>
    <!-- End Team Section -->



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
