@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <h1>Kategorijų valdymas</h1>
        @endslot
    @endcomponent
@stop
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 add-button">
                    <div class="btn btn-primary"><a href="{{ url('/add-category') }}">Pridėti naują kategorija</a></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Kategorijos ID</th>
                            <th scope="col">Kategorijos</th>
                            <th scope="col">Šalinimas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td><a class="btn btn-primary" href="{{ url('/categories/delete/'.$category->id) }}">Šalinti</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
