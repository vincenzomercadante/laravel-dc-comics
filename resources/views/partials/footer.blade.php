<footer>
    {{-- section links --}}
    <section class="links-section ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7 mt-5">
                    <div class="row">
                        <div class="col-3">

                            {{-- dc comics links --}}
                            <section>
                                <h3 class="text-uppercase">dc comics</h3>
                                <ul class="mt-2">
                                    <li>
                                        <a href="{{route('characters')}}" class="text-capitalize">characters</a>                                      
                                    </li>
                                    <li>
                                        <a href="{{route('comics')}}" class="text-capitalize">comics</a>
                                    </li>
                                    <li>
                                        <a href="{{route('movies')}}" class="text-capitalize">movies</a>
                                    </li>
                                    <li>
                                        <a href="{{route('tv')}}" class="text-capitalize">TV</a>
                                    </li>
                                    <li>
                                        <a href="{{route('games')}}" class="text-capitalize">games</a>
                                    </li>
                                    <li>
                                        <a href="{{route('videos')}}" class="text-capitalize">videos</a>
                                    </li>
                                    <li>
                                        <a href="{{route('news')}}" class="text-capitalize">news</a>
                                    </li>
                                </ul>
                            </section>

                            {{-- shop links --}}
                            <section class="mt-4">
                                <h3 class="text-uppercase">shop</h3>
                                <ul>
                                    <li>
                                        <a href="{{route('shop')}}" class="text-capitalize">shop DC</a>
                                    </li>
                                    <li>
                                        <a href="{{route('shop')}}" class="text-capitalize">shop DC collectibles</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-3">
                            {{-- dc links --}}
                            <section>
                                <h3 class="text-uppercase">dc sites</h3>
                                <ul>
                                    <li>
                                        <a href="#" class="text-capitalize">terms of use</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">privacy policy (new)</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">ad choices</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">advertising</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">jobs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">subscriptions</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">talent workshops</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">CPSC certificates</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">ratings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">shop help</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">Contact us</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-3">
                            {{-- sites links --}}
                            <section>
                                <h3 class="text-uppercase">sites</h3>
                                <ul>
                                    <li>
                                        <a href="#" class="text-uppercase">dc</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">MAD magazine</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">DC kids</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">DC univers</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">DC power visa</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-12 mt-4">
                            <p>All site Content TM and 2020 DC Entertainment, unless otherwise <span>noted here</span>. All rights reserved. <br /> <span class="text-capitalize">cookie settings</span></p>
                        </div>
                    </div>
                </div>
                {{-- footer logo --}}
                <div class="col-5 d-flex jusitfy-content-center align-items-center">
                    <img src="{{Vite::asset("/resources/images/dc-logo-bg.png")}}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- footer-icon section --}}
    <section class="footer-icon py-4">
        <div class="container d-flex justify-content-between align-items-center">
            {{-- button section --}}
            <div class="btn-custom text-uppercase fw-semibold">sign-up now!</div>

            {{-- social links --}}
            <div class="d-flex align-items-center gap-3">
                <h4 class="text-uppercase fw-semibold">follow us</h4>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/footer-facebook.png')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/footer-pinterest.png')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/footer-twitter.png')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/footer-youtube.png')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/footer-periscope.png')}}" alt="">
                </a>
            </div>
        </div>
    </section>
</footer>