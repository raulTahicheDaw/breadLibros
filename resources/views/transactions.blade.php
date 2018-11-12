
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Listado compras realizadas por el usuario {{$transactions->buyer}}</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Libro</th>
                                <th>Cantidad</th>
                                <th>Fecha</th>
                            </tr>

                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{$transaction->title}}</td>
                                    <td>{{$transaction->quantity}}</td>
                                    <td>{{$transaction->date}}</td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
