@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Listado de Usuarios</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Email</th>
                                <th>Fecha de Nacimiento</th>
                            </tr>
                            @foreach($users as $user)
                                <tr class="buyer" data-id= {{$user->id}}>
                                    <td>{{$user->NombreCompleto}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->birth_day}}</td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


