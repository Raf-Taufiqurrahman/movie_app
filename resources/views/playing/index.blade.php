@extends('layouts.master', ['title' => 'Movies'])

@section('content')
    <div class="">
        <header class="border-bottom bg-light rounded p-3">
            <div class="container">
                <h3 class="mt-4 fw-bold">
                    <i class="fas fa-play"></i> Now Playing
                </h3>
                <p class="">List of now playing</p>
            </div>
        </header>
        <div class="p-2" style="background-color: #12466B"></div>
        <div class="container my-5 ms-5">
            <div class="row gx-5 gy-4">
                @foreach ($playingMovie as $playing)
                    <div class="col-12 col-lg-3">
                        <a href="{{ route('playing.show', $playing['id']) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm mb-2 rounded" style="width: 18rem;">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $playing['poster_path'] }}"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $playing['original_title'] }}</h5>
                                    <p class="card-text">
                                        <span class="fw-semibold">
                                            {{ Carbon\Carbon::parse($playing['release_date'])->format('M d, Y') }}
                                        </span>
                                    <p class="fw-normal text-danger">
                                        <i class="fas fa-star"></i> {{ $playing['vote_average'] }}
                                    </p>
                                    @foreach ($playing['genre_ids'] as $data)
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
