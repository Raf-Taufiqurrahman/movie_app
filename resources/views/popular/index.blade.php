@extends('layouts.master', ['title' => 'Movies'])

@section('content')
    <div class="">
        <header class="border-bottom bg-light rounded p-3">
            <div class="container">
                <h3 class="mt-4 fw-bold">
                    <i class="fas fa-heart"></i> Popular Movies
                </h3>
                <p class="">List of popular movie</p>
            </div>
        </header>
        <div class="p-2" style="background-color: #12466B"></div>
        <div class="container my-5 ms-5">
            <div class="row gx-5 gy-4">
                @foreach ($popularMovie as $popular)
                    <div class="col-12 col-lg-3">
                        <a href="{{ route('popular.show', $popular['id']) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm mb-2 rounded" style="width: 18rem;">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $popular['poster_path'] }}"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $popular['original_title'] }}</h5>
                                    <p class="card-text">
                                        <span class="fw-semibold">
                                            {{ Carbon\Carbon::parse($popular['release_date'])->format('M d, Y') }}
                                        </span>
                                    <p class="fw-normal text-danger">
                                        <i class="fas fa-star"></i> {{ $popular['vote_average'] }}
                                    </p>
                                    @foreach ($popular['genre_ids'] as $data)
                                        <span>{{ $genres[$data] }},</span>
                                    @endforeach
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
