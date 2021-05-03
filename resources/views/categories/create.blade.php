@extends('base')
@section('title') crear @endsection
@section('content')
<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">descripción</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
