<?php

namespace App\Http\Controllers\almora;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // almora home page
    public function index(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Almora";
        $data['meta_description'] = "Balemora Almora, nestled in the Himalayan foothills, offers a serene retreat with breathtaking views, perfect for reconnecting with nature and finding inner peace.";

        return view('frontend.almora.index', $data);
    }

    // almora living
    public function livingBalemoraAlmora(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Almora | Living";
        $data['meta_description'] = "Unwind in elegant spaces offering breathtaking views, premium amenities, and warm hospitality for a peaceful retreat or luxurious escape.";

        return view('frontend.almora.balemora-living', $data);
    }

    // almora gallery
    public function galleryBalemoraAlmora(){
        $data['title'] = "Balemora Wellness Retreats | Balemora Almora | Gallery";
        $data['meta_description'] = "Take a visual stroll through Balemora Almora, where every frame captures the charm, tranquility, and beauty of life amidst nature's serenity.";

        return view('frontend.almora.gallery', $data);
    }
}
