@extends("front.layouts.single-service-layout")

@section('tabTitle') Pediatric Dentistry @endsection
@section('pageTitleFirstWord')  Pediatric @endsection
@section('pageTitleSecondWord') Dentistry @endsection
@section('slug') Pediatric Dentistry @endsection

@section("service-content")
    <!-- Service Single Content Start -->
    <div class="service-single-content">
        <!-- Service Featured Image Start -->
        <div class="service-featured-image">
            <figure class="reveal image-anime">
                <img src="{{asset('images/pediatric-dentistry-1.jpg')}}" alt="">
            </figure>
        </div>
        <!-- Service Featured Image End -->

        <!-- Service Entry Content Start -->
        <div class="service-entry">
            <h3 class="wow fadeInUp">What Is Pediatric Dentistry?</h3>
            <p class="wow fadeInUp" data-wow-delay="0.2s">Pediatric dentistry is a dental specialty that focuses on the oral health of children from birth through the teenage years. Dentists who specialize in this field are called pediatric dentists.</p>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Unlike general dentistry, pediatric dentistry is designed specifically for:</p>

            <ul class="wow fadeInUp" data-wow-delay="0.6s">
                <li>Growing teeth and jaws</li>
                <li>Child psychology and behavior</li>
                <li>Age-appropriate dental treatments</li>
                <li>Preventive care and education</li>
            </ul>

            <h3 class="wow fadeInUp" data-wow-delay="0.8s">What Does a Pediatric Dentist Do?</h3>

            <p class="wow fadeInUp" data-wow-delay="1s">A pediatric dentist’s role goes far beyond treating teeth. Their responsibilities include prevention, education, early diagnosis, and building trust with young patients.</p>
            <p class="wow fadeInUp" data-wow-delay="1.2s">Responsibilities of a pediatric dentist:</p>

            <ul class="wow fadeInUp" data-wow-delay="1.4s">
                <li>Performing a child’s first dental examination</li>
                <li>Monitoring tooth development</li>
                <li>Treating cavities in baby teeth</li>
                <li>Providing pediatric root canal treatments</li>
                <li>Applying fluoride treatments</li>
                <li>Applying dental sealants (fissure sealants)</li>
                <li>Managing dental injuries</li>
                <li>Educating families on oral hygiene</li>
                <li>Helping children overcome dental fear</li>
            </ul>

            <!-- Service Entry Image Start -->
            <div class="service-entry-image">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <!-- Service Entry Image Start -->
                        <div class="service-entry-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/pediatric-dentistry-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Service Entry Image End -->
                    </div>

                    <div class="col-md-6 col-12">
                        <!-- Service Entry Image Start -->
                        <div class="service-entry-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/pediatric-dentistry-3.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Service Entry Image End -->
                    </div>
                </div>
            </div>
            <!-- Service Entry Image End -->

        </div>
        <!-- Service Entry Content End -->
    </div>
    <!-- Service Single Content End -->


@endsection
