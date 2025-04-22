<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 56px; /* match navbar height */
            left: 0;
            width: 250px;
            padding-top: 1rem;
            z-index: 100;
            overflow-y: auto;
        }
        .main-content {
            margin-left: 250px; /* match sidebar width */
            padding: 1rem;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('employees.index') }}">Employee Management</a>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row align-items-center">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-link text-white">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <nav class="bg-light sidebar border-end">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link me-3" href="{{ route('employees.index') }}">Employees Lists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" href="{{ route('user.index') }}">Users Accounts Lists</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link me-3" href="{{ route('partsums.index') }}">Machine Problem 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" href="{{ route('bottle.collector.index') }}">Machine Problem 2</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
