<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MassProfit-ContactMessage</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('images/logo/icon.png') }}" type="image/x-icon" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
</head>

<body>
    <main class="container">

        <section class="max-w-2xl px-6 py-8 mx-auto bg-white">
            <header>
                <a href="#">
                    <img class="w-auto h-7 sm:h-8" src="{{ asset('images/logo/') }}" alt="">
                </a>
            </header>

            <main class="mt-8">
                <h2 class="text-gray-700 dark:text-gray-200">Hi MassProfit,</h2>

                <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                    This {{ $user->name }}
                </p>

                <div class="flex items-center mt-4 gap-x-4">
                    <p
                        class="flex items-center justify-center w-10 h-10 text-2xl font-medium text-blue-500 border border-blue-500 rounded-md dark:border-blue-400 dark:text-blue-400 ">
                        6</p>
                    <p
                        class="flex items-center justify-center w-10 h-10 text-2xl font-medium text-blue-500 border border-blue-500 rounded-md dark:border-blue-400 dark:text-blue-400 ">
                        2</p>
                    <p
                        class="flex items-center justify-center w-10 h-10 text-2xl font-medium text-blue-500 border border-blue-500 rounded-md dark:border-blue-400 dark:text-blue-400 ">
                        8</p>
                    <p
                        class="flex items-center justify-center w-10 h-10 text-2xl font-medium text-blue-500 border border-blue-500 rounded-md dark:border-blue-400 dark:text-blue-400 ">
                        9</p>
                </div>
                <p class="mt-4 leading-loose text-gray-600 dark:text-gray-300">
                    {{ $user->message }}
                </p>
                <button
                    class="px-6 py-2 mt-6 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    {{ $user->email }}
                </button>
            </main>
            <footer class="mt-8">
                <p class="mt-3 text-gray-500 dark:text-gray-400">©
                    <script>
                        new Date().getFullYear()
                    </script> Massprofit. All Rights Reserved.
                </p>
            </footer>
        </section>
    </main>
</body>

</html>
