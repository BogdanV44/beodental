@extends("front.layouts.single-service-layout")

@section('tabTitle') Teeth whitening @endsection
@section('pageTitleFirstWord')  Teeth @endsection
@section('pageTitleSecondWord')  Whitening @endsection
@section('slug') Teeth Whitening @endsection

@section("service-content")
    <!-- Service Single Content Start -->
    <div class="service-single-content">
        <!-- Service Featured Image Start -->
        <div class="service-featured-image">
            <figure class="reveal image-anime">
                <img src="{{asset('images/teeth-whitening-1.jpg')}}" alt="">
            </figure>
        </div>
        <!-- Service Featured Image End -->

        <!-- Service Entry Content Start -->
        <div class="service-entry">
            <h3 class="wow fadeInUp">How teeth whitening works?</h3>
            <p class="wow fadeInUp" data-wow-delay="0.2s">While the process can differ depending on which system you choose, teeth whitening generally works by using a bleaching gel and UV lighting to break stains down, causing a brightening effect on the overall appearance of your teeth.</p>
            <p class="wow fadeInUp" data-wow-delay="0.4s">This stain removal and lightening leaves teeth looking <strong>white, shiny, and beautiful </strong>– boosting your confidence and taking years off your assumed age!</p>

            <h3 class="wow fadeInUp" data-wow-delay="0.6s">Your 2-step journey to a whiter smile</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s"><strong>The first appointment</strong> will be your consultation with any of our dentist that you can book through our website.</p>
            <p class="wow fadeInUp" data-wow-delay="1s">If you are deemed suitable for this treatment, impressions of your teeth will be taken for your custom-made trays.</p>
            <p class="wow fadeInUp" data-wow-delay="1.2s"><strong>The second appointment</strong> will be when you receive your teeth whitening treatment from one of our hygienists or dentists.</p>
            <p class="wow fadeInUp" data-wow-delay="1.4s">During the treatment, the whitening gel will be painted on your teeth by the hygienist – you may feel a slightly warm sensation, but for the next 60 minutes all you have to do is relax in our comfy dental chairs.</p>
            <p class="wow fadeInUp" data-wow-delay="1.6s">After the hour is up, you will be given aftercare information to make sure your new smile can last for as long as possible.</p>


            <!-- Service Entry Image Start -->
            <div class="service-entry-image">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <!-- Service Entry Image Start -->
                        <div class="service-entry-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/teeth-whitening-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Service Entry Image End -->
                    </div>

                    <div class="col-md-6 col-12">
                        <!-- Service Entry Image Start -->
                        <div class="service-entry-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/teeth-whitening-3.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Service Entry Image End -->
                    </div>
                </div>
            </div>
            <!-- Service Entry Image End -->

            <p class="wow fadeInUp" data-wow-delay="0.2s">The effectiveness of teeth whitening depends on various factors, including the method used, the cause of discoloration, and the individual's teeth. In-office whitening treatments generally provide the most noticeable results, often lightening teeth by several shades in a single visit. At-home kits can also be very effective, especially when used consistently and as directed.</p>

            <p class="wow fadeInUp" data-wow-delay="0.4s">It's important to note that teeth whitening is not permanent. The longevity of the results depends on your lifestyle and oral hygiene habits. Avoiding foods and drinks that cause staining, not smoking, and maintaining good oral hygiene can help prolong the effects of whitening treatments.</p>

            <h3 class="wow fadeInUp" data-wow-delay="0.6s">Am I suitable for teeth whitening?</h3>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Thanks to the range of treatments available now, most patients will be eligible for teeth whitening – even if they struggle with sensitive teeth. However, due to the active ingredients used in whitening treatments, there are a few notable exceptions. <strong>If patients are any of the below, they’re likely to be denied teeth whitening treatment:</strong></p>
            <ol class="wow fadeInUp" data-wow-delay="1s" style="padding-left: 1rem">
                <li>Under the age of 18 – though this does depend on the individual circumstance</li>
                <li>Who have poor oral health or unhealthy teeth and gums</li>
                <li>Who are currently pregnant, or breastfeeding – as there are some concerns that bleach products can affect the health of your baby</li>
            </ol>

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
                        How long after teeth whitening can I eat?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>Unless advised otherwise, you should be fine to return to your usual diet and eat or drink as normal once your treatment is complete.</p>
                        <p>It is worth noting, however, that in the 48 hours after your initial whitening treatment, we do recommend that you avoid dark-coloured foods and smoking to maximise the results and give you the smile you expect. Similarly, if you want to help your results last even longer, you can ask our reception team for a full list of the foods and drinks to avoid after whitening. </p>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->

            <!-- FAQ Item Start -->
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        How long does it take to get your teeth whitened?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>Usually one appointment of one hour and then up to two weeks of at home treatment.</p>
                        <p>A further appointment may be required but only in exceptional cases.</p>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->

            <!-- FAQ Item Start -->
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        are teeth whitening treatments safe?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>Yes, teeth whitening treatments performed by a dentist or with dentist-approved products are safe and effective.</p>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->

            <!-- FAQ Item Start -->
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        does tooth whitening hurt?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>If you receive professional teeth whitening such as the sort that we offer here at the London Centre for Cosmetic Dentistry, then you should never feel any pain or discomfort during the process. You may feel extra sensitivity, especially if you had sensitive teeth to begin with, however, any sensitivity should be short-lived. If you feel you’re struggling with sensitive teeth, then you can speak with our dentists who can help.</p>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->

            <!-- FAQ Item Start -->
            <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        how can i whiten my teeth at home?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                     data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <p>At-home whitening options include over-the-counter whitening strips, gels, toothpaste, and custom trays provided by your dentist.</p>
                    </div>
                </div>
            </div>
            <!-- FAQ Item End -->
        </div>
        <!-- FAQ Accordion End -->
    </div>
    <!-- Service Accordian End -->
@endsection
