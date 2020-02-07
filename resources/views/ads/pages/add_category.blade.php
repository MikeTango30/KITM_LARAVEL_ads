@extends('ads/main')
@section('promo')
    @include('ads/_partials/listing_promo')
@stop
@section('content')
    <div class="container">
        <div class="row add-category">
            <h3>Naujos kategorijos pridėjimas</h3>
            <form action="#" class="p-5 bg-white w-100">
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="catName">Kategorijos pavadinimas</label>
                        <input type="text" id="catName" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Pridėti kategoriją" class="btn btn-primary py-2 px-4 text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop