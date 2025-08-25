@extends('frontend.common.mainlayout')
@section('content')
    <main>
        <section class="inner-pages-banner about-bg">
            <div class="container">
                <h2>About Us </h2>
            </div>
        </section>

        <section class="section-padding wellness-cuisine">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="wc_img1" data-aos="fade-up" data-aos-duration="1200">
                            <img src="{{ URL::asset('assets/images/about1.php.jpg') }}" class="img-fluid" loading="lazy"
                                alt="">
                        </div>
                        <div class="wc_img2" data-aos="zoom-in" data-aos-duration="1200">
                            <img src="{{ URL::asset('assets/images/about2.jpg') }}" class="img-fluid" loading="lazy"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1200">
                        <h5>BALEMORA WELLNESS RETREATS </h5>
                        <h3 class="main-heading">A Sanctuary For Rejuvenation </h3>
                        <p>Balemora Wellness Retreat is a sanctuary of calm, offering an immersive experience that
                            harmonizes body, mind, and soul. Nestled in tranquil natural surroundings and infused with
                            tradition, it is a destination where modern wellness practices meet ancient healing therapies.
                            With unique offerings, world-class facilities, and a philosophy of holistic living, Balemora has
                            become a beacon for those seeking authentic rejuvenation. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-md-12 text-center">
                        <h3 class="main-heading">Holistic Living at Balemora </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-md-12 hlbTab">
                        <ul class="nav nav-tabs" id="hoverTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="hwp-tab" data-bs-toggle="tab" data-bs-target="#hwp"
                                    type="button" role="tab">
                                    <div class="vertiinner">
                                        <div class="verticol">
                                            <div class="frontview">
                                                <h3>Holistic Wellness Programs Tailored to Individual Needs</h3>
                                            </div>
                                            <div class="backview">
                                                <h3>Holistic Wellness Programs Tailored to Individual Needs</h3>
                                                <p>At the heart of Balemora is personalized care. Unlike conventional
                                                    wellness centres, the retreat offers bespoke programs addressing
                                                    individual health and lifestyle goals, from stress management and
                                                    detoxification to anti-aging and spiritual growth. </p>
                                                <div class="mt-3">
                                                    <div class="cs-btn"><a class="btn"
                                                            href="balemora-wellness.php">Discover </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="verti-image">
                                            <img class="lazy" src="{{ URL::asset('assets/images/hlb1.jpg') }}"
                                                loading="lazy"
                                                alt="Holistic Wellness Programs Tailored to Individual Needs">
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="fah-tab" data-bs-toggle="tab" data-bs-target="#fah"
                                    type="button" role="tab">
                                    <div class="vertiinner">
                                        <div class="verticol">
                                            <div class="frontview">
                                                <h3>Fusion of Ancient Healing Traditions and Modern Science </h3>
                                            </div>
                                            <div class="backview">
                                                <h3>Fusion of Ancient Healing Traditions and Modern Science</h3>
                                                <p>Balemora marries the wisdom of Ayurveda, traditional Chinese medicine,
                                                    and yoga with modern science. Signature treatments like Panchakarma
                                                    detox therapies blend ancient rituals with state-of-the-art technologies
                                                    and evidence-based practices, offering guests the best of both worlds,
                                                    delivered with expertise and care. </p>
                                                <div class="mt-3">
                                                    <div class="cs-btn"><a class="btn"
                                                            href="balemora-wellness.php">Discover </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="verti-image">
                                            <img class="lazy" src="{{ URL::asset('assets/images/hlb2.jpg') }}"
                                                loading="lazy"
                                                alt="Fusion of Ancient Healing Traditions and Modern Science">
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="inie-tab" data-bs-toggle="tab" data-bs-target="#inie"
                                    type="button" role="tab">
                                    <div class="vertiinner">
                                        <div class="verticol">
                                            <div class="frontview">
                                                <h3>Immersive Nature <span class="symbol-font mx-1">-</span> Infused
                                                    Environment </h3>
                                            </div>
                                            <div class="backview">
                                                <h3>Immersive Nature <span class="symbol-font mx-1">-</span> Infused
                                                    Environment </h3>
                                                <p>Set amidst pristine landscapes, Balemora helps guests reconnect with
                                                    nature. Eco-friendly architecture and organic gardens create a calming
                                                    atmosphere. Daily nature walks, forest bathing, outdoor yoga, and
                                                    meditation among scenic views allow guests to experience the healing
                                                    power of nature. </p>
                                                <div class="mt-3">
                                                    <div class="cs-btn"><a class="btn"
                                                            href="balemora-wellness.php">Discover </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="verti-image">
                                            <img class="lazy" src="{{ URL::asset('assets/images/hlb3.jpg') }}"
                                                loading="lazy" alt="Immersive Nature-Infused Environment">
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="elym-tab" data-bs-toggle="tab" data-bs-target="#elym"
                                    type="button" role="tab">
                                    <div class="vertiinner">
                                        <div class="verticol">
                                            <div class="frontview">
                                                <h3>Expert <span class="symbol-font mx-1">-</span> Led Yoga, Meditation,
                                                    and Mindfulness Practices </h3>
                                            </div>
                                            <div class="backview">
                                                <h3>Expert <span class="symbol-font mx-1">-</span> Led Yoga, Meditation,
                                                    and Mindfulness Practices </h3>
                                                <p>Yoga and meditation are central to Balemora. Seasoned instructors guide
                                                    diverse styles - Hatha, Vinyasa, Kundalini, Yin, catering to all levels.
                                                    Mindfulness workshops use breathwork, visualization, and body scans to
                                                    promote mental clarity, stress relief, and emotional balance. </p>
                                                <div class="mt-3">
                                                    <div class="cs-btn"><a class="btn"
                                                            href="balemora-wellness.php">Discover </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="verti-image">
                                            <img class="lazy" src="{{ URL::asset('assets/images/hlb4.jpg') }}"
                                                loading="lazy"
                                                alt="Expert-Led Yoga, Meditation, and Mindfulness Practices">
                                        </div>
                                    </div>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="hoverTabContent">
                            <div class="tab-pane show active" id="hwp" role="tabpanel">
                                <div class="cover-img">
                                    <img class="lazy" src="{{ URL::asset('assets/images/hlb1.jpg') }}" loading="lazy"
                                        alt="Holistic Wellness Programs Tailored to Individual Needs">
                                </div>
                            </div>
                            <div class="tab-pane" id="fah" role="tabpanel">
                                <div class="cover-img">
                                    <img class="lazy" src="{{ URL::asset('assets/images/hlb2.jpg') }}" loading="lazy"
                                        alt="Fusion of Ancient Healing Traditions and Modern Science">
                                </div>
                            </div>
                            <div class="tab-pane" id="inie" role="tabpanel">
                                <div class="cover-img">
                                    <img class="lazy" src="{{ URL::asset('assets/images/hlb3.jpg') }}" loading="lazy"
                                        alt="Immersive Nature-Infused Environment">
                                </div>
                            </div>
                            <div class="tab-pane" id="elym" role="tabpanel">
                                <div class="cover-img">
                                    <img class="lazy" src="{{ URL::asset('assets/images/hlb4.jpg') }}" loading="lazy"
                                        alt="Expert-Led Yoga, Meditation, and Mindfulness Practices">
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
                    <div class="col-lg-12 col-md-12 col-md-12 text-center">
                        <h3 class="main-heading">STAY <span class="symbol-font mx-1">&</span> SAVOR </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-md-12">
                        <div class="ss_item">
                            <img src="{{ URL::asset('assets/images/about_room.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="ss_content">
                                <h3>Luxurious <span class="symbol-font mx-1">&</span> Sustainable Accommodations </h3>
                                <p>Balemora’s eco-conscious cottages blend elegance with sustainability. With calming
                                    interiors, natural wood, energy-efficient systems, and water-saving technologies, each
                                    space offers comfort and harmony with nature. Private balconies, garden spaces, and
                                    plunge pools invite moments of serene retreat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-md-12">
                        <div class="ss_item">
                            <img src="{{ URL::asset('assets/images/about_dine.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="ss_content">
                                <h3>Authentic Culinary Experiences </h3>
                                <p>Nutrition is key to Balemora’s wellness philosophy. Guests enjoy gourmet meals crafted by
                                    chefs alongside nutritionists and Ayurveda experts, using locally sourced, organic
                                    ingredients. Offerings include farm-to-table meals, Ayurvedic detox teas, gluten-free
                                    and vegan options, and custom diets for specific health goals. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding phb-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-md-12 text-center">
                        <h2 class="main-heading">PAUSE, HEAL, BELONG. </h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-md-12">
                        <div class="phb_box">
                            <h3 class="mt-5">Comprehensive Kerala Messages <span class="symbol-font mx-1">&</span>
                                Wellness Treatments </h3>
                            <p>The spa is a sanctuary of indulgence, with treatments like four-hand Abhyanga massages and
                                Shirodhara therapies, using natural, often in-house crafted products for deep relaxation and
                                renewal.</p>
                        </div>
                        <div class="phb_box">
                            <h3 class="mt-5">Cultural Immersion <span class="symbol-font mx-1">&</span> Learning
                                Opportunities</h3>
                            <p>Guests engage with India’s age-old herbal and Ayurveda traditions. Excursions to temples,
                                historical landmarks, and local markets enrich the wellness experience with cultural depth.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-md-12">
                        <div class="about_box"><img src="{{ URL::asset('assets/images/about_one.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-md-12">
                        <div class="phb_box">
                            <h3 class="mt-5">Focus on Body Detox <span class="symbol-font mx-1">&</span> Mindful Living
                            </h3>
                            <p>Programs encourage digital detox and mindful living, helping guests unplug and adopt
                                stress-reducing practices.</p>
                        </div>
                        <div class="phb_box">
                            <h3 class="mt-5">Long <span class="symbol-font mx-1">-</span> Term Impact <span
                                    class="symbol-font mx-1">&</span> Post <span class="symbol-font mx-1">-</span> Retreat
                                Support</h3>
                            <p>Balemora emphasizes long-term wellness. Guests leave with personalized plans and insights,
                                supported by post-retreat consultations to continue their journey of well-being.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section-padding color-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-md-12 text-center mb-5">
                        <h3 class="main-heading">The beginning of a better you </h3>
                        <p>Balemora Wellness Retreats are a testament to the timeless pursuit of health, balance, and
                            self-discovery. With its unique blend of ancient tradition, modern innovation, and personalized
                            care, it offers a transformative experience that lingers long after the stay, where dreams of
                            holistic well-being come to life.</p>
                        <p>Balemora invites you to begin this journey. Each location echoes the Balemora philosophy, while
                            offering its own rhythm, soul, and sense of place.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-md-12 hlbTab tbbyTab">
                        <ul class="nav nav-tabs" id="hoverTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="bl-id-tab" data-bs-toggle="tab"
                                    data-bs-target="#bl-id" type="button" role="tab">
                                    <div class="vertiinner">
                                        <div class="verticol">
                                            <div class="frontview">
                                                <h3>Balemora NH27 Lucknow</h3>
                                            </div>
                                            <div class="backview">
                                                <h3>Balemora NH27 Lucknow</h3>
                                                <p>An urban-edge retreat that invites you to slow down, reconnect, and
                                                    experience stillness with intention.</p>
                                                <div class="mt-3">
                                                    <div class="cs-btn"><a class="btn"
                                                            href="balemora-lucknow-overview.php">Discover </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="verti-image">
                                            <img class="lazy" src="{{ URL::asset('assets/images/hlb1.jpg') }}"
                                                loading="lazy"
                                                alt="Holistic Wellness Programs Tailored to Individual Needs">
                                        </div>
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ba-id-tab" data-bs-toggle="tab" data-bs-target="#ba-id"
                                    type="button" role="tab">
                                    <div class="vertiinner">
                                        <div class="verticol">
                                            <div class="frontview">
                                                <h3>Balemora Almora </h3>
                                            </div>
                                            <div class="backview">
                                                <h3>Balemora Almora </h3>
                                                <p>A Himalayan hillside retreat where crisp mountain air, cedar forests, and
                                                    spiritual silence frame every moment of renewal. </p>
                                                <div class="mt-3">
                                                    <div class="cs-btn"><a class="btn"
                                                            href="balemora-almora-overview.php">Discover </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="verti-image">
                                            <img class="lazy" src="{{ URL::asset('assets/images/hlb2.jpg') }}"
                                                loading="lazy"
                                                alt="Fusion of Ancient Healing Traditions and Modern Science">
                                        </div>
                                    </div>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="hoverTabContent">
                            <div class="tab-pane show active" id="bl-id" role="tabpanel">
                                <div class="cover-img">
                                    <img class="lazy" src="{{ URL::asset('assets/images/about_lucknow.jpg') }}"
                                        loading="lazy" alt="Holistic Wellness Programs Tailored to Individual Needs">
                                </div>
                            </div>
                            <div class="tab-pane" id="ba-id" role="tabpanel">
                                <div class="cover-img">
                                    <img class="lazy" src="{{ URL::asset('assets/images/about_almora.jpg') }}"
                                        loading="lazy" alt="Fusion of Ancient Healing Traditions and Modern Science">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-md-12 text-center">
                        <h3 class="main-heading">Meet Our Team Member </h3>
                    </div>
                    <div class="col-lg-12 col-md-12 col-md-12">
                        <div class="teamSlider owl-carousel owl-theme">
                            <div class="item">
                                <div class="team_img"><img
                                        src="{{ URL::asset('assets/images/Mr_Vachaspati_Singh.jpg') }}" alt="">
                                </div>
                                <div class="team_text">
                                    <h3>Mr. Vacaspati Singh </h3>
                                    <div class="des">Group Joint Director </div>
                                    <div class="description">
                                        <p>Strategic Visionary | Serial Entrepreneur | Corporate Leader </p>
                                        <p>With over 25 years of leadership excellence, 15 in corporate management and 8 as
                                            a serial entrepreneur, Mr. Vacaspati Singh exemplifies strategic foresight,
                                            operational mastery, and transformative leadership.</p>
                                        <p>In his corporate journey, he rose through senior roles in multinational pharma,
                                            finance, and real estate firms, excelling in strategic planning, corporate
                                            finance, operational restructuring, and market expansion. Known for delivering
                                            double-digit growth, revitalizing underperforming divisions, and managing
                                            multi-million- P&Ls, he built a reputation for results that consistently
                                            outperform industry benchmarks.</p>
                                        <p>As an entrepreneur, he founded, scaled, and successfully exited ventures in real
                                            estate, pharmaceuticals, and hospitality, driving innovation, job creation, and
                                            sustainable practices.</p>
                                        <p>Today, as Group Joint Director, he shapes strategic direction, optimizes capital
                                            deployment, fosters operational synergies, and leads global expansion
                                            initiatives. His leadership philosophy blends strategic clarity, empowerment
                                            with accountability, ethical governance, and continuous innovation.</p>
                                        <p>An MBA in Finance & Marketing with executive certifications, he is committed to
                                            lifelong learning and active in philanthropy, mentorship, and environmental
                                            initiatives.</p>
                                        <p>In his words:<br> “True leadership is not just about driving profits; it’s about
                                            shaping industries, empowering people, and leaving a legacy that outlives you.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_img"><img src="{{ URL::asset('assets/images/Mr_Ahsen_Qasim.jpg') }}"
                                        alt=""> </div>
                                <div class="team_text">
                                    <h3>Mr. Ahsen Qasim </h3>
                                    <div class="des">Group Joint Managing Director</div>
                                    <div class="description">
                                        <p>Driving Growth, Innovation & Global Partnerships </p>
                                        <p>Vision without execution is just imagination and Mr. Ahsen Qasim has built a
                                            career turning vision into measurable impact.</p>
                                        <p>With over 23 years of leadership excellence, Mr. Ahsen Qasim stands at the
                                            forefront of one of the region’s most dynamic and diversified conglomerates. As
                                            Group Joint Managing Director for the past eight years, he has blended strategic
                                            foresight, operational mastery, and a relentless drive for innovation to deliver
                                            sustainable, long-term growth.</p>
                                        <p>Renowned for anticipating market shifts and seizing emerging opportunities, he
                                            has led transformative expansions, cross-sector diversification, and global
                                            collaborations, strengthening market position, streamlining efficiencies, and
                                            creating exceptional stakeholder value.</p>
                                        <p>Armed with an MBA and a results-driven mindset, Mr. Qasim has successfully
                                            steered business transformations, operational expansions, and cross-border
                                            ventures, all while embedding governance frameworks aligned with global best
                                            practices. His ability to merge strategic vision with flawless execution has
                                            earned him the trust of boards, partners, and employees alike.</p>
                                        <p>A thought leader and growth strategist, he continues to inspire excellence, forge
                                            strategic partnerships, and position the Group for lasting success in an
                                            ever-evolving global marketplace.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_img"><img src="{{ URL::asset('assets/images/Mr_Anil_Yadav.jpg') }}"
                                        alt=""> </div>
                                <div class="team_text">
                                    <h3>Mr. Anil Yadav </h3>
                                    <div class="des">Director – Resort Development</div>
                                    <div class="description">
                                        <p>Horticulture & Landscaping Visionary | Sustainable Design</p>
                                        <p>With over 25 years of expertise, Mr. Anil Yadav masterfully combines resort
                                            development with horticulture and landscaping to create destinations that blend
                                            architectural elegance with natural harmony. From concept planning and master
                                            layouts to construction oversight, he delivers projects that are both
                                            commercially successful and environmentally responsible.</p>
                                        <p>Renowned for his innovative use of indigenous plants, water-efficient irrigation,
                                            and thematic garden designs, Mr. Yadav enhances the aesthetic and ecological
                                            value of every property. His developments integrate eco-friendly infrastructure,
                                            efficient land use, and guest-centric amenities, offering immersive experiences
                                            that captivate visitors.</p>
                                        <p>A hands-on leader, he collaborates closely with architects, engineers, and
                                            environmental experts to ensure the highest standards of design, functionality,
                                            and sustainability. Whether crafting serene luxury retreats or lush recreational
                                            spaces, Mr. Yadav’s work consistently inspires, rejuvenates, and stands the test
                                            of time, setting benchmarks in resort and landscape excellence.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_img"><img src="{{ URL::asset('assets/images/Dr_S_Oberoi.jpg') }}"
                                        alt=""> </div>
                                <div class="team_text">
                                    <h3>Dr. S. Oberoi </h3>
                                    <div class="des">Chief Executive Officer – Balemora Wellness Resort </div>
                                    <div class="description">
                                        <p>Visionary Leader | Strategic Executor | Global Hospitality Expert </p>
                                        <p>With over 21 years of international experience across 22 countries, Dr. S. Oberoi
                                            is a global hospitality and wellness leader who combines strategic foresight
                                            with operational excellence. As CEO of Balemora Wellness Resort, he is driving
                                            the brand toward world-class service, sustainable growth, and holistic guest
                                            experiences.</p>
                                        <p>An influential figure in tourism, Dr. Oberoi has contributed to policy
                                            development for the Ministry of Tourism in Nepal, Goa, and Maharashtra. Known
                                            for taking projects from concept to completion, he has successfully incubated
                                            startups, scaled businesses, and adapted innovations to diverse cultural
                                            landscapes.</p>
                                        <p>Holding a Ph.D. in Strategic Management from North Central University, an MBA
                                            from the London School of Business, and multiple specialized certifications,
                                            including Lean Six Sigma Green Belt, he blends academic rigor with practical
                                            leadership.</p>
                                        <p>His philosophy centers on empowering teams, fostering innovation, and embedding
                                            sustainability into every operational layer. At Balemora, he integrates wellness
                                            traditions with global hospitality standards, ensuring an authentic yet
                                            world-class experience.</p>
                                        <p>From boardroom strategy to on-the-ground execution, Dr. Oberoi’s leadership
                                            continues to set benchmarks in the global wellness and hospitality industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What is Balemora Wellness Retreat?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Balemora is an Ayurvedic Wellness Retreat that offers traditional Indian healing
                                            practices, therapies, and diets based on Ayurveda, focusing on holistic health
                                            and well<span class="symbol-font mx-1">-</span>being.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Is the resort open year<span class="symbol-font mx-1">-</span>round?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
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
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Is the resort family<span class="symbol-font mx-1">-</span>friendly?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            While the resort is designed for quiet, healing experiences, we do offer ample
                                            activities and a play area for children both indoor and outdoor.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Can you cater to vegan or gluten-free diets?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Absolutely. We accommodate various dietary needs while keeping meals aligned
                                            with Ayurvedic principles.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Is alcohol or caffeine served?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            No, we maintain a sattvic environment. Alcohol, caffeine, and tobacco are not
                                            allowed on the premises.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @push('script')
        <script>
            document.querySelectorAll('#hoverTab .nav-link').forEach(tab => {
                tab.addEventListener('mouseenter', () => {
                    const bsTab = new bootstrap.Tab(tab);
                    bsTab.show();
                });
            });
        </script>
    @endpush
@endsection
