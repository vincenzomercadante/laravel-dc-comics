<header>
    {{-- first line section --}}
    <section>
        <div class='container d-flex justify-content-end'>
            <span class="d-inline-block me-5">DC POWER 
                <span class="text-top align-top text-uppercase">sm</span>
                VISA
                <i class="fa-regular fa-registered"></i>
            </span>
            <span class="d-inline-block text-uppercase">
                additional dc sites
                <i class="fa-solid fa-caret-down"></i>
            </span>
        </div>
    </section>

    {{-- navbar section --}}
    <section class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            
            {{-- site logo --}}
            <img src="{{Vite::asset('/resources/images/dc-logo.png')}}" class="img-fluid" alt="">

            {{-- site navbar --}}
            <ul class="flex-grow-1 ms-5">

                <li @class(['active' => Route::currentRouteName()=='characters'])>
                    <a href="{{route('characters')}}" class="text-uppercase mx-3 fw-semibold">characters</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='comics' || Route::currentRouteName()=='comic_details'])>
                    <a href="{{route('comics')}}" class="text-uppercase mx-3 fw-semibold">comics</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='movies'])>
                    <a href="{{route('movies')}}" class="text-uppercase mx-3 fw-semibold">movies</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='tv'])>
                    <a href="{{route('tv')}}" class="text-uppercase mx-3 fw-semibold">tv</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='games'])>
                    <a href="{{route('games')}}" class="text-uppercase mx-3 fw-semibold">games</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='collectibles'])>
                    <a href="{{route('collectibles')}}" class="text-uppercase mx-3 fw-semibold">collectibles</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='videos'])>
                    <a href="{{route('videos')}}" class="text-uppercase mx-3 fw-semibold">videos</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='fans'])>
                    <a href="{{route('fans')}}" class="text-uppercase mx-3 fw-semibold">fans</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='news'])>
                    <a href="{{route('news')}}" class="text-uppercase mx-3 fw-semibold">news</a>
                </li>
                <li @class(['active' => Route::currentRouteName()=='shop'])>
                    <a href="{{route('shop')}}" class="text-uppercase mx-3 fw-semibold">
                        shop
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                </li>
            </ul>

            {{-- search bar --}}
            <div class="d-flex align-items-center justify-content-end search-bar">
                <input type="search" name="item" id="item" placeholder="search">
                <i class="fa-solid fa-magnifying-glass ms-2"></i>
            </div>
        </div>
    </section>

    {{-- jumbotron --}}
    <section class="hero"></section>
</header>