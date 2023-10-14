<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'BlogPromass') }}</title>
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('assets') }}/css/material-dashboard.min.css?v=3.0.6" rel="stylesheet" />
    <link href="{{ asset('css') }}/main.css" rel="stylesheet" />

    
    @stack('js')
</head>

<body class="d-flex flex-column vh-100">
    @include('common/navbar')

    <div class="container flex-grow-1">
       <main class="my-4">
            @yield('content')
        </main>
    </div>

    @include('common/footer')

    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- <script src="{{ asset('assets') }}/js/plugins/multistep-form.js"></script> -->
    <script src="{{ asset('assets') }}/js/choices.min.js"></script>
    <script src="{{ asset('assets') }}/js/material-dashboard.min.js?v=3.0.0"></script>
</body>
</html>
