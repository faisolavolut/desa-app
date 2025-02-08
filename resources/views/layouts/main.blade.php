<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#C04103',
                    }
                }
            }
        }
    </script>
    @vite('resources/css/app.css')
    <style>
        .content-rich a {
            text-decoration: underline;
            color: rgb(59 130 246);
        }
    </style>
</head>

<body>
    <div class="relative w-screen h-screen flex flex-col overflow-y-scroll">
        <div class="absolute top-0 left-0 w-full h-full">
            <div class=" w-full h-full flex flex-col">
                <div class="flex flex-col relative">
                    @include('components.navbar-desa')
                    @yield('content')

                    <footer class="bg-white border-t border-gray-300">
                        <div class="container mx-auto px-4 py-6">
                            <!-- Bagian Navigasi -->
                            <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                                <!-- Navigasi -->
                                <ul class="flex space-x-6 text-sm font-medium text-gray-600">
                                    <li><a href="#" class="hover:text-gray-800">Beranda</a></li>
                                    <li><a href="#" class="hover:text-gray-800">Layanan</a></li>
                                    <li><a href="#" class="hover:text-gray-800">FAQs</a></li>
                                    <li><a href="#" class="hover:text-gray-800">Kontak Kami</a></li>
                                </ul>
                                <!-- Media Sosial -->
                                <div class="flex space-x-4">
                                    <a href="#" class="text-gray-600 hover:text-gray-800">
                                        <i class="fab fa-facebook"></i> <!-- Ganti dengan ikon -->
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-gray-800">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-gray-800">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-gray-800">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a href="#" class="text-gray-600 hover:text-gray-800">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Copyright -->
                            <div class="mt-4 text-center text-sm text-gray-500">
                                <p>© 2024 Kelurahan Gedongombo</p>
                                <p>
                                    <a href="#" class="hover:text-gray-800">Kebijakan Privasi</a> |
                                    <a href="#" class="hover:text-gray-800">Syarat dan Ketentuan</a> |
                                    <a href="#" class="hover:text-gray-800">Kebijakan Cookie</a>
                                </p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
