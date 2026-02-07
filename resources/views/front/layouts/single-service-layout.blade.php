@extends("front.layouts.layout")

@section("content")
    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Service Categories List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>our services</h3>
                            <ul>
                                <li><a href="{{route('endodontics')}}">Endodontics</a></li>
                                <li><a href="{{route('periodontology')}}">Periodontology</a></li>
                                <li><a href="{{route('implantology')}}">Implantology</a></li>
                                <li><a href="{{route('orthodontics')}}">Orthodontics</a></li>
                                <li><a href="{{route('oral-surgery')}}">Oral surgery</a></li>
                                <li><a href="{{route('pediatric-dentistry')}}">Pediatric dentistry</a></li>
                                <li><a href="{{route('teeth-whitening')}}">Teeth whitening</a></li>
                            </ul>
                        </div>
                        <!-- Service Categories List End -->

                        <!-- Sidebar Cta Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Cta Content Start -->
                            <div class="icon-box">
                                <img src="{{asset('images/icon-cta.svg')}}" alt="">
                            </div>

                            <div class="cta-content">
                                <h3>Need help ?</h3>
                                <p>Schedule your initial consultation today and start your journey towards a pain-free, healthier smile. Book an appointment now!</p>
                            </div>
                            <!-- Cta Content End -->

                            <!-- Cta Appointment Button Start -->
                            <div class="cta-contact-btn">
                                <a href="{{route('appointment')}}" class="btn-default">Book an appointment</a>
                            </div>
                            <!-- Cta Appointment Button End -->
                        </div>
                        <!-- Sidebar Cta Box End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>

                <div class="col-lg-8">
                    @yield('service-content')
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->
@endsection
