@extends('base')
@section('title') EMconstrucciones @endsection
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
</head>
<body>


    <main>
        <div>
            <img class="img1" src="{{asset('images/Mi publicación2.jpg') }}" alt="">
        </div>

    </main>
    <footer class="foot">
            <p class="name">Alumno:Ezequiel Montero</p>
            <img class="img_foot" src="{{asset('images/icono.jpg') }}" alt="">
    </footer>


</body>
</html>



@endsection
