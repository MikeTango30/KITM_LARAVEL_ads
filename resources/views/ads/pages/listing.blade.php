@extends('ads/main')
@section('promo')
    @extends('ads/_partials/inner_promo')
@section('inner_promo_title')
    <h1>{{ $listing->listing_title }}</h1>
@stop
@stop
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="mb-4" style="margin-top: -150px;">
                        <div class="slide-one-item home-slider owl-carousel">
                            <div><img src="{!! asset('images/img_2.jpg') !!}" alt="Image" class="img-fluid rounded"></div>
                            <div><img src="{!! asset('images/img_3.jpg') !!}" alt="Image" class="img-fluid rounded"></div>
                            <div><img src="{!! asset('images/img_4.jpg') !!}" alt="Image" class="img-fluid rounded"></div>
                            <div><img src="{!! asset('images/img_1.jpg') !!}" alt="Image" class="img-fluid rounded"></div>
                        </div>
                    </div>
                    <div class="row mt4">
                        <h2 class="h2 mb-4 text-black">{{ $listing->listing_title }}</h2>
                        <h5 class="h5 mb-4 text-black">{{ $listing->category_name }}</h5>
                    </div>
                    <h4 class="h5 mb-4 text-black">Aprašymas:</h4>
                    {{ $listing->description }}
                    <p class="mt-3"><a href="#" class="btn btn-primary">Susisiekite</a></p>

                </div>

            </div>
        </div>
    </div>
    @stop
