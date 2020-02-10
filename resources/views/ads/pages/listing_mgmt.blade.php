@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <h1>Skelbimų valdymas</h1>
        @endslot
    @endcomponent
@stop
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 add-button">
                    <div class="btn btn-primary"><a href="{{ url('/add-listing') }}">Naujas skelbimas</a></div>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped table-hover table-sm table-responsive">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kategorija</th>
                        <th scope="col">Skelbimo pavadinimas</th>
                        <th scope="col">Aprasymas</th>
                        <th scope="col">Kaina</th>
                        <th scope="col">Vieta</th>
                        <th scope="col">Koreguoti</th>
                        <th scope="col">Trinti</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($listings as $listing)
                            <td>{{$listing->category_name}}</td>
                            <td>{{$listing->listing_title}}</td>
                            <td>{{$listing->description}}</td>
                            <td>{{$listing->price}}</td>
                            <td>{{$listing->location}}</td>
                            <th><a href="/listing/update/form/{{$listing->listingId}}" class="btn btn-warning">Koreguoti</a></th>
                            <th><a href="/listing/delete/{{$listing->listingId}}" class="btn btn-danger">Šalinti</a></th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $listings->links() }}
            </div>
        </div>
    </div>
@stop
