@extends('frontend.lucknow.common.mainlayout')
@section('content')
    <main>

        <section class="inner-pages-banner contact-bg">
            <div class="container">
                <h2>Contact Us </h2>
            </div>
        </section>

        <section class="section-padding color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="contact-details-box">
                            <h2 class="mb-5">Balemora NH27 Lucknow</h2>
                            <div class="contact-details">
                                <a href="https://maps.app.goo.gl/s8gCmoMMSsbiLVVd8" target="_blank" class="details-box">
                                    <span class="icon"><i class="fa-solid fa-location-dot"></i> </span>
                                    <p>HGG Campus opposite Rasauli Railway Station, Behind Seth M.R. Jaipuria School, NH-28,
                                        Ayodhya-Lucknow Road, Uttar Pradesh - 225001</p>
                                </a>
                                <a href="tel:+919005430333" class="details-box">
                                    <span class="icon"><i class="fa-solid fa-phone"></i> </span>
                                    <p>+91 9005430333</p>
                                </a>
                                <a href="mailto:customercare@balemorawellnessretreats.com" class="details-box">
                                    <span class="icon"><i class="fa-solid fa-envelope"></i> </span>
                                    <p>customercare@balemorawellnessretreats.com</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="contact-map-box">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28456.826517262693!2d81.253771!3d26.931939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399963406797d835%3A0x7178d5c50ddb31ae!2sHeritage%20Green%20Group%20of%20Companies!5e0!3m2!1sen!2sin!4v1752908104822!5m2!1sen!2sin"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <h2 class="main-heading text-center">Get in Touch</h2>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form id="contactForm" class="contact-form-corporate" method="post">
                            <label id="nameErr" class="text-danger"></label>
                            <input type="text" id="name" name="name" placeholder="Your Name">
                            <label id="emailErr" class="text-danger"></label>
                            <input type="email" name="email" id="email" placeholder="Your Email">
                            <label id="numberErr" class="text-danger"></label>
                            <input type="tel" name="number" id="number" placeholder="Phone Number">
                            <label id="subjectErr" class="text-danger"></label>
                            <input type="text" placeholder="Subject" id="subject" name="subject">
                            <input type="hidden" id="property" name="property" value="Balemora NH27 Lucknow" />
                            <label id="messageErr" class="text-danger"></label>
                            <textarea name="message" id="message"></textarea>
                            <input type="submit" name="contactFormBtn" id="contactFormBtn" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding color-bg faq-sec">
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Is the resort open year<span class="symbol-font mx-1">-</span>round?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, our resort is open throughout the year, with customized programs tailored
                                            to different dosha imbalances.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Is there Wi<span class="symbol-font mx-1">-</span>Fi available?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, Wi<span class="symbol-font mx-1">-</span>Fi is available in common areas,
                                            but we encourage digital detox for a more immersive healing experience.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            What other facilities are available?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Our resort features lush green gardens, a wellness library, swimming pool, Yoga
                                            zone, kids' play zone, outdoor games and water bodies.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            How do I book a wellness package?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You can book directly through our website or contact our reservations team for
                                            personalized assistance.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">What is the ideal duration
                                            for a wellness stay? </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">A minimum of 7 days is recommended for noticeable
                                            benefits, but longer stays (14<span class="symbol-font mx-1">-</span>21 days)
                                            are ideal for Panchakarma and deep healing. </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">Is a medical consultation included in all packages?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">Yes, an initial and follow<span
                                                class="symbol-font mx-1">-</span>up consultation with our Ayurvedic
                                            physician is included.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">What should I pack for my
                                            stay? </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">An open mind for transformation is the prerequisite,
                                            and everything else is in<span class="symbol-font mx-1">-</span>house, which
                                            includes comfortable clothing, yoga wear, sandals, and personal toiletries.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="false" aria-controls="collapseEight">Are airport transfers
                                            provided? </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">Yes, we offer optional pickup and drop<span
                                                class="symbol-font mx-1">-</span>off services from the nearest airport or
                                            railway station. </div>
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
