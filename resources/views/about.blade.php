@extends('layout')

@section('content')
<!-- ====== Navbar Section Start -->
<header
x-data="
  {
    navbarOpen: false,
  }
"
class="absolute left-0 top-0 z-50 w-full"
>
<div class="container mx-auto">
  <div class="relative -mx-4 flex items-center justify-between">
    <div class="w-60 max-w-full px-4">
      <a href="javascript:void(0)" class="block w-full py-5">
        <img
          src="{{ asset('images/logo/logo.png') }}"
          alt="logo"
          class="w-full"
        />
      </a>
    </div>
    <div class="flex w-full items-center justify-between px-4">
      <div>
        <button
          @click="navbarOpen = !navbarOpen"
          :class="navbarOpen && 'navbarTogglerActive'"
          id="navbarToggler"
          class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-pink-800 focus:ring-2 lg:hidden"
        >
          <span
            class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
          ></span>
          <span
            class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
          ></span>
          <span
            class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
          ></span>
        </button>
        <nav
          x-transition
          :class="!navbarOpen && 'hidden'"
          id="navbarCollapse"
          class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none"
        >
          <ul class="block lg:flex">
            <li>
              <a
                href="/"
                class="flex py-2 text-base font-medium text-dark hover:text-pink-600 lg:ml-12 lg:inline-flex"
              >
                Home
              </a>
            </li>
            <li>
              <a
                href="about"
                class="flex py-2 text-base font-medium text-dark hover:text-pink-600 lg:ml-12 lg:inline-flex"
              >
                About
              </a>
            </li>
            <li>
              <a
                href="services"
                class="flex py-2 text-base font-medium text-dark hover:text-pink-600 lg:ml-12 lg:inline-flex"
              >
                Services
              </a>
            </li>
            <li>
              <a
                href="contact"
                class="flex py-2 text-base font-medium text-dark hover:text-pink-600 lg:ml-12 lg:inline-flex"
              >
                Contact
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
        <a
          href="sign-in"
          class="py-3 px-7 text-base font-medium text-dark hover:text-pink-600"
        >
          Login
        </a>
        <a
          href="sign-up"
          class="rounded-lg bg-pink-800 py-3 px-7 text-base font-medium text-white hover:bg-opacity-90"
        >
          Sign Up
        </a>
      </div>
    </div>
  </div>
</div>
</header>
<!-- ====== Navbar Section End -->

