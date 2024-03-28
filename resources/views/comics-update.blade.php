@extends('layout.app');

@section('title', 'COMIC - MODIFICA COMIC')

@section('main-content')
    <main>
        <div class="container">

            {{-- main header --}}
            <div class="d-flex align-items-center justify-content-center mt-3 gap-4">
                <h1 class="m-0 text-uppercase text-center ">Modify a specific comic</h1>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to List Page</a>

            </div>

            {{-- comic's creation form --}}
            <form action="{{ route('comics.update', $comic) }}" method="POST" class="row g-4 my-5 justify-content-center">
                @csrf

                @method('PATCH')

                <div class="col-4">
                    {{-- input for comic's title --}}
                    <label for="title" class="form-label fw-semibold fs-4">Comic's Title</label>
                    <input type="text" name="title" id="title" class="form-control" required
                        value="{{ $comic->title }}">
                </div>

                <div class="col-4">
                    {{-- input for comic's series --}}
                    <label for="series" class="form-label fw-semibold fs-4">Comic's Series</label>
                    <input type="text" name="series" id="series" class="form-control" required
                        value="{{ $comic->series }}">
                </div>

                <div class="col-4">
                    {{-- input for comic's thumb --}}
                    <label for="thumb" class="form-label fw-semibold fs-4">Comic's Thumbnail</label>
                    <input type="url" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}">
                </div>

                <div class="col-4">
                    {{-- input for comic's price --}}
                    <label for="price" class="form-label fw-semibold fs-4">Comic's Price</label>
                    <input type="number" step="0.01" name="price" id="price" class="form-control" min="0"
                        required value="{{ $comic->price }}">
                </div>

                <div class="col-4">
                    {{-- input for comic's type --}}
                    <label for="type" class="form-label fw-semibold fs-4">Comic's Type</label>
                    <input type="text" name="type" id="type" class="form-control" required
                        value="{{ $comic->type }}">
                </div>

                <div class="col-4">
                    {{-- input for comic's sale date --}}
                    <label for="sale_date" class="form-label fw-semibold fs-4">Comic's Sale Date</label>
                    <input type="date" name="sale_date" id="sale_date" class="form-control" required
                        value="{{ $comic->sale_date }}">
                </div>

                <div class="col-12">
                    {{-- textarea for comic's description --}}
                    <label for="description" class="form-label fw-semibold fs-4">Comic's description</label>
                    <textarea name="description" id="description" rows="5" class="form-control"> {{ $comic->description }} </textarea>
                </div>

                <div class="col-3 text-center">
                    {{-- submit button --}}
                    <input type="submit" value="Change the comic values" class="btn btn-primary">
                </div>

                <div class="col-3 text-center">
                    {{-- input field reset button --}}
                    <input type="reset" value="Erase" class="btn btn-warning">
                </div>

            </form>
        </div>
    </main>

@endsection
