<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">

        <link rel="shortcut icon" href="">
        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="./assets/js/bundle.js?ver=3.1.2"></script>
        <script src="./assets/js/scripts.js?ver=3.1.2"></script>
    </head>
    <body class="nk-body bg-lighter npc-default has-sidebar ">
        <div class="nk-app-root">
            <div class="nk-main ">
                <!-- sidebar @s -->
                <x-siderbar />
                <!-- sidebar @e -->
                <!-- wrap @s -->
                <div class="nk-wrap ">
                    <!-- main header @s -->
                    <x-header />
                    <!-- main header @e -->
                    <!-- content @s -->
                    <div class="nk-content ">
                        {{ $slot }}
                    </div>
                    <!-- content @e -->
                    <!-- footer @s -->
                    <x-footer />
                    <!-- footer @e -->
                </div>
                <!-- wrap @e -->
            </div>
        </div>
    </body>
</html>