<!-- ====== Services Section Start -->
<section class="overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
<div class="container mx-auto">
  <div class="-mx-4 flex flex-wrap items-center justify-between">
    <div class="w-full px-4 lg:w-6/12">
      <div class="-mx-3 flex items-center sm:-mx-4">
        <div class="w-full px-3 sm:px-4 xl:w-1/2">
          <div class="py-3 sm:py-4">
            <img
              src="{{ asset('images/about/image-1.jpg') }}"
              alt=""
              class="w-full rounded-2xl"
            />
          </div>
          <div class="py-3 sm:py-4">
            <img
              src="{{ asset('images/about/image-2.jpg') }}"
              alt=""
              class="w-full rounded-2xl"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:px-4 xl:w-1/2">
          <div class="relative z-10 my-4">
            <img
              src="{{ asset('images/about/image-3.jpg') }}"
              alt=""
              class="w-full rounded-2xl"
            />
            <span class="absolute -right-7 -bottom-7 z-[-1]">
              <svg
                width="134"
                height="106"
                viewBox="0 0 134 106"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle
                  cx="1.66667"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 1.66667 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="16.3333"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 16.3333 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="31"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 31 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="45.6667"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 45.6667 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="60.3334"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 60.3334 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="88.6667"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 88.6667 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="117.667"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 117.667 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="74.6667"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 74.6667 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="103"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 103 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="132"
                  cy="104"
                  r="1.66667"
                  transform="rotate(-90 132 104)"
                  fill="#d0087d"
                />
                <circle
                  cx="1.66667"
                  cy="89.3333"
                  r="1.66667"
                  transform="rotate(-90 1.66667 89.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="16.3333"
                  cy="89.3333"
                  r="1.66667"
                  transform="rotate(-90 16.3333 89.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="31"
                  cy="89.3333"
                  r="1.66667"
                  transform="rotate(-90 31 89.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="45.6667"
                  cy="89.3333"
                  r="1.66667"
                  transform="rotate(-90 45.6667 89.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="60.3333"
                  cy="89.3338"
                  r="1.66667"
                  transform="rotate(-90 60.3333 89.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="88.6667"
                  cy="89.3338"
                  r="1.66667"
                  transform="rotate(-90 88.6667 89.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="117.667"
                  cy="89.3338"
                  r="1.66667"
                  transform="rotate(-90 117.667 89.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="74.6667"
                  cy="89.3338"
                  r="1.66667"
                  transform="rotate(-90 74.6667 89.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="103"
                  cy="89.3338"
                  r="1.66667"
                  transform="rotate(-90 103 89.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="132"
                  cy="89.3338"
                  r="1.66667"
                  transform="rotate(-90 132 89.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="1.66667"
                  cy="74.6673"
                  r="1.66667"
                  transform="rotate(-90 1.66667 74.6673)"
                  fill="#d0087d"
                />
                <circle
                  cx="1.66667"
                  cy="31.0003"
                  r="1.66667"
                  transform="rotate(-90 1.66667 31.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="16.3333"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 16.3333 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="16.3333"
                  cy="31.0003"
                  r="1.66667"
                  transform="rotate(-90 16.3333 31.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="31"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 31 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="31"
                  cy="31.0003"
                  r="1.66667"
                  transform="rotate(-90 31 31.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="45.6667"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 45.6667 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="45.6667"
                  cy="31.0003"
                  r="1.66667"
                  transform="rotate(-90 45.6667 31.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="60.3333"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 60.3333 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="60.3333"
                  cy="30.9998"
                  r="1.66667"
                  transform="rotate(-90 60.3333 30.9998)"
                  fill="#d0087d"
                />
                <circle
                  cx="88.6667"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 88.6667 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="88.6667"
                  cy="30.9998"
                  r="1.66667"
                  transform="rotate(-90 88.6667 30.9998)"
                  fill="#d0087d"
                />
                <circle
                  cx="117.667"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 117.667 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="117.667"
                  cy="30.9998"
                  r="1.66667"
                  transform="rotate(-90 117.667 30.9998)"
                  fill="#d0087d"
                />
                <circle
                  cx="74.6667"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 74.6667 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="74.6667"
                  cy="30.9998"
                  r="1.66667"
                  transform="rotate(-90 74.6667 30.9998)"
                  fill="#d0087d"
                />
                <circle
                  cx="103"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 103 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="103"
                  cy="30.9998"
                  r="1.66667"
                  transform="rotate(-90 103 30.9998)"
                  fill="#d0087d"
                />
                <circle
                  cx="132"
                  cy="74.6668"
                  r="1.66667"
                  transform="rotate(-90 132 74.6668)"
                  fill="#d0087d"
                />
                <circle
                  cx="132"
                  cy="30.9998"
                  r="1.66667"
                  transform="rotate(-90 132 30.9998)"
                  fill="#d0087d"
                />
                <circle
                  cx="1.66667"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 1.66667 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="1.66667"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 1.66667 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="16.3333"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 16.3333 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="16.3333"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 16.3333 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="31"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 31 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="31"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 31 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="45.6667"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 45.6667 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="45.6667"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 45.6667 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="60.3333"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 60.3333 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="60.3333"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 60.3333 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="88.6667"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 88.6667 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="88.6667"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 88.6667 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="117.667"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 117.667 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="117.667"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 117.667 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="74.6667"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 74.6667 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="74.6667"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 74.6667 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="103"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 103 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="103"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 103 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="132"
                  cy="60.0003"
                  r="1.66667"
                  transform="rotate(-90 132 60.0003)"
                  fill="#d0087d"
                />
                <circle
                  cx="132"
                  cy="16.3333"
                  r="1.66667"
                  transform="rotate(-90 132 16.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="1.66667"
                  cy="45.3333"
                  r="1.66667"
                  transform="rotate(-90 1.66667 45.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="1.66667"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 1.66667 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="16.3333"
                  cy="45.3333"
                  r="1.66667"
                  transform="rotate(-90 16.3333 45.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="16.3333"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 16.3333 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="31"
                  cy="45.3333"
                  r="1.66667"
                  transform="rotate(-90 31 45.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="31"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 31 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="45.6667"
                  cy="45.3333"
                  r="1.66667"
                  transform="rotate(-90 45.6667 45.3333)"
                  fill="#d0087d"
                />
                <circle
                  cx="45.6667"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 45.6667 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="60.3333"
                  cy="45.3338"
                  r="1.66667"
                  transform="rotate(-90 60.3333 45.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="60.3333"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 60.3333 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="88.6667"
                  cy="45.3338"
                  r="1.66667"
                  transform="rotate(-90 88.6667 45.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="88.6667"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 88.6667 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="117.667"
                  cy="45.3338"
                  r="1.66667"
                  transform="rotate(-90 117.667 45.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="117.667"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 117.667 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="74.6667"
                  cy="45.3338"
                  r="1.66667"
                  transform="rotate(-90 74.6667 45.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="74.6667"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 74.6667 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="103"
                  cy="45.3338"
                  r="1.66667"
                  transform="rotate(-90 103 45.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="103"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 103 1.66683)"
                  fill="#d0087d"
                />
                <circle
                  cx="132"
                  cy="45.3338"
                  r="1.66667"
                  transform="rotate(-90 132 45.3338)"
                  fill="#d0087d"
                />
                <circle
                  cx="132"
                  cy="1.66683"
                  r="1.66667"
                  transform="rotate(-90 132 1.66683)"
                  fill="#d0087d"
                />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
      <div class="mt-10 lg:mt-0">
        <span class="mb-2 block text-lg font-semibold text-pink-600">
          About Us
        </span>
        <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">
          Make your customers happy by giving services.
        </h2>
        <p class="mb-8 text-base text-body-color">
          It is a long established fact that a reader will be distracted
          by the readable content of a page when looking at its layout.
          The point of using Lorem Ipsum is that it has a more-or-less.
        </p>
        <p class="mb-12 text-base text-body-color">
          A domain name is one of the first steps to establishing your
          brand. Secure a consistent brand image with a domain name that
          matches your business.
        </p>
        <a
          href="javascript:void(0)"
          class="inline-flex items-center justify-center rounded-lg bg-pink-600 py-4 px-10 text-center text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
        >
          Get Started
        </a>
      </div>
    </div>
  </div>
