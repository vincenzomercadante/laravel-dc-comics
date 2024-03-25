@extends('layout.app');

@section('title', 'COMIC - NEW COMIC')

@section('main-content')
    <main>
        <div class="container">

            {{-- main header --}}
            <div class="d-flex align-items-center justify-content-center mt-3 gap-4">
                <h1 class="m-0 text-uppercase text-center ">Create your own Comic</h1>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to List Page</a>

            </div>

            {{-- comic's creation form --}}
            <form action="{{ route('comics.store') }}" method="POST" class="row g-4 my-5 justify-content-center">
                @csrf

                <div class="col-4">
                    {{-- input for comic's title --}}
                    <label for="title" class="form-label fw-semibold fs-4">Comic's Title</label>
                    <input type="text" name="title" id="title" class="form-control"
                        placeholder="Write here the comic's title" required>
                </div>

                <div class="col-4">
                    {{-- input for comic's series --}}
                    <label for="series" class="form-label fw-semibold fs-4">Comic's Series</label>
                    <input type="text" name="series" id="series" class="form-control"
                        placeholder="Write here the comic's series" required>
                </div>

                <div class="col-4">
                    {{-- input for comic's thumb --}}
                    <label for="thumb" class="form-label fw-semibold fs-4">Comic's Thumbnail</label>
                    <input type="url" name="thumb" id="thumb" class="form-control"
                        placeholder="Write here the comic's thumbnail URL">
                </div>

                <div class="col-4">
                    {{-- input for comic's price --}}
                    <label for="price" class="form-label fw-semibold fs-4">Comic's Price</label>
                    <input type="number" name="price" id="price" class="form-control"
                        placeholder="Write here the comic's price" min="0" required>
                </div>

                <div class="col-4">
                    {{-- input for comic's type --}}
                    <label for="type" class="form-label fw-semibold fs-4">Comic's Type</label>
                    <input type="text" name="type" id="type" class="form-control"
                        placeholder="Write here the comic's type" required>
                </div>

                <div class="col-4">
                    {{-- input for comic's sale date --}}
                    <label for="sale_date" class="form-label fw-semibold fs-4">Comic's Sale Date</label>
                    <input type="date" name="sale_date" id="sale_date" class="form-control" required>
                </div>

                <div class="col-12">
                    {{-- textarea for comic's description --}}
                    <label for="description" class="form-label fw-semibold fs-4">Comic's description</label>
                    <textarea name="description" id="description" rows="5" class="form-control"
                        placeholder="Type the comics's description"></textarea>
                </div>

                <div class="col-3">
                    {{-- submit button --}}
                    <input type="submit" value="Save your Created Comic" class="btn btn-primary">
                </div>

                <div class="col-3">
                    {{-- input field reset button --}}
                    <input type="reset" value="Erase" class="btn btn-warning">
                </div>

            </form>
        </div>
    </main>

@endsection
