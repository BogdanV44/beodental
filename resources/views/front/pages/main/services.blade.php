@extends("front.layouts.layout")

@section('tabTitle')
    Services
@endsection

@section('pageTitleFirstWord')
    Our
@endsection
@section('pageTitleSecondWord')
    Services
@endsection
@section('slug')
    services
@endsection

@section("content")
    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row justify-content-center">
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


                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{asset('images/icon-services-6.svg')}}" alt="oral-surgery-icon">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>oral surgery</h3>
                            <p>Safe and precise surgical procedures for complex dental conditions.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="{{route('oral-surgery')}}">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.2s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{asset('images/icon-services-7.svg')}}" alt="pediatric-dentistry-icon">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>pediatric dentistry</h3>
                            <p>Gentle, child-friendly dental care for healthy growing smiles.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="{{route('pediatric-dentistry')}}">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <div class="img">
                                <img src="{{asset('images/icon-services-4.svg')}}" alt="teeth-whitening-icon">
                            </div>
                        </div>
                        <div class="service-body">
                            <h3>teeth whitening</h3>
                            <p>Professional whitening treatments for a brighter, whiter smile.</p>
                        </div>
                        <div class="read-more-btn">
                            <a href="{{route('teeth-whitening')}}">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services End -->

    <!-- Section Why Choose Us  -->
    @include('front.partials.why-choose-us');

    <!-- Section Testimonials  -->
    @include('front.partials.testimonials')

@endsection
