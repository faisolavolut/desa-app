@extends('layouts.main')
@section('title', 'Desa')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">UMKM</h1>
        <div class="-mx-px grid grid-cols-2 border-l border-t border-gray-200 sm:mx-0 md:grid-cols-3 lg:grid-cols-4"
            style="z-index: -1">
            @foreach ($products as $product)
                <div class="group relative border-b border-r border-gray-200 p-4 sm:p-6">
                    <div
                        class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-200 group-hover:opacity-75 h-44 max-h-44">
                        <img src="{{ site_image($product->product_photo) }}" alt="TODO"
                            class="h-full w-full object-cover object-center">
                    </div>

                    <div class="pb-4 pt-10 text-center">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="/detail-produk/{{ $product->id }}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $product->product_name }}
                            </a>
                        </h3>
                        <div class="mt-3 flex flex-col items-center">
                            <p class="mt-1 text-sm text-gray-900">{{ $product->short_description }}</p>
                        </div>
                        <p class="mt-4 text-base font-medium text-gray-500">{{ $product->address }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $products->links() }}
        </div>
    </div>
@endsection
