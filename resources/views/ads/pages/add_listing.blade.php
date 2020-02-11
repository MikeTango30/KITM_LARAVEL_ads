@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <h1>Pridėkite naują skelbimą</h1>
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
            <form method="post" action="/store-listing" class="p-5 bg-white w-100" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="catName">Kategorijos pavadinimas</label>
                        <select id="catName" name="catId" class="form-control">
                            <option selected disabled value="Kategorija">Pasirinkite kategorija</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="listingName">Skelbimo pavadinimas</label>
                        <input type="text" id="listingName" class="form-control" name="title">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="listingDescription">Skelbimo aprašymas</label>
                        <input type="text" id="listingDescription" class="form-control" name="description">
                    </div>
                    <div class="form-group custom-file offset-md-3 col-md-6 mb-3 mb-md-0">
                        <input type="file" class="custom-file-input text-black" name="img" id="listingImage" lang="lt">
                        <label class="custom-file-label text-black" for="listingImage">Pasirinkite failą</label>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="price">Kaina</label>
                        <input type="number" id="price" name="price" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="location">Vietovė</label>
                        <input type="text" id="location" name="location" class="form-control">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="email">El. paštas</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="phone">Telefonas</label>
                        <input type="number" id="phone" name="phone" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6">
                        <input type="submit" value="Įkelti skelbimą" class="btn btn-primary py-2 px-4 text-white">
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
