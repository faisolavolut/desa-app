@extends('layouts.main')
@section('title', 'Desa')

@section('content')
    <div class="container mx-auto py-8">
        <div class="flex flex-row gap-4 px-2">
            <!-- Gambar Produk -->
            <div class=" flex flex-col items-start px-2">
                <div class="rounded-lg w-96 overflow-hidden shadow-lg">
                    <img src="{{ '/storage/' . $product->product_photo }}" alt="Gambar Produk"
                        class="w-96 h-full object-cover">
                </div>
                <div class="w-full">
                    @if (auth()->check())
                        <button
                            class="flex flex-grow w-full flex-row items-center gap-x-2 justify-center  py-2 px-4 text-white rounded-md bg-primary font-semibold mt-2"
                            onclick="openSupportModal()"> <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" viewBox="0 0 24 24">
                                <path fill="#f8f8ff" fill-rule="evenodd"
                                    d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z" />
                            </svg> Support</button>
                    @else
                        <a href="{{ route('login') }}"
                            class="flex flex-row w-full  flex-grow items-center gap-x-2 justify-center text-center py-2 px-4 text-white rounded-md bg-primary font-semibold mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="#f8f8ff" fill-rule="evenodd"
                                    d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z" />
                            </svg> Support
                        </a>
                    @endif
                </div>


            </div>

            <!-- Detail Produk -->
            <div class="flex flex-grow flex-col">
                <h1 class="text-2xl font-bold mb-4">{{ $product->product_name }}</h1>
                <div class="flex items-center mb-4">
                    <span class="text-gray-700 text-sm font-bold">{{ $product->short_description }}</span>
                </div>
                <!-- Tab Navigasi -->
                <div>
                    <ul class="flex border-b mb-4">
                        <li class="mr-4">
                            <button
                                class="py-2 px-4 text-primary border-b-2 hover:text-primary border-primary font-semibold"
                                id="tab-profil" onclick="switchTab('profil')">Profil UMKM</button>
                        </li>
                        <li class="mr-4">
                            <button class="py-2 px-4 text-gray-500 hover:text-primary" id="tab-katalog"
                                onclick="switchTab('katalog')">Katalog</button>
                        </li>
                        <li class="mr-4">
                            <button class="py-2 px-4 text-gray-500 hover:text-primary" id="tab-dokumentasi"
                                onclick="switchTab('dokumentasi')">Dokumentasi</button>
                        </li>
                        <li class="mr-4">
                            <button class="py-2 px-4 text-gray-500 hover:text-primary" id="tab-fasilitas"
                                onclick="switchTab('fasilitas')">Fasilitas</button>
                        </li>
                        <li class="mr-4">
                            <button class="py-2 px-4 text-gray-500 hover:text-primary" id="tab-rab"
                                onclick="switchTab('rab')">RAB</button>
                        </li>
                        <li>
                            <button class="py-2 px-4 text-gray-500 hover:text-primary" id="tab-berita"
                                onclick="switchTab('berita')">Berita</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div id="content-profil" class="tab-content">
                        <p class="text-gray-600">{{ $product->umkm_profile }}</p>
                    </div>
                    <div id="content-katalog" class="tab-content hidden">
                        <div class="-mx-px grid grid-cols-2 border-l border-t border-gray-200 sm:mx-0 md:grid-cols-3 lg:grid-cols-4"
                            style="z-index: -1">
                            @foreach ($product->catalogs as $catalog)
                                <div class="group relative border-b border-r border-gray-200 p-2">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-200 group-hover:opacity-75">
                                        <img src="{{ asset('storage/' . $catalog->file_path) }}" alt="TODO"
                                            class="h-full w-full object-cover object-center">
                                    </div>

                                    <div class="pb-4 pt-4 text-center flex flex-col gap-y-2">
                                        <div class="text-sm font-medium text-gray-900">
                                            <div>
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $catalog->catalog_name }}
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center">
                                            <p class="mt-1 text-sm text-gray-900">{{ $catalog->catalog_description }}</p>
                                        </div>
                                        <p class="text-base font-medium text-gray-500">
                                            Rp{{ number_format($catalog->price, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="content-dokumentasi" class="tab-content hidden">
                        <div class="-mx-px grid grid-cols-2  sm:mx-0 " style="z-index: -1">
                            @foreach ($product->documentations as $documentation)
                                <div class="group relative border-b border-r border-gray-200 p-2">
                                    <div
                                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-200 group-hover:opacity-75">
                                        <img src="{{ asset('storage/' . $documentation->file_path) }}" alt="TODO"
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="content-fasilitas" class="tab-content hidden">
                        <p class="text-gray-600">{!! $product->facilities !!}</p>
                    </div>
                    <div id="content-rab" class="tab-content hidden">
                        <p class="text-gray-600">{!! $product->rab !!}</p>
                    </div>
                    <div id="content-berita" class="tab-content hidden">
                        <div class="-mx-px flex flex-col">
                            @foreach ($product->news as $news)
                                <div>
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full flex flex-row items-center justify-center overflow-hidden rounded-lg ">
                                        <img src="{{ asset('storage/' . $documentation->file_path) }}" alt="TODO"
                                            class="h-full w-80 object-cover object-center rounded-lg">
                                    </div>
                                    <strong>{{ $news->news_title }}</strong>
                                    <p>{!! $news->news_content !!}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="supportModal" class="fixed inset-0 bg-black bg-opacity-50 flex flex-row justify-center items-center hidden"
        style="z-index: 99">
        <div class="bg-white p-6 rounded shadow-lg w-96 flex flex-col gap-y-2">
            <div class="flex flex-row justify-between items-center">
                <h2 class="text-lg font-semibold">Dukung Produk</h2><button type="button"
                    class="bg-transparent text-white p-1 rounded" onclick="closeSupportModal()"><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="m5 19l7-7m0 0l7-7m-7 7L5 5m7 7l7 7" />
                    </svg></button>
            </div>

            <form id="supportForm" class="flex flex-col gap-y-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <!-- Quantity -->
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Jumlah</label>
                    <div class="mt-2">
                        <input type="number" id="quantity" name="quantity"
                            class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Quantity">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Total Bantuan
                        (Rp)</label>
                    <div class="mt-2 flex rounded-md shadow-sm">
                        <div class="relative flex flex-grow items-stretch focus-within:z-10">
                            <div
                                class="text-gray-400 pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                Rp
                            </div>
                            <input type="number" id="total" name="total"
                                class="block w-full  rounded-md border-0 pr-4 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="John Smith">
                        </div>
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                    <div class="mt-2 flex rounded-md shadow-sm">
                        <div class="relative flex flex-grow items-stretch focus-within:z-10">
                            <textarea id="notes" name="notes"
                                class="block w-full  rounded-md border-0 p-4 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="John Smith"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Submit -->
                <button
                    class="flex flex-grow w-full flex-row items-center gap-x-2 justify-center  py-2 px-4 text-white rounded-md bg-primary font-semibold mt-2"
                    type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        viewBox="0 0 24 24">
                        <path fill="#f8f8ff" fill-rule="evenodd"
                            d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z" />
                    </svg> Support</button>

            </form>
        </div>
    </div>
    <script>
        function switchTab(tab) {
            document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));
            document.querySelectorAll('button').forEach(btn => {
                btn.classList.remove('text-primary', 'border-primary', 'font-semibold', 'border-b-2');
                btn.classList.add('text-gray-500');
            });
            document.getElementById(`content-${tab}`).classList.remove('hidden');
            document.getElementById(`tab-${tab}`).classList.add('text-primary', 'border-primary', 'font-semibold',
                'border-b-2');
        }

        function openSupportModal() {
            document.getElementById('supportModal').classList.remove('hidden');
        }

        function closeSupportModal() {
            document.getElementById('supportModal').classList.add('hidden');
        }

        document.getElementById('supportForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const response = await fetch('{{ route('support.store') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData,
            });
            if (response.ok) {
                alert('Support berhasil ditambahkan!');
                closeSupportModal();
            } else {
                alert('Terjadi kesalahan, coba lagi.');
            }
        });
    </script>
@endsection
