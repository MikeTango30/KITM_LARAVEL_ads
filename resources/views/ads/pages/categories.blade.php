@extends('ads/main')
@section('promo')
    @include('ads/_partials/listing_promo')
@stop
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 add-button">
                    <div class="btn btn-primary"><a href="{{ url('/add-category') }}">Nauja kategorija</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kategorijos</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach()--}}
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                        </tr>
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop