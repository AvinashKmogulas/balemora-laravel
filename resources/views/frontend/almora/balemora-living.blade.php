@extends('frontend.almora.common.mainlayout')
@section('content')
    <main>
        <section class="inner-pages-banner almora-living-bg">
            <div class="container">
                <h2>Heavenly Stay</h2>
            </div>
        </section>

        <section class="section-padding ">
            <div class="container">
                <div class="row first-overview">
                    <div class="col-md-6">
                        <h3>Your Luxuriously Authentic Stay</h3>
                    </div>
                    <div class="col-md-6">
                        <!-- <h1 class="main-heading text-center pb-3">Heritage Dining</h1> -->
                        <p class="">Unwind in thoughtfully designed spaces where comfort meets elegance. Whether
                            seeking a peaceful retreat or a luxurious escape, enjoy breathtaking views, premium amenities,
                            and warm hospitality for a truly memorable stay.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding color-bg">
            <div class="container">
                <div class="row rooms-category">
                    <div class="col-md-6">
                        <div class="owl-carousel owl-theme room-page-slider">
                            <div class="item"><img src="{{ URL::asset('assets/images/rooms/almora_room_1.jpg') }}"
                                    alt="" class="w-100"> </div>
                            <div class="item"><img src="{{ URL::asset('assets/images/rooms/almora_room_2.jpg') }}"
                                    alt="" class="w-100"> </div>
                            <div class="item"><img src="{{ URL::asset('assets/images/rooms/almora_room_3.png') }}"
                                    alt="" class="w-100"> </div>
                            <div class="item"><img src="{{ URL::asset('assets/images/rooms/almora_room_4.jpg') }}"
                                    alt="" class="w-100"> </div>
                            <div class="item"><img src="{{ URL::asset('assets/images/rooms/almora_room_5.jpg') }}"
                                    alt="" class="w-100"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="room-details">
                            <h2>The Cottage </h2>
                            <!-- First Room Tabs -->
                            <ul class="nav nav-tabs" id="room-Tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">Amenities</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <p>Nestled in the serenity of the Himalayas, these wooden cottages combine rustic charm
                                        with modern
                                        comfort. Thoughtfully designed for privacy and well-being, each space opens to
                                        panoramic mountain
                                        vistas, inviting you to reconnect with nature, restore balance, and experience a
                                        truly unforgettable
                                        wellness escape. </p>
                                    <div class="details-icons">
                                        <div class="icon-text">
                                            <div class="icon"><img src="{{ URL::asset('assets/icons/bed.png') }}"
                                                    alt="king bed"> </div>
                                            <div class="text">Double Bedroom</div>
                                        </div>
                                        <div class="icon-text">
                                            <div class="icon"><img src="{{ URL::asset('assets/icons/fork.png') }}"
                                                    alt="Meals"> </div>
                                            <div class="text">All Meals Inclusive </div>
                                        </div>
                                        <div class="icon-text">
                                            <div class="icon"><img src="{{ URL::asset('assets/icons/wifi.png') }}"
                                                    alt="wifi"> </div>
                                            <div class="text">Dedicated Wi-fi Access Point </div>
                                        </div>
                                        <!-- <div class="icon-text">
                                <div class="icon"><img src="{{ URL::asset('assets/icons/size-new.png') }}" alt="room size"> </div>
                                <div class="text">900 Sq.Ft</div>
                              </div> -->
                                        <div class="icon-text">
                                            <div class="icon"><img src="{{ URL::asset('assets/icons/window-frame.png') }}"
                                                    alt="lake and golf view"> </div>
                                            <div class="text">Himalayan View </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                                    tabindex="0">
                                    <div class="features-box">
                                        <ul>
                                            <!-- <li>All Meals Included </li> -->
                                            <!-- <li>Air Conditioning & Heating</li> -->
                                            <!-- <li>Open-to-Sky Sunbath</li> -->
                                            <li>High-Speed Internet</li>
                                            <!-- <li>TV</li> -->
                                            <li>Tea & Coffee Maker</li>
                                            <!-- <li>Mini Fridge</li> -->
                                            <!-- <li>In-Room Safe</li> -->
                                            <!-- <li>In-Room Dining</li> -->
                                            <li>Intercom</li>
                                            <!-- <li>Swimming Pool Access</li> -->
                                            <!-- <li>Golf Cart Access</li> -->
                                            <li>Double Bedroom with Living Room.</li>
                                        </ul>
                                        <!-- <a href="javascript:void(0)" class="book-now" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <h4>Staring From ₹15,000 Per Night <span class="symbol-font mx-1">+</span> Taxes</h4> -->
                            <h4>Staring From ₹15,000 Per Night </h4>
                            <a href="javascript:void(0)" class="book-now" data-bs-toggle="modal"
                                data-bs-target="#bookingModal">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-padding faq-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-md-12 text-center">
                        <h3 class="main-heading">Frequently Asked Questions </h3>
                    </div>
                    <div class="col-lg-8 col-md-12 col-md-12 wellness-section">
                        <div class="accordion-container">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">What type of accommodations do you offer? </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">We offer eco-friendly wooden cottages and a therapy
                                            arena with serene views and Ayurvedic décor. </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">Are meals included in the stay? </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">Yes, three Ayurvedic meals are included daily, tailored
                                            to your dosha and treatment plan. </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
