@extends('layouts.master')
@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
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

                {{-- Profile --}}
                <div class="mb-5">
                    <h2><b>Profile</b></h2>
                </div>

                <form action="{{ route('profile.updateProfile') }}" method="POST" enctype="multipart/form-data">
                    {{method_field('put')}}
                    @csrf
                    <table class="table">
                        <tbody>
                        <tr>
                            <td style="width: 30%;">
                                <label for="txtName" class="form-label">Name</label>
                            </td>
                            <td style="width: 70%;">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="txtName" name="name" value="{{ $profile->name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="fuPhoto">Photo</label>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <img class="card-img-top rounded-circle border border-1" style="width: 40px; height: 40px" src="{{\Illuminate\Support\Facades\Storage::url($profile->photo == null ? 'profileImage/default-profile.png' : $profile->photo)}}" alt="">
                                    <input type="file" class="form-control-file" id="fuPhoto" name="profile_photo">
                                </div>

                                @error('profile_photo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="txtEmail" class="form-label">Email</label>
                            </td>
                            <td>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="txtEmail" name="email" aria-describedby="emailHelp" value="{{ $profile->email }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-label">Gender</label>
                            </td>
                            <td>
                                <span>{{ $profile->gender }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-label">Date of Birth</label>
                            </td>
                            <td>
                                <span>{{ $profile->date_of_birth }}</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>



                {{-- Account --}}
                <div class="mb-5">
                    <h2><b>Account</b></h2>
                </div>

                <form action="{{ route('profile.updatePassword') }}" method="POST">
                    {{method_field('put')}}
                    @csrf
                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="width: 30%;">
                                    <label for="txtOldPassword" class="form-label">Old Password</label>
                                </td>
                                <td style="width: 70%;">
                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="txtOldPassword" name="old_password">
                                    @error('old_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtNewPassword" class="form-label">New Password</label>
                                </td>
                                <td>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="txtNewPassword" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtConfNewPassword" class="form-label">Confirm New Password</label>
                                </td>
                                <td>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="txtConfNewPassword" name="password_confirmation">

                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
