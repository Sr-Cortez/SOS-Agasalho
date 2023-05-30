<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TCC - HUGO</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/style.css">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')



            <!-- Page Content -->
            <main>
                {{ $slot }}
                
                @if(session('msg'))
                    <div class="msg bg-success text-light w-100 text-center position-absolute bottom-0">
                        <p class="mb-0" id="msg">{{ session('msg') }}</p>
                    </div>
                @endif

                @if(session('msg-error'))
                    <div class="bg-danger text-light w-100 text-center position-absolute bottom-0">
                        <p class="msg-error mb-0" id="msg-error">{{ session('msg-error') }}</p>
                    </div>
                @endif
                
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="/assets/js/config.js"></script>
    </body>
</html>
