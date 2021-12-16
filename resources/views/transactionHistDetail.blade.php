@extends('layouts.master')
@section('title', 'Transaction History Detail')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">

            </div>

            <div class="col-10">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <div class="fw-bold">
                            Transaction ID&emsp;: {{ $transactions->id }}
                        </div>
                        <div class="fw-bold">
                            Customer&emsp;&emsp;&emsp; : {{ $transactions->user->name }}
                        </div>
                    </div>

                    <div>
                        <div class="fw-bold">
                            Transaction Date : {{ $transactions->date }}
                        </div>
                    </div>
                </div>


                <table class="table">
                    <thead class="table-light">
                    <tr class="">
                        <th class="" style="width: 55%">GAME TITLE</th>
                        <th class="" style="width: 15%">GAME PRICE</th>
                        <th class="" style="width: 15%">QUANTITY</th>
                        <th class="" style="width: 15%">SUB TOTAL</th>
                    </tr>
                    </thead>
                    <tbody style="background-color: white">
                        @php
                            $countTotal = 0;
                        @endphp
                        @foreach ($transactions->transactionDetail as $detail)
                            <tr class="">
                                <td class="align-middle">
                                    <div class="fw-bold ms-3">
                                        {{ $detail->game->title }}
                                    </div>
                                </td>

                                <td class="align-middle" >
                                    ${{ number_format($detail->game_price, 2,',','.') }}
                                </td>

                                <td class="align-middle" >
                                    {{ $detail->quantity }}
                                </td>

                                <td class="align-middle text-end">
                                    <div class="me-3 fw-bold">
                                        @php
                                            $countTotal += ($detail->game_price * $detail->quantity)
                                        @endphp
                                        {{ number_format($detail->game_price * $detail->quantity, 2,',','.') }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="total d-flex justify-content-end fw-bold">
                    Total: {{ number_format($countTotal, 2,',','.') }}
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
@endsection
