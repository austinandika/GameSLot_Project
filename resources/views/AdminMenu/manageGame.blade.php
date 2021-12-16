@extends('layouts.master')
@section('title', 'Manage Game')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">

            </div>

            <div class="col-10">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session()->has('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('failed')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ route('manageGame.add') }}" class="btn btn-primary px-4">Add Game</a>
                </div>


                <table class="table">
                    <thead class="table-light">
                        <tr class="">
                            <th class="" style="width: 40%">GAME TITLE</th>
                            <th class="" style="width: 15%">PEGI RATING</th>
                            <th class="" style="width: 15%">GAME GENRE</th>
                            <th class="" style="width: 15%">GAME PRICE</th>
                            <th class="" style="width: 7.5%"></th>
                            <th class="" style="width: 7.5%"></th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white">

                        @foreach ($games as $game)
                            <tr class="">
                                <td class="align-middle" style="width: 40%">
                                    <div class="d-flex align-items-center">
                                        <div class="image" style="width: 50px; height: 50px">
                                            <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url($game->image)}}" alt="">
                                        </div>
                                        <div class="fw-bold ms-3">
                                            {{ $game->title }}
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle" style="width: 15%; vertical-align: middle">
                                    {{ $game->pegi_rating }}
                                </td>

                                <td class="align-middle" style="width: 15%;">
                                    <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                        {{ $game->gameGenre->genre }}
                                    </p>
                                </td>

                                <td class="align-middle" style="width: 15%;">
                                    {{ $game->price }}
                                </td>

                                <td class="text-center align-middle" style="width: 7.5%;">
                                    <a href="{{ route('manageGame.detail', $game->id) }}" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                </td>

                                <td class="text-center align-middle" style="width: 7.5%;">
                                    <form action="{{ route('manageGame.delete', $game->id) }}" method="POST">
                                        {{ method_field('delete') }}
                                        @csrf
                                        <button type="submit" class="btn btn-link text-decoration-none text-danger fw-bold">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
@endsection
