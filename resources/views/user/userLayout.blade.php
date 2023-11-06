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
    <section class="min-h-screen bg-gray-900">

        <div class="">
            <div class="p-4"> <!-- Add content here, remove div below -->
                @yield('content')
            </div>
        </div> <!-- Sidebar Backdrop -->
    </section>

    <!-- All components in one -->
    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/kutty.min.js"></script>
</body>

</html>
