<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PCTWEEZERS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-flags.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-payments.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-vendors.min.css">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }
        .center-content {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="antialiased">

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <div class="center-content">
                    <div class="container-xl">
                        <div class="row justify-content-center">
                            
                            <!-- Card para el Login -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h3 class="card-title">Iniciar sesion Usuario</h3>
                                    </div>
                                    <div class="card-body text-center" >
                                    <br>
                                    <br>
                                    <br>
                                        <a href="{{ route('login') }}" class="btn btn-primary w-100">Iniciar Sesion</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card para el Registro -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h3 class="card-title">Registro Usuario</h3>
                                    </div>
                                    <div class="card-body text-center">
                                    <br>
                                    <br>
                                    <br>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-secondary w-100">Registrarse</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endif
</div>

</body>
</html>
