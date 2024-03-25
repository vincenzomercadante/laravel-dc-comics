@extends('layout.app')

@section('title', $comic['series'])

@section('main-content')
<main class="comic-detail">

    {{-- thumb section --}}
    <section class="thumb-container d-flex justify-content-center">
        <div class="container-custom">
            <div class="thumb">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="category text-uppercase">{{$comic['type']}}</div>
                <div class="gallery-tab text-uppercase">view gallery</div>
            </div>
        </div>
    </section>


    {{-- main info section --}}
    <section class="main-details d-flex justify-content-center">
        <div class="container-custom d-flex justify-content-between">

            {{-- info section --}}
            <div class="info">

                {{-- title comic --}}
                <h1 class="text-uppercase fw-semibold">{{$comic['title']}}</h1>
                
                {{-- price & availability info --}}
                <div class="row g-0 mt-4">

                    {{-- price info --}}
                    <div class="col-8">
                        <div class="col-content d-flex justify-content-between py-2 px-3">
                            <h5 class="m-0 fs-6">U.S. Price: <span>{{$comic['price']}}</span></h5>
                            <h5 class="m-0 text-uppercase fs-6">available</h5>
                        </div>
                    </div>

                    {{-- availability --}}
                    <div class="col-4">
                        <div class="col-content d-flex align-items-center justify-content-center gap-1 p-2">
                            <h5 class="m-0 text-capitalize fs-6">check availability</h5>
                            <i class="fa-solid fa-caret-down fs-6"></i>
                        </div>
                    </div>
                </div>

                {{-- comic's description --}}
                <p class="mt-4">{{$comic['description']}}</p>
            </div>

            {{-- adv section --}}
            <div class="adv">
                <h3 class="m-0 text-end text-uppercase fs-5">advertisement</h3>
                <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </section>


    <div class="other-info-wrapper">
    <section class="other-info d-flex justify-content-center">
        <div class="container-custom">
            <div class="row row-cols-2 gx-5">
                <div class="col talent">
                    <h3 class="fw-semibold">Talent</h3>
                    <div class="info d-flex mt-3 py-2 gap-5">
                        <h5>Art by:</h5>
                        <p class="p-0 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi possimus aliquid tenetur, quasi illum deleniti hic dolores maiores soluta perspiciatis aliquam temporibus odit aspernatur dolore minima minus est voluptatem laboriosam!</p>
                    </div>
                    <div class="info-bottom d-flex py-2 gap-5">
                        <h5>Written by:</h5>
                        <p class="p-0 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi possimus aliquid tenetur, quasi illum deleniti hic dolores maiores soluta perspiciatis aliquam temporibus odit aspernatur dolore minima minus est voluptatem laboriosam!</p>
                    </div>
                </div>
                <div class="col specs">
                    <h3 class="fw-semibold">Specs</h3>
                    <div class="info d-flex mt-3 py-2 gap-5">
                        <h5>Series:</h5>
                        <p class="p-0 m-0">{{$comic['series']}}</p>
                    </div>
                    <div class="info-bottom d-flex py-2 gap-5">
                        <h5>U.S. Price:</h5>
                        <p class="p-0 m-0">{{$comic['price']}}</p>
                    </div>
                    <div class="info-bottom d-flex  py-2 gap-5">
                        <h5>On Sale Date:</h5>
                        <p class="p-0 m-0">{{$comic['sale_date']}}</p>
                    </div>
                </div>
            </div>
        </div>   
    </section>
        
        
        {{-- badge section --}}
        <section class="badge d-flex justify-content-center">
            <div class="container-custom">
                <div class="row row-cols-4">
                    <div class="col">
                        <div class="badge-link d-flex justify-content-between p-2">
                            <h6 class="text-uppercase">digital comics</h6>
                            <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="digital comics badge">
                        </div>
                    </div>
                    <div class="col">
                        <div class="badge-link d-flex justify-content-between p-2">
                            <h6 class="text-uppercase">shop dc</h6>
                            <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="subscriptions badge">
                        </div>
                    </div>
                    <div class="col">
                        <div class="badge-link d-flex justify-content-between p-2">
                            <h6 class="text-uppercase"> comic shop locator</h6>
                            <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="shop locator badge">
                        </div>
                    </div>
                    <div class="col">
                        <div class="badge-link d-flex justify-content-between p-2">
                            <h6 class="text-uppercase">subscriptions</h6>
                            <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="merchandise badge">
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
</main>
@endsection