@extends('layouts.master')
@section('title', 'Login')

@section('content')
    <div class="container" style="min-height: 30vw">
        <div class="row h-100" style="min-height: 30vw">
            <div class="col"></div>
            <div class="col d-flex flex-column justify-content-center">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('loginError')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="text-center mb-4">
                    <div>
                        <img class="mx-auto" height="35px" src="{{\Illuminate\Support\Facades\Storage::url('Logo.png')}}" alt="">
                    </div>
                    <div>
                        <span class="fs-5"><b>Sign in to your account</b></span>
                    </div>
                </div>
                    <form action="/login" method="post" class="bg-white p-4">
                        @csrf
                        <div class="mb-3">
                            <label for="txtEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="txtEmail" name="email" aria-describedby="emailHelp" required value="{{old('email')}}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="txtPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="txtPassword" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="cbRememberMe" name="rememberMe">
                            <label class="form-check-label" for="cbRememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%">Sign In</button>
                    </form>
            </div>
            <div class="col"></div>
        </div>


    </div>

@endsection
