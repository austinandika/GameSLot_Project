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

                <form action="{{ route('manageGenre.update') }}" method="POST">
                    @csrf
                    {{ method_field('put') }}
                    <table class="table">
                        <tbody>
                        <tr>
                            <input type="hidden" class="form-control" id="txtGenreId" name="id" value="{{ $genre->id }}">
                            <td>
                                <label for="txtGameGenre" class="form-label">Game Genre</label>
                            </td>
                            <td>
                                <input type="text" class="form-control @error('genre') is-invalid @enderror" id="txtGameGenre" name="genre" value="{{ $genre->genre }}">
                                @error('genre')
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
