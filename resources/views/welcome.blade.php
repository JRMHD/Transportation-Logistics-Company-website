<!DOCTYPE html>
<html lang="en">

<head>
    <title>Small's Transportation &mdash; Exceptional Freight Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Small's Transportation offers unparalleled trucking services, providing safe and timely delivery of freight across New England and points east of the Mississippi River.">
    <meta name="keywords"
        content="Small's Transportation, trucking, freight services, transportation, logistics, New England, safe delivery, on-time delivery">

    <link rel="shortcut icon" type="image/x-icon" href="images/Logo-Pics-_1_.ico">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-3" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-11 col-xl-2">
                        <a href="{{ url('/') }}">
                            <img src="images\small orgn.png" alt="Small's Transportation Logo" class="img-fluid"
                                style="max-width: 300px; height: auto;">
                        </a>
                    </div>


                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                <li class="active"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li><a href="{{ url('about') }}">About Us</a></li>
                                <li><a href="{{ url('services') }}">Services</a></li>
                                <li><a href="{{ url('/') }}">Automotive Services</a>
                                </li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                class="icon-menu h3"></span></a></div>

                </div>

            </div>
    </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/new2.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Exceptional Freight
                        Services
                    </h1>
                    <p class="text-white">Experience the Small's difference with unparalleled service, safe
                        transportation, and
                        on-time delivery across New England and points east of the Mississippi River.</p>
                    <p><a href="{{ url('contact') }}" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center no-gutters align-items-stretch overlap-section">
            <div class="col-md-4">
                <div class="feature-1 pricing h-100 text-center">
                    <div class="icon">
                        <span class="icon-dollar"></span>
                    </div>
                    <h2 class="my-4 heading">Competitive Pricing</h2>
                    <p>We offer the best prices for freight transportation services without compromising on quality and
                        safety.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="free-quote bg-dark h-100">
                    <h2 class="my-4 heading text-center">Get a Free Quote</h2>
                    @if (session('quote-success'))
                        <div
                            style="background-color: #d4edda; color: #155724; padding: 15px; margin-top: 20px; border: 1px solid #c3e6cb; border-radius: 4px;">
                            {{ session('quote-success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('free-quote.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="fq_name">Name</label>
                            <input type="text" class="form-control btn-block" id="fq_name" name="name"
                                placeholder="Enter Name" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="fq_email">Email</label>
                            <input type="email" class="form-control btn-block" id="fq_email" name="email"
                                placeholder="Enter Email" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="fq_phone">Phone</label>
                            <input type="tel" class="form-control btn-block" id="fq_phone" name="phone"
                                placeholder="Enter Phone" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block"
                                value="Get Quote">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-3 pricing h-100 text-center" style="background-color: #04a22b;">
                    <div class="icon">
                        <span class="icon-phone"></span>
                    </div>
                    <h2 class="my-4 heading">24/7 Support</h2>
                    <p>Our dedicated support team is available around the clock to assist you with any inquiries or
                        issues.</p>
                    <p>Contact us at:</p>
                    <p style="color: white; font-weight: bold;">
                        Office: <a href="tel:+13042740555"
                            style="color: white; font-weight: bold;">304-274-0555</a><br>
                        Cell: <a href="tel:+13042407022" style="color: white; font-weight: bold;">304-240-7022</a>
                    </p>
                </div>
            </div>

        </div>
    </div>



    <section class="home-section py-5 bg-light">
        <div class="container">
            <!-- The Small's Difference -->
            <div class="row mb-5">
                <div class="col-lg-6 pr-lg-5 mb-5 mb-lg-0">
                    <h2 class="text-primary mb-4">The Small's Difference</h2>
                    <p class="lead mb-4">We are not your typical transportation company. At Small's, it's the attention
                        to detail
                        and dedication to customer service that sets us apart.</p>
                    <div class="card bg-white shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-primary">What Makes Us Unique</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success mr-2"></i>Meticulous order processing</li>
                                <li><i class="fas fa-check text-success mr-2"></i>Attention to detail in freight
                                    movement</li>
                                <li><i class="fas fa-check text-success mr-2"></i>Constant communication with customers
                                </li>
                                <li><i class="fas fa-check text-success mr-2"></i>On-time, courteous delivery</li>
                                <li><i class="fas fa-check text-success mr-2"></i>Dedicated team from reception to
                                    delivery</li>
                            </ul>
                        </div>
                    </div>
                    <p>From the receptionist to the dispatchers to the driver, everyone at Small's Transportation knows
                        the
                        crucial roles they play in making us a successful, dedicated freight transportation business.
                    </p>
                    <p class="mb-4">Whether you have a TL or LTL, we invite you to experience the big difference the
                        Small's way.
                        Let us be your dedicated transportation services provider.</p>
                    <div class="d-flex flex-wrap">
                        <a href="{{ url('contact') }}" class="btn btn-primary m-2">Get a Quote</a>
                        <a href="{{ url('services') }}" class="btn btn-outline-primary m-2">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images\new3.jpg" alt="Small's Transportation Truck"
                        class="img-fluid rounded shadow mb-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Need Transportation?</h5>
                            <p class="card-text">You have freight? We have the means and know-how to get it there
                                timely and safely.
                                Need quality service? We are here at your fingertips.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Employment Opportunities -->
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="text-primary mb-4">Employment Opportunities</h2>
                    <p class="lead mb-4">Join our team of dedicated professionals and experience a rewarding career in
                        transportation.</p>
                </div>
                <div class="col-lg-6 pr-lg-5">
                    <h5 class="mb-3">Our Commitment to Drivers</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-shield-alt text-primary mr-2"></i>Focus on safety and continuing education
                        </li>
                        <li><i class="fas fa-dollar-sign text-primary mr-2"></i>Competitive compensation tailored to
                            your needs</li>
                        <li><i class="fas fa-road text-primary mr-2"></i>Flexible url
                            s and schedules</li>
                        <li><i class="fas fa-hands-helping text-primary mr-2"></i>Supportive team to help overcome
                            challenges</li>
                    </ul>
                    <p>Safety begins with hiring the best employees; people who not only have the best driving record
                        but also
                        share our concern for their safety and the safety of others. Once we've hired the best drivers
                        and matched
                        you with the best lanes suited for you, we continue to communicate about the benefits of safe
                        performance.
                    </p>
                    <p>Continuing education is the key to our ongoing improvement in safe and compliant performance. We
                        recognize
                        that we all play an important role in safety, and we need to work together to be effective.</p>
                    <p>At Small's Transportation, we understand that compensation needs vary widely. When we hire a new
                        driver,
                        our first task is to find out what those specific needs are, and then address those needs as
                        best as
                        possible. As drivers' circumstances change, our flexibility allows us to respond and provide the
                        ultimate
                        situation for every driver.</p>
                    <p>We strive for open dialogue during the hiring process and throughout our partnership. Our goal is
                        to make
                        sure that career choices match closely with personal and family needs. We understand that life
                        on the road
                        can be challenging because of uncontrollable events such as delays, layovers, and breakdowns. We
                        are
                        committed to supporting our drivers and helping them overcome obstacles so they can get where
                        they're going,
                        safely and efficiently.</p>
                    <p class="font-weight-bold">Drivers are paid weekly. Supplemental pay includes quarterly incentives
                        and a
                        Christmas bonus. (Ask for details)</p>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Company Driver Requirements</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-user mr-2 text-primary"></i>At least 24
                                    years of age</li>
                                <li class="list-group-item"><i class="fas fa-clock mr-2 text-primary"></i>At least 3
                                    years recent
                                    verifiable experience using the same or similar equipment</li>
                                <li class="list-group-item"><i class="fas fa-id-card mr-2 text-primary"></i>Valid CDL
                                    from state of
                                    residence</li>
                                <li class="list-group-item"><i class="fas fa-car-crash mr-2 text-primary"></i>Pass a
                                    road test
                                    administered by Small's Transportation, LLC</li>
                                <li class="list-group-item"><i class="fas fa-truck mr-2 text-primary"></i>Able to
                                    physically operate a
                                    tractor-trailer including entering/exiting tractor, and operating a pallet jack,
                                    when necessary</li>
                                <li class="list-group-item"><i class="fas fa-file-medical mr-2 text-primary"></i>Must
                                    be able to pass a
                                    DOT exam</li>
                                <li class="list-group-item"><i class="fas fa-book mr-2 text-primary"></i>Able to read
                                    and write
                                    sufficiently to maintain records, and understand bills of lading, company notices
                                    and the driver's
                                    manual</li>
                                <li class="list-group-item"><i class="fas fa-history mr-2 text-primary"></i>Possess a
                                    suitable work
                                    history. This includes the ability to serve customers, work well with others and to
                                    show commitment to
                                    the company safety policies, and operations</li>
                                <li class="list-group-item"><i class="fas fa-road mr-2 text-primary"></i>Possess a
                                    suitable driving
                                    history. This includes no more than 2 incidents, accidents, or moving violations on
                                    driving record in
                                    the past 36 months</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card bg-light mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Disqualifying Factors</h5>
                            <p class="card-text">The following items eliminate consideration for original employment or
                                continued
                                employment:</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-times text-danger mr-2"></i>Improper or erratic lane changes</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Following the vehicle ahead too
                                    closely</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>DWI-DUI (last 5 years)</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Speeding conviction of 15 mph or more
                                </li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Reckless or careless driving</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Driving with a suspended or revoked
                                    license</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Fleeing from an officer of the law
                                </li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Racing on public highway</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Failure to stop for a school bus</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Second at-fault accident</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Failure to have vehicle under control
                                </li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Driving on wrong side of road</li>
                                <li><i class="fas fa-times text-danger mr-2"></i>Hit and run or leaving the scene of an
                                    accident</li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ url('contact') }}" class="btn btn-primary btn-lg btn-block">Apply Now</a>
                </div>
            </div>
        </div>
        <!-- Hiring Owner Operators -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-primary mb-4">Hiring Owner Operators</h2>
                <p class="lead mb-4">Join our team and experience the benefits of working with a company that values
                    your expertise and dedication.</p>
            </div>
            <div class="col-lg-6 pr-lg-5">
                <h5 class="mb-3">Why Work With Us?</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success mr-2"></i>No age restriction on your equipment</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Weekly settlements</li>
                    <li><i class="fas fa-check text-success mr-2"></i>Fuel card provided</li>
                </ul>
                <p>At Small's Transportation, we understand that owner operators are the backbone of the transportation
                    industry. We value your independence and provide the support you need to succeed.</p>
                <p>Whether you're an experienced operator or new to the industry, we offer opportunities that fit your
                    needs and help you grow your business. Our team is committed to ensuring you have the resources and
                    support necessary for a successful partnership.</p>
            </div>
            <div class="col-lg-6">
                <img src="images\new5.jpg" alt="Owner Operator" class="img-fluid rounded shadow mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Interested in Joining?</h5>
                        <p class="card-text">If you're ready to join a company that values your expertise and provides
                            the support you need, we want to hear from you.</p>
                        <a href="{{ url('contact') }}" class="btn btn-light">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="mb-0 text-primary">What We Offer</h2>
                    <p class="color-black-opacity-5">Discover our comprehensive freight transportation solutions.</p>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-truck"></span></div>
                        <div>
                            <h3>Dry Van Transportation</h3>
                            <p>Safe and reliable dry van transportation services across New England and beyond.</p>
                            <p class="mb-0"><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flatbed-truck"></span></div>
                        <div>
                            <h3>Flatbed Shipping</h3>
                            <p>Specialized flatbed shipping services tailored to meet diverse freight transportation
                                needs.</p>
                            <p class="mb-0"><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-container"></span></div>
                        <div>
                            <h3>Curtain Side Transport</h3>
                            <p>Efficient curtain side transport solutions ensuring secure and timely delivery.</p>
                            <p class="mb-0"><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section block-13">
        <div class="owl-carousel nonloop-block-13">
            <div>
                <a href="#" class="unit-1 text-center">
                    <img src="images\new4.jpg" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Dry Van Transportation</h3>
                        <p class="px-5">Safe and reliable transportation of goods using dry van trailers across New
                            England and
                            points east of the Mississippi River.</p>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="unit-1 text-center">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Flatbed Shipping</h3>
                        <p class="px-5">Specialized shipping services using flatbed trailers for various cargo types,
                            ensuring
                            secure and efficient delivery.</p>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="unit-1 text-center">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Curtain Side Transport</h3>
                        <p class="px-5">Efficient transport solutions with curtain side trailers, providing secure
                            handling and
                            timely delivery of freight.</p>
                    </div>
                </a>
            </div>

            <div>
                <a href="#" class="unit-1 text-center">
                    <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Dedicated Fleet Management</h3>
                        <p class="px-5">Customized fleet management services tailored to meet specific customer
                            needs, enhancing
                            supply chain efficiency.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>





    <div class="site-section border-top">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="mb-5 text-black">Try Our Services</h2>
                    <p class="mb-0"><a href="{{ url('services') }}"
                            class="btn btn-primary py-3 px-5 text-white">Get
                            Started</a></p>
                </div>
            </div>
        </div>
    </div>

    @include('footer')


    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
