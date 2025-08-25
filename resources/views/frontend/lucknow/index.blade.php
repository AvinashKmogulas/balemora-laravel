@extends('frontend.lucknow.common.mainlayout')
@section('content')
    <main>
        <section class="main-home-banner">
            <video autoplay loop muted class="banner-video">
                <source src="{{ URL::asset('assets/videos/banner-video.MP4') }}" type="video/mp4">
            </video>
            <div class="main-home-banner-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h2 class="text-center">Welcome to Balemora NH27 Lucknow </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding white-flower-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center home-overview">
                        <h3 class="main-heading pb-0" data-aos="fade-up" data-aos-duration="1200">Where Ancient Wisdom</h3>
                        <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">Meets Modern Harmony</h3>
                        <p class="mb-3" data-aos="fade-up" data-aos-duration="1200">A wellness sanctuary, Balemora NH27
                            Lucknow invites you to pause from life’s pace and step into a world of balance and renewal.
                            Here, modern design meets ancient Ayurveda, with personalized detox therapies, yoga practices,
                            and indulgent spa rituals. Set amidst lush gardens, its European-style natural wooden cottages
                            blend rustic charm with refined comfort, offering travelers, seekers, and city dwellers a serene
                            haven for rest, rejuvenation, and mindful living. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding gold-wellnes-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-heading" data-aos="fade-up" data-aos-duration="1200">Balemora Wellness</h2>
                        <p data-aos="fade-up" data-aos-duration="1200">Balemora Wellness brings together Ayurvedic
                            treatments, Kerala therapies, yoga, mindful nutrition and nature meditation, each guiding you on
                            your unique path to harmony. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="wellness_slider owl-carousel">
            <div class="ws_item">
                <div class="ws_img"><img src="{{ URL::asset('assets/images/wellness_img1.jpg') }}" alt=""> </div>
                <div class="ws_text">
                    <h3>Ayurvedic Treatments </h3>
                    <p>Ancient hands meet modern needs, guiding you back to balance with therapies that heal from skin to
                        soul. Every touch becomes a conversation between nature and you.</p>
                    <div class="mt-3">
                        <div class="cs-btn"><a class="btn" href="balemora-wellness.php">Explore </a> </div>
                    </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="{{ URL::asset('assets/images/wellness_img2.jpg') }}" alt=""> </div>
                <div class="ws_text">
                    <h3>Ayurvedic Nutrition </h3>
                    <p>Food becomes medicine as you savor meals crafted to nourish, cleanse, and restore. Each bite carries
                        the wisdom of herbs, spices, and mindful intention. </p>
                    <div class="mt-3">
                        <div class="cs-btn"><a class="btn" href="balemora-wellness.php">Explore </a> </div>
                    </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="{{ URL::asset('assets/images/wellness_img3.jpg') }}" alt=""> </div>
                <div class="ws_text">
                    <h3>Yoga </h3>
                    <p>Awaken your body’s quiet intelligence through mindful movement and breath. It is a practice where
                        strength softens and stillness becomes your truest power.</p>
                    <div class="mt-3">
                        <div class="cs-btn"><a class="btn" href="balemora-wellness.php">Explore </a> </div>
                    </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="{{ URL::asset('assets/images/wellness_img4.jpg') }}" alt=""> </div>
                <div class="ws_text">
                    <h3>Detox </h3>
                    <p>Shed what no longer serves in body, mind, and spirit. This is a cleansing designed to purify and
                        renew your sense of lightness and vitality.</p>
                    <div class="mt-3">
                        <div class="cs-btn"><a class="btn" href="balemora-wellness.php">Explore </a> </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding home-room-section color-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2 mb-5">
                        <h2 class="main-heading text-center pb-3" data-aos="fade-up" data-aos-duration="1200">Your
                            Luxuriously Authentic Stay</h2>
                        <p class="room-home-description">Discover spaces designed for your well-being, where eco-conscious
                            accommodations blend elegance with sustainability in natural wooden cottages, each thoughtfully
                            crafted to offer comfort while embracing nature’s beauty. </p>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme room-slider">

                            <div class="room-item">
                                <div class="img-container"><img
                                        src="{{ URL::asset('assets/images/rooms/family-cottage1.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <div class="active-show-content">
                                        <div class="room-details">
                                            <div class="details">
                                                <div class="icon"> <img src="{{ URL::asset('assets/icons/bed.png') }}"
                                                        alt=""></div>
                                                <div class="text box_one">Living Room + Double Bedroom + Double Bed on Deck
                                                </div>
                                            </div>
                                            {{-- <!-- <div class="details">
                                                <div class="icon"> <img src="{{ URL::asset('assets/icons/size-new.png') }}" alt=""></div>
                                                <div class="text">All Meals Inclusive</div>
                                            </div> --> --}}
                                            <div class="details">
                                                <div class="icon"> <img
                                                        src="{{ URL::asset('assets/icons/size-new.png') }}" alt="">
                                                </div>
                                                <div class="text">900 SQFT</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img
                                                        src="{{ URL::asset('assets/icons/window-frame.png') }}"
                                                        alt=""></div>
                                                <div class="text">Golf and Pond View </div>
                                            </div>
                                        </div>
                                        <h3>Heritage Family Cottage </h3>
                                        <div class="mt-3">
                                            <div class="cs-btn"><a class="btn"
                                                    href="balemora-lucknow-living.php">Explore </a> </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="room-item">
                                <div class="img-container"><img
                                        src="{{ URL::asset('assets/images/rooms/boat-house1.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <div class="active-show-content">
                                        <div class="room-details">
                                            <div class="details">
                                                <div class="icon"> <img src="{{ URL::asset('assets/icons/bed.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="text">2 Double Bedrooms</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img
                                                        src="{{ URL::asset('assets/icons/size-new.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="text">900 SQFT</div>
                                            </div>
                                            <div class="details">
                                                <div class="icon"> <img src="{{ URL::asset('assets/icons/wifi.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="text">Dedicated Wi-fi Access Point</div>
                                            </div>
                                        </div>
                                        <h3>Heritage Vintage Boat House </h3>
                                        <div class="mt-3">
                                            <div class="cs-btn"><a class="btn"
                                                    href="balemora-lucknow-living.php">Explore </a> </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding wellness-cuisine">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="wc_img1" data-aos="fade-up" data-aos-duration="1200">
                            <img src="{{ URL::asset('assets/images/dine_img1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="wc_img2" data-aos="zoom-in" data-aos-duration="1200">
                            <img src="{{ URL::asset('assets/images/dine_img2.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1200">
                        <h5>WELLNESS CUISINE</h5>
                        <h3 class="main-heading">Authentic Culinary Experiences </h3>
                        <p>Nutrition plays a pivotal role in the retreat's philosophy of wellness. Guests are treated to an
                            array of gourmet meals that are both nutritious and delicious. The menu is crafted by
                            experienced chefs in collaboration with nutritionists and Ayurveda experts, ensuring that every
                            dish is tailored to individual dietary needs while maintaining an emphasis on locally sourced,
                            organic ingredients.</p>
                        <p>Signature offerings include farm-to-table meals, Ayurvedic detox teas, gluten-free and vegan
                            options, and custom-designed diets for specific health goals. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">Celebrate Special Moments
                        </h3>
                    </div>
                    <div class="col-md-12 ">
                        <div class="owl-carousel owl-theme wedding-slider">
                            <div class="wedding-item">
                                <img src="{{ URL::asset('assets/images/wedding/The-Scarlet-Lawn.jpg') }}" alt="">
                                <h6>The Scarlet Lawn </h6>
                                <ul class="wedding-ul">
                                    <li><img src="{{ URL::asset('assets/icons/size-new.png') }}" alt="room size">
                                        <span>40,000 Sq.Ft.</span>
                                    </li>
                                    <li><img src="{{ URL::asset('assets/icons/user.png') }}" alt="people"> <span>6,500
                                            PAX</span> </li>
                                    <li><img src="{{ URL::asset('assets/icons/car-parking.png') }}" alt="people">
                                        <span>500+ Parking Spaces
                                        </span></li>
                                </ul>
                                <div class="mt-3">
                                    <div class="cs-btn"><a class="btn"
                                            href="balemora-lucknow-events-celebration.php">Explore </a> </div>
                                </div>
                            </div>

                            <div class="wedding-item">
                                <img src="{{ URL::asset('assets/images/wedding/Moon-Light-Meadows-Lawn.jpg') }}"
                                    alt="">
                                <h6>Moon Light Meadows Lawn </h6>
                                <ul class="wedding-ul">
                                    <li><img src="{{ URL::asset('assets/icons/size-new.png') }}" alt="room size">
                                        <span>40,000 Sq.Ft.</span>
                                    </li>
                                    <li><img src="{{ URL::asset('assets/icons/user.png') }}" alt="people"> <span>6,500
                                            PAX</span> </li>
                                    <li><img src="{{ URL::asset('assets/icons/car-parking.png') }}" alt="people">
                                        <span>500+ Parking Spaces
                                        </span></li>
                                </ul>
                                <div class="mt-3">
                                    <div class="cs-btn"><a class="btn"
                                            href="balemora-lucknow-events-celebration.php">Explore </a> </div>
                                </div>
                            </div>

                            <div class="wedding-item">
                                <img src="{{ URL::asset('assets/images/wedding/The-Golf-Retreat.jpg') }}" alt="">
                                <h6>The Golf Retreat Lawn </h6>
                                <ul class="wedding-ul">
                                    <li><img src="{{ URL::asset('assets/icons/size-new.png') }}" alt="room size">
                                        <span>40,000 Sq.Ft.</span>
                                    </li>
                                    <li><img src="{{ URL::asset('assets/icons/user.png') }}" alt="people"> <span>6,500
                                            PAX</span> </li>
                                    <li><img src="{{ URL::asset('assets/icons/car-parking.png') }}" alt="people">
                                        <span>500+ Parking Spaces
                                        </span></li>
                                </ul>
                                <div class="mt-3">
                                    <div class="cs-btn"><a class="btn"
                                            href="balemora-lucknow-events-celebration.php">Explore </a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-heading text-center pb-5">Special Offers</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="home-offer-slider owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{ URL::asset('assets/images/offers/Ayodhya.jpg') }}" alt="">
                                <div class="content">
                                    <h4>Ayodhya: A Spiritual Gateway</h4>
                                    <p>Discover the sacred city of Lord Ram, where devotion and history come alive.
                                        Explore revered temples, visit iconic landmarks, and experience the serenity of
                                        the Sarayu River.</p>
                                    <div class="mt-3">
                                        <div class="cs-btn"><a class="btn"
                                                href="balemora-lucknow-special-offers.php">Explore </a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ URL::asset('assets/images/offers/Long-Stay.jpg') }}" alt="">
                                <div class="content">
                                    <h4>Exclusive Long Stay Offers</h4>
                                    <p>Extend your getaway and enjoy special discounts, premium comforts, and
                                        personalized services. Perfect for workcations or leisure stays.</p>
                                    <div class="mt-3">
                                        <div class="cs-btn"><a class="btn"
                                                href="balemora-lucknow-special-offers.php">Explore </a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ URL::asset('assets/images/offers/Buddhist.jpg') }}" alt="">
                                <div class="content">
                                    <h4>Buddhist Pilgrimage Experience</h4>
                                    <p>Immerse yourself in a spiritual journey through the Ayodhya-Varanasi belt,
                                        exploring significant Buddhist landmarks with curated experiences designed for
                                        inner peace and reflection.</p>
                                    <div class="mt-3">
                                        <div class="cs-btn"><a class="btn"
                                                href="balemora-lucknow-special-offers.php">Explore </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding home-gallery-sec ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-heading text-center">Gallery</h3>
                    </div>
                </div>
                <div class="row home-gallery">
                    <div class="owl-carousel owl-theme home-gallery-slider">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/1.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/1.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/2.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/2.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/3.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/3.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/4.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/4.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/5.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/5.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/6.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/6.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/7.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/7.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/8.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/8.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/9.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/9.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Lucknow_Gallery/10.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Lucknow_Gallery/10.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
