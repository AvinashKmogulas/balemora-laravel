@extends('frontend.common.mainlayout')
@section('content')
    <main>
        <section class="main-home-banner">
            <video autoplay loop muted class="banner-video" poster="{{ URL::asset('assets/images/about_lucknow.jpg') }}">
                <source src="{{ URL::asset('assets/videos/Main_Home_Page.MP4') }}" type="video/mp4">
            </video>
            <div class="main-home-banner-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h2 class="text-center">Welcome to Balemora </h2>
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
                        <p class="mb-3" data-aos="fade-up" data-aos-duration="1200">Balemora invites you to discover two
                            soulful destinations, Almora and NH27 Lucknow, where timeless traditions blend seamlessly with
                            the rhythm of today. Each retreat offers a distinct setting to pause, reflect and restore.
                            Rooted in nature and guided by heritage, Balemora is a journey of balance and renewal,
                            thoughtfully designed to harmonize ancient wisdom with modern well-being. </p>
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
                <div class="ws_img"><img src="{{ URL::asset('assets/images/wellness_img1.jpg') }}" loading="lazy"
                        alt=""> </div>
                <div class="ws_text">
                    <h3>Ayurvedic Treatments </h3>
                    <p>Ancient hands meet modern needs, guiding you back to balance with therapies that heal from skin to
                        soul. Every touch becomes a conversation between nature and you.</p>
                    <div class="mt-3">
                        <div class="cs-btn"><a class="btn" href="{{ route('balemora-wellness') }}">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="{{ URL::asset('assets/images/wellness_img2.jpg') }}" loading="lazy"
                        alt=""> </div>
                <div class="ws_text">
                    <h3>Ayurvedic Nutrition </h3>
                    <p>Food becomes medicine as you savor meals crafted to nourish, cleanse, and restore. Each bite carries
                        the wisdom of herbs, spices, and mindful intention. </p>
                    <div class="mt-3">
                        <div class="cs-btn"><a class="btn" href="{{ route('balemora-wellness') }}">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="{{ URL::asset('assets/images/wellness_img3.jpg') }}" loading="lazy"
                        alt=""> </div>
                <div class="ws_text">
                    <h3>Yoga </h3>
                    <p>Awaken your body’s quiet intelligence through mindful movement and breath. It is a practice where
                        strength softens and stillness becomes your truest power.</p>
                    <div class="mt-3">
                        <div class="cs-btn"><a class="btn" href="{{ route('balemora-wellness') }}">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ws_item">
                <div class="ws_img"><img src="{{ URL::asset('assets/images/wellness_img4.jpg') }}" loading="lazy"
                        alt=""> </div>
                <div class="ws_text">
                    <h3>Detox </h3>
                    <p>Shed what no longer serves in body, mind, and spirit. This is a cleansing designed to purify and
                        renew your sense of lightness and vitality.</p>
                    <div class="mt-3">
                        <div class="cs-btn"><a class="btn" href="{{ route('balemora-wellness') }}">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pb-5 text-center home-overview">
                        <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">TWO DESTINATIONS. ONE
                            PHILOSOPHY. </h3>
                        <p class="mb-3" data-aos="fade-up" data-aos-duration="1200">Rooted in Ayurveda and slow living,
                            two destinations, each with its own soul. From the grounded elegance of Lucknow to the elevated
                            quiet of Almora, both embrace one timeless philosophy: to live slowly, with intention, and in
                            harmony with the land. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="destination-image" data-aos="fade-up" data-aos-duration="1200">
                            <button class="full-video" data-bs-toggle="modal" data-bs-target="#BL-video" type="button">
                                <img src="{{ URL::asset('assets/images/destinations/Barabanki-destination.jpg') }}"
                                    loading="lazy" alt="" class="w-100">
                                <video autoplay loop muted class="property-video"
                                    poster="{{ URL::asset('assets/images/destinations/Barabanki-destination.jpg') }}">
                                    <source src="{{ URL::asset('assets/videos/IMG_1088.MP4') }}" type="video/mp4">
                                </video>
                                <div class="overlayer"><span>Full Screen </span> </div>
                            </button>
                        </div>
                        <div class="destination-content" data-aos="fade-up" data-aos-duration="1200">
                            <h5>Balemora NH27 Lucknow</h5>
                            <p>Nestled in lush landscapes, this retreat is a haven for families, couples and those seeking
                                quiet luxury with curated wellness experiences. </p>
                            <div class="mt-3">
                                <div class="cs-btn"><a class="btn" href="{{ route('lucknow') }}">Explore </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-image" data-aos="fade-up" data-aos-duration="1200">
                            <button class="full-video" data-bs-toggle="modal" data-bs-target="#BA-video" type="button">
                                <img src="{{ URL::asset('assets/images/destinations/Almora-destination.jpg') }}"
                                    loading="lazy" alt="" class="w-100">
                                <video autoplay loop muted class="property-video"
                                    poster="{{ URL::asset('assets/images/destinations/Almora-destination.jpg') }}">
                                    <source src="{{ URL::asset('assets/videos/IMG_1089.MP4') }}" type="video/mp4">
                                </video>
                                <div class="overlayer"><span>Full Screen </span> </div>
                            </button>
                        </div>
                        <div class="destination-content" data-aos="fade-up" data-aos-duration="1200">
                            <h5>Balemora Almora</h5>
                            <p>Set in the stillness of Uttarakhand, this wellness-first retreat is where nature, comfort,
                                and mindful living come together. </p>
                            <div class="mt-3">
                                <div class="cs-btn"><a class="btn" href="{{ route('almora') }}">Explore </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade fullScreen" id="BL-video" tabindex="-1" aria-labelledby="bookingModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="bookingModalLabel">Balemora NH27 Lucknow </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video controls class="property-video"
                            poster="{{ URL::asset('assets/images/destinations/Barabanki-destination.jpg') }}">
                            <source src="{{ URL::asset('assets/videos/IMG_1088.MP4') }}" class=""
                                type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade fullScreen" id="BA-video" tabindex="-1" aria-labelledby="bookingModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="bookingModalLabel">Balemora Almora </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video controls class="property-video"
                            poster="{{ URL::asset('assets/images/destinations/Almora-destination.jpg') }}">
                            <source src="{{ URL::asset('assets/videos/IMG_1089.MP4') }}" class=""
                                type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->


        <section class="section-padding wellness-cuisine">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="wc_img1" data-aos="fade-up" data-aos-duration="1200">
                            <img src="{{ URL::asset('assets/images/dine_img1.jpg') }}" loading="lazy" class="img-fluid"
                                alt="">
                        </div>
                        <div class="wc_img2" data-aos="zoom-in" data-aos-duration="1200">
                            <img src="{{ URL::asset('assets/images/dine_img2.jpg') }}" loading="lazy" class="img-fluid"
                                alt="">
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

        <section class="home-special-moment">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <h3 class="main-heading">Celebrate Special Moments</h3>
                        <h5>AT BALEMORA NH27 LUCKNOW </h5>
                        <p>From intimate weddings to grand celebrations, Balemora provides breathtaking settings for your
                            most cherished moments. With bespoke services, curated dining and stunning backdrops, every
                            event becomes unforgettable.</p>
                        <div class="mt-4"><a href="{{ route('eventCelebrationBalemoraLucknow') }}">Know More</a> </div>
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
                                <img src="{{ URL::asset('assets/images/offers/Ayodhya.jpg') }}" loading="lazy"
                                    alt="">
                                <div class="content">
                                    <h4>Ayodhya: A Spiritual Gateway</h4>
                                    <div class="offer-for-property">Balemora NH27 Lucknow</div>
                                    <p>Discover the sacred city of Lord Ram, where devotion and history come alive.
                                        Explore revered temples, visit iconic landmarks, and experience the serenity of
                                        the Sarayu River.</p>
                                    <div class="mt-3">
                                        <div class="cs-btn"><a class="btn"
                                                href="{{ route('balemoraOffer') }}">Explore </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ URL::asset('assets/images/offers/Buddhist.jpg') }}" loading="lazy"
                                    alt="">
                                <div class="content">
                                    <h4>Buddhist Pilgrimage Experience</h4>
                                    <div class="offer-for-property">Balemora NH27 Lucknow </div>
                                    <p>Immerse yourself in a spiritual journey through the Ayodhya-Varanasi belt,
                                        exploring significant Buddhist landmarks with curated experiences designed for
                                        inner peace and reflection.</p>
                                    <div class="mt-3">
                                        <div class="cs-btn"><a class="btn"
                                                href="{{ route('balemoraOffer') }}">Explore </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ URL::asset('assets/images/offers/Long-Stay.jpg') }}" loading="lazy"
                                    alt="">
                                <div class="content">
                                    <h4>Exclusive Long Stay Offers</h4>
                                    <div class="offer-for-property">Balemora NH27 Lucknow / Balemora Almora </div>
                                    <p>Extend your getaway and enjoy special discounts, premium comforts, and
                                        personalized services. Perfect for workcations or leisure stays.</p>
                                    <div class="mt-3">
                                        <div class="cs-btn"><a class="btn"
                                                href="{{ route('balemoraOffer') }}">Explore </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding home-gallery-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-heading text-center">Gallery</h3>
                    </div>
                </div>
                <div class="row home-gallery">
                    <div class="owl-carousel owl-theme home-gallery-slider">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Almora_Gallery/1.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Almora_Gallery/1.jpg') }}" loading="lazy"
                                    alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Almora_Gallery/2.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Almora_Gallery/2.jpg') }}" loading="lazy"
                                    alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Almora_Gallery/3.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Almora_Gallery/3.jpg') }}" loading="lazy"
                                    alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Almora_Gallery/4.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Almora_Gallery/4.jpg') }}" loading="lazy"
                                    alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/Almora_Gallery/5.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/Almora_Gallery/5.jpg') }}" loading="lazy"
                                    alt="" class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/gallery/1.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/gallery/1.jpg') }}" loading="lazy" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/gallery/2.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/gallery/2.jpg') }}" loading="lazy" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/gallery/3.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/gallery/3.jpg') }}" loading="lazy" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/gallery/4.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/gallery/4.jpg') }}" loading="lazy" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/gallery/5.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/gallery/5.jpg') }}" loading="lazy" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/gallery/6.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/gallery/6.jpg') }}" loading="lazy" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/gallery/7.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/gallery/7.jpg') }}" loading="lazy" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/gallery/8.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/gallery/8.jpg') }}" loading="lazy" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
