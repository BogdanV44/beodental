@extends("front.layouts.single-service-layout")

@section('tabTitle') Oral Surgery @endsection
@section('pageTitleFirstWord')  Oral @endsection
@section('pageTitleSecondWord') Surgery @endsection
@section('slug') Oral Surgery @endsection

@section("service-content")
    <!-- Service Single Content Start -->
    <div class="service-single-content">
        <!-- Service Featured Image Start -->
        <div class="service-featured-image">
            <figure class="reveal image-anime">
                <img src="{{asset('images/oral-surgery-1.jpg')}}" alt="">
            </figure>
        </div>
        <!-- Service Featured Image End -->

        <!-- Service Entry Content Start -->
        <div class="service-entry">
            <h3 class="wow fadeInUp">What is oral surgery?</h3>
            <p class="wow fadeInUp" data-wow-delay="0.2s">Oral surgery refers to any mouth operation. It includes procedures done on your teeth, gums, tongue or any other area inside your oral cavity.</p>
            <p class="wow fadeInUp" data-wow-delay="0.4s">There are several types of oral operations done each year. Some of the most common include:</p>
            <ul class="wow fadeInUp" data-wow-delay="0.6s">
                <li><strong>Wisdom tooth removal</strong> to treat or prevent pain and infection.</li>
                <li><strong>Tooth extractions</strong> to remove decayed or damaged teeth.</li>
                <li><strong>Dental bone grafts</strong> to increase the volume and density of your jawbone.</li>
                <li><strong>Dental implants</strong> to replace missing teeth.</li>
                <li><strong>Gum grafts</strong> to treat thinning or receding gums.</li>
            </ul>
            <h3 class="wow fadeInUp" data-wow-delay="0.6s">What are the benefits of oral surgery?</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Oral surgery can correct conditions that nonsurgical treatments can’t.</p>

            <ul class="wow fadeInUp" data-wow-delay="1s">
                <li>Better health.</li>
                <li>Enhanced aesthetics.</li>
                <li>Improved function.</li>
                <li>Pain relief.</li>
            </ul>

            <!-- Service Entry Image Start -->
            <div class="service-entry-image">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <!-- Service Entry Image Start -->
                        <div class="service-entry-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/oral-surgery-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Service Entry Image End -->
                    </div>

                    <div class="col-md-6 col-12">
                        <!-- Service Entry Image Start -->
                        <div class="service-entry-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/oral-surgery-3.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Service Entry Image End -->
                    </div>
                </div>
            </div>

            <p class="wow fadeInUp" data-wow-delay="0.2s"> In combination with routine dental care, oral surgery can treat conditions that cause infection, like tooth decay and gum disease. Better oral health means improved overall health.</p>

            <p class="wow fadeInUp" data-wow-delay="0.4s">The appearance of your teeth can have a big impact on anxiety and how comfortable you feel in social situations. Oral surgery can help address these concerns.</p>

            <p class="wow fadeInUp" data-wow-delay="0.6s">Oral surgery can help replace damaged or missing teeth, reducing issues with eating and speaking.</p>

            <p class="wow fadeInUp" data-wow-delay="0.8s">Oral surgery can correct painful issues like broken teeth, extensive decay and sore, bleeding gums.</p>

            <p class="wow fadeInUp" data-wow-delay="1s">Preventive treatments like wisdom teeth removal can help you avoid potential problems later.</p>

            <!-- Service Entry Image End -->
        </div>
        <!-- Service Entry Content End -->
    </div>
    <!-- Service Single Content End -->

    <!-- Service Accordian Start -->
    <div class="service-faqs">
        <div class="faqs-section-title">
            <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently Asked Questions</h2>
        </div>

        <!-- FAQ Accordion Start -->
        <div class="faq-accordion" id="accordion">
            <!-- FAQ Item Start -->
            <div class="accordion-item wow fadeInUp">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        What is the recovery time?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>Healing times vary, but most people feel like themselves again in about two to three days. The more extensive your oral surgery, the more time it will take to recover. You shouldn’t have severe pain after oral surgery. But you’ll have some degree of discomfort. Your provider will give you medications to keep you comfortable.</p>
                        <p>After oral surgery, your mouth will continue to heal even after you feel better. Soft tissues usually heal in about one month. Bone could take up to six months to heal.</p>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->

            <!-- FAQ Item Start -->
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        When should I call my dental doctor?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>After oral surgery, call your healthcare provider if you develop these signs of infection:</p>
                        <ul>
                            <li>Severe pain that doesn’t go away with medication.</li>
                            <li>Fever of 38.9 degrees Celsius or higher.</li>
                            <li>Pus coming from your incisions.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->

            <!-- FAQ Item Start -->
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        What are the risks or complications of oral surgery?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>Like any procedure, oral surgery comes with risks. Possible complications include:</p>
                        <ul>
                            <li>Infection.</li>
                            <li>Injury to neighboring teeth.</li>
                            <li>Dry socket.</li>
                            <li>Numbness.</li>
                            <li>Tooth fragments left behind.</li>
                            <li>Sinus perforation (a hole in your sinus membrane).</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->

            <!-- FAQ Item Start -->
            <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        What happens after oral surgery?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>Your healthcare provider will monitor you while the sedatives and/or anesthesia wear off. They’ll also give you post-op instructions explaining how to care for yourself and a list of soft foods to eat after oral surgery. Following these guidelines will reduce your risk of bleeding, infection and other complications.</p>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->
        </div>
        <!-- FAQ Accordion End -->
    </div>
    <!-- Service Accordian End -->
@endsection
