@extends('layouts.master')
@section('title', 'Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">

            </div>

            <div class="col-10">
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn btn-primary px-4">Checkout</button>
                </div>


                <table class="table">
                    <thead class="table-light">
                    <tr class="">
                        <th class="" style="width: 50%">GAME TITLE</th>
                        <th class="" style="width: 15%">GAME PRICE</th>
                        <th class="" style="width: 15%">QUANTITY</th>
                        <th class="" style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody style="background-color: white">
                    <tr class="">
                        <td class="align-middle">
                            <div class="d-flex align-items-center">
                                <div class="image" style="width: 50px; height: 50px">
                                    <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url('csgo-bg.jpg')}}" alt="">
                                </div>
                                <div class="fw-bold ms-3">
                                    Counter-Strike: Global Offensive
                                </div>
                            </div>
                        </td>

                        <td class="align-middle" >
                            0
                        </td>

                        <td class="align-middle" >
                            <input type="number" class="form-control" id="txtQuantity" name="txtQuantity">
                        </td>

                        <td class="text-center align-middle">
                            <a href="" class="text-decoration-none text-primary fw-bold pe-3">Update</a>
                            <a href="" class="text-decoration-none text-danger fw-bold ps-3">Remove</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
@endsection
