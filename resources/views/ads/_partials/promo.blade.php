<div class="site-blocks-cover overlay" style="background-image: url({!! asset('images/hero_2.jpg') !!});"
     data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-12">


                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                        <h1 class="" data-aos="fade-up">Skelbimai</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Neįtikėtini skelbimai neįprastame pasaulyje</p>
                    </div>
                </div>

                <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
                    <form action="/search">
                        <div class="row align-items-center">
                            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                <input type="text" class="form-control rounded"
                                       placeholder="Atraskite atsakymą..." name="search">
                            </div>
                            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                <div class="wrap-icon">
                                    <span class="icon icon-room"></span>
                                    <input type="text" class="form-control rounded" placeholder="Vietovė" name="location">
                                </div>

                            </div>
                            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                <div class="select-wrap">
                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                    <select class="form-control rounded" name="category" id="">
                                        <option value="">Visos kategorijos</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                <input type="submit" class="btn btn-primary btn-block rounded" value="Ieškoti" name="searchBtn">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
