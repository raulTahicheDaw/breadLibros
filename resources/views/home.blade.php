@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div>
                <div class="card">
                    <div class="card-header">Listado de Libros Disponible para la venta</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Código</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Editorial</th>
                                <th>Sipnosis</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                            </tr>
                            @foreach($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->editorial}}</td>
                                    <td>{{$book->synosis}}</td>
                                    <td>{{$book->price}}€</td>
                                    <td><input class="cantidad" type="number" min="0" max="20" value="0"
                                               data-quantity= {{$book->id}}></td>
                                    <td>
                                        <input class="botonComprar btn btn-success btn-sm" type="button" data-id="{{$book->id}}"
                                               value="Comprar">
                                    </td>
                                    <td>
                                        <form method="post" action="{{route('books.destroy',['id'=>$book->id])}}">
                                            @csrf
                                            {!! method_field('delete') !!}
                                            <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                        </form>
                                    </td>
                                    <td><a href='{{route('books.edit',['id'=>$book->id])}}' class="btn btn-primary btn-sm">Editar</a></td>


                                </tr>
                            @endforeach
                        </table>
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('.botonComprar').on("click", function () {
                let bookId = $(this).data('id');
                let userId = '{{Auth::user()->id}}';
                let cantidad = $('[data-quantity="' + bookId + '"]').val();
                $.ajax({
                    url: "{{url('/transactions/comprar')}}",
                    method: "POST",
                    data: {
                        book_id: bookId,
                        buyer_id: userId,
                        quantity: cantidad,
                        _token: '{{csrf_token()}}',
                    },
                    success: function (datos) {
                        console.log('Guardado ok')
                    }
                });

            })
        })
    </script>
@endsection


