@extends('layouts.master')
@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">

                {{-- Profile --}}
                <div class="mb-5">
                    <h2><b>Profile</b></h2>
                </div>

                <form action="">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td style="width: 30%;">
                                <label for="txtName" class="form-label">Name</label>
                            </td>
                            <td style="width: 70%;">
                                <input type="text" class="form-control" id="txtName" name="txtName">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="fuPhoto">Photo</label>
                            </td>
                            <td class="d-flex justify-content-between">
                                <img class="card-img-top rounded-circle border border-1" style="width: 40px; height: 40px" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                <input type="file" class="form-control-file" id="fuPhoto">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="txtEmail" class="form-label">Email</label>
                            </td>
                            <td>
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" aria-describedby="emailHelp">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-label">Gender</label>
                            </td>
                            <td>
                                <span>male</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-label">Date of Birth</label>
                            </td>
                            <td>
                                <span>2000-09-22</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </form>



                {{-- Account --}}
                <div class="mb-5">
                    <h2><b>Account</b></h2>
                </div>

                <form action="">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="width: 30%;">
                                    <label for="txtOldPassword" class="form-label">Old Password</label>
                                </td>
                                <td style="width: 70%;">
                                    <input type="password" class="form-control" id="txtOldPassword" name="txtOldPassword">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtNewPassword" class="form-label">New Password</label>
                                </td>
                                <td>
                                    <input type="password" class="form-control" id="txtNewPassword" name="txtNewPassword">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtConfNewPassword" class="form-label">Confirm New Password</label>
                                </td>
                                <td>
                                    <input type="password" class="form-control" id="txtConfNewPassword" name="txtConfNewPassword">
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
