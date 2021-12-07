@extends('layouts.master')
@section('title', 'Manage Game')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">

            </div>

            <div class="col-10">
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn btn-primary px-4">Add Game</button>
                </div>


                <table class="table">
                    <thead class="table-light">
                        <tr class="">
                            <th class="" style="width: 40%">GAME TITLE</th>
                            <th class="" style="width: 15%">PEGI RATING</th>
                            <th class="" style="width: 15%">GAME GENRE</th>
                            <th class="" style="width: 15%">GAME PRICE</th>
                            <th class="" style="width: 15%"></th>
                        </tr>
                    </thead>
                    <tbody style="background-color: white">
                        <tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr>








                        <tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr><tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr><tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr>
                        <tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr><tr class="">
                            <td class="align-middle" style="width: 40%">
                                <div class="d-flex align-items-center">
                                    <div class="image" style="width: 50px; height: 50px">
                                        <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="fw-bold ms-3">
                                        Counter-Strike: Global Offensive
                                    </div>
                                </div>
                            </td>

                            <td class="align-middle" style="width: 15%; vertical-align: middle">
                                18
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                <p class="card-text text-center border border-0 rounded-pill px-3 text-success fw-bold" style="width: fit-content; background-color: lightgreen; font-size: 14px">
                                    FPS
                                </p>
                            </td>

                            <td class="align-middle" style="width: 15%;">
                                0
                            </td>

                            <td class="text-center align-middle" style="width: 15%;">
                                <a href="" class="text-decoration-none text-primary fw-bold pe-3">Edit</a>
                                <a href="" class="text-decoration-none text-danger fw-bold ps-3">Delete</a>
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
@endsection
