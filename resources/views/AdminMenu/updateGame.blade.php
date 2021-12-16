@extends('layouts.master')
@section('title', 'Update Game')

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

                <div class="mb-5">
                    <h2><b>Update Game</b></h2>
                </div>

                <form action="{{ route('manageGame.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}
                    <table class="table">
                        <tbody>
                            <tr>
                                <input type="hidden" value="{{ $game->id }}" name='id'>
                                <td>
                                    <label for="txtGameTitle" class="form-label">Game Title</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="txtGameTitle" name="title" value="{{$game->title}}">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="fuGamePhoto">Photo</label>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div></div>
                                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="fuGamePhoto" name="image" value="{{old('image')}}">
                                    </div>

                                    @error('image')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtGameDescription">Game Description</label>
                                </td>
                                <td>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="txtGameDescription" rows="2" name="description" >{{$game->description}}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="txtGamePrice" class="form-label">Game Price</label>
                                </td>
                                <td>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="txtGamePrice" name="price" value="{{$game->price}}">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="ddlGameGenre" class="form-label">Game Genre</label>
                                </td>
                                <td>
                                    <select id="ddlGameGenre" class="form-select" name="genre">
                                        <option value="0">Add new genre</option>
                                        @foreach ($genres as $genre)
                                            <option value="{{ $genre->id }}" {{ $genre->id == $game->game_genre_id ? 'selected' : ''}}>{{ $genre->genre }}</option>
                                        @endforeach
                                    </select>
                                    @error('genre')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr id="trGenre" class="d-none">
                                <td>
                                    <label for="txtNewGameGenre" class="form-label">New Game Genre</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control @error('new_genre') is-invalid @enderror" id="txtNewGameGenre" name="new_genre" value="{{old('new_genre')}}">
                                    @error('new_genre')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="ddlPEGIRating" class="form-label">PEGI Rating</label>
                                </td>
                                <td>
                                    @php
                                        $pegiList = [0,3,7,12,16,18]
                                    @endphp
                                    <select id="ddlPEGIRating" class="form-select @error('pegi_rating') is-invalid @enderror" name="pegi_rating">
                                        @foreach ($pegiList as $pegi)
                                            <option value="{{ $pegi }}" {{ $pegi == $game->pegi_rating ? 'selected' : ''}}>{{ $pegi }}</option>
                                        @endforeach
                                    </select>
                                    @error('pegi_rating')
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

    <script type="text/javascript">
    $(document).ready(function() {
        $('select[name="genre"]').on('change', function() {
            var genreId = $(this).val();
            var trGenre = document.getElementById("trGenre");
            if(genreId == "0") {
                trGenre.classList.remove("d-none");
            }else{
                trGenre.classList.add("d-none");
            }
        });
    });
    </script>
@endsection
