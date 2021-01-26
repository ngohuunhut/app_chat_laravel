<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet">
    @stack('custom-css')
    <!-- Scripts -->
    <script src="{{ mix('assets/js/app.js') }}" defer></script>
</head>

<body>
    <div class="flex flex-row h-screen antialiased text-gray-800">
        {{-- Component left --}}
        <div class="flex flex-row w-96 flex-shrink-0 bg-gray-100 p-4">
            {{-- Nav Left --}}
            @include('frontend.layouts.left_menu')
            {{-- End Nav Left --}}
            {{------------------------------------------------------------}}
            {{-- Component Conversation --}}
            @include('frontend.layouts.conversation')
            {{-- End Component Conversation --}}
            {{------------------------------------------------------------}}
        </div>
        {{-- End Component left --}}
        @yield('content')
    </div>
    @stack('custom-js')
</body>

</html>
