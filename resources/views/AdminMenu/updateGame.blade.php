@extends('layouts.master')
@section('title', 'Update Game')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="mb-5">
                    <h2><b>Update Game</b></h2>
                </div>

                <form action="">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="txtGameTitle" class="form-label">Game Title</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="txtGameTitle" name="txtGameTitle" value="{{ $game->title }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="fuGamePhoto">Photo</label>
                                </td>
                                <td class="d-flex justify-content-between">
                                    <img class="card-img-top rounded-circle border border-1" style="width: 40px; height: 40px" src="{{\Illuminate\Support\Facades\Storage::url($game->image)}}" alt="">
                                    <input type="file" class="form-control-file" id="fuGamePhoto">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtGameDescription">Game Description</label>
                                </td>
                                <td>
                                    <textarea class="form-control" id="txtGameDescription" rows="2">{{ $game->description }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtGamePrice" class="form-label">Game Price</label>
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="txtGamePrice" name="txtGamePrice" value="{{ $game->price }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="ddlGameGenre" class="form-label">Game Genre</label>
                                </td>
                                <td>
                                    <select id="ddlGameGenre" class="form-select">
                                        <option value="0" selected>Add new genre</option>
                                        @foreach ($genres as $genre)
                                            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtNewGameGenre" class="form-label">New Game Genre</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="txtNewGameGenre" name="txtNewGameGenre">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="ddlPEGIRating" class="form-label">PEGI Rating</label>
                                </td>
                                <td>
                                    <select id="ddlPEGIRating" class="form-select">
                                        <option selected>0</option>
                                        <option>3</option>
                                        <option>7</option>
                                        <option>12</option>
                                        <option>16</option>
                                        <option>18</option>
                                    </select>
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
