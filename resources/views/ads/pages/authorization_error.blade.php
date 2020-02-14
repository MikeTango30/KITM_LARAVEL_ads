@extends('ads/main')
@section('promo')
  @component('ads._partials.inner_promo')
    @slot('title')
        <div class="container">
            <div class="row errors">
                <div class="alert alert-danger">
                    <h2>You are dark soulless Person.</h2>
                    <h5>Unauthorized access: Social goblins are coming for you.</h5>
                </div>
            </div>
        </div>
    @endslot
  @endcomponent
@stop
