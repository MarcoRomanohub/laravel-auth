<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="{{ route('home') }}">Vai al sito</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li>
                        {{ Auth::user()->name }}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
