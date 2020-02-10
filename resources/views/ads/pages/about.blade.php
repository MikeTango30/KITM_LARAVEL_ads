@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <h1>Apie projektą</h1>
        @endslot
    @endcomponent
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center about h-100">
            <div class="col">
                <h4>Informacija yra aktuali ir priimtina</h4>
            </div>
        </div>
    </div>

@stop
