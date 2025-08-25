@extends('frontend.almora.common.mainlayout')
@section('content')
    <main>

        <section class="inner-pages-banner almora-gallery-bg">
            <div class="container">
                <h2>Our Gallery</h2>
            </div>
        </section>

        <section class="section-padding color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/almora-gallery/1.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/almora-gallery/1.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/almora-gallery/2.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/almora-gallery/2.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/almora-gallery/3.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/almora-gallery/3.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/almora-gallery/4.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/almora-gallery/4.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/almora-gallery/5.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/almora-gallery/5.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/almora-gallery/6.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/almora-gallery/6.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/almora-gallery/7.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/almora-gallery/7.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                        <div class="item">
                            <a href="{{ URL::asset('assets/images/almora-gallery/8.jpg') }}" data-lightbox="image-1"
                                data-title="My caption">
                                <img src="{{ URL::asset('assets/images/almora-gallery/8.jpg') }}" alt=""
                                    class="w-100 horizontal-border">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <video width="100%" height="100%" controls
                            poster="{{ URL::asset('assets/images/almora-gallery-bg.jpg') }}">
                            <source src="{{ URL::asset('assets/videos/IMG_1089.MP4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
