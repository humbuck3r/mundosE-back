 <link rel="shortcut icon" type="image/png" href="{{ asset('/images/icono.jpg') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/images/icono.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

<nav  class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EMconstrucciones</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("home") }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route("post.index")}}">Nuestro personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("categories.index") }}">Puestos de trabajo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("contact.index") }}">Contacto</a>
        </li>

        </li>
      </ul>
    </div>
  </div>
</nav>
