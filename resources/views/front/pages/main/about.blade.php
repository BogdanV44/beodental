@extends("front.layouts.layout")

@section('tabTitle')
    About Us
@endsection

@section('pageTitleFirstWord')
    About
@endsection
@section('pageTitleSecondWord')
    Us
@endsection
@section('slug')
    about us
@endsection

@section("content")
    <!-- Page About Us Start -->
    <div class="about-us page-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/about-us-img-1.jpg')}}" alt="about-us-1">
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/about-us-img-2.jpg')}}" alt="about-us-1">
                            </figure>
                        </div>

                        <!-- About Experience Circle Start -->
                        <div class="about-experience">
                            <figure>
                                <img src="{{asset('images/about-experience-circle.png')}}" alt="experience-circle">
                            </figure>
                        </div>
                        <!-- About Experience Circle End -->
                    </div>
                    <!-- About Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Your Journey</span> to a
                                Healthier Smile Begins Here</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">The goal of our clinic is to provide
                                friendly, caring dentistry and the highest level of general, cosmetic, and specialist
                                dental treatments. With dental practices throughout the world.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>experienced team</li>
                                <li>comprehensive services</li>
                                <li>state-of-the-art technology</li>
                                <li>emergency dental services</li>
                            </ul>
                        </div>
                        <!-- About Us Body End -->
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page About Us End -->

    <!-- Insurance Company Logo Slider Start -->
    <div class="insurance-company-carousel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="insurance-carousel-title">
                        <h3>Trusted by the industry's leading implant providers</h3>
                    </div>
                </div>

                <div class="col-lg-8">
                    <!-- company Carousel Start -->
                    <div class="company-carousel">
                        <div class="swiper companies_logo_slider">
                            <div class="swiper-wrapper align-items-center">
                                <!-- company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/client-logo-1.png')}}" alt="straumannan-logo">
                                    </div>
                                </div>
                                <!-- company Logo End -->

                                <!-- company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/client-logo-2.png')}}" alt="biohorizons-logo">
                                    </div>
                                </div>
                                <!-- company Logo End -->

                                <!-- company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/client-logo-3.png')}}" alt="dentply-sirona-logo">
                                    </div>
                                </div>
                                <!-- company Logo End -->

                                <!-- company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/client-logo-4.png')}}" alt="zimmer-logo">
                                    </div>
                                </div>
                                <!-- company Logo End -->

                                <!-- company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/client-logo-5.png')}}" alt="biocare-logo">
                                    </div>
                                </div>
                                <!-- company Logo End -->

                                <!-- company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/client-logo-6.png')}}" alt="astra-tech-logo">
                                    </div>
                                </div>
                                <!-- company Logo End -->

                                <!-- company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('images/client-logo-7.png')}}" alt="osstem-implant-logo">
                                    </div>
                                </div>
                                <!-- company Logo End -->
                            </div>
                        </div>
                    </div>
                    <!-- company Carousel End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Insurance Company Logo Slider End -->

    <!-- How It Work Start -->
    <div class="how-it-work">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="how-it-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">how it works</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What We Do</span> for Your Teeth
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We provide complete dental care, combining
                                prevention, restoration, and cosmetic treatments to keep your smile healthy, confident,
                                and beautiful at every stage of life.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Accordion Start -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion how-work-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{asset('images/icon-how-it-work-1.svg')}}" alt="book-appointment-icon">
                                </div>
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        book an appointment
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Easily book an appointment online or by phone and get expert care when you
                                            need it.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{asset('images/icon-how-it-work-2.svg')}}" alt="conditions-icon">
                                </div>
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        What conditions can dental therapy treat?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Dental therapy treats cavities, gum disease, and tooth sensitivity.
                                            We restore damaged teeth and replace missing ones with care.
                                            Preventive treatments keep your smile healthy and strong.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{asset('images/icon-how-it-work-3.svg')}}" alt="expert-care-icon">
                                </div>
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        expert care
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                     data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Expert care from highly skilled dental professionals, providing precise,
                                            compassionate, and personalized treatment to ensure your teeth and gums stay
                                            healthy, strong, and beautiful for years to come.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                        <!-- How Work Accordion End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- How It Work Image Start -->
                    <div class="how-it-work-img">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/how-it-work-img.jpg')}}" alt="how-it-works">
                        </figure>
                    </div>
                    <!-- How It Work Image End -->
                </div>

            </div>
        </div>
    </div>
    <!-- How It Work End -->

    <!-- Section Why Choose Us  -->
    @include('front.partials.why-choose-us');

    <!-- Dental Process Start -->
    <div class="dental-process">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">dental implant process</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Guiding</span> you to optimal Teeth
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Dental Process Item Start -->
                    <div class="dental-process-item wow fadeInUp">
                        <!-- Dental Process Image Start -->
                        <div class="dental-process-image">
                            <div class="dental-process-img">
                                <figure class="image-anime">
                                    <img src="{{asset('images/dental-process-img-1.jpg')}}" alt="dental-process-1">
                                </figure>
                            </div>

                            <div class="dental-process-number">
                                <h3>01</h3>
                            </div>
                        </div>
                        <!-- Dental Process Image End -->

                        <!-- Dental Process Content Start -->
                        <div class="dental-process-content">
                            <h3>initial examination</h3>
                            <p>Book initial examination or call us for getting an appointment.</p>
                        </div>
                        <!-- Dental Process Content End -->
                    </div>
                    <!-- Dental Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Dental Process Item Start -->
                    <div class="dental-process-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Dental Process Image Start -->
                        <div class="dental-process-image">
                            <div class="dental-process-img">
                                <figure class="image-anime">
                                    <img src="{{asset('images/dental-process-img-2.jpg')}}" alt="dental-process-2">
                                </figure>
                            </div>

                            <div class="dental-process-number">
                                <h3>02</h3>
                            </div>
                        </div>
                        <!-- Dental Process Image End -->

                        <!-- Dental Process Content Start -->
                        <div class="dental-process-content">
                            <h3>tooth extraction</h3>
                            <p>After examination we will remove all unhealthy teeth. </p>
                        </div>
                        <!-- Dental Process Content End -->
                    </div>
                    <!-- Dental Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Dental Process Item Start -->
                    <div class="dental-process-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Dental Process Image Start -->
                        <div class="dental-process-image">
                            <div class="dental-process-img">
                                <figure class="image-anime">
                                    <img src="{{asset('images/dental-process-img-3.jpg')}}" alt="dental-process-3">
                                </figure>
                            </div>

                            <div class="dental-process-number">
                                <h3>03</h3>
                            </div>
                        </div>
                        <!-- Dental Process Image End -->

                        <!-- Dental Process Content Start -->
                        <div class="dental-process-content">
                            <h3>bone grafting</h3>
                            <p>Doing all necessary preparation for your new smile. </p>
                        </div>
                        <!-- Dental Process Content End -->
                    </div>
                    <!-- Dental Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Dental Process Item Start -->
                    <div class="dental-process-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Dental Process Image Start -->
                        <div class="dental-process-image">
                            <div class="dental-process-img">
                                <figure class="image-anime">
                                    <img src="{{asset('images/dental-process-img-4.jpg')}}" alt="dental-process-4">
                                </figure>
                            </div>

                            <div class="dental-process-number">
                                <h3>04</h3>
                            </div>
                        </div>
                        <!-- Dental Process Image End -->

                        <!-- Dental Process Content Start -->
                        <div class="dental-process-content">
                            <h3>crown placement</h3>
                            <p>Putting custom-made dental crowns beautifying your smile!</p>
                        </div>
                        <!-- Dental Process Content End -->
                    </div>
                    <!-- Dental Process Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Dental Process End -->

    <!-- Our Serviceds Section Start -->
    <div class="our-services">
        <!-- Expertise Experience Section Start -->
        <div class="expertise-experience">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Expertise Experience Content Start -->
                        <div class="expertise-experience-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">expertise experience</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Expert Dentists</span>
                                    Providing Quality Care</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">Our team of highly trained and
                                    experienced dentists is dedicated to delivering comprehensive, precise, and
                                    compassionate dental care. From preventive checkups and restorative treatments to
                                    advanced cosmetic procedures, we focus on keeping your teeth and gums healthy while
                                    enhancing your smile, comfort, and confidence at every visit.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Expertise Experience Body Start -->
                            <div class="expertise-experience-body wow fadeInUp" data-wow-delay="0.5s">
                                <ul>
                                    <li>experienced team</li>
                                    <li>comprehensive services</li>
                                    <li>state-of-the-art technology</li>
                                    <li>emergency dental services</li>
                                </ul>
                            </div>
                            <!-- Expertise Experience Body Body End -->
                        </div>
                        <!-- Expertise Experience Content End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Expertise Experience Image Start -->
                        <div class="expertise-experience-img">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/expertise-experience-img.jpg')}}"
                                     alt="expert-dental-care-beodental">
                            </figure>
                        </div>
                        <!-- Expertise Experience Image End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Expertise Experience Section End -->

        <!-- Intro Clinic Video Section Start -->
        <div class="intro-clinic-video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Visit Clinic Start -->
                        <div class="visit-clinic parallaxie"
                             style="background-image: url(&quot;https://html.awaikenthemes.com/dentaire/images/visit-clinic-bg.jpg&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 43.11px;">
                            <!-- Visit Clinic Content Start -->
                            <div class="visit-clinic-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">visit clinic</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Comprehensive Dental Care For
                                        All Ages</h2>
                                </div>
                                <!-- Section Title End -->

                                <!-- Visit Clinic Btn Start -->
                                <div class="visit-clinic-btn wow fadeInUp" data-wow-delay="0.25s"
                                     data-cursor-text="Play">
                                    <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video play-btn">play
                                        video</a>
                                </div>
                                <!-- Visit Clinic Btn End -->
                            </div>
                            <!-- Visit Clinic Content End -->
                        </div>
                        <!-- Visit Clinic End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro Clinic Video Section End -->

        <!-- Our Counter Section Start -->
        @include('front.partials.our-counter');
        <!-- Our Counter Section End -->

        <!-- Icon Start Image Start -->
        <div class="icon-star-image">
            <img src="{{asset('images/icon-star.svg')}}" alt="star-icon">
        </div>
        <!-- Icon Start Image End -->
    </div>
    <!-- Our Serviceds Section End -->

    <!-- Section Our Team  -->
    @include('front.partials.our-team')

    <!-- Section Testimonials  -->
    @include('front.partials.testimonials')

@endsection
