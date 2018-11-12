@extends('layouts.app')
<style>
    .buyer {
        cursor: pointer !important;
    }

    .buyer:hover {
        background-color: lightgrey;
    }
</style>
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Listado de Compradores</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Email</th>
                                <th>Cumpleaños</th>
                            </tr>
                            @foreach($buyers as $buyer)
                                <tr class="buyer" data-id= {{$buyer->id}}>
                                    <td>{{$buyer->NombreCompleto}}</td>
                                    <td>{{$buyer->email}}</td>
                                    <td>{{$buyer->cumpleanos}}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $buyers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.buyer').on('click', function () {
                console.log($(this).data('id'));

                let userId = $(this).data('id');
                window.location.href = "{{URL::to('transactions')}}" + "/" + userId
            })
        })
    </script>
@endsection


