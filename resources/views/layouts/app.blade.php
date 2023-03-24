<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <!-- Alpine v3 -->
        <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-slate-50 w-[100vw]">
        <div class="drawer drawer-mobile ">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col items-start">
                <div class="navbar bg-white flex justify-between w-full">
                    <div class="flex items-center gap-2">
                      <label tabindex="0" class="btn btn-ghost btn-circle drawer-button lg:hidden" for="my-drawer-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
                      </label>
                      <h1 class="text-2xl"><strong>@isset($title)
                        {{$title}}
                      @endisset</strong></h1>
                    </div>
                    <div class="dropdown dropdown-end">
                        <div class="flex items-center gap-2">
                            <div class="flex flex-col items-end">
                                <strong>{{auth()->user()->name}}</strong>
                                <p class="text-xs">{{auth()->user()->email}}</p>
                            </div>
                            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                  <img src="https://source.unsplash.com/random/" />
                                </div>
                            </label>
                        </div>
                        <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                          <li><a href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                          </a></li>
                          <li><form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                          </form></li>
                        </ul>
                      </div>
                </div>
                {{-- Main --}}
                <main class="w-full bg-slate-50">
                    {{ $slot }}
                </main>
                {{-- endMain --}}
            </div> 
            <div class="drawer-side ">
              <label for="my-drawer-2" class="drawer-overlay"></label> 
              <ul class="menu p-4 w-80 bg-gray-100 text-base-content">
                <a href="" class="flex items-center gap-2 mb-5">
                    <img src="{{asset('images/logo.png')}}" class="w-[60px]">
                    <h1 class="text-3xl text-black font-extrabold"><strong>Unit Produksi</strong></h1>
                </a>
                <li><a href="{{route('dashboard')}}" class="{{ (request()->is('/')) ? 'active text-white' : 'text-black' }}" >
                    <div class="flex items-center gap-5">
                        <img src="{{asset('images/dashboard.png')}}" class="w-8 {{ (request()->is('/')) ? 'invert' : 'text-black' }}" alt="dashboard">
                        <h2><strong>Dasboard</strong></h2>
                    </div>
                </a></li>
                <div class="collapse collapse-arrow rounded-box {{ (request()->is('orders') | request()->is('orders/export-import')) ? 'collapse-open' : '' }}">
                  <input type="checkbox" class="w-full"/> 
                  <div class="collapse-title text-base font-medium">
                    <div class="flex items-center gap-5">
                      <img src="{{asset('images/clipboard.png')}}" class="w-8" alt="clipboard">
                      <h2><strong>Pesanan</strong></h2>
                    </div>
                  </div>
                  <div class="collapse-content bg-gray-100"> 
                      <ul class="menu bg-gray-100 text-base-content">
                        <li><a href="{{route('orders')}}" class="{{ (request()->is('orders')) ? 'active text-white' : '' }}">
                            <h2><strong>Pesanan</strong></h2>
                        </a></li>
                        <li><a href="{{route('orders/export-import')}}" class="{{ (request()->is('orders/export-import')) ? 'active text-white' : '' }}">
                          <h2><strong>Export-Import</strong></h2>
                        </a></li>
                      </ul>
                  </div>
                </div>
              </ul>
            </div>
          </div>


        @stack('modals')
        @livewire('livewire-ui-modal')
        @livewireScripts
    </body>
</html>

{{-- ModalMessageStatus --}}
@if(session('success'))
  <input type="checkbox" id="success" class="modal-toggle" />
  <label for="success" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <div class="flex justify-center">
          <svg class="text-green-500 w-28 h-28 animate-fade-in-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h1 class="flex justify-center font-bold text-2xl">{{session('success')}}</h1>
    </label>
  </label>

  <script>
      document.getElementById("success").checked = true;
  </script>

@elseif(session('error'))
<input type="checkbox" id="error" class="modal-toggle" />
  <label for="error" class="modal cursor-pointer">
    <label class="modal-box relative" for="">
        <div class="flex justify-center">
          <svg class="text-red-500 w-28 h-28 animate-fade-in-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h1 class="flex justify-center font-bold text-2xl">{{session('error')}}</h1>
    </label>
  </label>

  <script>
      function printInvoice(){
       window.print();
      }
      document.getElementById("success").checked = true;
  </script>
@endif
{{-- endModalMessageStatus --}}
