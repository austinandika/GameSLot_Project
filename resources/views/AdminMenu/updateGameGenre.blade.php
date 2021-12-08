@extends('layouts.master')
@section('title', 'Update Game Genre')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="mb-5">
                    <h2><b>Update Game Genre</b></h2>
                </div>

                <form action="">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <label for="txtGameGenre" class="form-label">Game Genre</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="txtGameGenre" name="txtGameGenre">
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
