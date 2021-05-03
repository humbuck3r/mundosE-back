@extends('base')
@section('title') editar @endsection
@section('content')
<form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field("PATCH")}}
   <div class="mb-3">
        <label for="title" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $category->name }}">
    </div>
     <div class="mb-3">
        <label for="description" class="form-label">descripción</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $category->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
