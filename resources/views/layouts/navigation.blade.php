<!-- Navbar -->
<nav class="bg-white shadow-md">
    <div class="max-w-4xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">

        <!-- Left Logo -->
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <img class="block h-8 w-auto" src="{{ asset('assets/logo/navbar-logo.svg') }}" alt="Workflow">
          </div>
        </div>


          <!-- Right Menu -->
        <div class="ml-3 relative">
            <div class="hidden sm:block sm:ml-6 ">
                <div class="flex space-x-4">

                    <a href="#" class="text-black shadow-inner hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Home</a>

                    <a href="#" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Artikel</a>

                    <a href="#" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium">Layanan</a>
                </div>
            </div>
        </div>

      </div>
    </div>

    <!-- Menu (Mobile Mode) -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">

        <a href="#" class="text-black shadow-inner hover:bg-gray-700 hover:text-white block px-3 py-2 text-base font-medium">Home</a>

        <a href="#" class="text-black hover:bg-gray-700 hover:text-white block px-3 py-2 text-base font-medium">Artikel</a>

        <a href="#" class="text-black hover:bg-gray-700 hover:text-white block px-3 py-2 text-base font-medium">Layanan</a>
      </div>
    </div>
  </nav>
