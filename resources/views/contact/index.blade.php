@extends('base')
@section('title') contacto @endsection
@section('content')



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

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
                <th>{{ "Name" }}</th>
                <th>{{ "Email" }}</th>
                <th>{{ "Phone" }}</th>
                <th>{{ "Message" }}</th>

            </tr>
             <tbody>



        </tbody>
    </table>
@endsection


