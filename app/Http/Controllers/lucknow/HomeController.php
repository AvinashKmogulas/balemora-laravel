<?php

namespace App\Http\Controllers\lucknow;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // balemora lucknow
    public function lucknow(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Lucknow";
        $data['meta_descripton'] = "Balemora NH27 Lucknow offers a wellness sanctuary blending Ayurveda, personalized detox therapies, yoga, and spa rituals in serene, European-style cottages.";

        return view('frontend.lucknow.index', $data);
    }

    // about balemora lucknow
    public function livingBalemoraLucknow(){
        $data['title'] = "Living Balemora Wellness Retreats | Balemora Lucknow";
        $data['meta_descripton'] = "Unwind in elegant spaces offering breathtaking views, premium amenities, and warm hospitality for a peaceful retreat or luxurious escape.";

        return view('frontend.lucknow.living-balemora-lucknow', $data);
    }

    // event celebration
    public function eventCelebrationBalemoraLucknow(){
        $data['title'] = "Event Celebration Balemora Wellness Retreats | Balemora Lucknow";
        $data['meta_description'] = "Celebrate love with a breathtaking destination wedding surrounded by nature’s beauty, offering stunning venues, impeccable service, and unforgettable memories.";

        return view('frontend.lucknow.balemora-events-celebration', $data);
    }

    // balemora lucknow gallery
    public function galleryBalemoraLucknow(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Lucknow | Gallery";
        $data['meta_description'] = "Take a visual stroll through Balemora Lucknow, where every frame captures the charm, tranquility, and beauty of life amidst nature's serenity.";

        return view('frontend.lucknow.gallery', $data);
    }

    // balemora lucknow special offer
    public function specialOfferBalemoraLucknow(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Lucknow | Offers";
        $data['meta_description'] = "Exclusive offers and handpicked packages designed to elevate your stay, whether you're here to unwind, explore, or celebrate.";

        return view('frontend.lucknow.special-offer', $data);
    }

    // balemora lucknow contact
    public function contactBalemoraLucknow(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Lucknow | Contact";
        $data['meta_description'] = "Have questions or ready to plan your stay? We’re just a message away. Reach out and let us help you experience Balemora Wellness Retreats.";

        return view('frontend.lucknow.contact-us', $data);
    }
}
