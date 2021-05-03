 (37 sloc) 1.56 KB
@extends('base')
@section('title') crear @endsection
@section('content')
<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="title" class="form-label">NOMBRE</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div>

   <label for="title" class="form-label">APELLIDO</label>
        <input type="text" class="form-control" id="title" name="author">

    </div>
    <div class="form-group has-feedback">
        <label class="form-label">PUESTO DE TRABAJO</label>
        <select name="category_id" class="form-select" required>
            <option value="">Seleccione la Categoria</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" >{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">FOTO PERSONAL</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <label for="summary" class="form-label">Resumen</label>
        <textarea name="summary" id="summary" class="form-control" cols="30" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">descripción</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
