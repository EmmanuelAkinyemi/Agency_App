@extends('layout')

@section('content')
    <!-- hero section -->
    <section class="relative py-32 lg:py-36 bg-white">
        <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">
            <div class="absolute w-full lg:w-1/2 inset-y-0 lg:right-0 hidden lg:block">
                <span
                    class="absolute -left-6 md:left-4 top-24 lg:top-28 w-24 h-24 rotate-90 skew-x-12 rounded-3xl bg-purple-400 blur-xl opacity-60 lg:opacity-95 lg:block hidden"></span>
                <span class="absolute right-4 bottom-12 w-24 h-24 rounded-3xl bg-pink-600 blur-xl opacity-80"></span>
            </div>
            <span
                class="w-4/12 lg:w-2/12 aspect-square bg-gradient-to-tr from-pink-600 to-purple-400 absolute -top-5 lg:left-0 rounded-full skew-y-12 blur-2xl opacity-40 skew-x-12 rotate-90"></span>
            <div
                class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
            lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

                <h1 class="text-3xl leading-tight sm:text-4xl md:text-5xl xl:text-6xl
            font-bold text-gray-900">
            Connect with Us  Your  <span
                        class="text-transparent bg-clip-text bg-gradient-to-br from-purple-600 from-20% via-pink-600 via-30% to-purple-600">Financial Future</span>
                    Starts Here!
                </h1>
                <p class="mt-8 text-gray-700">
                  Feel free to reach out to us with any questions, concerns, or feedback. Your success is our priority, and we look forward to connecting with you. Let's build a brighter financial future together.
                </p>
                <div class="mt-10  w-full flex max-w-md mx-auto lg:mx-0">
                    <div class="flex sm:flex-row flex-col gap-5 w-full">
                        <form action=""
                            method="post"
                            class="py-1 pl-6 w-full pr-1 flex gap-3 items-center text-gray-600 shadow-lg shadow-gray-200/20
                            border border-gray-200 bg-gray-100 rounded-full ease-linear focus-within:bg-white  focus-within:border-purple-600">
                            <span class="min-w-max pr-2 border-r border-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                                </svg>
                            </span>
                            <input type="email" name="email" id="" placeholder="johndoe@gmail.com"
                                class="w-full py-3 outline-none bg-transparent">
                            <button
                                class="flex text-white justify-center items-center w-max min-w-max sm:w-max px-6 h-12 rounded-full outline-none relative overflow-hidden border duration-300 ease-linear
                                after:absolute after:inset-x-0 after:aspect-square after:scale-0 after:opacity-70 after:origin-center after:duration-300 after:ease-linear after:rounded-full after:top-0 after:left-0 after:bg-pink-700 hover:after:opacity-100 hover:after:scale-[2.5] bg-pink-600 border-transparent hover:border-pink-400">
                                <span class="hidden sm:flex relative z-[5]">
                                    Get Started
                                </span>
                                <span class="flex sm:hidden relative z-[5]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex flex-1 lg:w-1/2 lg:h-auto relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
                <img src="https://agencex-astro.vercel.app/images/image1.webp" alt="Hero image" width="2350"
                    height="2359" class="lg:absolute lg:w-full lg:h-full rounded-3xl object-cover lg:max-h-none max-h-96">
            </div>
        </div>
    </section>

    <!-- ====== Contact Section Start -->
    <section class="relative z-10 overflow-hidden bg-white py-20 lg:py-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap lg:justify-between">
                <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                    <div class="mb-12 max-w-[570px] lg:mb-0">
                        <span class="mb-4 block text-base font-semibold text-pink-600">
                            Contact Us
                        </span>
                        <h2
                            class="mb-6 text-[32px] font-bold uppercase text-dark sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                            GET IN TOUCH WITH US
                        </h2>
                        <p class="mb-9 text-base leading-relaxed text-body-color">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eius tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            adiqua minim veniam quis nostrud exercitation ullamco
                        </p>

                        <div class="mb-8 flex w-full max-w-[370px]">
                            <div
                                class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-pink-600 bg-opacity-5 text-pink-600 sm:h-[70px] sm:max-w-[70px]">
                                <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                    <path
                                        d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mb-1 text-xl font-bold text-dark">Our Location</h4>
                                <p class="text-base text-body-color">
                                    99 S.t Jomblo Park Pekanbaru 28292. Indonesia
                                </p>
                            </div>
                        </div>

                        
                        <div class="mb-8 flex w-full max-w-[370px]">
                            <div
                                class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-pink-600 bg-opacity-5 text-pink-600 sm:h-[70px] sm:max-w-[70px]">
                                <svg width="28" height="19" viewBox="0 0 28 19" class="fill-current">
                                    <path
                                        d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4 class="mb-1 text-xl font-bold text-dark">
                                    Email Address
                                </h4>
                                <p class="text-base text-body-color">support@massprofit.net</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                    <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
                        <form action="{{ url("contact_mail") }}" method="post">
                            @csrf
                            <div class="mb-6">
                                <input name="name" type="text" placeholder="Your Name"
                                    class="border-[f0f0f0] w-full rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-pink-600 focus-visible:shadow-none" />
                            </div>
                            <div class="mb-6">
                                <input name="email" type="email" placeholder="Your Email"
                                    class="border-[f0f0f0] w-full rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-pink-600 focus-visible:shadow-none" />
                            </div>

                            <div class="mb-6">
                                <textarea name="message" rows="6" placeholder="Your Message"
                                    class="border-[f0f0f0] w-full resize-none rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-pink-600 focus-visible:shadow-none"></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full rounded border border-pink-600 bg-pink-600 p-3 text-white transition hover:bg-opacity-90">
                                    Send Message
                                </button>
                            </div>
                        </form>
                        <div>
                            <span class="absolute -top-10 -right-9 z-[-1]">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                        fill="#7e1d62" />
                                </svg>
                            </span>
                            <span class="absolute -right-10 top-[90px] z-[-1]">
                                <svg width="34" height="134" viewBox="0 0 34 134" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="117.333" r="1.66667"
                                        transform="rotate(180 31.9993 117.333)" fill="#13C296" />
                                    <circle cx="31.9993" cy="102.667" r="1.66667"
                                        transform="rotate(180 31.9993 102.667)" fill="#13C296" />
                                    <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="73.3333" r="1.66667"
                                        transform="rotate(180 31.9993 73.3333)" fill="#13C296" />
                                    <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="30.6666" r="1.66667"
                                        transform="rotate(180 31.9993 30.6666)" fill="#13C296" />
                                    <circle cx="31.9993" cy="1.66665" r="1.66667"
                                        transform="rotate(180 31.9993 1.66665)" fill="#13C296" />
                                    <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="117.333" r="1.66667"
                                        transform="rotate(180 17.3333 117.333)" fill="#13C296" />
                                    <circle cx="17.3333" cy="102.667" r="1.66667"
                                        transform="rotate(180 17.3333 102.667)" fill="#13C296" />
                                    <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="73.3333" r="1.66667"
                                        transform="rotate(180 17.3333 73.3333)" fill="#13C296" />
                                    <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="30.6666" r="1.66667"
                                        transform="rotate(180 17.3333 30.6666)" fill="#13C296" />
                                    <circle cx="17.3333" cy="1.66665" r="1.66667"
                                        transform="rotate(180 17.3333 1.66665)" fill="#13C296" />
                                    <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="117.333" r="1.66667"
                                        transform="rotate(180 2.66536 117.333)" fill="#13C296" />
                                    <circle cx="2.66536" cy="102.667" r="1.66667"
                                        transform="rotate(180 2.66536 102.667)" fill="#13C296" />
                                    <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="73.3333" r="1.66667"
                                        transform="rotate(180 2.66536 73.3333)" fill="#13C296" />
                                    <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="30.6666" r="1.66667"
                                        transform="rotate(180 2.66536 30.6666)" fill="#13C296" />
                                    <circle cx="2.66536" cy="1.66665" r="1.66667"
                                        transform="rotate(180 2.66536 1.66665)" fill="#13C296" />
                                </svg>
                            </span>
                            <span class="absolute -left-7 -bottom-7 z-[-1]">
                                <svg width="107" height="134" viewBox="0 0 107 134" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="104.999" cy="132" r="1.66667" transform="rotate(180 104.999 132)"
                                        fill="#13C296" />
                                    <circle cx="104.999" cy="117.333" r="1.66667"
                                        transform="rotate(180 104.999 117.333)" fill="#13C296" />
                                    <circle cx="104.999" cy="102.667" r="1.66667"
                                        transform="rotate(180 104.999 102.667)" fill="#13C296" />
                                    <circle cx="104.999" cy="88" r="1.66667" transform="rotate(180 104.999 88)"
                                        fill="#13C296" />
                                    <circle cx="104.999" cy="73.3333" r="1.66667"
                                        transform="rotate(180 104.999 73.3333)" fill="#13C296" />
                                    <circle cx="104.999" cy="45" r="1.66667" transform="rotate(180 104.999 45)"
                                        fill="#13C296" />
                                    <circle cx="104.999" cy="16" r="1.66667" transform="rotate(180 104.999 16)"
                                        fill="#13C296" />
                                    <circle cx="104.999" cy="59" r="1.66667" transform="rotate(180 104.999 59)"
                                        fill="#13C296" />
                                    <circle cx="104.999" cy="30.6666" r="1.66667"
                                        transform="rotate(180 104.999 30.6666)" fill="#13C296" />
                                    <circle cx="104.999" cy="1.66665" r="1.66667"
                                        transform="rotate(180 104.999 1.66665)" fill="#13C296" />
                                    <circle cx="90.3333" cy="132" r="1.66667" transform="rotate(180 90.3333 132)"
                                        fill="#13C296" />
                                    <circle cx="90.3333" cy="117.333" r="1.66667"
                                        transform="rotate(180 90.3333 117.333)" fill="#13C296" />
                                    <circle cx="90.3333" cy="102.667" r="1.66667"
                                        transform="rotate(180 90.3333 102.667)" fill="#13C296" />
                                    <circle cx="90.3333" cy="88" r="1.66667" transform="rotate(180 90.3333 88)"
                                        fill="#13C296" />
                                    <circle cx="90.3333" cy="73.3333" r="1.66667"
                                        transform="rotate(180 90.3333 73.3333)" fill="#13C296" />
                                    <circle cx="90.3333" cy="45" r="1.66667" transform="rotate(180 90.3333 45)"
                                        fill="#13C296" />
                                    <circle cx="90.3333" cy="16" r="1.66667" transform="rotate(180 90.3333 16)"
                                        fill="#13C296" />
                                    <circle cx="90.3333" cy="59" r="1.66667" transform="rotate(180 90.3333 59)"
                                        fill="#13C296" />
                                    <circle cx="90.3333" cy="30.6666" r="1.66667"
                                        transform="rotate(180 90.3333 30.6666)" fill="#13C296" />
                                    <circle cx="90.3333" cy="1.66665" r="1.66667"
                                        transform="rotate(180 90.3333 1.66665)" fill="#13C296" />
                                    <circle cx="75.6654" cy="132" r="1.66667" transform="rotate(180 75.6654 132)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)"
                                        fill="#13C296" />
                                    <circle cx="75.6654" cy="117.333" r="1.66667"
                                        transform="rotate(180 75.6654 117.333)" fill="#13C296" />
                                    <circle cx="31.9993" cy="117.333" r="1.66667"
                                        transform="rotate(180 31.9993 117.333)" fill="#13C296" />
                                    <circle cx="75.6654" cy="102.667" r="1.66667"
                                        transform="rotate(180 75.6654 102.667)" fill="#13C296" />
                                    <circle cx="31.9993" cy="102.667" r="1.66667"
                                        transform="rotate(180 31.9993 102.667)" fill="#13C296" />
                                    <circle cx="75.6654" cy="88" r="1.66667" transform="rotate(180 75.6654 88)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)"
                                        fill="#13C296" />
                                    <circle cx="75.6654" cy="73.3333" r="1.66667"
                                        transform="rotate(180 75.6654 73.3333)" fill="#13C296" />
                                    <circle cx="31.9993" cy="73.3333" r="1.66667"
                                        transform="rotate(180 31.9993 73.3333)" fill="#13C296" />
                                    <circle cx="75.6654" cy="45" r="1.66667" transform="rotate(180 75.6654 45)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)"
                                        fill="#13C296" />
                                    <circle cx="75.6654" cy="16" r="1.66667" transform="rotate(180 75.6654 16)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)"
                                        fill="#13C296" />
                                    <circle cx="75.6654" cy="59" r="1.66667" transform="rotate(180 75.6654 59)"
                                        fill="#13C296" />
                                    <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)"
                                        fill="#13C296" />
                                    <circle cx="75.6654" cy="30.6666" r="1.66667"
                                        transform="rotate(180 75.6654 30.6666)" fill="#13C296" />
                                    <circle cx="31.9993" cy="30.6666" r="1.66667"
                                        transform="rotate(180 31.9993 30.6666)" fill="#13C296" />
                                    <circle cx="75.6654" cy="1.66665" r="1.66667"
                                        transform="rotate(180 75.6654 1.66665)" fill="#13C296" />
                                    <circle cx="31.9993" cy="1.66665" r="1.66667"
                                        transform="rotate(180 31.9993 1.66665)" fill="#13C296" />
                                    <circle cx="60.9993" cy="132" r="1.66667" transform="rotate(180 60.9993 132)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)"
                                        fill="#13C296" />
                                    <circle cx="60.9993" cy="117.333" r="1.66667"
                                        transform="rotate(180 60.9993 117.333)" fill="#13C296" />
                                    <circle cx="17.3333" cy="117.333" r="1.66667"
                                        transform="rotate(180 17.3333 117.333)" fill="#13C296" />
                                    <circle cx="60.9993" cy="102.667" r="1.66667"
                                        transform="rotate(180 60.9993 102.667)" fill="#13C296" />
                                    <circle cx="17.3333" cy="102.667" r="1.66667"
                                        transform="rotate(180 17.3333 102.667)" fill="#13C296" />
                                    <circle cx="60.9993" cy="88" r="1.66667" transform="rotate(180 60.9993 88)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)"
                                        fill="#13C296" />
                                    <circle cx="60.9993" cy="73.3333" r="1.66667"
                                        transform="rotate(180 60.9993 73.3333)" fill="#13C296" />
                                    <circle cx="17.3333" cy="73.3333" r="1.66667"
                                        transform="rotate(180 17.3333 73.3333)" fill="#13C296" />
                                    <circle cx="60.9993" cy="45" r="1.66667" transform="rotate(180 60.9993 45)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)"
                                        fill="#13C296" />
                                    <circle cx="60.9993" cy="16" r="1.66667" transform="rotate(180 60.9993 16)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)"
                                        fill="#13C296" />
                                    <circle cx="60.9993" cy="59" r="1.66667" transform="rotate(180 60.9993 59)"
                                        fill="#13C296" />
                                    <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)"
                                        fill="#13C296" />
                                    <circle cx="60.9993" cy="30.6666" r="1.66667"
                                        transform="rotate(180 60.9993 30.6666)" fill="#13C296" />
                                    <circle cx="17.3333" cy="30.6666" r="1.66667"
                                        transform="rotate(180 17.3333 30.6666)" fill="#13C296" />
                                    <circle cx="60.9993" cy="1.66665" r="1.66667"
                                        transform="rotate(180 60.9993 1.66665)" fill="#13C296" />
                                    <circle cx="17.3333" cy="1.66665" r="1.66667"
                                        transform="rotate(180 17.3333 1.66665)" fill="#13C296" />
                                    <circle cx="46.3333" cy="132" r="1.66667" transform="rotate(180 46.3333 132)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)"
                                        fill="#13C296" />
                                    <circle cx="46.3333" cy="117.333" r="1.66667"
                                        transform="rotate(180 46.3333 117.333)" fill="#13C296" />
                                    <circle cx="2.66536" cy="117.333" r="1.66667"
                                        transform="rotate(180 2.66536 117.333)" fill="#13C296" />
                                    <circle cx="46.3333" cy="102.667" r="1.66667"
                                        transform="rotate(180 46.3333 102.667)" fill="#13C296" />
                                    <circle cx="2.66536" cy="102.667" r="1.66667"
                                        transform="rotate(180 2.66536 102.667)" fill="#13C296" />
                                    <circle cx="46.3333" cy="88" r="1.66667" transform="rotate(180 46.3333 88)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)"
                                        fill="#13C296" />
                                    <circle cx="46.3333" cy="73.3333" r="1.66667"
                                        transform="rotate(180 46.3333 73.3333)" fill="#13C296" />
                                    <circle cx="2.66536" cy="73.3333" r="1.66667"
                                        transform="rotate(180 2.66536 73.3333)" fill="#13C296" />
                                    <circle cx="46.3333" cy="45" r="1.66667" transform="rotate(180 46.3333 45)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)"
                                        fill="#13C296" />
                                    <circle cx="46.3333" cy="16" r="1.66667" transform="rotate(180 46.3333 16)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)"
                                        fill="#13C296" />
                                    <circle cx="46.3333" cy="59" r="1.66667" transform="rotate(180 46.3333 59)"
                                        fill="#13C296" />
                                    <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)"
                                        fill="#13C296" />
                                    <circle cx="46.3333" cy="30.6666" r="1.66667"
                                        transform="rotate(180 46.3333 30.6666)" fill="#13C296" />
                                    <circle cx="2.66536" cy="30.6666" r="1.66667"
                                        transform="rotate(180 2.66536 30.6666)" fill="#13C296" />
                                    <circle cx="46.3333" cy="1.66665" r="1.66667"
                                        transform="rotate(180 46.3333 1.66665)" fill="#13C296" />
                                    <circle cx="2.66536" cy="1.66665" r="1.66667"
                                        transform="rotate(180 2.66536 1.66665)" fill="#13C296" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact Section End -->
@endsection
