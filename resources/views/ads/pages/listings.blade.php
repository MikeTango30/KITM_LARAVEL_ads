@extends('ads/main')
@section('promo')
    @include('ads._partials.listings_promo')
@stop
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="row">
                        @foreach($listings as $listing)
                        <div class="col-lg-6">

                            <div class="d-block d-md-flex listing vertical">
                                <a href="#" class="img d-block" style="background-image: url({!! asset('images/img_1.jpg') !!})"></a>
                                <div class="lh-content">
                                    <span class="category">{{ $listing->category_name }}</span>
                                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                    <h3><a href="#">{{ $listing->listing_title }}</a></h3>
                                    <address>{{ $listing->location }}</address>
                                    <p class="mb-0">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-secondary"></span>
                                        <span class="review">{{ $listing->rating }}</span>
                                    </p>
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>

                    <div class="col-12 mt-5 text-center">
                        <div class="custom-pagination">
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span class="more-page">...</span>
                            <a href="#">10</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop