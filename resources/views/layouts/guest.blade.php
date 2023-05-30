<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TCC - HUGO</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/style.css">
        <!-- <link rel="stylesheet" href="/assets/css/font-awesome/css/font-awesome.min.css"> -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <main class="main-register">
                <header class="position-absolute" style="width:100%;">
                    <nav class="navbar navbar-expand-lg bg-dark pt-1 pe-4 pb-1 ps-4">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="./"><img width="60" height="60" src="assets/images/img-header.png" alt="logo"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item me-lg-4">
                                        <a class="nav-link text-light active" aria-current="page" href="/">Home</a>
                                    </li>
                                    <li class="nav-item me-lg-4">
                                        <a class="nav-link text-light" href="login">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="register">Criar conta</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <br>

                {{ $slot }}

            </main>    
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </body>
</html>
