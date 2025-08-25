@extends('frontend.lucknow.common.mainlayout')
@section('content')
    <main>
        <section class="inner-pages-banner ec-bg">
            <div class="container">
                <h2>Destination Weddings</h2>
            </div>
        </section>
        <section class="section-padding ">
            <div class="container">
                <div class="row first-overview">
                    <div class="col-md-6">
                        <h3>Special Moments Beautifully Told</h3>
                    </div>
                    <div class="col-md-6">
                        <p>Celebrate love with a breathtaking destination wedding surrounded by nature’s beauty. Every
                            celebration
                            feels extraordinary with stunning venues, impeccable service, and every detail thoughtfully
                            crafted,
                            creating a timeless memory.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding color-bg">
            <div class="container mb-5 pb-5">
                <div class="row wedding-categories">
                    <div class="col-md-6">
                        <img src="{{ URL::asset('assets/images/wedding/The-Scarlet-Lawn.jpg') }}" alt=""
                            class="w-100">
                    </div>
                    <div class="col-md-6 ">
                        <div class="room-details">
                            <h2>The Scarlet Lawn</h2>
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
                                        aria-controls="profile-tab-pane" aria-selected="false">Seating
                                        Arrangements</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <p>A picturesque setting where nature’s beauty enhances every celebration. With lush
                                        greenery, open
                                        skies, and an elegant ambiance, it provides the perfect space for unforgettable
                                        gatherings, from
                                        weddings to special occasions.</p>
                                    <ul class="wedding-ul">
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/size-new.png') }}" alt="room size">
                                            </span> 40,000 Sq.Ft.
                                        </li>
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/user.png') }}" alt="people">
                                            </span> 6,500 PAX
                                        </li>
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/car-parking.png') }}" alt="people">
                                            </span>500+ Parking Spaces
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                                    tabindex="0">
                                    <div class="features-box wedding">
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Cluster.png') }}" class="w-100"
                                                alt="">
                                            <p>Cluster</p>
                                            <h5>3300 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/U-Shaped.png') }}" class="w-100"
                                                alt="">
                                            <p>U-Shaped</p>
                                            <h5>2300 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Theatre.png') }}" class="w-100"
                                                alt="">
                                            <p>Theatre</p>
                                            <h5>5000 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Live-Events.png') }}"
                                                class="w-100" alt="">
                                            <p>Live Events</p>
                                            <h5>6500 PAX</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#weddingModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-5 pb-5">
                <div class="row wedding-categories flex-lg-row-reverse">
                    <div class="col-md-6">
                        <img src="{{ URL::asset('assets/images/wedding/Moon-Light-Meadows-Lawn.jpg') }}" alt=""
                            class="w-100">
                    </div>
                    <div class="col-md-6 ">
                        <div class="room-details">
                            <h2>Moon Light Meadows Lawn</h2>
                            <ul class="nav nav-tabs" id="room-Tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab2" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane2" type="button" role="tab"
                                        aria-controls="home-tab-pane2" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab2" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane2" type="button" role="tab"
                                        aria-controls="profile-tab-pane2" aria-selected="false">Seating
                                        Arrangements</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane show active" id="home-tab-pane2" role="tabpanel"
                                    aria-labelledby="home-tab2" tabindex="0">
                                    <p>A serene outdoor venue designed for enchanting celebrations under the stars.
                                        Surrounded by nature’s
                                        tranquility, it creates a magical atmosphere, making every wedding and special event
                                        truly memorable.
                                    </p>
                                    <ul class="wedding-ul">
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/size-new.png') }}" alt="room size">
                                            </span> 40,000 Sq.Ft.
                                        </li>
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/user.png') }}" alt="people">
                                            </span> 6,500 PAX
                                        </li>
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/car-parking.png') }}"
                                                    alt="people">
                                            </span>500+ Parking Spaces
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="profile-tab-pane2" role="tabpanel"
                                    aria-labelledby="profile-tab2" tabindex="0">
                                    <div class="features-box wedding">
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Cluster.png') }}"
                                                class="w-100" alt="">
                                            <p>Cluster</p>
                                            <h5>3300 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/U-Shaped.png') }}"
                                                class="w-100" alt="">
                                            <p>U-Shaped</p>
                                            <h5>2300 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Theatre.png') }}"
                                                class="w-100" alt="">
                                            <p>Theatre</p>
                                            <h5>5000 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Live-Events.png') }}"
                                                class="w-100" alt="">
                                            <p>Live Events</p>
                                            <h5>6500 PAX</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#weddingModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row wedding-categories">
                    <div class="col-md-6">
                        <img src="{{ URL::asset('assets/images/wedding/The-Golf-Retreat.jpg') }}" alt=""
                            class="w-100">
                    </div>
                    <div class="col-md-6 ">
                        <div class="room-details">
                            <h2>The Golf Retreat Lawn</h2>
                            <ul class="nav nav-tabs" id="room-Tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab3" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane3" type="button" role="tab"
                                        aria-controls="home-tab-pane3" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab3" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane3" type="button" role="tab"
                                        aria-controls="profile-tab-pane3" aria-selected="false">Seating
                                        Arrangements</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane show active" id="home-tab-pane3" role="tabpanel"
                                    aria-labelledby="home-tab3" tabindex="0">
                                    <p>Overlooking rolling fairways, this scenic lawn blends sophistication with natural
                                        charm. Its
                                        breathtaking views and spacious setting make it an ideal backdrop for grand
                                        celebrations and special
                                        gatherings.</p>
                                    <ul class="wedding-ul">
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/size-new.png') }}" alt="room size">
                                            </span> 40,000 Sq.Ft.
                                        </li>
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/user.png') }}" alt="people">
                                            </span> 6,500 PAX
                                        </li>
                                        <li>
                                            <span>
                                                <img src="{{ URL::asset('assets/icons/car-parking.png') }}"
                                                    alt="people">
                                            </span>500+ Parking Spaces
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="profile-tab-pane3" role="tabpanel"
                                    aria-labelledby="profile-tab3" tabindex="0">
                                    <div class="features-box wedding">
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Cluster.png') }}"
                                                class="w-100" alt="">
                                            <p>Cluster</p>
                                            <h5>3300 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/U-Shaped.png') }}"
                                                class="w-100" alt="">
                                            <p>U-Shaped</p>
                                            <h5>2300 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Theatre.png') }}"
                                                class="w-100" alt="">
                                            <p>Theatre</p>
                                            <h5>5000 PAX</h5>
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/wedding/Live-Events.png') }}"
                                                class="w-100" alt="">
                                            <p>Live Events</p>
                                            <h5>6500 PAX</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#weddingModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="section-padding"><div class="container"><h3 class="mb-4">Seating Arrangements</h3><ul class="lh-lg"><li><span>Cluster </span> 3300 PAX</li><li><span>U Shaped </span> 2200 PAX</li><li><span>Theatre </span> 5000 PAX</li><li><span>Live Event </span> 6500 PAX</li></ul></div></section> -->
    </main>
    <div class="modal fade" id="weddingModal" tabindex="-1" aria-labelledby="weddingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="weddingModalLabel">Enquire Now</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="eventForm" class="offer-popup-form">
                        <div class="row">
                            <div class="col-12">
                                <label id="nameErr" class="text-danger"></label>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <label id="emailErr" class="text-danger"></label>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <label id="numberErr" class="text-danger"></label>
                                <div class="form-group">
                                    <input type="tel" name="number" id="number" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="col-12">
                                <label id="lawnErr" class="text-danger"></label>
                                <div class="form-group">
                                    <select name="lawn" id="lawn">
                                        <option value="select-lawn" selected disabled>Select Lawn</option>
                                        <option value="The Scarlet Lawn">The Scarlet Lawn</option>
                                        <option value="Moon Light Meadows Lawn">Moon Light Meadows Lawn</option>
                                        <option value="The Golf Retreat Lawn">The Golf Retreat Lawn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label id="messageErr" class="text-danger"></label>
                                <textarea name="message" id="message" placeholder="message"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" name="eventBtn" id="eventBtn" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
