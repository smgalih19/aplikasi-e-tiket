<nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand text-dark fw-bold" href="/">e-Ticket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-dark" href="/">Home</a>
                </li>
                <li class="nav-item"></li>
                <a class="nav-link text-dark" href="/viewtiket">Lihat Tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/aboutus">Tentang Kami</a>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">
                                </i>Logout</button>
                            </form>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="btn btn-outline-secondary" role="button">Login</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
