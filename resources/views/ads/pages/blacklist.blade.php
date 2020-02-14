@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <h1>Vartotojai</h1>
        @endslot
    @endcomponent
@stop
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Vartotojo ID</th>
                            <th scope="col">Vardas, Pavardė</th>
                            <th scope="col">Veiksmai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                @if($user->blacklisted)
                                    <td><a class="btn btn-primary" href="{{ url('/blacklist/remove/'.$user->id) }}">Pašalinti iš juodojo sąrašo</a></td>
                                @else
                                    <td><a class="btn btn-danger" href="{{ url('/blacklist/add/'.$user->id) }}">Pridėti į juodajį sąrašą</a></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop