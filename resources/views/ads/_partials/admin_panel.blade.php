<nav class="site-navigation position-relative text-right" role="navigation">
    <div class="row admin-menu justify-content-end">
        <ul class="site-menu js-clone-nav d-none d-lg-block">
            <li><a href="{{ url('/add-category') }}">Nauja kategorija</a></li>
            <li><a href="{{ url('/add-listing') }}">Naujas skelbimas</a></li>
            {{--<li><a href="{{ url('/myAds') }}">Mano skelbimai</a></li>--}}
            <li class="mr-5"><a href="{{ url('/') }}">Atsijungti</a></li>
        </ul>
    </div>
</nav>
