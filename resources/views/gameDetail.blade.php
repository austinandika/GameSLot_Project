@extends('layouts.master')
@section('title', 'Game Detail')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">

            </div>

            <div class="col-10">
                <div class="card bg-dark text-white">
                    <img class="card-img" style="height: 600px" src="{{\Illuminate\Support\Facades\Storage::url('game-detail-bg.jpg')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div class="d-flex justify-content-center align-items-center flex-column h-100">
                            <div class="title mb-5">
                                <h1><b>Counter-Strike: Global Offensive</b></h1>
                            </div>

                            <div class="p-4" style="width: 90%; background: rgba(128,128,128, 0.5); border-radius: 10px">
                                <div class="row">
                                    <div class="col">
                                        <div class="align-middle mb-4" style="width: 15%;">
                                            <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                                FPS
                                            </p>
                                        </div>

                                        <div>
                                            <p>
                                                Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="d-flex justify-content-end align-items-center">
                                            <div class="me-3">
                                                <img src="{{\Illuminate\Support\Facades\Storage::url('pegiImage/pegi18.png')}}" style="height: 50px" alt="">
                                            </div>

                                            <div>
                                                <span class="fw-bold fs-3">Free</span>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end align-items-center">
                                            <button type="button" class="btn btn-primary mt-4">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-1">

            </div>
        </div>
    </div>
@endsection
