<?php

namespace App\Http\Controllers;

use App\Models\Brands;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brands::select('name', 'logo', 'url')
            ->get()
            ->shuffle();

        return view('home', compact('brands'));
    }

    public function downloadCV()
    {
        $cvPath = storage_path('app/public/home/YasinCV.pdf');
        return response()->download($cvPath);
    }
}