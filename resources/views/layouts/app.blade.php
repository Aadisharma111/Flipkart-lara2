<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart Clone</title>
    <link href="{{ mix('_css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('partials.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
