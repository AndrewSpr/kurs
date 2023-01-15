<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Курсова робота</title>
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>

<body>
    <div class="content-wrapper">
        @include('inc.header')
        <div class="container clearfix">
            <main class="content">
                @yield('content')
            </main>
        </div>
        @include('inc.footer')
    </div>
    <script src="{{ mix('js/main.js') }}"></script>
</body>

</html>
