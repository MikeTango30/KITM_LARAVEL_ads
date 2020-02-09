@extends('ads/main')
@section('promo')
    @extends('ads/_partials/inner_promo')
@section('inner_promo_title')
    <h1>Visi skelbimai</h1>
    <p class="mb-0">Susirask savo įgeidį</p>
@stop
@stop
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        @foreach($listings as $listing)
                            <div class="col-lg-3">
                                @include('ads._partials.listing')
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-5 justify-content-center">
                        {{ $listings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
