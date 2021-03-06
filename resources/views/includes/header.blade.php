<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-white">BoolMovies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="text-white nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('movies.index') }}" class="text-white nav-link active" aria-current="page" href="#">Movies</a>
                </li>
            </ul>
        </div>
    </div>
</nav>