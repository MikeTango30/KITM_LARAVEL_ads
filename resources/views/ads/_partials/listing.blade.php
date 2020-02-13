<div class="d-block d-md-flex listing vertical">
    <a href="{{ url('/listing/'.$listing->id) }}" class="img d-block"
       style="background-image: url({!! asset('storage/'.$listing->img) !!})"></a>
    <div class="lh-content">
        <span class="category">{{ $listing->category_name }}</span>
        <a href="#" class="bookmark"><span class="icon-heart"></span></a>
        <h3><a class="text-black" href="{{ url('/listing/'.$listing->id) }}">{{ $listing->listing_title }}</a></h3>
        <address>{{ $listing->location }}</address>
        <p class="mb-0">
            @for($i = 0; $i < $listing->rating; $i++)
                <span class="icon-star text-warning"></span>
            @endfor
            @for($i = 0; $i < (5 - $listing->rating); $i++)
                <span class="icon-star text-secondary"></span>
            @endfor
            <span class="review">{{ $listing->rating }}</span>
        </p>
    </div>
</div>
