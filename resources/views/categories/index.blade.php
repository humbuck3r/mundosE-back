@extends('base')
@section('title') EM @endsection
@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="btn btn-sm  btn btn-success" href="{{ route('categories.create') }}"> Agregar puesto de trabajo</a></li>
                </ul>
                <form action="{{ route('post.search') }}" method="POST" class="d-flex">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Buscar">

                        <button class="btn btn-outline-info" type="submit"><span class="fas fa-search" aria-hidden="true"></span> Buscar</button>

                    </div>
                </form>
            </div>
        </div>
    </nav>
    <table class="table">
        <thead>
            <tr>
                <th>{{ "ID" }}</th>
                <th>{{ "PUESTO DE TRABAJO" }}</th>
                <th>{{ "DESCRIPCIÓN" }}</th>

            </tr>
        </thead>
        <tbody>
            @if (count($categories) >= 1)
                @foreach ($categories as $category)

                    <tr>
                        <td scope="row"> {{ $category->id }} </td>
                        <td scope="row"> {{ $category->name }} </td>
                        <td scope="row"> {{$category->description}}  </td>
                        <a href="{{ route("categories.edit",$category->id ) }}" class="btn btn-sm btn-warning"> Editar</a>
                            <form action="{{ route("categories.destroy", $category->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field("DELETE")}}
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea eliminar este registro?')">Eliminar</button>
                            </form>
                    </tr>
                @endforeach
            @else
                <tr><td scope="row">{{"no encontro resultados"}}</td></tr>
            @endif
        </tbody>
    </table>
@endsection


