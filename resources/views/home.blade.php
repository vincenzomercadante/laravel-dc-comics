{{-- adding layout blade --}}
@extends('layout.app')

{{-- tab title --}}
@section('title', 'COMICS - HOME')

@section('main-content')
{{-- home page main content --}}
<main class="home">
    <div class="container">

        {{-- page title --}}
        <h1 class="text-uppercase">current series</h1>
        
        {{-- card grid --}}
        <div class="row gy-5">
            {{-- comic grid generator --}}
            @foreach ($comics as $index => $comic)
            <div class="col-2">
                <div class="card-custom">
                    <div class="img-container">
                        {{-- route for the comic details where i give the single comic as parameter --}}
                        <a href="{{route('comic_details', $index)}}">
                            {{-- comic image --}}
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            {{-- overlay --}}
                            <div class="overlay">
                                <h2 class="text-uppercase">click for more!</h2>
                            </div>
                        </a>
                    </div>
                    {{-- comic series name --}}
                    <h3 class="mt-3 text-uppercase">{{$comic['series']}}</h3>
                </div>
            </div>
            @endforeach
        </div>

        {{-- load more button --}}
        <div class="row justify-content-center mt-5">
            <div class="col-2">
                <div class="btn-custom text-center text-uppercase">load more</div>
            </div>
        </div>
    </div>

    {{-- badge link section --}}
    <section class="badges-area py-5 mt-4">
        <div class="container d-flex align-items-center text-center">
            {{-- single badge --}}
            <a href="#" class="d-flex align-items-center gap-3 justify-content-center">
                <img src="{{Vite::asset('/resources/images/buy-comics-digital-comics.png')}}" alt="badge">
                <span class="text-uppercase">digital comics</span>
            </a>
            {{-- single badge --}}
            <a href="#" class="d-flex align-items-center gap-3 justify-content-center">
                <img src="{{Vite::asset('/resources/images/buy-comics-merchandise.png')}}" alt="badge">
                <span class="text-uppercase">dc merchandise</span>
            </a>
            {{-- single badge --}}
            <a href="#" class="d-flex align-items-center gap-3 justify-content-center">
                <img src="{{Vite::asset('/resources/images/buy-comics-subscriptions.png')}}" alt="badge">
                <span class="text-uppercase">subscription</span>
            </a>
            {{-- single badge --}}
            <a href="#" class="d-flex align-items-center gap-3 justify-content-center">
                <img src="{{Vite::asset('/resources/images/buy-comics-shop-locator.png')}}" alt="badge">
                <span class="text-uppercase">comic shop locator</span>
            </a>
            {{-- single badge --}}
            <a href="#" class="d-flex align-items-center gap-3 justify-content-center">
                <img src="{{Vite::asset('/resources/images/buy-dc-power-visa.svg')}}" alt="badge">
                <span class="text-uppercase">dc power visa</span>
            </a>
        </div>
    </section>
</main>

@endsection