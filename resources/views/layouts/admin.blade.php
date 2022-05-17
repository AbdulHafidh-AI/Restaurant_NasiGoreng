<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

    <title>FRECE</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="https://mdbgo.com/">
                <img src="assets/nasi-goreng.png" height="16" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Halaman Admin</a>
                    </li>
                </ul>
                <!-- Left links -->

                <div class="d-flex align-items-center">
                    <a href="loginToAdmin"> <button type="button" class="btn btn-link px-3 me-2">
                            Login
                        </button> </a>
                    <a href="registerAdmin"> <button type="button" class="btn btn-primary me-3">
                            Registrasi Admin
                        </button></a>

                    <a class="btn btn-dark px-3" href="/" role="button">
                        <i class="fas fa-home"></i>
                        >Guest Page</a>

                    <a href="logoutAdmin"> <button type="button" class="btn btn-danger me-3 px-3">
                            Logout
                        </button></a>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- End Of  Navbar -->
    @yield('content')

    <!--Bootstrap Js-->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/popper.min.js"></script>
    <!-- Sweetalert2 -->
    @include('sweetalert::alert')
</body>

</html>
