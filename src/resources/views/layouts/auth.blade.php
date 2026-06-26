<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-body font-normal bg-body-bg">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}@isset($title) - {{ $title }} @endisset</title>

    <!-- CSS -->
    @livewireStyles
    @vite("resources/css/{$cssFile}")
    @stack("styles")
</head>
<body>
<div class="flex flex-wrap w-full min-h-screen">
    <div class="absolute top-4 left-14 right-14 h-auto row sm:items-end">
        <div class="col w-full sm:w-1/2">
            <a href="/">
                <img src="{{ asset("imgs/gis/logo.png") }}" alt="ГИС4БИЗ" class="h-auto w-50 xs:inline-block">
            </a>
        </div>
        <div class="col w-full sm:w-1/2 sm:text-right mt-indent-half sm:mt-0">
            @isset($route)
                <a class="text-sm font-light hover:text-primary lowercase" href="{{ route($route) }}">
                    < {{ $routeText }}
                </a>
            @endisset
        </div>
    </div>

    <div class="p-16 bg-light w-1/2 hidden lg:flex items-center justify-center">
        @isset($img)
            <img class="img-fluid" src="{{ asset($img) }}"@isset($imgText) alt={{ $imgText }} @endisset>
        @endisset
    </div>
    <div class="p-16 w-full lg:w-1/2 flex items-center justify-center">
        <div class="w-auth-form">
            {{  $slot }}
        </div>
    </div>
</div>

<!-- Scripts -->
@livewireScripts
@vite("resources/js/{$jsFile}")
@stack("scripts")
</body>
</html>
