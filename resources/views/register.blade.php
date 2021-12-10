@extends('layouts.master')
@section('title', 'Login')

@section('content')
    <div class="container" style="min-height: 30vw">
        <div class="row" style="min-height: 30vw">
            <div class="col"></div>
            <div class="col d-flex flex-column justify-content-center">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="text-center mb-4">
                    <div>
                        <img class="mx-auto" height="35px" src="{{\Illuminate\Support\Facades\Storage::url('Logo.png')}}" alt="">
                    </div>
                    <div>
                        <span class="fs-5"><b>Sign up your account</b></span>
                    </div>
                </div>

                <form action="/register" method="POST" class="bg-white p-4">
                    @csrf
                    {{-- Name --}}
                    <div class="mb-3">
                        <label for="txtName" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="txtName" name="name" required value="{{ old('name') }}">
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="txtEmail" aria-describedby="emailHelp" name="email" required value="{{ old('email') }}">
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="txtPassword" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="txtPassword" name="password" required>
                    </div>

                    {{-- Gender --}}
                    <div>
                        <label class="form-label">Gender</label>
                    </div>
                    <div class="mb-3 form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="rbGenderMale" value="Male">
                        <label class="form-check-label" for="rbGenderMale">
                            Male
                        </label>
                    </div>

                    <div class="mb-3 form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="rbGenderFemale" value="Female">
                        <label class="form-check-label" for="rbGenderFemale">
                            Female
                        </label>
                    </div>

                    {{-- Date --}}
                    <div class="mb-3">
                        <label for="txtDateOfBirth" class="form-label">Date of Birth</label>
                        <input class="date form-control @error('dateOfBirth') is-invalid @enderror" type="text" id="txtDateOfBirth" name="date_of_birth" placeholder="mm/dd/yyyy" required value="{{ old('date_of_birth') }}">
                    </div>


                    <button type="submit" class="btn btn-primary" style="width: 100%">Sign Up</button>
                </form>
            </div>
            <div class="col"></div>
        </div>


    </div>

    <script type="text/javascript">
        $('.date').datepicker({
            format: 'mm/dd/yyyy'
        });
    </script>

@endsection
