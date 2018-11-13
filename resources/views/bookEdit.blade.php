@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Editar Libro</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('books.update',['id'=> $book->id]) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">Título:</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="{{ $book->title }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="author" class="col-sm-4 col-form-label text-md-right">Autor:</label>
                                <div class="col-md-6">
                                    <input id="author" type="text" class="form-control" name="author"
                                           value="{{ $book->author }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="editorial" class="col-sm-4 col-form-label text-md-right">Editorial:</label>
                                <div class="col-md-6">
                                    <input id="editorial" type="text" class="form-control" name="editorial"
                                           value="{{ $book->editorial }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="synosis" class="col-sm-4 col-form-label text-md-right">Sipnosis:</label>
                                <div class="col-md-6">
                                    <input id="synosis" type="text" class="form-control" name="synosis"
                                           value="{{ $book->synosis }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-4 col-form-label text-md-right">Precio:</label>
                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" name="price" min="0" step=".01"
                                           value="{{ $book->price }}" autofocus>
                                </div>
                            </div>
                            {!! method_field('put') !!}
                            <button type="submit" class="btn btn-primary">Actualizar Libro</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
