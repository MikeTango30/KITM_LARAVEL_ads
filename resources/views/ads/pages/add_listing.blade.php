@extends('ads/main')
@section('promo')
    @include('ads/_partials/listing_promo')
@stop
@section('content')
    <div class="container">
        <div class="row add-category">
            <h3>Naujo skelbimo pridėjimas</h3>
            <form action="#" class="p-5 bg-white w-100">
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="catName">Kategorijos pavadinimas</label>
                        <select name="catName" id="catName" class="form-control">
                            <option selected disabled value="Kategorija">Pasirinkite kategorija</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="listingName">Skelbimo pavadinimas</label>
                        <input type="text" id="listingName" class="form-control">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="listingDescription">Skelbimo aprašymas</label>
                        <textarea type="text" id="listingDescription" class="form-control"
                                  placeholder="Skelbimo aprašymas"></textarea>
                    </div>
                    <div class="form-group custom-file offset-md-3 col-md-6 mb-3 mb-md-0">
                        <input type="file" class="custom-file-input text-black" id="listingImage" lang="lt">
                        <label class="custom-file-label text-black" for="listingImage">Pasirinkite failą</label>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="price">Kaina</label>
                        <input type="number" id="price" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="location">Vietovė</label>
                        <input type="text" id="location" class="form-control">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="email">El. paštas</label>
                        <input type="email" id="email" class="form-control">
                    </div>
                    <div class="offset-md-3 col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="phone">Telefonas</label>
                        <input type="number" id="phone" class="form-control">
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