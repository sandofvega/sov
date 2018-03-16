<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show Home Page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Download CV
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse\
     */
    public function downloadCV()
    {
        $cvPath = storage_path('app/public/home/YasinCV.pdf');
        return response()->download($cvPath);
    }
}