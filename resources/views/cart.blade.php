@extends('layouts.master')
@section('title', 'Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">

            </div>

            <div class="col-10">
                <form action="{{ route('transaction.checkout') }}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-end mb-3">
                        <button type="submit" class="btn btn-primary px-4">Checkout</button>
                    </div>
                </form>



                <table class="table">
                    <thead class="table-light">
                    <tr class="">
                        <th class="" style="width: 50%">GAME TITLE</th>
                        <th class="" style="width: 15%">GAME PRICE</th>
                        <th class="" style="width: 15%">QUANTITY</th>
                        <th class="" style="width: 10%"></th>
                        <th class="" style="width: 10%"></th>
                    </tr>
                    </thead>
                    <tbody style="background-color: white">

                    @if (is_array($cartList) || is_object($cartList))
                        @foreach ($cartList as $cart)
                            <tr class="">
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">
                                        <div class="image" style="width: 50px; height: 50px">
                                            <img class="h-100 w-100 card-img-top rounded-circle border border-1" style="" src="{{\Illuminate\Support\Facades\Storage::url($cart['image'])}}" alt="">
                                        </div>
                                        <div class="fw-bold ms-3">
                                            {{ $cart['title'] }}
                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle" >
                                    {{ $cart['price'] }}
                                </td>

                                <form action="{{ route('cart.update') }}" method="POST">
                                        {{method_field('put')}}
                                        @csrf
                                    <td class="align-middle" >
                                        <input type="number" class="form-control" id="txtQuantity" name="txtQuantity" value="{{ $cart['quantity'] }}">
                                    </td>

                                    <td class="text-center align-middle">
                                        <input type="hidden" value="{{ $cart['id'] }}" name="id">

                                        <button type="submit" class="btn btn-link text-decoration-none text-primary fw-bold">Update</button>

                                    </td>
                                </form>

                                <td class="text-center align-middle">
                                    <form action="{{ route('cart.remove', $cart['id']) }}" method="POST">
                                        {{ method_field('delete') }}
                                        @csrf
                                        <button type="submit" class="btn btn-link text-decoration-none text-danger fw-bold">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
@endsection
