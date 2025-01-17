@extends('layouts.main')
@section('title', 'Desa')
@section('content')
    <div class="bg-cover bg-center h-screen" style="background-image: url('{{ $heroSection->background_image }}');">
        <div class="flex flex-col items-center justify-center h-full text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $heroSection->title }}</h1>
            <p class="text-lg md:text-xl mb-6">
                {{ $heroSection->description }}
            </p>
            <div class="flex space-x-4">
                <a href="#"
                    class="relative inline-flex px-4 items-center gap-x-1.5 rounded-full bg-primary py-2 text-sm font-semibold text-white shadow-sm">
                    Lebih Lanjut
                </a>
                <a href="#"
                    class="border border-primary relative inline-flex px-4 items-center gap-x-1.5 rounded-full py-2 text-sm font-semibold text-primary shadow-sm ">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Galeri</h2>
            <p class="text-gray-600 mb-8">Galeri UMKM Desa</p>

            <!-- Grid Galeri -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($galleries as $gallery)
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $gallery->title }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-12 bg-white" id="profil">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Gambar -->
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ $section->image_url }}" alt="Profil Kelurahan" class="w-full h-full object-cover">
                </div>
                <!-- Konten -->
                <div>
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold mb-2">Profil Kelurahan</h3>
                        <p class="text-gray-600">{!! $section->profile_kelurahan !!}</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold mb-2">Profil UMKM</h3>
                        <p class="text-gray-600">{!! $section->profile_umkm !!}</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Program CSR</h3>
                        <p class="text-gray-600">{!! $section->program_csr !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program CSR Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-orange-50 rounded-lg p-6 shadow-md flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-semibold mb-2">Program CSR</h3>
                    <p class="text-gray-600">Bersama-sama membangun masa depan yang lebih baik melalui program tanggung
                        jawab sosial kami. Yuk, ikut berkontribusi!</p>
                </div>
                <a href="/app/register"
                    class="px-6 py-3 bg-primary text-white font-semibold rounded-full shadow-md transition duration-300">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Daftar Berita -->
                <div>
                    @foreach ($news as $item)
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $item->title }}</h3>
                            <div class="text-gray-600">{!! $item->description !!}</div>
                        </div>
                    @endforeach
                </div>
                <!-- Gambar Berita -->
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ $featuredImage }}" alt="Berita Gambar" class="w-full h-80 object-cover">
                </div>
            </div>
        </div>
    </section>
    <!-- UMKM Of The Week Section -->
    <section class="py-12 bg-orange-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Deskripsi -->
                <div>
                    <h2 class="text-3xl font-bold mb-4">UMKM Of The Week</h2>
                    <p class="text-gray-600 mb-6">
                        Kenali usaha mikro lokal yang inspiratif minggu ini! Dukung mereka dalam menghadirkan produk terbaik
                        untuk masyarakat.
                    </p>
                    <a href="/app/register"
                        class="relative inline-flex px-4 items-center gap-x-1.5 rounded-full bg-primary py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        Daftar
                    </a>
                </div>
                <!-- Daftar UMKM -->
                <div class="flex flex-col gap-y-4">
                    @foreach ($umkmOfTheWeek as $index => $umkm)
                        <div
                            class="flex items-center justify-between p-4 shadow-md rounded-lg 
            {{ $index % 2 == 0 ? 'bg-white' : 'bg-orange-100' }}">
                            <div>
                                <h3 class="text-xl font-semibold">{{ $umkm->name }}</h3>
                                <p class="text-gray-600">{{ $umkm->description }}</p>
                            </div>
                            <span
                                class="text-4xl font-bold 
                {{ $index % 2 == 0 ? 'text-gray-300' : 'text-orange-400' }}">
                                {{ str_pad($umkm->position, 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white" id="contact">
        <div class="container mx-auto px-4">
            @if ($contact)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Informasi Kontak -->
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Kontak Kami</h2>
                        <p class="text-gray-600">{{ $contact->description }}</p>
                    </div>
                    <!-- Detail Kontak -->
                    <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div class="flex items-start  flex flex-row gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#f97316"
                                    d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold">Email</h3>
                                <p class="text-gray-600">{{ $contact->email ?? 'Email tidak tersedia' }}</p>
                            </div>
                        </div>
                        <!-- Telepon -->
                        <div class="flex items-start  flex flex-row gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#f97316"
                                    d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.28-.28.67-.36 1.02-.25c1.12.37 2.32.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold">Telepon</h3>
                                <p class="text-gray-600">{{ $contact->phone ?? 'Telepon tidak tersedia' }}</p>
                            </div>
                        </div>
                        <!-- Kantor -->
                        <div class="flex items-start flex flex-row gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="#f97316"
                                    d="M10.115 21.811c.606.5 1.238.957 1.885 1.403a27 27 0 0 0 1.885-1.403a28 28 0 0 0 2.853-2.699C18.782 16.877 21 13.637 21 10a9 9 0 1 0-18 0c0 3.637 2.218 6.876 4.262 9.112a28 28 0 0 0 2.853 2.7M12 13.25a3.25 3.25 0 1 1 0-6.5a3.25 3.25 0 0 1 0 6.5" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold">Kantor</h3>
                                <p class="text-gray-600">
                                    {{ $contact->address ?? 'Alamat tidak tersedia' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <p>No contact data available.</p>
            @endif
        </div>
    </section>
    <section class="px-2 relative h-[450px] flex-grow">
        <iframe class="absolute top-0 left-0 w-full h-full z-[-1]"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26644.898346843096!2d112.06422130141823!3d-6.915950735745291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7797c0eb6f8371%3A0xb7ec1669a4cac834!2sGedongombo%2C%20Kec.%20Semanding%2C%20Kabupaten%20Tuban%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1736167029412!5m2!1sid!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
