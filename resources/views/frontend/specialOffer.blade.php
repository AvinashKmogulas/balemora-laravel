@extends('frontend.common.mainlayout')
@section('content')
    <main>
        <section class="inner-pages-banner offers-bg">
            <div class="container">
                <h2>Special Offers</h2>
            </div>
        </section>

        <section class="section-padding ">
            <div class="container">
                <div class="row first-overview">
                    <div class="col-md-6">
                        <h3>Unique Experiences, Thoughtfully Curated </h3>
                    </div>
                    <div class="col-md-6">
                        <p>Make the most of your stay with special offers and curated experiences. Whether it’s a weekend
                            escape, an extended getaway or a mindful break, enjoy exclusive benefits, premium comforts, and
                            unforgettable moments.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding color-bg">
            <div class="container mb-4">
                <div class="row offer-categories">
                    <div class="col-md-6"><img src="{{ URL::asset('assets/images/offers/Long-Stay.jpg') }}" alt=""
                            class="w-100">
                    </div>
                    <div class="col-md-6">
                        <div class="room-details offers">
                            <h2>Exclusive Long Stay Offers</h2>
                            <div class="offer-for-property">Balemora NH27 Lucknow / Balemora Almora </div>
                            <ul class="nav nav-tabs" id="room-Tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab2" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane2" type="button" role="tab"
                                        aria-controls="home-tab-pane2" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab2" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane2" type="button" role="tab"
                                        aria-controls="profile-tab-pane2" aria-selected="false">Terms & Conditions</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane show active" id="home-tab-pane2" role="tabpanel"
                                    aria-labelledby="home-tab2" tabindex="0">
                                    <p>Extend your getaway and enjoy special discounts, premium comforts, and
                                        personalized services. Perfect for workcations or leisure stays.</p>
                                    <h5>Inclusions</h5>
                                    <ul class="inclusion-ul">
                                        <li>Special discounts on extended stays</li>
                                        <li>Complimentary perks</li>
                                        <li>Premium amenities</li>
                                    </ul>

                                </div>
                                <div class="tab-pane" id="profile-tab-pane2" role="tabpanel" aria-labelledby="profile-tab2"
                                    tabindex="0">
                                    <div class="features-box offers">
                                        <ul class="lh-lg">
                                            <li>Offers are subject to availability and may change without prior notice.
                                            </li>
                                            <li>Advance booking is required to avail of these offers.</li>
                                            <li>The resort reserves the right to amend or withdraw any offer at its
                                                discretion.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#offerModal">Enquire Now</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container mb-4">
                <div class="row offer-categories flex-lg-row-reverse">
                    <div class="col-md-6"><img src="{{ URL::asset('assets/images/offers/Ayodhya.jpg') }}" alt=""
                            class="w-100"> </div>
                    <div class="col-md-6">
                        <div class="room-details offers">
                            <h2>Ayodhya: A Spiritual Gateway </h2>
                            <div class="offer-for-property">Balemora NH27 Lucknow</div>
                            <ul class="nav nav-tabs" id="room-Tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">Terms &
                                        Conditions</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <p>Discover the sacred city of Lord Ram, where devotion and history come alive.
                                        Explore revered temples, visit iconic landmarks, and experience the serenity of
                                        the Sarayu River.</p>

                                    <h5>Inclusions</h5>
                                    <ul class="inclusion-ul">
                                        <li>Visits to Ram Janmabhoomi, Hanuman Garhi, Kanak Bhawan</li>
                                        <li>Peaceful retreat by the Sarayu River</li>
                                        <li>Comfortable accommodation with premium amenities</li>
                                    </ul>


                                </div>
                                <div class="tab-pane" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                                    tabindex="0">
                                    <div class="features-box offers">

                                        <ul class="lh-lg">
                                            <li>Offers are subject to availability and may change without prior notice.
                                            </li>
                                            <li>Advance booking is required to avail of these offers.</li>
                                            <li>The resort reserves the right to amend or withdraw any offer at its
                                                discretion.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#offerModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row offer-categories">
                    <div class="col-md-6"><img src="{{ URL::asset('assets/images/offers/Buddhist.jpg') }}" alt=""
                            class="w-100">
                    </div>
                    <div class="col-md-6 ">
                        <div class="room-details offers">
                            <h2>Buddhist Pilgrimage Experience</h2>
                            <div class="offer-for-property">Balemora NH27 Lucknow </div>
                            <ul class="nav nav-tabs" id="room-Tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab3" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane3" type="button" role="tab"
                                        aria-controls="home-tab-pane3" aria-selected="true">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab3" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane3" type="button" role="tab"
                                        aria-controls="profile-tab-pane3" aria-selected="false">Terms &
                                        Conditions</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent3">
                                <div class="tab-pane show active" id="home-tab-pane3" role="tabpanel"
                                    aria-labelledby="home-tab3" tabindex="0">
                                    <p>Immerse yourself in a spiritual journey through the Ayodhya-Varanasi belt,
                                        exploring significant Buddhist landmarks with curated experiences designed for
                                        inner peace and reflection.</p>

                                    <h5>Inclusions</h5>
                                    <ul class="inclusion-ul">
                                        <li>Visits to Sarnath, Ayodhya’s holy sites</li>
                                        <li>Meditation & mindfulness sessions</li>
                                        <li>Serene accommodations</li>
                                    </ul>


                                </div>
                                <div class="tab-pane" id="profile-tab-pane3" role="tabpanel"
                                    aria-labelledby="profile-tab3" tabindex="0">
                                    <div class="features-box offers">


                                        <ul class="lh-lg">
                                            <li>Offers are subject to availability and may change without prior notice.
                                            </li>
                                            <li>Advance booking is required to avail of these offers.</li>
                                            <li>The resort reserves the right to amend or withdraw any offer at its
                                                discretion.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <a href="javascript:void(0)" class="enquire-now" data-bs-toggle="modal"
                                data-bs-target="#offerModal">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
                    <section class="section-padding">
                        <div class="container">
                            <h3 class="mb-4">Terms <span class="symbol-font">&</span> Conditions:</h3>
                            <ul class="lh-lg">
                                <li>Offers are subject to availability and may change without prior notice.</li>
                                <li>Advance booking is required to avail of these offers.</li>
                                <li>The resort reserves the right to amend or withdraw any offer at its discretion.</li>
                            </ul>
                        </div>
                    </section> -->
    </main>

    <div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="offerModalLabel">Enquire Now</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="offer-form" class="offer-popup-form">
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
                                <label id="offerErr" class="text-danger"></label>
                                <div class="form-group">
                                    <select name="offer" id="offer">
                                        <option value="select-offer" selected disabled>Select Offer</option>
                                        <option value="Ayodhya: A Spiritual Gateway">Ayodhya: A Spiritual Gateway
                                        </option>
                                        <option value="Exclusive Long Stay Offers">Exclusive Long Stay Offers</option>
                                        <option value="Buddhist Pilgrimage Experience">Buddhist Pilgrimage Experience
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" id="property" name="property" value="" />
                            <div class="col-12">
                                <label id="messageErr" class="text-danger"></label>
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" name="offerBtn" id="offerBtn" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
