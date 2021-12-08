@extends('layouts.master')
@section('title', 'Transaction History')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-1">

            </div>

            <div class="col-10">
                <table class="table">
                    <thead class="table-light">
                    <tr class="">
                        <th class="" style="width: 20%">TRANSACTION ID</th>
                        <th class="text-center" style="width: 45%">TRANSACTION DATE</th>
                        <th class="" style="width: 15%">TOTAL ITEM</th>
                        <th class="" style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody style="background-color: white">
                    <tr class="">
                        <td class="align-middle">
                            <div class="fw-bold ms-3">
                                1
                            </div>
                        </td>

                        <td class="align-middle text-center" >
                            2021-05-31 00:00:00
                        </td>

                        <td class="align-middle" >
                            1
                        </td>

                        <td class="text-center align-middle">
                            <a href="" class="text-decoration-none text-primary fw-bold">Details</a>
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
