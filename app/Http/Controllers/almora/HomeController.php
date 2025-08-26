<?php

namespace App\Http\Controllers\almora;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // almora home page
    public function index(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Almora";
        $data['meta_description'] = "Balemora Almora, nestled in the Himalayan foothills, offers a serene retreat with breathtaking views, perfect for reconnecting with nature and finding inner peace.";
        $data['info'] = WebsiteInfo::query()->first();

        return view('frontend.almora.index', $data);
    }

    // almora living
    public function livingBalemoraAlmora(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Almora | Living";
        $data['meta_description'] = "Unwind in elegant spaces offering breathtaking views, premium amenities, and warm hospitality for a peaceful retreat or luxurious escape.";
        $data['info'] = WebsiteInfo::query()->first();

        return view('frontend.almora.balemora-living', $data);
    }

    // almora gallery
    public function galleryBalemoraAlmora(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Almora | Gallery";
        $data['meta_description'] = "Take a visual stroll through Balemora Almora, where every frame captures the charm, tranquility, and beauty of life amidst nature's serenity.";
        $data['info'] = WebsiteInfo::query()->first();

        return view('frontend.almora.gallery', $data);
    }

    // special offers
    public function specialOfferBalemoraAlmora(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Almora | Special Offers";
        $data['meta_description'] = "Exclusive offers and handpicked packages designed to elevate your stay, whether you're here to unwind, explore, or celebrate.";
        $data['info'] = WebsiteInfo::query()->first();

        return view('frontend.almora.special-offer', $data);
    }

    // balemora contact
    public function contactBalemoraAlmora(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Almora | Contact";
        $data['meta_description'] = "Have questions or ready to plan your stay? We’re just a message away. Reach out and let us help you experience Balemora Wellness Retreats.";
        $data['info'] = WebsiteInfo::query()->first();

        return view('frontend.almora.contact-us', $data);
    }
}
