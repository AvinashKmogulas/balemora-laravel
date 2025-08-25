<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['title'] = "Balemora Wellness Retreats";
        $data['meta_description'] = "Discover Balemora’s soulful retreats, where timeless traditions blend with modern well-being, offering a journey of balance reflection, and renewal.";

        return view('frontend.index', $data);
    }

    // balemora wellness
    public function balemoraWellness(){
        $data['title'] = "Balemora Wellness Retreats | Wellness";
        $data['meta_description'] = "Discover a personalized wellness journey at Balemora, offering bespoke programs for stress management, detox, anti-aging, and spiritual growth.";

        return view('frontend.wellness', $data);
    }

    // about balemora wellness
    public function aboutBalemoraWellness(){
        $data['title'] = "Balemora Wellness Retreats | About";
        $data['meta_description'] = "Learn more about our story, values, and commitment to offering exceptional experiences that blend tradition with modern luxury.";

        return view('frontend.about-us', $data);
    }

    // balemora wellness gallery
    public function balemoraGallery(){
        $data['title'] = "Balemora Wellness Retreats | Gallery";
        $data['meta_description'] = "Take a visual stroll through Balemora, where every frame captures the charm, tranquility, and beauty of life amidst nature's serenity.";

        return view('frontend.gallery', $data);
    }

    // balemora special offer
    public function balemoraSpecialOffer(){
        $data['title'] = "Balemora Wellness Retreats | Special Offer";
        $data['meta_description'] = "Exclusive offers and handpicked packages designed to elevate your stay, whether you're here to unwind, explore, or celebrate.";

        return view('frontend.specialOffer', $data);
    }

    // balemora contact us
    public function balemoraContact(){
        $data['title'] = "Balemora Wellness Retreats | Contact Us";
        $data['meta_description'] = "Have questions or ready to plan your stay? We’re just a message away. Reach out and let us help you experience Balemora Wellness Retreats.";

        return view('frontend.contact', $data);
    }
}
