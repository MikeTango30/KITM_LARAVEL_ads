@extends('ads/main')
@section('promo')
    @include('ads/_partials/promo')
@stop
@section('content')
    <div class="site-section bg-light">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <h2 class="h5 mb-4 text-black">Naujausi skelbimai</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12  block-13">
                    <div class="owl-carousel nonloop-block-13">

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block"
                               style="background-image: url({!! asset('images/img_1.jpg') !!})"></a>
                            <div class="lh-content">
                                <span class="category">Laukiniai žvėrys</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">New Black Car</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block"
                               style="background-image: url({!! asset('images/img_2.jpg') !!})"></a>
                            <div class="lh-content">
                                <span class="category">Naminiai gyvūnai</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Own New House</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block"
                               style="background-image: url({!! asset('images/img_3.jpg') !!})"></a>
                            <div class="lh-content">
                                <span class="category">Neegzistuojančios dievybės</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block"
                               style="background-image: url({!! asset('images/img_4jpg') !!})"></a>
                            <div class="lh-content">
                                <span class="category">Okultizmo priemonės</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">iPhone X gray</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block"
                               style="background-image: url({!! asset('images/img_1.jpg') !!})"></a>
                            <div class="lh-content">
                                <span class="category">Verbavimo į sektas pagalba</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">New Black Car</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block"
                               style="background-image: url({!! asset('images/img_2.jpg') !!})"></a>
                            <div class="lh-content">
                                <span class="category">Real Estate</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Own New House</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block"
                               style="background-image: url({!! asset('images/img_3.jpg') !!})"></a>
                            <div class="lh-content">
                                <span class="category">Furniture</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing vertical">
                            <a href="listings-single.html" class="img d-block"
                               style="background-image: url({!! asset('images/img_4.jpg') !!})"></a>
                            <div class="lh-content">
                                <span class="category">Electronics</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">iPhone X gray</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="site-section" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Populiarios kategorijos</h2>
                    <p class="color-black-opacity-5">Asmenys ieško šiose kategorijose</p>
                </div>
            </div>
            <div class="overlap-category mb-5">
                <div class="row align-items-stretch no-gutters">
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-car"></span></span>
                            <span class="caption mb-2 d-block">Laukiniai žvėrys</span>
                            <span class="number">1,921</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-closet"></span></span>
                            <span class="caption mb-2 d-block">Neegzistuojančios dievybės</span>
                            <span class="number">2,339</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-home"></span></span>
                            <span class="caption mb-2 d-block">Okultizmo priemonės</span>
                            <span class="number">4,398</span>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-open-book"></span></span>
                            <span class="caption mb-2 d-block">Verbavimo į sektas pagalba</span>
                            <span class="number">3,298</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-tv"></span></span>
                            <span class="caption mb-2 d-block">Intelektinė nuosavybė</span>
                            <span class="number">`2,932</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-pizza"></span></span>
                            <span class="caption mb-2 d-block">Naminiai gyvūnai</span>
                            <span class="number">183</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop