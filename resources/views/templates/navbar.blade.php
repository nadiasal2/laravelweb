<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
       @auth
        <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
        @else
        <a class="navbar-brand" href="{{ route('dashboard') }}">Website</a>
        @endauth
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            @auth
            @else
        
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.all') }}">Student</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kelas.all') }}">Kelas</a>
                    </li>
                </ul>
            @endauth



            <ul class="navbar-nav ms-auto">
                @auth
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hai {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">Dashboard</li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.page') }}">Login</a>
                    </li>
                @endauth
            </ul>

        </div>

    </div>
</nav>