</div>
</section>
<!-- ====== Services Section End -->

<!-- ====== Team Section Start -->
<section
class="rounded-lg bg-slate-50 pt-20 pb-10 lg:pt-[120px] lg:pb-20"
>
<div class="container mx-auto">
  <div class="-mx-4 flex flex-wrap">
    <div class="w-full px-4">
      <div class="mx-auto mb-[60px] max-w-[510px] text-center">
        <span class="mb-2 block text-lg font-semibold text-pink-600">
          Our Team
        </span>
        <h2
          class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]"
        >
          Our Awesome Team
        </h2>
        <p class="text-base text-body-color">
          There are many variations of passages of Lorem Ipsum available
          but the majority have suffered alteration in some form.
        </p>
      </div>
    </div>
  </div>

  <div class="-mx-4 flex flex-wrap justify-center">
    <div class="w-full px-4 md:w-1/2 xl:w-1/4">
      <div class="mx-auto mb-10 w-full max-w-[370px]">
        <div class="relative overflow-hidden rounded-lg">
          <img
            src="{{ asset('images/team/team-01/image-01.jpg') }}"
            alt="image"
            class="w-full"
          />
          <div class="absolute bottom-5 left-0 w-full text-center">
            <div
              class="relative mx-5 overflow-hidden rounded-lg bg-white py-5 px-3"
            >
              <h3 class="text-base font-semibold text-dark">
                Coriss Ambady
              </h3>
              <p class="text-sm text-body-color">Web Developer</p>
              <div>
                <span class="absolute left-0 bottom-0">
                  <svg
                    width="61"
                    height="30"
                    viewBox="0 0 61 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="16"
                      cy="45"
                      r="45"
                      fill="#13C296"
                      fill-opacity="0.11"
                    />
                  </svg>
                </span>
                <span class="absolute top-0 right-0">
                  <svg
                    width="20"
                    height="25"
                    viewBox="0 0 20 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="0.706257"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 0.706257 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 6.39669 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 12.0881 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 17.7785 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 0.706257 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 6.39669 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 12.0881 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 17.7785 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 0.706257 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 6.39669 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 12.0881 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 17.7785 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 0.706257 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 6.39669 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 12.0881 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 17.7785 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 0.706257 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 6.39669 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 12.0881 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 17.7785 1.58989)"
                      fill="#d0087d"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full px-4 md:w-1/2 xl:w-1/4">
      <div class="mx-auto mb-10 w-full max-w-[370px]">
        <div class="relative overflow-hidden rounded-lg">
          <img
            src="{{ asset('images/team/team-01/image-02.jpg') }}"
            alt="image"
            class="w-full"
          />
          <div class="absolute bottom-5 left-0 w-full text-center">
            <div
              class="relative mx-5 overflow-hidden rounded-lg bg-white py-5 px-3"
            >
              <h3 class="text-base font-semibold text-dark">
                Glorius Cristian
              </h3>
              <p class="text-sm text-body-color">App Developer</p>
              <div>
                <span class="absolute left-0 bottom-0">
                  <svg
                    width="61"
                    height="30"
                    viewBox="0 0 61 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="16"
                      cy="45"
                      r="45"
                      fill="#13C296"
                      fill-opacity="0.11"
                    />
                  </svg>
                </span>
                <span class="absolute top-0 right-0">
                  <svg
                    width="20"
                    height="25"
                    viewBox="0 0 20 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="0.706257"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 0.706257 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 6.39669 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 12.0881 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 17.7785 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 0.706257 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 6.39669 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 12.0881 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 17.7785 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 0.706257 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 6.39669 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 12.0881 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 17.7785 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 0.706257 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 6.39669 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 12.0881 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 17.7785 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 0.706257 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 6.39669 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 12.0881 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 17.7785 1.58989)"
                      fill="#d0087d"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full px-4 md:w-1/2 xl:w-1/4">
      <div class="mx-auto mb-10 w-full max-w-[370px]">
        <div class="relative overflow-hidden rounded-lg">
          <img
            src="{{ asset('images/team/team-01/image-03.jpg') }}"
            alt="image"
            class="w-full"
          />
          <div class="absolute bottom-5 left-0 w-full text-center">
            <div
              class="relative mx-5 overflow-hidden rounded-lg bg-white py-5 px-3"
            >
              <h3 class="text-base font-semibold text-dark">
                Jackie Sanders
              </h3>
              <p class="text-sm text-body-color">UI/UX Designer</p>
              <div>
                <span class="absolute left-0 bottom-0">
                  <svg
                    width="61"
                    height="30"
                    viewBox="0 0 61 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="16"
                      cy="45"
                      r="45"
                      fill="#13C296"
                      fill-opacity="0.11"
                    />
                  </svg>
                </span>
                <span class="absolute top-0 right-0">
                  <svg
                    width="20"
                    height="25"
                    viewBox="0 0 20 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="0.706257"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 0.706257 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 6.39669 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 12.0881 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 17.7785 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 0.706257 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 6.39669 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 12.0881 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 17.7785 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 0.706257 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 6.39669 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 12.0881 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 17.7785 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 0.706257 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 6.39669 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 12.0881 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 17.7785 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 0.706257 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 6.39669 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 12.0881 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 17.7785 1.58989)"
                      fill="#d0087d"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full px-4 md:w-1/2 xl:w-1/4">
      <div class="mx-auto mb-10 w-full max-w-[370px]">
        <div class="relative overflow-hidden rounded-lg">
          <img
            src="{{ asset('images/team/team-01/image-04.jpg') }}"
            alt="image"
            class="w-full"
          />
          <div class="absolute bottom-5 left-0 w-full text-center">
            <div
              class="relative mx-5 overflow-hidden rounded-lg bg-white py-5 px-3"
            >
              <h3 class="text-base font-semibold text-dark">
                Nikolas Brooten
              </h3>
              <p class="text-sm text-body-color">Sales Manager</p>
              <div>
                <span class="absolute left-0 bottom-0">
                  <svg
                    width="61"
                    height="30"
                    viewBox="0 0 61 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="16"
                      cy="45"
                      r="45"
                      fill="#13C296"
                      fill-opacity="0.11"
                    />
                  </svg>
                </span>
                <span class="absolute top-0 right-0">
                  <svg
                    width="20"
                    height="25"
                    viewBox="0 0 20 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="0.706257"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 0.706257 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 6.39669 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 12.0881 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="24.3533"
                      r="0.646687"
                      transform="rotate(-90 17.7785 24.3533)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 0.706257 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 6.39669 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 12.0881 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="18.6624"
                      r="0.646687"
                      transform="rotate(-90 17.7785 18.6624)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 0.706257 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 6.39669 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 12.0881 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="12.9717"
                      r="0.646687"
                      transform="rotate(-90 17.7785 12.9717)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 0.706257 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 6.39669 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 12.0881 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="7.28077"
                      r="0.646687"
                      transform="rotate(-90 17.7785 7.28077)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="0.706257"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 0.706257 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="6.39669"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 6.39669 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="12.0881"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 12.0881 1.58989)"
                      fill="#d0087d"
                    />
                    <circle
                      cx="17.7785"
                      cy="1.58989"
                      r="0.646687"
                      transform="rotate(-90 17.7785 1.58989)"
                      fill="#d0087d"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- ====== Team Section End -->
@endsection
