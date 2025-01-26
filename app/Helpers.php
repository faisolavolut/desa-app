<?php

use Illuminate\Support\Str;

if (!function_exists('removeStoragePrefix')) {
    function removeStoragePrefix(string $url): string
    {
        // Periksa apakah URL memiliki prefix "/storage"
        if (str_starts_with($url, '/storage')) {
            return substr($url, strlen('/storage'));
        }
        return $url; // Jika tidak ada prefix "/storage", kembalikan URL asli
    }
}
if (!function_exists('site_image')) {
    /**
     * Generate a site URL based on the input path.
     *
     * @param string $path
     * @return string
     */
    function site_image(?string $path): ?string
    {
        if (is_null($path)) {
            return null;
        }
        if (Str::startsWith($path, ['http://', 'https://', 'www.'])) {
            return $path;
        }
        return rtrim(config('app.url'), '/') . '/storage/' . ltrim($path, '/');
    }
}
