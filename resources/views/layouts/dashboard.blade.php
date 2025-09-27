<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Mahligai AutoCare</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <div class="dashboard-wrapper">
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('img/logo_project.png') }}" alt="Logo" class="logo">
                <h5 class="mt-2">{{ Auth::user()->role === 'admin' ? 'Administrator' : 'Kasir' }}</h5>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#" class="active"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-receipt"></i> Transaksi</a></li>
                <li><a href="#"><i class="fa fa-chart-bar"></i> Laporan</a></li>
                @if (Auth::user()->role === 'admin')
                    <li><a href="#"><i class="fa fa-users"></i> Manajemen User</a></li>
                    <li><a href="#"><i class="fa fa-concierge-bell"></i> Manajemen Layanan</a></li>
                @endif
            </ul>
        </aside>

        <main class="main-content">
            <nav class="top-nav">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid p-4">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
