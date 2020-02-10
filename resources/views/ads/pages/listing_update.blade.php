@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <h1>Koreguokite skelbimą</h1>
        @endslot
    @endcomponent
@stop
@section('content')
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
            <h3>Naujo skelbimo pridėjimas</h3>
            <form method="post" action="/update/{{ $listing->id }}" class="p-5 bg-white w-100">
                @csrf
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="catName">Kategorijos pavadinimas</label>
                        <select id="catName" name="category_id" class="form-control">
                            <option selected value="{{ $listing->category_id }}">{{ $currentCategory->category_name }}</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="listingName">Skelbimo pavadinimas</label>
                        <input type="text" id="listingName" class="form-control" name="listing_title" value="{{ $listing->listing_title }}">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="listingDescription">Skelbimo aprašymas</label>
                        <input type="text" id="listingDescription" class="form-control" name="description" value="{{ $listing->description }}">
                    </div>
                    <div class="form-group custom-file offset-md-3 col-md-6 mb-3 mb-md-0">
                        <input type="file" class="custom-file-input text-black" name="img" id="listingImage" lang="lt">
                        <label class="custom-file-label text-black" for="listingImage">Pasirinkite failą</label>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="price">Kaina</label>
                        <input type="text" id="price" name="price" class="form-control" value="{{ $listing->price }}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="location">Vietovė</label>
                        <input type="text" id="location" name="location" class="form-control" value="{{ $listing->location }}">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="email">El. paštas</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $listing->email }}">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="phone">Telefonas</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ $listing->phone }}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6">
                        <input type="submit" value="Išsaugoti" class="btn btn-primary py-2 px-4 text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
