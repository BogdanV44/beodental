@extends("front.layouts.layout")

@section('tabTitle')
    Home
@endsection

@section("content")
    <!-- Hero Section Start -->
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-2" data-cursor="-opaque">Experience
                                <span>Dental Excellence</span> with a Gentle Touch </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Take the first step towards a healthier
                                smile. Schedule a consultation with our professional team. It's quick, easy, and
                                convenient to book online. We're here to help you achieve your dental goals!</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="{{route('appointment')}}" class="btn-default">make an appointment</a>
                        </div>
                        <!-- Hero Content Body End -->

                        <!-- Google Rating Start -->
                        <div class="google-rating wow fadeInUp" data-wow-delay="0.75s">
                            <ul>
                                <li>Google Rating <span>5.0</span></li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>based on 492 reviews</li>
                            </ul>
                        </div>
                        <!-- Google Rating End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Hero Image Start -->
                    <div class="hero-image">
                        <!-- Hero Img Start -->
                        <div class="hero-img">
                            <figure>
                                <img src="{{asset('images/hero-img.png')}}" alt="beodental-clinic">
                            </figure>
                        </div>
                        <!-- Hero Img End -->

                        <!-- Hero Image Tag Start -->
                        <div class="export-dantist-box">
                            <div class="icon-box">
                                <figure class="image-anime">
                                    <img src="{{asset('images/dantist-doctor-img.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="export-dantist-content">
                                <h3>dr. clara Lee</h3>
                                <p>dentist</p>
                            </div>
                        </div>
                        <!-- Hero Image Tag End -->

                        <!-- Hero Icon List Start -->
                        <div class="hero-icon-list">
                            <div class="hero-icon-box-1">
                                <img src="{{asset('images/icon-hero-theeth-1.svg')}}" alt="">
                            </div>

                            <div class="hero-icon-box-2">
                                <img src="{{asset('images/icon-hero-theeth-2.svg')}}" alt="">
                            </div>

                            <div class="hero-icon-box-3">
                                <img src="{{asset('images/icon-hero-theeth-3.svg')}}" alt="">
                            </div>
                        </div>
                        <!-- Hero Icon List End -->

                        <!-- Icon Start Image Start -->
                        <div class="icon-star-image">
                            <img src="{{asset('images/icon-star.svg')}}" alt="">
                        </div>
                        <!-- Icon Start Image End -->
                    </div>
                    <!-- Hero Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Call To Action Start -->
    <div class="cta-box">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Cta Box Item Start -->
                    <div class="cta-box-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{asset('images/icon-cta-phone.svg')}}" alt="phone-icon">
                        </div>
                        <div class="cta-box-content">
                            <h3>need dental services ?</h3>
                            <p>Call on : +(123) 698-5245</p>
                        </div>
                    </div>
                </div>
                <!-- Cta Box Item End -->

                <!-- Cta Box Item Start -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cta-box-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{asset('images/icon-cta-time.svg')}}" alt="time-icon">
                        </div>
                        <div class="cta-box-content">
                            <h3>opening hours</h3>
                            <p>Mon to Sat 12:00AM to 8:00PM</p>
                        </div>
                    </div>
                </div>
                <!-- Cta Box Item End -->

                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Cta Box Btn Start -->
                    <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.5s">
                        <a href="{{route('appointment')}}" class="btn-default btn-highlighted">make an appointment</a>
                    </div>
                    <!-- Cta Box Btn End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/about-us-img-1.jpg')}}" alt="about-beodental-clinic">
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/about-us-img-2.jpg')}}" alt="about-beodental-clinic-2">
                            </figure>
                        </div>

                        <!-- About Experience Circle Start -->
                        <div class="about-experience">
                            <figure>
                                <img src="{{asset('images/about-experience-circle.png')}}" alt="15-years-experience">
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

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{route('about')}}" class="btn-default">read more about us</a>
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Serviceds Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Hight Quality</span> Services for
                            You.</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability. eco-friendly
                            initiatives.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{asset('images/icon-services-1.svg')}}" alt="endodontics-icon">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>endodontics</h3>
                            <p>Advanced root canal treatments to relieve pain and save natural teeth.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="{{route('endodontics')}}">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>


                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{asset('images/icon-services-3.svg')}}" alt="periodontology-icon">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Periodontology</h3>
                            <p>Specialized care for healthy gums and prevention of gum disease.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="{{route('periodontology')}}">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{asset('images/icon-services-2.svg')}}" alt="implantology-icon">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>Implantology</h3>
                            <p>Permanent, natural-looking dental implants to replace missing teeth</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>


                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{asset('images/icon-services-5.svg')}}" alt="orthodontics-icon">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>orthodontics</h3>
                            <p>Teeth straightening solutions for a confident, perfectly aligned smile.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="{{route('orthodontics')}}">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Service Box Footer Start -->
                    <div class="services-box-footer wow fadeInUp" data-wow-delay="1s">
                        <p>We believe in using the latest technology and techniques to ensure the best outcomes for our
                            patients.</p>
                        <a href="{{route('services')}}" class="btn-default">view all service</a>
                    </div>
                    <!-- Service Box Footer End -->
                </div>
            </div>
        </div>

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

    <!-- Section Why Choose Us -->
    @include('front.partials.why-choose-us');

    <!-- How It Work Start -->
    <div class="how-it-work">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- How It Work Image Start -->
                    <div class="how-it-work-img">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/how-it-work-img.jpg')}}" alt="how-it-works">
                        </figure>
                    </div>
                    <!-- How It Work Image End -->
                </div>

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
            </div>
        </div>
    </div>
    <!-- How It Work End -->

    <!-- Section Our Team -->
    @include('front.partials.our-team')

    <!-- Section Testimonials -->
    @include('front.partials.testimonials')

    <!-- Footer Contact Us Start -->
    <div class="contact-now">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Google Map Start -->
                    <div class="contact-google-map">
                        <!-- Google Map Iframe Start -->
                        <div class="google-map-iframe">
                            <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map Iframe End -->
                    </div>
                    <!-- Google Map End -->
                </div>

                <div class="col-lg-6">

                    <!-- Footer Contact Content Start -->
                    <div class="contact-now-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact now</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Get Free</span> Professional
                                Consultation</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Start -->
                        <div class="contact-now-info">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>24/11 Robert Road , New York , USA</p>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-phone.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>+(123) 698-5245</p>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-mail.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>reception@beodental.com</p>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-list wow fadeInUp" data-wow-delay="0.8s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-clock.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>Mon to Sat 12:00AM to 8:00PM</p>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->
                        </div>

                        <!-- Footer Appointment Button Start  -->
                        <div class="contact-appointment-btn wow fadeInUp" data-wow-delay="1s">
                            <a href="{{route('appointment')}}" class="btn-default">make an appointment</a>
                        </div>
                        <!-- Footer Appointment Button End  -->
                    </div>
                    <!-- Footer Contact Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Contact Us End -->
@endsection
