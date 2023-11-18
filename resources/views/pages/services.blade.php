    @extends('layout')
    @section('content')
        <!-- ====== Hero Section Start -->
        <div class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 lg:w-5/12  ">
                        <div class="lg:ml-auto lg:text-right">
                            <div class="relative z-10 inline-block pt-11 lg:pt-0">
                                <img src="{{ asset('images/hero/hero-image-01.png') }}" alt="hero"
                                    class="max-w-full lg:ml-auto" />
                                <span class="absolute -left-8 -bottom-8 z-[-1]">
                                    <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2.5" cy="2.5" r="2.5" fill="#d0087d" />
                                        <circle cx="2.5" cy="24.5" r="2.5" fill="#d0087d" />
                                        <circle cx="2.5" cy="46.5" r="2.5" fill="#d0087d" />
                                        <circle cx="2.5" cy="68.5" r="2.5" fill="#d0087d" />
                                        <circle cx="2.5" cy="90.5" r="2.5" fill="#d0087d" />
                                        <circle cx="24.5" cy="2.5" r="2.5" fill="#d0087d" />
                                        <circle cx="24.5" cy="24.5" r="2.5" fill="#d0087d" />
                                        <circle cx="24.5" cy="46.5" r="2.5" fill="#d0087d" />
                                        <circle cx="24.5" cy="68.5" r="2.5" fill="#d0087d" />
                                        <circle cx="24.5" cy="90.5" r="2.5" fill="#d0087d" />
                                        <circle cx="46.5" cy="2.5" r="2.5" fill="#d0087d" />
                                        <circle cx="46.5" cy="24.5" r="2.5" fill="#d0087d" />
                                        <circle cx="46.5" cy="46.5" r="2.5" fill="#d0087d" />
                                        <circle cx="46.5" cy="68.5" r="2.5" fill="#d0087d" />
                                        <circle cx="46.5" cy="90.5" r="2.5" fill="#d0087d" />
                                        <circle cx="68.5" cy="2.5" r="2.5" fill="#d0087d" />
                                        <circle cx="68.5" cy="24.5" r="2.5" fill="#d0087d" />
                                        <circle cx="68.5" cy="46.5" r="2.5" fill="#d0087d" />
                                        <circle cx="68.5" cy="68.5" r="2.5" fill="#d0087d" />
                                        <circle cx="68.5" cy="90.5" r="2.5" fill="#d0087d" />
                                        <circle cx="90.5" cy="2.5" r="2.5" fill="#d0087d" />
                                        <circle cx="90.5" cy="24.5" r="2.5" fill="#d0087d" />
                                        <circle cx="90.5" cy="46.5" r="2.5" fill="#d0087d" />
                                        <circle cx="90.5" cy="68.5" r="2.5" fill="#d0087d" />
                                        <circle cx="90.5" cy="90.5" r="2.5" fill="#d0087d" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="hidden px-4 lg:block lg:w-1/12"></div>
                    <div class="w-full px-4 lg:w-6/12">
                        <div class="hero-content">
                            <h1
                                class="mb-3 text-4xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[42px]">
                                Our <br />
                                Services <br />
                            </h1>
                            <p class="mb-8 max-w-[480px] text-base text-body-color">
                                We’re here to create rewarding opportunities and amazing spaces around the globe where people
                                can achieve their ambitions. In doing so, we are building a better tomorrow for our clients, our
                                people and our communities.
                                <br>
                                Collaboration with us is a high-tech process of integrating each client into MassProfit unique
                                investor community to strengthen the financial stability of each of them and to obtain a stable
                                profit without risk of losing capital.
                            </p>
                            <ul class="flex flex-wrap items-center">
                                <li>
                                    <a href="javascript:void(0)"
                                        class="inline-flex items-center justify-center rounded-lg bg-pink-600 py-4 px-6 text-center text-base font-normal text-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10">
                                        Get Started
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Hero Section End -->

        <!-- ====== Services Section Start -->
        <section class="bg-slate-50 pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
            <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
                    <span class="mb-2 block text-lg font-semibold text-pink-600">
                    Our Investment Products
                    </span>
                    <h2
                    class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
                    >
                    What We Offer
                    </h2>
                    <p class="text-base text-body-color">
                    Below are the variety of product that help us offer our services to you seamlessly.
                    </p>
                </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div
                    class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
                >
                    <div
                    class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-pink-600"
                    >
                    <svg
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                        d="M18.6746 0.26779C10.0637 -1.33065 1.86522 4.39279 0.266779 13.0037C-0.506658 17.1803 0.421467 21.3568 2.79334 24.8631C5.21678 28.3693 8.82615 30.6897 12.9512 31.4631C13.9308 31.6178 14.859 31.7209 15.7871 31.7209C23.2637 31.7209 29.9668 26.3584 31.359 18.6756C32.9574 10.0647 27.234 1.81466 18.6746 0.26779ZM29.6574 18.3662C29.5543 18.8819 29.4512 19.449 29.2965 19.9131L16.7668 15.2209V1.81466C17.2824 1.86623 17.8496 1.91779 18.3652 2.02091C25.9449 3.4131 30.998 10.735 29.6574 18.3662ZM14.9105 1.81466V14.9115H1.86522C1.91678 14.3959 1.96834 13.8287 2.07147 13.3131C3.20584 6.86779 8.67147 2.22716 14.9105 1.81466ZM13.3121 29.6584C9.65115 28.9881 6.45428 26.9256 4.28865 23.8318C2.79334 21.7178 1.96834 19.2428 1.81365 16.7678H15.6324L28.5746 21.6147C26.048 27.3381 19.7574 30.8443 13.3121 29.6584Z"
                        fill="white"
                        />
                    </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark">
                    ASSETS
                    </h4>
                    <p class="text-body-color">
                    We have selected top 20 assets into our investment, and these selection have the highest performance.
                    </p>
                </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div
                    class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
                >
                    <div
                    class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-pink-600"
                    >
                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M429.9 186.7v406.4h407.5c-4 34.1-12.8 67.3-26.2 99.1-18.4 43.6-44.8 82.7-78.5 116.3-33.6 33.6-72.8 60-116.4 78.4-45.1 19.1-93 28.7-142.5 28.7-49.4 0-97.4-9.7-142.5-28.7-43.6-18.4-82.7-44.8-116.4-78.4-33.6-33.6-60-72.7-78.4-116.3-19.1-45.1-28.7-93-28.7-142.4s9.7-97.3 28.7-142.4c18.4-43.6 44.8-82.7 78.4-116.3 33.6-33.6 72.8-60 116.4-78.4 31.7-13.2 64.7-21.9 98.6-26m44-46.6c-226.4 0-410 183.5-410 409.8s183.6 409.8 410 409.8 410-183.5 410-409.8v-0.8h-410v-409z" fill="#ffffff"></path><path d="M566.1 80.5c43.7 1.7 86.4 10.6 127 26.4 44 17.1 84.2 41.8 119.6 73.5 71.7 64.1 117.4 151.7 128.7 246.7 1.2 9.9 2 20 2.4 30.2H566.1V80.5m-16-16.3v409h410c0-16.3-1-32.3-2.9-48.1C933.1 221.9 760 64.2 550.1 64.2zM264.7 770.4c-23.1-23.1-42.3-49.1-57.3-77.7l-14.7 6.5c35.7 68.2 94 122.7 165 153.5l4.3-15.6c-36.3-16-69.1-38.4-97.3-66.7z" fill="#e736e2"></path></g></svg>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark">
                        FOREX
                    </h4>
                    <p class="text-body-color">
                        Our Forex instrument contains 50+ FX currency pairs that are best performers and with favorable volatility.
                    </p>
                </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div
                    class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
                >
                    <div
                    class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-pink-600"
                    >
                    <svg
                        width="35"
                        height="35"
                        viewBox="0 0 35 35"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                        d="M10.7734 14.3281H3.82813C2.07813 14.3281 0.65625 12.9062 0.65625 11.1562V4.21094C0.65625 2.46094 2.07813 1.03906 3.82813 1.03906H10.7734C12.5234 1.03906 13.9453 2.46094 13.9453 4.21094V11.1562C13.9453 12.9062 12.5234 14.3281 10.7734 14.3281ZM3.82813 2.95312C3.17188 2.95312 2.57031 3.5 2.57031 4.21094V11.1562C2.57031 11.8125 3.11719 12.4141 3.82813 12.4141H10.7734C11.4297 12.4141 12.0313 11.8672 12.0313 11.1562V4.21094C12.0313 3.55469 11.4844 2.95312 10.7734 2.95312H3.82813Z"
                        fill="white"
                        />
                        <path
                        d="M31.1719 14.3281H24.2266C22.4766 14.3281 21.0547 12.9062 21.0547 11.1562V4.21094C21.0547 2.46094 22.4766 1.03906 24.2266 1.03906H31.1719C32.9219 1.03906 34.3438 2.46094 34.3438 4.21094V11.1562C34.3438 12.9062 32.9219 14.3281 31.1719 14.3281ZM24.2266 2.95312C23.5703 2.95312 22.9688 3.5 22.9688 4.21094V11.1562C22.9688 11.8125 23.5156 12.4141 24.2266 12.4141H31.1719C31.8281 12.4141 32.4297 11.8672 32.4297 11.1562V4.21094C32.4297 3.55469 31.8828 2.95312 31.1719 2.95312H24.2266Z"
                        fill="white"
                        />
                        <path
                        d="M10.7734 33.9609H3.82813C2.07813 33.9609 0.65625 32.5391 0.65625 30.7891V23.8438C0.65625 22.0938 2.07813 20.6719 3.82813 20.6719H10.7734C12.5234 20.6719 13.9453 22.0938 13.9453 23.8438V30.7891C13.9453 32.5391 12.5234 33.9609 10.7734 33.9609ZM3.82813 22.5859C3.17188 22.5859 2.57031 23.1328 2.57031 23.8438V30.7891C2.57031 31.4453 3.11719 32.0469 3.82813 32.0469H10.7734C11.4297 32.0469 12.0313 31.5 12.0313 30.7891V23.8438C12.0313 23.1875 11.4844 22.5859 10.7734 22.5859H3.82813Z"
                        fill="white"
                        />
                        <path
                        d="M31.1719 33.9609H24.2266C22.4766 33.9609 21.0547 32.5391 21.0547 30.7891V23.8438C21.0547 22.0938 22.4766 20.6719 24.2266 20.6719H31.1719C32.9219 20.6719 34.3438 22.0938 34.3438 23.8438V30.7891C34.3438 32.5391 32.9219 33.9609 31.1719 33.9609ZM24.2266 22.5859C23.5703 22.5859 22.9688 23.1328 22.9688 23.8438V30.7891C22.9688 31.4453 23.5156 32.0469 24.2266 32.0469H31.1719C31.8281 32.0469 32.4297 31.5 32.4297 30.7891V23.8438C32.4297 23.1875 31.8828 22.5859 31.1719 22.5859H24.2266Z"
                        fill="white"
                        />
                    </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark">
                        STOCKS & ETFS
                    </h4>
                    <p class="text-body-color">
                        We have selected over 3,000 stocks from Blue chips or new IPOs, great US markets and local European exchanges.
                    </p>
                </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div
                    class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
                >
                    <div
                    class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-pink-600"
                    >
                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M844.1 211.4c-3.6-4-7.3-7.9-11-11.7-53.8-55.4-121.9-96.9-198.2-118.7-15.1-4.3-30.5-7.8-46.2-10.5-25-4.3-50.6-6.5-76.7-6.5-126 0-239.9 52-321.3 135.8-3.7 3.8-7.4 7.7-11 11.7C107.8 290.9 64 396.4 64 512s43.8 220.9 115.6 300.4c3.6 4 7.2 7.9 11 11.7 53.9 55.5 122.1 97.1 198.6 118.9 15.1 4.3 30.5 7.8 46.2 10.5 24.9 4.3 50.5 6.5 76.6 6.5s51.7-2.2 76.7-6.5c15.7-2.7 31.1-6.2 46.2-10.5 76.5-21.7 144.6-63.3 198.5-118.8 3.7-3.9 7.4-7.7 11-11.7C916.2 733 960 627.6 960 512c0-115.7-43.9-221.1-115.9-300.6z m71.8 308.8c-1 51.7-11.6 101.8-31.6 149.1-17.4 41.2-41.3 78.8-71.1 112-3.5 4-7.2 7.9-10.9 11.7-1.5 1.6-3.1 3.1-4.6 4.7-37.1 37.1-80.3 66.3-128.4 86.6-35.8 15.1-73.1 24.9-111.6 29.2-12.5 1.4-25 2.2-37.7 2.4-2.6 0.1-5.3 0.1-8 0.1s-5.3 0-8-0.1c-12.6-0.2-25.2-1-37.7-2.4-38.4-4.3-75.8-14.1-111.6-29.2-48.1-20.4-91.3-49.5-128.4-86.6-1.6-1.6-3.2-3.2-4.7-4.8-3.7-3.8-7.4-7.8-10.9-11.7-29.8-33.2-53.6-70.8-71-111.9-20-47.3-30.6-97.4-31.6-149.1h109.3c0-2.7-0.1-5.4-0.1-8.2 0-2.6 0-5.2 0.1-7.8H108.1c1-51.8 11.6-102 31.7-149.4 17.4-41.2 41.3-78.9 71.2-112.1 3.5-4 7.2-7.9 10.9-11.7 1.5-1.5 3-3.1 4.5-4.6 37.1-37.1 80.3-66.3 128.4-86.6 35.8-15.1 73.1-24.9 111.6-29.2 12.5-1.4 25-2.2 37.7-2.5 2.7-0.1 5.3-0.1 8-0.1s5.3 0 8 0.1c12.7 0.2 25.2 1.1 37.7 2.5 38.4 4.3 75.8 14.1 111.5 29.2 48.1 20.3 91.3 49.5 128.4 86.6 1.5 1.5 3 3 4.4 4.5 3.7 3.8 7.4 7.7 10.9 11.7 29.9 33.3 53.8 70.9 71.3 112.2 20 47.4 30.7 97.6 31.6 149.4H806.6c0 2.6 0.1 5.2 0.1 7.8 0 2.7 0 5.4-0.1 8.2h109.3z" fill="#fafaff"></path><path d="M790.7 512c0 2.7 0 5.4-0.1 8.2H520v144.7c-2.7-0.1-5.4-0.1-8.1-0.1-2.6 0-5.3 0-7.9 0.1V520.2H233.4c-0.1-2.7-0.1-5.4-0.1-8.2 0-2.6 0-5.2 0.1-7.8H504V358.8c2.6 0 5.3 0.1 7.9 0.1 2.7 0 5.4 0 8.1-0.1v145.4h270.6c0 2.6 0.1 5.2 0.1 7.8zM520 111.1v231.6c-2.7 0.1-5.4 0.1-8.1 0.1-2.6 0-5.3 0-7.9-0.1V111.1c2.7-1.1 5.3-2.1 8-3.1 2.7 1 5.3 2.1 8 3.1zM512 916zM520 680.9v232c-2.7 1.1-5.3 2.1-8 3.1-2.7-1-5.3-2.1-8-3.1v-232c2.6-0.1 5.3-0.1 7.9-0.1 2.7 0 5.4 0 8.1 0.1z" fill="#fafaff"></path><path d="M512 916zM512 916zM748.7 732.5c35.6-62.9 56.5-135.2 57.8-212.3 0-2.7 0.1-5.4 0.1-8.2 0-2.6 0-5.2-0.1-7.8-1.3-77.3-22.2-149.9-58-212.9 23-14.3 44.5-30.6 64.4-48.7-3.6-4-7.2-7.9-10.9-11.7-19.2 17.5-39.8 33.1-61.7 46.7-43.9-71.4-107.3-129.5-182.8-167-12.5-1.4-25-2.2-37.7-2.5-2.7-0.1-5.3-0.1-8-0.1 2.7 1 5.3 2.1 8 3.1 2.3 0.9 4.5 1.9 6.8 2.8 51.4 21.8 97.6 52.9 137.3 92.6 24.1 24.1 45 50.6 62.7 79.2-15 8.6-30.6 16.4-46.7 23.2-50.8 21.5-104.6 32.9-160 33.9-2.7 0.1-5.4 0.1-8.1 0.1-2.6 0-5.3 0-7.9-0.1-55.5-1-109.4-12.4-160.3-33.9-16-6.8-31.6-14.5-46.6-23.1 17.6-28.6 38.6-55.2 62.7-79.3 39.7-39.7 85.9-70.8 137.3-92.6 2.3-0.9 4.5-1.9 6.8-2.8 2.7-1.1 5.3-2.1 8-3.1-2.7 0-5.3 0-8 0.1-12.7 0.2-25.2 1.1-37.7 2.5-75.5 37.5-138.9 95.6-182.8 167.1-21.9-13.6-42.5-29.2-61.7-46.7-3.7 3.8-7.4 7.8-10.9 11.7 19.9 18.1 41.5 34.4 64.5 48.7-35.7 63-56.6 135.5-57.9 212.8 0 2.6-0.1 5.2-0.1 7.8 0 2.7 0 5.4 0.1 8.2 1.4 77 22.2 149.3 57.8 212.2-23 14.3-44.6 30.7-64.5 48.8 3.5 4 7.2 7.9 10.9 11.7 19.2-17.5 39.8-33.1 61.7-46.8 43.9 71.6 107.4 129.8 183 167.4 12.5 1.4 25 2.2 37.7 2.4 2.7 0.1 5.3 0.1 8 0.1-2.7-1-5.3-2.1-8-3.1-2.3-0.9-4.5-1.9-6.8-2.8-51.4-21.8-97.6-52.9-137.3-92.6-24.2-24.2-45.2-50.8-62.8-79.5 15-8.6 30.6-16.4 46.7-23.2 50.8-21.5 104.7-32.9 160.3-33.9 2.6-0.1 5.3-0.1 7.9-0.1 2.7 0 5.4 0 8.1 0.1 55.5 1 109.3 12.4 160 33.9 16.2 6.8 31.8 14.6 46.9 23.3-17.6 28.7-38.6 55.3-62.8 79.5-39.7 39.7-85.9 70.8-137.3 92.6-2.3 1-4.5 1.9-6.8 2.8-2.7 1.1-5.3 2.1-8 3.1 2.7 0 5.3 0 8-0.1 12.7-0.2 25.2-1 37.7-2.4 75.6-37.5 139-95.7 182.9-167.3 21.8 13.6 42.5 29.3 61.7 46.8 3.7-3.8 7.3-7.7 10.9-11.7-19.9-18.3-41.5-34.6-64.5-48.9zM520 664.9c-2.7-0.1-5.4-0.1-8.1-0.1-2.6 0-5.3 0-7.9 0.1-78.2 1.4-151.5 22.8-215.1 59.3-8-14.2-15.2-28.9-21.6-44-21.5-50.8-32.9-104.5-33.9-160-0.1-2.7-0.1-5.4-0.1-8.2 0-2.6 0-5.2 0.1-7.8 1-55.6 12.4-109.5 33.9-160.3 6.4-15.2 13.7-30 21.8-44.3 63.5 36.5 136.8 57.9 214.9 59.2 2.6 0 5.3 0.1 7.9 0.1 2.7 0 5.4 0 8.1-0.1 78.1-1.4 151.4-22.8 214.9-59.3 8.1 14.3 15.4 29.1 21.8 44.4 21.5 50.9 32.9 104.8 33.9 160.3 0 2.6 0.1 5.2 0.1 7.8 0 2.7 0 5.4-0.1 8.2-1 55.4-12.4 109.2-33.9 160-6.4 15.2-13.6 29.9-21.7 44.1-63.5-36.6-136.8-58-215-59.4z" fill="#c136e7"></path></g></svg>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark">
                        OPTIONS
                    </h4>
                    <p class="text-body-color">
                    We have analyzed and selected over 120 Options which give our portfolio great leverage for profit over 80% of the trades.
                    </p>
                </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div
                    class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
                >
                    <div
                    class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-pink-600"
                    >
                    <svg
                        width="35"
                        height="35"
                        viewBox="0 0 35 35"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                        d="M29.5312 21.6562L28.6563 21.1641L29.6953 20.5625C30.7344 19.9062 31.3359 18.8125 31.2812 17.6094C31.2266 16.4063 30.625 15.3125 29.5312 14.7109L27.8906 13.7813L29.6406 12.6875C30.6797 12.0313 31.2812 10.9375 31.2266 9.73438C31.1719 8.53125 30.5703 7.4375 29.4766 6.83594L19.25 1.09375C18.2109 0.492187 16.9531 0.546875 15.9141 1.09375L5.41406 7.21875C4.375 7.82031 3.71875 8.91406 3.71875 10.1172C3.71875 11.3203 4.375 12.4141 5.41406 13.0156L7.10938 14L5.41406 14.9844C4.375 15.5859 3.71875 16.6797 3.71875 17.8828C3.71875 19.0859 4.32031 20.1797 5.41406 20.7812L6.39844 21.3281L5.46875 21.875C4.42969 22.4766 3.77344 23.5703 3.77344 24.7734C3.77344 25.9766 4.375 27.0703 5.46875 27.6719L15.9141 33.6875C16.4609 34.0156 17.0078 34.125 17.6094 34.125C18.2109 34.125 18.8125 33.9609 19.3594 33.6328L29.6953 27.2891C30.7344 26.6328 31.3359 25.5391 31.2812 24.3359C31.2266 23.2969 30.625 22.2031 29.5312 21.6562ZM5.63281 10.1172C5.63281 9.57031 5.90625 9.13281 6.34375 8.85938L16.8438 2.78906C17.0625 2.67969 17.3359 2.57031 17.5547 2.57031C17.7734 2.57031 18.0469 2.625 18.2656 2.73437L28.5469 8.47656C28.9844 8.75 29.2578 9.1875 29.3125 9.73438C29.3125 10.2812 29.0391 10.7188 28.6016 10.9922L18.3203 17.3906C17.8828 17.6641 17.2812 17.6641 16.8438 17.3906L6.39844 11.375C5.90625 11.1562 5.63281 10.6641 5.63281 10.1172ZM5.63281 17.9375C5.63281 17.3906 5.90625 16.9531 6.34375 16.6797L9.02344 15.1484L15.8594 19.0859C16.4062 19.4141 16.9531 19.5234 17.5547 19.5234C18.1562 19.5234 18.7578 19.3594 19.3047 19.0312L26.0312 14.875L28.6016 16.2969C29.0391 16.5703 29.3125 17.0078 29.3672 17.5547C29.3672 18.1016 29.0938 18.5391 28.6563 18.8125L18.3203 25.2656C17.8828 25.5391 17.2812 25.5391 16.8438 25.2656L6.39844 19.25C5.90625 18.9766 5.63281 18.4844 5.63281 17.9375ZM28.6563 25.8125L18.3203 32.2109C17.8828 32.4844 17.2812 32.4844 16.8438 32.2109L6.39844 26.1953C5.96094 25.9219 5.6875 25.4844 5.6875 24.9375C5.6875 24.3906 5.96094 23.9531 6.39844 23.6797L8.3125 22.5859L15.8594 26.9609C16.4062 27.2891 16.9531 27.3984 17.5547 27.3984C18.1562 27.3984 18.7578 27.2344 19.3047 26.9062L26.7969 22.2578L28.6563 23.2969C29.0938 23.5703 29.3672 24.0078 29.4219 24.5547C29.3672 25.0469 29.0938 25.5391 28.6563 25.8125Z"
                        fill="white"
                        />
                    </svg>
                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark">
                    METALS
                    </h4>
                    <p class="text-body-color">
                    Precious metals are included in our assets as spot traded commodities, via multiple instruments, with over 10 forex crosses.
                    </p>
                </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div
                    class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
                >
                    <div
                    class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl bg-pink-600"
                    >
                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M928.1 881v44H95.9V99h44v782z" fill="#ffffff"></path><path d="M352 435.7v403.4H204V435.7h148m22-22H182v447.4h192V413.7zM608 307.9v531.2H460V307.9h148m22-22H438v575.2h192V285.9z" fill="#ffffff"></path><path d="M866.1 177.3v663.9H714V177.3h152.1m20-20H694v703.9h192V157.3h0.1z" fill="#b836e7"></path></g></svg>


                    </div>
                    <h4 class="mb-3 text-xl font-semibold text-dark">
                    FUTURES
                    </h4>
                    <p class="text-body-color">
                    Over 500 futures varieties from commodities to bonds on markets like CME, LIFFE, EUREX, etc.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- ====== Services Section End -->
    @endsection
