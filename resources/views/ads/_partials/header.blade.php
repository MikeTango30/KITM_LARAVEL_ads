<header class="site-navbar container py-0 " role="banner">
    <!-- <div class="container"> -->
    <div class="row align-items-center">
        <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{ url('/') }}" class="text-white mb-0">Skelbimai</a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="active"><a href="{{ url('/') }}">Pradinis</a></li>
                    <li><a href="{{ url('/listings') }}">Skelbimai</a></li>
                    <li class="has-children">
                        <a href="{{ url('/about') }}">Apie</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/about') }}">Projekto informacija</a></li>
                        </ul>
                    </li>
                    <li class="mr-5"><a href="{{ url('/contacts') }}">Kontaktai</a></li>
                    @guest
                        <li class="ml-xl-3 login"><a href="{{ url('/login') }}"><span
                                        class="border-left pl-xl-4"></span>Prisijungti</a>
                        </li>

                        <li><a href="{{ url('/register') }}" class="cta"><span class="bg-primary text-white rounded">Registruotis</span></a>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>
        <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
        </div>
    </div>
    <div class="row justify-content-end">
        @auth
            @include('ads._partials.admin_panel')
        @endauth
    </div>
</header>