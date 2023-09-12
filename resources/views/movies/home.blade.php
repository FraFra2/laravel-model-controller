@extends('layouts.main')

@section('page-title', 'Movies')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

<h1>
    <div class="container">
        <div class="row">
        @foreach ($movies as $movie)
        <div class="col-6">
            <div class="card my-2">
                <div class="card-body d-flex flex-column">
                    <h1>
                        {{ $movie->title }}
                    </h1>
                    <h2>
                        {{ $movie->original_title }}
                    </h2>
                    <h3>
                        {{ $movie->nationality }}
                    </h3>
                    <h3>
                        {{ $movie->date }}
                    </h3>
                    <h3>
                        {{ $movie->vote }}
                    </h3>
                </div>
            </div>
        </div>

        @endforeach
        </div>
    </div>
</h1>



{{-- <img src="{{ Vite::asset('resources/img/gatto.jpg') }}" class="img-fluid" alt=""> --}}
@endsection
