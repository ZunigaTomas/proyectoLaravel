<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('libros.index')}}">Lista de libros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('libros.index')}}" class="{{request()->routeIs('libros.index') ? 'active' : ''}} nav-link">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('libros.create')}}" class="{{request()->routeIs('libros.create') ? 'active' : ''}} nav-link">Cargar libro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

