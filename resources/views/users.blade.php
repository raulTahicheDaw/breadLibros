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
                                <th>DNI</th>
                                <th>Email</th>
                                <th>Fecha de Nacimiento</th>
                            </tr>
                            @foreach($users as $user)
                                <tr class="buyer" data-id= {{$user->id}}>
                                    <td>{{$user->NombreCompleto}}</td>
                                    <td>{{$user->dni}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->birth_day}}</td>
                                    <td>
                                        <form method="post" action="{{route('users.destroy',['id'=>$user->id])}}">
                                            @csrf
                                            {!! method_field('delete') !!}
                                            <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                        </form>
                                    </td>
                                    <td><a href='{{route('users.edit',['id'=>$user->id])}}' class="btn btn-primary btn-sm">Editar</a></td>
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


