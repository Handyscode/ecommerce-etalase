<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ecommerce</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        @if (Route::has('login'))
          @auth
            @if (Auth::user()->role == 'admin')
              <a
                href="{{ url('/admin/dashboard') }}"
                class="rounded-md px-3 py-2 text-slate-500 ring-transparent transition hover:text-slate-500/70 focus:outline-none focus-visible:ring-[#FF2D20]"
              >
                Dashboard
              </a>
            @else
              <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-slate-500 ring-transparent transition hover:text-slate-500/70 focus:outline-none focus-visible:ring-[#FF2D20]"
              >
                Dashboard
              </a>
            @endif
          @else
            <a
              href="{{ route('login') }}"
              class="rounded-md px-3 py-2 text-black ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
              Log in
            </a>

            @if (Route::has('register'))
              <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
              >
                Register
              </a>
            @endif
          @endauth
        @endif
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="py-6">
              @if (Route::has('login'))
                @auth
                  @if (Auth::user()->role == 'admin')
                    <a
                      href="{{ url('/admin/dashboard') }}"
                      class="rounded-md px-3 py-2 text-slate-500 ring-transparent transition hover:text-slate-500/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                      Dashboard
                    </a>
                  @else
                    <a
                      href="{{ url('/dashboard') }}"
                      class="rounded-md px-3 py-2 text-slate-500 ring-transparent transition hover:text-slate-500/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                      Dashboard
                    </a>
                  @endif
                @else
                  <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                  >
                    Log in
                  </a>

                  @if (Route::has('register'))
                    <a
                      href="{{ route('register') }}"
                      class="rounded-md px-3 py-2 text-black ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                      Register
                    </a>
                  @endif
                @endauth
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="text-center mt-14">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Selamat Datang</h1>
      </div>
    </div>
  </div>
</div>

</body>
</html>