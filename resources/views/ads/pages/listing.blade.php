@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <h1>{{ $listing->listing_title }}</h1>
        @endslot
    @endcomponent
@stop
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="mb-4" style="margin-top: -150px;">
                        <div class="slide-one-item home-slider owl-carousel">
                            <div><img src="{!! asset('images/img_2.jpg') !!}" alt="Image" class="img-fluid rounded"></div>
                            <div><img src="{!! asset('images/img_3.jpg') !!}" alt="Image" class="img-fluid rounded"></div>
                            <div><img src="{!! asset('images/img_4.jpg') !!}" alt="Image" class="img-fluid rounded"></div>
                            <div><img src="{!! asset('images/img_1.jpg') !!}" alt="Image" class="img-fluid rounded"></div>
                        </div>
                    </div>
                    <div class="row mt4">
                        <h2 class="h2 mb-4 text-black">{{ $listing->listing_title }}</h2>
                        <h5 class="h5 mb-4 text-black">{{ $listing->category_name }}</h5>
                    </div>
                    <h4 class="h5 mb-4 text-black">Aprašymas:</h4>
                    {{ $listing->description }}
                    <p class="mt-3"><a href="#" class="btn btn-primary">Susisiekite</a></p>

                </div>
                <div class="row w-50 bootstrap snippets mt-5">
                    <div class="col">
                        <div class="comment-wrapper">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4>Komentarai</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="/listing/{{ $listing->id }}/comment" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Rašykite komentarą..." rows="3" name="comment"></textarea>
                                        </div>
                                        <button type="submit" name="commentBtn" class="btn btn-info pull-right">Komentuoti</button>
                                    </form>
                                    <div class="clearfix"></div>
                                    <hr>
                                    @if (count($listing->comments))
                                    @foreach($listing->comments as $comment)
                                        @component('ads._partials.comment')
                                            @slot('name')
                                                <h4>{{ $comment->user->name ?? 'Anonimas' }}</h4>
                                            @endslot
                                            @slot('comment')
                                                <p>{{ $comment->comment }}</p>
                                            @endslot
                                        @endcomponent
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
