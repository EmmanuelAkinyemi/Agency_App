<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MassProfit</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('images/logo/icon.png') }}" type="image/x-icon" />


</head>

<body>
    @yield('content')

    <!-- All components in one -->
<script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/kutty.min.js"></script>
</body>
</html>
