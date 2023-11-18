@extends('layout')

@section('content')
      <!-- ====== Hero Section Start -->
      <div class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
        <div class="container mx-auto">
          <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-5/12">
              <div class="hero-content">
                <h1
                  class="mb-3 text-4xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[42px]"
                >
                We Make <br>Future.
                </h1>
                <p class="mb-8 max-w-[480px] text-base text-body-color">
                    Our knowledgeable professionals and industry leading tools are united to do one thing: make you a smarter, more profitable investor.
                </p>
                <ul class="flex flex-wrap items-center">
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="inline-flex items-center justify-center rounded-lg bg-pink-600 py-4 px-6 text-center text-base font-normal text-white hover:bg-opacity-90 sm:px-10 lg:px-8 xl:px-10"
                    >
                    Open A Free Account
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
              <div class="lg:ml-auto lg:text-right">
                <div class="relative z-10 inline-block pt-11 lg:pt-0">
                  <img
                    src="{{ asset('images/hero/hero-image-01.png') }}"
                    alt="hero"
                    class="max-w-full lg:ml-auto"
                  />
                  <span class="absolute -left-8 -bottom-8 z-[-1]">
                    <svg
                      width="93"
                      height="93"
                      viewBox="0 0 93 93"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
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

      <!-- ====== Video Section Start -->
      <section
            x-data="{ videoOpen: false, videoSrc: 'https://youtu.be/2qgS_MCvDfk'}"
            class="bg-white py-20 lg:py-[120px]"
        >
        <div class="container mx-auto">
          <div class="-mx-4 flex flex-wrap justify-center">
            <div class="w-full px-4 lg:w-10/12">
              <div
                class="relative z-20 h-[300px] overflow-hidden rounded-lg md:h-[450px]"
              >
                <div class="absolute top-0 left-0 h-full w-full">
                  <img
                    src="{{ asset('images/videos/image-01.jpg') }}"
                    alt="image"
                    class="h-full w-full object-cover object-center"
                  />
                </div>
                <div
                  class="absolute top-0 left-0 z-10 flex h-full w-full items-center justify-center bg-pink-600 bg-opacity-90"
                >
                  <a
                    href="javascript:void(0)"
                    @click="videoOpen = true; videoSrc = 'https://youtu.be/UvgpiLt-OMc?si=vasqQOt010oCUcGK' "
                    class="absolute z-20 flex h-20 w-20 items-center justify-center rounded-full bg-white text-pink-600 md:h-[100px] md:w-[100px]"
                  >
                    <span
                      class="absolute top-0 right-0 z-[-1] h-full w-full animate-ping rounded-full bg-white bg-opacity-20 delay-300 duration-1000"
                    ></span>
                    <svg
                      width="23"
                      height="27"
                      viewBox="0 0 23 27"
                      class="fill-current"
                    >
                      <path
                        d="M22.5 12.634C23.1667 13.0189 23.1667 13.9811 22.5 14.366L2.25 26.0574C1.58333 26.4423 0.750001 25.9611 0.750001 25.1913L0.750002 1.80866C0.750002 1.03886 1.58334 0.557731 2.25 0.942631L22.5 12.634Z"
                      />
                    </svg>
                  </a>
                </div>

                <div>
                  <span class="absolute top-4 left-4 z-40">
                    <svg
                      width="50"
                      height="79"
                      viewBox="0 0 50 79"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="47.7119"
                        cy="76.9617"
                        r="1.74121"
                        transform="rotate(180 47.7119 76.9617)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="61.6385"
                        r="1.74121"
                        transform="rotate(180 47.7119 61.6385)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="46.3163"
                        r="1.74121"
                        transform="rotate(180 47.7119 46.3163)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="16.7159"
                        r="1.74121"
                        transform="rotate(180 47.7119 16.7159)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="31.3421"
                        r="1.74121"
                        transform="rotate(180 47.7119 31.3421)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="1.74121"
                        r="1.74121"
                        transform="rotate(180 47.7119 1.74121)"
                        fill="white"
                      />
                      <circle
                        cx="32.3916"
                        cy="76.9617"
                        r="1.74121"
                        transform="rotate(180 32.3916 76.9617)"
                        fill="white"
                      />
                      <circle
                        cx="32.3877"
                        cy="61.6384"
                        r="1.74121"
                        transform="rotate(180 32.3877 61.6384)"
                        fill="white"
                      />
                      <circle
                        cx="32.3916"
                        cy="46.3162"
                        r="1.74121"
                        transform="rotate(180 32.3916 46.3162)"
                        fill="white"
                      />
                      <circle
                        cx="32.3916"
                        cy="16.7161"
                        r="1.74121"
                        transform="rotate(180 32.3916 16.7161)"
                        fill="white"
                      />
                      <circle
                        cx="32.3877"
                        cy="31.342"
                        r="1.74121"
                        transform="rotate(180 32.3877 31.342)"
                        fill="white"
                      />
                      <circle
                        cx="32.3916"
                        cy="1.74145"
                        r="1.74121"
                        transform="rotate(180 32.3916 1.74145)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="76.9617"
                        r="1.74121"
                        transform="rotate(180 17.0674 76.9617)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="61.6384"
                        r="1.74121"
                        transform="rotate(180 17.0674 61.6384)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="46.3162"
                        r="1.74121"
                        transform="rotate(180 17.0674 46.3162)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="16.7161"
                        r="1.74121"
                        transform="rotate(180 17.0674 16.7161)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="31.342"
                        r="1.74121"
                        transform="rotate(180 17.0674 31.342)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="1.74145"
                        r="1.74121"
                        transform="rotate(180 17.0674 1.74145)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="76.9617"
                        r="1.74121"
                        transform="rotate(180 1.74316 76.9617)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="61.6384"
                        r="1.74121"
                        transform="rotate(180 1.74316 61.6384)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="46.3162"
                        r="1.74121"
                        transform="rotate(180 1.74316 46.3162)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="16.7161"
                        r="1.74121"
                        transform="rotate(180 1.74316 16.7161)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="31.342"
                        r="1.74121"
                        transform="rotate(180 1.74316 31.342)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="1.74145"
                        r="1.74121"
                        transform="rotate(180 1.74316 1.74145)"
                        fill="white"
                      />
                    </svg>
                  </span>
                  <span class="absolute bottom-4 right-4 z-40">
                    <svg
                      width="50"
                      height="79"
                      viewBox="0 0 50 79"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="47.7119"
                        cy="76.9617"
                        r="1.74121"
                        transform="rotate(180 47.7119 76.9617)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="61.6385"
                        r="1.74121"
                        transform="rotate(180 47.7119 61.6385)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="46.3163"
                        r="1.74121"
                        transform="rotate(180 47.7119 46.3163)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="16.7159"
                        r="1.74121"
                        transform="rotate(180 47.7119 16.7159)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="31.3421"
                        r="1.74121"
                        transform="rotate(180 47.7119 31.3421)"
                        fill="white"
                      />
                      <circle
                        cx="47.7119"
                        cy="1.74121"
                        r="1.74121"
                        transform="rotate(180 47.7119 1.74121)"
                        fill="white"
                      />
                      <circle
                        cx="32.3916"
                        cy="76.9617"
                        r="1.74121"
                        transform="rotate(180 32.3916 76.9617)"
                        fill="white"
                      />
                      <circle
                        cx="32.3877"
                        cy="61.6384"
                        r="1.74121"
                        transform="rotate(180 32.3877 61.6384)"
                        fill="white"
                      />
                      <circle
                        cx="32.3916"
                        cy="46.3162"
                        r="1.74121"
                        transform="rotate(180 32.3916 46.3162)"
                        fill="white"
                      />
                      <circle
                        cx="32.3916"
                        cy="16.7161"
                        r="1.74121"
                        transform="rotate(180 32.3916 16.7161)"
                        fill="white"
                      />
                      <circle
                        cx="32.3877"
                        cy="31.342"
                        r="1.74121"
                        transform="rotate(180 32.3877 31.342)"
                        fill="white"
                      />
                      <circle
                        cx="32.3916"
                        cy="1.74145"
                        r="1.74121"
                        transform="rotate(180 32.3916 1.74145)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="76.9617"
                        r="1.74121"
                        transform="rotate(180 17.0674 76.9617)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="61.6384"
                        r="1.74121"
                        transform="rotate(180 17.0674 61.6384)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="46.3162"
                        r="1.74121"
                        transform="rotate(180 17.0674 46.3162)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="16.7161"
                        r="1.74121"
                        transform="rotate(180 17.0674 16.7161)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="31.342"
                        r="1.74121"
                        transform="rotate(180 17.0674 31.342)"
                        fill="white"
                      />
                      <circle
                        cx="17.0674"
                        cy="1.74145"
                        r="1.74121"
                        transform="rotate(180 17.0674 1.74145)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="76.9617"
                        r="1.74121"
                        transform="rotate(180 1.74316 76.9617)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="61.6384"
                        r="1.74121"
                        transform="rotate(180 1.74316 61.6384)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="46.3162"
                        r="1.74121"
                        transform="rotate(180 1.74316 46.3162)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="16.7161"
                        r="1.74121"
                        transform="rotate(180 1.74316 16.7161)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="31.342"
                        r="1.74121"
                        transform="rotate(180 1.74316 31.342)"
                        fill="white"
                      />
                      <circle
                        cx="1.74316"
                        cy="1.74145"
                        r="1.74121"
                        transform="rotate(180 1.74316 1.74145)"
                        fill="white"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          x-show="videoOpen"
          x-transition
          class="fixed top-0 left-0 z-50 flex h-screen w-full items-center justify-center bg-black bg-opacity-70"
        >
          <div
            @click.outside="videoOpen = false; videoSrc=''"
            class="mx-auto w-full max-w-[550px] bg-white"
          >
            <iframe id="video" class="h-[320px] w-full" x-bind:src="videoSrc">
            </iframe>
          </div>

          <button
            @click="videoOpen = false; videoSrc='' "
            class="absolute top-0 right-0 flex h-20 w-20 cursor-pointer items-center justify-center text-body-color hover:bg-black"
          >
            <svg viewBox="0 0 16 15" class="h-8 w-8 fill-current">
              <path
                d="M3.37258 1.27L8.23258 6.13L13.0726 1.29C13.1574 1.19972 13.2596 1.12749 13.373 1.07766C13.4864 1.02783 13.6087 1.00141 13.7326 1C13.9978 1 14.2522 1.10536 14.4397 1.29289C14.6272 1.48043 14.7326 1.73478 14.7326 2C14.7349 2.1226 14.7122 2.24439 14.6657 2.35788C14.6193 2.47138 14.5502 2.57419 14.4626 2.66L9.57258 7.5L14.4626 12.39C14.6274 12.5512 14.724 12.7696 14.7326 13C14.7326 13.2652 14.6272 13.5196 14.4397 13.7071C14.2522 13.8946 13.9978 14 13.7326 14C13.6051 14.0053 13.478 13.984 13.3592 13.9375C13.2404 13.8911 13.1326 13.8204 13.0426 13.73L8.23258 8.87L3.38258 13.72C3.29809 13.8073 3.19715 13.8769 3.08559 13.925C2.97402 13.9731 2.85405 13.9986 2.73258 14C2.46737 14 2.21301 13.8946 2.02548 13.7071C1.83794 13.5196 1.73258 13.2652 1.73258 13C1.73025 12.8774 1.753 12.7556 1.79943 12.6421C1.84586 12.5286 1.91499 12.4258 2.00258 12.34L6.89258 7.5L2.00258 2.61C1.83777 2.44876 1.74112 2.23041 1.73258 2C1.73258 1.73478 1.83794 1.48043 2.02548 1.29289C2.21301 1.10536 2.46737 1 2.73258 1C2.97258 1.003 3.20258 1.1 3.37258 1.27Z"
              />
            </svg>
          </button>
        </div>
      </section>
      <!-- ====== Video Section End -->

      <!-- ====== Pricing Section Start -->
      <section
            class="lg:pt- [120px] relative z-20 overflow-hidden bg-slate-50 rounded-lg pt-20 pb-12 lg:pb-[90px]"
        >
        <div class="container mx-auto">
          <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
              <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                <span class="mb-2 block text-lg font-semibold text-pink-600">
                  Pricing Table
                </span>
                <h2
                  class="mb-4 text-2xl font-bold text-dark sm:text-2xl md:text-[40px]"
                >
                Choose the plan that works for you
                </h2>
                <p class="text-base text-body-color">
                    Our Team understands the security and safety of there investors funds That's why we are offering New range of Investment Packages with 100% Principal Return
                </p>
              </div>
            </div>
          </div>

          <div class="-mx-4 flex flex-wrap justify-center">
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
              <div
                class="relative z-10 mb-10 overflow-hidden rounded-xl border border-pink-600 border-opacity-20 bg-white py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12"
              >
                <span class="mb-4 block text-lg font-semibold text-pink-600">
                    BASIC
                </span>
                <h6 class="mb-5 text-[25px] font-bold text-dark">
                    $30 - $499
                </h6>
                <p
                class="mb-8 border-b border-[#F2F2F2] pb-8 text-base text-body-color"
              >
              </p>
                <div class="mb-7">
                  <p class="mb-1 text-base leading-loose text-body-color">
                    30% After 24 Hours
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    Daily Earnings
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    24 Hours Return
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    Instant Withdrawal
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    24/7 Support

                  </p>
                </div>
                <a
                  href="/login"
                  class="block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold text-pink-600 transition hover:border-pink-600 hover:bg-pink-600 hover:text-white"
                >
                  Choose Basic
                </a>

                <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                    <svg
                      width="77"
                      height="172"
                      viewBox="0 0 77 172"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="86"
                        cy="86"
                        r="86"
                        fill="url(#paint0_linear)"
                      />
                      <defs>
                        <linearGradient
                          id="paint0_linear"
                          x1="86"
                          y1="0"
                          x2="86"
                          y2="172"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#d0087d" stop-opacity="0.09" />
                          <stop
                            offset="1"
                            stop-color="#C4C4C4"
                            stop-opacity="0"
                          />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]">
                    <svg
                      width="41"
                      height="89"
                      viewBox="0 0 41 89"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="38.9138"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 38.9138 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 38.9138 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 38.9138 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 38.9138 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 38.9138 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 38.9138 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 38.9138 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="1.42021"
                        r="1.42021"
                        transform="rotate(180 38.9138 1.42021)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 26.4157 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 26.4157 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 26.4157 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 26.4157 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 26.4157 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 26.4157 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 26.4157 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="1.4202"
                        r="1.42021"
                        transform="rotate(180 26.4157 1.4202)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 13.9177 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 13.9177 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 13.9177 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 13.9177 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 13.9177 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 13.9177 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 13.9177 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="1.42019"
                        r="1.42021"
                        transform="rotate(180 13.9177 1.42019)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 1.41963 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 1.41963 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 1.41963 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 1.41963 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 1.41963 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 1.41963 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 1.41963 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="1.4202"
                        r="1.42021"
                        transform="rotate(180 1.41963 1.4202)"
                        fill="#d0087d"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
              <div
                class="relative z-10 mb-10 overflow-hidden rounded-xl border border-pink-600 border-opacity-10 bg-white py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12"
              >
                <span class="mb-4 block text-lg font-semibold text-pink-600">
                    GOLD
                </span>
                <h6 class="mb-5 text-[25px] font-bold text-dark">
                    $500 - $999
                </h6>
                <p
                  class="mb-8 border-b border-[#F2F2F2] pb-8 text-base text-body-color"
                >
                </p>
                <div class="mb-7">
                  <p class="mb-1 text-base leading-loose text-body-color">
                    50% After 48 Hours
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    Daily Earnings
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    48 Hours Return
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    Instant Withdrawal
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    24/7 Support
                  </p>
                </div>
                <a
                  href="/login"
                  class="block w-full rounded-md border border-pink-600 bg-pink-600 p-4 text-center text-base font-semibold text-white transition hover:bg-opacity-90"
                >
                  Choose Gold
                </a>

                <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                    <svg
                      width="77"
                      height="172"
                      viewBox="0 0 77 172"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="86"
                        cy="86"
                        r="86"
                        fill="url(#paint0_linear)"
                      />
                      <defs>
                        <linearGradient
                          id="paint0_linear"
                          x1="86"
                          y1="0"
                          x2="86"
                          y2="172"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#d0087d" stop-opacity="0.09" />
                          <stop
                            offset="1"
                            stop-color="#C4C4C4"
                            stop-opacity="0"
                          />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]">
                    <svg
                      width="41"
                      height="89"
                      viewBox="0 0 41 89"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="38.9138"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 38.9138 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 38.9138 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 38.9138 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 38.9138 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 38.9138 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 38.9138 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 38.9138 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="1.42021"
                        r="1.42021"
                        transform="rotate(180 38.9138 1.42021)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 26.4157 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 26.4157 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 26.4157 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 26.4157 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 26.4157 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 26.4157 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 26.4157 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="1.4202"
                        r="1.42021"
                        transform="rotate(180 26.4157 1.4202)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 13.9177 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 13.9177 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 13.9177 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 13.9177 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 13.9177 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 13.9177 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 13.9177 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="1.42019"
                        r="1.42021"
                        transform="rotate(180 13.9177 1.42019)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 1.41963 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 1.41963 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 1.41963 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 1.41963 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 1.41963 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 1.41963 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 1.41963 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="1.4202"
                        r="1.42021"
                        transform="rotate(180 1.41963 1.4202)"
                        fill="#d0087d"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
              <div
                class="relative z-10 mb-10 overflow-hidden rounded-xl border border-pink-600 border-opacity-20 bg-white py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12"
              >
                <span class="mb-4 block text-lg font-semibold text-pink-600">
                    MASTER
                </span>
                <h6 class="mb-5 text-[25px] font-bold text-dark">
                    $1000 - $1999
                </h6>
                <p
                  class="mb-8 border-b border-[#F2F2F2] pb-8 text-base text-body-color"
                >
                </p>
                <div class="mb-7">
                  <p class="mb-1 text-base leading-loose text-body-color">
                    80% After 72 Hours
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    Daily Earnings
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    72 Hours Return
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    Instant Withdrawal
                  </p>
                  <p class="mb-1 text-base leading-loose text-body-color">
                    24/7 Support
                  </p>
                </div>
                <a
                  href="/login"
                  class="block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold text-pink-600 transition hover:border-pink-600 hover:bg-pink-600 hover:text-white"
                >
                  Choose Master
                </a>

                <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                    <svg
                      width="77"
                      height="172"
                      viewBox="0 0 77 172"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="86"
                        cy="86"
                        r="86"
                        fill="url(#paint0_linear)"
                      />
                      <defs>
                        <linearGradient
                          id="paint0_linear"
                          x1="86"
                          y1="0"
                          x2="86"
                          y2="172"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#d0087d" stop-opacity="0.09" />
                          <stop
                            offset="1"
                            stop-color="#C4C4C4"
                            stop-opacity="0"
                          />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]">
                    <svg
                      width="41"
                      height="89"
                      viewBox="0 0 41 89"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="38.9138"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 38.9138 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 38.9138 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 38.9138 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 38.9138 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 38.9138 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 38.9138 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 38.9138 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="38.9138"
                        cy="1.42021"
                        r="1.42021"
                        transform="rotate(180 38.9138 1.42021)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 26.4157 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 26.4157 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 26.4157 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 26.4157 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 26.4157 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 26.4157 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 26.4157 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="26.4157"
                        cy="1.4202"
                        r="1.42021"
                        transform="rotate(180 26.4157 1.4202)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 13.9177 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 13.9177 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 13.9177 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 13.9177 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 13.9177 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 13.9177 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 13.9177 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="13.9177"
                        cy="1.42019"
                        r="1.42021"
                        transform="rotate(180 13.9177 1.42019)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="87.4849"
                        r="1.42021"
                        transform="rotate(180 1.41963 87.4849)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="74.9871"
                        r="1.42021"
                        transform="rotate(180 1.41963 74.9871)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="62.4892"
                        r="1.42021"
                        transform="rotate(180 1.41963 62.4892)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="38.3457"
                        r="1.42021"
                        transform="rotate(180 1.41963 38.3457)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="13.634"
                        r="1.42021"
                        transform="rotate(180 1.41963 13.634)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="50.2754"
                        r="1.42021"
                        transform="rotate(180 1.41963 50.2754)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="26.1319"
                        r="1.42021"
                        transform="rotate(180 1.41963 26.1319)"
                        fill="#d0087d"
                      />
                      <circle
                        cx="1.41963"
                        cy="1.4202"
                        r="1.42021"
                        transform="rotate(180 1.41963 1.4202)"
                        fill="#d0087d"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div
                  class="relative z-10 mb-10 overflow-hidden rounded-xl border border-pink-600 border-opacity-20 bg-white py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-12"
                >
                  <span class="mb-4 block text-lg font-semibold text-pink-600">
                      PREMIUM
                  </span>
                  <h6 class="mb-5 text-[21px] font-bold text-dark">
                      $2000 - $Unlimited
                  </h6>
                  <p
                    class="mb-8 border-b border-[#F2F2F2] pb-8 text-base text-body-color"
                  >
                  </p>
                  <div class="mb-7">
                    <p class="mb-1 text-base leading-loose text-body-color">
                      100% After 4 Days
                    </p>
                    <p class="mb-1 text-base leading-loose text-body-color">
                      Daily Earnings
                    </p>
                    <p class="mb-1 text-base leading-loose text-body-color">
                      4 Days Return
                    </p>
                    <p class="mb-1 text-base leading-loose text-body-color">
                      Instant Withdrawal
                    </p>
                    <p class="mb-1 text-base leading-loose text-body-color">
                      24/7 Support
                    </p>
                  </div>
                  <a
                    href="/login"
                    class="block w-full rounded-md border border-[#D4DEFF] bg-transparent p-4 text-center text-base font-semibold text-pink-600 transition hover:border-pink-600 hover:bg-pink-600 hover:text-white"
                  >
                    Choose Premium
                  </a>

                  <div>
                    <span class="absolute right-0 top-7 z-[-1]">
                      <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle
                          cx="86"
                          cy="86"
                          r="86"
                          fill="url(#paint0_linear)"
                        />
                        <defs>
                          <linearGradient
                            id="paint0_linear"
                            x1="86"
                            y1="0"
                            x2="86"
                            y2="172"
                            gradientUnits="userSpaceOnUse"
                          >
                            <stop stop-color="#d0087d" stop-opacity="0.09" />
                            <stop
                              offset="1"
                              stop-color="#C4C4C4"
                              stop-opacity="0"
                            />
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                    <span class="absolute right-4 top-4 z-[-1]">
                      <svg
                        width="41"
                        height="89"
                        viewBox="0 0 41 89"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle
                          cx="38.9138"
                          cy="87.4849"
                          r="1.42021"
                          transform="rotate(180 38.9138 87.4849)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="38.9138"
                          cy="74.9871"
                          r="1.42021"
                          transform="rotate(180 38.9138 74.9871)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="38.9138"
                          cy="62.4892"
                          r="1.42021"
                          transform="rotate(180 38.9138 62.4892)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="38.9138"
                          cy="38.3457"
                          r="1.42021"
                          transform="rotate(180 38.9138 38.3457)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="38.9138"
                          cy="13.634"
                          r="1.42021"
                          transform="rotate(180 38.9138 13.634)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="38.9138"
                          cy="50.2754"
                          r="1.42021"
                          transform="rotate(180 38.9138 50.2754)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="38.9138"
                          cy="26.1319"
                          r="1.42021"
                          transform="rotate(180 38.9138 26.1319)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="38.9138"
                          cy="1.42021"
                          r="1.42021"
                          transform="rotate(180 38.9138 1.42021)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="26.4157"
                          cy="87.4849"
                          r="1.42021"
                          transform="rotate(180 26.4157 87.4849)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="26.4157"
                          cy="74.9871"
                          r="1.42021"
                          transform="rotate(180 26.4157 74.9871)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="26.4157"
                          cy="62.4892"
                          r="1.42021"
                          transform="rotate(180 26.4157 62.4892)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="26.4157"
                          cy="38.3457"
                          r="1.42021"
                          transform="rotate(180 26.4157 38.3457)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="26.4157"
                          cy="13.634"
                          r="1.42021"
                          transform="rotate(180 26.4157 13.634)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="26.4157"
                          cy="50.2754"
                          r="1.42021"
                          transform="rotate(180 26.4157 50.2754)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="26.4157"
                          cy="26.1319"
                          r="1.42021"
                          transform="rotate(180 26.4157 26.1319)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="26.4157"
                          cy="1.4202"
                          r="1.42021"
                          transform="rotate(180 26.4157 1.4202)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="13.9177"
                          cy="87.4849"
                          r="1.42021"
                          transform="rotate(180 13.9177 87.4849)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="13.9177"
                          cy="74.9871"
                          r="1.42021"
                          transform="rotate(180 13.9177 74.9871)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="13.9177"
                          cy="62.4892"
                          r="1.42021"
                          transform="rotate(180 13.9177 62.4892)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="13.9177"
                          cy="38.3457"
                          r="1.42021"
                          transform="rotate(180 13.9177 38.3457)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="13.9177"
                          cy="13.634"
                          r="1.42021"
                          transform="rotate(180 13.9177 13.634)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="13.9177"
                          cy="50.2754"
                          r="1.42021"
                          transform="rotate(180 13.9177 50.2754)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="13.9177"
                          cy="26.1319"
                          r="1.42021"
                          transform="rotate(180 13.9177 26.1319)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="13.9177"
                          cy="1.42019"
                          r="1.42021"
                          transform="rotate(180 13.9177 1.42019)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="1.41963"
                          cy="87.4849"
                          r="1.42021"
                          transform="rotate(180 1.41963 87.4849)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="1.41963"
                          cy="74.9871"
                          r="1.42021"
                          transform="rotate(180 1.41963 74.9871)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="1.41963"
                          cy="62.4892"
                          r="1.42021"
                          transform="rotate(180 1.41963 62.4892)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="1.41963"
                          cy="38.3457"
                          r="1.42021"
                          transform="rotate(180 1.41963 38.3457)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="1.41963"
                          cy="13.634"
                          r="1.42021"
                          transform="rotate(180 1.41963 13.634)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="1.41963"
                          cy="50.2754"
                          r="1.42021"
                          transform="rotate(180 1.41963 50.2754)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="1.41963"
                          cy="26.1319"
                          r="1.42021"
                          transform="rotate(180 1.41963 26.1319)"
                          fill="#d0087d"
                        />
                        <circle
                          cx="1.41963"
                          cy="1.4202"
                          r="1.42021"
                          transform="rotate(180 1.41963 1.4202)"
                          fill="#d0087d"
                        />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <!-- ====== Pricing Section End -->


      <!-- ====== FAQ Section Start -->
      <section
            id="faq"
            x-data="
                    {
                    openFaq1: false,
                    openFaq2: false,
                    openFaq3: false,
                    openFaq4: false,
                    openFaq5: false,
                    openFaq6: false
                    }
                "
            class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
        >
        <div class="container mx-auto">
          <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
              <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                <span class="mb-2 block text-lg font-semibold text-pink-600">
                  FAQ
                </span>
                <h2
                  class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
                >
                  Any Questions? Look Here
                </h2>
                <p class="text-base text-body-color">
                  Here are the frequently asked questions by most of our clients
                </p>
              </div>
            </div>
          </div>

          <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2">
              <div
                class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
              >
                <button
                  class="faq-btn flex w-full text-left"
                  @click="openFaq1 = !openFaq1"
                >
                  <div
                    class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-pink-600 bg-opacity-5 text-pink-600"
                  >
                    <svg
                      width="17"
                      height="10"
                      viewBox="0 0 17 10"
                      class="icon fill-current"
                    >
                      <path
                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                        fill="#d0087d"
                        stroke="#d0087d"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="text-lg font-semibold text-black">
                      How do I invest with Massprofit?
                    </h4>
                  </div>
                </button>
                <div x-show="openFaq1" class="faq-content pl-[62px]">
                  <p class="py-3 text-base leading-relaxed text-body-color">
                    It takes 2-3 weeks to get your first blog post ready. That
                    includes the in-depth research & creation of your monthly
                    content marketing strategy that we do before writing your
                    first blog post, Ipsum available .
                  </p>
                </div>
              </div>
              <div
                class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
              >
                <button
                  class="faq-btn flex w-full text-left"
                  @click="openFaq2 = !openFaq2"
                >
                  <div
                    class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-pink-600 bg-opacity-5 text-pink-600"
                  >
                    <svg
                      width="17"
                      height="10"
                      viewBox="0 0 17 10"
                      class="icon fill-current"
                    >
                      <path
                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                        fill="#d0087d"
                        stroke="#d0087d"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="text-lg font-semibold text-black">
                      Which e-currencies do you accept?
                    </h4>
                  </div>
                </button>
                <div x-show="openFaq2" class="faq-content pl-[62px]">
                  <p class="py-3 text-base leading-relaxed text-body-color">
                    We accept all digital currencies.
                  </p>
                </div>
              </div>
              <div
                class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
              >
                <button
                  class="faq-btn flex w-full text-left"
                  @click="openFaq3 = !openFaq3"
                >
                  <div
                    class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-pink-600 bg-opacity-5 text-pink-600"
                  >
                    <svg
                      width="17"
                      height="10"
                      viewBox="0 0 17 10"
                      class="icon fill-current"
                    >
                      <path
                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                        fill="#d0087d"
                        stroke="#d0087d"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="text-lg font-semibold text-black">
                      How long does it takes for my deposit to be added to my account?
                    </h4>
                  </div>
                </button>
                <div x-show="openFaq3" class="faq-content pl-[62px]">
                  <p class="py-3 text-base leading-relaxed text-body-color">
                    Your account will be updated as fast as you deposit.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
              <div
                class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
              >
                <button
                  class="faq-btn flex w-full text-left"
                  @click="openFaq4 = !openFaq4"
                >
                  <div
                    class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-pink-600 bg-opacity-5 text-pink-600"
                  >
                    <svg
                      width="17"
                      height="10"
                      viewBox="0 0 17 10"
                      class="icon fill-current"
                    >
                      <path
                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                        fill="#d0087d"
                        stroke="#d0087d"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="text-lg font-semibold text-black">
                        How do I open my massprofit.net Account?
                    </h4>
                  </div>
                </button>
                <div x-show="openFaq4" class="faq-content pl-[62px]">
                  <p class="py-3 text-base leading-relaxed text-body-color">
                    It's quite easy and convenient. Follow this link, fill in the registration form and then press "Register".
                  </p>
                </div>
              </div>
              <div
                class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
              >
                <button
                  class="faq-btn flex w-full text-left"
                  @click="openFaq5 = !openFaq5"
                >
                  <div
                    class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-pink-600 bg-opacity-5 text-pink-600"
                  >
                    <svg
                      width="17"
                      height="10"
                      viewBox="0 0 17 10"
                      class="icon fill-current"
                    >
                      <path
                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                        fill="#d0087d"
                        stroke="#d0087d"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="text-lg font-semibold text-black">
                        How many times can i reinvest?
                    </h4>
                  </div>
                </button>
                <div x-show="openFaq5" class="faq-content pl-[62px]">
                  <p class="py-3 text-base leading-relaxed text-body-color">
                    Mapleinvestment.ltd does not allow Investment and reinvestment to exceed more than three(3) times in starter plan. If you Invest or reinvest more than that it requires to enter Premium plan before you can make withdraw. That is the instruction from UK Company house during the time of company registration.
                  </p>
                </div>
              </div>
              <div
                class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8"
              >
                <button
                  class="faq-btn flex w-full text-left"
                  @click="openFaq6 = !openFaq6"
                >
                  <div
                    class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-pink-600 bg-opacity-5 text-pink-600"
                  >
                    <svg
                      width="17"
                      height="10"
                      viewBox="0 0 17 10"
                      class="icon fill-current"
                    >
                      <path
                        d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                        fill="#d0087d"
                        stroke="#d0087d"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="text-lg font-semibold text-black">
                        Who manages the funds?
                    </h4>
                  </div>
                </button>
                <div x-show="openFaq6" class="faq-content pl-[62px]">
                  <p class="py-3 text-base leading-relaxed text-body-color">
                    These funds are managed by a team of Massprofit investment experts.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="absolute bottom-0 right-0 z-[-1]">
          <svg
            width="1440"
            height="886"
            viewBox="0 0 1440 886"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              opacity="0.5"
              d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
              fill="url(#paint0_linear)"
            />
            <defs>
              <linearGradient
                id="paint0_linear"
                x1="1308.65"
                y1="1142.58"
                x2="602.827"
                y2="-418.681"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#d0087d" stop-opacity="0.36" />
                <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
              </linearGradient>
            </defs>
          </svg>
        </div>
      </section>
      <!-- ====== FAQ Section End -->

      <!-- ====== Call To Action Section Start -->
      <section class="bg-slate-50">
        <div class="mx-auto">
          <div
            class="relative z-10 overflow-hidden rounded bg-pink-400 py-12 px-8 md:p-[70px]"
          >
            <div class="-mx-4 flex flex-wrap items-center">
              <div class="w-full px-4 lg:w-1/2">
                <span class="mb-2 text-base font-semibold text-white">
                  Find Your Next Dream App
                </span>
                <h2
                  class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[38px] lg:mb-0"
                >
                  Get started today <br class="hidden xs:block" />

                </h2>
              </div>
              <div class="w-full px-4 lg:w-1/2">
                <div class="flex flex-wrap lg:justify-end">
                  <a
                    href="javascript:void(0)"
                    class="my-1 inline-block rounded bg-dark py-4 px-6 text-base font-medium text-white transition hover:bg-opacity-90 md:px-9 lg:px-6 xl:px-9"
                  >
                    Get Started
                  </a>
                </div>
              </div>
            </div>

            <div>
              <span class="absolute top-0 left-0 z-[-1]">
                <svg
                  width="189"
                  height="162"
                  viewBox="0 0 189 162"
                  fill="white"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <ellipse
                    cx="16"
                    cy="-16.5"
                    rx="173"
                    ry="178.5"
                    transform="rotate(180 16 -16.5)"
                    fill="url(#paint0_linear)"
                  />
                  <defs>
                    <linearGradient
                      id="paint0_linear"
                      x1="-157"
                      y1="-107.754"
                      x2="98.5011"
                      y2="-106.425"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="white" stop-opacity="0.07" />
                      <stop offset="1" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                  </defs>
                </svg>
              </span>
              <span class="absolute bottom-0 right-0 z-[-1]">
                <svg
                  width="191"
                  height="208"
                  viewBox="0 0 191 208"
                  fill="white"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <ellipse
                    cx="173"
                    cy="178.5"
                    rx="173"
                    ry="178.5"
                    fill="url(#paint0_linear)"
                  />
                  <defs>
                    <linearGradient
                      id="paint0_linear"
                      x1="-3.27832e-05"
                      y1="87.2457"
                      x2="255.501"
                      y2="88.5747"
                      gradientUnits="userSpaceOnUse"
                    >
                      <stop stop-color="white" stop-opacity="0.07" />
                      <stop offset="1" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                  </defs>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== Call To Action Section End -->

      <!-- ====== Testimonials Section Start -->
      <section class="pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]">
        <div class="container mx-auto">
          <div
            x-data="
              {
                slides: ['1','2','3'],
                activeSlide: 1,
                activeButton: 'w-[30px] bg-pink-600',
                button: 'w-[10px] bg-[#E4E4E4]'
              }
            "
          >
            <div class="relative flex justify-center">
              <div
                class="relative w-full pb-16 md:w-11/12 lg:w-10/12 xl:w-8/12 xl:pb-0"
              >
                <div
                  class="flex-no-wrap snap mx-auto flex h-auto w-full max-w-[300px] overflow-hidden transition-all xs:max-w-[368px] sm:max-w-[508px] md:max-w-[630px] lg:max-w-[738px] 2xl:max-w-[850px]"
                  x-ref="carousel"
                >
                  <div
                    class="mx-auto h-full min-w-[300px] xs:min-w-[368px] sm:min-w-[508px] sm:p-6 md:min-w-[630px] lg:min-w-[738px] 2xl:min-w-[850px]"
                  >
                    <div class="w-full items-center md:flex">
                      <div
                        class="relative mb-12 w-full max-w-[310px] md:mr-12 md:mb-0 md:max-w-[250px] lg:mr-14 lg:max-w-[280px] 2xl:mr-16"
                      >
                        <img
                          src="{{ asset('images/testimonials/testimonial-01/image-01.jpg') }}"
                          alt="image"
                          class="w-full"
                        />
                        <span
                          class="absolute -top-6 -left-6 z-[-1] hidden sm:block"
                        >
                          <svg
                            width="77"
                            height="77"
                            viewBox="0 0 77 77"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <circle
                              cx="1.66343"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 1.66343 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 1.66343 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 16.3016 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 16.3016 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 30.9398 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 30.9398 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 45.578 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 45.578 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="74.5216"
                              r="1.66343"
                              transform="rotate(-90 60.2162 74.5216)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="74.5216"
                              r="1.66343"
                              transform="rotate(-90 74.6634 74.5216)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="30.9398"
                              r="1.66343"
                              transform="rotate(-90 60.2162 30.9398)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="30.9398"
                              r="1.66343"
                              transform="rotate(-90 74.6634 30.9398)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 1.66343 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 1.66343 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 16.3016 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 16.3016 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 30.9398 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 30.9398 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 45.578 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 45.578 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 60.2162 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 74.6634 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 60.2162 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 74.6634 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 1.66343 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 1.66343 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 16.3016 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 16.3016 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 30.9398 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 30.9398 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 45.578 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="1.66344"
                              r="1.66343"
                              transform="rotate(-90 45.578 1.66344)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="45.2458"
                              r="1.66343"
                              transform="rotate(-90 60.2162 45.2458)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="45.2458"
                              r="1.66343"
                              transform="rotate(-90 74.6634 45.2458)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="1.66371"
                              r="1.66343"
                              transform="rotate(-90 60.2162 1.66371)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="1.66371"
                              r="1.66343"
                              transform="rotate(-90 74.6634 1.66371)"
                              fill="#d0087d"
                            />
                          </svg>
                        </span>
                        <span class="absolute -bottom-6 -right-6 z-[-1]">
                          <svg
                            width="64"
                            height="64"
                            viewBox="0 0 64 64"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M3 32C3 15.9837 15.9837 3 32 3C48.0163 2.99999 61 15.9837 61 32C61 48.0163 48.0163 61 32 61C15.9837 61 3 48.0163 3 32Z"
                              stroke="#13C296"
                              stroke-width="6"
                            />
                          </svg>
                        </span>
                      </div>
                      <div class="w-full">
                        <div>
                          <div class="mb-7">
                            <img
                              src="{{ asset('images/testimonials/testimonial-01/lineicon.svg') }}"
                              alt="lineicon"
                            />
                          </div>
                          <p
                            class="mb-11 text-base font-medium italic text-body-color sm:text-lg"
                          >
                            Velit est sit voluptas eum sapiente omnis! Porro,
                            impedit minus quam reprehenderit tempore sint
                            quaerat id! Mollitia perspiciatis est asperiores
                            commodi labore!
                          </p>

                          <h4 class="text-xl font-semibold text-dark">
                            Larry Diamond
                          </h4>
                          <p class="text-base text-body-color">
                            Chief Executive Officer.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="mx-auto h-full min-w-[300px] xs:min-w-[368px] sm:min-w-[508px] sm:p-6 md:min-w-[630px] lg:min-w-[738px] 2xl:min-w-[850px]"
                  >
                    <div class="w-full items-center md:flex">
                      <div
                        class="relative mb-12 w-full max-w-[310px] md:mr-12 md:mb-0 md:max-w-[250px] lg:mr-14 lg:max-w-[280px] 2xl:mr-16"
                      >
                        <img
                          src="{{ asset('images/testimonials/testimonial-01/image-01.jpg') }}"
                          alt="image"
                          class="w-full"
                        />
                        <span
                          class="absolute -top-6 -left-6 z-[-1] hidden sm:block"
                        >
                          <svg
                            width="77"
                            height="77"
                            viewBox="0 0 77 77"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <circle
                              cx="1.66343"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 1.66343 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 1.66343 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 16.3016 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 16.3016 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 30.9398 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 30.9398 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 45.578 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 45.578 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="74.5216"
                              r="1.66343"
                              transform="rotate(-90 60.2162 74.5216)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="74.5216"
                              r="1.66343"
                              transform="rotate(-90 74.6634 74.5216)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="30.9398"
                              r="1.66343"
                              transform="rotate(-90 60.2162 30.9398)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="30.9398"
                              r="1.66343"
                              transform="rotate(-90 74.6634 30.9398)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 1.66343 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 1.66343 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 16.3016 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 16.3016 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 30.9398 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 30.9398 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 45.578 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 45.578 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 60.2162 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 74.6634 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 60.2162 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 74.6634 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 1.66343 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 1.66343 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 16.3016 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 16.3016 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 30.9398 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 30.9398 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 45.578 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="1.66344"
                              r="1.66343"
                              transform="rotate(-90 45.578 1.66344)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="45.2458"
                              r="1.66343"
                              transform="rotate(-90 60.2162 45.2458)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="45.2458"
                              r="1.66343"
                              transform="rotate(-90 74.6634 45.2458)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="1.66371"
                              r="1.66343"
                              transform="rotate(-90 60.2162 1.66371)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="1.66371"
                              r="1.66343"
                              transform="rotate(-90 74.6634 1.66371)"
                              fill="#d0087d"
                            />
                          </svg>
                        </span>
                        <span class="absolute -bottom-6 -right-6 z-[-1]">
                          <svg
                            width="64"
                            height="64"
                            viewBox="0 0 64 64"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M3 32C3 15.9837 15.9837 3 32 3C48.0163 2.99999 61 15.9837 61 32C61 48.0163 48.0163 61 32 61C15.9837 61 3 48.0163 3 32Z"
                              stroke="#13C296"
                              stroke-width="6"
                            />
                          </svg>
                        </span>
                      </div>
                      <div class="w-full">
                        <div>
                          <div class="mb-7">
                            <img
                              src="{{ asset('images/testimonials/testimonial-01/lineicon.svg') }}"
                              alt="lineicon"
                            />
                          </div>
                          <p
                            class="mb-11 text-base font-medium italic text-body-color sm:text-lg"
                          >
                            Velit est sit voluptas eum sapiente omnis! Porro,
                            impedit minus quam reprehenderit tempore sint
                            quaerat id! Mollitia perspiciatis est asperiores
                            commodi labore!
                          </p>

                          <h4 class="text-xl font-semibold text-dark">
                            Larry Diamond
                          </h4>
                          <p class="text-base text-body-color">
                            Chief Executive Officer.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="mx-auto h-full min-w-[300px] xs:min-w-[368px] sm:min-w-[508px] sm:p-6 md:min-w-[630px] lg:min-w-[738px] 2xl:min-w-[850px]"
                  >
                    <div class="w-full items-center md:flex">
                      <div
                        class="relative mb-12 w-full max-w-[310px] md:mr-12 md:mb-0 md:max-w-[250px] lg:mr-14 lg:max-w-[280px] 2xl:mr-16"
                      >
                        <img
                          src="{{ asset('images/testimonials/testimonial-01/image-01.jpg') }}"
                          alt="image"
                          class="w-full"
                        />
                        <span
                          class="absolute -top-6 -left-6 z-[-1] hidden sm:block"
                        >
                          <svg
                            width="77"
                            height="77"
                            viewBox="0 0 77 77"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <circle
                              cx="1.66343"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 1.66343 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 1.66343 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 16.3016 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 16.3016 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 30.9398 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 30.9398 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="74.5221"
                              r="1.66343"
                              transform="rotate(-90 45.578 74.5221)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="30.94"
                              r="1.66343"
                              transform="rotate(-90 45.578 30.94)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="74.5216"
                              r="1.66343"
                              transform="rotate(-90 60.2162 74.5216)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="74.5216"
                              r="1.66343"
                              transform="rotate(-90 74.6634 74.5216)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="30.9398"
                              r="1.66343"
                              transform="rotate(-90 60.2162 30.9398)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="30.9398"
                              r="1.66343"
                              transform="rotate(-90 74.6634 30.9398)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 1.66343 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 1.66343 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 16.3016 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 16.3016 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 30.9398 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 30.9398 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 45.578 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 45.578 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 60.2162 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="59.8839"
                              r="1.66343"
                              transform="rotate(-90 74.6634 59.8839)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 60.2162 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="16.3017"
                              r="1.66343"
                              transform="rotate(-90 74.6634 16.3017)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 1.66343 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="1.66343"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 1.66343 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 16.3016 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="16.3016"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 16.3016 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 30.9398 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="30.9398"
                              cy="1.66342"
                              r="1.66343"
                              transform="rotate(-90 30.9398 1.66342)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="45.2455"
                              r="1.66343"
                              transform="rotate(-90 45.578 45.2455)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="45.578"
                              cy="1.66344"
                              r="1.66343"
                              transform="rotate(-90 45.578 1.66344)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="45.2458"
                              r="1.66343"
                              transform="rotate(-90 60.2162 45.2458)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="45.2458"
                              r="1.66343"
                              transform="rotate(-90 74.6634 45.2458)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="60.2162"
                              cy="1.66371"
                              r="1.66343"
                              transform="rotate(-90 60.2162 1.66371)"
                              fill="#d0087d"
                            />
                            <circle
                              cx="74.6634"
                              cy="1.66371"
                              r="1.66343"
                              transform="rotate(-90 74.6634 1.66371)"
                              fill="#d0087d"
                            />
                          </svg>
                        </span>
                        <span class="absolute -bottom-6 -right-6 z-[-1]">
                          <svg
                            width="64"
                            height="64"
                            viewBox="0 0 64 64"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M3 32C3 15.9837 15.9837 3 32 3C48.0163 2.99999 61 15.9837 61 32C61 48.0163 48.0163 61 32 61C15.9837 61 3 48.0163 3 32Z"
                              stroke="#13C296"
                              stroke-width="6"
                            />
                          </svg>
                        </span>
                      </div>
                      <div class="w-full">
                        <div>
                          <div class="mb-7">
                            <img
                              src="{{ asset('images/testimonials/testimonial-01/lineicon.svg') }}"
                              alt="lineicon"
                            />
                          </div>
                          <p
                            class="mb-11 text-base font-medium italic text-body-color sm:text-lg"
                          >
                            Velit est sit voluptas eum sapiente omnis! Porro,
                            impedit minus quam reprehenderit tempore sint
                            quaerat id! Mollitia perspiciatis est asperiores
                            commodi labore!
                          </p>

                          <h4 class="text-xl font-semibold text-dark">
                            Larry Diamond
                          </h4>
                          <p class="text-base text-body-color">
                            Chief Executive Officer.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="absolute left-0 right-0 bottom-0 flex items-center justify-center lg:pl-[120px] 2xl:pl-0"
                >
                  <button
                    class="mx-1 flex h-12 w-12 items-center justify-center rounded-full bg-white text-pink-600 shadow-input transition-all hover:bg-pink-600 hover:text-white"
                    @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1"
                  >
                    <svg
                      width="15"
                      height="13"
                      viewBox="0 0 15 13"
                      class="fill-current"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M5.24264 11.8033L0.46967 7.03037C0.176777 6.73748 0.176777 6.2626 0.46967 5.96971L5.24264 1.19674C5.53553 0.903845 6.01041 0.903845 6.3033 1.19674C6.59619 1.48963 6.59619 1.96451 6.3033 2.2574L2.81066 5.75004H14C14.4142 5.75004 14.75 6.08583 14.75 6.50004C14.75 6.91425 14.4142 7.25004 14 7.25004H2.81066L6.3033 10.7427C6.59619 11.0356 6.59619 11.5104 6.3033 11.8033C6.01041 12.0962 5.53553 12.0962 5.24264 11.8033Z"
                      />
                    </svg>
                  </button>
                  <button
                    class="mx-1 flex h-12 w-12 items-center justify-center rounded-full bg-white text-pink-600 shadow-input transition-all hover:bg-pink-600 hover:text-white"
                    @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1"
                  >
                    <svg
                      width="15"
                      height="13"
                      viewBox="0 0 15 13"
                      class="fill-current"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M9.75736 11.8033L14.5303 7.03037C14.8232 6.73748 14.8232 6.2626 14.5303 5.96971L9.75736 1.19674C9.46447 0.903845 8.98959 0.903845 8.6967 1.19674C8.40381 1.48963 8.40381 1.96451 8.6967 2.2574L12.1893 5.75004H1C0.585786 5.75004 0.25 6.08583 0.25 6.50004C0.25 6.91425 0.585786 7.25004 1 7.25004H12.1893L8.6967 10.7427C8.40381 11.0356 8.40381 11.5104 8.6967 11.8033C8.98959 12.0962 9.46447 12.0962 9.75736 11.8033Z"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== Testimonials Section End -->

      <!-- ====== Contact Section Start -->
      <section
            class="rounded-lg overflow-hidde relative z-10 bg-slate-50 py-20 lg:py-[120px]"
        >
        <div class="container mx-auto">
          <div class="-mx-4 flex flex-wrap lg:justify-between">
            <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
              <div class="mb-12 max-w-[570px] lg:mb-0">
                <span class="mb-4 block text-base font-semibold text-pink-600">
                  Contact Us
                </span>
                <h2
                  class="mb-6 text-[32px] font-bold uppercase text-dark sm:text-[40px] lg:text-[36px] xl:text-[40px]"
                >
                  GET IN TOUCH WITH US
                </h2>
                <p class="mb-9 text-base leading-relaxed text-body-color">
                    Let’s talk about your investment and how we can make it happen.
                    This is the beginning of creating the life that you want to live.
                    Need assistance?
                    We provide a unique opportunity to make profits online, based on our innovative developments that allow us to conduct risk-free bot trading on the largest cryptocurrency and stock exchanges.
                </p>

                <div class="mb-8 flex w-full max-w-[370px]">
                  <div
                    class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-pink-600 bg-opacity-5 text-pink-600 sm:h-[70px] sm:max-w-[70px]"
                  >
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      class="fill-current"
                    >
                      <path
                        d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="mb-1 text-xl font-bold text-dark">
                      Our Location
                    </h4>
                    <p class="text-base text-body-color">
                        175 Latchmere Road, London, England, SW11 2JZ
                    </p>
                  </div>
                </div>

                <div class="mb-8 flex w-full max-w-[370px]">
                  <div
                    class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-pink-600 bg-opacity-5 text-pink-600 sm:h-[70px] sm:max-w-[70px]"
                  >
                    <svg
                      width="24"
                      height="26"
                      viewBox="0 0 24 26"
                      class="fill-current"
                    >
                      <path
                        d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z"
                      />
                      <path
                        d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z"
                      />
                      <path
                        d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="mb-1 text-xl font-bold text-dark">
                      Phone Number
                    </h4>
                    <p class="text-base text-body-color">
                      (+62)81 414 257 9980
                    </p>
                  </div>
                </div>

                <div class="mb-8 flex w-full max-w-[370px]">
                  <div
                    class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-pink-600 bg-opacity-5 text-pink-600 sm:h-[70px] sm:max-w-[70px]"
                  >
                    <svg
                      width="28"
                      height="19"
                      viewBox="0 0 28 19"
                      class="fill-current"
                    >
                      <path
                        d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z"
                      />
                    </svg>
                  </div>
                  <div class="w-full">
                    <h4 class="mb-1 text-xl font-bold text-dark">
                      Email Address
                    </h4>
                    <p class="text-base text-body-color">support@massprofit.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
              <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
                <form>
                  <div class="mb-6">
                    <input
                      type="text"
                      placeholder="Your Name"
                      class="border-[f0f0f0] w-full rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-pink-600 focus-visible:shadow-none"
                    />
                  </div>
                  <div class="mb-6">
                    <input
                      type="email"
                      placeholder="Your Email"
                      class="border-[f0f0f0] w-full rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-pink-600 focus-visible:shadow-none"
                    />
                  </div>
                  <div class="mb-6">
                    <input
                      type="text"
                      placeholder="Your Phone"
                      class="border-[f0f0f0] w-full rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-pink-600 focus-visible:shadow-none"
                    />
                  </div>
                  <div class="mb-6">
                    <textarea
                      rows="6"
                      placeholder="Your Message"
                      class="border-[f0f0f0] w-full resize-none rounded border py-3 px-[14px] text-base text-body-color outline-none focus:border-pink-600 focus-visible:shadow-none"
                    ></textarea>
                  </div>
                  <div>
                    <button
                      type="submit"
                      class="w-full rounded border border-pink-600 bg-pink-600 p-3 text-white transition hover:bg-opacity-90"
                    >
                      Send Message
                    </button>
                  </div>
                </form>
                <div>
                  <span class="absolute -top-10 -right-9 z-[-1]">
                    <svg
                      width="100"
                      height="100"
                      viewBox="0 0 100 100"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                        fill="#d0087d"
                      />
                    </svg>
                  </span>
                  <span class="absolute -right-10 top-[90px] z-[-1]">
                    <svg
                      width="34"
                      height="134"
                      viewBox="0 0 34 134"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="31.9993"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 31.9993 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 31.9993 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 31.9993 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 31.9993 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 31.9993 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 31.9993 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 31.9993 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 31.9993 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 31.9993 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 31.9993 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 17.3333 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 17.3333 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 17.3333 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 17.3333 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 17.3333 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 17.3333 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 17.3333 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 17.3333 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 17.3333 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 17.3333 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 2.66536 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 2.66536 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 2.66536 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 2.66536 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 2.66536 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 2.66536 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 2.66536 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 2.66536 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 2.66536 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 2.66536 1.66665)"
                        fill="#13C296"
                      />
                    </svg>
                  </span>
                  <span class="absolute -left-7 -bottom-7 z-[-1]">
                    <svg
                      width="107"
                      height="134"
                      viewBox="0 0 107 134"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="104.999"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 104.999 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 104.999 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 104.999 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 104.999 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 104.999 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 104.999 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 104.999 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 104.999 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 104.999 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="104.999"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 104.999 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 90.3333 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 90.3333 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 90.3333 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 90.3333 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 90.3333 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 90.3333 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 90.3333 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 90.3333 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 90.3333 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="90.3333"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 90.3333 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 75.6654 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 31.9993 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 75.6654 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 31.9993 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 75.6654 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 31.9993 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 75.6654 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 31.9993 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 75.6654 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 31.9993 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 75.6654 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 31.9993 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 75.6654 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 31.9993 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 75.6654 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 31.9993 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 75.6654 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 31.9993 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="75.6654"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 75.6654 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="31.9993"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 31.9993 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 60.9993 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 17.3333 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 60.9993 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 17.3333 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 60.9993 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 17.3333 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 60.9993 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 17.3333 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 60.9993 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 17.3333 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 60.9993 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 17.3333 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 60.9993 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 17.3333 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 60.9993 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 17.3333 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 60.9993 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 17.3333 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="60.9993"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 60.9993 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="17.3333"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 17.3333 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 46.3333 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="132"
                        r="1.66667"
                        transform="rotate(180 2.66536 132)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 46.3333 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="117.333"
                        r="1.66667"
                        transform="rotate(180 2.66536 117.333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 46.3333 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="102.667"
                        r="1.66667"
                        transform="rotate(180 2.66536 102.667)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 46.3333 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="88"
                        r="1.66667"
                        transform="rotate(180 2.66536 88)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 46.3333 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="73.3333"
                        r="1.66667"
                        transform="rotate(180 2.66536 73.3333)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 46.3333 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="45"
                        r="1.66667"
                        transform="rotate(180 2.66536 45)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 46.3333 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="16"
                        r="1.66667"
                        transform="rotate(180 2.66536 16)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 46.3333 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="59"
                        r="1.66667"
                        transform="rotate(180 2.66536 59)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 46.3333 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="30.6666"
                        r="1.66667"
                        transform="rotate(180 2.66536 30.6666)"
                        fill="#13C296"
                      />
                      <circle
                        cx="46.3333"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 46.3333 1.66665)"
                        fill="#13C296"
                      />
                      <circle
                        cx="2.66536"
                        cy="1.66665"
                        r="1.66667"
                        transform="rotate(180 2.66536 1.66665)"
                        fill="#13C296"
                      />
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
