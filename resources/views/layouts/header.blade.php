<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nigerian Heritage Archive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Nigerian Heritage" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>

                    <!-- Dropdown for Ethnic Groups -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ethnicDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ethnic Groups
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ethnicDropdown">
                            <li><a class="dropdown-item" href="yoruba.html">Yoruba</a></li>
                            <li><a class="dropdown-item" href="hausa.html">Hausa</a></li>
                            <li><a class="dropdown-item" href="igbo.html">Igbo</a></li>
                        </ul>
                    </li>

                    <!-- <li class="nav-item"><a class="nav-link" href="#">Contribute</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>

                </ul>
            </div>

        </div>
    </nav>
