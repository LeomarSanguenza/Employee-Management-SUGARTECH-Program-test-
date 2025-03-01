<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('employees.index') }}">Employee Management</a>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row">
                    <li class="nav-item">
                        <a class="nav-link text-white me-3" href="{{ route('partsums.index') }}">Machine Problem 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-3" href="{{ route('bottle.collector.index') }}">Machine Problem 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-3" href="{{ route('employees.index') }}">Employees Lists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('user.index') }}">Users Accounts Lists</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-link text-white">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
