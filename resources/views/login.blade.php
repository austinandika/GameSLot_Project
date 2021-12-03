@extends('layouts.master')
@section('title', 'Login')

@section('content')
    <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm" style="margin: auto">
                <div class="text-center mb-4">
                    <div>
                        <img class="mx-auto" height="35px" src="{{\Illuminate\Support\Facades\Storage::url('Logo.png')}}" alt="">
                    </div>
                    <div>
                        <span class="fs-5"><b>Sign in to your account</b></span>
                    </div>
                </div>

                <form class="bg-white p-4">
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="txtPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="txtPassword">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="cbRemember">
                        <label class="form-check-label" for="cbRemember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%">Sign In</button>
                </form>
            </div>
            <div class="col-sm"></div>
        </div>


    </div>

@endsection
