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
                            Transaction ID&emsp;: 1
                        </div>
                        <div class="fw-bold">
                            Customer&emsp;&emsp;&emsp; : Admina
                        </div>
                    </div>

                    <div>
                        <div class="fw-bold">
                            Transaction Date : 2021-05-31 00:00:00
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
                    <tr class="">
                        <td class="align-middle">
                            <div class="fw-bold ms-3">
                                Counter-Strike: Global Offensive
                            </div>
                        </td>

                        <td class="align-middle" >
                            0
                        </td>

                        <td class="align-middle" >
                            1
                        </td>

                        <td class="align-middle text-end">
                            <div class="me-3 fw-bold">
                                $30
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

                <div class="total d-flex justify-content-end fw-bold">
                    Total: $40
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
@endsection
