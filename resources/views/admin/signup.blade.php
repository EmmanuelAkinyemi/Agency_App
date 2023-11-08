<!-- component -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Massprofit | Admin-auth</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('images/logo/icon.png') }}" type="image/x-icon" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css"
        rel="stylesheet">
</head>

<body class="bg-white rounded-lg py-5">
    <div class="container flex flex-col mx-auto bg-white rounded-lg pt-12">
        <div class="flex justify-center w-full h-full my-auto xl:gap-14 lg:justify-normal md:gap-5 draggable">
            <div class="flex items-center justify-center w-full lg:p-12">
                <div class="flex items-center xl:p-10">
                    <form method="post" action="/admin/users"
                        class="flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl">
                        @csrf
                        <h3 class="mb-3 text-4xl font-extrabold text-dark-grey-900">Sign Up</h3>
                        <p class="mb-4 text-grey-700">Register your account here</p>
                        <label for="name" class="mb-2 text-sm text-start text-grey-900">Name*</label>
                        <input value="{{ old('name') }}" name="name" id="name" type="text"
                            placeholder="john doe"
                            class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" />
                        @error('name')
                            <span class="text-base mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                        <label for="user" class="mb-2 text-sm text-start text-grey-900">Email*</label>
                        <input
                            value="{{ old('email') }}"
                            name="email" id="email"
                            type="email"
                            placeholder="mail@loopple.com"
                            class="flex items-center w-full px-5 py-4 mr-2 text-sm font-medium outline-none focus:bg-grey-400 mb-7 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" />
                        @error('email')
                            <span class="text-base mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                        <label for="password" class="mb-2 text-sm text-start text-grey-900">Password*</label>
                        <input
                            value="{{ old('password') }}"
                            name="password"
                            id="password"
                            type="password"
                            placeholder="Enter a password"
                            class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" />
                        @error('password')
                            <span class="text-base mt-1 text-red-500">{{ $message }}</span>
                        @enderror

                        <label for="passwordConfirm" class="mb-2 text-sm text-start text-grey-900">Password*</label>
                        <input value="{{ old('password_confirmation') }}" name="password_confirmation"
                            id="password_confirmation" type="password" placeholder="Confirm password"
                            class="flex items-center w-full px-5 py-4 mb-5 mr-2 text-sm font-medium outline-none focus:bg-grey-400 placeholder:text-grey-700 bg-grey-200 text-dark-grey-900 rounded-2xl" />
                        @error('password_confirmation')
                            <span class="text-base mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                        <button
                            class="w-full px-6 py-5 mb-5 text-sm font-bold leading-none text-white transition duration-300 md:w-96 rounded-2xl hover:bg-purple-blue-600 focus:ring-4 focus:ring-purple-blue-100 bg-purple-blue-500">Sign
                            Up
                        </button>

                        <span class="text-center text-base text-slate-500"> Already have an account?<a
                                class="text-purple-500" href="/admin/login">Sign in</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 my-5">
        <div class=" w-full max-w-full sm:w-3/4 mx-auto text-center">
            <p class="text-sm text-center text-slate-500 py-1">
                2023 MassProfit
            </p>
        </div>
    </div>
</body>
<html>
