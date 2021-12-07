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
                        <span class="fs-5"><b>Sign up your account</b></span>
                    </div>
                </div>

                <form class="bg-white p-4">
                    {{-- Name --}}
                    <div class="mb-3">
                        <label for="txtName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="txtName">
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp">
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="txtPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="txtPassword">
                    </div>

                    {{-- Gender --}}
                    <div>
                        <label class="form-label">Gender</label>
                    </div>
                    <div class="mb-3 form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rbGender" id="rbGenderMale">
                        <label class="form-check-label" for="rbGenderMale">
                            Male
                        </label>
                    </div>

                    <div class="mb-3 form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rbGender" id="rbGenderFemale">
                        <label class="form-check-label" for="rbGenderFemale">
                            Female
                        </label>
                    </div>

                    {{-- Date --}}
                    <div class="mb-3">
                        <label for="txtDateOfBirth" class="form-label">Date of Birth</label>
                        <input class="date form-control" type="text" id="txtDateOfBirth" placeholder="mm/dd/yyyy">
                    </div>


                    <button type="submit" class="btn btn-primary" style="width: 100%">Sign Up</button>
                </form>
            </div>
            <div class="col-sm"></div>
        </div>


    </div>

    <script type="text/javascript">
        $('.date').datepicker({
            format: 'mm/dd/yyyy'
        });
    </script>

@endsection