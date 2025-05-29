<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nigerian Heritage Archive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Nigerian Heritage" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>

                    <!-- Dropdown for Ethnic Groups -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ethnicDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ethnic Groups
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ethnicDropdown">
                            <li><a class="dropdown-item" href="{{ route('yoruba') }}">Yoruba</a></li>
                            <li><a class="dropdown-item" href="{{ route('hausa') }}">Hausa</a></li>
                            <li><a class="dropdown-item" href="{{ route('igbo') }}">Igbo</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>

                    @auth
                    <!-- Show user's name with dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <!-- Show Login and Register for guests -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>

            </div>

        </div>
    </nav>
