<div class="our-team">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our team</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Friendly</span> Dentists Team
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability. eco-friendly
                        initiatives.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @foreach($dentists as $dentist)
                <x-single-team-member
                    :id="$dentist->dentist_id"
                    :image-name="$dentist->image_route"
                    :dentist-name="$dentist->full_name"
                    :title="$dentist->title"
                />
            @endforeach
        </div>
    </div>
    <!-- Icon Start Image Start -->
    <div class="icon-star-image">
        <img src="images/icon-star.svg" alt="">
    </div>
    <!-- Icon Start Image End -->
</div>
