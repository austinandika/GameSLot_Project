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

                    @foreach ($transactions as $transaction)
                    <tr class="">
                        <td class="align-middle">
                            <div class="fw-bold ms-3">
                                {{ $transaction->id }}
                            </div>
                        </td>

                        <td class="align-middle text-center" >
                            {{ $transaction->date }}
                        </td>

                        <td class="align-middle" >
                            {{ $transaction->transactionDetail->count() }}
                        </td>

                        <td class="text-center align-middle">
                            <form action="{{ route('transaction.historyDetail', $transaction->id) }}" method="GET">
                                <button type="submit" class="btn btn-link text-decoration-none text-primary fw-bold">Details</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-1">

            </div>
        </div>
    </div>
@endsection
