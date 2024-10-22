<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @livewireStyles
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        {{-- <iframe src="https://player.vimeo.com/video/1007718657?h=e29a38128e" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> --}}

        <livewire:comments video="{{$video}}" />

        @livewireScripts
    </body>
</html>
