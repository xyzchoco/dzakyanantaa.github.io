<nav class="bg-gray-700" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="img/logo.png" alt="Association Technology Software Enginer Polinela">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-navbar-link href="/" :active="request()->is('/')">Beranda</x-navbar-link>
              <x-navbar-link href="/tentang" :active="request()->is('tentang')">Tentang</x-navbar-link>
              <x-navbar-link href="/profil" :active="request()->is('profil')">Visi Misi</x-navbar-link>
              <x-navbar-link href="/kegiatan" :active="request()->is('kegiatan')">Kegiatan</x-navbar-link>
              <x-navbar-link href="/kontak" :active="request()->is('Kontak')">Kontak</x-navbar-link>
              <x-dropdown></x-dropdown>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              {{-- <div>
                <button @click="isOpen = !isOpen"
                 type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
              </div> --}}

                
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button @click="isOpen = !isOpen" 
          type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" 
            class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" 
            class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <x-navbar-link href="/" :active="request()->is('/')">Beranda</x-navbar-link>
        <x-navbar-link href="/about" :active="request()->is('about')">Tentang</x-navbar-link>
        <x-navbar-link href="/contact" :active="request()->is('contact')">Kontak</x-navbar-link>
      </div>
      <div class="border-t border-gray-700 pt-4">
        <div class="flex items-center px-5">
        </div>
      </div>
    </div>
  </nav>