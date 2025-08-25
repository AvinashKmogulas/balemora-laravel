@extends('frontend.common.mainlayout')
@section('content')
    <main>
        <section class="inner-pages-banner wellness-bg">
            <div class="container">
                <h2>Balemora Wellness</h2>
            </div>
        </section>

        <section class="section-padding white-flower-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center home-overview">
                        <h3 class="main-heading" data-aos="fade-up" data-aos-duration="1200">Pause. Heal. Belong </h3>
                        <p class="mb-3" data-aos="fade-up" data-aos-duration="1200">At the core of Balemora Wellness lies
                            its commitment to personalized care. Unlike conventional wellness centres offering generic
                            solutions, we take pride in its bespoke programs designed to address individual health and
                            lifestyle goals. From stress management and detoxification, anti-aging and spiritual growth,
                            each program is curated based on the guest's unique health profile, preferences and aspirations.
                        </p>
                        <p class="mb-3" data-aos="fade-up" data-aos-duration="1200">Before starting their journey, guests
                            undergo a comprehensive health assessment that includes consultations with experienced wellness
                            practitioners, Ayurveda specialists, yoga gurus and nutritionists. This integrative approach
                            ensures that every aspect of the individual’s well-being is addressed, creating a transformative
                            experience that extends beyond the duration of the stay.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding gold-wellnes-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-heading" data-aos="fade-up" data-aos-duration="1200">Programs </h2>
                    </div>
                </div>
            </div>
        </section>

        <ul class="nav nav-tabs ds-nav-tabs" id="myTab" role="tablist" style="justify-content: center;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane"
                    type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pagOne-tab" data-bs-toggle="tab" data-bs-target="#pagOne-tab-pane"
                    type="button" role="tab" aria-controls="pagOne-tab-pane" aria-selected="false">3 or 5 Days Package
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pagTwo-tab" data-bs-toggle="tab" data-bs-target="#pagTwo-tab-pane"
                    type="button" role="tab" aria-controls="pagTwo-tab-pane" aria-selected="false">5 or 7 Days Package
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pagThree-tab" data-bs-toggle="tab" data-bs-target="#pagThree-tab-pane"
                    type="button" role="tab" aria-controls="pagThree-tab-pane" aria-selected="false">7 or 10 Days
                    Package
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                <section class="section-padding color-bg wellness-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-soul.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                            <div class="col-md-6 well-text">
                                <div class="wellness-content right">
                                    <h2>Ayurveda Soul Silence <span class="symbol-font mx-1">&</span> Sound Detox</h2>
                                    <p>3 or 5 Days Package </p>
                                    <p>Mental clarity and stress relief through silence and sound healing.</p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionHealing">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                        aria-expanded="true" aria-controls="collapseEight">
                                                        Silent Mornings & Guided Meditations
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Begin each day in noble silence with breath-led meditations to
                                                        ground,
                                                        center, and quiet the mind.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        Sound Bath Healing with Singing Bowls
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Daily immersive sessions using Tibetan and crystal bowls to clear
                                                        energetic
                                                        blocks and induce deep calm.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                        aria-expanded="false" aria-controls="collapseTen">
                                                        Breathwork & Yoga Nidra
                                                    </button>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Conscious breath practices followed by yogic sleep to release
                                                        tension
                                                        and
                                                        promote deep inner rest.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                                        aria-expanded="false" aria-controls="collapseEleven">
                                                        Marma Point Therapy
                                                    </button>
                                                </h2>
                                                <div id="collapseEleven" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Gentle Ayurvedic energy point stimulation to open subtle channels
                                                        and
                                                        restore emotional equilibrium.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
                                                        aria-expanded="false" aria-controls="collapseTwelve">
                                                        Mandala Creation & Reflective Journaling
                                                    </button>
                                                </h2>
                                                <div id="collapseTwelve" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Creative mandala art and guided journaling for self-inquiry and
                                                        expression
                                                        of your inner landscape.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThirteen"
                                                        aria-expanded="false" aria-controls="collapseThirteen">
                                                        Forest Bathing Walks
                                                    </button>
                                                </h2>
                                                <div id="collapseThirteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Mindful walking meditations in nature to enhance presence, elevate
                                                        mood,
                                                        and
                                                        restore sensory harmony.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFourteen"
                                                        aria-expanded="false" aria-controls="collapseFourteen">
                                                        Digital Detox Support
                                                    </button>
                                                </h2>
                                                <div id="collapseFourteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Tools and structured practices to disconnect from screens and
                                                        reconnect
                                                        with
                                                        yourself more fully.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding wellness-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 well-text">
                                <div class="wellness-content left">
                                    <h2>Ayurveda Tridosha Harmony Retreat</h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Deep Ayurvedic healing and constitutional balance</p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Ayurvedic Consultation & Dosha Assessment
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Understand your unique body-mind type with expert analysis to tailor
                                                        treatments and lifestyle practices.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Daily Abhyanga Oil Massage + Herbal Steam
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Nourishing warm oil massages followed by herbal steam to detoxify,
                                                        improve
                                                        circulation, and calm the nervous system.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Yoga Therapy Tailored to Your Constitution
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Personalized yoga sequences designed to support your dosha, enhance
                                                        balance,
                                                        and restore vitality.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        Ayurvedic Cooking Classes
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Learn to prepare healing meals aligned with your dosha using
                                                        traditional
                                                        Ayurvedic principles and seasonal ingredients.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        Herbal Teas + Detox Meals
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Freshly prepared sattvic meals and herbal infusions aid digestion,
                                                        rejuvenate cells, and support natural detox.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        Evening Shirodhara Therapy
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        A soothing oil flow over the third eye each evening to calm the
                                                        mind,
                                                        aid
                                                        sleep, and reduce mental fatigue.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                        aria-expanded="false" aria-controls="collapseSeven">
                                                        Journaling + Marma Therapy
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Gentle energy-point stimulation and reflective journaling to deepen
                                                        emotional healing and self-awareness.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-Tridosha.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding color-bg wellness-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 well-img">
                                <div class="well_img_box"><img
                                        src="{{ URL::asset('assets/wellness/Ayurveda-chakra.jpg') }}" alt=""
                                        class="w-100 object-fit-cover"> </div>
                            </div>
                            <div class="col-md-6 well-text">
                                <div class="wellness-content left">
                                    <h2>Ayurveda Chakra Awakening <span class="symbol-font mx-1"> &</span> Energy Reset
                                    </h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Emotional balance, chakra alignment & subtle energy healing through integrative
                                        practices </p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionSpiritual">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFifteen"
                                                        aria-expanded="true" aria-controls="collapseFifteen">
                                                        Chakra-Based Yoga & Meditation
                                                    </button>
                                                </h2>
                                                <div id="collapseFifteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Daily sessions aligning each chakra through breath, movement, and
                                                        focused intention for emotional clarity and flow.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSixteen"
                                                        aria-expanded="false" aria-controls="collapseSixteen">Energy
                                                        Diagnostics + Reiki </button>
                                                </h2>
                                                <div id="collapseSixteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Personalized energy scans and hands-on Reiki sessions to clear
                                                        stagnation and recharge your life force.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeventeen"
                                                        aria-expanded="false" aria-controls="collapseSeventeen">Crystal
                                                        Healing + Sound Vibration Therapy </button>
                                                </h2>
                                                <div id="collapseSeventeen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Balancing crystals and vibrational tools like tuning forks and sound
                                                        bowls to harmonize your energy centers.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEighteen"
                                                        aria-expanded="false" aria-controls="collapseEighteen">Foot
                                                        Reflexology </button>
                                                </h2>
                                                <div id="collapseEighteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Targeted pressure therapy on foot reflex zones to release stored
                                                        emotional tension and enhance energetic balance.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNineteen"
                                                        aria-expanded="false" aria-controls="collapseNineteen">Herbal Teas
                                                        +
                                                        Detox Meals </button>
                                                </h2>
                                                <div id="collapseNineteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Freshly prepared sattvic meals and herbal infusions aid digestion,
                                                        rejuvenate cells, and support natural detox.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwenty"
                                                        aria-expanded="false" aria-controls="collapseTwenty">Creative
                                                        Expression Sessions (Art or Movement) </button>
                                                </h2>
                                                <div id="collapseTwenty" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Guided visual art or embodied movement to express blocked emotions
                                                        and ignite your inner creativity.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne"
                                                        aria-expanded="false" aria-controls="collapseTwentyOne">
                                                        Fire Circle Ritual on Closing Night
                                                    </button>
                                                </h2>
                                                <div id="collapseTwentyOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        A sacred closing ceremony with intention setting, mantra chanting,
                                                        and fire release for personal transformation.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding wellness-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 well-text">
                                <div class="wellness-content left">
                                    <h2>Ayurveda Detox <span class="symbol-font mx-1">&</span> Glow Program</h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Cleanse the body, boost immunity, and revive skin and digestion with Ayurvedic
                                        methods and
                                        modern self-care.</p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionADGP">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPone"
                                                        aria-expanded="true" aria-controls="collapseADGPone">
                                                        Panchakarma-lite Cleansing Rituals
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPone" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Gentle elimination practices like nasya, basti, and digestive resets
                                                        adapted
                                                        for short-term, accessible detox.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPtwo"
                                                        aria-expanded="false" aria-controls="collapseADGPtwo">
                                                        Lymphatic Drainage Facials
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPtwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Rejuvenating facial massage using herbal oils and tools to stimulate
                                                        detox
                                                        pathways and brighten the skin.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPthree"
                                                        aria-expanded="false" aria-controls="collapseADGPthree">
                                                        Detox Yoga, Dry Brushing & Self-Abhyanga
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPthree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Daily movement, exfoliation, and self-massage rituals to enhance
                                                        lymph flow,
                                                        circulation, and cellular renewal.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPfour"
                                                        aria-expanded="false" aria-controls="collapseADGPfour">
                                                        Light Ayurvedic Meals + Herbal Teas
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPfour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Simple, warm, dosha-balancing meals and digestive herbal infusions
                                                        to
                                                        restore gut health and metabolic fire.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPfive"
                                                        aria-expanded="false" aria-controls="collapseADGPfive">
                                                        Sauna or Steam Dome Detox
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPfive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Therapeutic heat therapies to encourage sweat purification, toxin
                                                        release,
                                                        and skin glow.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPsix"
                                                        aria-expanded="false" aria-controls="collapseADGPsix">
                                                        Coaching on Digestive Wellness
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPsix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Expert guidance on gut health, food combining, and daily Ayurvedic
                                                        habits
                                                        for sustainable vitality.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-Detox.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding color-bg wellness-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-Mind.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                            <div class="col-md-6 well-text">
                                <div class="wellness-content right">
                                    <h2>Ayurveda Mind <span class="symbol-font mx-1">-</span> Body Resilience Reset </h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Reset the nervous system, release tension, and build resilience with body-based
                                        therapies and education.</p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionAMBRR">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRone"
                                                        aria-expanded="true" aria-controls="collapseAMBRRone">
                                                        Somatic Yoga + Breath-Based Therapy
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRone" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Gentle body-based practices and breathwork to regulate stress,
                                                        release
                                                        trauma, and reconnect with body wisdom.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRtwo"
                                                        aria-expanded="false" aria-controls="collapseAMBRRtwo">
                                                        Craniosacral & Polarity Balancing
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRtwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Subtle hands-on therapy to harmonize the body’s energy flow, reset
                                                        the
                                                        nervous system, and calm hyperarousal.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRthree"
                                                        aria-expanded="false" aria-controls="collapseAMBRRthree">
                                                        Nervous System Nutrition Workshops
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRthree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Education on foods and herbs that support vagal tone, gut-brain
                                                        health, and
                                                        emotional stability.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRfour"
                                                        aria-expanded="false" aria-controls="collapseAMBRRfour">
                                                        Journaling Through Trauma Release
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRfour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Guided writing prompts to help process old wounds, reframe
                                                        narratives, and
                                                        invite healing insights.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRfive"
                                                        aria-expanded="false" aria-controls="collapseAMBRRfive">
                                                        Float Pod Therapy or Vibro-Acoustic Bed
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRfive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Deep sensory immersion therapies that stimulate parasympathetic
                                                        response and
                                                        promote profound relaxation.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRsix"
                                                        aria-expanded="false" aria-controls="collapseAMBRRsix">
                                                        Evening Sound Journeys
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRsix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Sonic meditations using instruments like gongs, chimes, and bowls to
                                                        unwind
                                                        mental chatter and anchor presence.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding wellness-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 well-text">
                                <div class="wellness-content left">
                                    <h2>Ayurveda Earth <span class="symbol-font mx-1">&</span> Spirit Immersion</h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Grounding, spiritual renewal, and connection with nature through sensory rituals and
                                        earth-based practices.</p>

                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionAESI">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIone"
                                                        aria-expanded="true" aria-controls="accordionAESIone">
                                                        Morning Barefoot Walks & Earthing Practices
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIone" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Begin each day with mindful walks on natural ground to discharge
                                                        stress and
                                                        reconnect with Earth’s energy field.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESItwo"
                                                        aria-expanded="false" aria-controls="accordionAESItwo">
                                                        Nature Meditations Under Trees
                                                    </button>
                                                </h2>
                                                <div id="accordionAESItwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Silent, breath-led meditations among trees to enhance stillness,
                                                        deepen
                                                        awareness, and attune to the elements.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIthree"
                                                        aria-expanded="false" aria-controls="accordionAESIthree">
                                                        Treehouse Yoga Sessions
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIthree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Elevated yoga experiences surrounded by nature, promoting presence,
                                                        balance,
                                                        and organic movement flow.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIfour"
                                                        aria-expanded="false" aria-controls="accordionAESIfour">
                                                        Herbal Oil Massage with Grounding Scents
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIfour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Full-body massage using earthy essential oils like vetiver and
                                                        sandalwood to
                                                        center the senses and calm the mind.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIfive"
                                                        aria-expanded="false" aria-controls="accordionAESIfive">
                                                        Forest Healing Rituals (Storytelling + Candle Circle)
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIfive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Evening gatherings around fire or candlelight with ancestral
                                                        stories,
                                                        chants, and guided emotional release.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIsix"
                                                        aria-expanded="false" aria-controls="accordionAESIsix">
                                                        Plant-Based Food & Local Organic Ingredients
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIsix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Wholesome, locally sourced meals crafted to nourish the body and
                                                        align with
                                                        the energy of the natural world.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-Earth.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding color-bg wellness-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Panchakarma-Rejuvenation.jpg') }}"
                                        alt="" class="w-100 object-fit-cover">
                                </div>
                            </div>
                            <div class="col-md-6 well-text">
                                <div class="wellness-content right">
                                    <h2>Panchakarma Rejuvenation Program </h2>
                                    <p>7 or 10 Days Package </p>
                                    <p>Deep cellular detox, rejuvenation, and doshic balance through individualized
                                        classical Ayurvedic Panchakarma therapies.</p>

                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionPRP">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPone"
                                                        aria-expanded="true" aria-controls="collapsePRPone">
                                                        Consultation & Body Constitution Analysis
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPone" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Ayurvedic pulse & tongue diagnosis Personalized detox plan and
                                                        dietary
                                                        recommendations
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPtwo"
                                                        aria-expanded="false" aria-controls="collapsePRPtwo">
                                                        Snehana (Internal & External Oleation)
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPtwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Daily Abhyanga (warm herbal oil massage) Nasya (nasal cleansing with
                                                        medicated oils)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPthree"
                                                        aria-expanded="false" aria-controls="collapsePRPthree">
                                                        Swedana (Herbal Steam Therapy)
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPthree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Oral ghee therapy for internal oleation (under supervision)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPfour"
                                                        aria-expanded="false" aria-controls="collapsePRPfour">
                                                        Shodhana (Main Cleansing Procedures)
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPfour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Medicated herbal steam post-Abhyanga to open channels and prepare
                                                        the body
                                                        for detox
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPfive"
                                                        aria-expanded="false" aria-controls="collapsePRPfive">
                                                        Ayurvedic Detox Cuisine
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPfive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Depending on the guest’s constitution and imbalance: Virechana
                                                        (gentle
                                                        purgation for Pitta and liver cleanse)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPsix"
                                                        aria-expanded="false" aria-controls="collapsePRPsix">
                                                        Therapeutic Support
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPsix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Raktamokshana or leech therapy (optional, for advanced therapies)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPseven"
                                                        aria-expanded="false" aria-controls="collapsePRPseven">
                                                        Integration & Rejuvenation Phase
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPseven" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Light sattvic meals (kitchari, soups, herbal teas) Digestive spice
                                                        waters
                                                        and dosha-balancing drinks on the forehead) for mental purification
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane" id="pagOne-tab-pane" role="tabpanel" aria-labelledby="pagOne-tab" tabindex="0">
                <section class="section-padding color-bg wellness-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-soul.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                            <div class="col-md-6 well-text">
                                <div class="wellness-content right">
                                    <h2>Ayurveda Soul Silence <span class="symbol-font mx-1">&</span> Sound Detox</h2>
                                    <p>3 or 5 Days Package </p>
                                    <p>Mental clarity and stress relief through silence and sound healing.</p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionHealing">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                        aria-expanded="true" aria-controls="collapseEight">
                                                        Silent Mornings & Guided Meditations
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Begin each day in noble silence with breath-led meditations to
                                                        ground,
                                                        center, and quiet the mind.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        Sound Bath Healing with Singing Bowls
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Daily immersive sessions using Tibetan and crystal bowls to clear
                                                        energetic
                                                        blocks and induce deep calm.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                        aria-expanded="false" aria-controls="collapseTen">
                                                        Breathwork & Yoga Nidra
                                                    </button>
                                                </h2>
                                                <div id="collapseTen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Conscious breath practices followed by yogic sleep to release
                                                        tension
                                                        and
                                                        promote deep inner rest.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                                        aria-expanded="false" aria-controls="collapseEleven">
                                                        Marma Point Therapy
                                                    </button>
                                                </h2>
                                                <div id="collapseEleven" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Gentle Ayurvedic energy point stimulation to open subtle channels
                                                        and
                                                        restore emotional equilibrium.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
                                                        aria-expanded="false" aria-controls="collapseTwelve">
                                                        Mandala Creation & Reflective Journaling
                                                    </button>
                                                </h2>
                                                <div id="collapseTwelve" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Creative mandala art and guided journaling for self-inquiry and
                                                        expression
                                                        of your inner landscape.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThirteen"
                                                        aria-expanded="false" aria-controls="collapseThirteen">
                                                        Forest Bathing Walks
                                                    </button>
                                                </h2>
                                                <div id="collapseThirteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Mindful walking meditations in nature to enhance presence, elevate
                                                        mood,
                                                        and
                                                        restore sensory harmony.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFourteen"
                                                        aria-expanded="false" aria-controls="collapseFourteen">
                                                        Digital Detox Support
                                                    </button>
                                                </h2>
                                                <div id="collapseFourteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionHealing">
                                                    <div class="accordion-body">
                                                        Tools and structured practices to disconnect from screens and
                                                        reconnect
                                                        with
                                                        yourself more fully.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane" id="pagTwo-tab-pane" role="tabpanel" aria-labelledby="pagTwo-tab" tabindex="0">

                <section class="section-padding wellness-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 well-text">
                                <div class="wellness-content left">
                                    <h2>Ayurveda Tridosha Harmony Retreat</h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Deep Ayurvedic healing and constitutional balance</p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Ayurvedic Consultation & Dosha Assessment
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Understand your unique body-mind type with expert analysis to tailor
                                                        treatments and lifestyle practices.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Daily Abhyanga Oil Massage + Herbal Steam
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Nourishing warm oil massages followed by herbal steam to detoxify,
                                                        improve
                                                        circulation, and calm the nervous system.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Yoga Therapy Tailored to Your Constitution
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Personalized yoga sequences designed to support your dosha, enhance
                                                        balance,
                                                        and restore vitality.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        Ayurvedic Cooking Classes
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Learn to prepare healing meals aligned with your dosha using
                                                        traditional
                                                        Ayurvedic principles and seasonal ingredients.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        Herbal Teas + Detox Meals
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Freshly prepared sattvic meals and herbal infusions aid digestion,
                                                        rejuvenate cells, and support natural detox.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        Evening Shirodhara Therapy
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        A soothing oil flow over the third eye each evening to calm the
                                                        mind,
                                                        aid
                                                        sleep, and reduce mental fatigue.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                        aria-expanded="false" aria-controls="collapseSeven">
                                                        Journaling + Marma Therapy
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Gentle energy-point stimulation and reflective journaling to deepen
                                                        emotional healing and self-awareness.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                                type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-Tridosha.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding color-bg wellness-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 well-img">
                                <div class="well_img_box"><img
                                        src="{{ URL::asset('assets/wellness/Ayurveda-chakra.jpg') }}" alt=""
                                        class="w-100 object-fit-cover"> </div>
                            </div>
                            <div class="col-md-6 well-text">
                                <div class="wellness-content left">
                                    <h2>Ayurveda Chakra Awakening <span class="symbol-font mx-1"> &</span> Energy Reset
                                    </h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Emotional balance, chakra alignment & subtle energy healing through integrative
                                        practices </p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionSpiritual">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFifteen"
                                                        aria-expanded="true" aria-controls="collapseFifteen">
                                                        Chakra-Based Yoga & Meditation
                                                    </button>
                                                </h2>
                                                <div id="collapseFifteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Daily sessions aligning each chakra through breath, movement, and
                                                        focused intention for emotional clarity and flow.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSixteen"
                                                        aria-expanded="false" aria-controls="collapseSixteen">Energy
                                                        Diagnostics + Reiki </button>
                                                </h2>
                                                <div id="collapseSixteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Personalized energy scans and hands-on Reiki sessions to clear
                                                        stagnation and recharge your life force.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeventeen"
                                                        aria-expanded="false" aria-controls="collapseSeventeen">Crystal
                                                        Healing + Sound Vibration Therapy </button>
                                                </h2>
                                                <div id="collapseSeventeen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Balancing crystals and vibrational tools like tuning forks and sound
                                                        bowls to harmonize your energy centers.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEighteen"
                                                        aria-expanded="false" aria-controls="collapseEighteen">Foot
                                                        Reflexology </button>
                                                </h2>
                                                <div id="collapseEighteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Targeted pressure therapy on foot reflex zones to release stored
                                                        emotional tension and enhance energetic balance.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNineteen"
                                                        aria-expanded="false" aria-controls="collapseNineteen">Herbal
                                                        Teas +
                                                        Detox Meals </button>
                                                </h2>
                                                <div id="collapseNineteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Freshly prepared sattvic meals and herbal infusions aid digestion,
                                                        rejuvenate cells, and support natural detox.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwenty"
                                                        aria-expanded="false" aria-controls="collapseTwenty">Creative
                                                        Expression Sessions (Art or Movement) </button>
                                                </h2>
                                                <div id="collapseTwenty" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        Guided visual art or embodied movement to express blocked emotions
                                                        and ignite your inner creativity.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne"
                                                        aria-expanded="false" aria-controls="collapseTwentyOne">
                                                        Fire Circle Ritual on Closing Night
                                                    </button>
                                                </h2>
                                                <div id="collapseTwentyOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionSpiritual">
                                                    <div class="accordion-body">
                                                        A sacred closing ceremony with intention setting, mantra chanting,
                                                        and fire release for personal transformation.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal"
                                                data-bs-target="#programModal" type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding wellness-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 well-text">
                                <div class="wellness-content left">
                                    <h2>Ayurveda Detox <span class="symbol-font mx-1">&</span> Glow Program</h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Cleanse the body, boost immunity, and revive skin and digestion with Ayurvedic
                                        methods and
                                        modern self-care.</p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionADGP">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPone"
                                                        aria-expanded="true" aria-controls="collapseADGPone">
                                                        Panchakarma-lite Cleansing Rituals
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPone" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Gentle elimination practices like nasya, basti, and digestive resets
                                                        adapted
                                                        for short-term, accessible detox.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPtwo"
                                                        aria-expanded="false" aria-controls="collapseADGPtwo">
                                                        Lymphatic Drainage Facials
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPtwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Rejuvenating facial massage using herbal oils and tools to stimulate
                                                        detox
                                                        pathways and brighten the skin.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPthree"
                                                        aria-expanded="false" aria-controls="collapseADGPthree">
                                                        Detox Yoga, Dry Brushing & Self-Abhyanga
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPthree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Daily movement, exfoliation, and self-massage rituals to enhance
                                                        lymph flow,
                                                        circulation, and cellular renewal.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPfour"
                                                        aria-expanded="false" aria-controls="collapseADGPfour">
                                                        Light Ayurvedic Meals + Herbal Teas
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPfour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Simple, warm, dosha-balancing meals and digestive herbal infusions
                                                        to
                                                        restore gut health and metabolic fire.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPfive"
                                                        aria-expanded="false" aria-controls="collapseADGPfive">
                                                        Sauna or Steam Dome Detox
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPfive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Therapeutic heat therapies to encourage sweat purification, toxin
                                                        release,
                                                        and skin glow.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseADGPsix"
                                                        aria-expanded="false" aria-controls="collapseADGPsix">
                                                        Coaching on Digestive Wellness
                                                    </button>
                                                </h2>
                                                <div id="collapseADGPsix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionADGP">
                                                    <div class="accordion-body">
                                                        Expert guidance on gut health, food combining, and daily Ayurvedic
                                                        habits
                                                        for sustainable vitality.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal"
                                                data-bs-target="#programModal" type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-Detox.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding wellness-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 well-text">
                                <div class="wellness-content right">
                                    <h2>Ayurveda Mind <span class="symbol-font mx-1">-</span> Body Resilience Reset </h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Reset the nervous system, release tension, and build resilience with body-based
                                        therapies and education.</p>
                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionAMBRR">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRone"
                                                        aria-expanded="true" aria-controls="collapseAMBRRone">
                                                        Somatic Yoga + Breath-Based Therapy
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRone" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Gentle body-based practices and breathwork to regulate stress,
                                                        release
                                                        trauma, and reconnect with body wisdom.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRtwo"
                                                        aria-expanded="false" aria-controls="collapseAMBRRtwo">
                                                        Craniosacral & Polarity Balancing
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRtwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Subtle hands-on therapy to harmonize the body’s energy flow, reset
                                                        the
                                                        nervous system, and calm hyperarousal.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRthree"
                                                        aria-expanded="false" aria-controls="collapseAMBRRthree">
                                                        Nervous System Nutrition Workshops
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRthree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Education on foods and herbs that support vagal tone, gut-brain
                                                        health, and
                                                        emotional stability.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRfour"
                                                        aria-expanded="false" aria-controls="collapseAMBRRfour">
                                                        Journaling Through Trauma Release
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRfour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Guided writing prompts to help process old wounds, reframe
                                                        narratives, and
                                                        invite healing insights.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRfive"
                                                        aria-expanded="false" aria-controls="collapseAMBRRfive">
                                                        Float Pod Therapy or Vibro-Acoustic Bed
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRfive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Deep sensory immersion therapies that stimulate parasympathetic
                                                        response and
                                                        promote profound relaxation.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseAMBRRsix"
                                                        aria-expanded="false" aria-controls="collapseAMBRRsix">
                                                        Evening Sound Journeys
                                                    </button>
                                                </h2>
                                                <div id="collapseAMBRRsix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAMBRR">
                                                    <div class="accordion-body">
                                                        Sonic meditations using instruments like gongs, chimes, and bowls to
                                                        unwind
                                                        mental chatter and anchor presence.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal"
                                                data-bs-target="#programModal" type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-Mind.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding color-bg wellness-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Ayurveda-Earth.jpg') }}" alt=""
                                        class="w-100 object-fit-cover">
                                </div>
                            </div>
                            <div class="col-md-6 well-text">
                                <div class="wellness-content left">
                                    <h2>Ayurveda Earth <span class="symbol-font mx-1">&</span> Spirit Immersion</h2>
                                    <p>5 or 7 Days Package </p>
                                    <p>Grounding, spiritual renewal, and connection with nature through sensory rituals and
                                        earth-based practices.</p>

                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionAESI">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIone"
                                                        aria-expanded="true" aria-controls="accordionAESIone">
                                                        Morning Barefoot Walks & Earthing Practices
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIone" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Begin each day with mindful walks on natural ground to discharge
                                                        stress and
                                                        reconnect with Earth’s energy field.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESItwo"
                                                        aria-expanded="false" aria-controls="accordionAESItwo">
                                                        Nature Meditations Under Trees
                                                    </button>
                                                </h2>
                                                <div id="accordionAESItwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Silent, breath-led meditations among trees to enhance stillness,
                                                        deepen
                                                        awareness, and attune to the elements.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIthree"
                                                        aria-expanded="false" aria-controls="accordionAESIthree">
                                                        Treehouse Yoga Sessions
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIthree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Elevated yoga experiences surrounded by nature, promoting presence,
                                                        balance,
                                                        and organic movement flow.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIfour"
                                                        aria-expanded="false" aria-controls="accordionAESIfour">
                                                        Herbal Oil Massage with Grounding Scents
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIfour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Full-body massage using earthy essential oils like vetiver and
                                                        sandalwood to
                                                        center the senses and calm the mind.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIfive"
                                                        aria-expanded="false" aria-controls="accordionAESIfive">
                                                        Forest Healing Rituals (Storytelling + Candle Circle)
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIfive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Evening gatherings around fire or candlelight with ancestral
                                                        stories,
                                                        chants, and guided emotional release.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#accordionAESIsix"
                                                        aria-expanded="false" aria-controls="accordionAESIsix">
                                                        Plant-Based Food & Local Organic Ingredients
                                                    </button>
                                                </h2>
                                                <div id="accordionAESIsix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionAESI">
                                                    <div class="accordion-body">
                                                        Wholesome, locally sourced meals crafted to nourish the body and
                                                        align with
                                                        the energy of the natural world.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal"
                                                data-bs-target="#programModal" type="button">Enquire Now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="tab-pane" id="pagThree-tab-pane" role="tabpanel" aria-labelledby="pagThree-tab"
                tabindex="0">
                <section class="section-padding color-bg wellness-section">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 well-img">
                                <div class="well_img_box">
                                    <img src="{{ URL::asset('assets/wellness/Panchakarma-Rejuvenation.jpg') }}"
                                        alt="" class="w-100 object-fit-cover">
                                </div>
                            </div>
                            <div class="col-md-6 well-text">
                                <div class="wellness-content right">
                                    <h2>Panchakarma Rejuvenation Program </h2>
                                    <p>7 or 10 Days Package </p>
                                    <p>Deep cellular detox, rejuvenation, and doshic balance through individualized
                                        classical Ayurvedic Panchakarma therapies.</p>

                                    <div class="accordion-container">
                                        <div class="accordion" id="accordionPRP">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPone"
                                                        aria-expanded="true" aria-controls="collapsePRPone">
                                                        Consultation & Body Constitution Analysis
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPone" class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Ayurvedic pulse & tongue diagnosis Personalized detox plan and
                                                        dietary
                                                        recommendations
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPtwo"
                                                        aria-expanded="false" aria-controls="collapsePRPtwo">
                                                        Snehana (Internal & External Oleation)
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPtwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Daily Abhyanga (warm herbal oil massage) Nasya (nasal cleansing with
                                                        medicated oils)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPthree"
                                                        aria-expanded="false" aria-controls="collapsePRPthree">
                                                        Swedana (Herbal Steam Therapy)
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPthree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Oral ghee therapy for internal oleation (under supervision)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPfour"
                                                        aria-expanded="false" aria-controls="collapsePRPfour">
                                                        Shodhana (Main Cleansing Procedures)
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPfour" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Medicated herbal steam post-Abhyanga to open channels and prepare
                                                        the body
                                                        for detox
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPfive"
                                                        aria-expanded="false" aria-controls="collapsePRPfive">
                                                        Ayurvedic Detox Cuisine
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPfive" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Depending on the guest’s constitution and imbalance: Virechana
                                                        (gentle
                                                        purgation for Pitta and liver cleanse)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPsix"
                                                        aria-expanded="false" aria-controls="collapsePRPsix">
                                                        Therapeutic Support
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPsix" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Raktamokshana or leech therapy (optional, for advanced therapies)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsePRPseven"
                                                        aria-expanded="false" aria-controls="collapsePRPseven">
                                                        Integration & Rejuvenation Phase
                                                    </button>
                                                </h2>
                                                <div id="collapsePRPseven" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionPRP">
                                                    <div class="accordion-body">
                                                        Light sattvic meals (kitchari, soups, herbal teas) Digestive spice
                                                        waters
                                                        and dosha-balancing drinks on the forehead) for mental purification
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="cs-btn">
                                            <button class="btn" data-bs-toggle="modal"
                                                data-bs-target="#programModal" type="button">Enquire Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <section class="section-padding wellness-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 well-text">
                        <div class="wellness-content right">
                            <h2>Optional Add <span class="symbol-font mx-1">-</span> Ons For All Ayurveda Retreat Programs
                            </h2>
                            <!-- <p>5 or 7 Days</p> -->
                            <p>Add these enhancements to personalize your healing journey.</p>

                            <div class="accordion-container">
                                <div class="accordion" id="accordionOAO">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOAOone"
                                                aria-expanded="true" aria-controls="collapseOAOone">
                                                Digital Detox Kits
                                            </button>
                                        </h2>
                                        <div id="collapseOAOone" class="accordion-collapse collapse "
                                            data-bs-parent="#accordionOAO">
                                            <div class="accordion-body">
                                                A curated kit including a phone lock pouch, guided journal, intention cards,
                                                herbal eye pillow, and screen-free activity suggestions to support mental
                                                clarity and presence.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOAOtwo"
                                                aria-expanded="false" aria-controls="collapseOAOtwo">
                                                Custom Dosha Herbal Packs
                                            </button>
                                        </h2>
                                        <div id="collapseOAOtwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionOAO">
                                            <div class="accordion-body">
                                                Take-home kits customized by your dosha, featuring teas, medicated oils,
                                                body scrubs, and bath salts designed to extend your Ayurvedic healing
                                                post-retreat.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOAOthree"
                                                aria-expanded="false" aria-controls="collapseOAOthree">
                                                One-on-One Wellness Coaching
                                            </button>
                                        </h2>
                                        <div id="collapseOAOthree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionOAO">
                                            <div class="accordion-body">
                                                Private 60-minute sessions with a certified holistic coach or Ayurvedic
                                                expert to create a personalized lifestyle, diet, and wellness plan aligned
                                                with your goals.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOAOfour"
                                                aria-expanded="false" aria-controls="collapseOAOfour">
                                                Personal Oracle Reading or Astrology Session
                                            </button>
                                        </h2>
                                        <div id="collapseOAOfour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionOAO">
                                            <div class="accordion-body">
                                                Intuitive insights through oracle cards or personalized Vedic/Western
                                                astrology to illuminate inner patterns, life path, and energetic blockages.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOAOfive"
                                                aria-expanded="false" aria-controls="collapseOAOfive">
                                                Ayurvedic Skin & Haircare Rituals
                                            </button>
                                        </h2>
                                        <div id="collapseOAOfive" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionOAO">
                                            <div class="accordion-body">
                                                Customized head massage, facial oiling, herbal hair packs, and skincare
                                                blending sessions using ancient Ayurvedic recipes for radiant skin and
                                                healthy scalp balance.
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="cs-btn">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#programModal"
                                        type="button">Enquire Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 well-img">
                        <div class="well_img_box">
                            <img src="{{ URL::asset('assets/wellness/Add-Ons.jpg') }}" alt=""
                                class="w-100 object-fit-cover">
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
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">Do I need to have prior
                                            knowledge of Ayurveda to
                                            visit? </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">Not at all. Our team will guide you through every step
                                            of the process, from consultation to therapies. </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">What types of Ayurvedic
                                            treatments are offered?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">We offer Panchakarma, Abhyanga, Shirodhara, Swedana,
                                            herbal therapies, and personalized treatments based on your dosha. </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">Do you offer Panchakarma
                                            detox? </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">Yes, our certified Ayurvedic doctors and therapists
                                            provide customized Panchakarma detox programs ranging from 3 to 15 days. </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">Are your practitioners
                                            certified? </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">Yes, all Ayurvedic doctors and therapists are
                                            certified
                                            and experienced in traditional Ayurvedic medicine. </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">Can I choose my own
                                            treatments? </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">Treatments are based on an initial consultation with
                                            our
                                            Ayurvedic doctor to ensure the best outcome. </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">Are there yoga and
                                            meditation sessions? </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">Yes, daily group and individual yoga, pranayama, and
                                            guided meditation sessions are included. </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <div class="modal fade" id="programModal" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="offerModalLabel">Begin Your Wellness Journey</h2>
                    <!-- <p>Have a question before you embark on your path to rejuvenation? Share it below, and let us guide you with care.</p> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="programForm" class="offer-popup-form">
                        <div class="row">
                            <div class="col-12">
                                <label id="nameErr" class="text-danger"></label>
                                <div class="form-group"><input type="text" name="name" id="name"
                                        placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <label id="numberErr" class="text-danger"></label>
                                <div class="form-group"><input type="tel" name="number" id="number"
                                        placeholder="Phone No">
                                </div>
                            </div>
                            <div class="col-12">
                                <label id="emailErr" class="text-danger"></label>
                                <div class="form-group"><input type="email" name="email" id="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <label id="programErr" class="text-danger"></label>
                                <div class="form-group">
                                    <select name="program" id="program">
                                        <option value="" selected disabled>Choose Your Program </option>
                                        <option value="Ayurveda Chakra Awakening & Energy Reset">Ayurveda Chakra Awakening
                                            &
                                            Energy Reset </option>
                                        <option value="Ayurveda Detox & Glow Program">Ayurveda Detox & Glow Program
                                        </option>
                                        <option value="Ayurveda Earth & Spirit Immersion">Ayurveda Earth & Spirit
                                            Immersion
                                        </option>
                                        <option value="Ayurveda Mind - Body Resilience Reset">Ayurveda Mind - Body
                                            Resilience Reset </option>
                                        <option value="Ayurveda Soul Silence & Sound Detox">Ayurveda Soul Silence & Sound
                                            Detox </option>
                                        <option value="Ayurveda Tridosha Harmony Retreat">Ayurveda Tridosha Harmony
                                            Retreat
                                        </option>
                                        <option value="Panchakarma Rejuvenation Program">Panchakarma Rejuvenation Program
                                        </option>
                                        <option value="Optional Add - Ons For All Ayurveda Retreat Programs">Optional Add
                                            -
                                            Ons For All Ayurveda Retreat Programs </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label id="messageErr" class="text-danger"></label>
                                <textarea name="message" id="message" placeholder="Message..."></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" name="programBtn" id="programBtn" value="Submit">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
