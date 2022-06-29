@extends('layouts.admin.master', ['title' => 'popular'])

@section('content')
    <div class="container-xl">
        <div class="row">
            <div class="col-8">
                <div class="card rounded-lg border border-0">
                    <div class="card-header">
                        <h3 class="card-title">Popular Movie</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Release Date</th>
                                        <th>Overview</th>
                                        <th>Genres</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card rounded-lg border border-0">
                    <div class="card-header">
                        <h3 class="card-title">Create Movie</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.popular.store') }}" enctype="multipart/form-data">
                            @csrf
                            <x-input title="Movie Name" name="title" type="text" placeholder="input movie name"
                                :value="old('title')" />
                            <x-input title="Movie Name" name="title" type="text" placeholder="input movie name"
                                :value="old('title')" />
                            <x-input title="Movie Name" name="title" type="text" placeholder="input movie name"
                                :value="old('title')" />
                            <x-input title="Movie Name" name="title" type="text" placeholder="input movie name"
                                :value="old('title')" />
                            <x-input title="Movie Name" name="title" type="text" placeholder="input movie name"
                                :value="old('title')" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
