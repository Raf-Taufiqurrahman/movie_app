@extends('layouts.master', ['title' => 'Detail Movie'])

@section('content')
    <div class="">
        <header class="border-bottom bg-light rounded p-3">
            <div class="container">
                <h3 class="mt-4 fw-bold">
                    {{ $movie['original_title'] }}
                </h3>
            </div>
        </header>
        <div class="p-2" style="background-color: #12466B"></div>
        <div class="container my-5 ms-5">
            <div class="row gx-5 gy-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}"
                                class="img-fluid" />
                        </div>
                        <div class="col-8">
                            <div class="card border-0 shadow-sm mb-2 rounded">
                                <div class="card-body">
                                    <h4 class="text-danger fw-semibold">
                                        {{ $movie['original_title'] }}
                                    </h4>
                                    <div class="fw-normal">
                                        <i class="fas fa-star"></i> {{ $movie['vote_average'] }} |
                                        <span
                                            class="">{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}
                                        </span>
                                        |
                                        <span>
                                            @foreach ($movie['genres'] as $genre)
                                                {{ $genre['name'] }},
                                            @endforeach
                                        </span>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="text-danger">Description : </h5>
                                        <p>{{ $movie['overview'] }}</p>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-danger">Featured Crew</p>
                                        <div class="d-flex">
                                            @foreach ($movie['credits']['crew'] as $crew)
                                                @if ($loop->index < 2)
                                                    <ul>
                                                        <li>{{ $crew['name'] }}</li>
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                                            class="btn btn-danger btn-lg">Watch Trailer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
