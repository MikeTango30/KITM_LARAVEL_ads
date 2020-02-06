@extends('ads/main')
@section('promo')
    @include('ads/_partials/listing_promo')
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

                    <h4 class="h5 mb-4 text-black">Description</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error repellat architecto maiores vero, quasi dolor, accusantium autem aliquam, ullam sequi saepe illum eaque aperiam eius amet! Necessitatibus nam sapiente obcaecati sit, fugit omnis non sunt distinctio aliquid, quibusdam excepturi hic?</p>
                    <p>Nisi, error. Molestias, quidem eaque sequi aut perspiciatis assumenda obcaecati ut quod eius reprehenderit. Iure rem numquam totam odio dignissimos aspernatur soluta. Corporis suscipit modi iste consequatur, repellat nihil omnis molestias optio. Dolorem ullam eius officia, eum ratione dolorum assumenda.</p>
                    <p>Soluta corporis blanditiis cupiditate debitis eveniet, temporibus ut cumque sint repudiandae quidem tenetur commodi id, quam. Sapiente corrupti magnam quis nulla, asperiores neque tenetur labore aperiam provident nostrum sequi delectus voluptatem fuga officiis repellat, ratione aspernatur eius repellendus modi reprehenderit.</p>
                    <p>Sapiente molestias voluptate cupiditate blanditiis quasi qui aperiam accusamus aspernatur ipsam velit nihil quaerat voluptatum soluta laboriosam ipsum veritatis at reiciendis quod voluptates, saepe harum dignissimos placeat dolorum aliquid! Quod quasi praesentium optio ratione non et sit quos excepturi cum?</p>

                    <p class="mt-3"><a href="#" class="btn btn-primary">Get In Touch</a></p>

                </div>

            </div>
        </div>
    </div>
    @stop
