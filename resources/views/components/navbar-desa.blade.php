<nav class="bg-white shadow sticky top-0" style="z-index: 10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span> <svg class="block h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-shrink-0 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                        <path fill="#5547c8"
                            d="M12 6c-2.67 0-4.33 1.33-5 4c1-1.33 2.17-1.83 3.5-1.5c.76.19 1.31.74 1.91 1.35c.98 1 2.09 2.15 4.59 2.15c2.67 0 4.33-1.33 5-4c-1 1.33-2.17 1.83-3.5 1.5c-.76-.19-1.3-.74-1.91-1.35C15.61 7.15 14.5 6 12 6m-5 6c-2.67 0-4.33 1.33-5 4c1-1.33 2.17-1.83 3.5-1.5c.76.19 1.3.74 1.91 1.35C8.39 16.85 9.5 18 12 18c2.67 0 4.33-1.33 5-4c-1 1.33-2.17 1.83-3.5 1.5c-.76-.19-1.3-.74-1.91-1.35C10.61 13.15 9.5 12 7 12" />
                    </svg>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                    <a href="/"
                        class="inline-flex items-center border-b-2 border-primary px-1 pt-1 text-sm font-medium text-gray-900">Beranda</a>
                    <a href="/#profil"
                        class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Profil
                        Kelurahan</a>
                    <a href="/umkm"
                        class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                        UMKM</a>
                    <a href="/#contact"
                        class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Kontak</a>
                </div>
            </div>
            <div class="flex items-center flex-row gap-x-2">
                <div class="flex items-center space-x-4">
                    @auth
                        <!-- Avatar Dropdown -->
                        <div class="relative">
                            <button onclick="toggleDropdown()"
                                class="focus:outline-none rounded-full bg-gray-500 flex flex-row items-center justify-center">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://ui-avatars.com/api/?name=a&color=FFFFFF&background=09090b" alt="Avatar">
                            </button>
                            <div id="dropdown"
                                class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg overflow-hidden">
                                <div
                                    class="flex flex-row gap-x-1  items-center block px-4 py-2 text-gray-700 hover:bg-gray-100 border-b border-gray-200 cursor-pointer">
                                    <svg class="fi-dropdown-header-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-5.5-2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 12a5.99 5.99 0 0 0-4.793 2.39A6.483 6.483 0 0 0 10 16.5a6.483 6.483 0 0 0 4.793-2.11A5.99 5.99 0 0 0 10 12Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ Auth::user()->name }}
                                </div>
                                <a href="/app/dashboard"
                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 border-b border-gray-200 cursor-pointer">
                                    Dashboard
                                </a>
                                <form method="POST" action="{{ route('logout') }}" class="px-4 py-2">
                                    @csrf
                                    <button type="submit" class="text-red-500 hover:text-red-700">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <!-- Login & Register Buttons -->
                        <a href="/app/register"
                            class="relative inline-flex px-4 items-center gap-x-1.5 rounded-full bg-primary py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                            Daftar
                        </a>
                        <a href="/app/login"
                            class="relative inline-flex items-center gap-x-1.5 rounded-full bg-white px-4 py-2 text-sm font-semibold text-primary border-2 border-primary shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Masuk
                        </a>
                    @endauth
                </div>
            </div>
        </div>
</nav>
<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>
