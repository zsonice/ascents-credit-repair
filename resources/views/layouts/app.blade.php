<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Credit Repair') }}</title>

        <!-- Fonts, Icons -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
        <!-- Fonts, Icons -->

        <!-- custom css --> 
        <link  href="/css/styles.css" rel="stylesheet">
        <!-- custom css --> 

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])  
               
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>  
        <script src="/js/script.js" type="text/javascript"></script>
        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased"> 
        <div class="min-h-screen bg-gray-100"> 
                    {{-- @include('layouts.navigation')  --}}
                    @include('layouts.nav')

                    <!-- Page Heading -->
                    {{-- @if (isset($header))
                        <header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif --}}

                    <!-- Page Content -->
                    {{-- <main>
                        {{ $slot }}
                    </main> --}} 
                </div>
            </div>
        </div>
    </body>
</html>
