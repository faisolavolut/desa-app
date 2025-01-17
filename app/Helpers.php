<?php

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
