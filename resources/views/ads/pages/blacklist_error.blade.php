@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <div class="container">
                <div class="row errors">
                    <div class="alert alert-danger">
                        <h2>Jūs esate juodajame sąraše.</h2>
                        <h5>Įtrauktieji į juodąjį sąrašą negali komentuoti skelbimų</h5>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent
@stop
