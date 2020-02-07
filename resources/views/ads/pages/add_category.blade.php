@extends('ads/main')
@section('promo')
    @include('ads/_partials/listing_promo')
@stop
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row errors">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row add-category">
                <h3>Naujos kategorijos pridėjimas</h3>
                <form method="post" action="/store-category" class="p-5 bg-white w-100">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="catName">Kategorijos pavadinimas</label>
                            <input type="text" id="catName" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Pridėti kategoriją"
                                   class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop