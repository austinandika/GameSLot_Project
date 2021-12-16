@extends('layouts.master')
@section('title', 'Manage Game Genre')

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

                <table class="table">
                    <thead class="table-light">
                    <tr class="">
                        <th class="" style="width: 80%">GAME GENRE</th>
                        <th class="" style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody style="background-color: white">

                        @foreach ($genres as $genre)
                            <tr class="">
                                <td class="align-middle">
                                    <div class="fw-bold ms-3">
                                        {{ $genre->genre }}
                                    </div>
                                </td>

                                <td class="text-end align-middle">
                                    <a href="{{ route('manageGenre.detail', $genre->id) }}" class="text-decoration-none text-primary fw-bold">Edit</a>
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
