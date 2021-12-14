@extends('layouts.master')
@section('title', 'Home')

@section('content')
    <div class="container">
        @if(session()->has('isAddedToCart'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('isAddedToCart')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach ($games as $game)
                <a href="/game/{{ $game->id }}" class="text-decoration-none">
                    <div class="col">
                        <div class="card bg-white border border-light" style="height: 350px">
                            <div class="image mx-auto mt-4" style="width: 100px; height: 100px">
                                <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url($game->image)}}" alt="">
                            </div>

                            <div class="card-body">
                                <h6 class="card-title text-center text-dark">{{ $game->title }}</h6>
                                <p class="card-text text-center border border-0 rounded-pill px-3 mx-auto mt-4 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    {{ $game->gameGenre->genre }}
                                </p>
                            </div>

                            <hr>

                            <p class="card-text text-center px-3 mx-auto mb-3 fw-bold text-dark">
                                @if ($game->price == 0)
                                    FREE
                                @else
                                    {{ '$ '.$game->price }}
                                @endif
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="my-3 d-flex justify-content-between">
            <div>
                Showing <b>{{ $games->firstItem() }}</b> to <b>{{ $games->lastItem() }}</b> of <b>{{ $games->total() }}</b> results
            </div>

            <div>
                {{$games->links()}}
            </div>
        </div>
    </div>
@endsection
