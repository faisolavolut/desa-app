<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomepageContact;
use App\Models\HomepageGallery;
use App\Models\HomepageHeroSection;
use App\Models\HomepageNews;
use App\Models\HomepageSection;
use App\Models\HomepageUmkmWeek;

class HomepageController extends Controller
{
    public function index()
    {
        // Ambil data dari masing-masing tabel
        $contact = HomepageContact::first(); // Ambil data pertama
        $galleries = HomepageGallery::take(3)->get(); // Ambil 3 data
        $heroSection = HomepageHeroSection::first(); // Ambil data pertama
        $news = HomepageNews::latest()->take(3)->get(); // Ambil 3 data terbaru
        $section = HomepageSection::first(); // Ambil data pertama
        $featuredImage = $news->first()->image_url ?? 'https://via.placeholder.com/600x400'; // Gambar berita pertama atau placeholder
        $umkmOfTheWeek = HomepageUmkmWeek::orderBy('position', 'asc')->take(4)->get();

        // Kirim data ke view
        return view('homepage.home', compact('featuredImage', 'contact', 'galleries', 'heroSection', 'news', 'section', 'umkmOfTheWeek'));
    }
}
