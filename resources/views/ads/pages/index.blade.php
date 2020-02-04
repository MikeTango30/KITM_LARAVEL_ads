@extends('ads/main')
{{--@section('admin')--}}
{{--<div class="row admin-menu justify-content-center">--}}
{{--<li class="col">--}}
{{--<ul>--}}
{{--<li class="active"><a href="{{ url('/newAd') }}">Įkelti naują skelbimą</a></li>--}}
{{--<li><a href="{{ url('/myAds') }}">Mano skelbimai</a></li>--}}
{{--<li class="mr-5"><a href="{{ url('/') }}">Atsijungti</a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--@stop--}}
@section('promo')
    <div class="site-blocks-cover overlay" style="background-image: url({!! asset('images/hero_2.jpg') !!});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-12">


                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center">
                            <h1 class="" data-aos="fade-up">Skelbimai</h1>
                            <p data-aos="fade-up" data-aos-delay="100">Neįtikėtini skelbimai neįprastame pasaulyje</p>
                        </div>
                    </div>

                    <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
                        <form method="post">
                            <div class="row align-items-center">
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                    <input type="text" class="form-control rounded"
                                           placeholder="Atraskite atsakymą... arba kirvį">
                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="wrap-icon">
                                        <span class="icon icon-room"></span>
                                        <input type="text" class="form-control rounded" placeholder="Vietovė">
                                    </div>

                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="select-wrap">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                        <select class="form-control rounded" name="" id="">
                                            <option value="">Visos kategorijos</option>
                                            <option value="">Laukiniai žvėrys</option>
                                            <option value="">Naminiai gyvūnai</option>
                                            <option value="">Neegzistuojančios dievybės</option>
                                            <option value="">Intelektinė nuosavybė</option>
                                            <option value="">Okultizmo priemonės</option>
                                            <option value="">Verbavimo į sektas pagalba</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                    <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="row text-left trending-search" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-12">
                            <h2 class="d-inline-block">Paieška:</h2>
                            <a href="#">Kirvis</a>
                            <a href="#">Žąsis</a>
                            <a href="#">Didelis žvynas</a>
                            <a href="#">Kempė</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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